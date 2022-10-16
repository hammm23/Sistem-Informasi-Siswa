      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
                        <li class="nav-item dropdown {{ Request::is('dashboard') ? 'active' : '' }}">
              <a href="/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dasbor</span></a>
                        </li>
              <li class="menu-header">Menu</li>

              <li class="{{ Request::is('students*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('students.index') }}"><i class="fas fa-user"></i> <span>Data Diri Siswa</span></a></li>

              <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Ini Fitur</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="components-article.html">Article</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>
              <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty State</a></li>
              <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
              <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>
              <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
              <li><a class="nav-link" href="components-tab.html">Tab</a></li>
              <li><a class="nav-link" href="components-table.html">Table</a></li>
              <li><a class="nav-link" href="components-user.html">User</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>
            </ul>
          </li>

              <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="{{ route('logout') }}" class="btn btn-danger btn-lg btn-block btn-icon-split" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt" ></i> Logout
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </a>
            </div>
        </aside>
      </div>