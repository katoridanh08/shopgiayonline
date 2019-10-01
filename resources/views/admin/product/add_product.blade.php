<form action="" method="post">
    <table border="1">
        <tr>
            <td>Category name</td>
            <td><input name="name"></td>
        </tr>
        <tr>
            <td>unitPrice</td>
            <td><input name="unitPrice"></td>
        </tr>
        <tr>
            <td>description</td>
            <td><input name="description"></td>
        </tr>
        <tr>
            <td>brand_id</td>
            <td><input name="brand_id"></td>
        </tr>
        <tr>
            <td>cate_id</td>
            <td><input name="cate_id"></td>
        </tr>
        <tr>
            <td>detail</td>
            <td><input name="detail"></td>
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
