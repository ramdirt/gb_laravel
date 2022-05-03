@extends('admin.layouts.layout')

@section('content')
<div class="container w-50 pt-5">
    <h2>Форма создания категории</h2>
    <form>
  <div class="mb-3">
    <label class="form-label">Название</label>
    <input type="text" class="form-control" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
  <label class="form-label">Краткое описание</label>
  <textarea class="form-control" rows="2"></textarea>
</div>

<div class="mb-3">
  <label class="form-label">Полное описание</label>
  <textarea class="form-control" rows="5"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Создать</button>
</form>
</div>
@endsection