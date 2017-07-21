<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
</head>
<body>
<form action="local_body_insertAPI.php" method="post">

    <p>
    	<label for="lastName">LB_NAME</label>
        <input type="text" name="lb_name" id="lb_name">
    </p>
    <p>
    	<label for="emailAddress">LB_DISTRICT</label>
        <input type="text" name="lb_district" id="lb_district">
    </p>
	<p>
	<select name="lb_type">
  <option value="dist_panch">District Panchayath</option>
  <option value="grama_panch">Gramapanchayath</option>
    <option value="block_panch">Block Panchayath</option>
  <option value="muncp">Municipality</option>
  <option value="corp">Corporation</option>
</select>
	</p>
    <input type="submit" value="Add Records">
</form>
</body>
</html>