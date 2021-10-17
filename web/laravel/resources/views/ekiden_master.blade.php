@extends('app')

@section('title', '駅伝マスタ')

@section('content')
<p>駅伝マスタ</p>
<div class="row mb-3 mr-0 ml-0">
  <div class="col-10">
    <a class="btn btn-primary" href="{{ route('ekidenCreate') }}" role="button">駅伝新規登録</a>
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
      <td>
        <a class="btn btn-primary" href="{{ route('ekidenRecord',['id'=>$ekiden->id]) }}" role="button">大会記録</a>
      </td>
      <td>
        <a class="btn btn-success" href="{{ route('ekidenShow',['id'=>$ekiden->id]) }}" role="button">編集</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection