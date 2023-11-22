
<div class="left_side_inner">
    <div class="user_item">
        <div class="nav nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a href="{{ route('account.teams.account_details') }}" class="nav-link active"> <img src="{{ url('images/user-img/user-icon-1.svg') }}" class="icons_img"
                    alt="user-icon-1"> <span>account datails</span></a>
            <a href="{{ route('account.teams.show') }}" class="nav-link"> <img
                     src="{{ url('images/user-img/users-icon.svg') }}" class="icons_img" alt="users-icon"> <span> team
                </span> </a>
            <a href="{{ route('account.teams.notifications') }}" class="nav-link" > <img
                    src="{{ url('images/user-img/message-circle-icon.svg') }}" class="icons_img"
                    alt="message-circle-icon"> <span> notifications </span></a>
            <a href="{{ route('account.teams.events') }}" class="nav-link" > <img
                    src="{{ url('images/user-img/squarehalf-icon.svg') }}" class="icons_img" alt="squarehalf-icon">
                <span> events </span></a>
            <a href="{{ route('account.teams.matches') }}" class="nav-link">
                <img src="{{ url('images/user-img/star.svg') }}" class="icons_img" alt="star-icon">
                <span>Matches</span>
            </a>
            <a href="{{ route('account.teams.participants') }}" class="nav-link" >
                <img src="{{ url('images/user-img/star.svg') }}" class="icons_img" alt="star-icon">
                <span>Participants</span>
            </a>
            <a class="nav-link" href="{{ route('logout') }}">
                <img src="{{ url('images/user-img/log-out-icon.svg') }}" class="icons_img" alt="log-out-icon">
                <span>Log Out</span>
            </a>
        </div>
    </div>
</div>