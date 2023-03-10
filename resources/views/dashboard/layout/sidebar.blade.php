<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/kendaraan">
              <i class="bi bi-car-front"></i>
              Kelola Kendaraan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/pesanan">
              <i class="bi bi-shop-window"></i>
              Pesanan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('grafik') }}">
              <i class="bi bi-bar-chart"></i>
              Grafik Pemakaian
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-card-list"></i>
              Riwayat Pemakaian
            </a>
          </li>
        </ul>

    </div>
  </nav>