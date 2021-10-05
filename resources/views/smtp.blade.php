<x-master>

    <div class="card">
        {{ __("SMTP Information") }}
    </div>
    <form method="post" action="{{ route("smtp-submit") }}">

        @csrf
        {{-- Site Name --}}
        <x-form.input name="site_name" type="text"  msg="Site Name *:" required />

        {{-- Site Name --}}
        <x-form.input name="smtp_driver" type="text"  msg="SMTP Driver *:" required />

        {{-- SMTP Host --}}
        <x-form.input name="smtp_host" type="text"  msg="SMTP Host *:" required />

        {{-- SMTP Port --}}
        <x-form.input name="smtp_port" type="text"  msg="SMTP Port *:" required />

        {{-- Site Name --}}
        <x-form.input name="username" type="text"  msg="Username *:" required />

        {{-- SMTP Password --}}
        <x-form.input name="password" type="text"  msg="SMTP Password *:" required />

        {{-- From Name --}}
        <x-form.input name="from_name" type="text"  msg="From Name *:" required />

        <div>
            <label for="encription">{{ __("SMTP Encryption *:") }}</label>
            <select name="encription" id="encription" required>

                <option value="tls" selected>tls</option>
            </select>
        </div>
        {{-- From Email --}}
        <x-form.input name="from_mail" type="email"  msg="From Email *:" required />

        <div class="center">
            <input type="submit" />
        </div>
    </form>
</x-master>
