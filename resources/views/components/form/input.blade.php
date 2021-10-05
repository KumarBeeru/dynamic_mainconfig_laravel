<div>
    <label for="{{ $name }}">{{ $msg  }}</label>
    <input type="{{$type}}" id="{{$name}}" name="{{$name}}" value="{{ old($name) }}"
           class="@error($name) is-invalid @enderror" {{ $attributes }} />

    @error($name)
        <div class="error-msg">{{ $message }}</div>
    @enderror
</div>
