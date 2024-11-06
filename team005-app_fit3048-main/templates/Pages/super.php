<?php

// Connect to database
$con = mysqli_connect("localhost", "superuser", "superuser", "advise_dev");

// mysqli_connect("servername","username","password","database_name")

// Get all the investments from investment table
$sql = "SELECT * FROM `super`";
$all_supers = mysqli_query($con, $sql);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Custom styles for this template -->
    <link href="../webroot/css/form-validation.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .hide {
            display: none;
        }
    </style>
</head>

<body class="bg-light">

    <form action="test1" method="get">
        <div class="container">
            <main class="py-5 text-center">
                <div class="py-5 text-center">
                    <h2 class="section-heading text-uppercase">Superannuation Advice</h2>
                    <p class="section-subheading text-muted">Let's help you retire wealthier!</p>
                </div>
                <div id="investment_form">
                    <form>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <p class="lead">Do you currently have any existing superannuation accounts?</p>
                            </div>
                            <div class="col-auto">
                                <select class="form-select" id="test" name="form_select">
                                    <option value="" disabled selected>Choose..</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="hide" id="selectNo">
                        <form>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <p class="lead">How much do you plan to invest?</p>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" type="number" min="0" placeholder="$" id="invest" name="investment" style="width:200px">
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-lg btn-block mt-5" onclick="riskProfileShow();" type="button">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="hide" id="selectYes">
                        <div class="allHere" id="allHere">
                            <div class="form-group fieldGroup">

                                <form action="test1" method="get" class="pb-2">
                                    <div class="row" id="titles">
                                        <div class="col-3">
                                            <h5>Super fund</h5>
                                        </div>
                                        <div class="col-5" id="product">
                                            <h5>Investment</h5>
                                        </div>
                                        <div class="col-3">
                                            <h5>Amount</h5>
                                        </div>
                                    </div>
                                    <div class="row" id="investment">
                                        <div class="col-3">
                                            <select class="form-select" id="CompanyName" name="CompanyName" required>
                                                <option value="" disabled selected>Select your option</option>
                                                <option>Aware</option>
                                                <option>Cbus</option>
                                                <option>Rest</option>
                                            </select>
                                        </div>

                                        <div class="col-5" id="product">
                                            <select class="form-select" id="percentage" name="percentage" required>
                                                <?php
                                                // use a while loop to fetch data from the $all_investment variable and individually display as an option
                                                while ($super = mysqli_fetch_array(
                                                    $all_supers,
                                                    MYSQLI_ASSOC
                                                )) :;
                                                ?>
                                                    <option value="<?php echo $super["admin_fee"];
                                                                    // return value is admin fee percentage
                                                                    ?>">
                                                        <?php echo $super["super_name"];
                                                        // To show the investment name to the user
                                                        ?>
                                                    </option>
                                                <?php
                                                endwhile;
                                                // While loop must be terminated
                                                ?>
                                            </select>
                                        </div>

                                        <div class="col-3" id="amount">
                                            <input class="form-control" type="number" min="0" placeholder="$" id="invested" name="invested" onkeyup="myFunction()" />
                                        </div>

                                        <div class="col-1">
                                            <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-lg btn-block mt-5" onclick="riskProfileShow();" type="button">Submit</button>
                        </div>
                    </div>


                    <!-- copy of input fields group -->
                    <?php

                    // Connect to database
                    $con = mysqli_connect("localhost", "superuser", "superuser", "advise_dev");

                    // mysqli_connect("servername","username","password","database_name")

                    // Get all the investments from investment table
                    $sql = "SELECT * FROM `super`";
                    $all_supers = mysqli_query($con, $sql);

                    ?>
                    <div class="form-group fieldGroupCopy" style="display: none;">
                        <div class="row pb-2" id="investment">
                            <div class="col-3">
                                <select class="form-select" id="CompanyName" name="CompanyName" required>
                                    <option value="" disabled selected>Select your option</option>
                                    <option>Aware</option>
                                    <option>Cbus</option>
                                    <option>Rest</option>
                                </select>
                            </div>

                            <div class="col-5" id="product">
                                <select class="form-select" id="percentage" name="percentage" required>
                                    <?php
                                    // use a while loop to fetch data from the $all_investment variable and individually display as an option
                                    while ($super = mysqli_fetch_array(
                                        $all_supers,
                                        MYSQLI_ASSOC
                                    )) :;
                                    ?>
                                        <option value="<?php echo $super["admin_fee"];
                                                        // return value is admin fee percentage
                                                        ?>">
                                            <?php echo $super["super_name"];
                                            // To show the investment name to the user
                                            ?>
                                        </option>
                                    <?php
                                    endwhile;
                                    // While loop must be terminated
                                    ?>
                                </select>
                            </div>

                            <div class="col-3" id="amount">
                                <input class="form-control" type="number" min="0" placeholder="$" id="invested" name="invested">
                            </div>

                            <div class="col-1">
                                <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span><i class="fas fa-minus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                /**
                 * @var \App\View\AppView $this
                 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
                 */

                #include 'upload.php';
                ?>

                <div id="risk_profile" class="hide">
                    <div class="container">
                        <div id="questionnaire-card" class="card">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row justify-content-around pb-3">
                                        <div class="col-auto col-md-10 align-self-center">
                                            <h5 class="card-title text-center">Risk profile: <span id="section-title">Card title</span></h5>
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
                                        </div>
                                        <a id="submit-button" style="display:none" class="btn btn-primary mt-3" onclick="showResults()">Submit complete questionnaire</a>
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
                                                <p id="result-amountSaved" class="text-center text-muted">Amount Saved</p>
                                                <h2 id="result-recommendation" class="text-center">Recommendation</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->Html->script('questionnaire.js') ?>
                <script>
                    var questionnaire = new Questionnaire('risk-profile', 'Risk Profile', 'Used to understand your investing expectations and risk appetite');

                    var question = new Question("investment-term",
                        new SelectMenu("investment-term", "investment term", "Please select an answer...", [
                            new SelectOption(10, "Less than 12 months", false),
                            new SelectOption(20, "Between 1 and 3 years", false),
                            new SelectOption(30, "Between 3 and 5 years", false),
                            new SelectOption(40, "Between 5 and 7 years", false),
                            new SelectOption(50, "Longer than 7 years", false)
                        ])
                    );
                    var section = new Section("investment-term", "Question 1", "For how long would you expect most of your money to be invested before you would need to access it?")
                    section.addQuestion(question);
                    questionnaire.addSection(section);

                    question = new Question("return-expectation",
                        new SelectMenu("return-expectation", "return expectation", "Please select an answer...", [
                            new SelectOption(10, "A reasonable return without losing any capital", false),
                            new SelectOption(20, "1-3%", false),
                            new SelectOption(30, "4-6%", false),
                            new SelectOption(40, "7-9%", false),
                            new SelectOption(50, "Over 9%", false)
                        ])
                    );
                    var section = new Section("return-expectation", "Question 2", "If you consider current interest rates what overall level of return (after inflation) do you reasonably expect to achieve from your investments over the period you wish to invest for?")
                    section.addQuestion(question);
                    questionnaire.addSection(section);

                    question = new Question("poorly-performing-cash-in",
                        new SelectMenu("poorly-performing-cash-in", "poorly performing cash in", "Please select an answer...", [
                            new SelectOption(0, "You would cash it in if there was any loss in value", false),
                            new SelectOption(10, "Less than 1 year", false),
                            new SelectOption(20, "Up to 3 years", false),
                            new SelectOption(30, "Up to 5 years", false),
                            new SelectOption(40, "Up to 7 years", false),
                            new SelectOption(50, "Up to 10 years", false)
                        ])
                    );
                    var section = new Section("poorly-performing-cash-in", "Question 3", "Assuming you had no need for capital, how long would you allow a poorly performing investment to continue before cashing it in (assuming the poor performance was mainly due to market influences)?")
                    section.addQuestion(question);
                    questionnaire.addSection(section);

                    question = new Question("investment-experience",
                        new SelectMenu("investment-experience", "investment-experience", "Please select an answer...", [
                            new SelectOption(10, "Very little understanding or interest", false),
                            new SelectOption(20, "Not very familiar", false),
                            new SelectOption(30, "Have had enough experience to understand the importance of diversification", false),
                            new SelectOption(40, "I understand that markets may fluctuate and that different market sectors offer different income, growth and taxation characteristics.", false),
                            new SelectOption(50, "I am experienced with all investment classes and understand the various factors that may influence performance.", false)
                        ])
                    );
                    var section = new Section("investment-experience", "Question 4", "How familiar are you with investment markets?")
                    section.addQuestion(question);
                    questionnaire.addSection(section);

                    question = new Question("tax-efficiency",
                        new SelectMenu("tax-efficiency", "tax efficiency", "Please select an answer...", [
                            new SelectOption(10, "Preferably guaranteed returns, ahead of tax-savings", false),
                            new SelectOption(20, "Stable, reliable returns with minimal tax savings", false),
                            new SelectOption(30, "Some variability in returns, some tax savings", false),
                            new SelectOption(40, "Moderate variability in returns, reasonable tax savings", false),
                            new SelectOption(50, "Higher variability but potentially higher returns, maximising tax savings", false)
                        ])
                    );
                    var section = new Section("tax-efficiency", "Question 5", "There is generally a greater tax efficiency when investing in more volatile investments. With this in mind, which of the following would you be more comfortable with?")
                    section.addQuestion(question);
                    questionnaire.addSection(section);

                    question = new Question("paper-hands",
                        new SelectMenu("paper-hands", "portfolio decrease scenario", "Please select an answer...", [
                            new SelectOption(10, "Horror – Security of your capital is critical and you do not intend to take risks.", false),
                            new SelectOption(20, "You would cut your losses and transfer your funds to more secure investment sectors.", false),
                            new SelectOption(30, "You would be concerned, but would wait to see if the investments improve.", false),
                            new SelectOption(40, "This was a risk you understood – you would leave your investments in place expecting performance to improve.", false),
                            new SelectOption(50, "You would invest more funds to take advantage of the lower unit/share prices expecting future growth.", false)
                        ])
                    );
                    var section = new Section("paper-hands", "Question 6", "What would your reaction be if six months after placing your investments, you discovered that due mainly to market conditions your portfolio had decreased in value by 20%?")
                    section.addQuestion(question);
                    questionnaire.addSection(section);

                    question = new Question("investing-purpose",
                        new SelectMenu("investing-purpose", "investment purpose", "Please select an answer...", [
                            new SelectOption(50, "You have an investment time frame of over 5 years. You understand investment markets and are mainly investing for growth to accumulate long-term wealth, or are prepared to use aggressive investments to provide income.", false),
                            new SelectOption(40, "You are not nearing retirement, have surplus funds to invest and are aiming to accumulate long term wealth from a balanced portfolio.", false),
                            new SelectOption(30, "You have a lump sum (eg inheritance or a superannuation rollover payment from your employer) and you are uncertain about what sort of investment alternatives are available.", false),
                            new SelectOption(20, "You are nearing retirement and you are investing to ensure you have sufficient funds available to enjoy your retirement.", false),
                            new SelectOption(20, "You have some specific objectives within the next 5 years for which you want to accumulate sufficient funds.", false),
                            new SelectOption(10, "You want to provide a regular income and/or totally protect the value of your investment capital.", false)
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

                    function showResults() {
                        var c = document.getElementById("card_display");
                        var r = document.getElementById("risk_profile");
                        if (c.style.display === "block") {
                            c.style.display = "none";
                        } else if (r.style.display === "none") {
                            r.style.display = "block";
                        } else {
                            c.style.display = "block";
                            r.style.display = "none";
                        }
                        document.getElementById("result-title").innerHTML = "Results";
                        document.getElementById("result-subtitle").innerHTML = "Your responses have been saved. According to your responses, the result is shown below:";


                        var investmentrec = "";
                        var amountSaved = "";
                        var currAmount = "";
                        var newAmount = "";

                        var dollar = "$";
                        var perYear = "per year";

                        const result = calculateTotalScore();
                        if (result <= 100) {
                            investmentrec = "Netwealth Cash";
                            amountSaved = calcTotall();
                            currAmount = calcTotall();
                            newAmount = (currAmount - amountSaved).toFixed(2);

                        } else if (result <= 140) {

                            investmentrec = "Aberdeen Australian Fixed Income";
                            amountSaved = (calcTotall() - (totalAmount() * (0.51 / 100))).toFixed(2);
                            currAmount = calcTotall();
                            newAmount = (currAmount - amountSaved).toFixed(2)
                        } else if (result <= 170) {

                            investmentrec = "Vanguard Conservative Index";
                            amountSaved = (calcTotall() - (totalAmount() * (0.33 / 100))).toFixed(2);
                            currAmount = calcTotall();
                            newAmount = (currAmount - amountSaved).toFixed(2)
                        } else if (result <= 200) {

                            investmentrec = "Vanguard Balanced Index Fund";
                            amountSaved = (calcTotall() - (totalAmount() * (0.34 / 100))).toFixed(2);
                            currAmount = calcTotall();
                            newAmount = (currAmount - amountSaved).toFixed(2)
                        } else if (result <= 250) {

                            investmentrec = "Pengana Global Resources";
                            amountSaved = calcTotall();
                            currAmount = calcTotall();
                            newAmount = (currAmount - amountSaved).toFixed(2)
                        } else if (result <= 300) {

                            investmentrec = "SGH ICE";
                            amountSaved = (calcTotall() - (totalAmount() * (1.18 / 100))).toFixed(2);
                            currAmount = calcTotall();
                            newAmount = (currAmount - amountSaved).toFixed(2)
                        } else {
                            investmentrec = "Vanguard Australian Shares Index";
                            amountSaved = (calcTotall() - (totalAmount() * (0.46 / 100))).toFixed(2);
                            currAmount = calcTotall();
                            newAmount = (currAmount - amountSaved).toFixed(2)
                        }

                        //generate output
                        var currStr = currAmount + "";
                        currAmount = dollar + currStr + " " + perYear;
                        var newStr = newAmount + "";
                        newAmount = dollar + newStr + " " + perYear;
                        var savedStr = amountSaved + "";
                        amountSaved = dollar + savedStr + " " + perYear;


                        document.getElementById("result-recommendation").innerHTML = investmentrec;
                        document.getElementById("result-amountSaved").innerHTML = amountSaved;
                        document.getElementById("recommendation-output").innerHTML = investmentrec;
                        document.getElementById("amountSaved-output").innerHTML = amountSaved;
                        document.getElementById("currAmount-output").innerHTML = currAmount;
                        document.getElementById("newAmount-output").innerHTML = newAmount;
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
                            } else {
                                expires = "";
                            }

                            document.cookie = escape(name) + "=" +
                                escape(value) + expires + "; path=/";
                        }


                    }
                </script>

                <script>
                    $(document).ready(function() {
                        //group add limit
                        var maxGroup = 100;

                        //add more fields group
                        $(".addMore").click(function() {
                            if ($('body').find('.fieldGroup').length < maxGroup) {
                                var fieldHTML = '<div class="form-group fieldGroup" id="form-group fieldGroup">' + $(".fieldGroupCopy").html() + '</div>';
                                $('body').find('.fieldGroup:last').after(fieldHTML);
                            } else {
                                alert('Maximum ' + maxGroup + ' groups are allowed.');
                            }
                        });

                        //remove fields group
                        $("body").on("click", ".remove", function() {
                            $(this).parents(".fieldGroup").remove();
                        });

                    });
                    document.getElementById('test').addEventListener('change', function() {
                        var style = this.value == 1 ? 'block' : 'none';
                        document.getElementById('selectYes').style.display = style;
                    });
                    document.getElementById('test').addEventListener('change', function() {
                        var style = this.value == 0 ? 'block' : 'none';
                        document.getElementById('selectNo').style.display = style;
                    });

                    function riskProfileShow() {
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
                </script>

    </form>
    </main>

    <script>
        function totalAmount() {
            const allHere = document.getElementById('allHere');
            const rows = allHere.children;
            var total = 0;

            //get user's input amount
            const amountArray = [];
            var amountIndex = 0;
            for (let amount of rows) {
                console.log(amount.querySelector('#invested').value);
                amountArray[amountIndex] = amount.querySelector('#invested').value;
                amountIndex++;
            }
            for (let totalIndex = 0; totalIndex < amountIndex; totalIndex++) {
                total += parseInt(amountArray[totalIndex]);
            }
            let newTotal = total.toFixed(1);
            return newTotal;

        }
    </script>
    <script>
        function calcTotall() {
            const allHere = document.getElementById('allHere');
            const rows = allHere.children;
            var total = 0;

            //get user's input amount
            const amountArray = [];
            var amountIndex = 0;
            for (let amount of rows) {
                console.log(amount.querySelector('#invested').value);
                amountArray[amountIndex] = amount.querySelector('#invested').value;
                amountIndex++;
            }

            //get investment product admin fee percentage
            const percentageArray = [];
            var percentageIndex = 0;
            for (let product of rows) {
                console.log(product.querySelector('#percentage').value);
                percentageArray[percentageIndex] = product.querySelector('#percentage').value;
                percentageIndex++;
            }

            //Calculate final value
            for (let totalIndex = 0; totalIndex < percentageIndex; totalIndex++) {
                total += amountArray[totalIndex] * percentageArray[totalIndex] / 100;
            }
            let newTotal = total.toFixed(1);
            return newTotal;


        }
    </script>

    <script>
        function calcTotal() {
            const allHere = document.getElementById('allHere');
            const rows = allHere.children;
            var total = 0;

            //get user's input amount
            const amountArray = [];
            var amountIndex = 0;
            for (let amount of rows) {
                console.log(amount.querySelector('#invested').value);
                amountArray[amountIndex] = amount.querySelector('#invested').value;
                amountIndex++;
            }

            //get investment product admin fee percentage
            const percentageArray = [];
            var percentageIndex = 0;
            for (let product of rows) {
                console.log(product.querySelector('#percentage').value);
                percentageArray[percentageIndex] = product.querySelector('#percentage').value;
                percentageIndex++;
            }

            //Calculate final value
            for (let totalIndex = 0; totalIndex < percentageIndex; totalIndex++) {
                total += amountArray[totalIndex] * percentageArray[totalIndex] / 100;
            }


            console.log(total);
            console.log(amountArray);
            console.log(percentageArray);
            let finaltotal = total.toFixed(2);
            document.getElementById("output").innerHTML = finaltotal;
        }
    </script>

<div class="hide" id="card_display">
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <div class="card border-info mb-3">
                    <?php echo $this->Html->image('macquarie-logo.jpg', ['alt' => 'Macquarie logo', 'class' => 'img-fluid m-2']); ?>
                    <div class="card-header bg-light d-flex p-2 bd-highlight">
                        <h6 class="text-muted mb-0">Our recommendation:</h6>
                    </div>
                    <div class="card-body text-white bg-primary d-flex p-2 bd-highlight">
                        <p class="mb-0" id=recommendation-output></p>
                    </div>
                    <div class="card-header bg-light d-flex p-2 bd-highlight">
                        <h6 class="text-muted mb-0">Total amount:</h6>
                    </div>
                    <div class="card-body text-white bg-primary d-flex p-2 bd-highlight ">
                        <p class="mb-0" id=currAmount-output></p>
                    </div>
                    <div class="card-header bg-light d-flex p-2 bd-highlight">
                        <h6 class="text-muted mb-0">Your annual super fund fees will be:</h6>
                    </div>
                    <div class="card-body text-white bg-primary d-flex p-2 bd-highlight">
                        <p class="mb-0" id=newAmount-output></p>
                    </div>
                    <div class="card-header bg-light d-flex p-2 bd-highlight">
                        <h6 class="text-muted mb-0">You will save:</h6>
                    </div>
                    <div class="card-body text-white bg-primary d-flex p-2 bd-highlight">
                        <p class="mb-0" id=amountSaved-output></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
    echo $this->Html->css("/webroot/css/investment.css");
    echo $this->Html->script("/webroot/js/investment.js");
    ?>

</body>

</html>
