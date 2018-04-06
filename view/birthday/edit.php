<form action="<?= URL ?>birthday/editSave/<?= $birthday["id"] ?>" method="POST">
	<label>naam<input type="text" name="person" value="<?= $birthday["person"] ?>"></label>
	<br>
	<label>dag<input type="text" name="day" value="<?= $birthday["day"] ?>"></label>
	<br>
	<label>maand<input type="text" name="month" value="<?= $birthday["month"] ?>"></label>
	<br>
	<label>jaar<input type="text" name="year" value="<?= $birthday["year"] ?>"></label>
	<br>
	<input type="hidden" name="id" value="<?= $birthday["id"] ?>">
		
	<input type="submit" value="Save">
</form>
