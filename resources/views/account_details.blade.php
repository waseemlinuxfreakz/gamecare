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
				<div class="left_side_inner">
					<div class="user_item">
						<div class="nav nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
								data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
								aria-selected="true"> <img src="images/user-img/user-icon-1.svg" class="icons_img"
									alt="user-icon-1"> <span>account datails</span></button>
							<button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
								data-bs-target="#v-pills-profile" type="button" role="tab"
								aria-controls="v-pills-profile" aria-selected="false"> <img
									src="images/user-img/users-icon.svg" class="icons_img" alt="users-icon"> <span> team
								</span> </button>
							<button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
								data-bs-target="#v-pills-messages" type="button" role="tab"
								aria-controls="v-pills-messages" aria-selected="false"> <img
									src="images/user-img/message-circle-icon.svg" class="icons_img"
									alt="message-circle-icon"> <span> notifications </span></button>
							<button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
								data-bs-target="#v-pills-settings" type="button" role="tab"
								aria-controls="v-pills-settings" aria-selected="false"> <img
									src="images/user-img/squarehalf-icon.svg" class="icons_img" alt="squarehalf-icon">
								<span> events </span></button>
							<button class="nav-link" id="v-pills-matches-tab" data-bs-toggle="pill"
								data-bs-target="#v-pills-matches" type="button" role="tab"
								aria-controls="v-pills-matches-tab" aria-selected="false">
								<img src="images/user-img/star.svg" class="icons_img" alt="star-icon">
								<span>Matches</span>
							</button>
							<button class="nav-link" id="v-pills-participants-tab" data-bs-toggle="pill"
								data-bs-target="#v-pills-participants" type="button" role="tab"
								aria-controls="v-pills-participants-tab" aria-selected="false">
								<img src="images/user-img/star.svg" class="icons_img" alt="star-icon">
								<span>Participants</span>
							</button>
							<a class="nav-link" href="{{ route('logout') }}">
								<img src="images/user-img/log-out-icon.svg" class="icons_img" alt="log-out-icon">
								<span>Log Out</span>
							</a>
						</div>
					</div>
				</div>
				<div class="right_side_inner">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
							aria-labelledby="v-pills-home-tab">
							<!-- form -->
							<div class="account_detalis-form">
								<form class="row g-3" action="{{route('account.update')}}" method="POST">
									@csrf
									<div class="col-md-6">
										<label for="inputtext4" class="form-label">First</label>
										<input type="text" value=" {{auth()->user()->first_name}}" name="first_name"
											class="form-control" id="inputtext4" / placeholder="Jek">
										@error('first_name')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
									<div class="col-md-6">
										<label for="inputtext4" class="form-label">last name</label>
										<input type="text" class="form-control" value="{{auth()->user()->last_name}}"
											name="last_name" id="inputtext4" placeholder="Johnson" />
										@error('last_name')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
									<div class="col-md-6">
										<label for="inputtext4" class="form-label">nickname</label>
										<input type="text" class="form-control" value="{{auth()->user()->nick_name}}"
											name="nick_name" id="inputtext4" / placeholder="jekjek5152 ">
										@error('nick_name')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
									<div class="col-md-6">
										<label for="inputtext4" class="form-label">Field label</label>
										<input type="email" class="form-control" value="{{auth()->user()->email}}"
											name="email" id="inputtext4" placeholder="jekjohnsonson@gmail.com" />
										@error('email')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>

									<div class="col-md-6">
										<label for="inputState" class="form-label">State</label>
										<select id="inputState" class="form-select" name="state">
											<option {{(auth()->user()->state=='virgina')?"selected":""}}>Virginia
											</option>
											<option {{(auth()->user()->state=='Alabama')?"selected":""}}>Alabama
											</option>
											<option {{(auth()->user()->state=='Alaska')?"selected":""}}>Alaska</option>
										</select>
										@error('state')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>
									<div class="col-md-6">
										<label for="inputState" class="form-label">College</label>
										<select id="inputState" class="form-select" name="college">
											<option {{(auth()->user()->college=='virgina')?"selected":""}}>Virginia
												College</option>
											<option {{(auth()->user()->college=='Alabama')?"selected":""}}>Alabama
												College</option>
											<option {{(auth()->user()->college=='Alaska')?"selected":""}}>Alaska College
											</option>
										</select>
										@error('college')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</div>

									<div class="col-12">
										<button type="submit" class="btn save_btn">save</button>
									</div>
								</form>
							</div>
							<!-- Reset your password -->
							<div class="Reset_password_area">
								<h3>Reset your password</h3>
								<p>We will send you an email to resend your password</p>
								<div class="email-flid">
									<label for="email" class="form-label">Email</label>
									<input type="email" class="form-control" id="email"
										placeholder="jekjohnsonson@gmail.com" />
								</div>
								<div class="col-12">
									<button data-bs-toggle="modal" data-bs-target="#UserEmailConfirm" type="submit"
										class="btn save_btn send-email-btn">send email</button>
								</div>
							</div>
							<!-- Delete your account -->
							<div class="Reset_password_area">
								<h3>Delete your account</h3>
								<p>If you would like to delete your account, press the button below</p>
								<div class="email-flid">
									<label for="email" class="form-label">Email</label>
									<input type="email" class="form-control" id="email"
										placeholder="jekjohnsonson@gmail.com" />
								</div>
								<div class="col-12">
									<button data-bs-toggle="modal" data-bs-target="#UserDelete" type="submit"
										class="btn save_btn send-email-btn delete-account-btn">delete account</button>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
							aria-labelledby="v-pills-profile-tab">

							

							<div class="no_team_area">
								
								
								@if (isset($teams) && $teams->isNotEmpty())
								<div class="no_team_area">
									<a data-bs-toggle="modal" data-bs-target="#CreateTeam"
										class="btn save_btn send-email-btn">create team</a>
								</div>
								<h3>Teams Created By you</h3>
								<table class="table">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Abbreviation</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach($teams as $team)
										<tr>
											<td>{{ $team->id }}</td>
											<td>{{ $team->name }}</td>
											<td>{{ $team->abbreviated_name }}</td>
											<td>
												<a href="{{ route('teams.edit', $team->id) }}"
													class="btn btn-primary">Edit</a>
												<form action="{{ route('teams.destroy', $team->id) }}" method="post"
													style="display:inline;">
													@csrf
													@method('DELETE')
													<button type="submit" class="btn btn-danger"
														onclick="return confirm('Are you sure?')">Delete</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table 
								@else
									<div class="no_team_area">
										<h3>You haven't joined any team yet</h3>
										<p>In css, an existing team can add you to their team to participate in tournaments, or
											you can create your own team</p>
										<a data-bs-toggle="modal" data-bs-target="#CreateTeam"
											class="btn save_btn send-email-btn">create team</a>
									</div>
								@endif
							</div>



								<div class="group_member_team" style="display: none;">
									<div class="member_of_team">
										<div class="team_author">
											<div class="team_author_pic">
												<img src="images/user_avtar.svg" alt="">
											</div>
											<div class="team_author_name">
												Natus Vincer
											</div>
										</div>

										<h5 class="team_member_text">Team members</h5>


										<div class="match_history_box">
											<div class="table_v_scroll">
												<table class="table">
													<thead>
														<tr>
															<th>Members</th>
															<th>email</th>
															<th>roles</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="team_with_circle_pic">
																<img src="images/avatar_small.svg" alt="">Lowleit
															</td>
															<td>lowleit@gmail.com</td>
															<td>Leader</td>
														</tr>
														<tr>
															<td class="team_with_circle_pic">
																<img src="images/avatar_small.svg" alt="">Lowleit
															</td>
															<td>lowleit@gmail.com</td>
															<td>Leader</td>
														</tr>
														<tr>
															<td class="team_with_circle_pic">
																<img src="images/avatar_small.svg" alt="">Lowleit
															</td>
															<td>lowleit@gmail.com</td>
															<td>Leader</td>
														</tr>
														<tr>
															<td class="team_with_circle_pic">
																<img src="images/avatar_small.svg" alt="">Lowleit
															</td>
															<td>lowleit@gmail.com</td>
															<td>Leader</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="no_team_area">
											<h3>Delete team</h3>
											<p>If you no longer want to play as part of this team, you can leave it</p>
											<a data-bs-toggle="modal" data-bs-target="#LeaveTeam"
												class="btn save_btn send-email-btn delete-account-btn">Delete team</a>
										</div>
									</div>
								</div>

								<div class="group_member_team_edit">
									<div class="member_of_team">
										<div class="team_author">
											<div class="team_author_pic">
												<img src="images/user_avtar.svg" alt="">
											</div>
											<div class="team_author_name">
												Natus Vincer
											</div>
										</div>

										<div class="team_member_titles">
											<div class="team_member_titles_left">
												<h5 class="team_member_text">Team members</h5>
											</div>
											<div class="team_member_titles_right upper_text">
												<a data-bs-toggle="modal" data-bs-target="#AddTeamMember" href="#">add
													team
													members + </a>
											</div>
										</div>

										<div class="match_history_box">
											<div class="table_v_scroll">
												<table class="table">
													<thead>
														<tr>
															<th>Members</th>
															<th>email</th>
															<th>roles</th>
															<th>action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="team_with_circle_pic">
																<img src="images/avatar_small.svg" alt="">Lowleit
															</td>
															<td>lowleit@gmail.com</td>
															<td>
																<select class="form-control form-control-role-manager">
																	<option>Leader</option>
																	<option>...</option>
																</select>
															</td>
															<td>
																<a data-bs-toggle="modal"
																	data-bs-target="#DeleteTeamMember" href="#"><img
																		src="images/trash-2.svg" alt=""></a>
															</td>
														</tr>
														<tr>
															<td class="team_with_circle_pic">
																<img src="images/avatar_small.svg" alt="">Lowleit
															</td>
															<td>lowleit@gmail.com</td>
															<td>
																<select class="form-control form-control-role-manager">
																	<option>Member</option>
																	<option>...</option>
																</select>
															</td>
															<td>
																<a data-bs-toggle="modal"
																	data-bs-target="#DeleteTeamMember" href="#"><img
																		src="images/trash-2.svg" alt=""></a>
															</td>
														</tr>
														<tr>
															<td class="team_with_circle_pic">
																<img src="images/avatar_small.svg" alt="">Lowleit
															</td>
															<td>lowleit@gmail.com</td>
															<td><select class="form-control form-control-role-manager">
																	<option>Member</option>
																	<option>...</option>
																</select></td>
															<td>
																<a data-bs-toggle="modal"
																	data-bs-target="#DeleteTeamMember" href="#"><img
																		src="images/trash-2.svg" alt=""></a>
															</td>
														</tr>
														<tr>
															<td class="team_with_circle_pic">
																<img src="images/avatar_small.svg" alt="">Lowleit
															</td>
															<td>lowleit@gmail.com</td>
															<td><select class="form-control form-control-role-manager">
																	<option>Member</option>
																	<option>...</option>
																</select></td>
															<td>
																<a data-bs-toggle="modal"
																	data-bs-target="#DeleteTeamMember" href="#"><img
																		src="images/trash-2.svg" alt=""></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="no_team_area">
											<h3>Delete team</h3>
											<p>If you no longer want to play as part of this team, you can leave it</p>
											<a data-bs-toggle="modal" data-bs-target="#LeaveTeam"
												class="btn save_btn send-email-btn delete-account-btn">Delete team</a>
										</div>
									</div>
								</div>

							</div>
							<div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
								aria-labelledby="v-pills-messages-tab">

								<div class="no_notification_area">
									<h3>You haven't any notifications yet</h3>
									<p>All system messages and invitations to teams or tournaments will be sent here</p>
								</div>

								<h3 class="notification_text">Notifications</h3>

								<div class="notification_list">
									<div class="list_notify">
										<div class="list_notify_left">
											<div class="icon_list">
												<img src="images/message-circle.svg" alt="">
											</div>
											<div class="notification_content">
												<h4>Invitation to the team</h4>
												<p>Lowleit invites you to the team Spiegl, do you want to accept
													invitation?
												</p>
											</div>
										</div>
										<div class="list_notify_right">
											<div class="notification_btn">
												<a class="accept_btn" href="#">Accept</a>
												<a class="reject_btn" href="#">Reject</a>
											</div>
										</div>
									</div>
									<div class="list_notify">
										<div class="list_notify_left">
											<div class="icon_list">
												<img src="images/message-circle.svg" alt="">
											</div>
											<div class="notification_content">
												<h4>Join your college team</h4>
												<p>There is already a team of your college on our website, you can join
													it
												</p>
											</div>
										</div>
										<div class="list_notify_right">
											<div class="notification_btn">
												<a class="accept_btn" href="#">submit</a>
												<a class="reject_btn" href="#">Reject</a>
											</div>
										</div>
									</div>
									<div class="list_notify">
										<div class="list_notify_left">
											<div class="icon_list">
												<img src="images/message-circle.svg" alt="">
											</div>
											<div class="notification_content">
												<h4>Application for the tournament VHC Summer 2023</h4>
												<p>Your application for the tournament is under consideration, please
													wait
													until it is approved.</p>
											</div>
										</div>
										<div class="list_notify_right">
											<div class="notification_btn">
												<a class="accept_btn" href="#">Accept</a>
											</div>
										</div>
									</div>
									<div class="list_notify">
										<div class="list_notify_left">
											<div class="icon_list">
												<img src="images/check-circle.svg" alt="">
											</div>
											<div class="notification_content">
												<h4>Application for the tournament VHC Summer 2023 - Approved</h4>
												<p>Your application for the tournament is approved! We will email you
													additional information on how to participate in tournaments. Good
													luck
													in tournament!</p>
											</div>
										</div>
										<div class="list_notify_right">
											<div class="notification_btn">
												<a class="accept_btn" href="#">Accept</a>
											</div>
										</div>
									</div>
									<div class="list_notify">
										<div class="list_notify_left">
											<div class="icon_list">
												<img src="images/message-circle.svg" alt="">
											</div>
											<div class="notification_content">
												<h4>Application for the tournament VHC Summer 2023 - Rejected</h4>
												<p>The administration decided not to allow you to the tournament, to
													find
													out more, please contact us by email ccs@gmail.com</p>
											</div>
										</div>
										<div class="list_notify_right">
											<div class="notification_btn">
												<a class="accept_btn" href="#">Accept</a>
											</div>
										</div>
									</div>

									<div class="list_notify">
										<div class="list_notify_left">
											<div class="icon_list">
												<img src="images/XCircle.svg" alt="">
											</div>
											<div class="notification_content">
												<h4>Application for the tournament VHC Summer 2023 - Rejected</h4>
												<p>The administration decided not to allow you to the tournament, to
													find
													out more, please contact us by email ccs@gmail.com</p>
											</div>
										</div>
										<div class="list_notify_right">
											<div class="notification_btn">
												<a class="accept_btn" href="#">Accept</a>
											</div>
										</div>
									</div>

									<div class="list_notify">
										<div class="list_notify_left">
											<div class="icon_list">
												<img src="images/XCircle.svg" alt="">
											</div>
											<div class="notification_content">
												<h4>Application for the tournament VHC Summer 2023 - Rejected</h4>
												<p>The administration decided not to allow you to the tournament, to
													find
													out more, please contact us by email ccs@gmail.com</p>
											</div>
										</div>
										<div class="list_notify_right">
											<div class="notification_btn">
												<a class="accept_btn" href="#">Accept</a>
											</div>
										</div>
									</div>

								</div>

							</div>

							<div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
								aria-labelledby="v-pills-settings-tab">


								<div class="no_team_area">
									<h3>You have not created any events yet</h3>
									<p>All system messages and invitations to teams or tournaments will be sent here</p>
									<a data-bs-toggle="modal" data-bs-target="#CreateEvent"
										class="btn save_btn send-email-btn">Create event</a>
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
										<a data-bs-toggle="modal" data-bs-target="#UnRegister_tournamement"
											class="unregister_btn" href="#">unregister</a>
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
												<h3><a data-bs-toggle="modal" data-bs-target="#SummerTournament"
														href="#">SKS 2023 Summer</a></h3>
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
												<a data-bs-toggle="modal" data-bs-target="#Register_tournamement"
													class="register_t_match" href="#">Register</a>
											</div>
										</div>


									</div>

								</div>

							</div>

							<div class="tab-pane fade" id="v-pills-matches" role="tabpanel"
								aria-labelledby="v-pills-matches-tab">

								<div class="no_team_area">
									<h3>You have not created any events yet</h3>
									<p>There are currently no events created.<br>
										First, create an event in the <strong>events section.</strong></p>
								</div>


								<div class="no_team_area created_matches_list">

									<h3>Your matches</h3>
									<p>Select the event in which you want to create a matches and click "create matches"
									</p>

									<div class="team_matches_grid">
										<div class="team_matches_grid_left">
											<a href="#">SSC Summer Cup 2023</a>
										</div>
										<div class="team_matches_grid_right">
											<a data-bs-toggle="modal" data-bs-target="#CreateMatches"
												class="create_matches_btn" href="#">create matches</a>
										</div>
									</div>

									<div class="team_matches_grid">
										<div class="team_matches_grid_left">
											<a href="#">SSC Summer Cup 2023</a>
										</div>
										<div class="team_matches_grid_right">
											<a href="#" class="edit_icon_t_list" href="#"><img
													src="images/user-img/ButtonEdit.svg" alt=""></a>
										</div>
									</div>

								</div>

							</div>


							<div class="tab-pane fade" id="v-pills-participants" role="tabpanel"
								aria-labelledby="v-pills-participants-tab">

								<div class="no_team_area">
									<h3>Participants</h3>
									<p>There are currently no events created. <br> First, create an event in the
										<strong><u>events section.</u></strong>
									</p>
								</div>

								<div class="participants_event_list">

									<div class="shedule_result_box with_popup_width">
										<div class="tabs_list">

											<div class="tabs_list_left">
												<ul class="nav nav-tabs tabs_style" role="tablist">
													<li class="nav-item">
														<a class="nav-link with_popup_width active" data-bs-toggle="tab"
															href="#participate_current_event">current events</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab"
															href="#participate_upcoming_event">Upcoming events</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-bs-toggle="tab"
															href="#participate_past_event">Past events</a>
													</li>
												</ul>
											</div>
											<div class="tabs_list_right">
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

										<div class="tab-content">
											<div id="participate_current_event" class="tab-pane active">


												<div class="team_matches_grid">
													<div class="team_matches_grid_left">
														<a href="#">SSC Summer Cup 2023</a>
													</div>

													<div class="participate_users no_participate_users">
														No participants yet
													</div>

													<div class="team_matches_grid_right">
														<a href="#"
															class="edit_icon_t_list new_box_open_participate"><img
																src="images/arrow_bottom.svg" alt=""></a>
													</div>
												</div>


												<div class="participate_show">


													<ul class="nav nav-tabs tabs_style" role="tablist">
														<li class="nav-item">
															<a class="nav-link with_popup_width active"
																data-bs-toggle="tab" href="#participate_current">Current
																participants</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab"
																href="#searchterm">search teams</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab"
																href="#applying">Applying</a>
														</li>
													</ul>

													<div class="tab-content">
														<div id="participate_current" class="tab-pane active">
															<div class="match_search">
																<form>
																	<div class="input_field">
																		<input type="text" placeholder="Search">
																		<i class="fas fa-search"></i>
																	</div>
																</form>
															</div>

															<div class="no_participate_user_show">
																<p>There are still no participants registered for this
																	event. You can invite participants yourself in the
																	"Search for participants" section</p>
															</div>

															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar2.svg" alt=""> Natus
																	Vincer
																</div>
																<div class="participate_current_user_list_right">
																	<a href="#"><img src="images/user-img/trash_btn.png"
																			alt=""></a>
																</div>
															</div>

															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar5.svg" alt="">
																	Pheonix
																</div>
																<div class="participate_current_user_list_right">
																	<a href="#"><img src="images/user-img/trash_btn.png"
																			alt=""></a>
																</div>
															</div>


															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar3.svg" alt="">
																	Tricked
																</div>
																<div class="participate_current_user_list_right">
																	<a href="#"><img src="images/user-img/trash_btn.png"
																			alt=""></a>
																</div>
															</div>

														</div>
														<div id="searchterm" class="tab-pane fade">


															<div class="match_search">
																<form>
																	<div class="input_field">
																		<input type="text" placeholder="Search">
																		<i class="fas fa-search"></i>
																	</div>
																</form>
															</div>


															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar3.svg" alt="">
																	Tricked
																</div>
																<div class="participate_current_user_list_right">
																	<a href="#" class="create_matches_btn"
																		href="#">Submit</a>
																</div>
															</div>


															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar5.svg" alt="">
																	Pheonix
																</div>
																<div class="participate_current_user_list_right">
																	<a href="#" class="create_matches_btn"
																		href="#">Submit</a>
																</div>
															</div>


															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar2.svg" alt=""> Natus
																	Vincer
																</div>
																<div class="participate_current_user_list_right">
																	<a href="#" class="create_matches_btn"
																		href="#">Submit</a>
																</div>
															</div>

															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar2.svg" alt=""> Natus
																	Vincer
																</div>
																<div class="participate_current_user_list_right">
																	<a href="#" class="create_matches_btn"
																		href="#">Submit</a>
																</div>
															</div>

															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar2.svg" alt=""> Natus
																	Vincer
																</div>
																<div class="participate_current_user_list_right">
																	<a href="#" class="create_matches_btn"
																		href="#">Submit</a>
																</div>
															</div>


															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar2.svg" alt=""> Natus
																	Vincer
																</div>
																<div class="participate_current_user_list_right">
																	<a href="#" class="create_matches_btn"
																		href="#">Submit</a>
																</div>
															</div>

															<div class="pagination_list">
																<ul class="pagination">
																	<li class="page-item" aria-disabled="true">
																		<a class="page-link disabled_link" href="#"
																			aria-label="Previous" tabindex="-1"
																			aria-disabled="true">
																			<span aria-hidden="true">
																				<i class="fas fa-chevron-left"></i>
																			</span>
																		</a>
																	</li>
																	<li class="page-item"><a
																			class="page-link page_active" href="#">1</a>
																	</li>
																	<li class="page-item"><a class="page-link"
																			href="#">2</a></li>
																	<li class="page-item"><a class="page-link"
																			href="#">3</a></li>
																	<li class="page-item"><a class="page-link"
																			href="#">4</a></li>
																	<li class="page-item"><a class="page-link"
																			href="#">5</a></li>
																	<li class="page-item disabled"><span
																			class="page-link">...</span></li>
																	<li class="page-item"><a class="page-link"
																			href="#">10</a></li>
																	<li class="page-item"><a class="page-link" href="#"
																			aria-label="Next"><span aria-hidden="true">
																				<i
																					class="fas fa-chevron-right"></i></span></a>
																	</li>
																</ul>
															</div>



														</div>
														<div id="applying" class="tab-pane fade">

															<div class="match_search">
																<form>
																	<div class="input_field">
																		<input type="text" placeholder="Search">
																		<i class="fas fa-search"></i>
																	</div>
																</form>
															</div>

															<div class="no_participate_user_show">
																<p>So far, no team has applied for participation in the
																	tournament.</p>
															</div>


															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar2.svg" alt=""> Natus
																	Vincer
																</div>
																<div class="participate_current_user_list_right">
																	<div class="twice_bts">
																		<a href="#"
																			class="create_matches_btn with_reject_btn"
																			href="#">Reject</a>
																		<a href="#" class="create_matches_btn"
																			href="#">accept</a>
																	</div>
																</div>
															</div>

															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar2.svg" alt=""> Natus
																	Vincer
																</div>
																<div class="participate_current_user_list_right">
																	<div class="twice_bts">
																		<a href="#"
																			class="create_matches_btn with_reject_btn"
																			href="#">Reject</a>
																		<a href="#" class="create_matches_btn"
																			href="#">accept</a>
																	</div>
																</div>
															</div>

															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar2.svg" alt=""> Natus
																	Vincer
																</div>
																<div class="participate_current_user_list_right">
																	<div class="twice_bts">
																		<a href="#"
																			class="create_matches_btn with_reject_btn"
																			href="#">Reject</a>
																		<a href="#" class="create_matches_btn"
																			href="#">accept</a>
																	</div>
																</div>
															</div>

															<div class="participate_current_user_list">
																<div class="participate_current_user_list_left">
																	<img src="images/user-img/Avatar2.svg" alt=""> Natus
																	Vincer
																</div>
																<div class="participate_current_user_list_right">
																	<div class="twice_bts">
																		<a href="#"
																			class="create_matches_btn with_reject_btn"
																			href="#">Reject</a>
																		<a href="#" class="create_matches_btn"
																			href="#">accept</a>
																	</div>
																</div>
															</div>


														</div>
													</div>


												</div>


												<div class="team_matches_grid">
													<div class="team_matches_grid_left">
														<a href="#">SSC Summer Cup 2023</a>
													</div>

													<div class="participate_users">
														<div class="user_list">
															<img src="images/user-img/Avatar1.svg" alt="">
															<img src="images/user-img/Avatar2.svg" alt="">
															<img src="images/user-img/Avatar3.svg" alt="">
															<img src="images/user-img/Avatar4.svg" alt="">
															<img src="images/user-img/Avatar5.svg" alt="">
															<span class="users_counter">10+ </span>
														</div>
													</div>

													<div class="team_matches_grid_right">
														<a href="#"
															class="edit_icon_t_list new_box_open_participate"><img
																src="images/arrow_bottom.svg" alt=""></a>
													</div>
												</div>

												<div class="participate_show">
													454555545
												</div>


												<div class="team_matches_grid">
													<div class="team_matches_grid_left">
														<a href="#">SSC Summer Cup 2023</a>
													</div>

													<div class="participate_users no_participate_users">
														No participants yet
													</div>

													<div class="team_matches_grid_right">
														<a href="#"
															class="edit_icon_t_list new_box_open_participate"><img
																src="images/arrow_bottom.svg" alt=""></a>
													</div>
												</div>

												<div class="participate_show">
													454555545
												</div>


												<div class="team_matches_grid">
													<div class="team_matches_grid_left">
														<a href="#">SSC Summer Cup 2023</a>
													</div>

													<div class="participate_users">
														<div class="user_list">
															<img src="images/user-img/Avatar1.svg" alt="">
															<img src="images/user-img/Avatar2.svg" alt="">
															<img src="images/user-img/Avatar3.svg" alt="">
															<img src="images/user-img/Avatar4.svg" alt="">
															<img src="images/user-img/Avatar5.svg" alt="">
															<span class="users_counter">10+ </span>
														</div>
													</div>

													<div class="team_matches_grid_right">
														<a href="#"
															class="edit_icon_t_list new_box_open_participate"><img
																src="images/arrow_bottom.svg" alt=""></a>
													</div>
												</div>

												<div class="participate_show">
													454555545
												</div>


												<div class="team_matches_grid">
													<div class="team_matches_grid_left">
														<a href="#">SSC Summer Cup 2023</a>
													</div>

													<div class="participate_users no_participate_users">
														No participants yet
													</div>

													<div class="team_matches_grid_right">
														<a href="#"
															class="edit_icon_t_list new_box_open_participate"><img
																src="images/arrow_bottom.svg" alt=""></a>
													</div>
												</div>

												<div class="participate_show">
													454555545
												</div>


												<div class="team_matches_grid">
													<div class="team_matches_grid_left">
														<a href="#">SSC Summer Cup 2023</a>
													</div>

													<div class="participate_users">
														<div class="user_list">
															<img src="images/user-img/Avatar1.svg" alt="">
															<img src="images/user-img/Avatar2.svg" alt="">
															<img src="images/user-img/Avatar3.svg" alt="">
															<img src="images/user-img/Avatar4.svg" alt="">
															<img src="images/user-img/Avatar5.svg" alt="">
															<span class="users_counter">10+ </span>
														</div>
													</div>

													<div class="team_matches_grid_right">
														<a href="#"
															class="edit_icon_t_list new_box_open_participate"><img
																src="images/arrow_bottom.svg" alt=""></a>
													</div>
												</div>

												<div class="participate_show">
													454555545
												</div>


												<div class="pagination_list">
													<ul class="pagination">
														<li class="page-item" aria-disabled="true">
															<a class="page-link disabled_link" href="#"
																aria-label="Previous" tabindex="-1"
																aria-disabled="true">
																<span aria-hidden="true">
																	<i class="fas fa-chevron-left"></i>
																</span>
															</a>
														</li>
														<li class="page-item"><a class="page-link page_active"
																href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#">4</a></li>
														<li class="page-item"><a class="page-link" href="#">5</a></li>
														<li class="page-item disabled"><span
																class="page-link">...</span>
														</li>
														<li class="page-item"><a class="page-link" href="#">10</a></li>
														<li class="page-item"><a class="page-link" href="#"
																aria-label="Next"><span aria-hidden="true">
																	<i class="fas fa-chevron-right"></i></span></a>
														</li>
													</ul>
												</div>


											</div>
											<div id="participate_upcoming_event" class="tab-pane fade">
												Test 456
											</div>
											<div id="participate_past_event" class="tab-pane fade">
												Test 789
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
<!-- Account details section End -->

<!-- CreateTeam Modal -->
<div class="modal comfirm_email_box create_team_popup fade" id="CreateTeam" tabindex="-1"
	aria-labelledby="UserEmailConfirm" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title create_team_heading" id="staticBackdropLabel">Create your team!</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body create_team_group">

				<div class="create_team_box">
					<form method="post" action="{{ route('account.teams.store') }}" enctype="multipart/form-data">
						@csrf
						<div class="create_team_box_left">
							<h5>Add information about team</h5>
							<div class="form-group">
								<label>Full team name</label>
								<input type="text" name="name" placeholder="Full team name" required>
							</div>
							<div class="form-group">
								<label>Abbreviated team name</label>
								<input type="text" name="abbreviated_name" placeholder="Abbreviated team name" required>
							</div>
							<div class="form-group">
								<input type="file" name="team_logo" id="fileInput" accept="image/*" />
								<label for="fileInput">
									<img src="images/upload.svg" alt="">
									Drag & Drop or Choose team-logo to upload <span> SVG or PNG</span>
								</label>
							</div>
							<button type="submit" class="btn accept_btn">Create team <img src="images/t_arrow.svg"
									alt=""></button>
					</form>
				</div>
				<div class="create_team_box_right">
					<h5>Invite your team members</h5>
					<div class="form-group">
						<label>Email address</label>
						<input type="text" name="email_address" placeholder="adam@gmail.com" required>
					</div>
					<div class="form-group">
						<input type="text" name="player_name" placeholder="name@example.com">

						<div class="error_message position-relative">
							<p><img src="images/error.svg" alt=""> This player already in the team</p>
						</div>

					</div>
					<div class="form-group">
						<a class="btn add_more_btn_popup">add more +</a>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>
</div>

<!-- AddTeamMember Modal -->
<div class="modal comfirm_email_box fade" id="AddTeamMember" tabindex="-1" aria-labelledby="UserEmailConfirm"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title create_team_heading" id="staticBackdropLabel">Add team members</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body create_team_group">
				<form>
					<div class="create_team_box">
						<div class="create_team_box_right">
							<h5>Invite your team members</h5>
							<div class="form-group">
								<label>email address</label>
								<input type="text" placeholder="adam@gmail.com">
							</div>
							<div class="form-group">
								<input type="text" placeholder="name@example.com">
							</div>
							<div class="form-group">
								<a class="btn add_more_btn_popup">add more +</a>
							</div>
						</div>
					</div>
					<button type="submit" class="btn accept_btn">send invites <img src="images/t_arrow.svg" alt="">
					</button>
				</form>

			</div>
		</div>
	</div>
</div>




@endsection