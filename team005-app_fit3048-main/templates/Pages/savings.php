<?php
echo $this->Html->css('custom.css');
?>
<?= $this->Html->script('Invest_retirement.js') ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">

<div class="text-center" style="margin-top: 2%;margin-bottom: 2%">
    <h2 class="myTitle">saving at retirement</h2>
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
        var q7 = document.getElementById("question_7");
        var q8 = document.getElementById("question_8");
        if (question === 0) {
            if (document.getElementById("inputAge").value === '' || document.getElementById("inputAge").value < 18) {
                document.getElementById("age_error").style.display = "block";
            } else {
                document.getElementById("age_error").style.display = "none";
                q1.style.display = "none";
                q2.style.display = "block";
                question += 1;
            }
        }
        // question 2
        else if (question === 1) {
            if (document.getElementById("inputIncome").value === '' || document.getElementById("inputIncome").value < 15000) {
                document.getElementById("income_error").style.display = "block";
            } else {
                document.getElementById("income_error").style.display = "none";
                q2.style.display = "none";//q1
                q3.style.display = "block";//q2
                question += 1;
            }
        } else if (question === 2) {
            if(document.getElementById("retirement_age").value === ''|| document.getElementById("retirement_age").value < 55 ){
                document.getElementById("retire_error").style.display = "block";
            }
            else {
                document.getElementById("retire_error").style.display = "none";
            q3.style.display = "none";//q2
            q4.style.display = "block";//q3
            question += 1;
            }
        } else if (question === 3) {
            if(document.getElementById("retirement_income").value === ''){
                document.getElementById("lump_error").style.display = "block";
            }
            else {
            document.getElementById("lump_error").style.display = "none";
            q4.style.display = "none";//q3
            q5.style.display = "block";//q4
            question += 1;
            }
        } else if (question === 4) {//current_super
            if (document.getElementById("inputSuper").value === '') {
                document.getElementById("super_error").style.display = "block";
            } else {
                document.getElementById("super_error").style.display = "none";
                q5.style.display = "none";//q4
                q6.style.display = "block";//q5
                question += 1;
            }
        } else if (question === 5) {//monthly_super
            if (document.getElementById("monthlyInput").value === '') {
                document.getElementById("monthly_error").style.display = "block";
            } else {
                document.getElementById("monthly_error").style.display = "none";
                q6.style.display = "none";//q5
                q7.style.display = "block";//q6
                question += 1;
            }
        } else if (question === 6) {//non_super_funds
            if (document.getElementById("inputInvestment").value === '') {
                document.getElementById("investment_error").style.display = "block";
            } else {
                document.getElementById("investment_error").style.display = "none";
                q7.style.display = "none";//q6
                q8.style.display = "block";//q7
                question += 1;
            }
        } else if (question === 7) {//monthly_non_super
            if (document.getElementById("nonInput").value === '') {
                document.getElementById("non_error").style.display = "block";
            } else {
                document.getElementById("non_error").style.display = "none";
                q8.style.display = "none";//q7
                q9.style.display = "block";//q8
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
        var q7= document.getElementById("question_7");
        var q8 = document.getElementById("question_8");
        var q9 = document.getElementById("question_9");
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
        else if(question ===6){
            q7.style.display = "none";
            q6.style.display = "block";
            question -= 1;
        }
        else if(question ===7){
            q8.style.display = "none";
            q7.style.display = "block";
            question -= 1;
        }
        else if(question ===8){
            q9.style.display = "none";
            q8.style.display = "block";
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
            <form action="savings_results" method="get" id="savingsForm" onsubmit="return formValidator()" >
            <div id="question_1">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Saving Goals: <span id="section-title">Question 1</span></h5>
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
                                    <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">I am ____ years old.</h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
                                            <input type="number" width = 40% class="form-control" name="savings_age" id="inputAge" placeholder="Enter age here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="2"  step="any" pattern="[0-9]+" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                        </div>
                                        <span id="age_error" style="display: none; color: red;margin-bottom: 2vh">Please input a value greater than or equal to 18</span>
                                    </div>
                                    <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: Refers to your age as at next 30 June to align with the end of tax year.
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <br>
                    </div>
                </div>
            </div>
            </div>
            <div id="question_2" style="display:none">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row justify-content-around pb-3">
                            <div class="col-auto col-md-10 align-self-center">
                                <h5 class="card-title text-center">Saving Goals: <span id="section-title">Question 2</span></h5>
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
                                        <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">My annual income before tax is $____</h6>
                                        <div class="form-group row">
                                            <div class="col-sm-6" style="padding-bottom: 2vh">
                                                <input type="number" class="form-control" name="savings_income"  id="inputIncome" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="any" pattern="[0-9]+"onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                            </div>
                                            <span id="income_error" style="display: none; color: red;margin-bottom: 2vh"> Please enter a value that is greater or equal to $15,000</span>
                                        </div>
                                        <br>
                                        <div class="alert alert-success" role="alert">
                                            Help: This includes all your income before tax. Examples are salary or money from rentals.
                                        </div>


                                    </div>
                                    </div>
                                </div>
                            </div>
                        <br>
                        </div>
                    </div>
                </div>
        <div id="question_3" style="display:none">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Saving Goals: <span id="section-title">Question 3</span></h5>
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
                                    <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">I want to retire at ____ (age)     </h6>


                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
<!--                                            <input type="number" class="form-control"  name="others" id="inputOthers" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57">-->
                                            <input type="number" width = 40% class="form-control" name="retirement_age" id="retirement_age" placeholder="Enter age here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="2"  step="any" pattern="[0-9]+" onkeypress="return event.charCode >= 48 && event.charCode <= 57">

                                            </select>
                                        </div>
                                        <span id="retire_error" style="display: none; color: red;margin-bottom: 2vh">Please input an age greater than 55.</span>
                                    </div>

                                    <table class="table table-bordered table-dark">
                                        <thead>
                                        <tr>
                                            <th scope="col"  class="bg-primary" >Date of birth</th>
                                            <th scope="col"  class="bg-primary"      >Preservation Age</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">Before 1 July 1960</th>
                                            <td>55</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1 July 1961 - 30 June 1962</th>
                                            <td>56</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1 July 1962 - 30 June 1963</th>
                                            <td>58</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1 July 1963 - 30 June 1964</th>
                                            <td>59</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">From 1 July 1964</th>
                                            <td>60</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: To be able to access your super, you need to be 55 or older.
                                        There are some exceptions to the rule which allow for early retirement.
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
                            <h5 class="card-title text-center">Saving Goals: <span id="section-title">Question 4</span></h5>
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
                                        I want to have a monthly income before tax of $____
                                    </h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
<!--                                            <input type="number" class="form-control" name="lump" id="inputLump" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57">-->
                                            <input type="number" width = 40% class="form-control" name="retirement_income" id="retirement_income" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="any" pattern="[0-9]+" onkeypress="return event.charCode >= 48 && event.charCode <= 57">


                                        </div>
                                        <span id="lump_error" style="display: none; color: red;margin-bottom: 2vh">Please enter a value</span>
                                    </div>
                                    <table class="table table-bordered table-dark">
                                        <thead>
                                        <tr>
                                            <th scope="col"  class="bg-primary">ASFA Retirement Standard</th>
                                            <th scope="col"  class="bg-primary">Annual living costs</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">Couple - comfortable</th>
                                            <td>$62,269</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Single - comfortable</th>
                                            <td>$44,146</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Couple - modest</th>
                                            <td>$40,560</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Single - modest</th>
                                            <td>$28,165</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: The monthly income you would like to receive at retirement to enjoy your desired lifestyle
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
                            <h5 class="card-title text-center">Saving Goals: <span id="section-title">Question 5</span></h5>
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
                                        The current value of my Super fund: $____
                                    </h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
                                            <input type="number" class="form-control" name="savings_super" id="inputSuper"  placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
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
                            <h5 class="card-title text-center">Savings Goals: <span id="section-title">Question 6</span></h5>
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
                                        The current monthly value of my Super contributions: $____
                                    </h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
                                            <input type="number" class="form-control" name="savings_monthly_super" id="monthlyInput"  placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                        </div>
                                        <span id="monthly_error" style="display: none; color: red;margin-bottom: 2vh">Please input a value</span>
                                    </div>
                                    <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: How much you regularly contribute to your super account. Examples employers contributions, salary sacrifice, etc
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="question_7" style="display:none">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Saving Goals: <span id="section-title">Question 7</span></h5>
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
                                       Current value of Non-Super contributions: $____
                                    </h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
                                            <input type="number" required class="form-control" name="savings_non_super"  id="inputInvestment" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                        </div>
                                        <span id="investment_error" style="display: none; color: red;margin-bottom: 2vh">Please input a value</span>
                                    </div>

                                    <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: The value of other investments. Examples investment funds, shares, bonds, term deposits, etc
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="question_8" style="display:none">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Saving Goals: <span id="section-title">Question 8</span></h5>
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
                                <a id="nextBtnTop" class="btn btn-secondary" onclick="" role="button" >
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
                                        Current monthly value of my Non-Super contributions: $____
                                    </h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6" style="padding-bottom: 2vh">
                                            <input type="number" required class="form-control"  name="savings_non_monthly_super" id="nonInput" placeholder="Enter here" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="any" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                        </div>
                                        <span id="non_error" style="display: none; color: red;margin-bottom: 2vh">Please input a value</span>
                                    </div>
                                    <div>
                                        <!--<button type="button" onclick="hideInput()" class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase;margin-top: 1vh">Submit</button>-->
                                        <input type="submit" name="submit" id="submit" onclick="onsubmit()" class="btn btn-primary" style="margin-top: 1em" >
                                    </div>
                                    <br>
                                    <div class="alert alert-success" role="alert">
                                        Help: How much you regularly contribute to your investment account.
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
                        // get retire fund on select
                        let event_income = document.getElementById("retirement_income");
                        function onChange() {
                            let value = event_income.value;
                            let text = event_income.options[event_income.selectedIndex].text;
                            console.log(value, text);
                        }
                        event_income.onchange = onChange;
                        onChange();
                        //


                        // generate the age group based on today's date
                        function getAges(){
                            //get today's date - <= 55 = age1
                            //get today's date - 56 = age2
                            //get today's date - 57 = age3
                            //get today's date - 58 = age4
                            //get today's date - 59 = age5
                            //get today's date - >= 60 = age6
                        const today = new Date();
                            var dd = String(today.getDate()).padStart(2, '0');
                            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                            var year = today.getFullYear();
                            let age1 = year - 55;
                            let age2 = year - 56;
                            let age3 = year - 57;
                            let age4 = year - 58;
                            let age5 = year - 59;
                            let age6 = year - 60;
                            const dropdown = document.getElementById("retirement_age");
                            const age_group1 = document.getElementById("age_group1");
                            const age_group2 = document.getElementById("age_group2");
                            const age_group3 = document.getElementById("age_group3");
                            const age_group4 = document.getElementById("age_group4");
                            const age_group5 = document.getElementById("age_group5");
                            const age_group6 = document.getElementById("age_group6");

                            age_group6.text = "60";
                            age_group5.text = "59";
                            age_group4.text = "58";
                            age_group3.text = "57";
                            age_group2.text = "56";
                            age_group1.text = "55";

                            // age_group6.text="Before 1 July "+age6+ " - 60";
                            // age_group6.value="Before 1 July "+age6 + " ";
                            //
                            // age_group5.text="1 July "+age6+" - 30 June "+age5 + " - 59 ";
                            // //age_group5.value="1 July "+age6+" 30 June "+age5 + "- 59";
                            //
                            // age_group4.text="1 July "+age5+" - 30 June "+age4 + " - 58";
                            // //age_group4.value="1 July "+age5+" 30 June "+age4+ " - 58 ";
                            //
                            // age_group3.text="1 July "+age4+" - 30 June "+age3 + " - 57";
                            // //age_group3.value="1 July "+age5+" 30 June "+age4 +" - 57";
                            //
                            // age_group2.text="1 July "+age3+" - 30 June "+age2 + " - 56";
                            // //age_group2.value="1 July "+age5+" 30 June "+age4;
                            //
                            // age_group1.text="After 1 July "+age1 + " - 55";
                            // //age_group1.value="After 1 July "+age1;


                            dropdown.add(age_group6);
                            dropdown.add(age_group5);
                            dropdown.add(age_group4);
                            dropdown.add(age_group3);
                            dropdown.add(age_group2);
                            dropdown.add(age_group1);

                            //console.log(age1,age2,age3,age4,age5,age6);

                        }
                        getAges();


                        //get retire age on select

                        let event_age = document.getElementById("retirement_age");
                        function onChange_age() {
                            let value = event_age.value;
                            let text = event_age.options[event_age.selectedIndex].text;
                            console.log(value, text);
                        }
                        event_age.onchange = onChange_age;
                        onChange_age();

                        ///////////*******\\\\\\\\\

                        function onsubmit(){
                            $('savingsForm').on('submit', function() {
                                // do validation here
                                if(document.getElementById("inputInvestment").value === '')
                                    return false;
                            });
                        }
                        //
                        //
                        // $(document).ready(function() {
                        //     $('#carouselExampleIndicators').carousel({
                        //         interval: 1000,
                        //         wrap: false
                        //     })
                        //
                        //     $('#carouselExampleIndicators').on('slid.bs.carousel', function() {
                        //         //alert("slid");
                        //     });
                        //
                        //
                        //     $('#carouselExampleIndicators').on('slid.bs.carousel', '', function() {
                        //         var $this = $(this);
                        //
                        //         $this.find('.carousel-control').show();
                        //
                        //         if($('.carousel-inner .item:first').hasClass('active')) {
                        //             $this.find('.carousel-control-prev').hide();
                        //         } else if($('.carousel-inner .item:last').hasClass('active')) {
                        //             $this.find('.carousel-control-next').hide();
                        //         }
                        //

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
<div>
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






