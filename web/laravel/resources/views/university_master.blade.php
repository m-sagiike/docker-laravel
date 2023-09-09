@extends('app')
 
@section('title', '大学マスタ')
 
@section('content')
<p>大学マスタ</p>
<div class="row mb-3 mr-0 ml-0">
  <div class="col-10">
    <button type="button" class="btn btn-primary">大学新規登録</button>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">大学名</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">駒澤大学</th>
      <td><a class="btn btn-primary" href="{{ route('memberMaster') }}" role="button">選手一覧</a></td>
      <td><a class="btn btn-success" href="" role="button">編集</a></td>
    </tr>
    <tr>
      <th scope="row">東洋大学</th>
      <td><a class="btn btn-primary" href="{{ route('memberMaster') }}" role="button">選手一覧</a></td>
      <td><a class="btn btn-success" href="" role="button">編集</a></td>
    </tr>
    <tr>
      <th scope="row">帝京大学</th>
      <td><a class="btn btn-primary" href="{{ route('memberMaster') }}" role="button">選手一覧</a></td>
      <td><a class="btn btn-success" href="" role="button">編集</a></td>
    </tr>
    <tr>
      <th scope="row">國學院大学</th>
      <td><a class="btn btn-primary" href="{{ route('memberMaster') }}" role="button">選手一覧</a></td>
      <td><a class="btn btn-success" href="" role="button">編集</a></td>
    </tr>
  </tbody>
</table>
@endsection