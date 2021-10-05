
@if(session()->has("success"))
    <div class="success">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session()->get("success") }}
    </div>
@endif

@if(session()->has("error"))
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ session()->get("error") }}
    </div>
@endif
