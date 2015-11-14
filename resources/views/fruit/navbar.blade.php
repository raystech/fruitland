<nav class="navbar navbar-inverse navbar-fixed-top">
    <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">FRUIT</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li><a href="{{ url('/auth/login') }}">Login</a></li>
                <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">USERS</a></li>
                        <li><a href="#">CHANGE PASSWORD</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/auth/logout') }}">SIGN OUT</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>