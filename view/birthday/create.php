<head>
	<title>Toevoegen</title>
</head>
<body>
	<h1>Toevoegen</h1>
	<form method="post" action="<?= URL ?>birthday/createSave">
		<label>Naam<input required type="text" name="person"></label>
		<label>Dag<input required type="text" name="day"></label>
		<label>Maand<input required type="text" name="month"></label>
		<label>Jaar<input required type="text" name="year"></label>
		<br>
		<button type="submit">Toevoegen</button>
	</form>