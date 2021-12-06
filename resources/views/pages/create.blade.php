@extends('layout.master')
@section('content')
    <form action="{{route('store')}}}">
        <label>標題</label>
        <input name="title">
        <label>內容</label>
        <input name="content">
        <label>備註</label>
        <input name="remark">
        <button type="submit">submit</button>
    </form>
@endsection
