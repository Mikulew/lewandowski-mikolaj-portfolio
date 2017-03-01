<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <body style="background-color: #fff; color: #000000;">
<!--      LEFT SIDEBAR-->
        <div class="ui sidebar vertical left inverted menu">
            <a href="{{route('admin')}}" class="item">
                <i class="home icon"></i>
                    Administration panel
            </a>
            <a href="{{route('admin.contact')}}" class="item">
                <i class="mail icon"></i>
                    Messages
            </a>
            <a href="{{route('admin.project')}}" class="item">
                <i class="browser icon"></i>
                    Projects
            </a>
            <a href="{{route('admin.canvas')}}" class="item">
                <i class="game icon"></i>
                    Games &amp; animations
            </a>
            <a href="{{route('admin.book')}}" class="item">
                <i class="book icon"></i>
                    Library
            </a>
            <a href="{{route('admin.technology')}}" class="item">
                <i class="tags icon"></i>
                    Technologies
            </a>
            <a href="{{route('admin.posts')}}" class="item">
                <i class="quote right icon"></i>
                    Blog
            </a>
        </div>
<!--            NAV MENU-->
            <div class="ui basic icon top fixed menu">
                <a id="toggle" class="item">
                    <i class="settings icon"></i>
                    &nbsp;&nbsp;Menu
                </a>
                <a href="/" class="item ">
                    <i class="external icon"></i>
                    &nbsp;&nbsp;Blog
                </a>
                <a href="{{route('logout')}}" class="item right">
                    <i class="sign out icon"></i>
                    &nbsp;&nbsp;Logout
                </a>
        </div>
      <div class="pusher">
        <div class="ui container">
                <br>
                <br>
             @yield('body')
        </div>
      </div>         
    @include('partials._javascript')
  </body>
</html>