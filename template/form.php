<content>
	<div style="">
		<form method="post">				
			<input type="text" name="Check_data_name" placeholder="Название проверяемой работы" style="width:99.5%; padding-left:5px; border: 1px solid #CEE3F6;" required/>
			<br>
			<br>
			<textarea name="Check_data" rows="7" cols="80" placeholder="Данные вида: 0.0.0.0|0.0.0.0" style="height:300px; width:99%; padding:5px; border: 1px solid #CEE3F6;" required></textarea>
			<div style="margin-left:40%; margin-bottom: 10px;">
				<div><input type="radio" name="select_task" value="list_data" checked />Вывести списком</div>
				<div><input type="radio" name="select_task" value="check_data" />Проверить данные</div>
			</div>
			<center><input type="submit" name="Check_result" value="Проверить" style="border: 1px solid #CEE3F6; padding:5px; cursor:pointer;" /></center>
		</form>
	</div>
	<div>
		<?php
			include ($config->template."/content.php");
		?>
	</div>
</content>