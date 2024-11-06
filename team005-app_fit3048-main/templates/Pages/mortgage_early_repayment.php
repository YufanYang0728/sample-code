<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<!doctype html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<?php
echo $this->Html->css('custom.css');
?>
<style>

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }





</style>
<link rel="stylesheet" href="\team18-app_fit3048\webroot\css\styles.css" type="text/css">
<body>

<nav class="navbar justify-content-center navbar-light bg-light">
    <ul class="nav justify-content-center">
        <li class="nav-item" >
            <a class="navbar-brand" href="calculators">Calculator Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="car_lease_calculator">Car-Lease </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="income_tax_calculator">Income-Tax </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  style="color:lightblue"href="retirement_calculator">Retirement </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="salary_sacrifice_calculator">Salary-Sacrifice </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="#">Age-Pension</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="#">Mortgage</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="#">Credit Card Loan</a>
        </li>
    </ul>

</nav>

<nav class="navbar justify-content-center navbar-light bg-light">
    <ul class="nav justify-content-center">
        <li class="nav-item" >
            <a class="navbar-brand" href="mortgage_calculator">Mortgage Calculator </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="mortgage_calculator">Monthly Repayment </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="mortgage_borrow_calculator">Borrow </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  style="color:lightblue"href="mortgage_early_repayment">Early Repayment </a>
        </li>
    </ul>
</nav>

<div class="container" >
    <div class="text-center" style="margin-top: 5%">
        <h2 class="myTitle" >Mortgage Calculators</h2>
<!-- third one 
*
*
*
*-->
<div class="text-center" style="margin-top: 5%">
<div class="outputBox">
        <div class="row">
            <div class="col-5 colorBox" ><h3 class="mySubTitle"> Early Repayment Calculator</h3>
            <br></div>
            <div class="col-5 colorBox" style="margin-left: 5%;">
                <h3 class="mySubTitle">Your Payment Data</h3></div>
        </div>

        <div class="row">
            <div class="col-5 thinBox"  >

        <form id="lease_form">
            <br>
            <span style="float: left">What is your <span class="blue" > Mortgage Term?</span></span>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
                        <div class="input-group-text">Year(s)</div>
                    </div>
                <input id="Terms_of_Loan" style="width: 200px" name="Terms_of_Loan" type="number" class="form-control" min="1" max="100" required="required">
            </div>


            <span style="float: left">What is your<span class="blue" > Mortgage</span> amount?</span>
            <div class="input-group mb-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input id="Loan_Amount" name="Loan_Amount" style="width: 200px"  type="number" class="form-control" min="1" max="999999999" required="required">

            </div>
            </div>

                <span style="float: left">What is the current<span class="blue" > Interest Rate?</span> </span>
                <div class="input-group mb-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">%</div>
                        </div>
                    
                        <input id="Annual_Interest_Rate" style="width: 200px" name="Annual_Interest_Rate" onKeyPress="return check(event,value)"  name="Annual_Interest_Rate" type="number" min="0" max="100" class="form-control" required="required">
                    </div>
                </div>


       

            <br>
        </form>
<br>
        <div class="form-group">
            <button id="Submit" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase">Calculate</button>
        </div>
                <br>
            </div>




            <div class="col-5 thinBox-carLease" style="margin-left: 5%;">
                <br>
                <form>
                <table >

                    <tr >
                        <td style="text-align: left"> <h7> Total Number of Payments: </h7> </td>
                        <td style="text-align: right; padding-left: 5vw"> <h7  class="number" id="Total_NO_Payments">0</h7>
                        </td>
                    </tr>


                    <tr style="border-bottom: 1px solid black  ">
                        <td style="text-align: left"> <h7 >Final Payment Date: </h7> </td>
                        <td style="text-align: right"> <h7  class="number" id="Final_Payment_Date" >0</h7></td>
                    </tr>


                    <tr>
                        <td style="text-align: left" > <h2 style="font-family: Helvetica" >Total Interest: </h2> </td>
                        <td style="text-align: right"> <h2  class="number" id="Total_Interest" >$0</h2></td>
                    </tr>

                </table>
                </form>
            </div>

        </div>
        </div>

</div> -->
</div>
</div>


    <script>

        function check(e,value){
            //Check Charater
            var unicode=e.charCode? e.charCode : e.keyCode;
            if (value.indexOf(".") != -1)if( unicode == 46 )return false;
            if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
        }

    </script>


    <?= $this -> Html -> script('lease.js') ?>

</body>
