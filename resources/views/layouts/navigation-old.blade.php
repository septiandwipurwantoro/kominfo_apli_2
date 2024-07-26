<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class=" {{ request()->is('dashboard') ? 'nav-link active' : 'nav-link' }} " aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class=" {{ request()->is('master-admin') ? 'nav-link active' : 'nav-link' }} " aria-current="page" href="{{ route('master-admin') }}">Master Admin</a>
          </li>
          <li class="nav-item">
            <a class=" {{ request()->is('master-user') ? 'nav-link active' : 'nav-link' }} " aria-current="page" href="{{ route('master-user') }}">Master User</a>
          </li>
          <li class="nav-item">
            <a class=" {{ request()->is('aset') ? 'nav-link active' : 'nav-link' }} " aria-current="page" href="{{ route('aset') }}">Daftar Aset</a>
          </li>
          <li class="nav-item">
            <a class=" {{ request()->is('log-list') ? 'nav-link active' : 'nav-link' }} " aria-current="page" href="{{ route('log-list') }}">Log Aktivitas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->nama_lengkap }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profil</a></li>
              @if (Auth::user()->is_admin)
              <li><a class="dropdown-item" href="{{ route('confirm-aset')}}">Konfirmasi Aset</a></li>
              @else
              <li><a class="dropdown-item" href="{{ route('aset-status', ['id' => Auth::user()->id])}}">Asset Ajuan Bidang</a></li>
              @endif
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>