<?php

namespace App\Http\Controllers;

use App\Events\Bid;
use App\Models\Bid as ModelsBid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BidsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bids = ModelsBid::all();
        return view('dashboard.bids.index', compact('bids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //code...
            //throw $th;
            $validator = Validator::make($request->only('biderName', 'biderEmail', 'biderPrice', 'auction_id', 'art_id'), [
                'biderName' =>  ['required', 'min:2', 'max:50', 'string'],
                'biderEmail' => ['required', 'email'],
                'biderPrice' => ['required', 'numeric'],
                'auction_id' => 'required',
                'art_id' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('errors', $validator->errors());
            }

            $verify_bid = DB::table('bids')
                ->where('auction_id', $request->auction_id)
                ->where('art_id', $request->art_id)
                ->orderBy('biderPrice', 'desc')
                ->first();

            if ($verify_bid->biderPrice >= $request->biderPrice) {
                return redirect()->back()->with('errors', 'The minimum bid for this art is:' . (int) ($verify_bid->biderPrice + 50));
            }
            // event(new Bid($request->input('biderEmail')));
            DB::table('bids')->insert([
                'biderName' =>  $request->biderName,
                'biderEmail' => $request->biderEmail,
                'biderPrice' => $request->biderPrice,
                'auction_id' => $request->auction_id,
                'art_id' => $request->art_id,
            ]);

            $email = $request->biderEmail;
            $name = $request->biderName;
            $subject = "Artfric - Bid";
            Mail::send(
                'mail.bidding',
                ['name' => $request->biderName],
                function ($mail) use ($email, $name, $subject) {
                    $mail->from(getenv('MAIL_FROM_ADDRESS'), "Artfric");
                    $mail->to($email, $name);
                    $mail->subject($subject);
                }
            );

            return redirect()->back()->with('status', 'You bid on this auction successfully, check email.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
