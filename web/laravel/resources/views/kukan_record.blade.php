@extends('app')
 
@section('title', '区間記録マスタ')
 
@section('content')
<p>区間記録マスタ</p>
<div class="row mb-3 mr-0 ml-0">
  <div class="col-6">
    <select class="form-select" aria-label="Default select example">
      <option selected>記録を登録したい区間を選択してください</option>
      <option value="1">1区</option>
      <option value="2">2区</option>
      <option value="3">3区</option>
      <option value="4">4区</option>
      <option value="5">5区</option>
      <option value="6">6区</option>
    </select>
  </div>
  <div class="col-6">
    <button type="button" class="btn btn-primary">記録新規登録</button>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">区間</th>
      <th>距離</th>
      <th>選手名</th>
      <th scope="col">チーム名</th>
      <th>記録</th>
      <th>回数</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1区</th>
      <td>8.0km</td>
      <td>キラグ・ジュグナ</td>
      <td>第一工業大学</td>
      <td>22:30</td>
      <td>第21回大会</td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">2区</th>
      <td>8.0km</td>
      <td>キラグ・ジュグナ</td>
      <td>第一工業大学</td>
      <td>22:30</td>
      <td>第21回大会</td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">3区</th>
      <td>8.0km</td>
      <td>キラグ・ジュグナ</td>
      <td>第一工業大学</td>
      <td>22:30</td>
      <td>第21回大会</td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">4区</th>
      <td>8.0km</td>
      <td>キラグ・ジュグナ</td>
      <td>第一工業大学</td>
      <td>22:30</td>
      <td>第21回大会</td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">5区</th>
      <td>8.0km</td>
      <td>キラグ・ジュグナ</td>
      <td>第一工業大学</td>
      <td>22:30</td>
      <td>第21回大会</td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">6区</th>
      <td>8.0km</td>
      <td>キラグ・ジュグナ</td>
      <td>第一工業大学</td>
      <td>22:30</td>
      <td>第21回大会</td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
  </tbody>
</table>
@endsection