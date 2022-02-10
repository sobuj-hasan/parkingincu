<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-1">
        <h3 class="mt-1">@lang('home.get_notification')</h3>
        <p class="paragraph">@lang('home.get_notification_updated_news')</p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-2">
        <form method="GET" action="{{ route('subscribe') }}">
            <div class="input-group mt-3">
                <input type="email" class="custom-control" placeholder="@lang('home.email_address')" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ old('email') }}" name="email">
                <button type="submit" id="button-addon2"> @lang('home.subscriber') </button>
            </div>
            @error('email')
                <span class="text-danger fw-bolder"> {{ $message }} </span>
            @enderror
        </form>
    </div>
</div>


