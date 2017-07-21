<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
</head>
<body>
<form action="user_rep_insertAPI.php" method="post">

    <p>
    	<label for="lastName">REP_NAME</label>
        <input type="text" name="rep_name" id="rep_name">
    </p>
   <p>
    	<label for="rep_mob_no">REP_MOB_NO</label>
        <input type="text" name="rep_mob_no" id="rep_mob_no">
    </p>  
	<p>
    	<label for="lastName">REP_WARD_NAME</label>
        <input type="text" name="rep_ward_name" id="rep_ward_name">
    </p>  
	<p>
    	<label for="lastName">REP_WARD_NO</label>
        <input type="text" name="rep_ward_no" id="rep_ward_no">
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
	   <p>
    	<label for="lastName">REP_LB_NAME</label>
        <input type="text" name="rep_lb_name" id="rep_lb_name">
    </p>

    <input type="submit" value="Add Records">
</form>
</body>
</html>