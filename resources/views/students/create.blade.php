<form action="{{ route('groups.students.store', $group) }}" method="POST">
    @csrf
    <input type="text" name="surname" placeholder="Фамилия студента">
    <input type="text" name="name" placeholder="Имя студента">
    <button type="submit">Добавить студента</button>
</form>
