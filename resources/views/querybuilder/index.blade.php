<h1>Query Builder</h1>

@foreach ($categories as $category)
    <p><strong>{{ $category->status }}</strong> - {{ $category->title }}</p>
    
    {{-- <ul>
    @foreach ($category->books as $book)
        <li>{{ $book->title }} - {{ $book->description }}</li>
    @endforeach
    </ul> --}}
@endforeach