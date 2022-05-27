@extends('layouts.default')
<style>
    * {
        box-sizing: border-box;
    }
    .input-table {
        width: 100%;
        margin: 10px 0;
    }
    .input {
        width: 100%;
        padding: 10px;
        border: 2px solid #DCDCDC;
        border-radius: 5px;
    }
    .input-btn {
        width: 100%;
        padding: 7px;
        margin-left: 10px;
        color: #CC66FF;
        border: 2px solid #CC66FF;
        border-radius: 5px;
        background: #fff;
        font-weight: bold;
        cursor: pointer;
        transition: 0.6s;
    }
    .input-btn:hover {
        background: #CC66FF;
        color: #fff;
    }
    .list-table {
        width: 100%;
        text-align: center;
    }
    .list-table th {
        padding: 20px 0;
    }
    .list-table td {
        padding: 10px 0;
    }
</style>

@section('title', 'Todo List')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/todo/create" method="post">
    <table class="input-table">
        @csrf
        <tr>
            <td>
                <input class="input" type="text" name="content">
            </td>
            <td>
                <button class="input-btn">追加</button>
            </td>
        </tr>
    </table>
</form>
@endsection

@section('list')
<table class="list-table">
    <tr>
        <th>id</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
    </tr>
    <form action="/edit" method="post">
        <tr>
        @csrf
            <td>
                <input type="text" name="id" value="{{$form->id}}">
            </td>
            <td>
                <input type="text" name="content" value="{{$form->content}}">
            </td>
            <td>
                <button>更新</button>
            </td>
            <td>
                <button>削除</button>
            </td>
        </tr>
    </form>
</table>
@endsection