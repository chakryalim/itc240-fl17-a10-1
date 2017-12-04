<?php
//customer_view.php - shows details of a single customer
?>
<?php include 'includes/config.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:artist_list.php');
}


$sql = "select * from Artists where ArtistID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $FirstName = stripslashes($row['FirstName']);
        $LastName = stripslashes($row['LastName']);
        $Birth = stripslashes($row['Birth']);
        $Death = stripslashes($row['Death']);
        $title = "Title Page for " . $FirstName . $LastName;
        $pageID = $LastName;
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>The artist does not exist</p>';
}

?>
<?php get_header()?>
<h1><?=$pageID?></h1>
<?php
    
    
if($Feedback == '')
{//data exists, show it

    echo '<p>';
    echo ' <b>' . $FirstName . '</b> ';
    echo '<b>' . $LastName . '</b> ';
    echo '<br>';
    echo 'Year of Birth: <b>' . $Birth . '</b> ';
    echo '<br>';
    echo 'Year of Death: <b>' . $Death . '</b> ';
    echo '<br>';
    echo '<img src="upload/artist' . $id . '.jpg" />';
    
    echo '</p>'; 
    echo '</p>'; 
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="artist_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer();?>