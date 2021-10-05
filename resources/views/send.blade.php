
<x-master>

    <div class="card">
        {{ __("Send Mail Form") }}
    </div>

    <form method="post" action="{{ route("send-mail") }}">
        @csrf
        {{-- To Email --}}
        <x-form.input name="to_mail" type="email"  msg="To Mail *:" required />

        {{-- Subject --}}
        <x-form.input name="subject" type="text"  msg="Subject *:" required />

        {{-- Content --}}
        <x-form.text-area name="content" rows="3"  msg="Content *:"  required />

        <div class="center">
            <input type="submit" value="Send Mail"/>
        </div>

    </form>

</x-master>

