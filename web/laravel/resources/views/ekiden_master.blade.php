@extends('app')
 
@section('title', '駅伝マスタ')
 
@section('content')
<p>駅伝マスタ</p>
<div class="row mb-3 mr-0 ml-0">
  <div class="col-10">
    <button type="button" class="btn btn-primary">駅伝新規登録</button>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">駅伝名</th>
      <th scope="col">大会記録</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">出雲全日本大学選抜駅伝競走（出雲駅伝）</th>
      <td><a class="btn btn-primary" href="{{ route('ekidenRecord') }}" role="button">大会記録</a></td>
      {{-- 大会記録マスタ画面へ遷移させる --}}
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">全日本大学駅伝対校選手権大会</th>
      <td><a class="btn btn-primary" href="{{ route('ekidenRecord') }}" role="button">大会記録</a></td>
      {{-- 大会記録マスタ画面へ遷移させる --}}
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">東京箱根間往復大学駅伝競走</th>
      <td><a class="btn btn-primary" href="{{ route('ekidenRecord') }}" role="button">大会記録</a></td>
      {{-- 大会記録マスタ画面へ遷移させる --}}
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
  </tbody>
</table>
@endsection