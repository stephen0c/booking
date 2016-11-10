<!DOCTYPE html>
<head>
    <title>My Bookings</title>
</head>
<body>
    <h1>My Restaurant</h1><!--Booking form fam-->
        <form method ="POST" action="book.php">
            <label>Name</label>
            <input type="text" name="namebox" required>
            <label>Date</label>
            <input type="date" name="datebox">
            <label>Time</label>
            <input type ="time" name="timebox">
            <!--this allows us to check which type of form was used-->
            <input type ="hidden" value ="book" name="book">
            <input type="submit" value="book">
    </form>
    
    
    <h2>Harmabe a table</h2><!--This searches for a booking-->
    
</body>
</html>

<?php

?>