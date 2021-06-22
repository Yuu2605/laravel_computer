@extends('layout.admin')
@section('content')
<form>
<h1 for="exampleInputEmail1" class="form-label">Thêm danh mục</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
    <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection