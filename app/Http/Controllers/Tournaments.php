<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Services\PayUService\Exception;

class Tournaments extends Controller
{
    public function getList()
    {
        try {
            $withHearders = ['accept' => 'application/json', 'Authorization' => ' Bearer 947e0d8b-c013-4c57-a2b4-c327a74ef994'];

            $response = Http::withHeaders($withHearders)->get('https://open.faceit.com/data/v4/tournaments?game=csgo&offset=0&limit=1000');
            Log::info($response);
            if ($response->failed()):

                $response = ['error' => 404, "message" => "Some thing Went Wrong"];
            else:
                $result = $response->json();
                // return $result;
                // $finalResult = array();
                if (count($result['items']) > 0):
                    foreach ($result['items'] as $key => $tournamentData):
                        // if(date('Y',$tournamentData['started_at']) == date('Y')){
                        $tournament = Tournament::updateOrCreate(['tournament_id' => $tournamentData['tournament_id']],[
                            'name' => $tournamentData['name'],
                            'featured_image' => $tournamentData['featured_image'],
                            'game_id' => $tournamentData['game_id'],
                            'region' => $tournamentData['region'],
                            'status' => $tournamentData['status'],
                            'custom' => $tournamentData['custom'],
                            'invite_type' => $tournamentData['invite_type'],
                            'prize_type' => $tournamentData['prize_type'],
                            'total_prize' => $tournamentData['total_prize'],
                            'team_size' => $tournamentData['team_size'],
                            'min_skill' => $tournamentData['min_skill'],
                            'max_skill' => $tournamentData['max_skill'],
                            'match_type' => $tournamentData['match_type'],
                            'organizer_id' => $tournamentData['organizer_id'],
                            'whitelist_countries' => json_encode($tournamentData['whitelist_countries']),
                            'membership_type' => $tournamentData['membership_type'],
                            'number_of_players' => $tournamentData['number_of_players'],
                            'number_of_players_joined' => $tournamentData['number_of_players_joined'],
                            'number_of_players_checkedin' => $tournamentData['number_of_players_checkedin'],
                            'number_of_players_participants' => $tournamentData['number_of_players_participants'],
                            'anticheat_required' => $tournamentData['anticheat_required'],
                            'started_at' => $tournamentData['started_at'],
                            'subscriptions_count' => $tournamentData['subscriptions_count'],
                            'faceit_url' => $tournamentData['faceit_url'],
                        ]);
                        // }
                        // $finalResult[] = $tournament;
                    endforeach;

                endif;
            endif;
            // return $response;
        } catch (\Exception $e) {
           return $response = ['error' => $e->getMessage(), "message" => "Bot not working"];
            Log::info($e->getMessage());

        }
    }
}
