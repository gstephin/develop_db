<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
</head>
<body>
<form action="driverInsert_API.php" method="post">

    <p>
    	<label for="driver_name">Driver Name</label>
        <input type="text" name="driver_name" id="driver_name">
    </p>

    <p>
    	<label for="driver_mob">Driver Mob</label>
        <input type="text" name="driver_mob" id="driver_mob">
    </p> 
	<p>
    	<label for="driver_location">Driver Location</label>
        <input type="text" name="driver_location" id="driver_location">
    </p>
    <input type="submit" value="save">
</form>
</body>
</html>