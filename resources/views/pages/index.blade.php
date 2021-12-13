@extends('layout.master')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>標題</td>
            <td>內容</td>
            <td>備註</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
            <tr>
                <td>{{$row->title}}</td>
                <td>{{$row->content}}</td>
                <td>{{$row->remark}}</td>
                <td>
                    <button class="btn btn-outline-success">修改</button>
                    <button class="btn btn-outline-danger">刪除</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
