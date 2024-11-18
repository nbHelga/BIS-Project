@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-3 bg-teal-600 min-vh-100" id="sidebar">
                <div class="sidebar-header p-3">
                    <h3 class="text-white font-bold">BIS UNDIP</h3>
                </div>
                <ul class="nav flex-column mt-4">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link text-white">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('mahasiswa') }}" class="nav-link text-white">
                            <i class="fas fa-user-graduate"></i> Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('jadwal') }}" class="nav-link text-white">
                            <i class="fas fa-calendar-alt"></i> Jadwal Kuliah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('mata_kuliah') }}" class="nav-link text-white">
                            <i class="fas fa-book"></i> Mata Kuliah
                        </a>
                    </li>
                    <li class="nav-item mt-4">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-secondary text-white btn-block">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-9" id="main-content">
                <nav class="navbar navbar-expand-lg navbar-light bg-teal-600 text-white">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1 text-white">Dashboard</span>
                        <div class="collapse navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">
                                        <i class="fas fa-bell"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link text-white">Dr Budi S.Kom, M.Kom</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content mt-4 p-4">
                    <h4>Welcome to Dashboard, Budi!</h4>
                    <!-- Tambahkan konten dashboard di sini -->
                </div>
            </div>
        </div>
    </div>
@endsection
