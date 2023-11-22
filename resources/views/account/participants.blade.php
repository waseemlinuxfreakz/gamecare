

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
                                                <a class="nav-link" data-bs-toggle="tab" href="#participate_upcoming_event">Upcoming
                                                    events</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#participate_past_event">Past events</a>
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
                                                <a href="#" class="edit_icon_t_list new_box_open_participate"><img
                                                        src="images/arrow_bottom.svg" alt=""></a>
                                            </div>
                                        </div>
                    
                    
                                        <div class="participate_show">
                    
                    
                                            <ul class="nav nav-tabs tabs_style" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link with_popup_width active" data-bs-toggle="tab"
                                                        href="#participate_current">Current
                                                        participants</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#searchterm">search
                                                        teams</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#applying">Applying</a>
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
                                                            <a href="#"><img src="images/user-img/trash_btn.png" alt=""></a>
                                                        </div>
                                                    </div>
                    
                                                    <div class="participate_current_user_list">
                                                        <div class="participate_current_user_list_left">
                                                            <img src="images/user-img/Avatar5.svg" alt="">
                                                            Pheonix
                                                        </div>
                                                        <div class="participate_current_user_list_right">
                                                            <a href="#"><img src="images/user-img/trash_btn.png" alt=""></a>
                                                        </div>
                                                    </div>
                    
                    
                                                    <div class="participate_current_user_list">
                                                        <div class="participate_current_user_list_left">
                                                            <img src="images/user-img/Avatar3.svg" alt="">
                                                            Tricked
                                                        </div>
                                                        <div class="participate_current_user_list_right">
                                                            <a href="#"><img src="images/user-img/trash_btn.png" alt=""></a>
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
                                                            <a href="#" class="create_matches_btn" href="#">Submit</a>
                                                        </div>
                                                    </div>
                    
                    
                                                    <div class="participate_current_user_list">
                                                        <div class="participate_current_user_list_left">
                                                            <img src="images/user-img/Avatar5.svg" alt="">
                                                            Pheonix
                                                        </div>
                                                        <div class="participate_current_user_list_right">
                                                            <a href="#" class="create_matches_btn" href="#">Submit</a>
                                                        </div>
                                                    </div>
                    
                    
                                                    <div class="participate_current_user_list">
                                                        <div class="participate_current_user_list_left">
                                                            <img src="images/user-img/Avatar2.svg" alt=""> Natus
                                                            Vincer
                                                        </div>
                                                        <div class="participate_current_user_list_right">
                                                            <a href="#" class="create_matches_btn" href="#">Submit</a>
                                                        </div>
                                                    </div>
                    
                                                    <div class="participate_current_user_list">
                                                        <div class="participate_current_user_list_left">
                                                            <img src="images/user-img/Avatar2.svg" alt=""> Natus
                                                            Vincer
                                                        </div>
                                                        <div class="participate_current_user_list_right">
                                                            <a href="#" class="create_matches_btn" href="#">Submit</a>
                                                        </div>
                                                    </div>
                    
                                                    <div class="participate_current_user_list">
                                                        <div class="participate_current_user_list_left">
                                                            <img src="images/user-img/Avatar2.svg" alt=""> Natus
                                                            Vincer
                                                        </div>
                                                        <div class="participate_current_user_list_right">
                                                            <a href="#" class="create_matches_btn" href="#">Submit</a>
                                                        </div>
                                                    </div>
                    
                    
                                                    <div class="participate_current_user_list">
                                                        <div class="participate_current_user_list_left">
                                                            <img src="images/user-img/Avatar2.svg" alt=""> Natus
                                                            Vincer
                                                        </div>
                                                        <div class="participate_current_user_list_right">
                                                            <a href="#" class="create_matches_btn" href="#">Submit</a>
                                                        </div>
                                                    </div>
                    
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
                                                            <li class="page-item"><a class="page-link page_active" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">4</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">5</a>
                                                            </li>
                                                            <li class="page-item disabled"><span class="page-link">...</span></li>
                                                            <li class="page-item"><a class="page-link" href="#">10</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                                        aria-hidden="true">
                                                                        <i class="fas fa-chevron-right"></i></span></a>
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
                                                                <a href="#" class="create_matches_btn with_reject_btn" href="#">Reject</a>
                                                                <a href="#" class="create_matches_btn" href="#">accept</a>
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
                                                                <a href="#" class="create_matches_btn with_reject_btn" href="#">Reject</a>
                                                                <a href="#" class="create_matches_btn" href="#">accept</a>
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
                                                                <a href="#" class="create_matches_btn with_reject_btn" href="#">Reject</a>
                                                                <a href="#" class="create_matches_btn" href="#">accept</a>
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
                                                                <a href="#" class="create_matches_btn with_reject_btn" href="#">Reject</a>
                                                                <a href="#" class="create_matches_btn" href="#">accept</a>
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
                                                <a href="#" class="edit_icon_t_list new_box_open_participate"><img
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
                                                <a href="#" class="edit_icon_t_list new_box_open_participate"><img
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
                                                <a href="#" class="edit_icon_t_list new_box_open_participate"><img
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
                                                <a href="#" class="edit_icon_t_list new_box_open_participate"><img
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
                                                <a href="#" class="edit_icon_t_list new_box_open_participate"><img
                                                        src="images/arrow_bottom.svg" alt=""></a>
                                            </div>
                                        </div>
                    
                                        <div class="participate_show">
                                            454555545
                                        </div>
                    
                    
                                        <div class="pagination_list">
                                            <ul class="pagination">
                                                <li class="page-item" aria-disabled="true">
                                                    <a class="page-link disabled_link" href="#" aria-label="Previous" tabindex="-1"
                                                        aria-disabled="true">
                                                        <span aria-hidden="true">
                                                            <i class="fas fa-chevron-left"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link page_active" href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item disabled"><span class="page-link">...</span>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">10</a></li>
                                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                            aria-hidden="true">
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