<?php

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'edit_img') {
        $id = $_GET['id'];
    }
}

if (isset($_POST['change_img_btn'])) {
    $return_msg = $obj->edit_thumb($_POST);
}

?>

<h3 class="my-3">Change Post Thumbnail</h3>

<div class="shadow px-3 py-4 rounded">

    <?php if (isset($return_msg)) { ?>

        <div class="alert alert-success alert-dismissible fade show my-3 text-center" role="alert">
            <?php echo $return_msg; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <form action="" class="form" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="edit_img_id" value="<?php echo $id ?>">
        <div class="form-group">
            <label class=" mb-1" for="change_img">Upload Thumbnail</label>
            <input name="change_img" class="form-control-file" id="change_img" type="file" required />
        </div>

        <input name="change_img_btn" type="submit" value="Change Thumbnail" class="btn btn-warning my-2">

    </form>
</div>