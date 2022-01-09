<?php 
include("path.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Harmattan|Racing+Sans+One" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Blog</title>
</head>

<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Highlights</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="assets/images/image1.jpeg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="main.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Author</i>
            &nbsp;
            <i class="far fa-calendar"> Jan 5, 2021</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/image2.jpeg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="main.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Author</i>
            &nbsp;
            <i class="far fa-calendar"> Jan 3, 2021</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/image1.jpeg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="main.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Author</i>
            &nbsp;
            <i class="far fa-calendar"> Jan 4, 2021</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/image2.jpeg" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="main.html">One day your life will flash before your eyes</a></h4>
            <i class="far fa-user"> Author</i>
            &nbsp;
            <i class="far fa-calendar"> Jan 3, 2021</i>
          </div>
        </div>


      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>

        <div class="post clearfix">
          <img src="assets/images/image2.jpeg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="main.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Author</i>
            &nbsp;
            <i class="far fa-calendar"> Jan 5, 2021</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="main.html" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="assets/images/image1.jpeg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="main.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Author</i>
            &nbsp;
            <i class="far fa-calendar"> Jan 5, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="main.html" class="btn read-more">Read More</a>
          </div>
        </div>
        
      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Educational</a></li>
            <li><a href="#">Technical</a></li>
            <li><a href="#">Research</a></li>
            <li><a href="#">Other</a></li>
            
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <?php include(ROOT_PATH . "/app/includes/footer.php");
    ?>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>