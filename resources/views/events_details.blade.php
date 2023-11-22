@extends('layouts.main')
@section('title','Event Detail')
@section('content')

<link rel="stylesheet" href="{{url('css/style.css')}}">
<section class="latest_news_page"> 
	<div class="container">
		<div class="row">
			  <div class="col-md-12">
					<div class="page_breadcrumps">
						<a href="#">events</a> <i class="fas fa-chevron-right"></i> VIRL 2023 Summer
					</div>
						

					<div class="row">
					
						<div class="col-md-8">
							
							<div class="event_single_left">

								<h1>{{ isset($Championship->name)? $Championship->name: 'no';}}</h1>

								<div class="event_single_pic">
									<img src="{{(!empty($Championship->cover_image))?url($Championship->cover_image):url("images/single_event.svg")}}" alt="">
								</div>

								<h2>About</h2>
								{{-- <p>{{$Championship->description}}</p> --}}
								

								<div class="event_statics">

									<div class="event_statics_inset">
										<div class="top_e_statics flex_box_content">
											<span>
												<span> {{App\Http\Controllers\HomeController::miliToTimestamp('M',$Championship->started_at)}}</span>
												<span> {{App\Http\Controllers\HomeController::miliToTimestamp('Y',$Championship->started_at)}}</span>
											</span>
                                            {{App\Http\Controllers\HomeController::miliToTimestamp('D',$Championship->started_at)}}
										</div>
										<div class="bottom_e_statics">
											Starting day
										</div>	
									</div>

									<div class="event_statics_inset">
										<div class="top_e_statics">
											{{$Championship->total_prize}}
										</div>
										<div class="bottom_e_statics">
											Prize Pool
										</div>	
									</div>

									<div class="event_statics_inset">
										<div class="top_e_statics">
											{{ucwords($Championship->type)}}
										</div>
										<div class="bottom_e_statics">
											Type
										</div>	
									</div>
									<div class="event_statics_inset">
										<div class="top_e_statics">
											{{$Championship->region}}
										</div>
										<div class="bottom_e_statics">
											Region
										</div>	
									</div>

								</div>	
							
							</div>	


						</div>

						<div class="col-md-4">
							

						<div class="team_user_results single_team_block">
			  				<div class="shedule_result_box">

							<ul class="nav nav-tabs tabs_style" role="tablist">
							    <li class="nav-item">
							      <a class="nav-link active" data-bs-toggle="tab" href="#schedule">Schedule</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link " data-bs-toggle="tab" href="#results">Results</a>
							    </li>
							  </ul>

							<div class="tab-content">
							    <div id="schedule" class="tab-pane active">
							      
							      <div class="match_list_small_grid gird_min_height">
								      <div class="match_list_small">
								      		<div class="match_list_small_top">
								      			<div class="tournament_name_left">
								      				<a href="#">BattleGrounds CS:GO Championship</a>
								      			</div>
								      			<div class="tournament_time">
								      				13.07.2023
								      			</div>
								      		</div>
								      		<div class="text-right_live">
									      		<div class="live_text">
						      								Live
						      					</div>
					      					</div>
								      		<div class="match_list_small_bottom">
								      			<div class="matchvs_content">
							      					<div><img src="{{ url('images/user-img/Avatar1.svg') }}"> XL</div>
							      					<div class="yellow_text">VS</div>
							      					<div>MAD <img src="{{ url('images/user-img/Avatar3.svg') }}"> </div>
							      				</div>
								      		</div>	
								      </div>

								      <div class="match_list_small">
								      		<div class="match_list_small_top">
								      			<div class="tournament_name_left">
								      				<a href="#">BattleGrounds CS:GO Championship</a>
								      			</div>
								      			<div class="tournament_time">
								      				13.07.2023
								      			</div>
								      		</div>
								      		<div class="match_list_small_bottom">
								      			<div class="matchvs_content">
							      					<div><img src="{{ url('images/user-img/Avatar1.svg') }}"> XL</div>
							      					<div class="yellow_text">VS</div>
							      					<div>MAD <img src="{{ url('images/user-img/Avatar3.svg') }}"> </div>
							      				</div>
								      		</div>	
								      </div>


								      <div class="match_list_small">
								      		<div class="match_list_small_top">
								      			<div class="tournament_name_left">
								      				<a href="#">BattleGrounds CS:GO Championship</a>
								      			</div>
								      			<div class="tournament_time">
								      				13.07.2023
								      			</div>
								      		</div>
								      		<div class="match_list_small_bottom">
								      			<div class="matchvs_content">
							      					<div><img src="images/user-img/Avatar1.svg"> XL</div>
							      					<div class="yellow_text">VS</div>
							      					<div>MAD <img src="images/user-img/Avatar3.svg"> </div>
							      				</div>
								      		</div>	
								      </div>

							      </div>




							    <div class="bottom_btns text-right">
									<a href="#" class="btn btn-outline-primary yellow_btn ml-2">View all <img src="images/black_arrow.svg"> </a>	
								</div>	

							    </div>
							    <div id="results" class="tab-pane fade ">
								    <div class="match_list_small_grid">
								      <div class="match_list_small">
								      		<div class="match_list_small_top">
								      			<div class="tournament_name_left">
								      				<a href="#">BattleGrounds CS:GO Championship</a>
								      			</div>
								      			<div class="tournament_time">
								      				13.07.2023
								      			</div>

								      		</div>
								      		<div class="text-right_live">
									      		<div class="live_text">
						      								Live
						      					</div>
					      					</div>
								      		<div class="match_list_small_bottom">
								      			<div class="matchvs_content">
							      					<div><img src="images/user-img/Avatar1.svg"> XL</div>
							      					<div class="yellow_text">VS</div>
							      					<div>MAD <img src="images/user-img/Avatar3.svg"> </div>
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


					<div class="grops_area">						

						<ul class="nav nav-tabs tabs_style" role="tablist">
						    <li class="nav-item">
						      <a class="nav-link active" data-bs-toggle="tab" href="#group_a">Group A</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-bs-toggle="tab" href="#group_b">Group B</a>
						    </li>
						</ul>

						<div class="tab-content">
						    <div id="group_a" class="tab-pane active">	

						    	<h4 class="group-headings">Upper Bracket</h4>
						    	<div class="round_text">
						    		<span>Round of 4</span>
						    		<span>Semi-finals</span>
						    	</div>	
						    	
						    	<img src="{{ url('images/Brackets.svg') }}" alt="">


						    	<div class="event_bracket_dividar"></div>	

						    	<h4 class="group-headings">Lower Bracket</h4>
						    	<div class="round_text">
						    		<span>Round of 2</span>
						    	</div>

						    	<img src="{{ url('images/Brackets2.svg') }}" alt="">	


						    </div>
						    <div id="group_b" class="tab-pane fade">
							      Other List
						    </div>
					    </div>

					</div>



					<div class="event_match_summary border-none">

						<div class="team_list_event_single">
							<div class="event_status_team"><span class="completed">completed</span></div>
							<div class="event_team">Playin</div>
							<div class="event_team_time_date">
								<span>Starts</span>
								17 Jun 2023 19:00
							</div>
							<div class="event_users_list">
								<div class="user_list">
									<img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
									<img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
									<img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
									<img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
									<img src="{{ url('images/user-img/Avatar5.svg') }}" alt="">
			      	  				<span class="users_counter">10+ </span>
			      	  			</div>	
							</div>
							<div class="event_team_status_yellow">
								<a href="group-btns">bracket</a>
							</div>
						</div>

						<div class="team_list_event_single">
							<div class="event_status_team"><span class="live_box">live</span></div>
							<div class="event_team">Group A</div>
							<div class="event_team_time_date">
								<span>Starts</span>
								17 Jun 2023 19:00
							</div>
							<div class="event_users_list">
								<div class="user_list">
									<img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
									<img src="{{ url('images/user-img/Avatar2.svg') }}" alt="">
									<img src="{{ url('images/user-img/Avatar3.svg') }}" alt="">
									<img src="{{ url('images/user-img/Avatar4.svg') }}" alt="">
			      	  				<span class="users_counter">4+ </span>
			      	  			</div>	
							</div>
							<div class="event_team_status_yellow">
								<a href="group-btns">bracket</a>
							</div>
						</div>	



						<div class="team_list_event_single">
							<div class="event_status_team"><span class="live_box">live</span></div>
							<div class="event_team">Group B</div>
							<div class="event_team_time_date">
								<span>Starts</span>
								17 Jun 2023 19:00
							</div>
							<div class="event_users_list">
								<div class="user_list">
			      	  				<img src="images/user-img/Avatar1.svg" alt="">
			      	  				<img src="images/user-img/Avatar2.svg" alt="">
			      	  				<img src="images/user-img/Avatar3.svg" alt="">
			      	  				<img src="images/user-img/Avatar4.svg" alt="">
			      	  				<span class="users_counter">4+ </span>
			      	  			</div>	
							</div>
							<div class="event_team_status_yellow">
								<a href="group-btns">bracket</a>
							</div>
						</div>	


						<div class="team_list_event_single">
							<div class="event_status_team"><span class="upcoming">upcoming</span></div>
							<div class="event_team">Playoffs</div>
							<div class="event_team_time_date">
								<span>Starts</span>
								17 Jun 2023 19:00
							</div>
							<div class="event_users_list">
							</div>
							<div class="event_team_status_yellow disabled">
								<a href="group-btns">group</a>
							</div>
						</div>		

					</div>	


					<div class="participants">

						<h2>Participants</h2>


						<div class="list_event_team">

							<div class="gt_list_event">
								<div class="gt_list_event_author">
									<img src="{{ url('images/user-img/Avatar1.svg') }}" alt="">
								</div>
								<div class="gt_list_event_list_names">
									<span><img src="images/rank_img.svg" alt="">Rating: +9.5</span>
									G2
									<span>Arizona</span>
								</div>
							</div>
							<div class="gt_list_event">
								<div class="gt_list_event_author">
									<img src="images/user-img/Avatar2.svg" alt="">
								</div>
								<div class="gt_list_event_list_names">
									<span><img src="images/rank_img.svg" alt="">Rating: +9.5</span>
									G2
									<span>Arizona</span>
								</div>
							</div>
							<div class="gt_list_event">
								<div class="gt_list_event_author">
									<img src="images/user-img/Avatar3.svg" alt="">
								</div>
								<div class="gt_list_event_list_names">
									<span><img src="images/rank_img.svg" alt="">Rating: +9.5</span>
									G2
									<span>Arizona</span>
								</div>
							</div>
							<div class="gt_list_event">
								<div class="gt_list_event_author">
									<img src="images/user-img/Avatar4.svg" alt="">
								</div>
								<div class="gt_list_event_list_names">
									<span><img src="images/rank_img.svg" alt="">Rating: +9.5</span>
									G2
									<span>Arizona</span>
								</div>
							</div>
							<div class="gt_list_event">
								<div class="gt_list_event_author">
									<img src="images/user-img/Avatar5.svg" alt="">
								</div>
								<div class="gt_list_event_list_names">
									<span><img src="images/rank_img.svg" alt="">Rating: +9.5</span>
									G2
									<span>Arizona</span>
								</div>
							</div>
							<div class="gt_list_event">
								<div class="gt_list_event_author">
									<img src="images/user-img/Avatar1.svg" alt="">
								</div>
								<div class="gt_list_event_list_names">
									<span><img src="images/rank_img.svg" alt="">Rating: +9.5</span>
									G2
									<span>Arizona</span>
								</div>
							</div>
							<div class="gt_list_event">
								<div class="gt_list_event_author">
									<img src="images/user-img/Avatar2.svg" alt="">
								</div>
								<div class="gt_list_event_list_names">
									<span><img src="images/rank_img.svg" alt="">Rating: +9.5</span>
									G2
									<span>Arizona</span>
								</div>
							</div>
							<div class="gt_list_event">
								<div class="gt_list_event_author">
									<img src="images/user-img/Avatar1.svg" alt="">
								</div>
								<div class="gt_list_event_list_names">
									<span><img src="images/rank_img.svg" alt="">Rating: +9.5</span>
									G2
									<span>Arizona</span>
								</div>
							</div>
							<div class="gt_list_event">
								<div class="gt_list_event_author">
									<img src="images/user-img/Avatar2.svg" alt="">
								</div>
								<div class="gt_list_event_list_names">
									<span><img src="images/rank_img.svg" alt="">Rating: +9.5</span>
									G2
									<span>Arizona</span>
								</div>
							</div>
							<div class="gt_list_event">
								<div class="gt_list_event_author">
									<img src="images/user-img/Avatar1.svg" alt="">
								</div>
								<div class="gt_list_event_list_names">
									<span><img src="images/rank_img.svg" alt="">Rating: +9.5</span>
									G2
									<span>Arizona</span>
								</div>
							</div>	
						
						</div>


						<div class="bottom_btns">
							<a href="#" class="btn btn-outline-primary ml-2">View more <img src="images/black_arrow.svg"> </a>	
						</div>	

					</div>


					<div class="participants prize_pool">
						<h2>Prize Pool</h2>


						<div class="prize_pool_grid">

							<div class="prize_pool_box">
								<div class="prize_pool_box_head">
									<h6>1-st Place</h6>
									<p>Dragon Lore AWP</p>
								</div>
								<div class="prize_pool_box_bottom">
									-
								</div>						
							</div>

							<div class="prize_pool_box">
								<div class="prize_pool_box_head">
									<h6>2-nd Place</h6>
									<p>Karambit Doppler, M4A4 Auc, Butterfly</p>
								</div>
								<div class="prize_pool_box_bottom">
									-
								</div>						
							</div>


							<div class="prize_pool_box">
								<div class="prize_pool_box_head">
									<h6>3-rd Place</h6>
									<p>M4A4 Howl</p>
								</div>
								<div class="prize_pool_box_bottom">
									-
								</div>						
							</div>	
							
						</div>	

					</div>


					<div class="find_team_banner"> 

						<div class="find_team_content">
							<h2>Find team and play for elite skins!</h2>
							<p>Get ready for a thrilling tournament like no other, where the stakes are high and the rewards are epic. In this exciting event, we're taking it to the next level by offering exclusive CS:GO skins as prizes instead of traditional cash rewards.</p>
						</div>

						<div class="find_team_content_img">
							<img src="{{ url('images/pngfind 1.svg') }}">
						</div>	




						<!-- <a href="#"><img src="images/find_banner.svg" alt=""></a> -->
					</div>	



					</div>	
					
			  </div>
		</div>
	</div>
</section>	
@endsection