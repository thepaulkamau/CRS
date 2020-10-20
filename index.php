<?php
$active='Home';
include("includes/header.php");
?>

  <!--slider      -->

<div class="container">

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

    <?php
  $get_slides= "select * from slider LIMIT 0,1";
  $run_slides= mysqli_query($con,$get_slides);
  while($row_slides=mysqli_fetch_array($run_slides))
  {
    $slide_name = $row_slides['slide_name'];
    $slide_image = $row_slides['slide_image'];
    echo "
 <div class='item active'>
 <img src='admin_area/slides_images/$slide_image'>
 </div>
    ";
  }

  $get_slides= "select * from slider LIMIT 1,5";
  $run_slides= mysqli_query($con,$get_slides);
  while($row_slides=mysqli_fetch_array($run_slides))
  {
    $slide_name = $row_slides['slide_name'];
    $slide_image = $row_slides['slide_image'];
    echo "
 <div class='item'>
 <img src='admin_area/slides_images/$slide_image'>
 </div>
    ";
  }
    ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 
</div>

<!-- BELOW SLIDER advantages-->
<div id="advantages">
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <div class="icon">
        <span class="glyphicon glyphicon-heart"></span>

      </div>

      <h3><a href="#">Best Services</a></h3>
      <p> We know to provide the best posible service ever</p>

    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail">
      <div class="icon">
        <span class="glyphicon glyphicon-tag"></span>

      </div>

      <h3><a href="#">Best prices</a></h3>
      <p> icomparable to others</p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail">
      <div class="icon">
        <span class="glyphicon glyphicon-thumbs-up"></span>

      </div>

      <h3><a href="#">100% Original</a></h3>
      <p> Best of the Best</p>
    </div>
  </div>

</div>
  
</div>
  
</div>

<div id="hot"><!--hot product storefront-->
  <div class="thumbnail">
    <div class="container">
      <div class="col-md-12">
        <h2>
        Our Latest Products
        </h2>
      </div>
    </div>
  </div>

  <div id="content" class="container"><!--container for products-->
    <div class="row">
 <?php

 getPro();
?>


    </div>
   


  </div>

</div>

 
<?php
include("includes/footer.php");
?>

</body>

</html>