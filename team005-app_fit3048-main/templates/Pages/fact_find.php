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
            <h2 class="section-heading text-uppercase">Fact Find</h2>
            <h3 class="section-subheading text-muted">Please complete the questionnaire</h3>
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
    </div>
</section>
<?= $this->Html->script('questionnaire.js') ?>
<script>
    var questionnaire = new Questionnaire('fact-find', 'Fact Find', 'Used to get a general overview of your financial situation.');

    var section = new Section("personal-details", "Personal details", "Your personal information will be handled strictly in accordance with our privacy policy")

    section.addQuestion(new Question("formal-title",
        new SelectMenu("formal-title", "Title", "Please select your preferred title", [
            new SelectOption("Mr","Mr"),
            new SelectOption("Ms","Ms"),
            new SelectOption("Mrs","Mrs"),
            new SelectOption("Dr","Dr"),
            new SelectOption("Other","Other")
        ])
    ));

    section.addQuestion(new Question("surname",
        new InputField("surname", "text", "Surname", "...", false)
    ));

    section.addQuestion(new Question("given-names",
        new InputField("given-names", "text", "Given names", "...", false)
    ));

    section.addQuestion(new Question("preferred-name",
        new InputField("preferred-name", "text", "Preferred name", "...", false)
    ));

    section.addQuestion(new Question("marital-status",
        new SelectMenu("marital-status", "Marital status", "Please select your marital status", [
            new SelectOption("single","Single"),
            new SelectOption("unmarried","Unmarried"),
            new SelectOption("married","Married"),
            new SelectOption("defacto","Defacto"),
            new SelectOption("other","Other")
        ])
    ));

    section.addQuestion(new Question("dob",
        new InputField("dob", "date", "Date of birth", "...", false)
    ));

    section.addQuestion(new Question("dependents-number",
        new InputField("dependents-number", "text", "Number of dependants", "...", false)
    ));

    section.addQuestion(new Question("dependents-ages",
        new InputField("dependents-ages", "text", "Ages of dependants", "11, 15, 19", false)
    ));

    section.addQuestion(new Question("residential-address",
        new InputField("residential-address", "text", "Residential address", "...", false)
    ));

    section.addQuestion(new Question("residential-address-postcode",
        new InputField("residential-address-postcode", "text", "Residential address postcode", "...", false)
    ));

    section.addQuestion(new Question("postal-address",
        new InputField("postal-address", "text", "Postal address", "...", false)
    ));

    section.addQuestion(new Question("postal-address-postcode",
        new InputField("postal-address-postcode", "text", "Postal address postcode", "...", false)
    ));

    section.addQuestion(new Question("home-telephone",
        new InputField("home-telephone", "text", "Home telephone", "...", false),
        false //not required
    ));

    section.addQuestion(new Question("mobile-number",
        new InputField("mobile-number", "text", "Mobile number", "...", false)
    ));

    section.addQuestion(new Question("email-address",
        new InputField("email-address", "text", "Preferred email", "...", false)
    ));

    section.addQuestion(new Question("occupation",
        new InputField("occupation", "text", "Occupation", "...", false)
    ));

    section.addQuestion(new Question("employer",
        new InputField("employer", "text", "Employer", "...", false)
    ));

    section.addQuestion(new Question("work-status",
        new SelectMenu("work-status", "Work status", "Please select your employment status", [
            new SelectOption("full-time","Full-time employed"),
            new SelectOption("part-time","Part-time employed"),
            new SelectOption("self-employed","Self-employed"),
            new SelectOption("unemployed","Unemployed"),
            new SelectOption("casual","Casual"),
            new SelectOption("maternity-leave","Maternity leave"),
            new SelectOption("home-duties","Home duties"),
            new SelectOption("retired","Retired")
        ])
    ));

    questionnaire.addSection(section);

    section = new Section("partner-details", "Your partner's details", "<div class='red-text'>Partner</div>")

    section.addQuestion(new Question("partner-formal-title",
        new SelectMenu("partner-formal-title", "Title", "Please select your partner's preferred title", [
            new SelectOption("Mr","Mr"),
            new SelectOption("Ms","Ms"),
            new SelectOption("Mrs","Mrs"),
            new SelectOption("Dr","Dr"),
            new SelectOption("Other","Other")
        ]),
        false //not required
    ));

    section.addQuestion(new Question("partner-surname",
        new InputField("partner-surname", "text", "Surname", "...", false),
        false //not required
    ));

    section.addQuestion(new Question("partner-given-names",
        new InputField("partner-given-names", "text", "Given names", "...", false),
        false //not required
    ));

    section.addQuestion(new Question("partner-preferred-name",
        new InputField("partner-preferred-name", "text", "Preferred name", "...", false),
        false //not required
    ));

    section.addQuestion(new Question("partner-dob",
        new InputField("partner-dob", "date", "Date of birth", "...", false),
        false //not required
    ));

    section.addQuestion(new Question("partner-mobile-number",
        new InputField("partner-mobile-number", "text", "Mobile number", "...", false),
        false //not required
    ));

    section.addQuestion(new Question("partner-email-address",
        new InputField("partner-email-address", "text", "Preferred email", "...", false),
        false //not required
    ));

    section.addQuestion(new Question("partner-occupation",
        new InputField("partner-occupation", "text", "Occupation", "...", false),
        false //not required
    ));

    section.addQuestion(new Question("partner-employer",
        new InputField("partner-employer", "text", "Employer", "...", false),
        false //not required
    ));

    section.addQuestion(new Question("partner-work-status",
        new SelectMenu("partner-work-status", "Work status", "Please select your employment status", [
            new SelectOption("full-time","Full-time employed"),
            new SelectOption("part-time","Part-time employed"),
            new SelectOption("self-employed","Self-employed"),
            new SelectOption("unemployed","Unemployed"),
            new SelectOption("casual","Casual"),
            new SelectOption("maternity-leave","Maternity leave"),
            new SelectOption("home-duties","Home duties"),
            new SelectOption("retired","Retired")
        ]),
        false //not required
    ));

    questionnaire.addSection(section);

    section = new Section("referral-method", "How did you hear about us?", "Tell us how you made it here...");

    section.addQuestion(new Question("referral-method-option",
        new SelectMenu("referral-method-option", "Referral method", "Please select where you heard about us?", [
            new SelectOption("advert","Advertisement"),
            new SelectOption("seminar","Financial planning seminar"),
            new SelectOption("friends-family","Friends or family"),
            new SelectOption("cbus","CBUS"),
            new SelectOption("fpa","FPA"),
            new SelectOption("fsg","FSG"),
            new SelectOption("referral","Referral - please specify below"),
            new SelectOption("online","Online - please specify below")
        ])
    ));

    section.addQuestion(new Question("referral-method-details",
        new InputField("referral-method-details", "text", "Enter extra details here...", "...", false),
        false // not required
    ));

    questionnaire.addSection(section);

    section = new Section("personal-income", "Personal income", "Please fill out the fields according to your most recent payslip.");

    section.addQuestion(new Question("payslip-interval",
        new SelectMenu("payslip-interval", "Payslip frequency", "I get a payslip like this every...", [
            new SelectOption("year","year"),
            new SelectOption("month","month"),
            new SelectOption("fortnight","fortnight"),
            new SelectOption("week","week")
        ])
    ));

    section.addQuestion(new Question("salary-gross",
        new InputField("salary-gross", "text", "Salary (gross)", "...", false)
    ));

    section.addQuestion(new Question("salary-net",
        new InputField("salary-net", "text", "Salary (net)", "...", false)
    ));

    section.addQuestion(new Question("social-sec",
        new InputField("social-sec", "text", "Social security or family allowance", "...", false),
        false // not required
    ));

    section.addQuestion(new Question("rental",
        new InputField("rental", "text", "Rental", "...", false),
        false // not required
    ));

    section.addQuestion(new Question("other",
        new InputField("other", "text", "Other", "...", false),
        false // not required
    ));

    section.addQuestion(new Question("total",
        new InputField("total", "text", "Total", "...", false),
        false // not required
    ));

    section.addQuestion(new Question("income-changes",
        new InputField("income-changes", "text", "Are there any expected changes to your future income?", "...", true)
    ));

    questionnaire.addSection(section);

    section = new Section("partner-income", "Partner income", "Please fill out the fields according to <span class='red-text'>your partner's</span> most recent payslip.");

    section.addQuestion(new Question("partner-payslip-interval",
        new SelectMenu("partner-payslip-interval", "Payslip frequency", "My partner gets a payslip like this every...", [
            new SelectOption("year","year"),
            new SelectOption("month","month"),
            new SelectOption("fortnight","fortnight"),
            new SelectOption("week","week")
        ])
    ));

    section.addQuestion(new Question("partner-salary-gross",
        new InputField("partner-salary-gross", "text", "Salary (gross)", "...", false)
    ));

    section.addQuestion(new Question("partner-salary-net",
        new InputField("partner-salary-net", "text", "Salary (net)", "...", false)
    ));

    section.addQuestion(new Question("partner-social-sec",
        new InputField("partner-social-sec", "text", "Social security or family allowance", "...", false),
        false // not required
    ));

    section.addQuestion(new Question("partner-rental",
        new InputField("partner-rental", "text", "Rental", "...", false),
        false // not required
    ));

    section.addQuestion(new Question("partner-other",
        new InputField("partner-other", "text", "Other", "...", false),
        false // not required
    ));

    section.addQuestion(new Question("partner-total",
        new InputField("partner-total", "text", "Total", "...", false),
        false // not required
    ));

    section.addQuestion(new Question("partner-income-changes",
        new InputField("partner-income-changes", "text", "Are there any expected changes to your future income?", "...", true)
    ));

    questionnaire.addSection(section);

    section = new Section("personal-protection-insurance", "Protection Insurance", "Personal");

    section.addQuestion(new Question("life-insurance-provider",
        new InputField("life-insurance-provider", "text", "Life insurance provider", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("life-insurance-cover",
        new InputField("life-insurance-cover ", "text", "Life insurance level of cover", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("life-insurance-premium",
        new InputField("life-insurance-premium", "text", "Life insurance monthly/annual premiums ($)", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("income-protection-provider",
        new InputField("income-protection-provider", "text", "Income protection insurance provider", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("income-protection-cover",
        new InputField("income-protection-cover ", "text", "Income protection level of cover", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("income-protection-premium",
        new InputField("income-protection-premium", "text", "Income protection monthly/annual premiums ($)", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("trauma-insurance-provider",
        new InputField("trauma-insurance-provider", "text", "Trauma insurance provider", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("trauma-insurance-cover",
        new InputField("trauma-insurance-cover", "text", "Trauma insurance level of cover", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("trauma-insurance-premium",
        new InputField("trauma-insurance-premium", "text", "Trauma insurance monthly/annual premiums ($)", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("other-insurance-type",
        new InputField("other-insurance-type", "text", "Other insurance type", "...", false),
        true //true if input is required, false if not
    ));

    section.addQuestion(new Question("text-input-question",
        new InputField("text-input-question", "text", "Other insurance provider", "...", false),
        true //true if input is required, false if not
    ));

    section.addQuestion(new Question("trauma-insurance-cover",
        new InputField("trauma-insurance-cover", "text", "Trauma insurance level of cover", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("trauma-insurance-premium",
        new InputField("trauma-insurance-premium", "text", "Trauma insurance monthly/annual premiums ($)", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("smoker",
        new SelectMenu("smoker", "Are you a smoker?", "Are you a smoker?", [
            new SelectOption("yes","Yes"),
            new SelectOption("no","No")
        ]),
        true //true if input is required, false if not
    ));

    section.addQuestion(new Question("health-conditions",
        new SelectMenu("health-conditions", "Do you have preexisting health conditions?", "Do you have preexisting health conditions?", [
            new SelectOption("yes","Yes"),
            new SelectOption("no","No")
        ]),
        true //true if input is required, false if not
    ));

    questionnaire.addSection(section);

    section = new Section("partner-protection-insurance", "Protection Insurance", "<span class='red-text'>Partner</span>");

    section.addQuestion(new Question("partner-life-insurance-provider",
        new InputField("partner-life-insurance-provider", "text", "Life insurance provider", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-life-insurance-cover",
        new InputField("partner-life-insurance-cover ", "text", "Life insurance level of cover", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-life-insurance-premium",
        new InputField("partner-life-insurance-premium", "text", "Life insurance monthly/annual premiums ($)", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-income-protection-provider",
        new InputField("partner-income-protection-provider", "text", "Income protection insurance provider", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-income-protection-cover",
        new InputField("partner-income-protection-cover ", "text", "Income protection level of cover", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-income-protection-premium",
        new InputField("partner-income-protection-premium", "text", "Income protection monthly/annual premiums ($)", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-trauma-insurance-provider",
        new InputField("partner-trauma-insurance-provider", "text", "Trauma insurance provider", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-trauma-insurance-cover",
        new InputField("partner-trauma-insurance-cover", "text", "Trauma insurance level of cover", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-trauma-insurance-premium",
        new InputField("partner-trauma-insurance-premium", "text", "Trauma insurance monthly/annual premiums ($)", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-other-insurance-type",
        new InputField("partner-other-insurance-type", "text", "Other insurance type", "...", false),
        true //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-text-input-question",
        new InputField("partner-text-input-question", "text", "Other insurance provider", "...", false),
        true //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-trauma-insurance-cover",
        new InputField("partner-trauma-insurance-cover", "text", "Trauma insurance level of cover", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-trauma-insurance-premium",
        new InputField("partner-trauma-insurance-premium", "text", "Trauma insurance monthly/annual premiums ($)", "...", false),
        false //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-smoker",
        new SelectMenu("partner-smoker", "Are you a smoker?", "Are you a smoker?", [
            new SelectOption("yes","Yes"),
            new SelectOption("no","No")
        ]),
        true //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-health-conditions",
        new SelectMenu("partner-health-conditions", "Does your partner have preexisting health conditions?", "Does your partner have preexisting health conditions?", [
            new SelectOption("yes","Yes"),
            new SelectOption("no","No")
        ]),
        true //true if input is required, false if not
    ));

    questionnaire.addSection(section);


    section = new Section("estate-planning", "Estate Planning", "Personal");

    section.addQuestion(new Question("current-will",
        new SelectMenu("current-will", "Do you have a current will?", "Do you have a current will?", [
            new SelectOption("yes","Yes"),
            new SelectOption("yes","No")
        ]),
        true //true if input is required, false if not
    ));

    section.addQuestion(new Question("enduring-power-of-attorney",
        new SelectMenu("enduring-power-of-attorney", "Have you organised your enduring power of attorney?", "Have you organised your enduring power of attorney?", [
            new SelectOption("yes","Yes"),
            new SelectOption("no","No")
        ]),
        true //true if input is required, false if not
    ));

    section.addQuestion(new Question("estate-planning-extra-details",
        new InputField("estate-planning-extra-details", "text", "Enter extra details here... ", "...", false),
        false //true if input is required, false if not
    ));

    questionnaire.addSection(section);

    questionnaire.getCurrentSection().show();


    section = new Section("partner-estate-planning", "Estate Planning", "<span class='red-text'>Partner</span>");

    section.addQuestion(new Question("partner-current-will",
        new SelectMenu("partner-current-will", "Do you have a current will?", "Do you have a current will?", [
            new SelectOption("yes","Yes"),
            new SelectOption("yes","No")
        ]),
        true //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-enduring-power-of-attorney",
        new SelectMenu("partner-enduring-power-of-attorney", "Have you organised your enduring power of attorney?", "Have you organised your enduring power of attorney?", [
            new SelectOption("yes","Yes"),
            new SelectOption("no","No")
        ]),
        true //true if input is required, false if not
    ));

    section.addQuestion(new Question("partner-estate-planning-extra-details",
        new InputField("partner-estate-planning-extra-details", "text", "Enter extra details here... ", "...", false),
        false //true if input is required, false if not
    ));

    questionnaire.addSection(section);
    questionnaire.init();


    function shouldPartnerQuestionsBeSkipped() {
        if (questionnaire.getAnswerByQuestionId("marital-status") == "single") {
            return true;
        } else {
            return false;
        }
    }


    const sectionIdsToSkip = ["partner-details","partner-income","partner-protection-insurance","partner-estate-planning"];
    function addPartnerQuestionsToSectionsToSkip() {
        for (var i = 0; i < sectionIdsToSkip.length; i++) {
            questionnaire.addSectionToSkipById(sectionIdsToSkip[i]);
        }
    }
    function removePartnerQuestionsFromSectionsToSkip() {
        for (var i = 0; i < sectionIdsToSkip.length; i++) {
            questionnaire.removeSectionToSkipById(sectionIdsToSkip[i]);
        }
    }

    function onNext() {
        questionnaire.saveAnswersForCurrentSection();

        if (shouldPartnerQuestionsBeSkipped()) {
            addPartnerQuestionsToSectionsToSkip();
        } else {
            removePartnerQuestionsFromSectionsToSkip();
        }

        questionnaire.nextSection();

        if (shouldSubmitButtonBeShown()) {
            showSubmitButton();
        }
    }

    function onPrevious() {
        questionnaire.saveAnswersForCurrentSection();

        if (shouldPartnerQuestionsBeSkipped()) {
            addPartnerQuestionsToSectionsToSkip();
        } else {
            removePartnerQuestionsFromSectionsToSkip();
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
    }

    function onSubmit() {
        showResults();
    }

    function showResults() {
    }

</script>
