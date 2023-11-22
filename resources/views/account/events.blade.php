@extends('layouts.main')
@section('title','Manage Account')
@section('content')
<!-- Account details section start -->
<section class="latest_account_page_wrap ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page_heading">
                    <h2> <span>HI,</span> {{auth()->user()->name}}</h2>
                </div>
            </div>
            <!-- details info -->
            <div class="account-details-outer">
                <x-account.sidebar />

                <div class="right_side_inner">
                    <div>


                        <div class="no_team_area">
                            <h3>You have not created any events yet</h3>
                            <p>All system messages and invitations to teams or tournaments will be sent here</p>
                            <a data-bs-toggle="modal" data-bs-target="#CreateEvent" class="btn save_btn send-email-btn">Create event</a>
                        </div>
                    
                    
                        <div class="event_registration_area">
                            <h3>Events you are registered for</h3>
                            <p>At the moment you are not registered for any event.</p>
                        </div>
                    
                    
                        <div class="tourament_list">
                            <div class="month_year">
                                <span>Jul</span> 2023
                            </div>
                    
                            <div class="month_day">
                                04
                            </div>
                    
                            <div class="tourament_name_subhead new_top_unregister">
                                <h3><a href="#">SKS 2023 Summer</a></h3>
                                <p>5v5 Tournament</p>
                            </div>
                    
                            <div class="participate_users">
                                <div class="user_list">
                                    <span class="users_counter">8+ </span>
                                </div>
                            </div>
                    
                            <div class="tourament_prize_pool">
                                $3242
                                <span>Prize Pool</span>
                            </div>
                    
                            <div class="tourament_arrow">
                                <a data-bs-toggle="modal" data-bs-target="#UnRegister_tournamement" class="unregister_btn"
                                    href="#">unregister</a>
                            </div>
                        </div>
                    
                        <div class="event_tournament in_account_page">
                            <div class="top_feature_matches">
                                <div class="left_top_f_left">
                                    <h2>Available Tournaments</h2>
                                </div>
                                <div class="left_top_f_right">
                                    <div class="match_search">
                                        <form>
                                            <div class="input_field">
                                                <input type="text" placeholder="Search">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="list_t_account">
                                <div class="date_wise_results">
                                    <div class="date_text">
                                        <img src="images/calendar.svg" alt=""> Jul 2023
                                    </div>
                                </div>
                    
                    
                                <div class="tourament_list">
                                    <div class="month_year">
                                        <span>Jul</span> 2023
                                    </div>
                    
                                    <div class="month_day">
                                        04
                                    </div>
                    
                                    <div class="tourament_name_subhead">
                                        <h3><a data-bs-toggle="modal" data-bs-target="#SummerTournament" href="#">SKS
                                                2023 Summer</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>
                    
                                    <div class="participate_users">
                                        <div class="user_list">
                                            <span class="users_counter">8+ </span>
                                        </div>
                                    </div>
                    
                                    <div class="tourament_prize_pool">
                                        $3242
                                        <span>Prize Pool</span>
                                    </div>
                    
                                    <div class="tourament_arrow">
                                        <a class="register_t_match disabled" href="#">Register</a>
                                    </div>
                                </div>
                    
                    
                                <div class="tourament_list">
                    
                                    <div class="month_year">
                                        <span>Jul</span> 2023
                                    </div>
                    
                                    <div class="month_day">
                                        04
                                    </div>
                    
                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">SKS 2023 Summer</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>
                    
                                    <div class="participate_users">
                                        <div class="user_list">
                                            <span class="users_counter">8+ </span>
                                        </div>
                                    </div>
                    
                                    <div class="tourament_prize_pool">
                                        $3242
                                        <span>Prize Pool</span>
                                    </div>
                    
                                    <div class="tourament_arrow">
                                        <a class="register_t_match disabled" href="#">Register</a>
                                    </div>
                                </div>
                    
                                <div class="tourament_list">
                    
                                    <div class="month_year">
                                        <span>Jul</span> 2023
                                    </div>
                    
                                    <div class="month_day">
                                        04
                                    </div>
                    
                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">SKS 2023 Summer</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>
                    
                                    <div class="participate_users">
                                        <div class="user_list">
                                            <span class="users_counter">8+ </span>
                                        </div>
                                    </div>
                    
                                    <div class="tourament_prize_pool">
                                        $3242
                                        <span>Prize Pool</span>
                                    </div>
                    
                                    <div class="tourament_arrow">
                                        <a class="register_t_match disabled" href="#">Register</a>
                                    </div>
                                </div>
                    
                                <div class="tourament_list">
                    
                                    <div class="month_year">
                                        <span>Jul</span> 2023
                                    </div>
                    
                                    <div class="month_day">
                                        04
                                    </div>
                    
                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">SKS 2023 Summer</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>
                    
                                    <div class="participate_users">
                                        <div class="user_list">
                                            <span class="users_counter">8+ </span>
                                        </div>
                                    </div>
                    
                                    <div class="tourament_prize_pool">
                                        $3242
                                        <span>Prize Pool</span>
                                    </div>
                    
                                    <div class="tourament_arrow">
                                        <a data-bs-toggle="modal" data-bs-target="#Register_tournamement" class="register_t_match"
                                            href="#">Register</a>
                                    </div>
                                </div>
                    
                    
                            </div>
                    
                        </div>
                    
                    </div>
                    


                </div>









            </div>
        </div>
    </div>
    </div>
    </div>
</section>

@endsection