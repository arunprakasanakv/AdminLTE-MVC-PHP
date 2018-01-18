<?php 
   include_once 'header.php';
   include_once '../controller/function.php';
   $raw_data = get_edit_question($_GET['id']);
?>
<div class="box">
	<div class="box-header with-border">
		<h2>Edit Question</h2>
	</div>
	<div class="box-body">
		<form method="post" action="../controller/question_update_controller.php"> 
			<div class="form-group">
				<label>Question</label>
				<input type="hidden" name="id" value="<?php echo $raw_data[0]['id']; ?>">
				<textarea class="form-control" name="question" placeholder="Type it here....."><?php echo $raw_data[0]['question']; ?></textarea>
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