<h1>{{ $group->title }}</h1>
<p>Дата начала обучения: {{ $group->start_from }}</p>

<h2>Студенты:</h2>
@foreach ($students as $student)
    <div>{{ $student->surname }} {{ $student->name }}</div>
@endforeach
<a href="{{ route('groups.students.create', $group) }}">Добавить студента</a>
