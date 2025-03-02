<div class="card">
    <div class="card-header">{{ __('Update Password') }}</div>

    <div class="card-body">
        <div class="mb-3">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </div>
        @error('current_password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            @method('put')
            <div class="row mb-3">
                <label for="password" class="col-md-2 col-form-label text-md-end">
                    {{ __('Current Password') }}
                </label>

                <div class="col-md-8">
                    <input id="current_password" type="password"
                        class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                        name="current_password" required autocomplete="current-password">

                    @error('current_password', 'updatePassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-2 col-form-label text-md-end">
                    {{ __('New Password') }}
                </label>

                <div class="col-md-8">
                    <input id="password" type="password"
                        class="form-control @error('password', 'updatePassword') is-invalid @enderror" name="password"
                        required autocomplete="new-password">

                    @error('password', 'updatePassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password_confirmation" class="col-md-2 col-form-label text-md-end">
                    {{ __('Confirm Password') }}
                </label>

                <div class="col-md-8">
                    <input id="password_confirmation" type="password"
                        class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
                        name="password_confirmation" required>

                    @error('password_confirmation', 'updatePassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-2">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                    @if (session('status') === 'password-updated')
                        <div class="mt-3">
                            <div class="alert alert-success m-0" role="alert">{{ __('Saved.') }}</div>
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
