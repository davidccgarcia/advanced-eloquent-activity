<!DOCTYPE html>
<html>
    <head>
        <title>Many to Many</title>
    </head>
    <body>
        <h1>Relación</h1>
        {!! Form::model($user, ['route' => ['putEdit', $user->id], 'method' => 'PUT']) !!}
            <div>
                <p>
                    <strong>Usuario (Author): </strong> {{ $user->name }}
                </p>
            </div>

            <div>
                {!! Form::label('book', 'Libros:') !!}
                {!! Form::select('books[]', $books, null, ['id' => 'book', 'multiple']) !!}
            </div>
        {!! Form::submit('Actualizar') !!}
        {!! Form::close()!!}
    </body>
</html>
