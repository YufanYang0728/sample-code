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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

<?php
echo $this->Html->css('custom.css');
?>
<html lang="en">
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

    h7{
        font-weight:bold;
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

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #f2f2f2;
  /* color: white; */
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  /* background-color: #f2f2f2; */
  padding: 20px;
}

.col-25 {
  padding-top: 20px;
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<body>
<!-- <nav class="navbar justify-content-center navbar-light bg-light">
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
            <a class="nav-link" style="color:black" href="age_pension_calculator">Age-Pension</a>
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
</nav> -->

<div class="container">
    <!--
    <div class="text-center" style="margin-top: 5%">
        <h2 class="text-uppercase" style="font-size: 56px">Salary Sacrifice Calculators</h2>
        <p class="text-muted">Calculate your ___________</p>
    </div>-->
    <div class="container" >
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
            <a class="nav-link" style="color:black" href="age_pension_calculator">Age-Pension</a>
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
        <div class="text-center" style="margin-top: 5%">
            <h2 class="myTitle" >Age-Pension Calculator</h2>
            <div class="row">
                <div class="col colorBox" ><h3 class="mySubTitle"> To Get Started!</h3>
                    <br>
                    <h6 class="mySubTitle2">Tell us about yourself </h6></div>

            </div>

            <div class="row" style="padding-bottom:2em">
                <div class="col thinBox" class="form-group row" style="padding-bottom: 40px" >

                    <form class="form-inline" id="age_pension_basic_form" >

                        <div class="container" style="padding-bottom: 20px">
                            <div class="row">
                                <div class="col-sm" style="margin-top: 1em; ">
                                    <span>Are you <span class="blue"> a single or a couple?</span></span>
                                    <div class="col-sm" style="border: 1px solid lightgray;border-radius: 5px;">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio"  name="is_relationship" id="is_single" class="custom-control-input" value="single"checked >
                                            <label for="is_single" class="custom-control-label" for="customRadioInline">Single</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio"  name="is_relationship" id="is_couple"  class="custom-control-input" value="couple" >
                                            <label for="is_couple" class="custom-control-label" for="customRadioInline">Couple</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm" style="margin-top: 1em; ">
                                    <span>Do you own <span class="blue">a home ?</span></span>
                                    <div style="border: 1px solid lightgray;border-radius: 5px;">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio"  name="is_house" id="is_homeowner" class="custom-control-input" value="yes">
                                            <label for="is_homeowner" class="custom-control-label" for="customRadioInline">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio"  name="is_house" id="not_homeowner" class="custom-control-input" value="no" checked>
                                            <label for="not_homeowner" class="custom-control-label" for="customRadioInline">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div tclass="form-group" syle="padding-top:1em; padding-bottom:1em">
                            <button type="button" id="Submit_Age_pension_Basic" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"> continue</button>
                        </div>

                    </form>

                    <form style="display: none" class="form-inline" id="age_pension_input_double">
                        <H1>PERSONAL INFORMATION</H1>
                            <div class="form-group row">
                                <div class="col-xs-2" >
                                    <span>What is your<span class="blue" > age?</span></span>
                                    <input type="number" min="0" max="120" class="form-control" id="Birth">
                                </div>

                                <div class="col-xs-2">
                                    <span>What is your spouse's <span class="blue"> age?</span> </span>
                                    <input type="number" min="0" max="120" class="form-control" id="spouse_Birth">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > Gross annual salary?</span></span>
                                    <input type="number"  class="form-control" min="0" max="999999999" id="Gross_annual_salary">
                                </div>
                                <div class="col-xs-2">
                                    <span>What is your spouse's <span class="blue">Gross annual salary?</span> </span>
                                    <input type="number"  class="form-control" min="0" max="999999999"  id="spouse_Gross_annual_salary" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > Superannuation?</span></span>
                                    <input type="number"  class="form-control"  min="0" max="999999999" id="Super">
                                </div>
                                <div class="col-xs-2">
                                    <span>What is your spouse's <span class="blue">Superannuation?</span> </span>
                                    <input type="number"  class="form-control"  min="0" max="999999999" id="spouse_Super" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-2">
                                        <span>Is this a <span class="blue">income stream ?</span></span>
                                        <div style="border: 1px solid lightgray;border-radius: 5px;">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"  name="is_income_stream_couple" id="is_income_stream_couple" class="custom-control-input" value="yes">
                                                <label class="custom-control-label" for="customRadioInline">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"  name="is_income_stream_couple" id="not_income_stream_couple" class="custom-control-input" value="no" checked>
                                                <label class="custom-control-label" for="customRadioInline">No</label>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-xs-2">
                                        <span>Is this a <span class="blue">income stream ?</span></span>
                                        <div style="border: 1px solid lightgray;border-radius: 5px;">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"  name="is_income_stream_couple_spouse" id="is_income_stream_couple_spouse" class="custom-control-input" value="yes">
                                                <label class="custom-control-label" for="customRadioInline">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"  name="is_income_stream_couple_spouse" id="not_income_stream_couple_spouse" class="custom-control-input" value="no" checked>
                                                <label class="custom-control-label" for="customRadioInline">No</label>
                                            </div>
                                        </div>
                                </div>
                                <br>
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > Real Estate Income?</span></span>
                                    <input type="number"  class="form-control"  min="0" max="999999999" id="Real_Estate_Income">
                                </div>

                                <div class="col-xs-2">
                                    <span>Are there any<span class="blue" > others?</span></span>
                                    <input type="number"  class="form-control" min="0" max="999999999" id="Other_Income">
                                </div>
                            </div>
                        <br>
                        <div class="form-group row">
                            <H1> NON FINANCIAL ASSETS </H1>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Car/s, Caravan, Boat etc?</span> </span>
                                <input type="number"  class="form-control"  min="0" max="999999999" id="vehicle_invest" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> contents?</span> </span>
                                <input type="number"  class="form-control" min="0" max="999999999" id="content_invest" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <H1> FINANCIAL ASSETS </H1>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Bank accounts?</span> </span>
                                <input type="number"  class="form-control"  min="0" max="999999999" id="bank_accounts_invest" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Shares?</span> </span>
                                <input type="number"  class="form-control"  min="0" max="999999999" id="shares_invest" >
                            </div>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Managed funds?</span></span>
                                <input type="number"  class="form-control"  min="0" max="999999999" id="funds_invest" >
                            </div>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Loans,Debentures/Bonds?</span> </span>
                                <input type="number"  class="form-control" min="0" max="999999999" id="loans_invest" >
                            </div>
                            <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Investment Property?</span></span>
                                    <input type="number"  class="form-control"  min="0" max="999999999" id="Investment_property" >
                                </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <H1> OTHER ASSETS </H1>
                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Gifted assets?</span> </span>
                                <input type="number"  class="form-control"  min="0" max="999999999" id="gifted_assets" >
                            </div>

                            <div class="col-xs-2">
                                <span>How much in <span class="blue"> Funeral Bond?</span> </span>
                                <input type="number"  class="form-control"   min="0" max="999999999" id="funeral_bond" >
                            </div>
                        </div>
                        <div tclass="form-group" syle="padding-top:1em; padding-bottom:2em">
                                <!-- <button type="button" id="Submit_Age_pension_result" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"> Calculate</button> -->
                            </div>
                    
                   
</br>
                        <div tclass="form-group" style="padding-top:1em; padding-bottom:1em">
                            <button type="button" id="Submit_Age_pension_result" data-bs-toggle="modal" onclick="openModel_double()" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"  >
                                Calculate
                            </button>

                            <!-- <button type="button" id="Submit_Age_pension_result" onKeyPress="return check(event,value)"  data-bs-toggle="modal" onclick="openModel_double()" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"  >
                                Calculate
                            </button> -->
                        </div>

                    </form>

                    <div class="modal fade" id="exampleModal1"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pension Output</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <table >

                        <tr>
                            <td style="display: none" style="text-align: left" > <h2 style="font-family: Helvetica" > Income Pension Value: </h2> </td>
                            <td style="display: none" style="text-align: right"> <h2  class="number" id="Income_Pension_Value_Couple" >$0 </h2></td>
                        </tr>
                        <tr>
                            <td style="display: none" style="text-align: left" > <h2 style="font-family: Helvetica" > Asset Pension Value: </h2> </td>
                            <td style="display: none" style="text-align: right"> <h2  class="number" id="Asset_Pension_Value_Couple" >$0 </h2></td>
                        </tr>
                        <tr>
                            <td style="text-align: left" > <h3 style="font-family: Helvetica" > Age Pension Value: </h3> </td>
                            <td style="text-align: right"> <h3  class="number" id="Age_Pension_Value_Couple" >$0 </h3></td>
                        </tr>

                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <form class="form-inline" style="display: none" id="age_pension_input_single_form">
                            <h1>Personal Information</h1>

                            <div class="form-group row">
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > age?</span></span>
                                    <input type="number" min="0" max="120" class="form-control" id="Birth_single" required>
                                </div>
                            </div>
                            </br>

                            <div class="form-group row">
                                <H1> Income </H1>
                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > Gross annual salary?</span></span>
                                    <input type="number"  class="form-control" min="0" max="999999999" id="Gross_annual_salary_single">
                                </div>

                                <div class="col-xs-2">
                                    <span>What is your<span class="blue" > Real Estate Income?</span></span>
                                    <input type="number"  class="form-control" min="0" max="999999999" id="Real_Estate_Income_single">
                                </div>

                                <div class="col-xs-2">
                                    <span>Are there any<span class="blue" > others?</span></span>
                                    <input type="number"  class="form-control" min="0" max="999999999" id="Other_Income_single">
                                </div>
                            </div><br>


                            <div class="form-group row">
                                <H1> Non Financial Assets </H1>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Car/s, Caravan, Boat etc?</span> </span>
                                    <input type="number"  class="form-control"   min="0" max="999999999"  id="vehicle_invest_single" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> contents?</span> </span>
                                    <input type="number"  class="form-control" min="0" max="999999999" id="content_invest_single" >
                                </div>
                            </div><br>

                            <div class="form-group row">
                                <H1> Financial Assets </H1>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Bank accounts?</span> </span>
                                    <input type="number"  class="form-control"  min="0" max="999999999" id="bank_accounts_invest_single" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Shares?</span> </span>
                                    <input type="number"  class="form-control" min="0" max="999999999" id="shares_invest_single" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Managed funds?</span></span>
                                    <input type="number"  class="form-control"min="0" max="999999999" id="funds_invest_single" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Loans,Debentures/Bonds?</span> </span>
                                    <input type="number"  class="form-control"min="0" max="999999999" id="loans_invest_single" >
                                </div>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Superannuation?</span></span>
                                    <input type="number"  class="form-control"min="0" max="999999999" id="Super_single" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Investment Property?</span></span>
                                    <input type="number"  class="form-control"min="0" max="999999999" id="Investment_property_single" >
                                </div>

                                <div class="col-xs-2">
                                    <span>Is this a <span class="blue">income stream ?</span></span>
                                    <div style="border: 1px solid lightgray;border-radius: 5px;">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio"  name="is_income_stream" id="is_income_stream_single" class="custom-control-input" value="yes">
                                            <label for="is_income_stream_single" class="custom-control-label" for="customRadioInline">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio"  name="is_income_stream" id="not_income_stream_single" class="custom-control-input" value="no" checked>
                                            <label for="not_income_stream_single" class="custom-control-label" for="customRadioInline">No</label>
                                        </div>
                                    </div>
                                </div>

                            </div><br>
                            <div class="form-group row">
                                <H1> Other Assets </H1>
                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Gifted assets?</span> </span>
                                    <input type="number"  class="form-control"  min="0" max="999999999" id="gifted_assets_single" >
                                </div>

                                <div class="col-xs-2">
                                    <span>How much in <span class="blue"> Funeral Bond?</span> </span>
                                    <input type="number"  class="form-control" min="0" max="999999999" id="funeral_bond_single" >
                                </div>

                                <div class="">
                    <form>
                    <div tclass="form-group" syle="padding-top:1em; padding-bottom:2em">
                                <!-- <button type="button" id="Submit_Age_pension_result" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"> Calculate</button> -->
                            </div>
                            <br>
                    
                   
                </div>

                            </div>
                        <div class="form-group" style="padding-top:1em; padding-bottom:1em">
                            <!-- <button type="button" id="Submit_Age_pension_single"  data-bs-toggle="exampleModal" onclick="openModel_single()"  class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"  >
                                Calculate
                            </button> -->

                            <button type="button" id="Submit_Age_pension_Single"  onclick="openModel_single()" data-bs-toggle="exampleModal" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"  >
                                Calculate
                            </button>
                        </div>
                        </form>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pension Output</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <table>

                        <tr>
                            <td style="display: none" style="text-align: left" > <h2 style="font-family: Helvetica" > Income Pension Value: </h2> </td>
                            <td style="display: none" style="text-align: right"> <h2  class="number" id="Income_Pension_Value" >$0 </h2></td>
                        </tr>
                        <tr>
                            <td style="display: none" style="text-align: left" > <h2 style="font-family: Helvetica" > Asset Pension Value: </h2> </td>
                            <td style="display: none" style="text-align: right"> <h2  class="number" id="Asset_Pension_Value" >$0 </h2></td>
                        </tr>
                        <tr>
                            <td style="text-align: left" > <h3 style="font-family: Helvetica" > Age Pension Value: </h3> </td>
                            <td style="text-align: right"> <h3  class="number" id="Age_Pension_Value" >$0 </h3></td>
                        </tr>

                    </table>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <br>
                <!-- <div class="col-5 thinBox-carLease" style="margin-left: 5%;"> -->
                
                </div>
                </div>






                <br>
            </div>
        </div>
</div>



<script>

    function check(e,value){
        //Check Character
        var unicode=e.charCode? e.charCode : e.keyCode;
        if (value.indexOf(".") != -1)if( unicode == 46 )return false;
        if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
    }
    /*
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
    function openModel_single(){

                fetchPensionSingle();
                $('#exampleModal').modal('show');
    }
    function openModel_double(){
                fetchPensionCouple();
                $('#exampleModal1').modal('show');
    }
  
    var button = document.getElementById('Submit_Age_pension_Basic')
    button.addEventListener('click',hideshow,false);

    function hideshow() {
        basic_btn = document.getElementById('Submit_Age_pension_Basic').style.display = 'block';
        basic_form = document.getElementById('age_pension_basic_form').style.display = 'none';
    } 
      
</script>


<?= $this -> Html -> script('age_pensions.js') ?>
</body>

