@extends('dashboard.home')
@section('categories')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ __('Categories') }}</h5>
            <a href="{{route('categories.create')}}" class="btn btn-success btn-sm">Add Category</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td><a href="{{route('categories.edit', $category->id)}}" 
                                class="btn btn-info btn-sm"> <span class="fas fa-edit"></span></a></td>
                            <td>
                                <a href="{{route('categories.destroy', $category->id)}}"
                                    class="btn btn-danger btn-sm"><span class="fas fa-bin"></span>delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection