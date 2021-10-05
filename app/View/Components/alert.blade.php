
@if(session()->has("success"))
    <div class="success">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session()->has("success") }}
    </div>
@endif

@if(session()->has("error"))
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session()->has("error") }}
    </div>
@endif
