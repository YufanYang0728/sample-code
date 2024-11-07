<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <!-- Custom styles for this template -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <style>
        .hide {
            display: none;
        }

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

        .colorBox{
            border-style:solid;
            border-width: 2px;
            border-color:black;
            background-color:#404245 ;
        }
        .thinBox{
            border-style:solid;
            border-color:black;
            border-width: 2px;

        }
        #Salary_Sacrifice_Form .error{
            color:red;
        }

    </style>
</head>


<body class="bg-light">
<div class="container-fluid">
    <main class="py-5 text-center">
        <div class="py-5 text-center">
            <h2 class="section-heading text-uppercase">Make contribution to your super</h2>
            <p class="section-subheading text-muted">Let's help you set up your retirement goals by guiding you through making contributions to your super!</p>
        </div>
        <div id="initialQuestion">
            <div class="card" style="width:50%;margin:auto">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <p class="lead">How would you like to contribute to your super?</p>

                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <button class="btn btn-primary btn-lg btn-block mt-5" onclick="startBefore()" type="button">Before Tax</button>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary btn-lg btn-block mt-5" onclick="window.location.href='iteration3_super_contribution_after'" type="button">After Tax</button>
                    </div>
                </div>

                <br>
                <br></div>

        </div>
        <script>
            // function startAfter() {
            //    if (getAges()<75){
            //     var x = document.getElementById("initialQuestion");
            //     var y = document.getElementById("under75");
            //     if (x.style.display === "none") {
            //         x.style.display = "block";
            //     } else {
            //         x.style.display = "none";
            //         y.style.display ="block";
            //     }
            //     }else if (getAges()>'75'){
            //         alert('You cannot contribute into superannuation.');
            //         document.location.href='retirement';
            //     }
            // }

            function startBefore(){
                var x = document.getElementById("initialQuestion");
                var y = document.getElementById("beforeTax");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                    y.style.display ="block";
                }
            }
        </script>



        <div class="hide" id="beforeTax">


            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

            <div class="container" >
                <div class="text-center" >
                    <div class="row" style="padding-bottom:2em">
                        <div class="col thinBox"  >

                            <form class="form-inline" id="Salary_Sacrifice_Form" >
                                <br>
                                <div class="form-group row">
                                    <div class="col-xs-2">
                                        <span >What is your<span class="blue" > Date of Birth?</span></span>
                                        <input type="date" placeholder="dd-mm-yyyy" min="1920-01-01" max="2004-01-01" class="form-control" id="DOB">

                                    </div>
                                    <div class="col-xs-2">
                                        <span >What is your<span class="blue" > Current Annual Salary?</span></span>

                                        <input type="number"  class="form-control" min="0" max="999999999"  onKeyPress="return check(event,value)" id="Salary" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57" >
                                    </div>
                                    <div class="col-xs-2">
                                        <span >What is your<span class="blue" > Current Salary Sacrifice?</span></span>

                                        <input type="number" class="form-control" min="0" max="999999999" onKeyPress="return check(event,value)"  id="Salary_Sacrifice_Amount" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57" >
                                    </div>

                                </div>
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
                            </form>
                            <div class="form-group" style="padding-top:1em; padding-bottom:1em">
                                <button id="Submit_Salary_Sacrifice" class="btn btn-primary" style=" font-size: 2vh; border-radius: 12px; text-transform: uppercase"> Calculate </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col colorBox" >
                            <h3 style="color: white">Breakdown of your Costs</h3></div>
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


                                    <tr>
                                        <td> <h7  ><strong>Financial Year Ending:</strong></h7> </td>
                                        <td> <h6  style="" class="number"  >
                                                <output type="text" id="Finical_Year_Ending" readonly></output>
                                            </h6>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <h7  ><strong>Concessional Contribution Cap:</strong></h7> </td>
                                        <td> <h7  style="" class="number"  >
                                                <output type="text" id="Concessional_Contribution_Cap" readonly></output>
                                            </h7>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> <h7  ><strong>SG Contributions:</strong></h7> </td>
                                        <td> <h7  style="" class="number"  >
                                                <output type="text" id="SG_Contributions" readonly></output>
                                            </h7>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <h7  ><strong>Salary Sacrifice Allowable :</strong></h7> </td>
                                        <td> <h7  style=" q" class="number" >
                                                <output type="text" id="Allowed_Salary_Sacrifice" readonly></output>
                                            </h7>
                                        </td>
                                    </tr>

                                    <br>

                                </table>
                                <h3 style="padding-top:1%"> Summary </h3>
                                <table>
                                    <tr>
                                        <td> <h7 ><strong>Personal Tax Saving :</strong></h7> </td>
                                        <td> <h7 class="number" >
                                                <output type="text" id="Tax_Saving" readonly></output>
                                            </h7>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <h7  ><strong>Total Tax Saving :</strong></h7> </td>
                                        <td> <h7   class="number" >
                                                <output type="text" id="Total_TaxSaving" readonly></output>
                                            </h7>
                                        </td>
                                    </tr>
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
                            <table>
                                <tr>
                                    <td> <h7 >Salary :</h7> </td>
                                    <td> <h7 class="number" >
                                            <output type="text" id="After_Tax_Salary" readonly></output>
                                        </h7>
                                    </td>
                                </tr>


                                <tr>
                                    <td> <h7  >Salary Sacrifice :</h7> </td>
                                    <td> <h7  class="number" >
                                            <output type="text" id="After_Tax_Salary_Sacrifice" readonly></output>
                                        </h7>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <h7  >Taxable Income:</h7> </td>
                                    <td> <h7   class="number" >
                                            <output type="text" id="After_Tax_Taxable_Income" readonly></output>
                                        </h7>
                                    </td>
                                </tr>


                                <tr>
                                    <td> <h7  >Basic Tax Payable :</h7> </td>
                                    <td> <h7   class="number" >
                                            <output type="text" id="After_Tax_Payable_Basic" readonly></output>
                                        </h7>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <h7  >Medicare Levy :</h7> </td>
                                    <td> <h7   class="number" >
                                            <output type="text" id="After_Levy" readonly></output>
                                        </h7>
                                    </td>
                                </tr>

                                <tr>
                                    <td> <h7  >Low & Middle Income Tax Offset :</h7> </td>
                                    <td> <h7   class="number" >
                                            <output type="text" id="After_LM_Tax_Offset" readonly></output>
                                        </h7>
                                    </td>
                                </tr>


                                <tr>
                                    <td> <h7  >Low Income Tax Offset :</h7> </td>
                                    <td> <h7   class="number" >
                                            <output type="text" id="After_Low_Income_Tax_Offset" readonly></output>
                                        </h7>
                                    </td>
                                </tr>


                                <tr>
                                    <td> <h7  >Tax Payable (Including ML) :</h7> </td>
                                    <td> <h7   class="number" >
                                            <output type="text" id="After_Tax_Payable" readonly></output>
                                        </h7>
                                    </td>
                                </tr>


                                <tr>
                                    <td> <h7  >Net Income :</h7> </td>
                                    <td> <h7   class="number" >
                                            <output type="text" id="After_Net_Income" readonly></output>
                                        </h7>
                                    </td>
                                </tr>



                                <tr>
                                    <td> <h7  >Less After Tax Contributions :</h7> </td>
                                    <td> <h7   class="number" >
                                            <output type="text" id="After_Less_After_Tax" readonly></output>
                                        </h7>
                                    </td>
                                </tr>



                                <tr>
                                    <td> <h7  >Take Home Pay :</h7> </td>
                                    <td> <h7   class="number" >
                                            <output type="text" id="After_Take_Home_Pay" readonly></output>
                                        </h7>
                                    </td>
                                </tr>
                        </div>

                        <h5> Effects on your Super Contributions - After Tax </h5>


                        <tr>
                            <td> <h7  >10% SG ($) :</h7> </td>
                            <td> <h7  class="number" >
                                    <output type="text" id="After_SG" readonly></output>
                                </h7>
                            </td>
                        </tr>


                        <tr>
                            <td> <h7  >Salary Sacrifice ($) :</h7> </td>
                            <td> <h7  class="number" >
                                    <output type="text" id="After_Salary_Sacrifice" readonly></output>
                                </h7>
                            </td>
                        </tr>


                        <tr>
                            <td> <h7  >Less 15% Contributions Tax :</h7> </td>
                            <td> <h7   class="number" >
                                    <output type="text" id="After_Less_Contribution_Tax" readonly></output>
                                </h7>
                            </td>
                        </tr>


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

                        <table>
                            <tr>
                                <td> <h7  >Salary :</h7> </td>
                                <td> <h7  class="number" >
                                        <output type="text" id="Pre_Tax_Salary" readonly></output>
                                    </h7>
                                </td>
                            </tr>

                            <tr>
                                <td> <h7  >Salary Sacrifice :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Tax_Salary_Sacrifice" readonly></output>
                                    </h7>
                                </td>
                            </tr>


                            <tr>
                                <td> <h7  >Taxable Income:</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Tax_Taxable_Income" readonly></output>
                                    </h7>
                                </td>
                            </tr>


                            <tr>
                                <td> <h7  >Basic Tax Payable :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Tax_Payable_Basic" readonly></output>
                                    </h7>
                                </td>
                            </tr>



                            <tr>
                                <td> <h7  >Medicare Levy :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Levy" readonly></output>
                                    </h7>
                                </td>
                            </tr>


                            <tr>
                                <td> <h7  >Low & Middle Income Tax Offset :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_LM_Tax_Offset" readonly></output>
                                    </h7>
                                </td>
                            </tr>




                            <tr>
                                <td> <h7  >Low Income Tax Offset :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Low_Income_Tax_Offset" readonly></output>
                                    </h7>
                                </td>
                            </tr>


                            <tr>
                                <td> <h7  >Tax Payable (Including ML) :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Tax_Payable" readonly></output>
                                    </h7>
                                </td>
                            </tr>



                            <tr>
                                <td> <h7  >Net Income :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Net_Income" readonly></output>
                                    </h7>
                                </td>
                            </tr>



                            <tr>
                                <td> <h7  >Less After Tax Contributions :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Less_After_Tax" readonly></output>
                                    </h7>
                                </td>
                            </tr>


                            <tr>
                                <td> <h7  >Take Home Pay :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Take_Home_Pay" readonly></output>
                                    </h7>
                                </td>
                            </tr>


                            <h5> Effects on your Super Contributions - Pre-Tax </h5>


                            <tr>
                                <td> <h7  >10% SG ($) :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_SG" readonly></output>
                                    </h7>
                                </td>
                            </tr>

                            <tr>
                                <td> <h7  >Salary Sacrifice ($) :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Salary_Sacrifice" readonly></output>
                                    </h7>
                                </td>
                            </tr>

                            <tr>
                                <td> <h7  >Less 15% Contributions Tax :</h7> </td>
                                <td> <h7   class="number" >
                                        <output type="text" id="Pre_Less_Contribution_Tax" readonly></output>
                                    </h7>
                                </td>
                            </tr>


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
        <div class="row justify-content-center">
            <div class="col-auto">
                <button class="btn btn-primary btn-lg btn-block mt-5" onclick="beforeTaxNext()" type="button">Next</button>
            </div>
        </div>
</div>
<script>
    function beforeTaxNext() {
        var x = document.getElementById("beforeTax");
        var y = document.getElementById("beforeTaxResult");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
            y.style.display ="block";
        }
    }
</script>


<div class="hide" id="beforeTaxResult">
    <div class="card" style="width:50%;margin:auto;padding: 2vh">
        <div class="text-center">
            <div class="row"><p>PAYG - Tell your employer to salary sacrifice</p></div>
            <div class="row"><P>Self-Employed Lodge tax deduction claim  ,  <a href="https://www.ato.gov.au/Individuals/Income-and-deductions/Deductions-you-can-claim/" target="_blank">here!</a></P>
            </div>
            <button class="btn btn-primary btn-lg btn-block mt-5" onclick="wishAfter()" type="button">Next</button>
        </div>
    </div>
</div>

<script>
    function wishAfter(){
        var x = document.getElementById("beforeTaxResult");
        var y = document.getElementById("askForAfter");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
            y.style.display ="block";
        }
    }
</script>
<div class="hide" id="askForAfter">
    <div class="card" style="width:50%;margin:auto;padding: 2vh">
        <p>Do you wish to see options for After Tax Contributions?</p>
        <div class="row text-center" style="justify-content: center">
            <div class="col-1">
                <button class="btn btn-primary"  onclick="location.href='iteration3_super_contribution_after' ">Yes</button>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary " href="iteration3_portfolio_1" style="padding-left: 2vh;margin-left: 2vh">No</a>
            </div>
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

</script>

</div>
</main>
</div>
</body>
<?= $this -> Html -> script('salary_sacrifice.js') ?>
<?= $this->Html->script('Invest_retirement.js') ?>
