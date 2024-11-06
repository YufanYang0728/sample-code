<?php

// Connect to database
$con = mysqli_connect("localhost","root","","robo");

// mysqli_connect("servername","username","password","database_name")

// Get all the investments from investment table
$sql = "SELECT * FROM `testinvestment`";
$all_investments = mysqli_query($con,$sql);

?>
<html>
<head>

</head>
<body>

<div class="input-group" id="investment">
    <form action="test1" method="get">
    <div class="column">
        <p class="name">Company Name:</p>
        <select aria-label="Default select example" id="CompanyName" name="CompanyName" required>
            <option value="" disabled selected>Select your option</option>
            <option>MLC</option>
            <option>AMP</option>
            <option>CBUS</option>
        </select>
    </div>

    </form>
    <div class="product column" id ="product">
        <p class="name">Investment Type:</p>
        <select aria-label="Default select example" id="percentage" name="percentage" required>
            <?php
            $test = "SELECT * FROM `testinvestment` where company_name = 'MLC' ";
            $MLCinvestments = mysqli_query($con,$test);
            // use a while loop to fetch data from the $all_investment variable and individually display as an option
            while ($investment = mysqli_fetch_array(
                $MLCinvestments,MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $investment["admin_fee"];
                // return value is admin fee percentage
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
    </div>

    <div class="amount column" id="amount">
        <p class="name">Amount Invested:</p>
        <input type="number" min="0" placeholder="$" id="invested" name="invested" onkeyup="myFunction()"/>
    </div>

    <div class="input-group-addon">
        <p></p>
        <br>
        <br>
        <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> + </a>
    </div>
</div>

</body>

</html>
