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
                    <th>Post Count</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->posts->count()}}</td>
                            <td><a href="{{route('categories.edit', $category->id)}}" 
                                class="btn btn-info btn-sm"> <span class="fas fa-edit"></span></a></td>
                            <td>
                                <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection