@extends('app')

@section('title', '駅伝新規登録')

@section('content')
<p>駅伝新規登録</p>
<form class="row g-3">
  <div class="col-md-6">
    <label for="ekidenName" class="form-label">駅伝名</label>
    <input type="text" class="form-control" id="ekiden_name">
  </div>
  <div class="col-12 mt-2">
    <button type="submit" class="btn btn-primary">登録</button>
    <button type="submit" class="btn btn-secondary">戻る</button>
  </div>
</form>
@endsection