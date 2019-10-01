<form action="admin/san-pham/sua/{{$item->id}}" method="POST">
     <div class="form-group">
        <label>Tên sản phẩm</label>
         <input class="form-control" name="name" value="{!! $item->name!!}"/>
     </div>
     <div class="form-group">
        <label>Mô tả</label>
         <input class="form-control" name="name" value="{!! $item->description!!}"/>
     </div>
     <div class="form-group">
        <label>Chi tiết</label>
         <input class="form-control" name="name" value="{!! $item->detail!!}"/>
     </div>
     <div class="form-group">
        <label>Price</label>
         <input class="form-control" name="name" value="{!! $item->cate_id!!}"/>
     </div>
<button type="submit" class="btn btn-default">Lưu</button>
<button type="reset" class="btn btn-default">Hủy</button>
{{csrf_field()}}
<form>
