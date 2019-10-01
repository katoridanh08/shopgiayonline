@extends('admin.layout.master')
@section('content')
    <form action="" method="post">
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên đầy đủ</td>
            <td>Tên danh mục</td>
            <td>Danh mục cha</td>
            <td>Xóa</td>
            <td>Sửa</td>
        </tr>
        @foreach($cates as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
                <td>{{$cate->order_display}}</td>
                <td>{{$cate->parent_id}}</td>
             <td><button><a href="admin/danh-muc/xoa/{{$cate->id}}"> Delete</a></button></td>
            <td><button><a href="admin/danh-muc/sua/{{$cate->id}}">Edit</a></button></td>
            </tr>
        @endforeach
    </table>
    </form>
@endsection
