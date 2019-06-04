<meta charset="utf-8">
<form method="POST" action="form.php">
	<?php echo '<input name="id" type="hidden" value="'. $_POST['id'] .'">'; ?> 
	<?php echo '<input name="text" value="'. $_POST['text'] .'">'; ?> 
	<button>редактировать</button>
</form>


