<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ __("SMTP") }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url("css/style.css")  }}" ></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

 <x-sidebar/>
<div class="navbar"></div>

<div class="content">
    <x-alert/>

    {{ $slot }}

</div>


<div class="footer">
    {{ __("COPYRIGHT @ 2020 MailConfig. All Right Reserved") }}
</div>

</body>
</html>


