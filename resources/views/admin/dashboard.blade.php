@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->

    <!-- Content Row -->
    <div class="row">

        <!-- Total Categories -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow-lg h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Categories
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{ $totalCategories }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-primary"></i> <!-- Changed icon color -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Sports -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow-lg h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Sports
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{ $totalSports }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-football-ball fa-2x text-success"></i> <!-- Changed icon -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Users -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow-lg h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Users</div>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{ $totalUsers }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i> <!-- Changed icon -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Members -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow-lg h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Members</div>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{ $totalMembers }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-warning"></i> <!-- Changed icon -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- End of Page Content -->


@endsection
