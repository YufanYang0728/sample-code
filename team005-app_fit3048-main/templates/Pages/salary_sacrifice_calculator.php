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
            <a class="nav-link" style="color:black" href="salary_sacrifice_calculator">Salary-Sacrifice </a>
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
            <h2 class="myTitle" >Salary Sacrifice Calculator</h2>
            <div class="row">
                <div class="col colorBox" ><h3 class="mySubTitle"> To Get Started!</h3>
                    <br>
                    <h6 class="mySubTitle2">Tell us about yourself </h6></div>

            </div>

            <div class="row" style="padding-bottom:2em">
                <div class="col thinBox"  >

                    <form class="form-inline" id="Salary_Sacrifice_Form" >
                        <br>
                        <div class="form-group row">
                            <div class="col-xs-2">
                                <span >What is your<span class="blue" > Date of Birth?</span></span>
                                <input type="date" placeholder="dd-mm-yyyy" min="1900-01-01" max="2004-01-01" class="form-control" id="DOB">

                            </div>

                            <!--                        <div class="form-group row">-->
                            <!--                            <label for="DOB" class="col-4 col-form-label">Date of Birth:</label>-->
                            <!--                            <div class="col-8">-->
                            <!--                                <input type="date" class="form-control" id="DOB">-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <div class="col-xs-2">
                                <span >What is your<span class="blue" > Current Annual Salary?</span></span>

                                <input type="number"  class="form-control" min="0" max="999999999"  onKeyPress="return check(event,value)" id="Salary" >
                            </div>

                            <!--                        <div class="form-group row">-->
                            <!--                            <label for="Salary" class="col-4 col-form-label">Salary ($):</label>-->
                            <!--                            <div class="col-8">-->
                            <!--                                <input type="number"  class="form-control"id="Salary" >-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <div class="col-xs-2">
                                <span >What is your<span class="blue" > Current Salary Sacrifice?</span></span>

                                <input type="number" class="form-control" min="0" max="999999999" onKeyPress="return check(event,value)"  id="Salary_Sacrifice_Amount">
                            </div>

                        </div>
                        <!--                        <div class="form-group row">-->
                        <!--                            <label for="Salary_Sacrifice_Amount" class="col-4 col-form-label">Salary Sacrifice Amount :</label>-->
                        <!--                            <div class="col-8">-->
                        <!--                                <input type="number" class="form-control" id="Salary_Sacrifice_Amount">-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <div class="mb-4" style="margin-top: 1em; ">
                        <span>Are you considered <span class="blue"> a part of a family?</span></span>
                            <div style="border: 1px solid lightgray;border-radius: 5px;">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio"  name="is_Family" class="custom-control-input" value="yes">
                                <label class="custom-control-label" for="customRadioInline">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio"  name="is_Family" class="custom-control-input" value="no" checked>
                                <label class="custom-control-label" for="customRadioInline">No</label>
                            </div>
                            </div>
                        </div>
                        <!--                        <div class="form-group row">-->
                        <!--                            <label for="is_Family" class="col-4 col-form-label">Are you considered apart of a family :</label>-->
                        <!--                            <div class="col-8">-->
                        <!--                                <input type="checkbox" style="padding-right: 20px" id="is_Family">-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </form>
                    <div class="form-group" style="padding-top:1em; padding-bottom:1em">
                        <button id="Submit_Salary_Sacrifice" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"> Calculate </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col colorBox" >
                    <h3 class="mySubTitle">Breakdown of your Costs</h3></div>
            </div>
            <div class="row" style="overflow-y: scroll; height:25em;">
                <div class="col-4  thinBox" >

                    <div id="Salary_Sacrifice_Form_Output" >
                        <table>

                            <tr>
                                <td> <h7  ><strong>Age:</strong> </h7> </td>
                                <td> <h6  style="" class="number"  >
                                        <output type="text" id="Age" readonly></output>
                                    </h6>
                                </td>
                            </tr>

                            <!--                        <br>-->
                            <!--                        <div class="form-group row">-->
                            <!--                            <label for="Age" class="col-4 col-form-label">Age :</label>-->
                            <!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                            <!--                                <ouput type="text" id="Age" readonly></ouput>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <tr>
                                <td> <h7  ><strong>Financial Year Ending:</strong></h7> </td>
                                <td> <h6  style="" class="number"  >
                                        <output type="text" id="Finical_Year_Ending" readonly></output>
                                    </h6>
                                </td>
                            </tr>

                            <!--                        <br>-->
                            <!--                        <div class="form-group row">-->
                            <!--                            <label for="Finical_Year_Ending" class="col-4 col-form-label">Financial Year Ending:</label>-->
                            <!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                            <!--                                <output type="text" id="Finical_Year_Ending" readonly></output>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                            <tr>
                                <td> <h7  ><strong>Concessional Contribution Cap:</strong></h7> </td>
                                <td> <h7  style="" class="number"  >
                                        <output type="text" id="Concessional_Contribution_Cap" readonly></output>
                                    </h7>
                                </td>
                            </tr>

                            <!--                        <br>-->
                            <!--                        <div class="form-group row">-->
                            <!--                            <label for="Concessional_Contribution_Cap" class="col-4 col-form-label">Concessional Contribution Cap:</label>-->
                            <!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                            <!--                                <output type="text" id="Concessional_Contribution_Cap" readonly></output>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <tr>
                                <td> <h7  ><strong>SG Contributions:</strong></h7> </td>
                                <td> <h7  style="" class="number"  >
                                        <output type="text" id="SG_Contributions" readonly></output>
                                    </h7>
                                </td>
                            </tr>

                            <!--                        <br>-->
                            <!--                        <div class="form-group row">-->
                            <!--                            <label for="SG_Contributions" class="col-4 col-form-label">SG Contributions:</label>-->
                            <!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%" >-->
                            <!--                                <output type="text" id="SG_Contributions" readonly></output>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                            <tr>
                                <td> <h7  ><strong>Salary Sacrifice Allowable :</strong></h7> </td>
                                <td> <h7  style=" q" class="number" >
                                        <output type="text" id="Allowed_Salary_Sacrifice" readonly></output>
                                    </h7>
                                </td>
                            </tr>
                            <!---->
                            <!--                        <div class="form-group row">-->
                            <!--                            <label for="Allowed_Salary_Sacrifice" class="col-4 col-form-label">Salary Sacrifice Allowable :</label>-->
                            <!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                            <!--                                <output type="text" id="Allowed_Salary_Sacrifice" readonly>-->
                            <!--                                </output>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <br>

                        </table>
                        <h3 style="padding-top:1%"> Summary </h3>
                        <table>
                            <!--                        <div class="form-group row">-->
                            <!--                            <label for="Tax_Saving" class="col-4 col-form-label">Personal Tax Saving :</label>-->
                            <!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                            <!--                                <output type="text" id="Tax_Saving" readonly>-->
                            <!--                                </output>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                            <tr>
                                <td> <h7 ><strong>Personal Tax Saving :</strong></h7> </td>
                                <td> <h7 class="number" >
                                        <output type="text" id="Tax_Saving" readonly></output>
                                    </h7>
                                </td>
                            </tr>

                            <!--                        <div class="form-group row">-->
                            <!--                            <label for="Total_TaxSaving" class="col-4 col-form-label">Total Tax Saving :</label>-->
                            <!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                            <!--                                <output type="text" id="Total_TaxSaving" readonly>-->
                            <!--                                </output>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                            <tr>
                                <td> <h7  ><strong>Total Tax Saving :</strong></h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Total_TaxSaving" readonly></output>
                                    </h7>
                                </td>
                            </tr>

                            <!--                        <div class="form-group row">-->
                            <!--                            <label for="Increase" class="col-4 col-form-label">Increase In Take Home Pay and Super :</label>-->
                            <!--                            <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                            <!--                                <output type="text" id="Increase" readonly>-->
                            <!--                                </output>-->
                            <!--                            </div>-->
                            <!--                        </div>-->

                            <tr>
                                <td> <h7 ><strong>Increase In Take Home Pay and Super :</strong></h7> </td>
                                <td> <h7    class="number" >
                                        <output type="text" id="Increase" readonly></output>
                                    </h7>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-4 thinBox" >

                    <h3>After Tax Contributions</h3>
                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Salary" class="col-4 col-form-label">Salary :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="After_Tax_Salary" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <table>
                        <tr>
                            <td> <h7 >Salary :</h7> </td>
                            <td> <h7 class="number" >
                                    <output type="text" id="After_Tax_Salary" readonly></output>
                                </h7>
                            </td>
                        </tr>

                        <!--                            <div class="form-group row">-->
                        <!--                                <label for="Salary_Sacrifice" class="col-4 col-form-label">Salary Sacrifice :</label>-->
                        <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                        <!--                                    <output type="text" id="After_Tax_Salary_Sacrifice" readonly>-->
                        <!--                                    </output>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <tr>
                            <td> <h7  >Salary Sacrifice :</h7> </td>
                            <td> <h7  class="number" >
                                    <output type="text" id="After_Tax_Salary_Sacrifice" readonly></output>
                                </h7>
                            </td>
                        </tr>


                        <!--                            <div class="form-group row">-->
                        <!--                                <label for="Taxable_Income" class="col-4 col-form-label">Taxable Income:</label>-->
                        <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                        <!--                                    <output type="text" id="After_Tax_Taxable_Income" readonly>-->
                        <!--                                    </output>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <tr>
                            <td> <h7  >Taxable Income:</h7> </td>
                            <td> <h7   class="number" >
                                    <output type="text" id="After_Tax_Taxable_Income" readonly></output>
                                </h7>
                            </td>
                        </tr>

                        <!--                            <div class="form-group row">-->
                        <!--                                <label for="Tax_Payable" class="col-4 col-form-label">Basic Tax Payable :</label>-->
                        <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                        <!--                                    <output type="text" id="After_Tax_Payable_Basic" readonly>-->
                        <!--                                    </output>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <tr>
                            <td> <h7  >Basic Tax Payable :</h7> </td>
                            <td> <h7   class="number" >
                                    <output type="text" id="After_Tax_Payable_Basic" readonly></output>
                                </h7>
                            </td>
                        </tr>

                        <!--                            <div class="form-group row">-->
                        <!--                                <label for="Levy" class="col-4 col-form-label"> Medicare Levy :</label>-->
                        <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                        <!--                                    <output type="text" id="After_Levy" readonly>-->
                        <!--                                    </output>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <tr>
                            <td> <h7  >Medicare Levy :</h7> </td>
                            <td> <h7   class="number" >
                                    <output type="text" id="After_Levy" readonly></output>
                                </h7>
                            </td>
                        </tr>

                        <!--                            <div class="form-group row">-->
                        <!--                                <label for="LM_Tax_Offset" class="col-4 col-form-label">Low & Middle Income Tax Offset :</label>-->
                        <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                        <!--                                    <output type="text" id="After_LM_Tax_Offset" readonly>-->
                        <!--                                    </output>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <tr>
                            <td> <h7  >Low & Middle Income Tax Offset :</h7> </td>
                            <td> <h7   class="number" >
                                    <output type="text" id="After_LM_Tax_Offset" readonly></output>
                                </h7>
                            </td>
                        </tr>

                        <!--                            <div class="form-group row">-->
                        <!--                                <label for="Low_Income_Tax_Offset" class="col-4 col-form-label">Low Income Tax Offset :</label>-->
                        <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                        <!--                                    <output type="text" id="After_Low_Income_Tax_Offset" readonly>-->
                        <!--                                    </output>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <tr>
                            <td> <h7  >Low Income Tax Offset :</h7> </td>
                            <td> <h7   class="number" >
                                    <output type="text" id="After_Low_Income_Tax_Offset" readonly></output>
                                </h7>
                            </td>
                        </tr>

                        <!--                            <div class="form-group row">-->
                        <!--                                <label for="Tax_Payable" class="col-4 col-form-label">Tax Payable (Including ML) :</label>-->
                        <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                        <!--                                    <output type="text" id="After_Tax_Payable" readonly>-->
                        <!--                                    </output>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <tr>
                            <td> <h7  >Tax Payable (Including ML) :</h7> </td>
                            <td> <h7   class="number" >
                                    <output type="text" id="After_Tax_Payable" readonly></output>
                                </h7>
                            </td>
                        </tr>

                        <!--                            <div class="form-group row">-->
                        <!--                                <label for="Net_Income" class="col-4 col-form-label">Net Income :</label>-->
                        <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                        <!--                                    <output type="text" id="After_Net_Income" readonly>-->
                        <!--                                    </output>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <tr>
                            <td> <h7  >Net Income :</h7> </td>
                            <td> <h7   class="number" >
                                    <output type="text" id="After_Net_Income" readonly></output>
                                </h7>
                            </td>
                        </tr>

                        <!--                            <div class="form-group row">-->
                        <!--                                <label for="Less_After_Tax" class="col-4 col-form-label">Less After Tax Contributions :</label>-->
                        <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                        <!--                                    <output type="text" id="After_Less_After_Tax" readonly>-->
                        <!--                                    </output>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <tr>
                            <td> <h7  >Less After Tax Contributions :</h7> </td>
                            <td> <h7   class="number" >
                                    <output type="text" id="After_Less_After_Tax" readonly></output>
                                </h7>
                            </td>
                        </tr>

                        <!--                            <div class="form-group row">-->
                        <!--                                <label for="Take_Home_Pay" class="col-4 col-form-label">Take Home Pay :</label>-->
                        <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                        <!--                                    <output type="text" id="After_Take_Home_Pay" readonly>-->
                        <!--                                    </output>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <tr>
                            <td> <h7  >Take Home Pay :</h7> </td>
                            <td> <h7   class="number" >
                                    <output type="text" id="After_Take_Home_Pay" readonly></output>
                                </h7>
                            </td>
                        </tr>
                </div>

                <h5> Effects on your Super Contributions - After Tax </h5>
                <!--                            <div class="form-group row">-->
                <!--                                <label for="After_SG" class="col-4 col-form-label">10% SG ($) :</label>-->
                <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                <!--                                    <output type="text" id="After_SG" readonly>-->
                <!--                                    </output>-->
                <!--                                </div>-->
                <!--                            </div>-->

                <tr>
                    <td> <h7  >10% SG ($) :</h7> </td>
                    <td> <h7  class="number" >
                            <output type="text" id="After_SG" readonly></output>
                        </h7>
                    </td>
                </tr>

                <!--                            <div class="form-group row">-->
                <!--                                <label for="After_Salary_Sacrifice" class="col-4 col-form-label">Salary Sacrifice ($) :</label>-->
                <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                <!--                                    <output type="text" id="After_Salary_Sacrifice" readonly>-->
                <!--                                    </output>-->
                <!--                                </div>-->
                <!--                            </div>-->

                <tr>
                    <td> <h7  >Salary Sacrifice ($) :</h7> </td>
                    <td> <h7  class="number" >
                            <output type="text" id="After_Salary_Sacrifice" readonly></output>
                        </h7>
                    </td>
                </tr>

                <!--                            <div class="form-group row">-->
                <!--                                <label for="After_Less_Contribution_Tax" class="col-4 col-form-label">Less 15% Contributions Tax :</label>-->
                <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                <!--                                    <output type="text" id="After_Less_Contribution_Tax" readonly>-->
                <!--                                    </output>-->
                <!--                                </div>-->
                <!--                            </div>-->

                <tr>
                    <td> <h7  >Less 15% Contributions Tax :</h7> </td>
                    <td> <h7   class="number" >
                            <output type="text" id="After_Less_Contribution_Tax" readonly></output>
                        </h7>
                    </td>
                </tr>

                <!--                            <div class="form-group row">-->
                <!--                                <label for="After_tax" class="col-4 col-form-label">After Tax ($) :</label>-->
                <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                <!--                                    <output type="text" id="After_tax" readonly>-->
                <!--                                    </output>-->
                <!--                                </div>-->
                <!--                            </div>-->

                <tr>
                    <td> <h7  >After Tax ($) :</h7> </td>
                    <td> <h7   class="number" >
                            <output type="text" id="After_tax" readonly></output>
                        </h7>
                    </td>
                </tr>
                </table>
            </div>




            <div class="col-4 thinBox" >
                <h3>Pre-Tax Contributions</h3>
                <!--                            <div class="form-group row">-->
                <!--                                <label for="Salary" class="col-4 col-form-label">Salary :</label>-->
                <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                <!--                                    <output type="text" id="Pre_Tax_Salary" readonly>-->
                <!--                                    </output>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <table>
                    <tr>
                        <td> <h7  >Salary :</h7> </td>
                        <td> <h7  class="number" >
                                <output type="text" id="Pre_Tax_Salary" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Salary_Sacrifice" class="col-4 col-form-label">Salary Sacrifice :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Tax_Salary_Sacrifice" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Salary Sacrifice :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Tax_Salary_Sacrifice" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Taxable_Income" class="col-4 col-form-label">Taxable Income:</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Tax_Taxable_Income" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Taxable Income:</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Tax_Taxable_Income" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Tax_Payable" class="col-4 col-form-label">Basic Tax Payable :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Tax_Payable_Basic" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Basic Tax Payable :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Tax_Payable_Basic" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Levy" class="col-4 col-form-label"> Medicare Levy :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Levy" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Medicare Levy :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Levy" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="LM_Tax_Offset" class="col-4 col-form-label">Low & Middle Income Tax Offset :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_LM_Tax_Offset" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Low & Middle Income Tax Offset :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_LM_Tax_Offset" readonly></output>
                            </h7>
                        </td>
                    </tr>


                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Low_Income_Tax_Offset" class="col-4 col-form-label">Low Income Tax Offset :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Low_Income_Tax_Offset" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Low Income Tax Offset :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Low_Income_Tax_Offset" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Tax_Payable" class="col-4 col-form-label">Tax Payable (Including ML) :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Tax_Payable" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Tax Payable (Including ML) :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Tax_Payable" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Net_Income" class="col-4 col-form-label">Net Income :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Net_Income" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Net Income :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Net_Income" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Less_After_Tax" class="col-4 col-form-label">Less After Tax Contributions :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Less_After_Tax" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Less After Tax Contributions :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Less_After_Tax" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Take_Home_Pay" class="col-4 col-form-label">Take Home Pay :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Take_Home_Pay" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Take Home Pay :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Take_Home_Pay" readonly></output>
                            </h7>
                        </td>
                    </tr>


                    <h5> Effects on your Super Contributions - Pre-Tax </h5>
                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Pre_SG" class="col-4 col-form-label">10% SG ($) :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_SG" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >10% SG ($) :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_SG" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Pre_Salary_Sacrifice" class="col-4 col-form-label">Salary Sacrifice ($) :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Salary_Sacrifice" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Salary Sacrifice ($) :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Salary_Sacrifice" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Pre_Less_Contribution_Tax" class="col-4 col-form-label">Less 15% Contributions Tax :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_Less_Contribution_Tax" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >Less 15% Contributions Tax :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_Less_Contribution_Tax" readonly></output>
                            </h7>
                        </td>
                    </tr>

                    <!--                            <div class="form-group row">-->
                    <!--                                <label for="Pre_After_tax" class="col-4 col-form-label">After Tax ($) :</label>-->
                    <!--                                <div class="col-8" style="border-bottom: 0.5px solid black; padding-top: 5%">-->
                    <!--                                    <output type="text" id="Pre_After_tax" readonly>-->
                    <!--                                    </output>-->
                    <!--                                </div>-->
                    <!--                            </div>-->

                    <tr>
                        <td> <h7  >After Tax ($) :</h7> </td>
                        <td> <h7   class="number" >
                                <output type="text" id="Pre_After_tax" readonly></output>
                            </h7>
                        </td>
                    </tr>
                </table>

            </div>


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
    Salary.oninput = function () {
        const maxlength = 7;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }

    Salary_Sacrifice_Amount.oninput = function () {
        const maxlength = 7;
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
</script>
<script>
    function toggle_after_tax() {
        var x = document.getElementById("after_tax_contributions");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else if (x.style.display === "block") {
            x.style.display = "none";
        }
    }

    function toggle_pre_tax() {
        var x = document.getElementById("pre_tax_contributions");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else if (x.style.display === "block") {
            x.style.display = "none";
        }
    }
</script>
<?= $this -> Html -> script('salary_sacrifice.js') ?>
</body>
