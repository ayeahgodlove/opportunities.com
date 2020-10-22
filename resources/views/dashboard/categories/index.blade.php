@extends('dashboard.home')
@section('content1')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ __('Categories') }}</h5>
            <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm">Add Category</a>
        </div>
        <div class="card-body">
            @if ($categories->count() > 0)
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
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->posts }}</td>
                                <td><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm">
                                        <span class="fas fa-edit"></span></a></td>
                                <td>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                        id="deleteCategoryForm">
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
            @else
                <h3 class="text-center">No categories available yet</h3>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script>
        function handleDelete() {
            var form = document.getElementById('deleteCategoryForm');
            form.action = '/tags/' + id;
            $('#deleteModal').modal('show');
        }

    </script> --}}
@endsection
