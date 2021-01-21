        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{ asset('assets/images/faces/face1.jpg')}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  @if((request()->is('requestReim')) || (request()->is('trackReim')))
                  <span class="font-weight-bold mb-2">Andrew Adam</span>
                  <span class="text-secondary text-small">Karyawan</span>
                  @endif

                  @if((request()->is('persetujuanReimHR')) || (request()->is('persetujuanReimHR/verifikasi')))
                  <span class="font-weight-bold mb-2">Indah Puspita</span>
                  <span class="text-secondary text-small">HR</span>
                  @endif

                  @if((request()->is('persetujuanReimFinance')) || (request()->is('persetujuanReimFinance/verifikasi')) || (request()->is('pengembalianDana')) || (request()->is('pengembalianDana/create')))
                  <span class="font-weight-bold mb-2">Dewi Sartika</span>
                  <span class="text-secondary text-small">Finance</span>
                  @endif
                </div>
                <!-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
              </a>
            </li>
            <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('/dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            @if((request()->is('requestReim')) || (request()->is('trackReim')))
            <li class="nav-item {{ (request()->is('requestReim')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('/requestReim')}}">
                <span class="menu-title">Request Reimbursement</span>
                <i class="mdi mdi-pencil-box menu-icon"></i>
              </a>
            </li>
            <li class="nav-item {{ (request()->is('trackReim')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('/trackReim')}}">
                <span class="menu-title">Tracking Reimbursement</span>
                <i class="mdi mdi-clock menu-icon"></i>
              </a>
            </li>
            @endif

            @if((request()->is('persetujuanReimHR')) || (request()->is('persetujuanReimHR/verifikasi')))
            <li class="nav-item {{ (request()->is('persetujuanReimHR')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('/persetujuanReimHR')}}">
                <span class="menu-title">Persetujuan Reimbursement</span>
                <i class="mdi mdi-pencil-box menu-icon"></i>
              </a>
            </li>
            @endif

            @if((request()->is('persetujuanReimFinance')) || (request()->is('persetujuanReimFinance/verifikasi')) || (request()->is('pengembalianDana')) || (request()->is('pengembalianDana/create')))
            <li class="nav-item {{ (request()->is('persetujuanReimFinance')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('/persetujuanReimFinance')}}">
                <span class="menu-title">Persetujuan Reimbursement</span>
                <i class="mdi mdi-pencil-box menu-icon"></i>
              </a>
            </li>
            <li class="nav-item {{ (request()->is('pengembalianDana')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('/pengembalianDana')}}">
                <span class="menu-title">Pengembalian Dana</span>
                <i class="mdi mdi-clock menu-icon"></i>
              </a>
            </li>
            @endif

            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title text-secondary">PENGATURAN</span>
                <i class="mdi mdi-settings menu-icon"></i>
              </a>
            </li>
            <li class="nav-item {{ (request()->is('profilSaya')) ? 'active' : '' }}">
              <a class="nav-link" href="{{url('/profilSaya')}}">
                <span class="menu-title">Profil Saya</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/logout')}}">
                <span class="menu-title">Keluar Sistem</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>