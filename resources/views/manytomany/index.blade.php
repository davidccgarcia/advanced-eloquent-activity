<h1>Relationships: Many To Many</h1>

@foreach ($users as $user)
    <p>{{ $user->name }}</p>

    <ul>
        @foreach ($user->exams as $exam)
        <li>{{ $exam->title }} -- {{ $exam->pivot->score }} | {{ $exam->pivot->created_at->format('d/m/Y') }}</li>
        @endforeach
    </ul>
@endforeach