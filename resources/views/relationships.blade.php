<h1>Categories</h1>

@foreach ($categories as $category)
    <p>{{ $category->name }} ({{ $category->num_books }}) </p>
    
    <ul>
        @foreach ($category->public_books as $book)
            <li><strong>{{ $book->status }}</strong> - {{ $book->title }} </li>
        @endforeach
    </ul>
@endforeach