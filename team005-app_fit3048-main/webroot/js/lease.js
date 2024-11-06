
const btn = document.getElementById('Submit');
btn.addEventListener('click',getInput);
/*
Loan_Amount.oninput = function () {
    const maxlength = 8;
    if (this.value.length > maxlength) {
        this.value = this.value.slice(0,maxlength);
    }
}

Terms_of_Loan.oninput = function () {
    const maxlength = 2;
    if (this.value.length > maxlength ) {
        this.value = this.value.slice(0,maxlength);
    }
}

Number_of_Payment_Annually.oninput = function () {
    const maxlength = 2;
    if (this.value.length > maxlength ) {
        this.value = this.value.slice(0,maxlength);
    }
}
*/

function getInput()
{
    const Loan_Date = document.getElementById("Loan_Date").value;
    const Loan_Amount = document.getElementById("Loan_Amount").value;
    const Interest_Rate = document.getElementById("Annual_Interest_Rate").value;
    const Interest_Rate_Percent = Interest_Rate / 100;
    const Loan_Term = document.getElementById("Terms_of_Loan").value;
    const No_Payment = document.getElementById("Number_of_Payment_Annually").value;
    const Loan_Date_String = Loan_Date.toString();
    let minDate = new Date();
    let maxDate = new Date();
    minDate.setFullYear(minDate.getFullYear() - 18);
    maxDate.setFullYear(maxDate.getFullYear() - 120);


    if (Loan_Date !== "" && Loan_Amount !== 0 && Interest_Rate !== 0 && Loan_Term !== 0 && No_Payment !== 0) {
        const Final_Payment_Date = new Date(Date.parse(Loan_Date_String));
        console.log(parseInt(Final_Payment_Date.getFullYear().toString()), parseInt(minDate.getFullYear().toString()), parseInt(maxDate.getFullYear().toString()));
        // if (parseInt(Final_Payment_Date.getFullYear().toString()) > parseInt(minDate.getFullYear().toString()) || parseInt(Final_Payment_Date.getFullYear().toString()) < parseInt(maxDate.getFullYear().toString())) {
        //     alert('Please enter an appropriate date');
         if (Loan_Amount <= 0 || Loan_Amount > 99999999) {
            alert('Please enter an appropriate loan amount');
        } else if (Interest_Rate > 100) {
            alert('Please enter an appropriate interest rate');
        } else if (Loan_Term < 1 || Loan_Term > 50) {
            alert('Please enter an appropriate loan term');
        } else if (No_Payment < 1 || No_Payment > 365) {
            alert('Please enter an appropriate number of payment');
        } else {
            Final_Payment_Date.setFullYear(parseInt(Loan_Term) + Final_Payment_Date.getFullYear())
            const Total_NO_Payments = Loan_Term * No_Payment;
            const Total_Interest = Loan_Amount * Interest_Rate_Percent * Loan_Term;
            let Interest = Math.round(Total_Interest * 100) / 100;

            console.log(Total_Interest);

            var commas = Interest.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            document.getElementById("Total_NO_Payments").innerHTML = Total_NO_Payments.toString();
            document.getElementById("Final_Payment_Date").innerHTML = Final_Payment_Date.toDateString();
            document.getElementById("Total_Interest").innerHTML = "$" + commas;
        }
    }
    else {
        alert('Please enter all values');
    }
}

//basic input validator
jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

$( "#lease_form" ).validate({
    rules: {
        errorElement:'div',
        field: {
            required: true,
            number: true
        }
    }
});

// disabling the button if input is incorrect
/*
$(document).ready(function(){

    //checking the length of the value of message and assigning to a variable(checkField) on load
    //checkLoanAmount = $("input#Loan_Amount").val();
    //console.log(checkLoanAmount);
    checkLoanDate = $("input#Loan_Date").val().length;
    console.log(checkLoanDate);


    var enableDisableButton = function(){
        checkLoanDate = $("input#Loan_Date").val().length;

        const Final_Payment_Date = new Date(Date.parse(Loan_Date_String));
        //console.log(checkLoanDate);
        console.log(minDate,maxDate);
        /*
        if(checkLoanAmount > 0  && checkLoanAmount < 9 ){
            $('#Submit').removeAttr("disabled");
        }
        else {
            $('#Submit').attr("disabled","disabled");

        if(checkLoanDate > 0  && Final_Payment_Date.getFullYear() < minDate.getFullYear() && Final_Payment_Date > maxDate.getFullYear()){
            $('#Submit').removeAttr("disabled");
        }
        else {
            $('#Submit').attr("disabled","disabled");
        }
    }

    //calling enableDisableButton() function on load
    enableDisableButton();

    $('input#Loan_Amount').keyup(function(){
        //checking the length of the value of message and assigning to the variable(checkField) on keyup
        checkLoanAmount = $("input#Loan_Date").val().length;
        let minDate = new Date();
        let maxDate = new Date();
        minDate.setFullYear(minDate.getFullYear() - 18);
        maxDate.setFullYear(maxDate.getFullYear() - 120);
        const Final_Payment_Date = new Date(Date.parse(Loan_Date_String));
       //checkInterestRate = $("input#Loan_Amount").val().length;
        //calling enableDisableButton() function on keyup
        enableDisableButton();
    });
});*/
