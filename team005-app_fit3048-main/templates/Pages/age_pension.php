<?php
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .center2 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
        border: 3px solid green; 
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
                <a class="nav-link" style="color:black" href="age_pension_calculator">Age-Pension</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:lightblue" href="mortgage_calculator">Mortgage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:lightblue" href="credit_card_debt_calculator">Credit Card Loan</a>
            </li>
        </ul>
    </nav>

<section class="page-section bg-light" id="portfolio">
    
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Age Pension</h2>
            <h3 class="section-subheading text-muted">
                To Get Started
                <br>
                Tell us about Yourself !!
            </h3>
        </div>

        <div id="questionnaire-card" class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 id="section-title" class="card-title text-center">Age Pension Calculator</h5>
                                <form class="form-inline" id="age_pension_basic_form" >
                                    <span>Are you <span class="blue"> a single or a couple?</span></span>
                                            <!-- <div class="col-sm" style="border: 1px solid lightgray;border-radius: 5px;"> -->
                                            <div class="col-6 order-md-first align-self-center">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio"  name="is_relationship" id="is_single" class="custom-control-input" value="single"checked >
                                                    <label for="is_single" class="custom-control-label" for="customRadioInline">Single</label>
                                                    <input type="radio"  name="is_relationship" id="is_couple"  class="custom-control-input" value="couple" >
                                                    <label for="is_couple" class="custom-control-label" for="customRadioInline">Couple</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm" style="margin-top: 1em; ">
                                                <span>Do you own <span class="blue">a home ?</span></span>
                                                <!-- <div style="border: 1px solid lightgray;border-radius: 5px;"> -->
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio"  name="is_house" id="is_homeowner" class="custom-control-input" value="yes">
                                                        <label for="is_homeowner" class="custom-control-label" for="customRadioInline">Yes</label>
                                                        <input type="radio"  name="is_house" id="not_homeowner" class="custom-control-input" value="no" checked>
                                                        <label for="not_homeowner" class="custom-control-label" for="customRadioInline">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="center form-group" style="padding-top:1em; padding-bottom:1em">
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
                                                <span>How much in <span class="blue"> Loans, Debentures/ Bonds?</span> </span>
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
                                        <div class="form-group row" >
                                            <H1> Results </H1>
                                            <table style="border: 2px solid lightgray;border-radius: 5px;">
                                                <tr>
                                                    <td style="text-align: left" > <h4 style="font-family: Helvetica" > Are You Eligible: </h4> </td>
                                                    <td style="text-align: right"> <h4  class="number" id="Eligible_Value" >--</h4></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left" > <h4 style="font-family: Helvetica" > Income Pension Value: </h4> </td>
                                                    <td style="text-align: right"> <h4  class="number" id="Income_Pension_Value" >$0</h4></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left" > <h4 style="font-family: Helvetica" > Asset Pension Value: </h4> </td>
                                                    <td style="text-align: right"> <h4  class="number" id="Asset_Pension_Value" >$0</h4></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left" > <h4 style="font-family: Helvetica" > Age Pension Value: </h4> </td>
                                                    <td style="text-align: right"> <h4  class="number" id="Age_Pension_Value" >$0</h4></td>
                                                </tr>
                                            </table>
                                        </div>
                                        </br>

                                        <div class="center form-group" style="padding-top:1em; padding-bottom:1em">
                                            <button type="button" id="Submit_Age_pension_result" data-bs-toggle="modal" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"  >
                                                Calculate
                                            </button>
                                        </div>
                                </form>

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
                                            <span>How much in <span class="blue"> Loans, Debentures/ Bonds?</span> </span>
                                            <input type="number"  class="form-control"min="0" max="999999999" id="loans_invest_single" >
                                        </div>
                                        <div class="col-xs-2">
                                            <span>How much in <span class="blue"> Superannuation?</span></span>
                                            <input type="number"  class="form-control"min="0" max="999999999" id="Super_single" >
                                        </div>

                                        <div class="col-xs-2">
                                            <span>Is this a <span class="blue">income stream ?</span></span>
                                            <div style="border: 1px solid lightgray;border-radius: 5px;">
                                                <div class="custom-control custom-radio custom-control-inline ">
                                                    <input type="radio"  name="is_income_stream" id="is_income_stream_single" class="custom-control-input" value="yes">
                                                    <label for="is_income_stream_single" class="custom-control-label" for="customRadioInline">Yes </label>
                                                <!-- </div>
                                                <div class="custom-control custom-radio custom-control-inline"> -->
                                                    <input type="radio"  name="is_income_stream" id="not_income_stream_single" class="custom-control-input" value="no" checked>
                                                    <label for="not_income_stream_single" class="custom-control-label" for="customRadioInline">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-2">
                                            <span>How much in <span class="blue"> Investment Property?</span></span>
                                            <input type="number"  class="form-control"min="0" max="999999999" id="Investment_property_single" >
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
                                    </div><br>

                                    <div class="form-group row" >
                                        <H1> Results </H1>
                                        <table style="border: 2px solid lightgray;border-radius: 5px;">
                                            <tr>
                                                <td style="text-align: left" > <h4 style="font-family: Helvetica" > Are You Eligible: </h4> </td>
                                                <td style="text-align: right"> <h4  class="number" id="Eligible_Value" >--</h4></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left" > <h4 style="font-family: Helvetica" > Income Pension Value: </h4> </td>
                                                <td style="text-align: right"> <h4  class="number" id="Income_Pension_Value" >$0</h4></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left" > <h4 style="font-family: Helvetica" > Asset Pension Value: </h4> </td>
                                                <td style="text-align: right"> <h4  class="number" id="Asset_Pension_Value" >$0</h4></td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: left" > <h4 style="font-family: Helvetica" > Age Pension Value: </h4> </td>
                                                <td style="text-align: right"> <h4  class="number" id="Age_Pension_Value" >$0</h4></td>
                                            </tr>
                                        </table>
                                    </div>
                                    </br>

                                    <div class="center form-group" style="padding-top:1em; padding-bottom:1em">
                                        <button type="button" id="Submit_Age_pension_Single"  data-bs-toggle="exampleModal" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"  >
                                            Calculate
                                        </button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function check(e,value){
        //Check Character
        var unicode=e.charCode? e.charCode : e.keyCode;
        if (value.indexOf(".") != -1)if( unicode == 46 )return false;
        if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
    }

    var button = document.getElementById('Submit_Age_pension_Basic')
    button.addEventListener('click',hideshow,false);

    function hideshow() {
        basic_btn = document.getElementById('Submit_Age_pension_Basic').style.display = 'none';
        basic_form = document.getElementById('age_pension_basic_form').style.display = 'none';
        // basic_btn.style.display = 'none';
        basic_form.style.display = 'none';
    } 
</script>
<?= $this -> Html -> script('age_pensions.js') ?>
</body>
</html>
