@extends('app')

@section('title', '駅伝新規登録')

@section('content')
<p>駅伝新規登録</p>
<form class="row g-3" action="?" method="POST">
  @method('POST')
  @csrf

  <div class="col-md-6">
    <label for="ekidenName">駅伝名</label>
    <input type="text" class="col-sm-10" name="ekiden_name" id="ekiden_name" value="{{ old('ekiden_name') }}">
    @error('ekiden_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-12 mt-2">
    <button type="submit" class="btn btn-success" name="_method" value="post"
      formaction="{{ route('ekidenCreateConfirm') }}">確認</button>
    <button type="submit" class="btn btn-secondary" name="_method" value="get"
      formaction="{{ route('ekidenMaster') }}">戻る</button>
  </div>
</form>
@endsection