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

<style>
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 2s;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}
</style>

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
            <a class="nav-link" style="color:lightblue" href="age_pension_calculator">Age-Pension</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:black" href="mortgage_calculator">Mortgage</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color:lightblue" href="credit_card_debt_calculator">Credit Card Loan</a>
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
            <a class="nav-link"  style="color:lightblue"href="mortgage_early_repayment">Early Repayment </a>
        </li>
    </ul>
</nav>

<div class="container" >
    <div class="text-center" style="margin-top: 5%">
        <h2 class="myTitle" >Mortgage Calculators</h2>
        
        
<div class="text-center" style="margin-top: 5%">
<div class="row">
<div class="tab">
            <button class="tablinks" onclick="openCals(event, 'Monthly')">Monthly Repayment</button>
            <button class="tablinks" onclick="openCals(event, 'Borrow')">Mortgage Borrow</button>
            <button class="tablinks" onclick="openCals(event, 'Early')">Early Repayment</button>

        </div>

<!-- Monthly Repayment Calculator -->
        <div id="Monthly" class="tabcontent" style="display:block">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <div class="text-center" style="margin-top: 5%">
       
        <div class="row">
            <div class="col-5 colorBox" ><h3 class="mySubTitle"> Monthly Repayment Calculator</h3>
            <br></div>
            <div class="col-5 colorBox" style="margin-left: 5%;">
                <h3 class="mySubTitle">Your Payment Data</h3></div>
        </div>

        <div class="row">
            <div class="col-5 thinBox"  >

        <form id="mortgage_form">
        <br>
            <span style="float: left">What is your <span class="blue" > Mortgage Term?</span></span>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
                        <div class="input-group-text">Year(s)</div>
                    </div>
                <input id="Year_Term" style="width: 200px" name="Year_Term" type="number" class="form-control" min="1" max="100" required="required">
            </div>


            <span style="float: left">What is your<span class="blue" > Mortgage</span> amount?</span>
            <div class="input-group mb-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input id="Mortgage_Amount" name="Mortgage_Amount" style="width: 200px"  type="number" class="form-control" min="0" max="999999999" required="required">

            </div>
            </div>

            <span style="float: left">What is the current<span class="blue" > Interest Rate?</span> </span>
                <div class="input-group mb-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">%</div>
                        </div>
                    
                        <input id="Interest_Rate" style="width: 200px" name="Interest_Rate" onKeyPress="return check(event,value)"  name="Interest_Rate" type="number" min="0" max="100" class="form-control" required="required">
                    </div>
                </div>


       

            <br>
        </form>
<br>
        <div class="form-group">
            <button id="Submit_Repayment" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase">Calculate</button>
        </div>
                <br>
            </div>




            <div class="col-5 thinBox-carLease" style="margin-left: 5%;">
                <br>
                <form>
                <table >

                    <tr >
                        <td style="text-align: left"> <h7> Mortgage Amount($): </h7> </td>
                        <td style="text-align: right; padding-left: 5vw"> <h7  class="number" id="Loan_Amount">0</h7>
                        </td>
                    </tr>

                    <tr >
                        <td style="text-align: left"> <h7> Year Term: </h7> </td>
                        <td style="text-align: right; padding-left: 5vw"> <h7  class="number" id="Loan_Year">0</h7>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid black  ">
                        <td style="text-align: left"> <h7 > Annual Interest Rate(%): </h7> </td>
                        <td style="text-align: right"> <h7  class="number" id="Annual_Interest_Rate" >0</h7></td>
                    </tr>


                    <tr>
                        <td style="text-align: left" > <h2 style="font-family: Helvetica" >Monthly Payment: </h2> </td>
                        <td style="text-align: right"> <h2  class="number" id="Monthly_Payment" >$0</h2></td>
                    </tr>

                </table>
                </form>
            </div>

        </div>
        </div>

</div>
<br>
<!-- Mortgage Borrow Calculator -->
        <div id="Borrow" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <div class="text-center" style="margin-top: 5%">
<div class="row">
            <div class="col-5 colorBox" ><h3 class="mySubTitle"> Mortgage Borrow Calculator</h3>
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
                <input id="Year_Term2" style="width: 200px" name="Year_Term2" type="number" class="form-control" min="1" max="100" required="required">
            </div>


            <span style="float: left">What is your desired<span class="blue" > Monthly Payment</span> amount?</span>
            <div class="input-group mb-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input id="Monthly_Amount" name="Loan_Amount" style="width: 200px"  type="number" class="form-control" min="1" max="999999999" required="required">

            </div>
            </div>

                <span style="float: left">What is the current<span class="blue" > Interest Rate?</span> </span>
                <div class="input-group mb-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">%</div>
                        </div>
                    
                        <input id="Interest_Rate2" style="width: 200px" name="Interest_Rate2" onKeyPress="return check(event,value)"  name="Interest_Rate2" type="number" min="0" max="100" class="form-control" required="required">
                    </div>
                </div>


       

            <br>
        </form>
<br>
        <div class="form-group">
            <button id="Submit_Borrow" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase">Calculate</button>
        </div>
                <br>
            </div>




            <div class="col-5 thinBox-carLease" style="margin-left: 5%;">
                <br>
                <form>
                <table >

                <tr >
                        <td style="text-align: left"> <h7> Monthly Payment Amount($): </h7> </td>
                        <td style="text-align: right; padding-left: 5vw"> <h7  class="number" id="Loan_Amount2">0</h7>
                        </td>
                    </tr>

                    <tr >
                        <td style="text-align: left"> <h7> Year Term: </h7> </td>
                        <td style="text-align: right; padding-left: 5vw"> <h7  class="number" id="Loan_Year2">0</h7>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid black  ">
                        <td style="text-align: left"> <h7 > Annual Interest Rate(%): </h7> </td>
                        <td style="text-align: right"> <h7  class="number" id="Annual_Interest_Rate2" >0</h7></td>
                    </tr>


                    <tr>
                        <td style="text-align: left" > <h2 style="font-family: Helvetica" >Can Borrow: </h2> </td>
                        <td style="text-align: right"> <h2  class="number" id="Total_Mortgage" >$0</h2></td>
                    </tr>

                </table>
                </form>
            </div>

        </div>
        </div>
</div>
        <br>
<!-- Mortgage Early Repayment -->
    <div id="Early" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
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
                <input id="Year_Term3" style="width: 200px" name="Year_Term3" type="number" class="form-control" min="1" max="100" required="required">
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

                <span style="float: left">In how many  <span class="blue" > years</span> do you want to pay the Mortgage?</span>
                 <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Year(s)</div>
                    </div>
                <input id="Early_Payment" style="width: 200px" name="Early_Payment" type="number" class="form-control" min="1" max="100" required="required">
                </div>
       
                <span style="float: left">What is the extra amount of  <span class="blue" > monthly payment?</span></span>
                 <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                <input id="Early_Payment" style="width: 200px" name="Early_Payment" type="number" class="form-control" min="1" max="999999999999" required="required">
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
                        <td style="text-align: left"> <h7> Mortgage Amount($): </h7> </td>
                        <td style="text-align: right; padding-left: 5vw"> <h7  class="number" id="Loan_Amount1">0</h7>
                        </td>
                    </tr>

                    <tr >
                        <td style="text-align: left"> <h7> Year Term: </h7> </td>
                        <td style="text-align: right; padding-left: 5vw"> <h7  class="number" id="Loan_Year1">0</h7>
                        </td>
                    </tr>
                    <tr >
                        <td style="text-align: left"> <h7> Fully Paid By: </h7> </td>
                        <td style="text-align: right; padding-left: 5vw"> <h7  class="number" id="Loan_Year2">0</h7>
                        </td>
                    </tr>
                    <tr >
                        <td style="text-align: left"> <h7> Montly Payment Amount($): </h7> </td>
                        <td style="text-align: right; padding-left: 5vw"> <h7  class="number" id="Loan_Amount2">0</h7>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid black  ">
                        <td style="text-align: left"> <h7 > Annual Interest Rate(%): </h7> </td>
                        <td style="text-align: right"> <h7  class="number" id="Annual_Interest_Rate1" >0</h7></td>
                    </tr>


                    <tr>
                        <td style="text-align: left" > <h2 style="font-family: Helvetica" >Monthly Payment Required: </h2> </td>
                        <td style="text-align: right"> <h2  class="number" id="Monthly_Payment1" >$0</h2></td>
                    </tr>

                </table>
                </form>
            </div>

        </div>
        </div>

</div>
</div>
<!-- end tab -->
    <script>

        function check(e,value){
            //Check Charater
            var unicode=e.charCode? e.charCode : e.keyCode;
            if (value.indexOf(".") != -1)if( unicode == 46 )return false;
            if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
        }

        function openCals(evt, mortgageCal) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(mortgageCal).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>


    <?= $this -> Html -> script('mortgage.js') ?>

</body>
