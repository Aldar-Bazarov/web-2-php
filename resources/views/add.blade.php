<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('stylesheets/add-form.css') }}">
    <title>Добавить статью</title>
</head>

<body>
    <h2>Добавить статью</h2>
    <form method="POST" action="{{ route('update') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-item">
            <label for="title">Заголовок:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-item">
            <label for="lid">Кратко о чём:</label>
            <textarea name="lid" id="lid" class="form-control" required></textarea>
        </div>
        <div class="form-item">
            <label for="content">Содержание:</label>
            <textarea name="content" id="content" class="form-control" required></textarea>
        </div>
        <div class="form-item">
            <label for="image">Обложка:</label>
            <input type="file" name="image" accept="image/*" required>
        </div>
        <div class="form-item">
            <label for="rubric_id">Рубрика:</label>
            <select name="rubric_id" id="rubric_id" class="form-control" required>
                @foreach($rubrics as $rubric)
                <option value="{{ $rubric->id }}">{{ $rubric->rubric_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Добавить статью</button>
    </form>
</body>

</html>