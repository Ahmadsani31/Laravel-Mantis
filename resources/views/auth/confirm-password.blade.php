@extends('layouts.guest')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Confirm Password') }}</div>

        <div class="card-body">
            <div class="mb-3">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <x-forms.horizontal-input label="{{ __('Password') }}" type="password" name="password" labelCol="3"
                    inputCol="9" required autocomplete="current-password" />
                <div class="row mb-0">
                    <div class="col-md-5 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Confirm') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
