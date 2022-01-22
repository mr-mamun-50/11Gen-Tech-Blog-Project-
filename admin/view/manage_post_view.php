<?php

$postData = $obj->display_posts();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $delID = $_GET['id'];
        $dltMsg = $obj->delete_posts($delID);
    }
}

?>


<h2 class="my-3">Manage post view</h2>


<?php if (isset($dltMsg)) { ?>

    <div class="alert alert-danger alert-dismissible fade show my-2 text-center" role="alert">
        <?php echo $dltMsg; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php } ?>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Thumbnail</th>
                <th>Author</th>
                <th>Date</th>
                <th>Category</th>
                <th>Summary</th>
                <th>Tags</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($post = mysqli_fetch_assoc($postData)) { ?>

                <tr>
                    <td><?php echo $post['post_id']; ?></td>
                    <td><?php echo $post['post_title']; ?></td>
                    <td><?php echo $post['post_content']; ?></td>
                    <td>
                        <img class="img-fluid" src="../uploads/<?php echo $post['post_img']; ?>" alt=""><br>
                        <a href="edit_img.php?status=edit_img&&id=<?php echo $post['post_id']; ?>">Change</a>
                    </td>
                    <td><?php echo $post['post_author']; ?></td>
                    <td><?php echo $post['post_date']; ?></td>
                    <td><?php echo $post['cat_name']; ?></td>
                    <td><?php echo $post['post_summary']; ?></td>
                    <td><?php echo $post['post_tag']; ?></td>
                    <td><?php
                        if ($post['post_status'] == '1') {
                            echo "Published";
                        } else {
                            echo "Unpublished";
                        }
                        ?></td>
                    <td>
                        <a href="edit_post.php?status=edit_post&&id=<?php echo $post['post_id']; ?>" class="btn btn-warning my-1 w-100">Edit</a>
                        <a href="?status=delete&&id=<?php echo $post['post_id']; ?>" class="btn btn-danger w-100">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>