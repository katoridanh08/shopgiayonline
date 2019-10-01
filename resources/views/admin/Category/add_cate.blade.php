@extends('admin.layout.master')
@section('content')
    <form action="" method="post">
        <table border="1">
            <tr>
                <td>Tên đầy đủ</td>
                <td><input name="name"></td>
            </tr>
            <tr>
                <td>Tên Danh mục</td>
                <td><input name="order_display"></td>
            </tr>
            <tr>
                <td>Danh mục cha</td>
                <td><input name="parent_id"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="save">Save</button>
                    <button type="submit" name="cancel">Cancel</button>
                </td>
            </tr>
        </table>
        {{csrf_field()}}
    </form>
@endsection
