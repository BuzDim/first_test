
<form action="{{ route('categories.store') }}" method="post">
@csrf
<label>
    Название
    <input type="text" name="name" placeholder="название категории">
</label>


<label>
    Постер
    <input type="text" name="poster" id="poster">
</label>
<button type="submit">
    <span>Сохранить</span>
</button>
</form>
