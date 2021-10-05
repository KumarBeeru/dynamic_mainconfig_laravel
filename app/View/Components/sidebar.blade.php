
<div class="sidenav">
    <div class="logo"></div>
    <a href="smtp-config" class="{{ Request::is('smtp-config') ? "active" : ""  }}">
        <i class="fa fa-address-card-o"></i> SMTP
    </a>
    <a href="send-mail"  class="{{ Request::is('send-mail') ? "active" : ""  }}">
        <i class="fa fa-mail-forward"></i> Send Mail
    </a>
</div>
