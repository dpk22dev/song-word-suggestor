<?php
function showInputForm( $arr ){

?>
<style>
    tbody {
        display: table-row-group;
        vertical-align: middle;
        border-color: inherit;
    }
    tr {
        display: table-row;
        vertical-align: inherit;
        border-color: inherit;
    }

</style>
<form method="post" action="/index.php">
    <table>
        <tbody>
        <tr>
            <td>content:</td>
            <td><textarea type="text" id="content" name="content" rows="5" cols="50"><?php echo $arr['content']; ?></textarea></td>
        </tr>
        <tr>
            <td>categories:</td>
            <td><input type="text" name="categories" value="<?php echo $arr['categories']; ?>"></td>
        </tr>
        <tr>
            <td>language:</td>
            <td><input type="text" name="language" value="<?php echo $arr['language']; ?>"></td>
        </tr>
        <tr>
            <td>tags:</td>
            <td><input type="text" name="tags" value="<?php echo $arr['tags']; ?>"></td>
        </tr>
        <tr>
            <td>writer:</td>
            <td><input type="text" name="writer" value="<?php echo $arr['writer']; ?>" ></td>
        </tr>
        <tr>
            <td>movie_name:</td>
            <td><input type="text" name="movie_name" value=" <?php echo $arr['movie_name']; ?>" ></td>
        </tr>
        <tr>
            <td>book_name:</td>
            <td><input type="text" name="book_name" value="<?php echo $arr['book_name']; ?>"></td>
        </tr>
        <tr><td>
                <input type="submit">
            </td></tr>
        </tbody>
    </table>
</form>
<?php
}