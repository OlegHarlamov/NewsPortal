<?php ob_start(); ?>

<div class="conatiner" style="min-height: 400px;">
<div class="col-md-11">

	<h2>News Add</h2>
	<?php 
	if(isset($test)) {
		if($test==true)
		{	
	 ?>
	 <div class="alert alert-info">
	 	<strong>Запись добавлена.</strong> <a href="newsAdmin">Список новостей</a>
	 </div>
	 <?php 
	}
	else if($test==false)
	{
	  ?>
	<div class="alert alert-warning">
		<strong>Ошибка добавления записи!</strong><a href="newsAdmin">Список новостей</a>
	</div>
	<?php 
}
}
else{
	 ?>
	 <form action="newsAddResult" method="POST" enctype="multipart/form-data">
	 	<table class="table table-bordered">
	 		<tr>
	 			<td>News title</td>
	 			<td><input type="text" name='title' class="form-control" required></td>
	 		</tr>
	 		<tr>
	 			<td>News text</td>
	 			<td><textarea name="text" rows="5" class="form-control"></textarea></td>
	 		</tr>
	 		<tr>
	 			<td>Category</td>
	 			<td>
	 				<select name="idCategory" class="form-control">

	 				<?php 
	 				print_r($arr); 
	 				foreach($arr as $row){
                     echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                     }
	 				 ?>
	 				 </select>	 				
	 			</td>
	 		</tr>
	 		<!-- image -->
	 		<tr>
	 			<td>Picture</td>
	 			<td><div>
	 				<input type="file" name="picture" style="color:black;">
	 			</div></td>
	 		</tr>
	 		<!-- end image -->
	 		<tr>
	 			<td colspan="2">
	 				<button class="btn btn-primary" type="submit" name="save">
	 					<span class="glyphicon glyphicon-plus"></span>Сохранить
	 				</button>
	 				<a href="" class="btn btn-large btn-success">
	 					<i class="glyphicon glyphicon-backward"></i>&nbsp;Назад к списку</a>
	 			</td>
	 		</tr>
	 	</table>
	 </form>
	 <?php 
	}
	  ?>
	
</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>