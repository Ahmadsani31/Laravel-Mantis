@extends('layouts.guest')

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h3 class="mb-0"><b>{{ __('Register') }}</b></h3>
                <a href="{{ route('login') }}" class="link-primary">Already have an account?</a>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <x-forms.input type="text" id="name" name="name" label="{{ __('Name') }}"
                    placeholder="Your Name" value="{{ old('name') }}" required autocomplete="name" autofocus />

                <x-forms.input type="email" id="email" name="email" label="{{ __('Email') }}"
                    value="{{ old('email') }}" placeholder="Your Email" required autocomplete="email" />

                <x-forms.input type="password" id="password" name="password" label="{{ __('Password') }}"
                    placeholder="Your Password" required autocomplete="new-password" />

                <x-forms.input type="password" id="password_confirmation" name="password_confirmation"
                    label="{{ __('Confirm Password') }}" required />

                <p class="mt-4 text-sm text-muted">By Signing up, you agree to our <a href="#" class="text-primary">
                        Terms
                        of Service </a> and <a href="#" class="text-primary"> Privacy Policy</a></p>
                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                </div>
            </form>
            <div class="saprator mt-3">
                <span>Sign up with</span>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="d-grid">
                        <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                            <img src="../assets/images/authentication/google.svg" alt="img"> <span
                                class="d-none d-sm-inline-block"> Google</span>
                        </button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-grid">
                        <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                            <img src="../assets/images/authentication/twitter.svg" alt="img"> <span
                                class="d-none d-sm-inline-block"> Twitter</span>
                        </button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-grid">
                        <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                            <img src="../assets/images/authentication/facebook.svg" alt="img"> <span
                                class="d-none d-sm-inline-block"> Facebook</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
