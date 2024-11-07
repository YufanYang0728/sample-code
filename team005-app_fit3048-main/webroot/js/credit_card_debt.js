const btn = document.getElementById('Calculate');
btn.addEventListener('click',getDebtInput);

//first calculator

function calculateCreditCardDebt() {
    // Convert rate to monthly interest rate and term to number of months
    const interestRate = Number(document.getElementById("Interest_Rate").value);
    const minPay = Number(document.getElementById("Min_Pay").value);
    const debtAmount = Number(document.getElementById("Debt_Amount").value);
    const additionalPay = Number(document.getElementById("Add_Pay").value);

    // // Calculate the total payment and how many months it will take using the NPER formula
    NPER(interestRate/1200
        , -((minPay/100)*(debtAmount+additionalPay)), debtAmount, 0, 0)
  }

function NPER(rate, payment, present, future, type) {
    // Initialize type
    type = (typeof type === 'undefined') ? 0 : type;

    // Initialize future value
    future = (typeof future === 'undefined') ? 0 : future;

    // Return number of periods
    const num = payment * (1 + rate * type) - future * rate;
    const den = (present * rate + payment * (1 + rate * type));
    const nper = Math.ceil((Math.log(num / den) / Math.log(1 + rate)));

    if (nper < 12){
        document.getElementById("timePayoff").innerHTML = nper.toString().concat(" months");
    }
    else{
        var years = Math.floor(nper/12);
        var months = nper % 12;
        document.getElementById("timePayoff").innerHTML = years.toString().concat(" years and ").concat(months.toString()+ " months");
    }


}

function getDebtInput(){
    const interestRate = Number(document.getElementById("Interest_Rate").value);
    const minPay = Number(document.getElementById("Min_Pay").value);
    const debtAmount = Number(document.getElementById("Debt_Amount").value);
    const additionalPay = Number(document.getElementById("Add_Pay").value);

    if (interestRate <= 0 || interestRate>100 || minPay <=0 || minPay >100 || debtAmount <=0 || additionalPay <=0){
        alert('Please enter all valid input values.');
    }
    else{calculateCreditCardDebt();
    }
}



//validator



jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

$( "#credit_form" ).validate({
    rules: {
        errorElement:'div',
        field: {
            required: true,
            number: true
        }
    }
});
