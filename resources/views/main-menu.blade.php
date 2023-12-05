<!-- ######################## Main Menu ######################## -->
<nav>
    <div>
        <nav style='display: flex; justify-content: end; margin-right: 50px;'>
            <ul style='display: flex; column-gap: 50px;'>
                @guest
                @if (Route::has('login'))
                <li>
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif
                @if (Route::has('register'))
                <li>
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <a id="navbarDropdown" href="/" role="button">
                    {{ Auth::user()->name }}
                </a>
                <div>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </li>
                @endguest
            </ul>
        </nav>
        <div class="row">
            <ul id="menu-header" class="nav-bar horizontal">
                <li><a href="/">Главная</a></li>
                @foreach($rubrics as $rubric)
                <li>
                    <a href="/rubric/{{ $rubric->id }}">
                        {{ $rubric->rubric_name }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
<!-- END main menu -->