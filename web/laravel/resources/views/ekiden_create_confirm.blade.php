@extends('app')

@section('title', '駅伝新規登録確認')

@section('content')
<p>駅伝新規登録確認</p>
<form class="row g-3" action="{{ route('ekidenCreateStore') }}" method="POST">
  @method('PUT')
  @csrf

  <div class="col-md-6">
    <label class="col-md-6 control-label">駅伝名:</label>
    <div class="col-sm-10">{{ $ekiden_name }}</div>
    <input type="hidden" name="ekiden_name" value="{{ $ekiden_name }}">
  </div>
  <div class="col-12 mt-2">
    <button type="submit" class="btn btn-primary" name="action" value="save">登録</button>
    {{-- <button type="submit" class="btn btn-primary" name="_method" value="put"
      formaction="{{ route('ekidenCreateStore') }}">登録</button> --}}
    <button type="submit" class="btn btn-secondary" name="action" value="back">戻る</button>
    {{-- <button type="submit" class="btn btn-secondary" name="_method" value="get" onClick="history.back()">戻る</button>
    --}}
  </div>
</form>
@endsection