@extends('layouts.master')
@section('content')

<h1 class="h3 mb-2 text-gray-800">Artikel</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Artikel</h6>
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/artikel" method="POST">
    @CSRF
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control" id="judul" name="judul">
    </div>
    <div class="form-group">
      <label for="isi">Isi</label>
      <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="tag">Tag</label>
        <input type="text" class="form-control" id="tag" name="tag" aria-describedby="tag">
        <small id="tag" class="form-text text-muted">Pisahkan kata tiap tag menggunakan , (koma)</small>
      </div>
    <div class="form-group">
        <label for="tag">Posting Sebagai</label>
        <select name="user_id" id="user_id" class="form-control">
          @if (!$users->isEmpty())
          @foreach ($users as $key => $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach
@endif
        </select>
        <small id="tag" class="form-text text-muted">Jika Tidak muncul daftar user jalankan (php artisan db:seed --class=UsersTableSeeder)</small>
      </div>
    <input type="hidden" class="form-control" id="created_at" name="created_at" value="{{\Carbon\Carbon::now('Asia/Jakarta')}}">
    <input type="hidden" class="form-control" id="updated_at" name="updated_at" value="{{\Carbon\Carbon::now('Asia/Jakarta')}}">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-light border-secondary" href="/artikel">Cancel</a>
  </form>
  </div>
</div>
@endsection