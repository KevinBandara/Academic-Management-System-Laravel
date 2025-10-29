<nav class="col-lg-2 sidebar d-flex flex-column p-3">
    <div class="sidebar-title mb-3 text-center">
        <h4 class="fw-bold">StudentDash</h4>
    </div>

    <ul class="nav flex-column sidebar-items-group">
        <li class="sidebar-item-title">Students</li>
        <li><a href="/" class="nav-link {{ Request::is('/') ? 'active-link' : '' }}">Home</a></li>
        <li><a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active-link' : '' }}">Dashboard</a></li>
        <li><a href="/dashboard/students/create" class="nav-link {{ Request::is('dashboard/students/create') ? 'active-link' : '' }}">Create</a></li>
        <li><a href="/dashboard/students/delete-form" class="nav-link {{ Request::is('dashboard/students/delete-form') ? 'active-link' : '' }}">Delete</a></li>
        <li><a href="/dashboard/students/update" class="nav-link {{ Request::is('dashboard/students/update*') ? 'active-link' : '' }}">Update</a></li>

        <li class="mt-3 sidebar-item-title">Courses</li>
        <li><a href="/dashboard/cources" class="nav-link {{ Request::is('dashboard/cources*') ? 'active-link' : '' }}">View All</a></li>
        <li><a href="/dashboard/cources/create" class="nav-link {{ Request::is('dashboard/cources/create') ? 'active-link' : '' }}">Create</a></li>
        <li><a href="/dashboard/cources/delete" class="nav-link {{ Request::is('dashboard/cources/delete') ? 'active-link' : '' }}">Delete</a></li>
        <li><a href="/dashboard/cources/update" class="nav-link {{ Request::is('dashboard/cources/update*') ? 'active-link' : '' }}">Update</a></li>

        <li class="mt-3 sidebar-item-title">Settings</li>
        <li><a href="/dashboard/profile" class="nav-link {{ Request::is('dashboard/profile*') ? 'active-link' : '' }}">Profile</a></li>
    </ul>
</nav>
