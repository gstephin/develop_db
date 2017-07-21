<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Add Events Form</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
<h1> Add Events Form</h1>
<form action="events_insertAPI.php" method="post" enctype="multipart/form-data">

    <p>
    	<label for="event_location">Event Location</label>
        <input type="text" name="event_location" id="event_location">
    </p>
    <p>
    	<label for="event_title">Event Title</label>
        <input type="text" name="event_title" id="event_title">
    </p>
	<p>
		<label for="event_description">Event Description</label>
        <input type="text" name="event_description" id="event_description">
	</p>
	<p>Date: <input type="text" name="event_date"id="datepicker"></p>
	
  <p> Upload Image     <input type="file" name="image" />



    <!--<img id="blah" src="#" alt="your image" />-->
</p>
    <input type="submit" value="Add event">
</form>
</body>
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
</html>