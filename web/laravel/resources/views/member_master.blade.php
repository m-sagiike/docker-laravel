@extends('app')
 
@section('title', '部員マスタ')
 
@section('content')
<p>選手マスタ</p>
{{-- CSVアップロードで登録変更できるように今後やる
OBや退部した部員の扱いをどうするか? --}}
<div class="row mb-3 mr-0 ml-0">
  <div class="col-10">
    <button type="button" class="btn btn-primary">部員新規登録</button>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">氏名</th>
      <th>5000PB</th>
      <th>10000PB</th>
      <th>ハーフPB</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">山田太郎</th>
      <th>14.04.20</th>
      <th>28.37.36</th>
      <th>1.04.59</th>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">山下太郎</th>
      <th>13.57.99</th>
      <th>29.46.16</th>
      <th>1.03.56</th>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">相田太郎</th>
      <th></th>
      <th></th>
      <th></th>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    <tr>
      <th scope="row">池田太郎</th>
      <th></th>
      <th></th>
      <th></th>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
  </tbody>
</table>
@endsection