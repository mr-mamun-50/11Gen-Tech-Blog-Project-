<?php

$catName = $obj->display_category();

if (isset($_POST['add_post'])) {
    $return_msg = $obj->add_post($_POST);
}

?>

<h2 class="my-3">Add post view</h2>

<div class="shadow px-3 py-4 rounded">

    <?php if (isset($return_msg)) { ?>

        <div class="alert alert-success alert-dismissible fade show my-3 text-center" role="alert">
            <?php echo $return_msg; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="mb-1" for="post_title">Title</label>
            <input name="post_title" class="form-control py-2" id="post_title" type="text" required />
        </div>
        <div class="form-group">
            <label for="post_category">Select Post Category</label>
            <select id="post_category" class="form-control" name="post_category">

                <?php while ($category = mysqli_fetch_assoc($catName)) { ?>

                    <option value="<?php echo $category['cat_id'] ?>">
                        <?php echo $category['cat_name'] ?>
                    </option>

                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class=" mb-1" for="post_content">Content</label>
            <textarea name="post_content" class="form-control" id="post_content" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label class=" mb-1" for="post_img">Upload Thumbnail</label>
            <input name="post_img" class="form-control-file" id="post_img" type="file" required />
        </div>
        <div class="form-group">
            <label class="mb-1" for="post_summary">Summary</label>
            <input name="post_summary" class="form-control py-2" id="post_summary" type="text" required />
        </div>
        <div class="form-group">
            <label class="mb-1" for="post_tag">Tags</label>
            <input name="post_tag" class="form-control py-2" id="post_tag" type="text" required />
        </div>
        <div class="form-group">
            <label for="post_status">Status</label>
            <select id="post_status" class="form-control" name="post_status">
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </div>

        <input name="add_post" type="submit" value="Add Post" class="form-control btn btn-primary">

    </form>
</div>