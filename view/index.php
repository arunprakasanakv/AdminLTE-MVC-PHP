<?php 
   include_once 'header.php';
?>
<br>
<div class="box">
	<div class="box-body">
  		<h2>Welcome <?php echo $_SESSION['user']['name']; ?></h2>
  	</div>
</div>
<?php 
  include_once 'footer.php';
?>