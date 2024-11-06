<?php

// Connect to database
$con = mysqli_connect("localhost","root","","robo");

// mysqli_connect("servername","username","password","database_name")

// Get all the investments from investment table
$sql = "SELECT * FROM `investment`";
$all_investments = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="test1" method="get">
    <label>Name of Company:</label>
    <select name="company">
        <option value="" disabled selected>Select your option</option>
        <option>Macquarie Investment Manager II</option>
        <option>BT Panorama</option>
        <option>AMP North</option>
        <option>CFS FirstWrap</option>
    </select>
    <br>
    <label>Select a Category</label>
    <select name="investment" id="investment">
        <?php
        // use a while loop to fetch data
        // from the $all_investment variable
        // and individually display as an option
        while ($investment = mysqli_fetch_array(
            $all_investments,MYSQLI_ASSOC)):;
            ?>
            <option value="<?php echo $investment["investment_id"];
            // The value we usually set is the primary key
            ?>">
                <?php echo $investment["investment_name"];
                // To show the investment name to the user
                ?>
            </option>
        <?php
        endwhile;
        // While loop must be terminated
        ?>
    </select>
    <br>
    <button type="submit">submit</button>
</form>
<br>
</body>
</html>
