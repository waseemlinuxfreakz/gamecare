

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
                                    <a data-bs-toggle="modal" data-bs-target="#CreateMatches" class="create_matches_btn" href="#">create
                                        matches</a>
                                </div>
                            </div>
                    
                            <div class="team_matches_grid">
                                <div class="team_matches_grid_left">
                                    <a href="#">SSC Summer Cup 2023</a>
                                </div>
                                <div class="team_matches_grid_right">
                                    <a href="#" class="edit_icon_t_list" href="#"><img src="images/user-img/ButtonEdit.svg" alt=""></a>
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