<h1>Books</h1>

<table>
    <thead>
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
        <th>Select</th>
    </thead>
    
    {!! Form::open(['url' => 'books/destroy', 'method' => 'delete']) !!}
    <tbody>
        @foreach ($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>
                {!! Form::checkbox("books[]", $book->id, false) !!}
            </td>
            
        </tr>

        @endforeach
            <tr>
                <td>
                    <input type="submit" name="submit" value="Enviar">
                </td>
            </tr>
    </tbody>
    {!! Form::close() !!}
</table>