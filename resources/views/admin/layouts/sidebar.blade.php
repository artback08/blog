{{--@extends('admin.layouts.main')--}}
{{--@include('sidebar')--}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
        <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Панель управления</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Администратор</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Поиск" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-header">БЛОГ</li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-fire"></i>
                        <p>
                            Посты
                            <span class="right badge badge-primary">0</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/category') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Категории
                            <span class="right badge badge-danger">{{ \App\Models\Category::all()->count() }}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>
                            Тэги
                            <span class="right badge badge-success">0</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Блогеры
                            <span class="right badge badge-warning">0</span>
                        </p>
                    </a>
                </li>

                <li class="nav-header">ПОЛЕЗНОЕ</li>
                <li class="nav-item">
                    <a target="_blank" href="https://adminlte.io/themes/v3/" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>AdminLTE Example</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_blank" href="https://adminlte.io/docs/3.1/" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>AdminLTE docs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_blank" href="https://fontawesome.com/search?o=r&m=free" class="nav-link">
                        <i class="nav-icon fas fa-flag-checkered"></i>
                        <p>FontAwesome</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_blank" href="https://laravel.com/docs/9.x/" class="nav-link">
                        <i class="nav-icon fas fa-brands fa-bicycle"></i>
                        <p>Laravel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_blank" href="https://getbootstrap.com/docs/5.2/getting-started/introduction/" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-layer-group"></i>
                        <p>Bootstrap</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
{{--@--}}
