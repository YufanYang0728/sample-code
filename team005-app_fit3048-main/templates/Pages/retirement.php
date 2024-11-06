<?php
echo $this->Html->css('custom.css');
?>
<?= $this->Html->script('Invest_retirement.js') ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">

<div class="text-center" style="margin-top: 2%;margin-bottom: 2%">
    <h2 class="myTitle">Investing at retirement</h2>
<!--    <span>Fill in your personal details</span>-->
</div>
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
    .form-control{
        margin-top: 2em;

    }
    .hide{
        display: none;
    }
</style>

<script>
    var question = 0;
    function onNext() {
        var q1 = document.getElementById("question_1");
        var q2 = document.getElementById("question_2");
        var q3 = document.getElementById("question_3");
        var q4 = document.getElementById("question_4");
        var q5 = document.getElementById("question_5");
        var q6 = document.getElementById("question_6");
        if(question === 0) {
            if(document.getElementById("inputAge").value === '' || document.getElementById("inputAge").value < 58){
                document.getElementById("age_error").style.display = "block";
            }
            else {
                document.getElementById("age_error").style.display = "none";
                q1.style.display = "none";
                q2.style.display = "block";
                question += 1;
            }
        }
        // question 2
        else if(question === 1){
            if(document.getElementById("inputIncome").value === ''){
                document.getElementById("income_error").style.display = "block";
            }
            else {
                document.getElementById("income_error").style.display = "none";
                q2.style.display = "none";
                q3.style.display = "block";
                question += 1;
            }
        }
        else if(question === 2){
            if(document.getElementById("inputOthers").value === ''){
                document.getElementById("others_error").style.display = "block";
            }
            else {
                document.getElementById("others_error").style.display = "none";
                q3.style.display = "none";
                q4.style.display = "block";
                question += 1;
            }
        }
        else if(question === 3){
            if(document.getElementById("inputLump").value === ''){
                document.getElementById("lump_error").style.display = "block";
            }
            else {
                document.getElementById("lump_error").style.display = "none";
                q4.style.display = "none";
                q5.style.display = "block";
                question += 1;
            }
        }
        else if(question === 4){
            if(document.getElementById("inputSuper").value === ''){
                document.getElementById("super_error").style.display = "block";
            }
            else {
                document.getElementById("super_error").style.display = "none";
                q5.style.display = "none";
                q6.style.display = "block";
                question += 1;
            }
        }
    }

    function onPrevious() {
        var q1 = document.getElementById("question_1");
        var q2 = document.getElementById("question_2");
        var q3 = document.getElementById("question_3")
        var q4 = document.getElementById("question_4");
        var q5 = document.getElementById("question_5");
        var q6 = document.getElementById("question_6");
        if(question === 1) {
            q1.style.display = "block";
            q2.style.display= "none";
            question -= 1;
        }
        //question 2
        else if(question === 2){
            q3.style.display ="none";
            q2.style.display = "block";
            question -= 1;
        }
        else if(question ===3){
            q4.style.display = "none";
            q3.style.display = "block";
            question -= 1;
        }
        else if(question ===4){
            q5.style.display = "none";
            q4.style.display = "block";
            question -= 1;
        }
        else if(question ===5){
            q6.style.display = "none";
            q5.style.display = "block";
            question -= 1;
        }
    }

</script>
</html>
<div class="text-center">
    <h5>Fill in your personal details so that we can help know more about you!</h5>
</div>
<div class="text-center">
    We use this information to help guide you to reach your retirement goals
</div>
<br>
<div class="container-fluid">

<div class="row">
    <div class="col-5">
        <h3 id="title"></h3>
    <div class="card text-center" id="input">


        <div id="questionnaire-card" class="card">
            <form action="retirement_results" method="get" id="retirementForm" onsubmit="return formValidator()" >
            <div id="question_1">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Retirement Goals: <span id="section-title">Question 1</span></h5>
                        </div>
                        <div class="col-6 col-md-1 order-md-first align-self-center">
                            <div class="d-grid gap-2">
                                <a id="prevBtnTop" class="btn btn-secondary" onclick="onPrevious();" role="button">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-1 order-last align-self-center">
                            <div class="d-grid gap-2">
                                <a id="nextBtnTop" class="btn btn-primary" onclick="onNext();" role="button">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 align-content-center">
                            <div class="d-flex justify-content-center">
                                <div id="section-input" class="col">
                                    <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">I am ____ years old and would like to retire now.</h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
                                            <input type="number" width = 40% class="form-control" name="age" id="inputAge" placeholder="Enter age here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="2"  step="any" pattern="[0-9]+" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                        </div>
                                        <span id="age_error" style="display: none; color: red;margin-bottom: 2vh">Please input a value greater than or equal to 58</span>
                                    </div>
                                    <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: To be able to access your super benefits, you need to be 58 or older.
                                        If you have reasons to retire before the age of 58,
                                        please contact our office.
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div id="question_2" style="display:none">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row justify-content-around pb-3">
                            <div class="col-auto col-md-10 align-self-center">
                                <h5 class="card-title text-center">Retirement Goals: <span id="section-title">Question 2</span></h5>
                            </div>
                            <div class="col-6 col-md-1 order-md-first align-self-center">
                                <div class="d-grid gap-2">
                                    <a id="prevBtnTop" class="btn btn-primary" onclick="onPrevious();" role="button">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-1 order-last align-self-center">
                                <div class="d-grid gap-2">
                                    <a id="nextBtnTop" class="btn btn-primary" onclick="onNext();" role="button">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 align-content-center">
                                <div class="d-flex justify-content-center">
                                    <div id="section-input" class="col">
                                        <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">At retirement I need a monthly income after tax of $____</h6>
                                        <div class="form-group row">
                                            <div class="col-sm-6" style="padding-bottom: 2vh">
                                                <input type="number" class="form-control" name="income"  id="inputIncome" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="any" pattern="[0-9]+"onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                            </div>
                                            <span id="income_error" style="display: none; color: red;margin-bottom: 2vh">Please input a value</span>
                                        </div>
                                        <br>
                                        <div class="alert alert-success" role="alert">
                                            Help: The net monthly income you require to enjoy your desired lifestyle. Note: If you're unsure how much you need contact a financial planner for further advice
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div id="question_3" style="display:none">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Retirement Goals: <span id="section-title">Question 3</span></h5>
                        </div>
                        <div class="col-6 col-md-1 order-md-first align-self-center">
                            <div class="d-grid gap-2">
                                <a id="prevBtnTop" class="btn btn-primary" onclick="onPrevious();" role="button">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-1 order-last align-self-center">
                            <div class="d-grid gap-2">
                                <a id="nextBtnTop" class="btn btn-primary" onclick="onNext();" role="button">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 align-content-center">
                            <div class="d-flex justify-content-center">
                                <div id="section-input" class="col">
                                    <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">I will receive a monthly gross income of other sources of $____</h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
                                            <input type="number" class="form-control"  name="others" id="inputOthers" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                        </div>
                                        <span id="others_error" style="display: none; color: red;margin-bottom: 2vh">Please input a value</span>
                                    </div>
                                    <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: Your non-super source of income.
                                        Examples: rental, investment income
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="question_4" style="display:none">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Retirement Goals: <span id="section-title">Question 4</span></h5>
                        </div>
                        <div class="col-6 col-md-1 order-md-first align-self-center">
                            <div class="d-grid gap-2">
                                <a id="prevBtnTop" class="btn btn-primary" onclick="onPrevious();" role="button">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-1 order-last align-self-center">
                            <div class="d-grid gap-2">
                                <a id="nextBtnTop" class="btn btn-primary" onclick="onNext();" role="button">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 align-content-center">
                            <div class="d-flex justify-content-center">
                                <div id="section-input" class="col">
                                    <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">
                                        I will need a lump sum of $____ to settle my liabilities
                                    </h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
                                            <input type="number" class="form-control" name="lump" id="inputLump" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                        </div>
                                        <span id="lump_error" style="display: none; color: red;margin-bottom: 2vh">Please input a value</span>
                                    </div>
                                <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: This is the amount you need to settle your debts and retire debt-free.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="question_5" style="display:none">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Retirement Goals: <span id="section-title">Question 5</span></h5>
                        </div>
                        <div class="col-6 col-md-1 order-md-first align-self-center">
                            <div class="d-grid gap-2">
                                <a id="prevBtnTop" class="btn btn-primary" onclick="onPrevious();" role="button">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-1 order-last align-self-center">
                            <div class="d-grid gap-2">
                                <a id="nextBtnTop" class="btn btn-primary" onclick="onNext();" role="button">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 align-content-center">
                            <div class="d-flex justify-content-center">
                                <div id="section-input" class="col">
                                    <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">
                                        The current value of my Super investments: $____
                                    </h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
                                            <input type="number" class="form-control" name="super" id="inputSuper" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                        </div>
                                        <span id="super_error" style="display: none; color: red;margin-bottom: 2vh">Please input a value</span>
                                    </div>
                                    <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: The value of your Super/Retirement funds.
                                        Does not include: investment funds, shares, bonds, term deposits, etc.
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="question_6" style="display:none">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Retirement Goals: <span id="section-title">Question 6</span></h5>
                        </div>
                        <div class="col-6 col-md-1 order-md-first align-self-center">
                            <div class="d-grid gap-2">
                                <a id="prevBtnTop" class="btn btn-secondary" onclick="onPrevious();" role="button">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-1 order-last align-self-center">
                            <div class="d-grid gap-2">
                                <a id="nextBtnTop" class="btn btn-primary" onclick="onNext();" role="button">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 align-content-center">
                            <div class="d-flex justify-content-center">
                                <div id="section-input" class="col">
                                    <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">
                                        The current value of my Non-Super investments: $____
                                    </h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
                                            <input type="number" required class="form-control" name="investment" id="inputInvestment" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                        </div>
                                        <span id="investment_error" style="display: none; color: red;margin-bottom: 2vh">Please input a value</span>
                                    </div>
                                    <div>
                                        <!--<button type="button" onclick="hideInput()" class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase;margin-top: 1vh">Submit</button>-->
                                        <input type="submit" name="submit" id="submit" onclick="onsubmit()" class="btn btn-primary" style="margin-top: 1em" >
                                    </div>
                                    <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: The value of your other investments.
                                        Examples: investment funds, shares, bonds, term deposits, etc.
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
        </div>

</div>

                    <script>

                        function onsubmit(){
                            $('retirementForm').on('submit', function() {
                                // do validation here
                                if(document.getElementById("inputInvestment").value === '')
                                    return false;
                            });
                        }


                        $(document).ready(function() {
                            $('#carouselExampleIndicators').carousel({
                                interval: 1000,
                                wrap: false
                            })

                            $('#carouselExampleIndicators').on('slid.bs.carousel', function() {
                                //alert("slid");
                            });


                            $('#carouselExampleIndicators').on('slid.bs.carousel', '', function() {
                                var $this = $(this);

                                $this.find('.carousel-control').show();

                                if($('.carousel-inner .item:first').hasClass('active')) {
                                    $this.find('.carousel-control-prev').hide();
                                } else if($('.carousel-inner .item:last').hasClass('active')) {
                                    $this.find('.carousel-control-next').hide();
                                }


                        function formValidator(){
                            const age = document.getElementById("inputAge").value;
                            const income = document.getElementById("inputIncome").value;
                            const otherIncome = document.getElementById("inputOthers").value;
                            const lump = document.getElementById("inputLump").value;
                            const superAnnual = document.getElementById("inputSuper").value;
                            const investment = document.getElementById("inputInvestment").value;


                            if (age == '' ){
                                alert("Please enter a valid value for your age.");
                                return false;
                            }else if (income == ''){
                                alert("Please enter your after tax monthly income.");
                                return false;
                            }else if (otherIncome == ''){
                                alert("Please enter your other sources of income.");
                                return false;
                            }else if (lump == ''){
                                alert("Please enter your required lump.");
                                return false;
                            }else if (superAnnual == ''){
                                alert("Please enter your super investments.");
                                return false;
                            }else if (investment == ''){
                                alert("Please enter your Non-Super investments.");
                                return false;
                            }
                        }
                    </script>
        </div>
<!--        <div class="card-footer text-muted">-->
<!--            2 days ago-->
<!--        </div>-->
    </div>
        <div class="hide" id="output">
            <div class="container-fluid">
                <div class="text-center">
                    <h2>Your Results</h2>
                </div>
                <div class="row">
                    <div class="col-8">
                        <table>
                            <tr>
                                <td><h5>Your Age: </h5></td>
                                <td> <h6 id="myAge">age</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Your required income: </h5></td>
                                <td> <h6 id="myIncome">Income</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Your income from other sources: </h5></td>
                                <td><h6 id="myOtherIncome">Other</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Your required lump sum: </h5></td>
                                <td> <h6 id="myLump">Lump</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Your current Super investment: </h5></td>
                                <td><h6 id="mySuper">Super</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Your current Non-Super investment: </h5></td>
                                <td> <h6 id="myInvestment">Investment</h6></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row" style="margin-top: 10%;margin-bottom: 10%">
                    <h3 class="text-center " style="margin-bottom: 1em">Choose your step</h3>
                    <div class="col-3">                    <button type="button" onclick="location.href='super_contribution' "  class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Contribution to Super</button>
                    </div>
                    <div class="col-3">                    <button type="button" onclick="location.href='risk_profile' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Investment portfolio</button>
                    </div>
                    <div class="col-3">                    <button type="button" onclick="location.href='consolidate_super' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">consolidate super</button>
                    </div>
                    <div class="col-3">                    <button type="button" onclick="location.href='income_stream' " class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">income stream</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>

</script>




