<h1>Query Builder</h1>

@foreach ($users as $user)
    <p>{{ $user->user_name }} - {{ $user->email }}</p>
    
    <ul>
    {{-- @foreach ($user->books as $book)
        <li><strong>{{ $book->title }} </strong> {{ $book->description }}</li>
    @endforeach
    </ul> --}}
@endforeach