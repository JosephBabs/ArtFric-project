<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Auction;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arts = DB::table('arts')->where('featured', 1)->get();
        $artists = DB::table('artists')->where('featured', 1)->get();
        $events = DB::table('events')->where('featured', 1)->get();
        return view('welcome', compact('events', 'arts', 'artists'));
    }

    public function showArticles()
    {
        $articles = DB::table('posts')
            ->join('post_categories', 'posts.category_id', 'post_categories.id')
            ->join('users', 'posts.user_id', 'users.id')
            ->where('is_published', true)
            ->get(['posts.*', 'post_categories.name as category', 'users.name']);
        return view('fronts.blog.index', compact('articles'));
    }

    public function showSingleArticle(string $id)
    {
        $article = DB::table('posts')
            ->join('post_categories', 'posts.category_id', 'post_categories.id')
            ->join('users', 'posts.user_id', 'users.id')
            ->where('is_published', true)
            ->where('posts.id', $id)->first(['posts.*', 'post_categories.name as category', 'users.*']);

        return view('fronts.blog.show_article', compact('article'));
    }

    public function ourArt()
    {
        $categories = Category::all();
        $cat_medievals = Category::where('name', 'Mediéval')->get();
        $cat_contemporains = Category::where('name', 'Contemporain')->get();
        $arts = DB::table('arts')->get();
        $artists = Artist::all();
        return view('our_arts', compact('categories', 'arts', 'artists', 'cat_medievals', 'cat_contemporains'));
    }

    public function template()
    {
        return view('template');
    }

    public function about()
    {

        return view('about');
    }

    public function contact()
    {

        return view('contact');
    }

    public function auctions()
    {
        $auctions = Auction::all();
        return view('our_auctions', compact('auctions'));
    }

    public function art_bid($art_id, $auction_id)
    {
        // dd($art_id);
        $art = DB::table('arts')->find($art_id);
        $auction = Auction::find($auction_id);

        $verify_bid = DB::table('bids')
            ->where('auction_id', $auction_id)
            ->where('art_id', $art_id)
            ->orderBy('biderPrice', 'desc')
            ->first();

        // Your specific Carbon date
        // $specificDate = Carbon::parse($auction->end);

        // Current date and time
        // $currentDate = Carbon::now();

        // Calculate the difference
        // $diff = $specificDate->diff($currentDate);

        // Output remaining time
        // echo "Remaining time: ";
        // echo $diff->format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds');

        return view('fronts.bids.show_article', compact('art', 'auction', 'verify_bid'));
    }
}
