<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="left-side">
        <div class="profile">
            <img src="{{ asset('assets/img/users/') }}/{{ Auth::user()->profile_photo }}" alt="">
            <h3>{{ Auth::user()->name }}</h3>
            <p>{{ Auth::user()->phone }}</p>
            <div class="btn">
                <a class="btn btn-outline-info" href="{{ route('user.profile.edit') }}"><i class="far fa-edit"></i> profile edit </a>
            </div>
        </div>
        <div class="left-menu">
            <ul>
                <li class="@yield('active_dashboard')">
                    <a href="{{ route('dashboard.index') }}"><i class="fas fa-id-card"></i>&nbsp; Dashboard </a>
                </li>
                <li class="@yield('active_profile')">
                    <a href="{{ route('user.profile') }}"><i class="fas fa-user-alt"></i>&nbsp; My Profile</a>
                </li>
                <li class="@yield('active_profile_edit')">
                    <a href="{{ route('user.profile.edit') }}"><i class="far fa-edit"></i>&nbsp; Profile Update</a>
                </li>
                <li class="@yield('active_setting')">
                    <a href="{{ route('user.setting') }}"><i class="fas fa-cog"></i>&nbsp; Profile Settings</a>
                </li>
                <li class="@yield('active_spacebooked')">
                    <a href="{{ route('booked.index') }}"><i class="fas fa-car"></i>&nbsp; Booked Space</a>
                </li>
                <li class="@yield('active_transection')">
                    <a href="{{ route('history.index') }}"><i class="fas fa-money-check-alt"></i>&nbsp; Transection History</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button><i class="fas fa-sign-out-alt"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>








