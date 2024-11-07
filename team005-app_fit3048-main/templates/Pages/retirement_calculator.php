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
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    table {
        table-layout: fixed;
        width: 100%
    }
    td {
        width: 50%;
        text-align: left;
    }

    .col-xs-2 {
        width:33%;
    }





</style>

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
            <a class="nav-link"  style="color:black"href="retirement_calculator">Retirement </a>
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
    </ul>
    <!--        <a class="nav-item " href="car_lease_calculator">Car-Lease </a>-->
    <!--        <a class="nav-item " href="income_tax_calculator">Income-Tax </a>-->
    <!--        <a class="nav-item " href="retirement_calculator">Retirement </a>-->
    <!--        <a class="nav-item  " href="salary_sacrifice_calculator">Salary-Sacrifice </a>-->
    <!--        <a class="nav-item  " href="#">Age-pension (Coming Soon) </a>-->
</nav>
<div class="container">
    <!--
    <div class="text-center" style="margin-top: 5%">
        <h2 class="text-uppercase" style="font-size: 56px">Salary Sacrifice Calculators</h2>
        <p class="text-muted">Calculate your ___________</p>
    </div>-->
    <div class="container" >
        <div class="text-center" style="margin-top: 5%">
          <h2 class="myTitle">Retirement Calculators</h2>
            <div class="row">
                <div class="col colorBox"><h3 class="mySubTitle"> To Get Started!</h3>
                    <br>
                    <h6 class="mySubTitle2">Tell us about your plans for retirement, we will use this to calculate the amount of contributions required for your planned retirement.</h6></div>
            </div>
            <div class="row" style="padding-bottom:2em">
                <div class="col thinBox"  >
            <form id="Retirement_Calculator_Form" >
                <br>
                <div class="form-group row">
                    <div class="col-xs-2">
                <span>What is your<span class="blue" > age?</span></span>
                    <input type="number"  class="form-control" min="18" max="120" id="Age">
                        <!--<input type="number"  class="form-control" onKeyPress="return check(event,value)" onInput="checkLength(this.id)"  id="Age">-->
                </div>
<!--
<br>-->
<!--                <div class="form-group row">-->
<!--                        <label for="Age" class="col-4 col-form-label">Age: </label>-->
<!--                    <div class="col-8">-->
<!--                        <input type="number" class="form-control" onKeyPress="return check(event,value)" onInput="checkLength(this.id)"  id="Age">-->
<!--                    </div>-->
<!--                </div>-->
                    <div class="col-xs-2">
                <span>At what<span class="blue"> age</span> would you like to<span class="blue" > retire?</span></span>
                    <input type="number"  class="form-control" min="18" max="120" id="Retirement_Age" >
                </div>

<!--                <div class="form-group row">-->
<!--                        <label for="Retirement_Age" class="col-4 col-form-label">Retirement Age:</label>-->
<!--                    <div class="col-8">-->
<!--                        <input type="number" class="form-control" onKeyPress="return check(event,value)" onInput="checkLength(this.id)"  id="Retirement_Age" >-->
<!--                    </div>-->
<!--                </div>-->
                    <div class="col-xs-2">
                <span >The total number of <span class="blue">payment years</span> are</span>
                    <input type="number" class="form-control" min="1" max="60" id="Year_Payments">
                </div>
                </div>

<!--                <div class="form-group row">-->
<!--                        <label for="Year_Payments" class="col-4 col-form-label">Year of Payments :</label>-->
<!--                    <div class="col-8">-->
<!--                        <input type="number" class="form-control" id="Year_Payments">-->
<!--                    </div>-->
<!--                </div>-->
                <div class="form-group row">
                    <div class="col-xs-2">
                <span >How much do you plan to pay<span class="blue"> today?</span></span>
                    <input type="text"  class="form-control" min="0" max="999999999" id="Payment_Required_Today">
                </div>

<!--                <div class="form-group row">-->
<!--                        <label for="Payment_Required_Today" class="col-4 col-form-label">Payment Required Amount Today:</label>-->
<!--                    <div class="col-8">-->
<!--                        <input type="text"  class="form-control" id="Payment_Required_Today">-->
<!--                    </div>-->
<!--                </div>-->
                    <div class="col-xs-2">
                <span >The rate of <span class="blue">Indexation</span> is</span>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                    </div>
                    <input type="number" class="form-control" class="form-control" onKeyPress="return check(event,value)" min="0" max="100"  id="Indexation">
                        <!--<input type="number" class="form-control" class="form-control" onKeyPress="return check(event,value)" onInput="restrict(this); checkLength(this.id)"  id="Indexation">-->
                </div>
                </div>


<!--                <div class="form-group row">-->
<!--                        <label for="Indexation" class="col-4 col-form-label">Indexation (%): </label>-->
<!--                    <div class="col-8">-->
<!--                        <input type="number" class="form-control" class="form-control" onKeyPress="return check(event,value)" onInput="restrict(this); checkLength(this.id)"  id="Indexation">-->
<!--                    </div>-->
<!--                </div>-->
                    <div class="col-xs-2">
                <span >The current <span class="blue">Interest Rate</span> is</span>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">%</div>
                        </div>
                        <input type="number" class="form-control" class="form-control" onKeyPress="return check(event,value)" min="0" max="100" id="Interest_Rate">
                    </div>
                </div>
                </div>
                <div class="form-group row">

<!--                <div class="form-group row">-->
<!--                        <label for="Interest_Rate" class="col-4 col-form-label">Interest Rate (%): </label>-->
<!--                    <div class="col-8">-->
<!--                        <input type="number" class="form-control" class="form-control" onKeyPress="return check(event,value)" onInput="restrict(this); checkLength(this.id)" id="Interest_Rate">-->
<!--                    </div>-->
<!--                </div>-->
                    <div class="col-xs-2">
                <span >What is your current <span class="blue">Superannuation?</span></span>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                    <input type="number" class="form-control" min="0" max="999999999" id="Current_Super">
                    </div>
                    </div>

<!--                <div class="form-group row">-->
<!--                        <label for="Current_Super" class="col-4 col-form-label">Current Superannuation: </label>-->
<!--                    <div class="col-8">-->
<!--                        <input type="number" class="form-control" id="Current_Super">-->
<!--                    </div>-->
<!--                </div>-->
                    <div class="col-xs-2">
                <span >What is your current <span class="blue">Net Contributions?</span></span>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                    <input type="number" class="form-control" min="0" max="999999999" id="Current_Net_Contributions">
                </div>
                </div>
<!--                <div class="form-group row">-->
<!--                        <label for="Current_Net_Contributions" class="col-4 col-form-label">Current Net Contributions: </label>-->
<!--                    <div class="col-8">-->
<!--                        <input type="number" class="form-control" id="Current_Net_Contributions">-->
<!--                    </div>-->
<!--                </div>-->
                    <div class="col-xs-2">
                <span >What is your current <span class="blue">Rate of Return?</span></span>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">%</div>
                        </div>
                    <input type="number" class="form-control" onKeyPress="return check(event,value)" min="0" max="100" id="Estimated_Return_Rate" required>
                </div>
                </div>
                </div>

<!--                <div class="form-group row">-->
<!--                        <label for="Estimated_Return_Rate" class="col-4 col-form-label">Current Rate of Return: </label>-->
<!--                    <div class="col-8">-->
<!--                        <input type="number" class="form-control" onKeyPress="return check(event,value)" onInput="checkLength(this.id)" id="Estimated_Return_Rate" required>-->
<!--                    </div>-->
<!--                </div>-->
            </form>
                    <br>
                    <div class="form-group">
            <button id="Submit_retirement" class="btn btn-primary"  style="font-size: 2vh; border-radius: 12px; text-transform: uppercase"> Calculate </button>
                    </div>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col colorBox"><h3 class="mySubTitle"> Breakdown of your costs</h3></div>
            </div>

            <div class="row">
                <div class="col thinBox-retirement">
            <form>
                <table>
<!--                    <br>-->
<!--                    <div class="form-group row" >-->
<!--                        <label for="Payment_Required_Future" class="col-4 col-form-label">Payment Required Amount Future :</label>-->
<!--                        <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                            <output type="text" id="Payment_Required_Future" readonly></output>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <br>-->

                    <tr   >
                        <td style="text-align: left;padding-bottom: 2.5em;padding-top: 2em"> <h7  >Payment Required Amount Future:</h7></td>
                        <td style="padding-bottom: 2.5em;padding-top: 2em;text-align: left"> <h7   class="number" >
                                <output type="text" id="Payment_Required_Future" readonly style="padding-top: 1.8em"></output>
                            </h7>
                        </td >
                    </tr>
<!--                <div class="form-group row" >-->
<!--                        <label for="Value_Required" class="col-4 col-form-label">Value Required :</label>-->
<!--                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                        <output type="text" id="Value_Required" readonly></output>-->
<!--                    </div>-->
<!--                </div>-->
                        <tr style="border-top: 1px solid black ;">
                            <td style="text-align: left;padding-bottom: 2.5em"> <h7  >Value Required:</h7></td>
                        <td style="padding-bottom: 2.5em;text-align: left"><h7   class="number" >
                                <output type="text" id="Value_Required" readonly></output>
                            </h7>
                        </td>
                        </tr>

<!--                <br>-->
<!--                <div class="form-group row" >-->
<!--                        <label for="Estimated_Annual_Deduct" class="col-4 col-form-label">Estimated Annual Deductible Amount:</label>-->
<!--                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                        <output type="text" id="Estimated_Annual_Deduct" readonly></output>-->
<!--                </div>-->
<!--                </div>-->
                    <tr style="border-top: 1px solid black ;">
                        <td style="text-align: left;padding-bottom: 2.5em"> <h7  >Estimated Annual Deductible Amount:</h7></td>
                        <td style="text-align: left"> <h7   class="number" >
                                <output type="text" id="Estimated_Annual_Deduct" readonly></output>
                            </h7>
                        </td>
                    </tr>
<!--                <br>-->
<!--                <div class="form-group row" >-->
<!--                        <label for="Estimated_Super" class="col-4 col-form-label">Estimated Value of Super at Retirement:</label>-->
<!--                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                        <output type="text" id="Estimated_Super" readonly></output>-->
<!--                    </div>-->
<!--                </div>-->
                    <tr style="border-top: 1px solid black ;">
                        <td style="text-align: left;padding-bottom: 2.5em"> <h7  >Estimated Value of Super at Retirement:</h7></td>
                        <td style="text-align: left"> <h7   class="number" >
                                <output type="text" id="Estimated_Super" readonly></output>
                            </h7>
                        </td>
                    </tr>
<!--                <br>-->
<!--                <div class="form-group row" >-->
<!--                        <label for="Lumpsum" class="col-4 col-form-label" >Lumpsum Shortfall:</label>-->
<!--                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                        <output type="text" id="Lumpsum" readonly></output>-->
<!--                    </div>-->
<!--                </div>-->
                    <tr style="border-top: 1px solid black ;">
                        <td style="text-align: left;padding-bottom: 2.5em"> <h7  >Lumpsum Shortfall:
                            </h7> </td>
                        <td style="padding-bottom: 2.5em;text-align: left"> <h7  style="" class="number" >
                                <output type="text" id="Lumpsum" readonly></output>
                            </h7>
                        </td>
                    </tr>
<!--                <br>-->
<!--                <div class="form-group row">-->
<!--                        <label for="Net_Payment" class="col-4 col-form-label">Net Payment Required to Reach Target(Surplus):</label>-->
<!--                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 10%">-->
<!--                        <output type="text" id="Net_Payment" readonly></output>-->
<!--                </div>-->
<!--                    <br>-->
<!--                </div>-->
                    <tr style="border-top: 1px solid black ;">
                        <td style="text-align: left;padding-bottom: 2.5em" > <h7  >Net Payment Required to Reach Target(Surplus):</h7></td>
                        <td style="text-align: left" > <h7   class="number" >
                                <output type="text" id="Net_Payment" readonly></output>
                            </h7>
                        </td>
                    </tr>
<!--                <div class="form-group row" >-->
<!--                        <label for="Gross_Payment" class="col-4 col-form-label">Gross Payment (Inc Surcharge):</label>-->
<!--                    <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
<!--                        <output type="text" id="Gross_Payment" readonly></output>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <br>-->
                    <tr style="border-top: 1px solid black ;">

                        <td style="text-align: left;padding-bottom: 2.5em"> <h7  >Gross Payment (Inc Surcharge):</h7></td>
                        <td style="text-align: left"> <h7   class="number" >
                                <output type="text" id="Gross_Payment" readonly></output>
                            </h7>
                        </td>
                    </tr>
                </table>

            </form>

        </div>
            </div>

    </div>




</div>
<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-success py-4 w-100" style="width: 100%; margin-bottom: 25%">

    <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 300%;color: white">
        <ul class="navbar-nav">
            <li class="nav-item active px-5">
                <a class="nav-link" href="car_lease_calculator">Car Lease <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-5">
                <a class="nav-link" href="income_tax_calculator">Income Tax</a>
            </li>
            <li class="nav-item px-5">
                <a class="nav-link" href="retirement_calculator">Retirement</a>
            </li>
            <li class="nav-item px-5" style="border-bottom:  5px solid #f5f4eb">
                <a class="nav-link" href="#">Salary Sacrifice</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="age_pension_calculator">Age Pension</a>
            </li>
        </ul>
    </div>
</nav>
-->

    <script>
        //input validation
        /*
        Year_Payments.oninput = function () {
            const maxlength = 2;
            if (this.value.length > maxlength) {
                this.value = this.value.slice(0,maxlength);
            }
        }

        Payment_Required_Today.oninput = function () {
            const maxlength = 9;
            if (this.value.length > maxlength) {
                this.value = this.value.slice(0,maxlength);
            }
        }

        Current_Super.oninput = function () {
            const maxlength = 10;
            if (this.value.length > maxlength) {
                this.value = this.value.slice(0,maxlength);
            }
        }
        Current_Net_Contributions.oninput = function () {
            const maxlength = 10;
            if (this.value.length > maxlength) {
                this.value = this.value.slice(0,maxlength);
            }
        }
*/

        function check(e,value){
            //Check Character
            var unicode=e.charCode? e.charCode : e.keyCode;
            if (value.indexOf(".") != -1)if( unicode == 46 )return false;
            if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
        }/*
        function checkLength(id){
            var fieldVal = document.getElementById(id).value;
            const  limit_percent = 100, limit_age = 120;
            if(id === "Indexation" || id === "Interest_Rate" || id === "Estimated_Return_Rate" ){
                if(fieldVal <= limit_percent){
                    return true;
                }
                else
                {
                    var str = document.getElementById(id).value;
                    str = str.substring(0, str.length - 1);
                    console.log(str);
                    document.getElementById(id).value = str;
                }
            } else{
                if(fieldVal <= limit_age){
                    return true;
                }
                else
                {
                    var str = document.getElementById(id).value;
                    str = str.substring(0, str.length - 1);
                    document.getElementById(id).value = str;
                }
            }
        }
        function restrict(tis) {
            var prev = tis.getAttribute("data-prev");
            //console.log(prev);
            prev = (prev != '') ? prev : '';
            if (Math.round(tis.value*100)/100!=tis.value)
                tis.value=prev;
            tis.setAttribute("data-prev",tis.value)
        }
*/

    </script>


    <?= $this -> Html -> script('retirement.js') ?>
</body>
