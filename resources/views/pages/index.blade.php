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
                    <button class="btn btn-outline-success" onclick="edit_data({{$row->id}})">修改</button>
                    <button class="btn btn-outline-danger" onclick="delete_data({{$row->id}})">刪除</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        function delete_data(id){
            window.location.href = `{{route("delete_data")}}` + "?id" + id;
        }
        function edit_data(id){
            window.location.href = `{{route("get_edit_data")}}` + "?id" + id;
        }
    </script>
@endsection
