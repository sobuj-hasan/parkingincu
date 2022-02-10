<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-center">
        <img class="img-fluid" src="{{ asset('assets/img/photos/Rent out your parking space.png') }}" alt="img">
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <h2 class="section-header"><span>@lang('home.rent_your')</span> @lang('home.own_parking_space')</h2>
        <p class="paragraph mt-4">@lang('home.rent_your_own_parking_text1')</p>
        <p class="paragraph mt-4">@lang('home.rent_your_own_parking_text2')</p>
        <p class="paragraph mt-4">@lang('home.rent_your_own_parking_text3')</p>
        <div class="view-btn pt-5 mb-3">
            <a href="{{ route('register') }}">@lang('home.register_now') </a>
        </div>
    </div>
</div>
