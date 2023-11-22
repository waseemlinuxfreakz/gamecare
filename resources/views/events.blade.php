@extends('layouts.main')
@section('title','Events')
@section('content')
<style>
    .t_name{
        max-height: 60px;

    }
</style>
<section class="team_banner event_banner_height">
    <div class="container2">
        <div class="row2">
            <div class="col-md-12">
                <div class="event_banner">
                    <div class="event_banner_img">
                        <img src="{{ url('images/event_banner.svg') }}" alt="">
                    </div>
                    <div class="event_banner_text_new">
                        <h3>CCS 2023<span> events</span></h3>
                        <p>
                            Discover exciting esports tournaments. Compete against the best, win prizes, and connect
                            with a vibrant community of CS enthusiasts. Stay updated with upcoming events and register
                            to showcase your skills in thrilling esports competitions.
                        </p>
                        <ul class="event_banner_list">
                            <li>
                                <a href="#"><img src="{{ url('images/trophy_img.svg') }}" alt=""> Main league 5v5 </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('images/trophy_img.svg') }}" alt=""> Pick up league 5v5 </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('images/trophy_img.svg') }}" alt=""> Woman league 2v2 </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="event_middle_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="recent_matches_filter">
                    <div class="recent_matches_filter_heading">
                        <h2>Feature Tournaments</h2>
                    </div>
                    <div class="fillter_select_options tournament_arrows">
                        <div class="slide-counter">
                            <span class="current-slide">1</span> / <span class="total-slides">{{count($Championship)}}</span>
                        </div>
                        <div class="carousel-nav">
                            <button class="prev"><i class="fas fa-chevron-left"></i></button>
                            <button class="next"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="feature_tournament_list">

                    <div class="featured_t_carousel">
                        @foreach ($Championship as $Champ)
                        <div class="slide">	
                            <div class="f_tournament_block">
                                <div class="f_t_image">
                                    <img src="{{$Champ->featured_image}}" alt="">
                                </div>
                                <div class="t_content_slider">
                                    <div class="t_name" style="word-break: b">
                                        <h3><a href="{{route('home.events.details',['tournament_id'=>base64_encode($Champ->tournament_id)])}}">{{$Champ->name}} </a></h3>
                                    </div>
                                    <div class="t_date_final">
                                        {{$Champ->region}}
                                    </div>
                                    <div class="t_prize_pool flex_conent_event">
                                        <span>Prize pool</span>
                                        <span>{{$Champ->total_prize}}</span>
                                    </div>
                                    <div class="tourament_type flex_conent_event">
                                        <span>Slots</span>
                                        <span>{{$Champ->invite_type}}</span>
                                    </div>							        		
                                </div>	
                            </div>	
                        </div>
                        @endforeach
                    </div>

                </div>







                <div class="matches_block tournaments_block event_list_top_new">
                    <div class="top_feature_matches">
                        <div class="left_top_f_left">
                            <h2>Tournaments</h2>
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
                    <div class="matches_vs_list">
                        <ul class="nav nav-tabs tabs_style" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#all">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#ongoing">Ongoing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#upcoming">upcoming</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#results">Results</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="all" class="tab-pane active">
                                <div class="no_tournament_text" style="display: none;">
                                    <p>There are no tournamets avaible</p>
                                </div>
                                <div class="date_wise_results">
                                    <div class="date_text">
                                        <img src="{{ url('images/calendar.svg') }}" alt=""> 4 Jul 2023
                                    </div>
                                </div>
                                @foreach ($ChampionshipAll as $Champ)
                                <div class="tourament_list">
                                
                                    <div class="month_year">
                                        <span>{{App\Http\Controllers\HomeController::miliToTimestamp('M',$Champ->subscription_start)}}</span> {{App\Http\Controllers\HomeController::miliToTimestamp('Y',$Champ->subscription_start)}}
                                    </div>

                                    <div class="month_day">
                                        {{App\Http\Controllers\HomeController::miliToTimestamp('D',$Champ->subscription_start)}}
                                    </div>

                                    <div class="tourament_name_subhead">
                                        <h3><a href="{{route('home.events.details',['tournament_id'=>base64_encode($Champ->tournament_id)])}}">{{$Champ->name}}</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>

                                    <div class="participate_users">
                                        <div class="user_list">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar5.svg') }}" alt="">
                                            <span class="users_counter">{{$Champ->slots}}+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        {{$Champ->total_prizes}}
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="{{route('home.events.details',['tournament_id'=>base64_encode($Champ->tournament_id)])}}"><img src="{{ url('images/btns.svg') }}" alt=""></a>
                                    </div>
                                </div>
                                @endforeach
                             

                                {{-- <div class="date_wise_results">
                                    <div class="date_text">
                                        <img src="{{ url('images/calendar.svg') }}" alt=""> 4 Jul 2023
                                    </div>
                                </div> --}}

                              

                                <div class="pagination_list">
                                    <ul class="pagination">
                                        <li class="page-item" aria-disabled="true">
                                            <a class="page-link disabled_link" href="#" aria-label="Previous"
                                                tabindex="-1" aria-disabled="true">
                                                <span aria-hidden="true">
                                                    <i class="fas fa-chevron-left"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link page_active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item disabled"><span class="page-link">...</span></li>
                                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                    aria-hidden="true">
                                                    <i class="fas fa-chevron-right"></i></span></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div id="ongoing" class="tab-pane fade">
                                <div class="date_wise_results">
                                    <div class="date_text">
                                        <img src="{{ url('images/calendar.svg') }}" alt=""> 4 Jul 2023
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
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar5.svg') }}" alt="">
                                            <span class="users_counter">8+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        $3242
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}" alt=""></a>
                                    </div>
                                </div>

                                <div class="tourament_list">

                                    <div class="month_year">
                                        <span>Jul</span> 2023
                                    </div>

                                    <div class="month_day">
                                        15
                                    </div>

                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">DIO 2023 Summer</a></h3>
                                        <p>1v1 Tournament</p>
                                    </div>

                                    <div class="participate_users">
                                        <div class="user_list">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <span class="users_counter">4+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        -
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}" alt=""></a>
                                    </div>
                                </div>

                                <div class="date_wise_results">
                                    <div class="date_text">
                                        <img src="{{ url('images/calendar.svg') }}" alt=""> 4 Jul 2023
                                    </div>
                                </div>

                                <div class="tourament_list">

                                    <div class="month_year">
                                        <span>Jun</span> 2023
                                    </div>

                                    <div class="month_day">
                                        12
                                    </div>

                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">VIRL 2023 Summer</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>

                                    <div class="participate_users">
                                        <div class="user_list">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
                                            <span class="users_counter">7+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        $30
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}"alt=""></a>
                                    </div>
                                </div>

                                <div class="tourament_list">

                                    <div class="month_year">
                                        <span>Jun</span> 2023
                                    </div>

                                    <div class="month_day">
                                        12
                                    </div>

                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">SKS 2023 Summer</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>

                                    <div class="participate_users">
                                        <div class="user_list">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar5.svg') }}" alt="">
                                            <span class="users_counter">8+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        $300
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}"alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div id="upcoming" class="tab-pane fade">
                                <div class="date_wise_results">
                                    <div class="date_text">
                                        <img src="{{ url('images/calendar.svg') }}" alt=""> 4 Jul 2023
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
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar5.svg') }}" alt="">
                                            <span class="users_counter">8+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        $3242
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}" alt=""></a>
                                    </div>
                                </div>

                                <div class="tourament_list">

                                    <div class="month_year">
                                        <span>Jul</span> 2023
                                    </div>

                                    <div class="month_day">
                                        15
                                    </div>

                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">DIO 2023 Summer</a></h3>
                                        <p>1v1 Tournament</p>
                                    </div>

                                    <div class="participate_users">
                                        <div class="user_list">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <span class="users_counter">4+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        -
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}"alt=""></a>
                                    </div>
                                </div>

                                <div class="date_wise_results">
                                    <div class="date_text">
                                        <img src="{{ url('images/calendar.svg') }}" alt=""> 4 Jul 2023
                                    </div>
                                </div>

                                <div class="tourament_list">

                                    <div class="month_year">
                                        <span>Jun</span> 2023
                                    </div>

                                    <div class="month_day">
                                        12
                                    </div>

                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">VIRL 2023 Summer</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>

                                    <div class="participate_users">
                                        <div class="user_list">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
                                            <span class="users_counter">7+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        $30
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}"alt=""></a>
                                    </div>
                                </div>

                                <div class="tourament_list">

                                    <div class="month_year">
                                        <span>Jun</span> 2023
                                    </div>

                                    <div class="month_day">
                                        12
                                    </div>

                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">SKS 2023 Summer</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>

                                    <div class="participate_users">
                                        <div class="user_list">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar5.svg') }}" alt="">
                                            <span class="users_counter">8+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        $300
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}"alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div id="results" class="tab-pane fade">
                                <div class="date_wise_results">
                                    <div class="date_text">
                                        <img src="{{ url('images/calendar.svg') }}" alt=""> 4 Jul 2023
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
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar5.svg') }}" alt="">
                                            <span class="users_counter">8+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        $3242
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}"alt=""></a>
                                    </div>
                                </div>

                                <div class="tourament_list">

                                    <div class="month_year">
                                        <span>Jul</span> 2023
                                    </div>

                                    <div class="month_day">
                                        15
                                    </div>

                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">DIO 2023 Summer</a></h3>
                                        <p>1v1 Tournament</p>
                                    </div>

                                    <div class="participate_users">
                                        <div class="user_list">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <span class="users_counter">4+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        -
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}"alt=""></a>
                                    </div>
                                </div>

                                <div class="date_wise_results">
                                    <div class="date_text">
                                        <img src="{{ url('images/calendar.svg') }}" alt=""> 4 Jul 2023
                                    </div>
                                </div>

                                <div class="tourament_list">

                                    <div class="month_year">
                                        <span>Jun</span> 2023
                                    </div>

                                    <div class="month_day">
                                        12
                                    </div>

                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">VIRL 2023 Summer</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>

                                    <div class="participate_users">
                                        <div class="user_list">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
                                            <span class="users_counter">7+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        $30
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}"alt=""></a>
                                    </div>
                                </div>

                                <div class="tourament_list">

                                    <div class="month_year">
                                        <span>Jun</span> 2023
                                    </div>

                                    <div class="month_day">
                                        12
                                    </div>

                                    <div class="tourament_name_subhead">
                                        <h3><a href="#">SKS 2023 Summer</a></h3>
                                        <p>5v5 Tournament</p>
                                    </div>

                                    <div class="participate_users">
                                        <div class="user_list">
                                            <img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
                                            <img src="{{ url('images/user-img/Avatar5.svg') }}" alt="">
                                            <span class="users_counter">8+ </span>
                                        </div>
                                    </div>

                                    <div class="tourament_prize_pool">
                                        $300
                                        <span>Prize Pool</span>
                                    </div>

                                    <div class="tourament_arrow">
                                        <a href="#"><img src="{{ url('images/btns.svg') }}"alt=""></a>
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