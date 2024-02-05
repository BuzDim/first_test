<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label>
        Название
        <input type="text" name="name" placeholder="название поста" required>
    </label>
    <label>
        Описание
        <input type="text" name="description" placeholder="Описание поста">
    </label>
    <label>
        Содержание
        <textarea name="content" id="content" cols="30" rows="10" required></textarea>
    </label>
    <label>
        Постер
        <input type="file" name="poster" id="poster" required>
    </label>
    <button type="submit">
        <span>Сохранить</span>
    </button>
</form>
