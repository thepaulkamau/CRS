<?php
include("includes/header.php");
?>


<div id="content"><!--#content Begin-->
   <div class="container">
     <div class="col-md-12">
       <ul class="breadcrumb">
         <li>
           <a href="index.php">Home</a>
         </li>
         <li>
           shop
         </li>
<li>
  <?php echo $p_cat_title;?>
</li>
<li><?php echo $pro_title; ?> </li>

       </ul>

     </div>
<div class="col-md-3">
  <?php
include("includes/sidebar.php");
?>
</div>

<!--col-md-9-->
<div class="col-md-9">
  <div id="productMain" class="row">
    <div class="col-sm-6">

    <!--slider-->
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
     <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="admin_area/product_images/<?php echo $pro_img1;?>" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="admin_area/product_images/<?php echo $pro_img2;?>" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="admin_area/product_images/<?php echo $pro_img3;?>" alt="New york" style="width:100%;">
      </div>
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

<!--end slider-->

<div class="col-sm-6"><!--col-sm-6-->
  <div class="thumbnail">
     <h1 class="text-center"> <?php echo $pro_title; ?> </h1>
     <?php add_cart(); ?> 

    

     <div class="form-group">
           <label class="col-md-5 control-label">Product Models Available</label>
       <div class="col-md-7">
         <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('must pick 1 size for the product')">
            <option disabled selected> Select Type</option>
            <option>DELL</option>
            <option>ACER</option>
            <option>SAMSUNG</option>
            <option>TOSHIBA</option>
         </select>
           </div>
        </div>

            <p class="price">Ksh.<?php echo $pro_price; ?></p>
           
         </form>
  </div>


<div class="row" id="thumbs"><!--row start-->

  <div class="col-xs-4">
    <a data-target="#myCarousel" data-slide-to="0" class="thumb">
      <img src="admin_area/product_images/<?php echo $pro_img1;?>" alt="product 1" class="img-responsive">
    </a>
  </div>
    

  <div class="col-xs-4">
    <a data-target="#myCarousel" data-slide-to="1" class="thumb">
      <img src="admin_area/product_images/<?php echo $pro_img2;?>" alt="product 2" class="img-responsive">
    </a>
  </div>

  <div class="col-xs-4">
    <a data-target="#myCarousel" data-slide-to="2" class="thumb">
      <img src="admin_area/product_images/<?php echo $pro_img3;?>" alt="product 3" class="img-responsive">
    </a>
  </div>

</div><!--row finish-->

</div><!--col-sm-6 finish-->

<div class="box" id="details">
  <h4>Product Details</h4>
  <p>
    <?php echo $pro_desc; ?>
  </p>
  <h4>Size</h4>
  <ul>
    <li>small</li>
    <li>medium</li>
    <li>large</li>
  </ul>
  <hr>
</div>


  </div><!--row finish-->

<div id="row same-height-row">
  <div class="col-md-3 col-sm-6 ">
  <div class="thumbnail same-height headline">
    <h3 class="text-center"> Products You Maybe Like</h3>
  </div>
</div>
<?php
$get_products = "select * from products order by rand() DESC LIMIT 0,3";
  $run_products = mysqli_query($db,$get_products);
  while($row_products=mysqli_fetch_array($run_products)){
    $pro_id = $row_products['product_id'];
    $pro_title = $row_products['product_title'];
    $pro_img1 = $row_products['product_img1'];
     $pro_price = $row_products['product_price'];

     echo"<div class='col-md-3 col-sm-6 center-responsive'>
     <div class='product same-height'>
<a href='details.php?pro_id=$pro_id'>
<img class='img-responsive' src='admin_area/product_images/$pro_img1'>
<a>
<div class='text'>
<h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
<p class='price'>ksh.$pro_price</p>
</div>
</div>
</div>
     ";
   }
?>



</div> <!--end of col-md-9-->

   
  </div>
</div>


   </div> 
</div>

<?php
include("includes/footer.php");
?>

</body>

</html>