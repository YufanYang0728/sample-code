<?php
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Building Wealth</h2>
            <h3 class="section-subheading text-muted">Answer the questionnaire</h3>
        </div>
        <div id="questionnaire-card" class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col-auto align-self-center">
                            <a class="prevBtnTop" onclick="onPrevious();">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <div class="col-6 align-content-center">
                            <h5 id="section-title" class="card-title text-center">Card title</h5>
                            <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                            <div class="d-flex justify-content-center">
                                <div id="section-input" class="col py-5">
                                    <!-- SECTION INPUTS WILL APPEAR HERE -->
                                </div>
                            </div>
                            <a id="submit-button" style="display:none" class="btn btn-primary mt-3" onclick="showResults()">Submit complete questionnaire</a>
                        </div>
                        <div class="col-auto align-self-center">
                            <a class="nextBtnTop" onclick="onNext();">
                                <i class="fas fa-chevron-right"></i>
                            </a>
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
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Compound interest: </h5>
                                    <h6 id="result-text" class="card-subtitle mb-2 text-muted text-center"></h6>
                                </div>
                                <div class="d-grid gap-2 col-md-6 mx-auto">
                                    <button type="button" class="btn btn-secondary" onclick="">Contact Me later</button>
                                    <a class="btn btn-primary mt-1" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'risk_profile']);?>">Start Now</a>
                                </div>
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

    var questionnaire = new Questionnaire('wealth-building', 'wealth-module', 'Used to understand your investing expectations and risk appetite');

    var question = new Question("100",
        new InputField("additional-question","int", "Enter your response here", "...", true)
    );

    var section = new Section("1", "Question 1","I would like to invest a lump sum of ____________ "+"<br>"+"Help: This is total lump sum that you would like to invest as a one-off contribution.")

    section.addQuestion(question);
    questionnaire.addSection(section);


    question = new Question("200",
        new InputField( "additional-question","int", "Enter your response here", "...", true)
    );
    var section = new Section("2", "Question 2", "I would like to invest _________ every month"+"<br>"+"Help: Your monthly contribution to the investment.")

    section.addQuestion(question);
    questionnaire.addSection(section);


    question = new Question("300",
        new InputField("additional-question","int", "Enter your response here", "...", true)
    );

    var section = new Section("3", "Question 3", "I would like to invest for __________ years"+"<br>"+"Help: Period (in years) during which you wish to build your wealth.")

    section.addQuestion(question);
    questionnaire.addSection(section);

    questionnaire.getCurrentSection().show();




    function onNext() {
        questionnaire.saveAnswersForCurrentSection();

        questionnaire.nextSection();

        initialDeposit = parseInt(questionnaire.getAnswerByQuestionId(100));
        regularDeposit = parseInt(questionnaire.getAnswerByQuestionId(200));
        interestFreq =parseInt(questionnaire.getAnswerByQuestionId(300));
        timeLengthInYears =parseInt(questionnaire.getAnswerByQuestionId(300));

        if (shouldSubmitButtonBeShown()) {
            showSubmitButton();
        }
    }

    function onPrevious() {
        questionnaire.saveAnswersForCurrentSection();

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
    }

    function onSubmit() {
        showResults();
    }



    function returnTimesPerYearFromAdverbial() {
        return 12;
    }

    function numberWithCommas(x) {
        //code snippet from https://stackoverflow.com/questions/2901102/how-to-print-a-number-with-commas-as-thousands-separators-in-javascript
        //add commas to large numbers
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }


    //get inputs from webpage


    var initialDeposit;

    const interestRatePercent = 3.5;

    const timesInterestAppliedPerYear = 1;

    var interestFreq;

    var regularDeposit;

    const regularDepositFreq = 1;

    var timeLengthInYears;






    function calcInterestEarnedAfterOneYear(initialPrincipal, interestRateDecimal, timesInterestApplied) {
        return (initialPrincipal * ((1 + (interestRateDecimal / timesInterestApplied)) ** timesInterestApplied)) - initialPrincipal;
    }

    function showResults() {


        //create regular deposit array and give it an initial value
        var regularDepositMultiplier = returnTimesPerYearFromAdverbial(regularDepositFreq);
        const regularDepositAccumulatedArray = [regularDepositMultiplier * regularDeposit];

        var timesInterestAppliedPerYear = returnTimesPerYearFromAdverbial(interestFreq);
        var totalInterestEarnedArray = [calcInterestEarnedAfterOneYear(initialDeposit, interestRatePercent/100, timesInterestAppliedPerYear)];
        var runningTotalArray = [initialDeposit + totalInterestEarnedArray[0] + regularDepositAccumulatedArray[0]];

        //calculate values for interest earned, regular deposit and total array
        const initialDepositAllTheWayArray = new Array(timeLengthInYears).fill(initialDeposit);
        const dateNow = new Date();
        const labelArray = new Array(timeLengthInYears).fill(null).map((_, i) => i + dateNow.getFullYear() + 1);

        for (let index = 1; index < timeLengthInYears; index++) {
            regularDepositAccumulatedArray[index] = regularDepositAccumulatedArray[index - 1] + regularDepositMultiplier * regularDeposit;
            totalInterestEarnedArray[index] = totalInterestEarnedArray[index - 1] + calcInterestEarnedAfterOneYear(runningTotalArray[index - 1], interestRatePercent / 100, timesInterestAppliedPerYear);
            runningTotalArray[index] = totalInterestEarnedArray[index] + regularDepositAccumulatedArray[index] + initialDeposit;
        }

        document.getElementById("result-text").innerHTML = "After " + numberWithCommas(timeLengthInYears) + " years, you will have a total of $"
            + numberWithCommas(runningTotalArray[runningTotalArray.length - 1].toFixed(2)) + " dollars, earning $"
            + numberWithCommas(totalInterestEarnedArray[totalInterestEarnedArray.length - 1].toFixed(2)) + " from interest.";


        document.getElementById("questionnaire-card").style.display = "none";

        document.getElementById("result-card").style.display = "block";
    }
</script>
