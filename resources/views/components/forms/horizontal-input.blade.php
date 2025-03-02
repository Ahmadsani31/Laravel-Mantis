<div class="form-group row mb-3">
    <!-- Label dengan ukuran kolom dinamis -->
    <label for="{{ $name }}" class="col-sm-{{ $labelCol }} col-form-label text-md-end">
        {{ $label }} @if ($required)
            <span class="text-danger">*</span>
        @endif
    </label>

    <!-- Input dengan ukuran kolom dinamis -->
    <div class="col-sm-{{ $inputCol }}">
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
            class="form-control @error($name) is-invalid @enderror"
            @if ($value) value="{{ old($name, $value) }}" @endif
            @if ($placeholder) placeholder="{{ $placeholder }}" @endif
            @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
            @if ($required) required @endif @if ($autofocus) autofocus @endif>
        @error($name)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
