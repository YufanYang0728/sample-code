<?php
echo $this->Html->css('custom.css');
$age = $_GET["savings_age"];
$income = $_GET["savings_income"];
$retirement_age = $_GET["retirement_age"];
$retirement_income = $_GET["retirement_income"];
$super = $_GET["savings_super"];
$monthly_super = $_GET["savings_monthly_super"];
$savings_non_super = $_GET["savings_non_super"];
$savings_non_monthly_super = $_GET["savings_non_monthly_super"];


$_SESSION["my_age"] = $age;

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">
<div class="text-center" style="margin-top: 2%;margin-bottom: 2%">
    <h2 class="myTitle">Saving at retirement</h2>
    <!--    <span>Fill in your personal details</span>-->
</div>

    <style>
        h5, h6 {
            font-weight: normal;
        }
        h7{
            font-size: 25px;
        }

    </style>
    <div class="container-fluid">
        <div class="text-center">
            <h2>Your Inputted Details</h2>
            <p>These results help us guide you through following our flow below and allow you to take control of your retirement plans</p>
        </div>
        <div class="row">

                <table class="table table-bordered table-hover table-dark" style="width: 35%">
                    <tr>
                        <td><h5>Your Age: </h5></td>
                        <td><h7 ><?php echo $age ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your annual income(before tax): </h5></td>
                        <td><h7><?php echo "$" . number_format($income) ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your retirement age: </h5></td>
                        <td><h7><?php echo $retirement_age ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your monthly income after retirement: </h5></td>
                        <td> <h7><?php echo "$" . number_format($retirement_income)  ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your current Super fund: </h5></td>
                        <td><h7><?php echo "$" . number_format($super) ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your current monthly Super investment: </h5></td>
                        <td> <h7><?php echo "$" . number_format($monthly_super) ?></h7></td>
                    </tr>

                    <tr>
                        <td><h5>Your current Non-Super investment: </h5></td>
                        <td> <h7><?php echo "$" . number_format($savings_non_super) ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your current monthly Non-Super investment: </h5></td>
                        <td> <h7><?php echo "$" . number_format($savings_non_monthly_super) ?></h7></td>
                    </tr>
                </table>

        </div>

        <div class="row" style="justify-content: center;margin-top: 2vh">
            <h3 class="text-center ">Continue your retirement journey!</h3>
            <h6 class="text-center" style="margin-bottom: 1em">Help further your retirement goals by going through our questionnaires to help reach your retirement goals!</h6>
        </div>

            <div class="row" style="margin-bottom:0.5em">
                <button style="width:35%;" type="button" onclick="location.href='iteration3_super_contribution' "  class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Contribution to Super</button>
            </div>
            <div class="row" style="margin-bottom:0.5em">
<!--                <button type="button" onclick="location.href='risk_profile' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Investment portfolio</button>-->
                <button style="width:35%;" type="button" onclick="location.href='iteration3_portfolio_1' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Investment portfolio</button>
            </div>
            <div class="row" style="margin-bottom:0.5em">
                <button style="width:35%;" type="button" onclick="location.href='iteration3_consolidate_super' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Consolidate Super</button>
            </div>

        </div>

    </div>


</html>
