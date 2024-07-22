<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('backend') }}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::routeIs('users.*') || Request::routeIs('service.*') ? 'show' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Database</a>
                <div class="dropdown-menu bg-transparent border-0 {{ Request::routeIs('users.*') || Request::routeIs('service.*') ? 'show' : '' }}">
                    <a href="{{ route('users.index') }}" class="dropdown-item {{ Request::routeIs('users.*') ? 'active' : '' }}">User</a>
                    <a href="{{ route('service.index') }}" class="dropdown-item {{ Request::routeIs('service.*') ? 'active' : '' }}">Services</a>
                </div>
            </div>
            <a href="index.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Project</a>
            <a href="index.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Setting</a>
        </div>

    </nav>
    <div class="position-absolute bottom-0 end-0 p-4">
        <p class="text-muted mb-0">Copyright © 2022. All rights reserved</p>
    </div>
</div>
