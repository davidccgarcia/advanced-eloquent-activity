<h1>Relationships: Many To Many</h1>

@foreach ($users as $user)
    <p>{{ $user->name }}</p>

    <ul>
        @foreach ($user->books as $book)
        <li>{{ $book->title }}</li>
        @endforeach
    </ul>
@endforeach