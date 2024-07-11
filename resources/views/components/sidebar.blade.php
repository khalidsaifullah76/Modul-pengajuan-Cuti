<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('assets/img/logo3.JPEG')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Hexatech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @auth
            @if(Auth::user()->role == 'administrator')
              <img src="{{ asset('assets/img/admin-avatar.png')}}" class="img-circle elevation-2" alt="User Image">
            @else
              <img src="{{ asset('assets/img/pegawai-avatar.png')}}" class="img-circle elevation-2" alt="User Image">
            @endif
          @else
            <img src="{{ asset('assets/img/guest-avatar.png')}}" class="img-circle elevation-2" alt="User Image">
          @endauth
        </div>
        <div class="info">
          @auth
            <a class="d-block" href="{{ route('profile.edit') }}">{{ strtoupper(Auth::user()->name) ?? "" }}</a>
            <span class="text-primary">Role: {{ Auth::user()->role }}</span>
          @else
            <a href="#" class="d-block">Guest</a>
          @endguest
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
              <a href="{{ url('dashboard') }}" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                      Halaman Utama
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('profil') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-alt"></i>
                  <p>
                      Profile Mahasiswa
                  </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tabel Data Cuti
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @auth
              <li class="nav-item">
                <a href="{{ url('pengajuan_cuti/show') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Cuti</p>
                </a>
              </li>
              @if(Auth::user()->role == 'administrator')
              <li class="nav-item">
                <a href="{{ url('jatah_cuti/show') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jatah Cuti</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                      Table Data Tambahan
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href=" {{ url('divisi/show') }} " class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Table Divisi</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href=" {{ url('pegawai/show') }} " class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Table Pegawai</p>
                      </a>
                  </li>
                  @endif
                @endauth  
              </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
