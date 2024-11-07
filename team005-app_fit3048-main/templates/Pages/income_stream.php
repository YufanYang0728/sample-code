<!doctype html>
<html lang="en">

<head>
    <!-- Custom styles for this template -->
    <link href="../webroot/css/form-validation.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        .hide {
            display: none;
        }
    </style>
</head>

<body class="bg-light">
<div class="container">
    <main class="py-5 text-center">
        <div class="py-5 text-center">
            <div class="text-center" style="vertical-align: center; margin-bottom:2em">                    <button type="button" onclick="location.href='<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>' "  class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Back to Dashboard</button>
            </div>
            <h2 class="section-heading text-uppercase">Setting up an income stream</h2>
            <p class="section-subheading text-muted">Let's help you set up your income stream!</p>
        </div>

        <div id="investment_form">
            <div id="initialQuestion">
            <form>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <p class="lead">To start! You may be eligible for certain Centrelink payments to assist you with establishing your income stream.</p>
                        <P class="lead">You can access this <a href="https://www.centrelink.gov.au/custsite_pfe/pymtfinderest/paymentFinderEstimatorPage.jsf?wec-appid=pymtfinderest&wec-locale=en_US#stay" target="_blank">here!</a></P>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary btn-lg btn-block mt-5" onclick="startQuestionnaire()" type="button">Start Questionnaire!</button>
                    </div>
                </div>
                <br>
                <br>
            </form>
            </div>
            <script>
                function startQuestionnaire() {
                    var x = document.getElementById("initialQuestion");
                    var y = document.getElementById("eligibility")
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                        y.style.display ="block";
                    }
                }
            </script>
            <div class="hide" id="eligibility">
                <form>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <p class="lead">Are you eligible for any Social Security Payments?</p>
                        </div>
                        <div class="col-auto">
                            <select class="form-select" id="test" name="form_select">
                                <option value="" disabled selected>Choose..</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-lg btn-block mt-5" onclick="socialSecurity();" type="button">Next</button>
                    </div>
                </form>
            </div>
            <script>
                function validation(){
                    if( ($('#streamPayment').val() === "" && $('#centrelinkPayment').val() !== "") ||
                        ($('#streamPayment').val() !== "" && $('#centrelinkPayment').val() === "")){
                        return true;
                    }
                    else{
                        alert('Please enter an input')
                        return false;
                    }
                }
                function socialSecurity() {
                    var y = document.getElementById("eligibility")
                    var test = $('#test').val();
                    if(test === "1") {
                        if (y.style.display === "none") {
                            y.style.display = "block";
                        } else {
                            document.getElementById("selectYes").style.display ="block";
                            y.style.display = "none";
                        }
                    }
                    else if (test === "0"){
                        document.getElementById("selectNo").style.display ="block";
                        y.style.display = "none";
                    }
                }
            </script>

            <div class="hide" id="selectYes">
                <div class="allHere" id="allHere">
                    <div class="form-group fieldGroup">

                        <form action="test1" method="get" class="pb-2">
                            <p class="lead">What is your Potential Monthly Centrelink Payment?</p>
                                <div class="col" id="amount" style="justify-content: center;">
                                    <input class="form-control" style="width:30%;margin:auto" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                           type = "number"
                                           maxlength = "6" required placeholder="$" id="centrelinkPayment" name="centrelinkPayment"/>
                                </div>
                        </form>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary btn-lg btn-block mt-5" onclick="riskProfileShow();" type="button"><i class="fa-solid fa-person"></i>Submit</button>
                </div>
            </div>

            <div class="hide" id="selectNo">
                <div class="allHere" id="allHere">
                    <div class="form-group fieldGroup">

                        <form action="test1" method="get" class="pb-2">
                            <p class="lead">What is your required income stream payment? (or minimum rate allowed by government, whichever is greater)</p>
                            <div class="col" id="amount" style="justify-content: center;">
                                <input class="form-control" style="width:30%;margin:auto" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                       type = "number"
                                       maxlength = "6" required placeholder="$" id="streamPayment" name="streamPayment" />
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary btn-lg btn-block mt-5" onclick="riskProfileShow();" type="button"><i class="fa-solid fa-person"></i>Submit</button>
                </div>
            </div>


            <!-- copy of input fields group -->
            <!--<div>-->
            <!--    <p style="font-size: 20px">This is your total amount:</p><p style="font-size: 20px" id = output>-->
            <!--</div>-->
            <!---->
            <!--<button class="btn btn-primary btn-lg btn-block" onclick="calcTotal()">Calculate</button>-->
</div>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */

#include 'upload.php';
?>

<div class="hide" id="risk_profile">
    <div class="container">
        <div id="questionnaire-card" class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 class="card-title text-center">Income Stream: <span id="section-title">Question 1</span></h5>
                            <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">Where do you want to open an <span class="blue">income stream?</span></h6>
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
                        <div class="col-md-6 align-content-center">
                            <div class="d-flex justify-content-center">
                                <div id="section-input" class="col">
                                    <select id="income-stream-options" class="form-control" name="income-stream-options">
                                        <option disabled selected value="3">Please select an option</option>
                                        <option value="0">Your Current Fund</option>
                                        <option value="1">Explore our Low Cost Options</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a id="submit-button" style="display:none" class="btn btn-primary mt-3" onclick="showResults()">Submit complete questionnaire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Submit enquiry our funds -->
        <div class="hide" id="our-funds">
            <div class="container">
                <div id="questionnaire-card" class="card">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row justify-content-around pb-3">
                                <div class="col-auto col-md-10 align-self-center">
                                    <h5 id="my_confirm_2" class="card-subtitle mb-2 text-center" style="display:none; color: green">Thank you for submitting your enquiry! Our team will be in contact within 3-5 business days.</h5>
                                    <h5 class="card-title text-center">Income Stream: <span id="section-title">Enquiry into our funds</span></h5>
                                    <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">Where do you want to open an <span class="blue">income stream?</span></h6>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8 align-content-center">
                                    <div class="d-flex justify-content-center">
                                        <div id="section-input" class="col">
                                            <p>Features</p>
                                            <p>- Industry / Not For Profit Fund</p>
                                            <p>- Hands off Option</p>
                                            <p>- Paper Application</p>
                                            <br>
                                            <input type="radio" style="vertical-align: bottom" value="option-1" name ="options" id="my_option" required>
                                        </div>
                                        <div id="section-input" class="col">
                                            <p>Features</p>
                                            <p>- Low cost retail fund</p>
                                            <p>- Transparent Fees</p>
                                            <p>- Hands off Option</p>
                                            <p>- Online Application</p>
                                            <br>
                                            <input type="radio" style="vertical-align: bottom" value="option-2" name ="options" id="your_option">
                                        </div>
                                    </div>
                                        <div id="section-input" class="row">
                                            <span> Name</span>
                                            <input required type="text" onkeydown="return /[a-z]/i.test(event.key)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                   maxlength = "30" id="your_name" name="name">
                                            <span> Mobile Number</span>
                                            <input required type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                   maxlength = "10" id="your_phone" name="phone-number">
                                            <span> Email Address</span>
                                            <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                   maxlength = "30" id="your_email" name="email">
                                    </div>
                                    <a id="submit-button" class="btn btn-primary mt-3" style="width:30%" onclick="displayMy()">Submit Enquiry</a>
                                    <script>
                                        function validateEmail($email) {
                                            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                            return emailReg.test( $email );
                                        }
                                        function displayMy(){
                                            if (document.getElementById("your_name").value === ""){
                                                alert("Please Enter your name");
                                            }else if (document.getElementById("your_phone").value.length < 8 || document.getElementById("your_phone").value === ""){alert("Please Enter a Valid Mobile Number");}
                                            else if (!validateEmail(document.getElementById("your_email").value) || document.getElementById("your_email").value === "" ){
                                                alert("Please Enter a Valid Email");

                                            }else if (document.getElementById("your_option").value === "" &&  document.getElementById("my_option").value === ""  ){
                                                alert("Please Select a type of fund");
                                            }
                                            else{
                                                document.getElementById("my_confirm_2").style.display = "block";
                                            }


                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test( $email );
            }




            function sendResults() {
                var test = $('#test').val();
                var income;
                if(test === "1") {
                    income = $('#centrelinkPayment').val();
                }
                else {
                    income = $('#streamPayment').val();
                }
                var fundChoice = $('#income-stream-options').val();
                if(fundChoice === "0"){
                    if(document.getElementById("name2").value === "" || document.getElementById("phone-number2").value === "" || document.getElementById("email2").value == ""){
                        alert("Please enter all values");
                    }
                    else {
                        if(!validateEmail(document.getElementById("email2").value)){
                            alert("Please Enter a Valid Email")
                        }
                        else if(document.getElementById("phone-number2").value.length < 8){
                            alert("Please Enter a Valid Mobile Number")
                        else {
                            $("submit-button").attr("disabled", true);
                            document.getElementById("enquiry-confirmation1").style.display = "block";
                        }
                    }
                } else if(fundChoice === "1"){
                    if(document.getElementById("name").value === "" || document.getElementById("phone-number").value === "" ||document.getElementById("email").value === "" || !$("input[name='options']:checked").val() ){
                        alert("Please enter all values");
                    }
                    else {
                        if(!validateEmail(document.getElementById("email").value)){
                            alert("Please Enter a Valid Email");
                        }
                        else if(document.getElementById("phone-number").value.length < 8){
                            alert("Please Enter a Valid Mobile Number")
                        else {
                            $("submit-button").attr("disabled", true);
                            document.getElementById("enquiry-confirmation2").style.display = "block";
                            document.getElementById('display').innerHTML = document.getElementById("name").value;
                            document.getElementById('display2').innerHTML = document.getElementById("phone-number").value;
                            document.getElementById('display3').innerHTML = document.getElementById("email").value;
                            document.getElementById('display4').innerHTML = $('input[name="options"]:checked').val();
                            document.getElementById('display5').innerHTML = income;
                        }
                    }
                }

            }
        </script>


<!--    submit enquiry current fund-->
                <div class="hide" id="current-fund">
                    <div class="container">
                        <div id="questionnaire-card" class="card">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row justify-content-around pb-3">
                                        <div class="col-auto col-md-10 align-self-center">
                                            <h5 id="enquiry-confirmation1" class="card-subtitle mb-2 text-center" style="display:none; color: green">Thank you for submitting your enquiry! Our team will be in contact within 3-5 business days.</h5>
                                            <h5 class="card-title text-center">Income Stream: <span id="section-title">Submit an Enquiry</span></h5>
                                            <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">Thank you for filling out this form! Fill out your details below and we will contact you regarding your options utilizing your current fund</span></h6>
                                        </div>
<!--                                        <div class="col-6 col-md-1 order-md-first align-self-center">-->
<!--                                            <div class="d-grid gap-2">-->
<!--                                                <a id="prevBtnTop" class="btn btn-secondary" onclick="onPrevious();" role="button">-->
<!--                                                    <i class="fas fa-chevron-left"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-6 col-md-1 order-last align-self-center">-->
<!--                                            <div class="d-grid gap-2">-->
<!--                                                <a id="nextBtnTop" class="btn btn-primary" onclick="onNext();" role="button">-->
<!--                                                    <i class="fas fa-chevron-right"></i>-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                    </div>
                                    <div class="row justify-content-center">
                                        <h5 id="my-confirm" class="card-subtitle mb-2 text-center" style="display:none; color: green">Thank you for submitting your enquiry! Our team will be in contact within 3-5 business days.</h5>

                                        <div class="col-md-6 align-content-center">
                                            <div class="d-flex justify-content-center">
                                                <div id="section-input" class="col">
                                                    <span> Name</span>
                                                    <input required type="text" onkeydown="return /[a-z]/i.test(event.key)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                           maxlength = "30" id="my_name" name="name2">
                                                    <span> Mobile Number</span>
                                                    <input required type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                           maxlength = "10" id="my_phone" name="phone-number2">
                                                    <span> Email Address</span>
                                                    <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                           maxlength = "30" id="my_email" name="email2">
                                                </div>
                                            </div>
                                            <a id="submit-button" class="btn btn-primary mt-3" style="width:30%" onclick="display()">Submit Your Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function validateEmail($email) {
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                return emailReg.test( $email );
                            }

                            function display(){
                                if (document.getElementById("my_name").value === ""){
                                    alert("Please Enter your name");
                                }else if (document.getElementById("my_phone").value.length < 8 || document.getElementById("my_phone").value === ""){alert("Please Enter a Valid Mobile Number");}
                                else if (!validateEmail(document.getElementById("my_email").value) || document.getElementById("my_email").value === "" ){
                                    alert("Please Enter a Valid Email");

                                }else{
                                    document.getElementById("my-confirm").style.display = "block";
                                }


                            }


                            function onNext() {
                                var y = document.getElementById("risk_profile")
                                var x = document.getElementById("our-funds")
                                var z = document.getElementById("current-fund")
                                var test = $('#income-stream-options').val();
                                if(test === "0") {
                                    if (y.style.display === "none") {
                                        y.style.display = "block";
                                    } else {
                                        z.style.display ="block";
                                        y.style.display = "none";
                                    }
                                }
                                else if (test === "1"){
                                    x.style.display ="block";
                                    y.style.display = "none";
                                }
                            }
                        </script>
                    </div>

        <div id="result-card" style="display: none" class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 mx-auto">
                            <h5 id="result-title" class="card-title text-center">Enquiry Submittted!</h5>
                            <h6 id="result-subtitle" class="card-subtitle mb-2 text-muted text-center">Thank you for submitting your enquiry about your income stream to our team!</h6>
                            <div class="col-md-6 mx-auto py-5">
                                <h2 id="result-recommendation" class="text-center">We will be in contact with you within 2-3 business days regarding your enquiry.</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?= $this->Html->script('questionnaire.js') ?>
        <script>


            function riskProfileShow() {
                if(validation() === true) {
                    var s = document.getElementById("risk_profile");
                    if (s.style.display === "block") {
                        s.style.display = "none";
                    } else {
                        s.style.display = "block";
                    }
                    var i = document.getElementById("investment_form");
                    if (i.style.display === "none") {
                        i.style.display = "block";
                    } else {
                        i.style.display = "none"
                    }
                }
            }

        </script>
<?php
echo $this->Html->css("/webroot/css/investment.css");
echo $this->Html->script("/webroot/js/investment.js");
?>
