<h1>Categories</h1>

@foreach ($categories as $category)
    <p>{{ $category->name }} ({{ count($category->books) }}) </p>
    
    <ul>
        @foreach ($category->books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
@endforeach