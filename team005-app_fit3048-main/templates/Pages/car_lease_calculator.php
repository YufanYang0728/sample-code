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
            <a class="nav-link" style="color:black" href="car_lease_calculator">Car-Lease </a>
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
        <!-- <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="age_pension_calculator">Age-pension</a>
            <a class="nav-link" style="color:lightblue" href="#">Age-pension(coming soon)</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="age_pension_calculator">Age-Pension</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="mortgage_calculator">Mortgage</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="credit_card_debt_calculator">Credit Card Loan</a>
        </li>
    </ul>
    <!--        <a class="nav-item " href="car_lease_calculator">Car-Lease </a>-->
    <!--        <a class="nav-item " href="income_tax_calculator">Income-Tax </a>-->
    <!--        <a class="nav-item " href="retirement_calculator">Retirement </a>-->
    <!--        <a class="nav-item  " href="salary_sacrifice_calculator">Salary-Sacrifice </a>-->
    <!--        <a class="nav-item  " href="#">Age-pension (Coming Soon) </a>-->
</nav>

<div class="container" >
    <div class="text-center" style="margin-top: 5%">
        <h2 class="myTitle" >Car lease Calculator</h2>
        <div class="outputBox">
        <div class="row">
            <div class="col-5 colorBox" ><h3 class="mySubTitle"> To Get Started!</h3>
            <br>
            <h6 class="mySubTitle2">Tell us about your Loan, we will use this to calculate the amount of the loan as well as the final payment date.</h6></div>
            <div class="col-5 colorBox" style="margin-left: 5%;">
                <h3 class="mySubTitle">Your Expected Loan Interest</h3></div>
        </div>
<!--      -->
        <div class="row">
            <div class="col-5 thinBox"  >

        <form id="lease_form">
            <br>
            <span style="float: left">When does your<span class="blue" > loan</span> start?</span>
            <div class="input-group mb-4">
                <input id="Loan_Date" name="Loan_date" placeholder="dd/mm/yyyy" type="date" class="form-control" min="1900-01-01" required="required">
            </div>


<!--            <div class="form-group row">-->
<!--                <label for="Loan_Date" class="col-4 col-form-label">When does your loan start?</label>-->
<!--                <div class="col-8">-->
<!--                <input id="Loan_Date" name="Loan_date" placeholder="dd/mm/yyyy" type="date" class="form-control"  required="required">-->
<!--                </div>-->
<!--            </div>-->

            <span style="float: left">How much is your<span class="blue" > loan?</span></span>
            <div class="input-group mb-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input id="Loan_Amount" name="Loan_Amount" style="width: 200px"  type="number" class="form-control" min="1" max="999999999" required="required">
                   <!-- <input id="Loan_Amount" name="Loan_Amount" style="width: 200px"  type="number" class="form-control" onKeyPress="return check(event,value)" min="1" max="999999999" required="required">-->
            </div>
            </div>

<!--            <div class="form-group row">-->
<!--                <label for="Loan_Amount" class="col-4 col-form-label">How much is your loan?</label>-->
<!--                <div class="col-8">-->
<!--                    <div class="input-group">-->
<!--                        <div class="input-group-prepend">-->
<!--                            <div class="input-group-text">$</div>-->
<!--                        </div>-->
<!--                        <input id="Loan_Amount" name="Loan_Amount" type="number" class="form-control" min="1" max="999999999" required="required">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
                <span style="float: left">What is your Annual<span class="blue" > Interest</span> Rate?</span>
                <div class="input-group mb-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">%</div>
                        </div>
                        <!--<input id="Annual_Interest_Rate" style="width: 200px" onKeyPress="return check(event,value)" onInput="restrict(this);checkLength() " name="Annual_Interest_Rate" type="number" min="0" max="100" class="form-control" required="required">-->
                        <input id="Annual_Interest_Rate" style="width: 200px" name="Annual_Interest_Rate" onKeyPress="return check(event,value)"  name="Annual_Interest_Rate" type="number" min="0" max="100" class="form-control" required="required">
                    </div>
                </div>

<!--            <div class="form-group row">-->
<!--                <label for="Annual_Interest_Rate" class="col-4 col-form-label">What is your Annual Interest Rate?</label>-->
<!--                <div class="col-8">-->
<!--                    <div class="input-group">-->
<!--                        <div class="input-group-prepend">-->
<!--                            <div class="input-group-text">%</div>-->
<!--                        </div>-->
<!--                <input id="Annual_Interest_Rate" c type="number" min="0" max="100" class="form-control" required="required">-->
<!--                    </div>-->
<!--                    </div>-->
<!--                </div>-->
            <span style="float: left">How many<span class="blue" > years</span> would you like to have the loan over?</span>
            <div class="input-group mb-4">
                <input id="Terms_of_Loan" style="width: 200px" name="Terms_of_Loan" type="number" class="form-control" min="1" max="50" required="required">
            </div>

<!--            <div class="form-group row">-->
<!--                <label for="Terms_of_Loan" class="col-4 col-form-label">How many years would you like to have the loan for?</label>-->
<!--                <div class="col-8">-->
<!--                <input id="Terms_of_Loan" name="Terms_of_Loan" type="number" class="form-control" min="1" max="50" required="required">-->
<!--            </div>-->
<!--            </div>-->
            <span style="float: left">How many<span class="blue" > payments</span> do you plan to make <span class="blue">yearly?</span></span>
            <div class="input-group mb-4">
                <input id="Number_of_Payment_Annually" style="width: 200px" name="Number_of_Payment_Annually" type="number"  min="1" max="365" class="form-control"  required="required">            </div>
<!--            <div class="form-group row">-->
<!--                <label for="Number_of_Payment_Annually" class="col-4 col-form-label">How many payments per year do you plan to make?</label>-->
<!--                <div class="col-8">-->
<!--                <input id="Number_of_Payment_Annually" name="Number_of_Payment_Annually" type="number"  min="1" max="365" class="form-control" required="required">-->
<!--            </div>-->
<!--            </div>-->
            <br>
        </form>
<br>
        <div class="form-group">
            <button id="Submit" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase">Calculate</button>
        </div>
                <br>
            </div>


<!--        <form id="lease_form" >-->
<!--            <ul class="no-bullets">-->
<!--                <li>-->
<!--                    <label for="Loan_Date">Date of Loan:</label>-->
<!--                    <input type="date" id="Loan_Date">-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="Loan_Amount">Amount of Loan ($):</label>-->
<!--                    <input type="number" id="Loan_Amount" >-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="Annual_Interest_Rate">Annual Interest Rate (%):</label>-->
<!--                    <input type="number" id="Annual_Interest_Rate">-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="Terms_of_Loan">Terms of Loan (Years):</label>-->
<!--                    <input type="number" id="Terms_of_Loan">-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="Number_of_Payment_Annually">Number of Payments Annually:</label>-->
<!--                    <input type="number" id="Number_of_Payment_Annually">-->
<!--                </li>-->
<!--            </ul>-->
<!--        </form>-->

<!--        <button id="Submit"> Calculate </button>-->
            <!--
            <div class="col-5" style="margin-left: 5%; border-style:solid; border-color:black;">
        <form id="lease_form" >
            <div class="form-group row" style="">
                    <label for="Loan_Date" class="col-4 col-form-label">Total Number of Payments:</label>
                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                    <output id="Total_NO_Payments" readonly></output>
                </div>
            </div>
            <div class="form-group row">
                    <label for="Loan_Amount" class="col-4 col-form-label">Final Payment Date:</label>
                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                    <output type="text" id="Final_Payment_Date" readonly></output>
                </div>
            </div>
            <div class="form-group row">
                    <label for="Annual_Interest_Rate" class="col-4 col-form-label">Total Interest:</label>
                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">
                    <output type="text" id="Total_Interest" readonly></output>
                </div>
            </div>
        </form>
    </div>-->

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

</div>
    </div>

<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-success py-4 w-100" style="width: 100%; margin-bottom: 25%">

    <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 300%;color: white">
        <ul class="navbar-nav">
            <li class="nav-item active px-5">
                <a class="nav-link" href="#" style="border-bottom:  5px solid #f5f4eb ">Car Lease <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-5 " >
                <a class="nav-link" href="income_tax_calculator">Income Tax</a>
            </li>
            <li class="nav-item px-5">
                <a class="nav-link" href="retirement_calculator">Retirement</a>
            </li>
            <li class="nav-item px-5">
                <a class="nav-link" href="salary_sacrifice_calculator">Salary Sacrifice</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="age_pension_calculator">Age Pension</a>
            </li>
        </ul>
    </div>
</nav>
-->

    <script>

        function check(e,value){
            //Check Charater
            var unicode=e.charCode? e.charCode : e.keyCode;
            if (value.indexOf(".") != -1)if( unicode == 46 )return false;
            if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
        }
        /*
        function checkLength(){
            var fieldVal = document.getElementById('Annual_Interest_Rate').value;
            //Suppose u want 3 number of character
            if(fieldVal <= 100){
                return true;
            }
            else
            {
                var str = document.getElementById('Annual_Interest_Rate').value;
                str = str.substring(0, str.length - 1);
                document.getElementById('Annual_Interest_Rate').value = str;
            }
        }
        function restrict(tis) {
            var prev = tis.getAttribute("data-prev");
            //console.log(prev);
            prev = (prev != '') ? prev : '';
            if (Math.round(tis.value*100)/100!=tis.value)
                tis.value=prev;
            tis.setAttribute("data-prev",tis.value)
        }*/
    </script>


    <?= $this -> Html -> script('lease.js') ?>

</body>
