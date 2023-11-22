@push('js')
<script>
      // Use jQuery to capture the team_id and set it in the modal
      $(document).ready(function () {
        $('.openModalButton').click(function () {
            // Capture the team_id using the data attribute
            var capturedTeamId = $(this).data('team_id');

            // Set the captured team_id to the input field in the modal
            $('#capturedTeamId').val(capturedTeamId);
            console.log(capturedTeamId);
        });
    });
</script>
    
@endpush
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


                            @if (isset($teams) && $teams->isNotEmpty())
                            <div class="no_team_area">
                                <a data-bs-toggle="modal" data-bs-target="#CreateTeam"
                                    class="btn save_btn send-email-btn">create team</a>
                            </div>
                            <h3>Teams Created By you</h3>


                            @if (isset($teams) && $teams->isNotEmpty())
                            @foreach ($teams as $team)
                            <div class="group_member_team">
                                <div class="member_of_team">
                                    <div class="team_author">
                                        <div class="team_author_pic">
                                            <img src="{{ asset('storage/'.$team->team_logo) }}" alt="">
                                        </div>
                                        <div class="team_author_name">
                                            {{ $team->created_by }}
                                        </div>
                                    </div>

                                    <div class="team_member_titles">
                                        <div class="team_member_titles_left">
                                            <h5 class="team_member_text">Team members</h5>
                                        </div>
                                        <div class="team_member_titles_right upper_text">
                                            <a class="openModalButton" data-bs-toggle="modal" data-bs-target="#AddTeamMember" data-team_id="{{ $team->id }}" href="#">add
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

                                        <form action="{{ route('account.teams.destroy', $team->id) }}" method="post"
                                            onsubmit="return confirm('Are you sure you want to delete this team?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn save_btn send-email-btn delete-account-btn">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            @endif


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
                        <label>Player Name</label>
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
                <form action="{{ route('account.teams.addMember') }}" method="post">
                    @csrf
                    <div class="create_team_box">
                        <div class="create_team_box_right">
                            <h5>Invite your team members</h5>

                            <input type="text" class="form-control" name="team_id" id="capturedTeamId" hidden>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="form-control" type="email" name="email" placeholder="adam@gmail.com" required>
                            </div>

                            <div class="form-group">
                                <label>Player Name</label>
                                <input type="text" name="player_name" placeholder="John Doe" required>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn accept_btn">Send Invites <img src="{{ url('images/t_arrow.svg') }}"
                            alt=""></button>
                </form>

            </div>
        </div>
    </div>
</div>




@endsection