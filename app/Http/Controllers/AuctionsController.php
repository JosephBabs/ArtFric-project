<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.auctions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $arts = DB::table('arts')->get();
        return view('dashboard.auctions.create', compact('arts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator =  Validator::make($request->all(), [
                'label' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
                'start' => ['required', 'string', 'max:255'],
                'end' => ['required', 'string', 'max:255'],
                'auctionPath' => 'required',
                'auctionPath' => 'file|mimes:jpeg,jpg,png,gif,PNG,JPG,JPEG',
                'arts' => ['required']
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('errors', $validator->errors());
            }

            $start = explode('T', $request->start)[0]. ' '.explode('T', $request->start)[1] .':20';
            $end = explode('T', $request->end)[0]. ' '.explode('T', $request->end)[1] .':20'; 
        //    dd($end);

            $path = $request->hasFile('auctionPath') ? $request->file('auctionPath')->store('auctionPaths', 'public') : null;
            $auction = Auction::create([
                'title' => $request->label,
                'description' => $request->description,
                'start' => $start,
                'end' => $end,
                'auctionPath' => $path
            ]);
            $auction->arts()->attach($request->arts);

            if ($auction) {
                return redirect()->back()->with('success', 'Auction created with success');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with(['errors' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $auction = DB::table('auctions')->where('id', $id)->first();
        // dd($auction->id);
        $arts = DB::table('arts')
        ->join('art_auction', 'arts.id', 'art_auction.art_id')
        ->join('auctions', 'art_auction.auction_id', 'auctions.id')
        ->where('art_auction.auction_id', $auction->id)->get(['arts.*']);
        return view('fronts.auctions.show', compact('auction', 'arts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
