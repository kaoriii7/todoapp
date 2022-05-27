@extends('layouts.default')
<style>
    * {
        box-sizing: border-box;
    }
    .input-table {
        width: 100%;
        margin: 10px 0;
    }
    .input-table td:first-child {
        text-align: left;
    }
    .input-table td:last-child {
        text-align: right;
        width: 70px;
    }
    .input {
        width: 100%;
        padding: 10px;
        border: 2px solid #DCDCDC;
        border-radius: 5px;
    }
    .input-btn {
        width: 100%;
        padding: 8px;
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
        margin: 10px 0;
        text-align: center;
    }
    .list-table th {
        padding: 20px 0;
    }
    .list-table td {
        height: 50px;
    }
    .update-btn-td, .delete-btn-td {
        height: 100%;
    }
    .task {
        width: 100%;
        padding: 7px 5px;
        border: 2px solid #DCDCDC;
        border-radius: 5px;
    }
    .update-btn, .delete-btn {
        width: 70px;
        padding: 8px;
        border-radius: 5px;
        background: #fff;
        font-weight: bold;
        cursor: pointer;
        transition: 0.6s;
    }
    .update-btn {
        color: #FF9966;
        border: 2px solid #FF9966;
    }
    .update-btn:hover {
        background: #FF9966;
        color: #fff;
    }
    .delete-btn {
        color: #66FFFF;
        border: 2px solid #66FFFF;
    }
    .delete-btn:hover {
        background: #66FFFF;
        color: #fff;
    }
    @media screen and (max-width: 768px) {
        .update-btn-td, .delete-btn-td {
            width: 50px;
        }

        .update-btn, .delete-btn {
            height: 100%;
        }
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
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td class="date-td">
            <input class="date" type="hidden" name="id" value="{{$item->id}}">
            {{$item->updated_at}}
        </td>
        <form action="/todo/update?id={{$item->id}}" method="post"">
            @csrf
            <td class="task-td">
                <input class="task" type="text" name="content" value="{{$item->content}}">
            </td>
            <td class="update-btn-td">
                <button class="update-btn">更新</button>
            </td>
        </form>
        <form action="/todo/delete?id={{$item->id}}" method="post">
            @csrf
            <td class="delete-btn-td">
                <input class="delete-btn" type="submit" name="delete-btn" value="削除">
            </td>
        </form>
    </tr>
    @endforeach
</table>
@endsection