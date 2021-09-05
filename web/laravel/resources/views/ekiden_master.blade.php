@extends('app')
 
@section('title', '駅伝マスタ')
 
@section('content')
<p>駅伝マスタ</p>
<div class="mb-3">
  <button type="button" class="btn btn-primary">駅伝新規登録</button>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">駅伝名</th>
      <th>大会記録</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">出雲全日本大学選抜駅伝競走（出雲駅伝）</th>
      {{-- 大会記録マスタ画面へ遷移させる --}}
      <td><button type="button" class="btn btn-primary">大会記録</button></td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">全日本大学駅伝対校選手権大会</th>
      <td><button type="button" class="btn btn-primary">大会記録</button></td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">東京箱根間往復大学駅伝競走</th>
      <td><button type="button" class="btn btn-primary">大会記録</button></td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
  </tbody>
</table>
@endsection