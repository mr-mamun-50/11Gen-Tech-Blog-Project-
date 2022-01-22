<?php

$catData = $obj->display_category();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $delID = $_GET['id'];
        $dltMsg = $obj->delete_category($delID);
    }
}

?>


<h2 class="my-3">Manage category view</h2>


<?php if (isset($dltMsg)) { ?>

    <div class="alert alert-danger alert-dismissible fade show my-2 text-center" role="alert">
        <?php echo $dltMsg; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php } ?>

<table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php while ($cat = mysqli_fetch_assoc($catData)) { ?>

            <tr>
                <td><?php echo $cat['cat_id']; ?></td>
                <td><?php echo $cat['cat_name']; ?></td>
                <td><?php echo $cat['cat_desc']; ?></td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="?status=delete&&id=<?php echo $cat['cat_id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>