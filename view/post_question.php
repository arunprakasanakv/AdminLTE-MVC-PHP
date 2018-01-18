<?php 
   include_once 'header.php';
   include_once '../controller/function.php';
   $raw_data = get_user_question($_SESSION['user']['id']);
?>
<?php
		if (isset($_GET['status'])) {
			echo "<div class='container'>";
			if ($_GET['status'] == "ok") {
			    echo "<div class='alert alert-info' ><strong>Success</strong> Inserted.</div>";
			}elseif ($_GET['status'] == "not_ok") {
			    echo "<div class='alert alert-error' ><strong>Error</strong> Not added.</div>";
			}
			echo "</div>";
		}

    ?>
<div class="box">
	<div class="box-header with-border">
		<h2>Post Question</h2>
	</div>
	<div class="box-body">
		<form method="post" action="../controller/question_controller.php"> 
			<div class="form-group">
				<label>Question</label>
				<textarea class="form-control" name="question" placeholder="Type it here....."></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-info">Submit</button>
			</div>
		</form>
	</div>
	<div class="box-footer">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Question</th>
					<th>Time</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if ($raw_data != 'empty') {
						$i = 1;
						foreach ($raw_data as $key => $value) {
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$value['question']."</td>";
							echo "<td>".$value['created_time']."</td>";
							echo "</tr>";
							$i++;
						}
					}
					else{
						echo "<tr>";
						echo "<td>No questions found</td>";
						echo "</tr>";
					}
				 ?>
			</tbody>
		</table>
	</div>
</div>
<?php 
  include_once 'footer.php';
?>