@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Категории</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card card-blue">
                    <div class="card-header">
                        <h3 class="card-title">Список категорий</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#ID</th>
                                <th>Название</th>
                                <th>Соотношение к постам</th>
                                <th style="width: 40px">Посты</th>
                                <th style="width: 40px">Правка</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>
                                    <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar bg-success" style="width: 90%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">90%</span></td>
                                <td class="d-flex justify-content-between">
                                    <a href="" class="btn btn-icon color-warning" title="Редактировать категорию"><i class="nav-icon fas fa-solid fa-pen"></i></a>
                                    <a href="" class="btn btn-icon color-danger" title="Удалить категорию"><i class="nav-icon fas fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card card-pink">
                    <div class="card-header">
                        <h3 class="card-title">Добавление категории</h3>
                    </div>
                    <form action="{{ route('admin.category.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category_title">Название категории</label>
                                <input type="text" name="title" class="form-control" id="category_title" placeholder="Название">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @php session()->put('error','Название категории не может быть пустым.'); @endphp
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>




            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
