<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\Championship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    function events() {
       $Championship= Tournament::where('status','paid')->where('featured_image','!=','')->get();
       $ChampionshipAll= Tournament::where('status','paid')->get();
        return view('events',['Championship'=>$Championship,'ChampionshipAll'=>$ChampionshipAll]);
    }
    
    function events_info($championship_id) {

        //  $headers= [
        //     'Key_vKZOQskhSN' => '947e0d8b-c013-4c57-a2b4-c327a74ef994'
        // ];
        // $withHearders = ['accept' => 'application/json', 'Authorization' => ' Bearer 947e0d8b-c013-4c57-a2b4-c327a74ef994'];
       // $Championship = Http::withHeaders($withHearders)->get('https://open.faceit.com/data/v4/championships/'.$championship_id.'/matches?type=all&offset=0&limit=20');
      
        $Championships= Tournament::where('tournament_id',base64_decode($championship_id))->get();
        $Championship=$Championships[0];   
        return view('events_details',['Championship'=>$Championship]);
     }
    function dashboard() {
        return view('account_details');
    }
    function matches() {
        return view('matches');
    }
    function videos() {
        return view('videos');
    }
    function teams() {
        return view('teams');
    }
    function players() {
        return view('players');
    }
    function rankings() {
        return view('rankings');
    }
    function latest_news() {
        return view('latest-news');
    }
    function about() {
        return view('about');
    }
    function contact() {
        return view('contact');
    }
    
    public static function miliToTimestamp($format,$seconds)  {
        $seconds = $seconds / 1000;
        $formattedDateTime = date($format, $seconds);
        return $formattedDateTime;
        
    }
    public static function getTimeInMilli() {
        $timestampWithMicroseconds = microtime(true);
        $milliseconds = round($timestampWithMicroseconds * 1000);
        return $milliseconds;
    }
}