@extends('layout.master')
@section('content')
    <form action="{{route('get_edit_data')}}" method="post">
        @csrf
        <label>標題</label>
        <input name="title" value="{{$data->title}}">
        <label>內容</label>
        <input name="content" value="{{$data->content}}">
        <label>備註</label>
        <input name="remark"value="{{$data->remark}}">
        <button type="submit">submit</button>
    </form>
@endsection
