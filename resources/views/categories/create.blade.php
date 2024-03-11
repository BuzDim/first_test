@extends("layouts.old")
@section("content")

<div class="w-50 m-auto">
    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Название</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="название категории"
                   required>
        </div>


        <div class="mb-3">
            <label for="poster" class="form-label">Постер</label>
            <input type="file" name="poster" class="form-control" id="poster" required>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>

    </form>
</div>
@endsection

