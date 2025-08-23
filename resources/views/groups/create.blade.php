<form action="{{ route('groups.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Название группы">
    <input type="date" name="start_from">
    <button type="submit">Создать группу</button>
</form>
