<form action="" method="post">
    <table border="1">
        <tr>
            <td>ID</td>
            <td>name</td>
            <td>unitPrice</td>
            <td>description</td>
            <td>brand_id</td>
            <td>cate_id</td>
            <td>detail</td>
            <td>Xóa</td>
            <td>Sửa</td>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->unitPrice}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->brand_id}}</td>
                <td>{{$product->cate_id}}</td>
                <td>{{$product->detail}}</td>
            <td class="center"><button><a href="admin/san-pham/xoa/{{$product->id}}" class='btn-del'> Delete</a></button></td>
            <td class="center"><button><a>Edit</a></button></td>
            </tr>
        @endforeach
    </table>
</form>
