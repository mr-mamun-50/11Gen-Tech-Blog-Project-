<?php

if (isset($_POST['add_cat'])) {
    $return_msg = $obj->add_category($_POST);
}

?>

<h2 class="my-3">Add category view</h2>

<form action="" method="POST">
    <div class="form-group">
        <label class=" mb-1" for="cat_name">Category Name</label>
        <input name="cat_name" class="form-control py-4" id="cat_name" type="text" />
    </div>
    <div class="form-group">
        <label class=" mb-1" for="cat_des">Category Description</label>
        <input name="cat_desc" class="form-control py-4" id="cat_des" type="text" />
    </div>
    <input name="add_cat" type="submit" value="Add Category" class="form-control btn btn-primary btn_block">

</form>

<?php
if (isset($return_msg)) {
    echo $return_msg;
}
?>