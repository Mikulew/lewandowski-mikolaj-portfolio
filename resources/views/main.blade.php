<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
    @yield('css')
  </head>
  <body>
<!--            NAV MENU-->
            <div class="ui basic icon top fixed inverted menu">
                <a href="/" class="{{ Request::is('/') ? 'active' : '' }} item nav-text">
                    <i class="inverted grey home icon"></i>
                        &nbsp;&nbsp;<span class="nav-text">Strona główna</span>
                </a>
                <a href="/about" class="{{ Request::is('about') ? 'active' : '' }} item nav-text">
                    <i class="inverted grey user icon"></i>
                        &nbsp;&nbsp;<span class="nav-text">O mnie</span>
                </a>
                <a href="{{route('pages.contact')}}" class="{{ Request::is('contact') ? 'active' : '' }} item nav-text">
                    <i class="inverted grey mail icon"></i>
                        &nbsp;&nbsp;<span class="nav-text">Kontakt</span>
                </a>
                <a href="{{route('pages.project.index')}}" class="{{ Request::is('project') ? 'active' : '' }} item nav-text">
                    <i class="inverted grey browser icon"></i>
                        &nbsp;&nbsp;<span class="nav-text">Moje projekty</span>
                </a>
                <a href="{{route('pages.canvas.index')}}" class="{{ Request::is('canvas') ? 'active' : '' }} item nav-text">
                    <i class="inverted grey game icon"></i>
                        &nbsp;&nbsp;<span class="nav-text">Gry i animacje</span>
                </a>
                <a href="{{route('pages.book.index')}}" class="{{ Request::is('book') ? 'active' : '' }} item nav-text">
                    <i class="inverted grey book icon"></i>
                        &nbsp;&nbsp;<span class="nav-text">Biblioteczka</span>
                </a>
                <a href="{{route('pages.post.index')}}" class="{{ Request::is('blog') ? 'active' : '' }} item nav-text">
                    <i class="inverted grey quote right icon"></i>
                        &nbsp;&nbsp;<span class="nav-text">Blog</span>
                </a>
                @if (Auth::user())
                    <a href="{{route('admin')}}" class="item nav-text">
                        <i class="inverted grey external icon"></i>
                        &nbsp;&nbsp;<span class="nav-text">Panel administracyjny</span>
                    </a>
                    <a href="{{route('logout')}}" class="item right nav-text">
                        <i class="inverted grey sign out icon"></i>
                        &nbsp;&nbsp;<span class="nav-text">Logout</span>
                    </a>
                @else
                    <a href="{{route('pages.login.index')}}" class="{{ Request::is('log') ? 'active' : '' }} item right nav-text">
                        <i class="inverted grey sign in icon"></i>
                        &nbsp;&nbsp;<span class="nav-text">Login
                    </a>
                @endif
        </div>   
      <div class="pusher">
        <div class="ui fluid container">
            <main class="page-container">
                @yield('body')
<!--                @include('partials._footer')-->
            </main> 
        </div>
      </div>         
    @include('partials._javascript')
    @yield('scripts')
  </body>
</html>