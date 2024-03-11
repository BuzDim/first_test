@extends("layouts.old")
@section("content")

    <div class="w-50 m-auto">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="название поста"
                       required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Описание</label>
                <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                       placeholder="Описание поста">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Содержание</label>
                <textarea type="text" name="content" class="form-control" id="content" cols="30" rows="10"
                          required></textarea>
            </div>

            <div class="mb-3">
                <label for="poster" class="form-label">Постер</label>
                <input type="file" name="poster" class="form-control" id="poster" required>
            </div>

            <div class="mb-3">
                <label for="сategory_ids" class="form-label">Категория</label>
                <select name="category_ids[]" class="form-control" id="category_ids" multiple>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>

        </form>
    </div>
@endsection
