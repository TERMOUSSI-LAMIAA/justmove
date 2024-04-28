{{-- <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">JustMove</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Subsrciptions</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">management:</h6>
                <a class="collapse-item" href="{{ route('membersList') }}">Members</a>
                {{-- <a class="collapse-item" href="{{ route('addUserForm') }}">Add user</a> --}}
{{-- </div>
        </div>
    </li> --}}

<!-- Nav Item - Utilities Collapse Menu -->
{{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Sessions</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">management:</h6>
                <a class="collapse-item" href="{{route('session.index')}}">All sessions</a>
                <a class="collapse-item" href="{{route('session.create')}}">Add session</a>
            </div>
        </div>
    </li>
    --}}


<!-- Divider -->
{{-- <hr class="sidebar-divider"> --}}



<!-- Sidebar Toggler (Sidebar) -->
{{-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul> --}}
<!-- End of Sidebar -->

<!-- Sidebar -->
<div class="bg-dark border-right p-3" id="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('user.dashboard') }}" class="nav-link">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="#userSubMenu" class="nav-link" data-toggle="collapse">
                <i class="fas fa-users"></i> Subsrciptions
            </a>
            <ul class="collapse" id="userSubMenu">
                <li class="nav-item">
                    <a href="{{ route('membersList') }}" class="nav-link">Members</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#categorySubMenu" class="nav-link" data-toggle="collapse">
                <i class="fas fa-tags"></i> Sessions
            </a>
            <ul class="collapse" id="categorySubMenu">
                <li class="nav-item">
                    <a href="{{ route('session.index') }}" class="nav-link">All sessions</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('session.create') }}" class="nav-link">Add session</a>
                </li>
            </ul>
        </li>

    </ul>
</div>
