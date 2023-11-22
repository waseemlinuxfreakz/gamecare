<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Services\PayUService\Exception;


class Championships extends Controller
{
    public function getList()
    {
        try {
            $withHearders = ['accept' => 'application/json', 'Authorization' => ' Bearer 947e0d8b-c013-4c57-a2b4-c327a74ef994'];

            $response = Http::withHeaders($withHearders)->get('https://open.faceit.com/data/v4/championships/14c47d2a-51ea-4746-8a34-baf85af11757/matches?type=all&offset=0&limit=20');
            Log::info($response);
            
            if ($response->failed()):

                $response = ['error' => 404, "message" => "Some thing Went Wrong"];
            else:
                $result = $response->json();
                if (count($result['items']) > 0):
                    foreach ($result['items'] as $key => $value) {
                        $ChampionshipFind=Championship::where('championship_id', $value['championship_id'])->count();
                    if($ChampionshipFind>0):
                            Championship::where('championship_id', $value['championship_id'])->update([
                                'cover_image' => $value['cover_image'],
                                'name' => $value['name'],
                                'background_image' => $value['background_image'],
                                'avatar' => $value['avatar'],
                                'organizer_id' => $value['organizer_id'],
                                'description' => $value['description'],
                                'type' => $value['type'],
                                'status' => $value['status'],
                                'game_id' => $value['game_id'],
                                'region' => $value['region'],
                                'featured' => $value['featured'],
                                'subscription_start' => $value['subscription_start'],
                                'subscription_end' => $value['subscription_end'],
                                'checkin_start' => $value['checkin_start'],
                                'checkin_clear' => $value['checkin_clear'],
                                'championship_start' => $value['championship_start'],
                                'slots' => $value['slots'],
                                'current_subscriptions' => $value['current_subscriptions'],
                                'anticheat_required' => $value['anticheat_required'],
                                'rules_id' => $value['rules_id'],
                                'substitution_configuration' => json_encode($value['substitution_configuration']),
                                'join_checks' => json_encode($value['join_checks']),
                                'full' => $value['full'],
                                'checkin_enabled' => $value['checkin_enabled'],
                                'total_rounds' => $value['total_rounds'],
                                'schedule' => json_encode($value['schedule']),
                                'total_groups' => $value['total_groups'],
                                'subscriptions_locked' => $value['subscriptions_locked'],
                                'seeding_strategy' => $value['seeding_strategy'],
                                'faceit_url' => $value['faceit_url'],
                                'prizes' => json_encode($value['prizes']),
                                'total_prizes' => $value['total_prizes'],
                                'stream' => json_encode($value['stream']),
                            ]);
                    else:
                        $Championship = Championship::create([
                            'championship_id' => $value['championship_id'],
                            'cover_image' => $value['cover_image'],
                            'name' => $value['name'],
                            'background_image' => $value['background_image'],
                            'avatar' => $value['avatar'],
                            'organizer_id' => $value['organizer_id'],
                            'description' => $value['description'],
                            'type' => $value['type'],
                            'status' => $value['status'],
                            'game_id' => $value['game_id'],
                            'region' => $value['region'],
                            'featured' => $value['featured'],
                            'subscription_start' => $value['subscription_start'],
                            'subscription_end' => $value['subscription_end'],
                            'checkin_start' => $value['checkin_start'],
                            'checkin_clear' => $value['checkin_clear'],
                            'championship_start' => $value['championship_start'],
                            'slots' => $value['slots'],
                            'current_subscriptions' => $value['current_subscriptions'],
                            'anticheat_required' => $value['anticheat_required'],
                            'rules_id' => $value['rules_id'],
                            'substitution_configuration' => json_encode($value['substitution_configuration']),
                            'join_checks' => json_encode($value['join_checks']),
                            'full' => $value['championship_id'],
                            'checkin_enabled' => $value['checkin_enabled'],
                            'total_rounds' => $value['total_rounds'],
                            'schedule' => json_encode($value['schedule']),
                            'total_groups' => $value['total_groups'],
                            'subscriptions_locked' => $value['subscriptions_locked'],
                            'seeding_strategy' => $value['seeding_strategy'],
                            'faceit_url' => $value['faceit_url'],
                            'prizes' => json_encode($value['prizes']),
                            'total_prizes' => $value['total_prizes'],
                            'stream' => json_encode($value['stream']),
                        ]);
                        

                    endif;
                    }

                endif;
            endif;
        } catch (\Exception $e) {
           return $response = ['error' => $e->getMessage(), "message" => "Bot not working"];
            Log::info($e->getMessage());

        }
    }
}
