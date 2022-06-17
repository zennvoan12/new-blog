    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Zennovian</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div
                        class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                    </div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="/dashboard" class="nav-item nav-link {{ Request::is('dashboard') ? 'active' : '' }}"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            </div>

            <div class="navbar-nav w-100">
                <a href="/dashboard/posts"
                    class="nav-item nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
                    <i class="far fa-file-alt me-2"></i>Post</a>
            </div>
            @can('admin')
                <h6 class="sidebar-heading d-flex justify-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Adminstrator</span>
                </h6>
                <div class="navbar-nav w-100">
                    <a href="/dashboard/categories"
                        class="nav-item nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
                        <i class="bi bi-grid"></i> Post Categories</a>
                </div>
            @endcan
        </nav>
    </div>
    <!-- Sidebar End -->
