@foreach ($groups as $group)
    <div>{{ $group->title }}</div>
@endforeach
<a href="{{ route('groups.create') }}">Создать новую группу</a>
