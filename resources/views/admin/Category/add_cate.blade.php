@extends('admin.layout.master')
@section('content')
    <form action="" method="post">
        <table border="1">
            <tr>
                <td>Category name</td>
                <td><input name="name"></td>
            </tr>
            <tr>
                <td>order_display</td>
                <td><input name="order_display"></td>
            </tr>
            <tr>
                <td>parent_id</td>
                <td><input name="parent_id"></td>
            </tr>
            <tr>
                <td>slug_name</td>
                <td><input name="slug_name"></td>

            </tr>
            <tr>
                <td>created_at</td>
                <td><input name="created_at"></td>

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
