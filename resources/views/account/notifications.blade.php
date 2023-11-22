
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

                </div>









            </div>
        </div>
    </div>
    </div>
    </div>
</section>

@endsection