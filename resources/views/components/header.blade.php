<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav">
        @auth
      <li class="active"><a href="/events">Events beheren</a></li>
            <li class="active"><a href="/add-event">Events toevoegen</a></li>

      @endauth
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
        @guest
      <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @endguest
      @auth
      
        @csrf
      
        
        @endauth 
    </ul>
  </div>
</nav>
