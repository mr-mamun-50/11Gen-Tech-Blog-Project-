<?php

if (isset($_POST['add_cat'])) {
    $return_msg = $obj->add_category($_POST);
}

?>

<h2 class="my-3">Add category view</h2>

<div class="shadow px-3 py-4 rounded">

    <?php if (isset($return_msg)) { ?>

        <div class="alert alert-success alert-dismissible fade show mt-2 text-center" role="alert">
            <?php echo $return_msg; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php } ?>

    <form action="" method="POST">
        <div class="form-group">
            <label class=" mb-1" for="cat_name">Category Name</label>
            <input name="cat_name" class="form-control py-4" id="cat_name" type="text" required />
        </div>
        <div class="form-group">
            <label class=" mb-1" for="cat_des">Category Description</label>
            <input name="cat_desc" class="form-control py-4" id="cat_des" type="text" required />
        </div>
        <input name="add_cat" type="submit" value="Add Category" class="form-control btn btn-primary">

    </form>
</div>