<div>
    <label for="{{ $name }}">{{ $msg  }}</label>
    <textarea name="{{$name}}" rows="{{$rows}}" id="{{$name}}"
        class="@error($name) is-invalid @enderror"
        {{ $attributes }}
    >
        {{ old($name) }}
    </textarea>

    @error($name)
        <div class="error-msg">{{ $message }}</div>
    @enderror
</div>
