<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                @if(Route::has('login'))
                    @auth
                        @if (Auth::user()->level === 'admin')
                        
                            <li class="nav-item">
                                <a href="siswa" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>CRUD Siswa</p>
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a href="petugas" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>CRUD Petugas</p>
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a href="kelas" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>CRUD Kelas</p>
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a href="spp" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>CRUD SPP</p>
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a href="/transaksi" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>Transaksi Pembayaran</p>
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a href="historyPembayaran" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>History Pembayaran</p>
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a href="laporan" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>Generate Laporan</p>
                                    </a>
                                 </li>

                        @elseif (Auth::user()->level === 'petugas')

                        <li class="nav-item">
                                <a href="/transaksi" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>Transaksi Pembayaran</p>
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a href="historyPembayaran" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>History Pembayaran</p>
                                    </a>
                                </li>

                        @else (Auth::user()->level === 'siswa')

                        <li class="nav-item">
                                <a href="historyPembayaran" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>History Pembayaran</p>
                                    </a>
                                </li>

                        @endif
                    @else

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                            {{ csrf_field }}
                        </form>

                    @endif
                @endif
            </ul>
          </li>
        </ul>
      </nav>