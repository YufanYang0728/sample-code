$(document).ready(function() {
    let currentCard = 0;
    const totalCards = $('.question-card').length;
    function updateProgressBar() {
        let percentage = (currentCard / totalCards) * 100;
        $('#progress-bar').css('width', percentage + '%');
    }

    function validateDate(dateField) {
        const dateValue = dateField.val();
        if (dateValue) {
            const pattern = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;
            if (pattern.test(dateValue)) {
                if (dateField.hasClass('previous-date')) {
                    const dateParts = dateValue.split('/');
                    const inputDate = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
                    const yesterday = new Date();
                    yesterday.setDate(yesterday.getDate() - 1);

                    return inputDate <= yesterday;
                }

                return true;
            }
        }

        return false;
    }

    function checkAndProceed(callback) {
        const previousDateField = $('.previous-date:visible');
        if (previousDateField.length > 0 && !validateDate(previousDateField)) {
            alert('Please enter a valid previous date in dd/mm/yyyy format and no later than yesterday.');
            return;
        }

        const anyDateField = $('.any-date:visible');
        if (anyDateField.length > 0 && !anyDateField.val()) {
            alert('Please select a valid date.');
            return;
        }

        const yesNoQuestion = $('.question-card').eq(currentCard).find('input[type="radio"]');
        const radioGroupName = yesNoQuestion.attr('name');
        if (yesNoQuestion.length > 0 && !$(`input[name="${radioGroupName}"]:checked`).val()) {
            alert('Please answer the Yes/No question.');
            return;
        }

        callback();
    }

    function nextQuestion() {
        if (currentCard < totalCards - 1) {
            $('.question-card').eq(currentCard).hide();
            $('.question-card').eq(currentCard + 1).show();
            currentCard++;
            updateProgressBar();
        }
    }

    function previousQuestion() {
        if (currentCard > 0) {
            $('.question-card').eq(currentCard).hide();
            $('.question-card').eq(currentCard - 1).show();
            currentCard--;
            updateProgressBar();
        }
    }

    $('.select-css').select2({
        width: '100%'
    });

    $('.next-btn').click(function() {
        checkAndProceed(nextQuestion);
    });

    $('.prev-btn').click(function() {
        checkAndProceed(previousQuestion);
    });

    $('#restart-btn').click(function() {
        $('.question-card').hide();
        $('.question-card').eq(0).show();
        currentCard = 0;
        updateProgressBar();
    });

    $('#questionnaire-form').submit(function(e) {
        let allFilled = true;
        $('.question-card').each(function() {
            let inputs = $(this).find('input:visible, select:visible, textarea:visible');
            inputs.each(function() {
                if (!$(this).val()) {
                    allFilled = false;
                }
            });
        });

        if (!allFilled) {
            alert('Please answer all the questions before submitting.');
            e.preventDefault();
        }
    });

});

    // JavaScript code for updating the progress indicator
    const currentQuestionIndexElement = document.getElementById('current-question-index');
    const nextButtons = document.querySelectorAll('.next-btn');
    const prevButtons = document.querySelectorAll('.prev-btn');

    let currentQuestionIndex = 1;

    nextButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        currentQuestionIndex = index + 2; // Index is 0-based, so add 2
        updateProgressIndicator();
    });
});

    prevButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        currentQuestionIndex = index + 1; // Index is 0-based, so add 1
        updateProgressIndicator();
    });
});

    function updateProgressIndicator() {
    currentQuestionIndexElement.textContent = currentQuestionIndex;
}
