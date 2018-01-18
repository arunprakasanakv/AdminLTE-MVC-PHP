<?php 
   include_once 'header.php';
   include_once '../controller/function.php';
   $raw_data = get_user_answer($_SESSION['user']['id']);
?>
<?php
		if (isset($_GET['status'])) {
			echo "<div class='container'>";
			if ($_GET['status'] == "ok") {
			    echo "<div class='alert alert-info' ><strong>Success</strong> updated.</div>";
			}elseif ($_GET['status'] == "not_ok") {
			    echo "<div class='alert alert-error' ><strong>Error</strong> Not updated.</div>";
			}
			echo "</div>";
		}

    ?>
<div class="box">
	<div class="box-header with-border">
		<h2>Post Answer</h2>
	</div>
	<div class="box-body">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Answer</th>
					<th>Time</th>
					<th>Edit/Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if ($raw_data != 'empty') {
						$i = 1;
						foreach ($raw_data as $key => $value) {
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$value['answer']."</td>";
							echo "<td>".$value['created_time']."</td>";
							echo "<td><a href='edit_answer.php?id=".$value['id']."'>Edit</a>/<a href='../controller/delete.php?id=".$value['id']."&slug=answers'>Delete</a></td>";
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