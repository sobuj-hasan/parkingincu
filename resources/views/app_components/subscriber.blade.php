<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-1">
        <h3 class="mt-1">Get Notification</h3>
        <p class="paragraph">To get updated news and offer from parking fasilities</p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-2">
        <form method="GET" action="{{ route('subscribe') }}">
            <div class="input-group mt-3">
                <input type="email" class="custom-control" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ old('email') }}" name="email">
                <button type="submit" id="button-addon2"> Subscribe </button>
            </div>
            @error('email')
                <span class="text-danger fw-bolder"> {{ $message }} </span>
            @enderror
        </form>
    </div>
</div>


