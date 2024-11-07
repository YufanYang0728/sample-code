<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
    <!doctype html>
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
    td {
        padding-bottom: 2.5em;

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
            <a class="nav-link"  style="color:lightblue"href="retirement_calculator">Retirement </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="salary_sacrifice_calculator">Salary-Sacrifice </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="age_pension_calculator">Age-Pension</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="mortgage_calculator">Mortgage</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:black" href="credit_card_debt_calculator">Credit Card Loan</a>
        </li>
        </ul>
<!--        <a class="nav-item " href="car_lease_calculator">Car-Lease </a>-->
<!--        <a class="nav-item " href="income_tax_calculator">Income-Tax </a>-->
<!--        <a class="nav-item " href="retirement_calculator">Retirement </a>-->
<!--        <a class="nav-item  " href="salary_sacrifice_calculator">Salary-Sacrifice </a>-->
<!--        <a class="nav-item  " href="#">Age-pension (Coming Soon) </a>-->
    </nav>

    <div class="container" >
<!--        <div class="text-center" >-->
<!--            <h2 class="text-uppercase" >Income tax Calculators</h2>-->
<!--        </div>-->

        <div class="text-center" style="margin-top: 5%">
            <h2 class="myTitle">Credit Card Debt Calculator</h2>
            <div class="row">
                <div class="col-5 colorBox" ><h3 class="mySubTitle"> Credit Card Debt Calculator</h3>
                    <br>
                </div>
                <div class="col-5 colorBox" style="margin-left: 5%;">

                    <h3 class="mySubTitle"> Your Payment Data </h3>
                  </div>
            </div>

    </div>


<!--    <div class="container-fluid" >-->
        <div class="row">
<!--            <div class="inputRow col-sm-3 " >-->
            <div class="col-5 thinBox"  >
                <form id="credit_form">
                    <br>
                    <span>Amount<span class="blue" > owing</span></span>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input  type="number" class="form-control" style="width: 200px" id="Debt_Amount" min="0"  max="999999999" onKeyPress="return check(event,value)" value="0"  >
                    </div>
                    <span >Annual <span class="blue" >interest rate</span>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">%</div>
                        </div>
                        <input type="number" class="form-control" id="Interest_Rate" style="width: 200px" min="1"  max="100" onKeyPress="return check(event,value)" value="0" >
                    </div>
                    <span >Monthly minimum <span class="blue"> payment </span><span class="blue">percentage</span>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">%</div>
                        </div>
                        <input type="number" class="form-control" style="width: 200px" min="0"  max="100" onKeyPress="return check(event,value)" id="Min_Pay" value="0" >
                    </div>

                    <span>Monthly <span class="blue"> additional payments</span></form>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" class="form-control" style="width: 200px" min="0"  max="999999999" onKeyPress="return check(event,value)" id="Add_Pay" value="0" >
                    </div>
                    <div class="text-right" style="text-align:center;padding-bottom: 2vh">
                        <button type="button" id="Calculate" class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Calculate</button>
                    </div>
            </div>


        </form>


        <div class="col-5 thinBox-incomeTax" style="margin-left: 5%; ">
            <br>
                    <table>

                    <tr>
                        <td style="text-align: left" > <h3 style="font-family: Helvetica" > Debt will be paid off in:</h3> </td>
                        <td style="text-align: right"> <h3  class="number" id="timePayoff" ></h3></td>
                    </tr>


                    </table>
                </div>

            </div>





    </div>
    </div>
    </body>

<script>

    function check(e,value){
        //Check Character
        var unicode=e.charCode? e.charCode : e.keyCode;
        if (value.indexOf(".") != -1)if( unicode == 46 )return false;
        if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
    }

</script>

<?= $this -> Html -> script('credit_card_debt.js') ?>


<!--<script>-->
<!--    $('.input').on('input', function(){-->
<!--       taxCalculator();-->
<!--    });-->
<!--    taxCalculator();-->
<!--</script>-->
