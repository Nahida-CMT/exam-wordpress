<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- slider part start -->
    <header class="container-fluid ps-0 pe-0 slider">
        <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <?php
            $qry1 = new WP_Query([
                'post_type'=>'post',
                'category_name'=>'slider',
            ]);
            ?>
  <div class="carousel-inner">
    <?php
    $x = 0;
    while($qry1->have_posts()){$qry1->the_post();
    $x++;
    ?>
    <div class="carousel-item <?= ($x==1)? 'active': ''?>">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
      <?php the_post_thumbnail(); ?>
    </div>
    <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
    </header>
    <!-- slider part end -->

    <!-- logo part start -->
    <section class="container-fluid logo">
        <div class="row">
            <div class="col-sm-6">
                <?php the_custom_logo(); ?>
            </div>
            <div class="col-sm-6">
                <?php dynamic_sidebar('bdlogo'); ?>
            </div>
        </div>
    </section>
    <!-- logo part end -->

    <!-- menu part start -->
    <section class="container navbar navbar-expand-lg bg-light menu">
        <?php
        wp_nav_menu([
        'theme_location'=>'PM',
        'menu_class'=>'navbar-nav'
        ]);
        ?>
    </section>
    <!-- menu part end -->

    <!-- hero part start -->
    <section class="container text-center mt-5 hero">
        <div class="row">
            <?php dynamic_sidebar('herotitle'); ?>
        </div>
        <div class="row mt-5">
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('herocard1'); ?>
            </div>
            </div>
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('herocard2'); ?>
            </div>
            </div>
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('herocard3'); ?>
            </div>
            </div>
        </div>
    </section>
    <!-- hero part end -->

    <!-- photo part start -->
    <section class="container text-center mt-5 photo">
        <div class="row">
            <div class="col-sm-5">
            <?php dynamic_sidebar('photoleft'); ?>
            </div>
            <div class="col-sm-2">
            <?php dynamic_sidebar('phototitle'); ?>
            </div>
            <div class="col-sm-5">
            <?php dynamic_sidebar('photoright'); ?>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
            <?php dynamic_sidebar('photocard1'); ?>
            </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
            <?php dynamic_sidebar('photocard2'); ?>
            </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
            <?php dynamic_sidebar('photocard3'); ?>
            </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
            <?php dynamic_sidebar('photocard4'); ?>
            </div>
            </div>
        </div>
    </section>
    <!-- photo part end -->

    <!-- news part start -->
    <section class="container mt-5 news">
        <div class="row text-center">
        <div class="col-sm-5">
            <?php dynamic_sidebar('photoleft1'); ?>
            </div>
            <div class="col-sm-2">
            <?php dynamic_sidebar('phototitle1'); ?>
            </div>
            <div class="col-sm-5">
            <?php dynamic_sidebar('photoright1'); ?>
            </div>
        </div>
        <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <?php
            $qry1 = new WP_Query([
                'post_type'=>'post',
                'category_name'=>'slider',
            ]);
            ?>
  <div class="carousel-inner">
    <?php
    $x = 0;
    while($qry1->have_posts()){$qry1->the_post();
    $x++;
    ?>
    <div class="carousel-item <?= ($x==1)? 'active': ''?>">
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
      <?php the_title(); ?>
    </div>
    <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
    </section>
    <!-- news part end -->

    <!-- footer part start -->
    <footer class="container-fluid foot">
        <div class="container">
        <div class="row ft">
            <div class="col-sm-8">
            <?php dynamic_sidebar('ftleft'); ?>
            </div>
            <div class="col-sm-4">
            <?php dynamic_sidebar('ftright'); ?>
            </div>
        </div>
        <div class="row fb">
            <div class="col-sm-6">
            <?php dynamic_sidebar('fbleft'); ?>
            </div>
            <div class="col-sm-6">
            <?php dynamic_sidebar('fbright'); ?>
            </div>
        </div>
        </div>
    </footer>
    <!-- footer part end -->
<?php wp_footer(); ?>
</body>
</html>