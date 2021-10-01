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
    @foreach ($ekidens as $ekiden)
    <tr>
      <th scope="row">{{$ekiden->ekiden_name}}</th>
      <td><a class="btn btn-primary" href="{{ route('ekidenRecord',['id'=>$ekiden->id]) }}" role="button">大会記録</a></td>
      <td><button type="button" class="btn btn-success">編集</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection