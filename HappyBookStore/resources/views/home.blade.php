@extends('layout')

@section('name')
    <p class="bg-warning p-2 w-100 mb-4">Book List</p>
@endsection

@section('content')
    <table class="table table-striped mb-4">
        <thead class="bg-transparent">
            <tr>
                <th class="w-50" scope="col">Title</th>
                <th class="w-50" scope="col">Author</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse ($books as $book)
                <tr>
                    <td>
                        <a class="nav-link" href="{{ route('detail', ['book_id' => $book->id]) }}"
                            title="Book Detail">{{ $book->title }}</a>
                    </td>
                    <td>{{ $book->detail->author }}</td>
                </tr>
            @empty
                <p class="text-warning w-100">No data...</p>
            @endforelse
        </tbody>
    </table>
    {{ $books->links() }}
@endsection
