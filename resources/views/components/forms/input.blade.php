<div class="mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }} @if ($required)
            <span class="text-danger">*</span>
        @endif
    </label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}"
        class="form-control @error($name) is-invalid @enderror"
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
        @if ($required) required @endif @if ($autofocus) autofocus @endif>

    @error($name)
        <div class="invalid-feedback" role="alert">
            {{ $message }}
        </div>
    @enderror
</div>
