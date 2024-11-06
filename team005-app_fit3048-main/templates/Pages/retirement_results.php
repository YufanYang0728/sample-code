<?php
echo $this->Html->css('custom.css');
$myAge = $_GET["age"];
$myIncome = $_GET["income"];
$myOthers = $_GET["others"];
$myLump = $_GET["lump"];
$mySuper = $_GET["super"];
$myInvestment = $_GET["investment"];

$_SESSION["age"] = $myAge;

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">
<div class="text-center" style="margin-top: 2%;margin-bottom: 2%">
    <h2 class="myTitle">Investing at retirement</h2>
    <!--    <span>Fill in your personal details</span>-->
</div>
<?php if ($myAge<58){ ?>
    <div class="text-center">
<p>Sorry, we can't help at this stage. Minimum age for retirement is 58</p>
        <a class="btn btn-primary " href="<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>">Back to Dashboard</a>

    </div>
<?php } else{?>
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
                        <td><h7 ><?php echo $myAge ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your required income: </h5></td>
                        <td><h7><?php echo "$" . number_format($myIncome) ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your income from other sources: </h5></td>
                        <td><h7><?php echo "$" . number_format($myOthers) ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your required lump sum: </h5></td>
                        <td> <h7><?php echo "$" . number_format($myLump) ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your current Super investment: </h5></td>
                        <td><h7><?php echo "$" . number_format($mySuper) ?></h7></td>
                    </tr>
                    <tr>
                        <td><h5>Your current Non-Super investment: </h5></td>
                        <td> <h7><?php echo "$" . number_format($myInvestment) ?></h7></td>
                    </tr>
                </table>

        </div>

        <div class="row" style="justify-content: center;margin-top: 2vh">
            <h3 class="text-center ">Continue your retirement journey!</h3>
            <h6 class="text-center" style="margin-bottom: 1em">Help further your retirement goals by going through our questionnaires to help reach your retirement goals!</h6>
        </div>

            <div class="row" style="margin-bottom:0.5em">
                <button style="width:35%;" type="button" onclick="location.href='super_contribution' "  class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Contribution to Super</button>
            </div>
            <div class="row" style="margin-bottom:0.5em">
<!--                <button type="button" onclick="location.href='risk_profile' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Investment portfolio</button>-->
                <button style="width:35%;" type="button" onclick="location.href='investment_portfolio_1' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Investment portfolio</button>
            </div>
            <div class="row" style="margin-bottom:0.5em">
                <button style="width:35%;" type="button" onclick="location.href='consolidate_super' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Consolidate Super</button>
            </div>
            <div class="row" style="margin-bottom:0.5em">
                <button style="width:35%;" type="button" onclick="location.href='income_stream' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Set up an Income Stream</button>
            </div>

        </div>

    </div>

<?php }?>
</html>
