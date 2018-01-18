<?php 
   include_once 'header.php';
   include_once '../controller/function.php';
   $raw_data = get_edit_answer($_GET['id']);
?>
<div class="box">
	<div class="box-header with-border">
		<h2>Edit Answer</h2>
	</div>
	<div class="box-body">
		<form method="post" action="../controller/answer_update_controller.php"> 
			<div class="form-group">
				<label>Question</label>
				<input type="hidden" name="id" value="<?php echo $raw_data[0]['id']; ?>">
				<textarea class="form-control" name="answer" placeholder="Type it here....."><?php echo $raw_data[0]['answer']; ?></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-info">Submit</button>
			</div>
		</form>
	</div>
</div>
<?php 
  include_once 'footer.php';
?>