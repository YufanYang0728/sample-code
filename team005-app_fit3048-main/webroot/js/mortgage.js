const btn = document.getElementById('Submit_Repayment');
btn.addEventListener('click',getMortgageInput);

const btn2 = document.getElementById('Submit_Borrow');
btn2.addEventListener('click',getBorrowInput);

const btn3 = document.getElementById('Submit_Fee');
btn3.addEventListener('click',getFeeInput);

//first calculator

function calculateMortgagePayment() {
    // Convert rate to monthly interest rate and term to number of months
    const interestRate = document.getElementById("Interest_Rate").value;
    const yearTerm = document.getElementById("Year_Term").value;
    const loanAmount = document.getElementById("Mortgage_Amount").value;
  
    // Calculate the monthly payment using the PMT formula
    const payment = ((interestRate/100/12 *loanAmount) / (1 - (1 + interestRate/100/12)**(-yearTerm*12))).toFixed(2);
    
    document.getElementById("Monthly_Payment").innerHTML = "$" + payment.toString();
    document.getElementById("Loan_Amount").innerHTML = loanAmount.toString();
    document.getElementById("Loan_Year").innerHTML = yearTerm.toString();
    document.getElementById("Annual_Interest_Rate").innerHTML = interestRate.toString();
  }
 
//second calculator

function calculateMortgageBorrow() {
    // Convert rate to monthly interest rate and term to number of months
    const interestRate = document.getElementById("Interest_Rate23").value;
    const yearTerm = document.getElementById("Year_Term23").value;
    const monthlyAmount = document.getElementById("Monthly_Amount23").value;
    
    const payment = (monthlyAmount*(1 - (1 + interestRate/100/12)**(-yearTerm*12)) / (interestRate/100/12)).toFixed(2);    
    document.getElementById("Total_Mortgage").innerHTML ="$"+ payment.toString();
    document.getElementById("Loan_Amount2").innerHTML = monthlyAmount.toString();
    document.getElementById("Loan_Year2").innerHTML = yearTerm.toString();
    document.getElementById("Annual_Interest_Rate2").innerHTML = interestRate.toString();
}
//third calcluator

function calculateMortgageFee() {
    // Convert rate to monthly interest rate and term to number of months
    const interestRate = document.getElementById("Interest_Rate3").value;

    const mortgageAmount = document.getElementById("Mortgage_Amount3").value;
    const feeAmount = document.getElementById("Fee").value;
    const monthlyRepaymentAmount = document.getElementById("Monthly_Repayment").value;
    const monthlyRepaymentFrequency = document.getElementById("Monthly_Repayment_Frequency").value;
    const feeRepaymentFrequency = document.getElementById("Fee_Repayment_Frequency").value;
    NPER(interestRate/100/monthlyRepaymentFrequency, -monthlyRepaymentAmount+(feeAmount*feeRepaymentFrequency/monthlyRepaymentFrequency), mortgageAmount,0,0)
    

    document.getElementById("Loan_Amount1").innerHTML =mortgageAmount.toString();
    document.getElementById("Fee_Amount").innerHTML = feeAmount.toString();
    document.getElementById("Monthly_Payment_Amount3").innerHTML = monthlyRepaymentAmount.toString();
   
    document.getElementById("Annual_Interest_Rate1").innerHTML = interestRate.toString();
    

}
function NPER(rate, payment, present, future, type) {
    // Initialize type
    type = (typeof type === 'undefined') ? 0 : type;

    // Initialize future value

    // Return number of periods
    const num = payment * (1 + rate * type) - future * rate;
    const den = (present * rate + payment * (1 + rate * type));
    const nper = Math.ceil((Math.log(num / den) / Math.log(1 + rate)));

    if (nper < 12){
        document.getElementById("Monthly_Payment1").innerHTML = nper.toString().concat(" months");
    }
    else{
        var years = Math.floor(nper/12);
        var months = nper % 12;
        document.getElementById("Monthly_Payment1").innerHTML = years.toString().concat(" years and ").concat(months.toString()+ "months");
    }

    
}


//validator
function getMortgageInput(){
    const interestRate = document.getElementById("Interest_Rate").value;
    const yearTerm = document.getElementById("Year_Term").value;
    const loanAmount = document.getElementById("Mortgage_Amount").value;

    if (yearTerm <= 1 || loanAmount <= 0 || interestRate <= 0 || yearTerm>100 || interestRate>100){
        alert('Please enter all valid input values.');
    }
    else{calculateMortgagePayment();
    }
}

function getBorrowInput(){
    const interestRate = document.getElementById("Interest_Rate23").value;
    const yearTerm = document.getElementById("Year_Term23").value;
    const monthlyAmount = document.getElementById("Monthly_Amount23").value;

    if (yearTerm <= 1 || monthlyAmount <= 0 || interestRate <= 0 || yearTerm>100 || interestRate>100){
        alert('Please enter all valid input values.');
    }
    else{calculateMortgageBorrow();
    }
}

function getFeeInput(){
    const interestRate = document.getElementById("Interest_Rate3").value;

    const mortgageAmount = document.getElementById("Mortgage_Amount3").value;
    const feeAmount = document.getElementById("Fee").value;
    const monthlyRepaymentAmount = document.getElementById("Monthly_Repayment").value;
    const monthlyRepaymentFrequency = document.getElementById("Monthly_Repayment_Frequency").value;
    const feeRepaymentFrequency = document.getElementById("Fee_Repayment_Frequency").value;

    if (interestRate <= 0 || interestRate>100 || mortgageAmount<=0 || feeAmount<=0 || monthlyRepaymentAmount<=0 || monthlyRepaymentFrequency<=0 || monthlyRepaymentFrequency>12 || feeRepaymentFrequency<=0 ||feeRepaymentFrequency>12){
        alert('Please enter all valid input values.');
    }
    else{calculateMortgageFee();
    }
}

jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

$( "#mortgage_form" ).validate({
    rules: {
        errorElement:'div',
        field: {
            required: true,
            number: true
        }
    }
});
$( "#mortgage2_form" ).validate({
    rules: {
        errorElement:'div',
        field: {
            required: true,
            number: true
        }
    }
});
$( "#mortgage3_form" ).validate({
    rules: {
        errorElement:'div',
        field: {
            required: true,
            number: true
        }
    }
});