@extends('layouts.main')
@section('title','Dashboard')
@section('content')
	
<section class="banner_part">
	<div class="container">
		<div class="row conent_wrap_corner">
			<div class="col-md-8">
				<div class="banner_text_area">
					<h1>College Counter-strike</h1>
					<p>At CCS, we are dedicated to reviving the passion and enthusiasm within the North American Counter-Strike scene. As a unique platform, we provide an inclusive and competitive environment where you can showcase your gaming skills, connect with like-minded individuals, and embark on an exhilarating journey through the world of collegiate esports.</p>
					<a href="#" class="btn home-banner-btn" href="#">start your journey with ccs</a>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="wrap_ranking">
					<div class="banner_ranking_box">
							<div class="ranking_list">
								<div class="rank_number">
									#1
								</div>
								<div class="rank_user">
									<img src="images/user_avtar.svg" alt="user"> HEROIC
								</div>	
							</div>
							<div class="ranking_list">
								<div class="rank_number">
									#2
								</div>
								<div class="rank_user">
									<img src="images/user_avtar.svg" alt="user"> Team Vitality
								</div>	
							</div>
							<div class="ranking_list">
								<div class="rank_number">
									#3
								</div>
								<div class="rank_user">
									<img src="images/user_avtar.svg" alt="user"> FaZe Clan
								</div>	
							</div>
							<div class="ranking_list">
								<div class="rank_number">
									#4
								</div>
								<div class="rank_user">
									<img src="images/user_avtar.svg" alt="user"> Cloud9
								</div>	
							</div>
							<div class="ranking_list">
								<div class="rank_number">
									#5
								</div>
								<div class="rank_user">
									<img src="images/user_avtar.svg" alt="user"> ENCE
								</div>	
							</div>
							<div class="ranking_list">
								<div class="rank_number">
									#6
								</div>
								<div class="rank_user">
									<img src="images/user_avtar.svg" alt="user"> G2 Esports
								</div>	
							</div>
							<div class="ranking_list">
								<div class="rank_number">
									#7
								</div>
								<div class="rank_user">
									<img src="images/user_avtar.svg" alt="user"> Natus Vincere
								</div>	
							</div>
							<div class="ranking_list">
								<div class="rank_number">
									#8
								</div>
								<div class="rank_user">
									<img src="images/user_avtar.svg" alt="user"> GamerLegion
								</div>	
							</div>
							<div class="ranking_list">
								<div class="rank_number">
									#9
								</div>
								<div class="rank_user">
									<img src="images/user_avtar.svg" alt="user"> FURIA Esports
								</div>	
							</div>
							<div class="ranking_list">
								<div class="rank_number">
									#10
								</div>
								<div class="rank_user">
									<img src="images/user_avtar.svg" alt="user"> Apeks
								</div>	
							</div>
					</div>
					<a class="btn btn-outline-primary btn-outline-banner arrow_icon ml-2">all rangings <img src="images/arrow_icon.svg"> </a>
				</div>				
			</div>	
		</div>	
	</div>
</section>

<section class="banner_bottom_headings">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="formatted-list">
				  <li><a href="#">Anti-cheat protection</a></li>
				  <li><a href="#">Play 5v5 and 1v1 matches</a></li>
				  <li><a href="#">Unique esports league</a></li>
				  <li><a href="#">Ranking system</a></li>
				</ul>
			</div>
		</div>	
	</div>
</section>

<div class="page_wrap">
	<section class="welcome_text_block">
		<div class="container">
			<div class="row row_bottom_margin">
				<div class="col-md-6">
					<div class="welcome_boxes padding_right_box">
						<h1>Welcome to College Counter-Strike</h1>
						<p>CCS is more than just a league - we are a community-driven center focused on reviving passion and enthusiasm in the North American Counter-Strike scene. Our mission is to provide a unique platform where students can showcase their gaming skills, connect with like-minded individuals, and pursue a path towards a professional esports career.</p>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="img_placeholder">
						<img src="images/homepage_1.svg" alt="placeholder">
					</div>	
				</div>
			</div>
			<div class="row row_bottom_margin">
				<div class="col-md-6">
					<div class="img_placeholder text-end">
						<img src="images/homepage_2.png" alt="placeholder">
					</div>	
				</div>
				<div class="col-md-6">
					<div class="welcome_boxes padding_left_box">
						<h1>Experience the Thrill of Collegiate Esports</h1>
						<p>Join CCS and embark on an exhilarating journey in the world of Counter-Strike. We offer an inclusive and competitive environment that celebrates diversity and provides opportunities for players, coaches, club presidents, and fans alike. Stay engaged with our community through match updates, player profiles, team rankings, and much more.</p>
					</div>	
				</div>
			</div>
			<div class="row row_bottom_margin">
				<div class="col-md-6">
					<div class="welcome_boxes padding_right_box">
						<h1>Unleash Your Potential with CCS</h1>
						<p>At CCS, we believe in the transformative power of gaming, fostering personal growth and academic success. Our exclusive path for colleges opens doors to the professional esports scene, connecting you with a network of talented individuals passionate about gaming. As a community center, we strive to provide a platform that fosters deep interactions, keeping you up to date with the latest match updates, player profiles, team rankings, and much more.</p>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="img_placeholder">
						<img src="images/homep_3.png" alt="placeholder">
					</div>	
				</div>
			</div>	
		</div>	
	</section>

	<section class="news_matches">
		<div class="container">
			<div class="row">
				  <div class="col-md-12">
				  		<div class="heading_text">
				  			News and matches
				  		</div>	
				  </div>
			</div>  	
		</div>


		<div class="container">
			<div class="row">
				  <div class="col-md-8">
				  		<div class="news_box">				  			
				  			<!-- Nav tabs -->
							  <ul class="nav nav-tabs tabs_style" role="tablist">
							    <li class="nav-item">
							      <a class="nav-link active" data-bs-toggle="tab" href="#latest_updates">letest updates</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" data-bs-toggle="tab" href="#latest_news">Latest news</a>
							    </li>
							  </ul>
							  <!-- Tab panes -->
							  <div class="tab-content">
							    <div id="latest_updates" class="tab-pane active">							     
							     	<div class="news_grid_posts">
							     		<div class="grid_itme_news">
							     			<div class="grid_item_image">
							     				<a href="#"><img src="images/img_tabs.svg" alt="post image"></a>
							     				<span class="news_category">players</span>
							     			</div>
							     			<div class="grid_item_content">
							     				<h3><a href="#">Rising Stars: Young Prodigies Make Waves in the Esports Scene</a></h3>
							     				<p>A new generation of talented gamers is taking the esports world by storm. These young prodigies are...</p>
							     			</div>	
							     		</div>
							     		<div class="grid_itme_news">
							     			<div class="grid_item_image">
							     				<a href="#"><img src="images/img2.svg" alt="post image"></a>
							     				<span class="news_category">updates</span>
							     			</div>
							     			<div class="grid_item_content">
							     				<h3><a href="#">Rising Stars: Young Prodigies Make Waves in the Esports Scene</a></h3>
							     				<p>A new generation of talented gamers is taking the esports world by storm. These young prodigies are...</p>
							     			</div>	
							     		</div>
							     		<div class="grid_itme_news">
							     			<div class="grid_item_image">
							     				<a href="#"><img src="images/img3.svg" alt="post image"></a>
							     				<span class="news_category">events</span>
							     			</div>
							     			<div class="grid_item_content">
							     				<h3><a href="#">Rising Stars: Young Prodigies Make Waves in the Esports Scene</a></h3>
							     				<p>A new generation of talented gamers is taking the esports world by storm. These young prodigies are...</p>
							     			</div>	
							     		</div>
							     		<div class="grid_itme_news">
							     			<div class="grid_item_image">
							     				<a href="#"><img src="images/img4.svg" alt="post image"></a>
							     				<span class="news_category">players</span>
							     			</div>
							     			<div class="grid_item_content">
							     				<h3><a href="#">Rising Stars: Young Prodigies Make Waves in the Esports Scene</a></h3>
							     				<p>A new generation of talented gamers is taking the esports world by storm. These young prodigies are...</p>
							     			</div>	
							     		</div>	
							     	</div>	
							    </div>
							    <div id="latest_news" class="tab-pane fade">
							      	<div class="news_grid_posts">
							     		<div class="grid_itme_news">
							     			<div class="grid_item_image">
							     				<a href="#"><img src="images/bg.png" alt="post image"></a>
							     				<span class="news_category">players</span>
							     			</div>
							     			<div class="grid_item_content">
							     				<h3><a href="#">Rising Stars: Young Prodigies Make Waves in the Esports Scene</a></h3>
							     				<p>A new generation of talented gamers is taking the esports world by storm. These young prodigies are...</p>
							     			</div>	
							     		</div>
							     		<div class="grid_itme_news">
							     			<div class="grid_item_image">
							     				<a href="#"><img src="images/bg.png" alt="post image"></a>
							     				<span class="news_category">updates</span>
							     			</div>
							     			<div class="grid_item_content">
							     				<h3><a href="#">Rising Stars: Young Prodigies Make Waves in the Esports Scene</a></h3>
							     				<p>A new generation of talented gamers is taking the esports world by storm. These young prodigies are...</p>
							     			</div>	
							     		</div>
							     		<div class="grid_itme_news">
							     			<div class="grid_item_image">
							     				<a href="#"><img src="images/bg.png" alt="post image"></a>
							     				<span class="news_category">events</span>
							     			</div>
							     			<div class="grid_item_content">
							     				<h3><a href="#">Rising Stars: Young Prodigies Make Waves in the Esports Scene</a></h3>
							     				<p>A new generation of talented gamers is taking the esports world by storm. These young prodigies are...</p>
							     			</div>	
							     		</div>
							     		<div class="grid_itme_news">
							     			<div class="grid_item_image">
							     				<a href="#"><img src="images/bg.png" alt="post image"></a>
							     				<span class="news_category">players</span>
							     			</div>
							     			<div class="grid_item_content">
							     				<h3><a href="#">Rising Stars: Young Prodigies Make Waves in the Esports Scene</a></h3>
							     				<p>A new generation of talented gamers is taking the esports world by storm. These young prodigies are...</p>
							     			</div>	
							     		</div>	
							     	</div>
							    </div>
							  </div>

							<div class="bottom_btns">
								<a href="#" class="btn btn-outline-primary ml-2">View more <img src="images/black_arrow.svg"> </a>	
							</div>								

				  		</div>	
				  </div>
				  <div class="col-md-4">
				  		<div class="matches_list">
				  		<!-- Nav tabs -->
							  <ul class="nav nav-tabs tabs_style" role="tablist">
							    <li class="nav-item">
							      <a class="nav-link active" data-bs-toggle="tab" href="#past_results">past results</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" data-bs-toggle="tab" href="#upcoming_matches">Upcoming</a>
							    </li>
							  </ul>
							  <!-- Tab panes -->
							  <div class="tab-content">
							    <div id="past_results" class="tab-pane active">
							      <div class="match_results">
							      		<div class="match_result_result">							      			
						      				<div class="match_header">
						      					<div class="live_text">
				      								Live
				      							</div>
						      					<div class="event_time">
						      						05.07.2023 - 16:00
						      					</div>	
						      					<a href="#" class="match_heading">
						      						<span>Event name- Main Event - Group A</span>
						      						<span><img src="images/btns.svg" alt="img"></span>
						      					</a>	
						      				</div>
						      				<div class="matchvs_content">
						      					<div><a href="#"><img src="images/user-img/Avatar5.svg" /> HEROIC </a></div>
						      					<div class="vs_text_match"><span  class="vs_text_match_left">1</span>:<span class="vs_text_match_right">2</span></div>
						      					<div><a href="#">Quest <img src="images/user-img/Avatar4.svg" /> </a></div>
						      				</div>
							      		</div>
							      		<div class="match_result_result">
						      				<div class="match_header">
						      					<div class="event_time">
						      						05.07.2023 - 16:00
						      					</div>	
						      					<a href="#" class="match_heading">
						      						<span>Event name- Main Event - Group A</span>
						      						<span><img src="images/btns.svg" alt="img"></span>
						      					</a>	
						      				</div>
						      				<div class="matchvs_content">
						      					<div><a href="#"><img src="images/user-img/Avatar5.svg" /> HEROIC </a></div>
						      					<div class="vs_text_match"><span  class="vs_text_match_left">1</span>:<span class="vs_text_match_right">2</span></div>
						      					<div><a href="#">Quest <img src="images/user-img/Avatar4.svg" /> </a></div>
						      				</div>
							      		</div>
							      		<div class="match_result_result">
						      				<div class="match_header">
						      					<div class="event_time">
						      						05.07.2023 - 16:00
						      					</div>
						      					<a href="#" class="match_heading">
						      						<span>Event name- Main Event - Group A</span>
						      						<span><img src="images/btns.svg" alt="img"></span>
						      					</a>	
						      				</div>
						      				<div class="matchvs_content">
						      					<div><a href="#"><img src="images/user-img/Avatar5.svg" /> HEROIC </a></div>
						      					<div class="vs_text_match"><span  class="vs_text_match_left">1</span>:<span class="vs_text_match_right">2</span></div>
						      					<div><a href="#">Quest <img src="images/user-img/Avatar4.svg" /> </a></div>
						      				</div>
							      		</div>	
							      </div>	
							    </div>
							    <div id="upcoming_matches" class="tab-pane fade">
								      <div class="match_results">
								      		<div class="match_result_result">
							      				<div class="match_header">
							      					<div class="live_header">
							      						<div class="live_text">
							      							Live
							      						</div>
							      						<div class="live_btn">
							      							<a href="#">
							      								<img src="images/play_icon.png" alt="">
							      							</a>
							      						</div>
							      					</div>
							      					<a href="#" class="match_heading live_img">
							      						<span>Event name- Main Event - Group A</span>
							      						<span><img src="images/btns.svg" alt="img"></span>
							      					</a>	
							      				</div>
							      				<div class="matchvs_content">
							      					<div><img src="images/user_avtar.svg" /> HEROIC</div>
							      					<div>VS</div>
							      					<div>Quest <img src="images/user_avtar.svg" /> </div>
							      				</div>
								      		</div>
								      		<div class="match_result_result">
							      				<div class="match_header">
							      					<div class="event_time">
							      						05.07.2023 - 16:00
							      					</div>	
							      					<a href="#" class="match_heading">
							      						<span>Event name- Main Event - Group A</span>
							      						<span><img src="images/btns.svg" alt="img"></span>
							      					</a>	
							      				</div>
							      				<div class="matchvs_content">
							      					<div><img src="images/user_avtar.svg" /> HEROIC</div>
							      					<div>VS</div>
							      					<div>Quest <img src="images/user_avtar.svg" /> </div>
							      				</div>
								      		</div>
								      		<div class="match_result_result">
							      				<div class="match_header">
							      					<div class="event_time">
							      						05.07.2023 - 16:00
							      					</div>
							      					<a href="#" class="match_heading">
							      						<span>Event name- Main Event - Group A</span>
							      						<span><img src="images/btns.svg" alt="img"></span>
							      					</a>	
							      				</div>
							      				<div class="matchvs_content">
							      					<div><img src="images/user_avtar.svg" /> HEROIC</div>
							      					<div>VS</div>
							      					<div>Quest <img src="images/user_avtar.svg" /> </div>
							      				</div>
								      		</div>	
								      </div>
							    </div>
							  </div>

							<div class="bottom_btns">
								<a href="#" class="btn btn-outline-primary ml-2">View more <img src="images/black_arrow.svg"> </a>	
							</div>  

						</div>	  
				  </div>
			</div>  	
		</div>

	</section>

	<section class="rankings">
		<div class="container">
			<div class="row">
				  <div class="col-md-12">
				  		<div class="heading_text text-center">
				  				Rankings
				  		</div>
				  		<div class="matches_list">
				  			<div class="ranked_box">
				  				<div class="rank_counter">#1</div>
				  				<div class="img_with_points">
				  					<img src="images/rank_img.svg" alt=""> +9.5
				  				</div>
				  				<div class="rank_win maps_number">
				  					Maps <span>100</span>
				  				</div>
				  				<div class="percentage_circel">
				  					<div role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="--value:68"></div>
				  				</div>
				  				<div class="rank_win">
				  					wins <span>24</span>
				  				</div>
				  				<div class="rank_loss">
				  					Loses <span>16</span>
				  				</div>
				  				<div class="raking_avtar">
				  					<img src="images/user-img/Avatar1.svg" alt="user">
				  				</div>
				  				<div class="rank_country">
				  					<span>AZ</span>
				  				</div>
				  				<div class="rank_username">
				  					<a href="#">HEROIC</a>
				  				</div>
				  				<div class="tank_tags_list">
				  					<a href="#">Jabi</a>
				  					<a href="#">TeSes</a>
				  					<a href="#">cadiaN</a>
				  					<a href="#">stavn</a>
				  					<a href="#">Sjush</a>
				  				</div>
				  			</div>
				  			<div class="ranked_box">
				  				<div class="rank_counter">#2</div>
				  				<div class="img_with_points">
				  					<img src="images/rank_img.svg" alt=""> +9.5
				  				</div>
				  				<div class="rank_win maps_number">
				  					Maps <span>100</span>
				  				</div>
				  				<div class="percentage_circel">
				  					<div role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="--value:68"></div>
				  				</div>
				  				<div class="rank_win">
				  					wins <span>24</span>
				  				</div>
				  				<div class="rank_loss">
				  					Loses <span>16</span>
				  				</div>
				  				<div class="raking_avtar">
				  					<img src="images/user-img/Avatar2.svg" alt="user">
				  				</div>
				  				<div class="rank_country">
				  					<span>AZ</span>
				  				</div>
				  				<div class="rank_username">
				  					<a href="#">HEROIC</a>
				  				</div>
				  				<div class="tank_tags_list">
				  					<a href="#">Jabi</a>
				  					<a href="#">TeSes</a>
				  					<a href="#">cadiaN</a>
				  					<a href="#">stavn</a>
				  					<a href="#">Sjush</a>
				  				</div>
				  			</div>
				  			<div class="ranked_box">
				  				<div class="rank_counter">#3</div>
				  				<div class="img_with_points">
				  					<img src="images/rank_img.svg" alt=""> +9.5
				  				</div>
				  				<div class="rank_win maps_number">
				  					Maps <span>100</span>
				  				</div>
				  				<div class="percentage_circel">
				  					<div role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="--value:68"></div>
				  				</div>
				  				<div class="rank_win">
				  					wins <span>24</span>
				  				</div>
				  				<div class="rank_loss">
				  					Loses <span>16</span>
				  				</div>
				  				<div class="raking_avtar">
				  					<img src="images/user-img/Avatar3.svg" alt="user">
				  				</div>
				  				<div class="rank_country">
				  					<span>AZ</span>
				  				</div>
				  				<div class="rank_username">
				  					<a href="#">HEROIC</a>
				  				</div>
				  				<div class="tank_tags_list">
				  					<a href="#">Jabi</a>
				  					<a href="#">TeSes</a>
				  					<a href="#">cadiaN</a>
				  					<a href="#">stavn</a>
				  					<a href="#">Sjush</a>
				  				</div>
				  			</div>
				  			<div class="ranked_box">
				  				<div class="rank_counter">#4</div>
				  				<div class="img_with_points">
				  					<img src="images/rank_img.svg" alt=""> +9.5
				  				</div>
				  				<div class="rank_win maps_number">
				  					Maps <span>100</span>
				  				</div>
				  				<div class="percentage_circel">
				  					<div role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="--value:68"></div>
				  				</div>
				  				<div class="rank_win">
				  					wins <span>24</span>
				  				</div>
				  				<div class="rank_loss">
				  					Loses <span>16</span>
				  				</div>
				  				<div class="raking_avtar">
				  					<img src="images/user-img/Avatar4.svg" alt="user">
				  				</div>
				  				<div class="rank_country">
				  					<span>AZ</span>
				  				</div>
				  				<div class="rank_username">
				  					<a href="#">HEROIC</a>
				  				</div>
				  				<div class="tank_tags_list">
				  					<a href="#">Jabi</a>
				  					<a href="#">TeSes</a>
				  					<a href="#">cadiaN</a>
				  					<a href="#">stavn</a>
				  					<a href="#">Sjush</a>
				  				</div>
				  			</div>
				  			<div class="ranked_box">
				  				<div class="rank_counter">#5</div>
				  				<div class="img_with_points">
				  					<img src="images/rank_img.svg" alt=""> +9.5
				  				</div>
				  				<div class="rank_win maps_number">
				  					Maps <span>100</span>
				  				</div>
				  				<div class="percentage_circel">
				  					<div role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="--value:68"></div>
				  				</div>
				  				<div class="rank_win">
				  					wins <span>24</span>
				  				</div>
				  				<div class="rank_loss">
				  					Loses <span>16</span>
				  				</div>
				  				<div class="raking_avtar">
				  					<img src="images/user-img/Avatar5.svg" alt="user">
				  				</div>
				  				<div class="rank_country">
				  					<span>AZ</span>
				  				</div>
				  				<div class="rank_username">
				  					<a href="#">HEROIC</a>
				  				</div>
				  				<div class="tank_tags_list">
				  					<a href="#">Jabi</a>
				  					<a href="#">TeSes</a>
				  					<a href="#">cadiaN</a>
				  					<a href="#">stavn</a>
				  					<a href="#">Sjush</a>
				  				</div>
				  			</div>
				  			<div class="ranked_box">
				  				<div class="rank_counter">#6</div>
				  				<div class="img_with_points">
				  					<img src="images/rank_img.svg" alt=""> +9.5
				  				</div>
				  				<div class="rank_win maps_number">
				  					Maps <span>100</span>
				  				</div>
				  				<div class="percentage_circel">
				  					<div role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="--value:68"></div>
				  				</div>
				  				<div class="rank_win">
				  					wins <span>24</span>
				  				</div>
				  				<div class="rank_loss">
				  					Loses <span>16</span>
				  				</div>
				  				<div class="raking_avtar">
				  					<img src="images/user-img/Avatar1.svg" alt="user">
				  				</div>
				  				<div class="rank_country">
				  					<span>AZ</span>
				  				</div>
				  				<div class="rank_username">
				  					<a href="#">HEROIC</a>
				  				</div>
				  				<div class="tank_tags_list">
				  					<a href="#">Jabi</a>
				  					<a href="#">TeSes</a>
				  					<a href="#">cadiaN</a>
				  					<a href="#">stavn</a>
				  					<a href="#">Sjush</a>
				  				</div>
				  			</div>
				  			<div class="ranked_box">
				  				<div class="rank_counter">#7</div>
				  				<div class="img_with_points">
				  					<img src="images/rank_img.svg" alt=""> +9.5
				  				</div>
				  				<div class="rank_win maps_number">
				  					Maps <span>100</span>
				  				</div>
				  				<div class="percentage_circel">
				  					<div role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="--value:68"></div>
				  				</div>
				  				<div class="rank_win">
				  					wins <span>24</span>
				  				</div>
				  				<div class="rank_loss">
				  					Loses <span>16</span>
				  				</div>
				  				<div class="raking_avtar">
				  					<img src="images/user-img/Avatar3.svg" alt="user">
				  				</div>
				  				<div class="rank_country">
				  					<span>AZ</span>
				  				</div>
				  				<div class="rank_username">
				  					<a href="#">HEROIC</a>
				  				</div>
				  				<div class="tank_tags_list">
				  					<a href="#">Jabi</a>
				  					<a href="#">TeSes</a>
				  					<a href="#">cadiaN</a>
				  					<a href="#">stavn</a>
				  					<a href="#">Sjush</a>
				  				</div>
				  			</div>
				  			<div class="ranked_box">
				  				<div class="rank_counter">#8</div>
				  				<div class="img_with_points">
				  					<img src="images/rank_img.svg" alt=""> +9.5
				  				</div>
				  				<div class="rank_win maps_number">
				  					Maps <span>100</span>
				  				</div>
				  				<div class="percentage_circel">
				  					<div role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="--value:68"></div>
				  				</div>
				  				<div class="rank_win">
				  					wins <span>24</span>
				  				</div>
				  				<div class="rank_loss">
				  					Loses <span>16</span>
				  				</div>
				  				<div class="raking_avtar">
				  					<img src="images/user-img/Avatar4.svg" alt="user">
				  				</div>
				  				<div class="rank_country">
				  					<span>AZ</span>
				  				</div>
				  				<div class="rank_username">
				  					<a href="#">HEROIC</a>
				  				</div>
				  				<div class="tank_tags_list">
				  					<a href="#">Jabi</a>
				  					<a href="#">TeSes</a>
				  					<a href="#">cadiaN</a>
				  					<a href="#">stavn</a>
				  					<a href="#">Sjush</a>
				  				</div>
				  			</div>
				  			<div class="ranked_box">
				  				<div class="rank_counter">#9</div>
				  				<div class="img_with_points">
				  					<img src="images/rank_img.svg" alt=""> +9.5
				  				</div>
				  				<div class="rank_win maps_number">
				  					Maps <span>100</span>
				  				</div>
				  				<div class="percentage_circel">
				  					<div role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="--value:68"></div>
				  				</div>
				  				<div class="rank_win">
				  					wins <span>24</span>
				  				</div>
				  				<div class="rank_loss">
				  					Loses <span>16</span>
				  				</div>
				  				<div class="raking_avtar">
				  					<img src="images/user-img/Avatar2.svg" alt="user">
				  				</div>
				  				<div class="rank_country">
				  					<span>AZ</span>
				  				</div>
				  				<div class="rank_username">
				  					<a href="#">HEROIC</a>
				  				</div>
				  				<div class="tank_tags_list">
				  					<a href="#">Jabi</a>
				  					<a href="#">TeSes</a>
				  					<a href="#">cadiaN</a>
				  					<a href="#">stavn</a>
				  					<a href="#">Sjush</a>
				  				</div>
				  			</div>
				  			<div class="ranked_box">
				  				<div class="rank_counter">#10</div>
				  				<div class="img_with_points">
				  					<img src="images/rank_img.svg" alt=""> +9.5
				  				</div>
				  				<div class="rank_win maps_number">
				  					Maps <span>100</span>
				  				</div>
				  				<div class="percentage_circel">
				  					<div role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="--value:68"></div>
				  				</div>
				  				<div class="rank_win">
				  					wins <span>24</span>
				  				</div>
				  				<div class="rank_loss">
				  					Loses <span>16</span>
				  				</div>
				  				<div class="raking_avtar">
				  					<img src="images/user-img/Avatar3.svg" alt="user">
				  				</div>
				  				<div class="rank_country">
				  					<span>AZ</span>
				  				</div>
				  				<div class="rank_username">
				  					<a href="#">HEROIC</a>
				  				</div>
				  				<div class="tank_tags_list">
				  					<a href="#">Jabi</a>
				  					<a href="#">TeSes</a>
				  					<a href="#">cadiaN</a>
				  					<a href="#">stavn</a>
				  					<a href="#">Sjush</a>
				  				</div>
				  			</div>	
				  		</div>	
				  		<div class="bottom_btns">
							<a href="#" class="btn btn-outline-primary ml-2">View more <img src="images/black_arrow.svg"> </a>	
						</div>	
				  </div>
			</div>  	
		</div>
	</section>

	<section class="latest_matches">
		<div class="container">
			<div class="row">
				  <div class="col-md-12">
				  		<div class="heading_text text-center">
				  				latest matches
				  		</div>
				  </div>
			</div>  	
		</div>

		<div class="container">
			<div class="row">
				  <div class="col-md-12">
				  		<div class="laest_matches_subheadings">
				  			<div class="latest_m_left">
				  				Watch our latest videos
				  			</div>
				  			<div class="latest_m_left">
				  				<a href="#" class="btn home-banner-btn">watch us in youtube</a>				  				
				  			</div>
				  		</div>	
				  </div>
			</div>  	
		</div>

		<div class="container">
			<div class="row">
				  <div class="col-md-12">
				  		<div class="right_side_matches_block">
				  				<div class="latest_match_block">
						  			<div class="latest_m_image">
						  				 <img src="images/latest_matches.svg" alt="">
						  				 <a class="play_icon" href="#">
						  				 	<img src="images/play.svg" alt="">
						  				 </a>
						  			</div>
						  			<div class="match_details_bottom">
						  				<div class="latest_match_heading">
					      					<h4><a href="#">VIRL 2023 Summer</a></h4>
					      				</div>
						  				<div class="match_time">3 Jul 2023</div>
						  				<div class="matchvs_content_match">
					      					<div><a href="#"><img src="images/user-img/Avatar4.svg"> HEROIC </a></div>
					      					<div>VS</div>
					      					<div><a href="#"> Quest <img src="images/user-img/Avatar5.svg"></a> </div>
					      				</div>
						  			</div>	
						  		</div>
						  		<div class="latest_match_block">
						  			<div class="latest_m_image">
						  				 <img src="images/latest_matches.svg" alt="">
						  				 <a class="play_icon" href="#">
						  				 	<img src="images/play.svg" alt="">
						  				 </a>
						  			</div>
						  			<div class="match_details_bottom">
						  				<div class="latest_match_heading">
					      					<h4><a href="#">VIRL 2023 Summer</a></h4>
					      				</div>
						  				<div class="match_time">3 Jul 2023</div>
						  				<div class="matchvs_content_match">
					      					<div><a href="#"><img src="images/user-img/Avatar4.svg"> HEROIC </a></div>
					      					<div>VS</div>
					      					<div><a href="#"> Quest <img src="images/user-img/Avatar5.svg"></a> </div>
					      				</div>
						  			</div>	
						  		</div>
						  		<div class="latest_match_block">
						  			<div class="latest_m_image">
						  				 <img src="images/latest_matches.svg" alt="">
						  				 <a class="play_icon" href="#">
						  				 	<img src="images/play.svg" alt="">
						  				 </a>
						  			</div>
						  			<div class="match_details_bottom">
						  				<div class="latest_match_heading">
					      					<h4><a href="#">VIRL 2023 Summer</a></h4>
					      				</div>
						  				<div class="match_time">3 Jul 2023</div>
						  				<div class="matchvs_content_match">
					      					<div><a href="#"><img src="images/user-img/Avatar4.svg"> HEROIC </a></div>
					      					<div>VS</div>
					      					<div><a href="#"> Quest <img src="images/user-img/Avatar5.svg"></a> </div>
					      				</div>
						  			</div>	
						  		</div>
						  		<div class="latest_match_block">
						  			<div class="latest_m_image">
						  				 <img src="images/latest_matches.svg" alt="">
						  				 <a class="play_icon" href="#">
						  				 	<img src="images/play.svg" alt="">
						  				 </a>
						  			</div>
						  			<div class="match_details_bottom">
						  				<div class="latest_match_heading">
					      					<h4><a href="#">VIRL 2023 Summer</a></h4>
					      				</div>
						  				<div class="match_time">3 Jul 2023</div>
						  				<div class="matchvs_content_match">
					      					<div><a href="#"><img src="images/user-img/Avatar4.svg"> HEROIC </a></div>
					      					<div>VS</div>
					      					<div><a href="#"> Quest <img src="images/user-img/Avatar5.svg"></a> </div>
					      				</div>
						  			</div>	
						  		</div>
						  		<div class="latest_match_block">
						  			<div class="latest_m_image">
						  				 <img src="images/latest_matches.svg" alt="">
						  				 <a class="play_icon" href="#">
						  				 	<img src="images/play.svg" alt="">
						  				 </a>
						  			</div>
						  			<div class="match_details_bottom">
						  				<div class="latest_match_heading">
					      					<h4><a href="#">VIRL 2023 Summer</a></h4>
					      				</div>
						  				<div class="match_time">3 Jul 2023</div>
						  				<div class="matchvs_content_match">
					      					<div><a href="#"><img src="images/user-img/Avatar4.svg"> HEROIC </a></div>
					      					<div>VS</div>
					      					<div><a href="#"> Quest <img src="images/user-img/Avatar5.svg"></a> </div>
					      				</div>
						  			</div>	
						  		</div>
						  		<div class="latest_match_block">
						  			<div class="latest_m_image">
						  				 <img src="images/latest_matches.svg" alt="">
						  				 <a class="play_icon" href="#">
						  				 	<img src="images/play.svg" alt="">
						  				 </a>
						  			</div>
						  			<div class="match_details_bottom">
						  				<div class="latest_match_heading">
					      					<h4><a href="#">VIRL 2023 Summer</a></h4>
					      				</div>
						  				<div class="match_time">3 Jul 2023</div>
						  				<div class="matchvs_content_match">
					      					<div><a href="#"><img src="images/user-img/Avatar4.svg"> HEROIC </a></div>
					      					<div>VS</div>
					      					<div><a href="#"> Quest <img src="images/user-img/Avatar5.svg"></a> </div>
					      				</div>
						  			</div>	
						  		</div>
						  		<div class="latest_match_block">
						  			<div class="latest_m_image">
						  				 <img src="images/latest_matches.svg" alt="">
						  				 <a class="play_icon" href="#">
						  				 	<img src="images/play.svg" alt="">
						  				 </a>
						  			</div>
						  			<div class="match_details_bottom">
						  				<div class="latest_match_heading">
					      					<h4><a href="#">VIRL 2023 Summer</a></h4>
					      				</div>
						  				<div class="match_time">3 Jul 2023</div>
						  				<div class="matchvs_content_match">
					      					<div><a href="#"><img src="images/user-img/Avatar4.svg"> HEROIC </a></div>
					      					<div>VS</div>
					      					<div><a href="#"> Quest <img src="images/user-img/Avatar5.svg"></a> </div>
					      				</div>
						  			</div>	
						  		</div>
						  		<div class="latest_match_block">
						  			<div class="latest_m_image">
						  				 <img src="images/latest_matches.svg" alt="">
						  				 <a class="play_icon" href="#">
						  				 	<img src="images/play.svg" alt="">
						  				 </a>
						  			</div>
						  			<div class="match_details_bottom">
						  				<div class="latest_match_heading">
					      					<h4><a href="#">VIRL 2023 Summer</a></h4>
					      				</div>
						  				<div class="match_time">3 Jul 2023</div>
						  				<div class="matchvs_content_match">
					      					<div><a href="#"><img src="images/user-img/Avatar4.svg"> HEROIC </a></div>
					      					<div>VS</div>
					      					<div><a href="#"> Quest <img src="images/user-img/Avatar5.svg"></a> </div>
					      				</div>
						  			</div>	
						  		</div>
				  		</div>	
				  </div>
			</div>  	
		</div>

		<div class="container">
			<div class="row">
				  <div class="col-md-12">
				  		<div class="bottom_btns">
							<a href="#" class="btn btn-outline-primary ml-2">View more <img src="images/black_arrow.svg"> </a>	
						</div>
				  </div>
			</div>  	
		</div>

	</section>
</div>

@endsection