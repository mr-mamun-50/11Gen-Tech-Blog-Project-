<?php

include("./admin/class/function.php");
$obj = new adminBlog();

$getCat = $obj->display_category();

if (isset($_GET['view'])) {
    if ($_GET['view'] = 'single_post_view') {
        $id = $_GET['id'];
        $single_post = $obj->get_post_info($id);
    }
}

?>

<?php include_once("./includes/head.php"); ?>

<body>

    <!-- ***** Preloader ***** -->
    <?php include_once("./includes/preloader.php"); ?>

    <!-- Header -->
    <?php include_once("./includes/header.php"); ?>

    <!-- Page Content -->
    <!-- Banner -->
    <?php include_once("./includes/single_post_banner.php"); ?>

    <?php include_once("./includes/cta.php"); ?>

    <section class="blog-posts">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <img src="./uploads/<?php echo $single_post['post_img']; ?>" alt="">
                        </div>
                        <div class="down-content">
                            <span><?php echo $single_post['cat_name']; ?></span>
                            <h2><?php echo $single_post['post_title']; ?></h2>
                            <ul class="post-info">
                                <li><a href="#"><?php echo $single_post['post_author']; ?></a></li>
                                <li><a href="#"><?php echo $single_post['post_date']; ?></a></li>
                                <li><a href="#"><?php echo $single_post['post_comment_cnt']; ?> comments</a></li>
                            </ul>
                            <p><?php echo $single_post['post_content']; ?></p>
                            <div class="post-options">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="post-tags">
                                            <li><i class="fa fa-tags"></i></li>
                                            <li><?php echo $single_post['post_tag']; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="post-share">
                                            <li><i class="fa fa-share-alt"></i></li>
                                            <li><a href="#">Facebook</a>,</li>
                                            <li><a href="#"> Twitter</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include_once("./includes/sidebar.php"); ?>

            </div>
        </div>
    </section>

    <?php include_once("./includes/footer.php"); ?>

    <?php include_once("./includes/script.php"); ?>