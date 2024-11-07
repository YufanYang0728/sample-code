
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */

#include 'upload.php';
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

<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <div id="risk">
                <h2 class="section-heading text-uppercase">Risk Profile</h2>
                <h3 class="section-subheading text-muted">Please complete the questionnaire</h3>
            </div>
            <div id="compare" style="display: none">
                <h2 class="section-heading text-uppercase">Compare funds</h2>
                <p class="section-subheading text-muted">Let's help you find the most suitable product!</p>
                <br>
                <h2 class="section-heading text-uppercase" style="color: #0d8abf">results</h2>
                <h2 id="result-profile"  class="text-center">Investor profile</h2>
                <h6 id="result-mix" class="text-center text-muted">Benchmark asset mix</h6>
                <table class="table table-bordered table-hover table-dark">
                    <thead >
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Fee(%)</th>
                        <th scope="col">Growth(%)(</th>
                        <th scope="col">Defensive(%)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">BlackRock Global Allocation Aus D</th>
                        <td>0.22</td>
                        <td>60.45</td>
                        <td>39.55</td>
                    </tr>
                    <tr>
                        <th scope="row">BlackRock W Monthly Income D</th>
                        <td>0.55</td>
                        <td>0</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <th scope="row">Vanguard Australian Shares Index</th>
                        <td>0.46</td>
                        <td>100</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">Vanguard International Shares Index</th>
                        <td>0.38</td>
                        <td>100</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">CFS Wholesale Enhanced Yield</th>
                        <td>0.53</td>
                        <td>21.12</td>
                        <td>78.88</td>
                    </tr>
                    <tr>
                        <th scope="row">AMP Capital Wholesale Global Equity - Value Fund</th>
                        <td>0.98</td>
                        <td>98.43</td>
                        <td>1.57</td>
                    </tr>
                    <tr>
                        <th scope="row">Netwealth Active Balanced Fund</th>
                        <td>0.7</td>
                        <td>55.09</td>
                        <td>44.91</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <p class="section-subheading text-muted">Notice: E.g  70,000 balance with $35,000 in BlackRock Global Allocation AUS D and BlackRock W Monthly Income D</p>
                <br>
                <div id="risk_profile_question">
                    <div class="card" style="margin-bottom: 2vh">
                    <div class="card-body">
                    <h3 class="section-subheading text-muted" style="font-weight: bold;margin-bottom: 0">Do your investments match your risk profile?</h3>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <button class="btn btn-primary btn-lg btn-block mt-5" onclick="window.location.href='iteration3_consolidate_super'" type="button">Yes</button>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary btn-lg btn-block mt-5" onclick="risk_profile_no_match()" type="button">No </button>
                        </div>
                        <br>
                        <br>
                    </div>
                    </div>
                    </div>
                </div>
                <script>
                    function risk_profile_no_match() {
                        var x = document.getElementById("risk_profile_question");
                        var y = document.getElementById("risk_no")
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                            y.style.display ="block";
                        }
                    }
                </script>
                <div id="risk_no" style="display:none">
                    <div class="card" style="margin-bottom: 2vh">
                        <div class="card-body">
                    <h3 class="section-subheading " style="color: green;font-size: x-large;font-weight: bold;margin-bottom: 0;">Do you wish to stay in this super fund?</h3>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <button class="btn btn-primary btn-lg btn-block mt-5" onclick="contact_form()" type="button">Yes</button>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary btn-lg btn-block mt-5" onclick="window.location.href='iteration3_consolidate_super'" type="button">No </button>
                        </div>
                        <br>
                        <br>
                    </div>
                        </div>
                    </div>
                </div>
                <script>
                    function contact_form() {
                        var x = document.getElementById("contact_form");
                        var y = document.getElementById("risk_no")
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                            y.style.display ="block";
                        }
                    }
                </script>
                <div id="contact_form" style="display:none">
                    <div class="card">
                        <div class="card-body">

                    <p class="lead">Please fill out contact details
                        below in case we find a better
                        solution for you
                        (Our promise - no spamming)</p>
                    <p class="lead" id="confirmation_message" style="display:none;color:green">Thank you for submitting your enquiry! Our team will be in contact with you within 3-5 business days.</p>
                    <div class="row justify-content-center">
                        <div class="col-md-6 align-content-center">
                            <div class="d-flex justify-content-center" style="width:70%;margin:auto">
                                <div id="contact_form2" class="col" style="align-content: center">
                                    <span> Name</span>
                                    <br>
                                    <input required type="text" onkeydown="return /[a-z]/i.test(event.key)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                           maxlength = "30" id="name2" name="name2">
                                    <br>
                                    <br>
                                    <span> Mobile Number</span>
                                    <br>
                                    <input required type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                           maxlength = "10" id="phone-number2" name="phone-number2">
                                    <br>
                                    <br>
                                    <span> Email Address</span>
                                    <br>
                                    <input required type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                           maxlength = "30" id="email2" name="email2">
                                </div>
                            </div>
                            <a id="contact_submit" class="btn btn-primary mt-3" style="width:30%" onclick="sendEnquiry()">Submit Your Enquiry</a>
                            <br>
                            <br>
                            <div class="col-auto" id="homeButton" style="display: none">    <button class="btn btn-primary"  onclick="location.href= '<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>'" >Back to dashboard</button>
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
                    function sendEnquiry(){
                        var x = document.getElementById("confirmation_message");
                        if(document.getElementById("name2").value === "" || document.getElementById("phone-number2").value === "" || document.getElementById("email2").value === ""){
                            alert("Please enter all values");
                        }
                        else {
                            if(!validateEmail(document.getElementById("email2").value)){
                                alert("Please Enter a Valid Email")
                            }
                            else if(document.getElementById("phone-number2").value.length < 8){
                                alert("Please Enter a Valid Mobile Number")
                            }
                            else {
                                document.getElementById("homeButton").style.display = "block";
                                x.style.display = "block";
                            }
                        }
                    }
                </script>


                <div class="row" style="justify-content: center">
                    <div class="col-auto">
                        <div class="card" style="margin-bottom: 2vh">
                            <div class="card-header">
                                Macquarie Investment Manager II
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover table-dark"">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Rate(%)</th>
                                    <th scope="col">Balance($)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">BlackRock Global Allocation Aus D</th>
                                    <td>0.22</td>
                                    <td>35000.00</td>

                                </tr>
                                <tr>
                                    <th scope="row">BlackRock W Monthly Income D</th>
                                    <td>0.55</td>
                                    <td>35000.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Admin Fees</th>
                                    <td>0.49%</td>
                                    <td>70000</td>
                                </tr>
                                <tr>
                                    <th scope="row" >Total Fee($)</th>
                                    <td colspan="2">612.5</td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card"  style="margin-bottom: 2vh">
                            <div class="card-header">
                                BT Panorama
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover table-dark">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Rate(%)</th>
                                        <th scope="col">Balance($)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">BlackRock Global Allocation Aus D</th>
                                        <td>0.22</td>
                                        <td>35000.00</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">BlackRock W Monthly Income D</th>
                                        <td>0.55</td>
                                        <td>35000.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Admin Fees</th>
                                        <td>0.15%</td>
                                        <td>70000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" >Total Fee($)</th>
                                        <td colspan="2">914.5</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card" style="margin-bottom: 2vh">
                            <div class="card-header">
                                AMP North
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover table-dark">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Rate(%)</th>
                                        <th scope="col">Balance($)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">BlackRock Global Allocation Aus D</th>
                                        <td>0.22</td>
                                        <td>35000.00</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">BlackRock W Monthly Income D</th>
                                        <td>0.55</td>
                                        <td>35000.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Admin Fees</th>
                                        <td>0.56%</td>
                                        <td>70000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" >Total Fee($)</th>
                                        <td colspan="2">1786</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card" style="margin-bottom: 2vh">
                            <div class="card-header">
                                Special title treatment
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover table-dark">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Rate(%)</th>
                                        <th scope="col">Balance($)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">BlackRock Global Allocation Aus D</th>
                                        <td>0.22</td>
                                        <td>35000.00</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">BlackRock W Monthly Income D</th>
                                        <td>0.55</td>
                                        <td>35000.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Admin Fees</th>
                                        <td>0.48%</td>
                                        <td>70000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" >Total Fee($)</th>
                                        <td colspan="2">1411</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="questionnaire-card" class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 id="section-title" class="card-title text-center">Card title</h5>
                            <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
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
                                    <!-- QUESTION INPUT WILL APPEAR HERE -->
                                </div>
                            </div>
                            <a id="submit-button" style="display:none" class="btn btn-primary mt-3" onclick="showResults()">Submit complete questionnaire</a>
                        </div>

                        <div class="d-grid gap-2 pt-5">
                            <div class="btn-group">
                                <a id="prevBtnBottom" class="btn btn-secondary disabled" onclick="onPrevious();">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a id="nextBtnBottom" class="btn btn-primary" onclick="onNext();">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="result-card" style="display: none" class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 mx-auto">
                            <h5 id="result-title" class="card-title text-center">Card title</h5>
                            <h6 id="result-subtitle" class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                            <div class="col-md-6 mx-auto py-5">
                                <h2 id="result-investorprofile"  class="text-center">Investor profile</h2>
                                <h6 id="result-benchmarkassetmix" class="text-center text-muted">Benchmark asset mix</h6>
                                <p id="result-investorprofiledesc" class="text-center text-muted">Investor profile description</p>
                            </div>
                            <div class="d-grid gap-2 col-md-6 mx-auto">
                                <button type="button" class="btn btn-secondary" onclick="location.href= '<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>'">Let me manage my investments myself</button>
                                <button type="button" class="btn btn-primary mt-1" onclick="comparisonTool()">Run Comparison Tool</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->Html->script('questionnaire.js') ?>
<script>
    var questionnaire = new Questionnaire('risk-profile', 'Risk Profile', 'Used to understand your investing expectations and risk appetite');

    var question = new Question("investment-term",
        new SelectMenu("investment-term", "investment term", "Please select an answer...", [
            new SelectOption(10,"Less than 12 months", false),
            new SelectOption(20,"Between 1 and 3 years", false),
            new SelectOption(30,"Between 3 and 5 years", false),
            new SelectOption(40,"Between 5 and 7 years", false),
            new SelectOption(50,"Longer than 7 years", false)
        ])
    );
    var section = new Section("investment-term", "Question 1", "For how long would you expect most of your money to be invested before you would need to access it?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("return-expectation",
        new SelectMenu("return-expectation", "return expectation", "Please select an answer...", [
            new SelectOption(10,"A reasonable return without losing any capital", false),
            new SelectOption(20,"1-3%", false),
            new SelectOption(30,"4-6%", false),
            new SelectOption(40,"7-9%", false),
            new SelectOption(50,"Over 9%", false)
        ])
    );
    var section = new Section("return-expectation", "Question 2", "If you consider current interest rates what overall level of return (after inflation) do you reasonably expect to achieve from your investments over the period you wish to invest for?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("poorly-performing-cash-in",
        new SelectMenu("poorly-performing-cash-in", "poorly performing cash in", "Please select an answer...", [
            new SelectOption(0,"You would cash it in if there was any loss in value", false),
            new SelectOption(10,"Less than 1 year", false),
            new SelectOption(20,"Up to 3 years", false),
            new SelectOption(30,"Up to 5 years", false),
            new SelectOption(40,"Up to 7 years", false),
            new SelectOption(50,"Up to 10 years", false)
        ])
    );
    var section = new Section("poorly-performing-cash-in", "Question 3", "Assuming you had no need for capital, how long would you allow a poorly performing investment to continue before cashing it in (assuming the poor performance was mainly due to market influences)?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("investment-experience",
        new SelectMenu("investment-experience", "investment-experience", "Please select an answer...", [
            new SelectOption(10,"Very little understanding or interest", false),
            new SelectOption(20,"Not very familiar", false),
            new SelectOption(30,"Have had enough experience to understand the importance of diversification", false),
            new SelectOption(40,"I understand that markets may fluctuate and that different market sectors offer different income, growth and taxation characteristics.", false),
            new SelectOption(50,"I am experienced with all investment classes and understand the various factors that may influence performance.", false)
        ])
    );
    var section = new Section("investment-experience", "Question 4", "How familiar are you with investment markets?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("tax-efficiency",
        new SelectMenu("tax-efficiency", "tax efficiency", "Please select an answer...", [
            new SelectOption(10,"Preferably guaranteed returns, ahead of tax-savings", false),
            new SelectOption(20,"Stable, reliable returns with minimal tax savings", false),
            new SelectOption(30,"Some variability in returns, some tax savings", false),
            new SelectOption(40,"Moderate variability in returns, reasonable tax savings", false),
            new SelectOption(50,"Higher variability but potentially higher returns, maximising tax savings", false)
        ])
    );
    var section = new Section("tax-efficiency", "Question 5", "There is generally a greater tax efficiency when investing in more volatile investments. With this in mind, which of the following would you be more comfortable with?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("paper-hands",
        new SelectMenu("paper-hands", "portfolio decrease scenario", "Please select an answer...", [
            new SelectOption(10,"Horror – Security of your capital is critical and you do not intend to take risks.", false),
            new SelectOption(20,"You would cut your losses and transfer your funds to more secure investment sectors.", false),
            new SelectOption(30,"You would be concerned, but would wait to see if the investments improve.", false),
            new SelectOption(40,"This was a risk you understood – you would leave your investments in place expecting performance to improve.", false),
            new SelectOption(50,"You would invest more funds to take advantage of the lower unit/share prices expecting future growth.", false)
        ])
    );
    var section = new Section("paper-hands", "Question 6", "What would your reaction be if six months after placing your investments, you discovered that due mainly to market conditions your portfolio had decreased in value by 20%?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("investing-purpose",
        new SelectMenu("investing-purpose", "investment purpose", "Please select an answer...", [
            new SelectOption(50,"You have an investment time frame of over 5 years. You understand investment markets and are mainly investing for growth to accumulate long-term wealth, or are prepared to use aggressive investments to provide income.", false),
            new SelectOption(40,"You are not nearing retirement, have surplus funds to invest and are aiming to accumulate long term wealth from a balanced portfolio.", false),
            new SelectOption(30,"You have a lump sum (eg inheritance or a superannuation rollover payment from your employer) and you are uncertain about what sort of investment alternatives are available.", false),
            new SelectOption(20,"You are nearing retirement and you are investing to ensure you have sufficient funds available to enjoy your retirement.", false),
            new SelectOption(20,"You have some specific objectives within the next 5 years for which you want to accumulate sufficient funds.", false),
            new SelectOption(10,"You want to provide a regular income and/or totally protect the value of your investment capital.", false)
        ])
    );
    var section = new Section("investing-purpose", "Question 7", "Which of the following best describes your purpose for investing?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    var section = new Section("additional-notes", "Additional question", "Please note your preference for higher risk returns in relation to protecting your investment.")
    var conditionalQuestion = new Question("additional-notes",
        new InputField("additional-question", "text", "Enter your response here", "...", true),
        false //required if not skipped
    );
    section.addQuestion(conditionalQuestion);
    questionnaire.addSection(section);

    questionnaire.getCurrentSection().show();

    function shouldConditionalQuestionBeSkipped() {
        if (calculateTotalScore() > 100 && (questionnaire.getAnswerByQuestionId("return-expectation") == 10 || questionnaire.getAnswerByQuestionId("poorly-performing-cash-in") == 0 || questionnaire.getAnswerByQuestionId("paper-hands") == 10 || questionnaire.getAnswerByQuestionId("investing-purpose") == 10)) {
            return false;
        } else {
            return true;
        }
    }

    function calculateTotalScore() {
        var total = 0;
        total += parseFloat(questionnaire.getAnswerByQuestionId("investment-term"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("return-expectation"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("poorly-performing-cash-in"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("investment-experience"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("tax-efficiency"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("paper-hands"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("investing-purpose"));
        return total;
    }

    function skipConditionalQuestion() {
        questionnaire.addSectionToSkipById("additional-notes");
    }

    function doNotSkipConditionalQuestion() {
        questionnaire.removeSectionToSkipById("additional-notes");
    }

    function onNext() {
        questionnaire.saveAnswersForCurrentSection();

        if (shouldConditionalQuestionBeSkipped()) {
            skipConditionalQuestion();
        } else {
            doNotSkipConditionalQuestion();
        }

        questionnaire.nextSection();

        if (shouldSubmitButtonBeShown()) {
            showSubmitButton();
        }
    }

    function onPrevious() {
        questionnaire.saveAnswersForCurrentSection();

        if (shouldConditionalQuestionBeSkipped()) {
            skipConditionalQuestion();
        } else {
            doNotSkipConditionalQuestion();
        }

        questionnaire.previousSection();

        if (shouldSubmitButtonBeShown()) {
            showSubmitButton();
        }
    }

    function shouldSubmitButtonBeShown() {
        return questionnaire.haveAllSectionsBeenAnswered();
    }

    function showSubmitButton() {
        var submit = document.getElementById("submit-button");
        submit.style.display = "block";
        console.log("Submit button displayed")
    }

    function onSubmit() {
        showResults();
    }
    var profile ="";
    var mix = "";
    function showResults() {

        document.getElementById("result-title").innerHTML = "Results";
        document.getElementById("result-subtitle").innerHTML = "Your responses have been saved. According to your responses, you are a:";

        var investorprofile = "";
        var investorprofiledesc = "";
        var benchmarkassetmix = "";

        const result = calculateTotalScore();
        if (result <= 100) {
            investorprofile = "Very Conservative 'Cash'";
            investorprofiledesc = "May be suitable for investors with a short-term investment horizon or a very low tolerance for risk, seeking a return similar to cash rates.";
            benchmarkassetmix = "100% Cash";
        } else if (result <= 140) {
            investorprofile = "Conservative 'Fixed Interest'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 3 years and a low risk tolerance, seeking higher than cash returns over the investment timeframe.";
            benchmarkassetmix = "100% Defensive";
        } else if (result <= 170) {
            investorprofile = "Moderately Conservative 'Capital Stable'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 3 years and a low to moderate risk tolerance, seeking regular income and the opportunity for some growth over the investment timeframe.";
            benchmarkassetmix = "70% Defensive, 30% Growth";
        } else if (result <= 200) {
            investorprofile = "Moderate 'Conservative Growth'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 3-5 years and a moderate risk tolerance, seeking a mix of income and growth over the investment timeframe from a well-diversified portfolio.  This strategy suits investors aiming for a return higher than what is likely from a portfolio dominated by defensive assets but who want lower volatility than what a share fund would likely generate.";
            benchmarkassetmix = "50% Defensive, 50% Growth";
        } else if (result <= 250) {
            investorprofile = "Assertive 'Balanced'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 5 years and a moderate risk tolerance, seeking more growth than income over the investment timeframe. This strategy suits investors aiming for a return higher than what is likely from a more defensive portfolio but who want lower volatility than what a share fund would likely generate.  ";
            benchmarkassetmix = "30% Defensive, 70% Growth";
        } else if (result <= 300) {
            investorprofile = "Moderately Aggressive 'Growth'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 5-7 years and a moderate to high risk tolerance, seeking a high exposure to growth assets.";
            benchmarkassetmix = "15% Defensive, 85% Growth";
        } else {
            investorprofile = "Aggressive 'Share'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 7 years and high risk tolerance, comfortable with a share portfolio dominated by Australian and international shares. ";
            benchmarkassetmix = "100% Growth";
        }

        document.getElementById("result-investorprofile").innerHTML = investorprofile;
        document.getElementById("result-investorprofiledesc").innerHTML = investorprofiledesc;
        document.getElementById("result-benchmarkassetmix").innerHTML = benchmarkassetmix;
        profile = investorprofile;
        mix = benchmarkassetmix;
        document.getElementById("result-card").style.display = "block";
        document.getElementById("questionnaire-card").style.display = "none";

        createCookie("answers", questionnaire.getQuestionsAndAnswersJSONString(), "1");

        // Function to create the cookie
        function createCookie(name, value, days) {
            var expires;

            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            }
            else {
                expires = "";
            }

            document.cookie = escape(name) + "=" +
                escape(value) + expires + "; path=/";
        }


    }

    function comparisonTool(){
        document.getElementById("risk").style.display = "none";
        document.getElementById("compare").style.display = "block";
        document.getElementById("result-card").style.display = "none";
        document.getElementById("result-profile").innerHTML = profile;
        document.getElementById("result-mix").innerHTML = mix;




    }

</script>




