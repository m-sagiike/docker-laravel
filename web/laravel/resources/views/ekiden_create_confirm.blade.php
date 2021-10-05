@extends('app')

@section('title', '駅伝新規登録確認')

@section('content')
<p>駅伝新規登録確認</p>
<form class="row g-3" action="" method="post">
  @method('PUT')
  @csrf

  <div class="col-md-6">
    <label class="col-md-6 control-label">駅伝名:</label>
    <div class="col-sm-10">新規登録する駅伝名</div>
  </div>
  <div class="col-12 mt-2">
    <input type="submit" name="button1" value="登録" class="btn btn-primary" />
    <button type="submit" class="btn btn-secondary" onClick="history.back()">戻る</button>
  </div>
</form>
@endsection