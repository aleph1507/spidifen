<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $video = Video::where('lang', session('language'))->first();
//        $filename = $video ? asset(public_path() . '/videos/' . $video->dest) : null;
        $filename = $video ? asset('/videos/' . $video->dest) : null;
        return view('home')->with(compact('filename'));
//        $filename = $video ? $video->dest : null;
//        return $filename ? 'true' : 'false';
//        dd($filename);
//        $video = session('language') == 'french' ? asset(public_path('/videos/french_video')) : asset('dutch_video');
//        return view('home')->with(compact('video'));
    }
}
