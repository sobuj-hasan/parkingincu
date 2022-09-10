<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="left-side">
        <div class="profile">
            <img src="{{ asset('assets/img/users/') }}/{{ Auth::user()->profile_photo }}" alt="">
            <h3>{{ Auth::user()->name }}</h3>
            <p>{{ Auth::user()->phone }}</p>
            <div class="btn">
                <a class="btn btn-outline-info" href="{{ route('user.profile.edit') }}"><i class="far fa-edit"></i> @lang('home.profile_edit') </a>
            </div>
        </div>
        <div class="left-menu">
            <ul>
                <li class="@yield('active_dashboard')">
                    <a href="{{ route('dashboard.index') }}"><i class="fas fa-id-card"></i>&nbsp; @lang('home.dashboard') </a>
                </li>
                <li class="@yield('active_profile')">
                    <a href="{{ route('user.profile') }}"><i class="fas fa-user-alt"></i>&nbsp; @lang('home.my_profile')</a>
                </li>
                <li class="@yield('active_profile_edit')">
                    <a href="{{ route('user.profile.edit') }}"><i class="far fa-edit"></i>&nbsp; @lang('home.profile_update')</a>
                </li>
                <li class="@yield('active_setting')">
                    <a href="{{ route('user.setting') }}"><i class="fas fa-cog"></i>&nbsp; @lang('home.profile_settings')</a>
                </li>
                <li class="@yield('active_spacebooked')">
                    <a href="{{ route('booked.index') }}"><i class="fas fa-car"></i>&nbsp; @lang('home.booked_space')</a>
                </li>
                <li class="@yield('active_transection')">
                    <a href="{{ route('history.index') }}"><i class="fas fa-money-check-alt"></i>&nbsp; @lang('home.transaction_history')</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button><i class="fas fa-sign-out-alt"></i> @lang('home.logout')</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>








