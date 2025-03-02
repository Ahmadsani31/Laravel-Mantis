<div class="card">
    <div class="card-header">{{ __('Profile Information') }}</div>

    <div class="card-body">
        <form id="send-verification" class="d-none" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')
            <x-forms.horizontal-input label="{{ __('Name') }}" type="text" name="name"
                value="{{ old('name', $user->name) }}" placeholder="Name" inputCol="8" required autofocus
                autocomplete="name" />

            <x-forms.horizontal-input label="{{ __('Email') }}" type="email" name="email"
                value="{{ old('email', $user->email) }}" placeholder="Email" inputCol="8" required
                autocomplete="email" />


            <div class="row mb-0">
                <div class="col-md-8 offset-md-2">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                    @if (session('status') === 'profile-updated')
                        <div class="mt-3">
                            <div class="alert alert-success m-0" role="alert">{{ __('Saved.') }}</div>
                        </div>
                    @endif

                </div>

            </div>
        </form>
    </div>
</div>
