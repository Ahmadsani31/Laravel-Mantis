@extends('layouts.guest')

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h3 class="mb-0"><b>{{ __('Reset Password') }}</b></h3>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="mb-3">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <x-forms.input type="email" id="email" name="email" label="Email Address" value="{{ old('email') }}"
                    required autocomplete="email" autofocus />

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
