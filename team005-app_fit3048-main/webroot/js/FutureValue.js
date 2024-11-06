
const btn_single = document.getElementById('Submit_FV_Single_Sum');
btn_single.addEventListener('click',FV_Single_Sum);

const btn_ann = document.getElementById('Submit_FV_ann');
btn_ann.addEventListener('click',FV_ann);
function FV_Single_Sum()
{
    const Balance = document.getElementById("Start_Balance").value;
    const Interest = document.getElementById("Interest").value;
    const Term = document.getElementById("Term").value;

    const FV = Balance * ((1 + Interest / 100) ** Term);
    const TV = FV / (1 + 0) ** Term;
    document.getElementById("Future_Value_Ann").value = Math.round(FV * 100) / 100;
    document.getElementById("Today_Value_Ann").value = Math.round(TV * 100) / 100;

}

function getFV_ANN(frequency,amount,interest,years,inflation){
    const day = 365, month = 12, quarter = 4, half = 2, year = 1;
    if(frequency === "day"){
        const amount_f = amount / day;
        const interest_f = (interest / 100) / day;
        const year_f = years / day;
        const FV = amount_f * (((1+interest_f) ** year_f -1)/ interest_f) ;
        const TV = FV / (1 + inflation / 100) ** years;

        document.getElementById("Future_Value_Ann").value = Math.round(FV * 100) / 100;
        document.getElementById("Today_Value_Ann").value = Math.round(TV * 100) / 100;
    }
    else if (frequency === "year"){
        const amount_f = amount / year;
        const interest_f = (interest / 100) / year;
        const year_f = years / year;
        const FV = amount_f * (((1+interest_f) ** year_f -1)/ interest_f) ;
        const TV = FV / (1 + inflation / 100) ** years;
        document.getElementById("Future_Value_Ann").value = Math.round(FV * 100) / 100;
        document.getElementById("Today_Value_Ann").value = Math.round(TV * 100) / 100;
    }
    else if (frequency === "month"){
        const amount_f = amount / month;
        const interest_f = (interest / 100) / month;
        const year_f = years / month;
        const FV = amount_f * (((1+interest_f) ** year_f -1)/ interest_f) ;
        const TV = FV / (1 + inflation / 100) ** years;
        document.getElementById("Future_Value_Ann").value = Math.round(FV * 100) / 100;
        document.getElementById("Today_Value_Ann").value = Math.round(TV * 100) / 100;
    }
    else if (frequency === "quarter"){
        const amount_f = amount / quarter;
        const interest_f = (interest / 100) / quarter;
        const year_f = years / quarter;
        const FV = amount_f * (((1+interest_f) ** year_f -1)/ interest_f) ;
        const TV = FV / (1 + inflation / 100) ** years;
        document.getElementById("Future_Value_Ann").value = Math.round(FV * 100) / 100;
        document.getElementById("Today_Value_Ann").value = Math.round(TV * 100) / 100;

    }
    else if (frequency === "half"){
        const amount_f = amount / half;
        const interest_f = (interest / 100) / half;
        const year_f = years / half;
        const FV = amount_f * (((1+interest_f) ** year_f -1)/ interest_f) ;
        const TV = FV / (1 + inflation / 100) ** years;
        document.getElementById("Future_Value_Ann").value = Math.round(FV * 100) / 100;
        document.getElementById("Today_Value_Ann").value = Math.round(TV * 100) / 100;
    }

}

function FV_ann(){
    const frequency = document.getElementById("Frequency").value;
    console.log(frequency);
    const amount_pa = document.getElementById("Amount_Pa").value;
    const interest_pa = document.getElementById("Interest_Pa").value;
    const years = document.getElementById("Years").value;
    const inflation = document.getElementById("Inflation").value;

    getFV_ANN(frequency,amount_pa,interest_pa,years,inflation)

}
