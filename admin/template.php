<?php

include("class/function.php");
$obj = new adminBlog();
session_start();
$id = $_SESSION['admin_id'];
if ($id == null) {
    header("location: index.php");
}
if (isset($_GET['adminlogout'])) {
    if ($_GET['adminlogout'] == 'logout') {
        $obj->adminLogout();
    }
}

?>


<?php include_once("./includes/head.php"); ?>

<body class="sb-nav-fixed">
    <?php include_once("./includes/topnav.php") ?>

    <div id="layoutSidenav">
        <?php include_once("./includes/sidenav.php") ?>

        <div id="layoutSidenav_content">
            <main>

                <div class="container-fluid">
                    <?php

                    if (isset($view)) {
                        if ($view == "dashboard") {
                            include("./view/dash_view.php");
                        } else if ($view == "add_category") {
                            include("./view/add_category_view.php");
                        } else if ($view == "manage_category") {
                            include("./view/manage_category_view.php");
                        } else if ($view == "add_post") {
                            include("./view/add_post_view.php");
                        } else if ($view == "manage_post") {
                            include("./view/manage_post_view.php");
                        } else if ($view == "edit_img") {
                            include("./view/edit_img_view.php");
                        } else if ($view == "edit_post") {
                            include("./view/edit_post_view.php");
                        }
                    }

                    ?>
                </div>

            </main>
            <?php include_once("./includes/footer.php") ?>
        </div>
    </div>
    <?php include_once("./includes/script.php") ?>
</body>