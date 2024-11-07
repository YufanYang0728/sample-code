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
            <a class="nav-link" style="color:black" href="income_tax_calculator">Income-Tax </a>
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
            <h2 class="myTitle">Income Tax Calculator</h2>
            <div class="row">
                <div class="col-5 colorBox" ><h3 class="mySubTitle"> To Get Started!</h3>
                    <br>
                    <h6 class="mySubTitle2">Tell us about yourself! We will use this to calculate your net income and breakdown.</h6></div>
                <div class="col-5 colorBox" style="margin-left: 5%;">

                    <h3 class="mySubTitle"> Your total net income will be: </h3>
                    <h2 class="myTitle" id="netIncome" >$</h2></div>
            </div>

    </div>


<!--    <div class="container-fluid" >-->
        <div class="row">
<!--            <div class="inputRow col-sm-3 " >-->
            <div class="col-5 thinBox"  >
                <form action="income_tax_calculator" id="income_tax_form">
                    <br>
                    <span>Each year my take home<span class="blue" > Salary</span> is</span>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input  type="number" class="form-control" style="width: 200px" id="mySalary" min="0"  max="999999999" onKeyPress="return check(event,value)" value="0"  >
                    </div>
                    <span >From my total <span class="blue" >Salary,</span> I'd like to <span class="blue"> Sacrifice</span></span>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" class="form-control" id="mySalarySacrifice" style="width: 200px" min="0"  max="999999999" onKeyPress="return check(event,value)" value="0" >
                    </div>
                    <span >Annually my <span class="blue"> Investment </span> value is on<span class="blue"> Average</span></span>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" class="form-control" style="width: 200px" min="0"  max="999999999" onKeyPress="return check(event,value)" id="myInvestment" value="0" >
                    </div>

                    <span>I would like to contribute<span class="blue"> Account Based Pension</span></form>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" class="form-control" style="width: 200px" min="0"  max="999999999" onKeyPress="return check(event,value)" id="myPension" value="0" >
                    </div>

                    <span>My current amount for<span class="blue"> Rental</span> is</span>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" class="form-control" style="width: 200px" min="0"  max="999999999" onKeyPress="return check(event,value)" id="myRental" value="0" >
                    </div>
                    <span>What are your <span class="blue">Franked Credits?</span> </span>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" class="form-control" style="width: 200" min="0"  max="999999999" onKeyPress="return check(event,value)" id="myCredits" value="0" >
                    </div>

                    <span>What is your current<span class="blue"> Tax Free Pension</span> amount</span>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" class="form-control" style="width: 200px" min="0"  max="999999999" onKeyPress="return check(event,value)" id="myTaxFree" value="0" >
                    </div>
                    <span>I have <span class="blue">Other </span>forms of income</span>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="number" class="form-control" style="width: 200px" min="0"  max="999999999" onKeyPress="return check(event,value)" id="myOthers" value="0" >
                    </div>
                    <span>Are you considered <span class="blue"> a part of a family?</span></span>
                    <div class="input-group mb-4">
                        <div class="custom-control custom-radio custom-control-inline" style="padding-right: 2em">
                            <input type="radio"  name="myFamily" class="custom-control-input" value="1116">
                            <label class="custom-control-label" for="customRadioInline1">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio"  name="myFamily" class="custom-control-input" value="999" checked>
                            <label class="custom-control-label" for="customRadioInline2">No</label>
                        </div>
                    </div>
                    <div class="text-right" style="text-align:center;padding-bottom: 2vh">
                        <button type="button" onclick="validator()" class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Calculate</button>
                    </div>
            </div>


        </form>


        <div class="col-5 thinBox-incomeTax" style="margin-left: 5%; ">
            <br>
                    <table>
                        <tr >
                            <td style="padding-bottom: 0.5em"> <h6> Your Total Assessable Income</h6> </td>
                            <td style="padding-bottom: 0.5em;padding-left: 3em"> <h6 class="number" id="assess" >$ 0</h6></td>
                        </tr>
                        <tr style="border-bottom: 1px solid black ;" >
                            <td style="padding-bottom: 0em"> <h6> Your Total Deduction</h6> </td>
                            <td style="padding-bottom: 0em;padding-left: 3em"> <h6 class="number" id="free" >$ 0</h6></td>
                        </tr>
                        <tr style="border-bottom: 1px solid black ;">
                            <td> <h5 style="padding-bottom: 2em" > Your Taxable Income</h5> </td>
                            <td> <h5  style="padding-bottom: 2em;padding-left: 1.4em" class="number" id="echoOut" >$ 0</h5></td>
                        </tr>


                        <tr >
                            <td style="padding-bottom: 0.5em"> <h6> Basic Tax Payable</h6> </td>
                            <td style="padding-bottom: 0.5em;padding-left: 3em"> <h6 class="number" id="taxPayable" >$ 0</h6></td>
                        </tr>
                        <tr style="border-bottom: 1px solid black ;">
                            <td style="padding-bottom: 0em"> <h6> Medicare Levy </h6> </td>
                            <td style="padding-bottom: 0em;padding-left: 3em"> <h6 class="number" id="medicareLevy" >$ 0</h6></td>
                        </tr>

                        <tr >
                            <td> <h5 style="padding-bottom: 2em">Total Tax Payable </h5> </td>
                            <td> <h5 style="padding-bottom: 2em;padding-left: 1.4em" class="number" id="Paid" >$ 0</h5></td>
                        </tr>

                        <tr >
                            <td style="padding-bottom: 0.5em"> <h6> Low & Middle Income Tax Offset </h6> </td>
                            <td style="padding-bottom: 0.5em;padding-left: 3em"> <h6 class="number" id="middleOffset" >$ 0</h6></td>
                        </tr>
                        <tr >
                            <td style="padding-bottom: 0.5em"> <h6>Low Income Tax Offset </h6> </td>
                            <td style="padding-bottom: 0.5em;padding-left: 3em"> <h6 class="number" id="lowOffset" >$ 0</h6></td>
                        </tr>
                        <tr style="border-bottom: 1px solid black ;">
                            <td style="padding-bottom: 0.5em"> <h6>Pension Rebate </h6> </td>
                            <td style="padding-bottom: 0.5em;padding-left: 3em"> <h6 class="number" id="pensionRebate" >$ 0</h6></td>
                        </tr>
                        <tr>
                            <td > <h5 style="padding-bottom: 2em">Total Tax Offset </h5> </td>
                            <td > <h5 style="padding-bottom: 2em;padding-left: 1.4em" class="number" id="off" >$ 0</h5></td>
                        </tr>


                        <tr>
                            <td> <h3>Tax Payable </h3> </td>
                            <td> <h5 class="number" id="taxPaid" >$ 0</h5></td>
                        </tr>
                    </table>
                </div>

            </div>





    </div>
    </div>
    </body>

<script>
    //input validation
    /*
    mySalary.oninput = function () {
        const maxlength = 10;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }

    mySalarySacrifice.oninput = function () {
        const maxlength = 10;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }
    myInvestment.oninput = function () {
        const maxlength = 10;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }

    myPension.oninput = function () {
        const maxlength = 10;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }

    myRental.oninput = function () {
        const maxlength = 10;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }

    myCredits.oninput = function () {
        const maxlength = 10;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }
    myTaxFree.oninput = function () {
        const maxlength = 10;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }

    myOthers.oninput = function () {
        const maxlength = 10;
        if (this.value.length > maxlength) {
            this.value = this.value.slice(0,maxlength);
        }
    }


    */
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $( "#income_tax_form" ).validate({
        rules: {
            errorElement:'div',
            field: {
                required: true,
                number: true
            }
        }
    });

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
    // validation
    function validator(){
        //Salary validation
            if(document.getElementById("mySalary").value == 'e'  || document.getElementById("mySalary").value == '' || document.getElementById("mySalary").value == '+' || parseFloat(document.getElementById("mySalary").value )  >=9999999999){
                alert('Please enter a valid salary value');
            } else if (document.getElementById("mySalarySacrifice").value == 'e'  || document.getElementById("mySalarySacrifice").value == '' || document.getElementById("mySalarySacrifice").value == '+' || parseFloat(document.getElementById("mySalarySacrifice").value )  >=9999999999 ){
                alert('Please enter a valid salary sacrifice value');
            }else if (document.getElementById("myInvestment").value == 'e'  || document.getElementById("myInvestment").value == '' || document.getElementById("myInvestment").value == '+' || parseFloat(document.getElementById("myInvestment").value )  >=9999999999){
                alert('Please enter a valid investment value');
            }else if (document.getElementById("myPension").value == 'e'  || document.getElementById("myPension").value == '' || document.getElementById("myPension").value == '+' || parseFloat(document.getElementById("myPension").value )  >=9999999999){
                alert('Please enter a valid pension value');
            }else if (document.getElementById("myRental").value == 'e'  || document.getElementById("myRental").value == '' || document.getElementById("myRental").value == '+' || parseFloat(document.getElementById("myRental").value )  >=9999999999){
                alert('Please enter a valid rental value');
            }else if (document.getElementById("myCredits").value == 'e'  || document.getElementById("myCredits").value == '' || document.getElementById("myCredits").value == '+' || parseFloat(document.getElementById("myCredits").value )  >=9999999999){
                alert('Please enter a valid franked credit value');
            }else if (document.getElementById("myTaxFree").value == 'e'  || document.getElementById("myTaxFree").value == '' || document.getElementById("myTaxFree").value == '+' || parseFloat(document.getElementById("myTaxFree").value )  >=9999999999){
                alert('Please enter a valid tax free pension value');
            }else if (document.getElementById("myOthers").value == 'e'  || document.getElementById("myOthers").value == '' || document.getElementById("myOthers").value == '+' || parseFloat(document.getElementById("myOthers").value )  >=9999999999){
                alert('Please enter a valid others income value');
            }
            else {
                taxCalculator();
            }



    }

    function taxCalculator(){
        const salary = parseFloat(document.getElementById("mySalary").value);
        const salarySacrifice = parseFloat(document.getElementById("mySalarySacrifice").value);
        const investment = parseFloat(document.getElementById("myInvestment").value);
        const pension = parseFloat(document.getElementById("myPension").value);
        const rental = parseFloat(document.getElementById("myRental").value);
        const credits = parseFloat(document.getElementById("myCredits").value);
        const others = parseFloat(document.getElementById("myOthers").value);
        const free = parseFloat(document.getElementById("myTaxFree").value);
        var myFamily = document.querySelector('input[name="myFamily"]:checked').value;

        if(salary == 0 || salarySacrifice == 0 || investment == 0 || pension == 0 ||  rental == 0 || credits == 0 || others == 0 ||  free == 0 ){
            alert('Please enter all values');

        }else {

            // Calculating basic tax payable
            let taxPayable = 0;

            function addTaxPayable() {
                if (addIncome() <= 18200) {
                    taxPayable = 0;
                } else if (18201 <= addIncome() && addIncome() <= 45000) {

                    taxPayable = (addIncome() - 18200) * 0.19;

                } else if (45001 <= addIncome() && addIncome() <= 120000) {

                    taxPayable = (addIncome() - 45000) * 0.325 + 5092;

                } else if (120001 <= addIncome() && addIncome() <= 180000) {

                    taxPayable = (addIncome() - 120000) * 0.37 + 29467; // + 29467   / 5092

                } else if (addIncome() >= 180001) {

                    taxPayable = (addIncome() - 180000) * 0.45 + 51667; // + 51667   / 29467
                }

                return Math.round(taxPayable);
            }

            // calculate medicare levy

            function addMedicareLevy() {
                let mediLevy = 0;
                let basicLevy = addIncome() * 0.02;
                let totalLevy = 0;
                // is not a family member
                if (myFamily === '999') {
                    if (addIncome() <= 90000) {
                        mediLevy = 0;
                    } else {
                        if (addIncome() >= 90001 && addIncome() <= 105000) {
                            mediLevy = addIncome() * 0.01;
                        } else {
                            if (addIncome() >= 105001 && addIncome() <= 140000) { // conflicting condition
                                mediLevy = addIncome() * 0.0125;
                            } else {
                                if (addIncome() > 105000) {  // conflicting condition
                                    mediLevy = addIncome() * 0.015;
                                }
                            }
                        }
                    }
                    // is part of a family
                } else if (myFamily === '1116') {
                    if (addIncome() <= 180000) {
                        mediLevy = 0;
                    } else {
                        if (addIncome() >= 180001 && addIncome() <= 210000) {
                            mediLevy = addIncome() * 0.01;
                        } else {
                            if (addIncome() >= 210001 && addIncome() <= 280000) {
                                mediLevy = addIncome() * 0.0125;
                            } else {
                                if (addIncome() > 210000) {
                                    mediLevy = addIncome() * 0.015;
                                }
                            }
                        }
                    }

                }
                totalLevy = mediLevy + basicLevy;
                return Math.round(totalLevy);

            }

            // calculate total taxable income
            function addIncome() {
                let c1 = 0;
                let c18 = 0.1 * salary + salarySacrifice;
                if (27500 > c18) {
                    c1 = 0;
                } else {
                    c1 = salarySacrifice;
                }
                const totalIncome = salary + investment + pension + rental + credits + others - c1 - free;
                return Math.round(totalIncome);
            }

            // calculate the low & middle income tax offset
            let middleOffset = 0;

            function addMiddleOffset() {
                if (addIncome() <= 37000) {
                    middleOffset = 255;
                } else if (addIncome() >= 37001 && addIncome() <= 48000) {
                    middleOffset = (255 + (0.075 * (addIncome() - 37000)));
                } else if (addIncome() >= 48001 && addIncome() <= 90000) {
                    middleOffset = 1080;
                } else if (addIncome() >= 90001 && addIncome() <= 126000) {
                    middleOffset = 1080 - (0.03 * (addIncome() - 90000));
                } else {
                    middleOffset = 0;
                }
                return Math.round(middleOffset);
            }

            // calculate the low income tax offset
            let lowOffset = 0;

            function addLowOffset() {
                if (addIncome() <= 37500) {
                    lowOffset = 700;
                } else if (addIncome() >= 37501 && addIncome() <= 45000) {
                    lowOffset = (700 - (0.05 * (addIncome() - 37500)));
                } else if (addIncome() >= 45001 && addIncome() <= 66667) {
                    lowOffset = (325 - (0.015 * (addIncome() - 45000)));
                } else {
                    lowOffset = 0;
                }
                return Math.round(lowOffset);
            }

            // calculate total tax payable
            let pensionRebate = (pension - free) * 0.15;
            let totalTax = addMedicareLevy() + addTaxPayable();
            let totalOffset = addMiddleOffset() + addLowOffset() + pensionRebate;
            let taxPaid = 0;

            function addTotalTax() {
                if (totalOffset >= totalTax) {
                    taxPaid = 0;
                } else {
                    taxPaid = totalTax - totalOffset;
                }
                return Math.round(taxPaid);
            }

            let taxYouPay = addTotalTax() - credits;
            let netIncome = (addIncome() + free) - taxYouPay;

            let assessIncome = addIncome() + free;


            var commas = addIncome().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas2 = addTaxPayable().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas3 = addMedicareLevy().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas4 = pensionRebate.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas5 = addMiddleOffset().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas6 = addLowOffset().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas7 = addTotalTax().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas8 = netIncome.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas9 = totalTax.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas10 = totalOffset.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas11 = free.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var commas12 = assessIncome.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("echoOut").innerHTML = "$" + commas;
            document.getElementById("taxPayable").innerHTML = "- $ " + commas2;
            document.getElementById("medicareLevy").innerHTML = "- $ " + commas3;
            document.getElementById("pensionRebate").innerHTML = "+ $ " + commas4;
            document.getElementById("middleOffset").innerHTML = "+ $ " + commas5;
            document.getElementById("lowOffset").innerHTML = "+ $ " + commas6;
            document.getElementById("taxPaid").innerHTML = "- $ " + commas7;
            document.getElementById("netIncome").innerHTML = " $ " + commas8;
            document.getElementById("Paid").innerHTML = "-$" + commas9;
            document.getElementById("off").innerHTML = "+ $ " + commas10;
            document.getElementById("free").innerHTML = "- $ " + commas11;
            document.getElementById("assess").innerHTML = "$ " + commas12;

            // document.getElementById("test1").innerHTML =  myFamily+ addMedicareLevy() ;

        }
    }

</script>



<!--<script>-->
<!--    $('.input').on('input', function(){-->
<!--       taxCalculator();-->
<!--    });-->
<!--    taxCalculator();-->
<!--</script>-->
