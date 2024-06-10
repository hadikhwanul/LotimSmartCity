      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="/Admin-Dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="{{ URL::asset('admin/assets/img/favicon/logo.png') }}" alt="">
            </span>

          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>
        <br>
        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item {{ ($judul === "Dashboard") ? 'active' : '' }}">
            <a href="/Admin-Dashboard" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>
          <!--Dimensi-->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Dimensi</span>
          </li>
          <li class="menu-item {{ ($judul === "Smart Governance" ||$judul === "Category Smart Govenances") ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-window-open"></i>
              <div data-i18n="Account Settings">Smart Governance</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{ ($judul === "Smart Governance") ? 'active' : '' }}">
                <a href="/Admin-SmartGovernance" class="menu-link">
                  <div data-i18n="Account">Smart Governance</div>
                </a>
              </li>
              <li class="menu-item {{ ($judul === "Category Smart Govenances") ? 'active' : '' }}">
                <a href="/Admin-CategorySmartGovernance" class="menu-link">
                  <div data-i18n="Basic">Category</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item {{ ($judul === "Smart Economy") ? 'active' : '' }}">
            <a href="/Admin-SmartEconomy" class="menu-link">
              <i class="menu-icon tf-icons bx bx-stats"></i>
              <div data-i18n="Basic">Smart Economy</div>
            </a>
          </li>
          <li class="menu-item {{ ($judul === "Smart Society") ? 'active' : '' }}">
            <a href="/Admin-SmartSociety" class="menu-link">
              <i class="menu-icon tf-icons bx bx-group"></i>
              <div data-i18n="Basic">Smart Society</div>
            </a>
          </li>
          <li class="menu-item {{ ($judul === "Smart Branding") ? 'active' : '' }}">
            <a href="/Admin-SmartBranding" class="menu-link">
              <i class="menu-icon tf-icons bx bx-slideshow"></i>
              <div data-i18n="Basic">Smart Branding</div>
            </a>
          </li>
          <li class="menu-item {{ ($judul === "Smart Living") ? 'active' : '' }}">
            <a href="/Admin-SmartLiving" class="menu-link">
              <i class="menu-icon tf-icons bx bx-area"></i>
              <div data-i18n="Basic">Smart Living</div>
            </a>
          </li>
          <li class="menu-item {{ ($judul === "Smart Environment") ? 'active' : '' }}">
            <a href="/Admin-SmartEnvironment" class="menu-link">
              <i class="menu-icon tf-icons bx bx-buildings"></i>
              <div data-i18n="Basic">Smart Environment</div>
            </a>
          </li>
          <!--Dimensi-->
          <!--Emergency-->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Emergency</span>
          </li>
          <li class="menu-item {{ ($judul === "Darurat Bantuan") ? 'active' : '' }}">
            <a href="/Admin-DaruratBantuan" class="menu-link">
              <i class="menu-icon tf-icons bx bx-error"></i>
              <div data-i18n="Basic">Layanan Darurat & Saluran Bantuan</div>
            </a>
          </li>
          <!--/Emergency-->
          <!--Berita-->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Berita & Agenda</span>
          </li>
          <li class="menu-item {{ ($judul === "Berita" ||$judul === "Tag Berita") ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-news"></i>
              <div data-i18n="Account Settings">Berita</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{ ($judul === "Berita") ? 'active' : '' }}">
                <a href="/Admin-Berita" class="menu-link">
                  <div data-i18n="Account">Berita</div>
                </a>
              </li>
              <li class="menu-item {{ ($judul === "Tag Berita") ? 'active' : '' }}">
                <a href="/Admin-TagBerita" class="menu-link">
                  <div data-i18n="Basic">Tag Berita</div>
                </a>
              </li>
            </ul>
          </li>
          </li>
          <!--/Berita-->
          {{-- Agenda --}}
          <li class="menu-item {{ ($judul === "Agenda" ||$judul === "Tag Agenda") ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-list-ul"></i>
              <div data-i18n="Account Settings">Agenda</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{ ($judul === "Berita") ? 'active' : '' }}">
                <a href="/Admin-Agenda" class="menu-link">
                  <div data-i18n="Account">Agenda</div>
                </a>
              </li>
              <li class="menu-item {{ ($judul === "Tag Berita") ? 'active' : '' }}">
                <a href="/Admin-TagAgenda" class="menu-link">
                  <div data-i18n="Basic">Tag Agenda</div>
                </a>
              </li>
            </ul>
          </li>
          </li>
          {{-- /Agenda --}}
          <!--Pesan-->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pesan</span>
          </li>
          <li class="menu-item {{ ($judul === "Pesan Masuk") ? 'active' : '' }}">
            <a href="tables-basic.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-envelope"></i>
              <div data-i18n="Basic">Pesan Masuk</div>
            </a>
          </li>
          <!--/Pesan-->
          <!--Settings-->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
          </li>
          <li class="menu-item {{ ($judul === "Account" ||$judul === "Forgot Password" || $judul === "Account center" ) ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-cog"></i>
              <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item {{ ($judul === "Account") ? 'active' : '' }}">
                <a href="/Admin-Account" class="menu-link">
                  <div data-i18n="Account">Account</div>
                </a>
              </li>
              <li class="menu-item {{ ($judul === "Account center") ? 'active' : '' }}">
                <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Account center</div>
                </a>
              </li>
            </ul>
          </li>
          <!--/Settings-->
        </ul>
      </aside>
      <!-- / Menu -->