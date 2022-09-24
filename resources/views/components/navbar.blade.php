<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <div class="d-sm-none d-lg-inline-block">Adam </div>
        <img alt="image" src={{ asset("assets/img/avatar/avatar-3.png") }} class="rounded-circle mr-1">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Logged in</div>
        <form action="">
          <button type="" class="dropdown-item text-dark">
            <i class="fas fa-user"></i> Account
          </button>
        </form>
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="dropdown-item text-dark">
            <i class="fas fa-sign-out-alt"></i> Logout
          </button>
        </form>
      </div>
    </li>
  </ul>
</nav>