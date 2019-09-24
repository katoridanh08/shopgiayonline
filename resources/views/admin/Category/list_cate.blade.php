@extends('admin.layout.master')
@section('content')
    <table border="1">
        <tr>
            <td>ID</td>
            <td>name</td>
            <td>order_display</td>
        </tr>
        @foreach($cates as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
                <td>{{$cate->order_display}}</td>
            </tr>
        @endforeach
    </table>
@endsection