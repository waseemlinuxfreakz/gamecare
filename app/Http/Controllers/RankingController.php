<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ranking;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Services\PayUService\Exception;

class RankingController extends Controller
{
    public function getList()
    {
        try {
            $withHearders = ['accept' => 'application/json', 'Authorization' => ' Bearer 947e0d8b-c013-4c57-a2b4-c327a74ef994'];
            $regions=['EU','SA','Oceania'];
            foreach($regions as $region_val):
            $response = Http::withHeaders($withHearders)->get('https://open.faceit.com/data/v4/rankings/games/csgo/regions/Oceania?offset=0&limit=20');
            Log::info($response);
            if ($response->failed()):

                $response = ['error' => 404, "message" => "Some thing Went Wrong"];
            else:
                $result = $response->json();
                if (count($result['items']) > 0):
                    foreach ($result['items'] as $key => $value) {
                        $RankingFind=Ranking::where('player_id', $value['player_id'])->count();
                    if($RankingFind>0):
                        Ranking::where('player_id', $value['player_id'])->update([
                                'player_id' => $value['player_id'],
                                'nickname' => $value['nickname'],
                                'country' => $value['country'],
                                'faceit_elo' => $value['faceit_elo'],
                                'game_skill_level' => $value['game_skill_level'],
                                'position' => $value['position'],
                                'region' => $region_val,
                            ]);
                    else:
                        $Ranking = Ranking::create([
                            'player_id' => $value['player_id'],
                            'nickname' => $value['nickname'],
                            'country' => $value['country'],
                            'faceit_elo' => $value['faceit_elo'],
                            'game_skill_level' => $value['game_skill_level'],
                            'position' => $value['position'],
                            'region' => $region_val,
                        ]);
                        

                    endif;
                    }

                endif;
            endif;
        endforeach;
        } catch (\Exception $e) {
           return $response = ['error' => $e->getMessage(), "message" => "Api not working"];
            Log::info($e->getMessage());

        }
    }
}
