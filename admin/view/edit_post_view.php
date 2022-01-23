<?php

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'edit_post') {
        $id = $_GET['id'];
        $post_data = $obj->get_post_info($id);
    }
}
if (isset($_POST['update_post'])) {
    $return_msg = $obj->update_post($_POST);
}

?>

<h3 class="my-3">Edit Post</h3>

<div class="shadow px-3 py-4 rounded">

    <?php if (isset($return_msg)) { ?>

        <div class="alert alert-success alert-dismissible fade show my-3 text-center" role="alert">
            <?php echo $return_msg; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <form action="" class="form" method="POST">
        <input type="hidden" name="edit_post_id" value="<?php echo $id ?>">
        <div class="form-group">
            <label class=" mb-1" for="change_title">New Title</label>
            <input value="<?php echo $post_data['post_title'] ?>" name="change_title" class="form-control" id="change_title" type="text" required />
        </div>
        <div class="form-group">
            <label class=" mb-1" for="change_summary">New Summary</label>
            <input value="<?php echo $post_data['post_summary'] ?>" name="change_summary" class="form-control" id="change_summary" type="text" required />
        </div>
        <div class="form-group">
            <label class=" mb-1" for="change_content">New Content</label>
            <textarea class="form-control" name="change_content" id="change_content" cols="30" rows="10"><?php echo $post_data['post_content'] ?></textarea>
        </div>

        <input name="update_post" type="submit" value="Save Changes" class="form-control btn btn-warning my-2">

    </form>
</div>