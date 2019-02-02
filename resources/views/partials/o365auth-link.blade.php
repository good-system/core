@if(strstr(url()->previous(), 'admin'))
<li class="nav-item">
    <a class="nav-link" href="{{ route('o365auth') }}">Log in with Office 365 Account</a>
</li>
@endif