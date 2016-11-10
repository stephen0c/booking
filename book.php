<?php

require('dbconnect.php');
    
if($_POST["book"]=="book"){
    echo "We have come from the booking form.". "<br/>";
    
    $name=$_POST["namebox"];
    $date=$_POST["datebox"];
    $time=$_POST["timebox"];
    
    $sql = "INSERT INTO bookings (name, date, time) VALUES ('$name', '$date', '$time')";
    if(mysqli_query($conn,$sql)){
        
    }
    else{
        echo "Error fam".$sql." ".mysqli_error($conn);
    }
}

    $myquery = "SELECT * FROM bookings";
    
    $result=mysqli_query($conn,$myquery);
    
    
    if($result){
    
}//end of iff

    else {
    echo "Error fam".$sql." ".mysqli_error($conn);
    }//end of else
    
    if($result->num_rows>0){
        //while there is row
        while($row=$result->fetch_assoc()){
            echo "Name: ".$row["name"]. " Date: ".$row["date"]. " Time: ".$row["time"]. "<br/>";
        }//end of while
    }//end of if
    
    


?>