@extends('app')

@section('title', '大会記録マスタ')

@section('content')
<p>大会記録マスタ</p>
<div class="row mb-3 mr-0 ml-0">
  <div class="col-4">
    <select class="form-select" aria-label="Default select example">
      <option selected>記録を表示したい大会を選択してください</option>
      <option value="1">出雲全日本大学選抜駅伝競走（出雲駅伝）</option>
      <option value="2">全日本大学駅伝対校選手権大会</option>
      <option value="3">東京箱根間往復大学駅伝競走</option>
    </select>
  </div>
  <div class="col-4">
    <button type="button" class="btn btn-primary">記録新規登録</button>
  </div>
  <div class="col-4">
    {{-- 区間記録マスタに遷移する --}}
    <a class="btn btn-success" href="{{ route('kukanRecord',['id'=>1]) }}" role="button">区間記録</a>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">回数</th>
      <th>優勝チーム</th>
      <th>記録</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">第１回大会</th>
      <td>日本大学</td>
      <td>2:04:20</td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">第2回大会</th>
      <td>大東文化大学</td>
      <td>2:06:41</td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">第3回大会</th>
      <td>山梨学院大学</td>
      <td>2:06:10</td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
  </tbody>
</table>
@endsection