@extends('layouts.guest')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Reset Password') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <x-forms.horizontal-input label="{{ __('Email') }}" type="email" name="email"
                    value="{{ old('email', $request->email) }}" placeholder="Email" labelCol="4" inputCol="8" required
                    autocomplete="email" />
                <x-forms.horizontal-input label="{{ __('Password') }}" type="password" name="password"
                    placeholder="Password" labelCol="4" inputCol="8" required autocomplete="new-password" />

                <x-forms.horizontal-input label="{{ __('Confirm Password') }}" type="password" name="password_confirmation"
                    labelCol="4" inputCol="8" required />

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
