<?php
$active='contact';
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
           contact
         </li>
       </ul>

     </div>
<div class="col-md-3">
  <?php
include("includes/sidebar.php");
?>
</div>

<div class="col-md-9">
  
  <div class="thumbnail">
    <div class="thumbnail-header">
      <center>
        <h2> Feel Free to Contanct Us</h2>
        <p class="text-muted">
          If you have any questions, Feel free to contact us. Our Customer Service work <strong>24/7</strong>
        </p>
      </center>

      <form action="contact.php" method="post">

        <div class="form-group">
          <label>Name</label>
          <input type="text" class=
          "form-control" name="name" required>
        </div>

          <div class="form-group">
          <label>Email</label>
          <input type="text" class=
          "form-control" name="email" required>
        </div>

          <div class="form-group">
          <label>Subject</label>
          <input type="text" class=
          "form-control" name="subject" required>
        </div>

          <div class="form-group">
          <label>Message </label>
          <textarea area="message" class="form-control"></textarea>
        </div>

        <div class="text-center">
          <button type="submit" name="submit" class="btn btn-primary">
            <i class="fa fa-user-md"></i>
            Send Message
          </button>
        </div>

      </form>
    </div>
</div>


 </div> 
</div>

<?php
include("includes/footer.php");
?>

</body>

</html>