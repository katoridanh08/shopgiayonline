@extends('admin.layout.master')
@section('content')
    <form action="{{route('suadanhmuc',$item->id)}}" method="POST">
        <div class="form-group">
            <label>Danh mục cha</label>
            <select class="form-control" name="parent_id">
                <option value="0">Gốc</option>
                <?php listcate($cate, 0, $str = "", $item->parent_id); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tên danh mục</label>
            <input class="form-control" name="name" value="{!! $item->name!!}"/>
        </div>
        <div class="form-group">
            <label>Tên đầy đủ</label>
            <input class="form-control" name="order_display"  value="{!! $item->order_display!!}"/>
        </div>
        <button type="submit" class="btn btn-default">Lưu</button>
        <button type="reset" class="btn btn-default">Hủy</button>
        {{csrf_field()}}
        <form>
@endsection
