@extends('dashboard.home')
@section('tags')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ __('Tags') }}</h5>
            <a href="{{ route('tags.create') }}" class="btn btn-success btn-sm">Add Tag</a>
        </div>
        <div class="card-body">
            @if ($tags->count() > 0)
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Post Count</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->posts->count() }}</td>
                                <td><a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-info btn-sm"> <span
                                            class="fas fa-edit"></span></a></td>
                                <td>
                                    <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
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
                <h3 class="text-center">No Tags yet</h3>
            @endif
        </div>
    </div>
@endsection
