const btn = document.getElementById('Submit_Age_pension_result');
btn.addEventListener('click',fetchPensionCouple);

const btn_single_pension = document.getElementById('Submit_Age_pension_Single');
btn_single_pension.addEventListener('click',fetchPensionSingle);

//newly added
const btn_basic_form = document.getElementById('Submit_Age_pension_Basic');
btn_basic_form.addEventListener('click',fetchPensionBasic1);

function fetchPensionBasic1(){

    const is_Relationship = getRelationship();

    const form_double = document.getElementById('age_pension_input_double');
    const form_single = document.getElementById('age_pension_input_single_form');
   // console.log(is_Relationship);


    if(is_Relationship === "couple"){
        form_double.style.display = 'block';
        form_single.style.display = 'none';

    }else if (is_Relationship === "single"){
        form_single.style.display = 'block';
        form_double.style.display = 'none';

    }else{
        form_single.style.display = 'none';
        form_double.style.display = 'none';
    }
}

function getRelationship(){
    let relationship;
    if(document.getElementById('is_couple').checked){
        relationship = 'couple';
    }else{
        relationship = 'single';
    }
    return relationship;
}

function getHomeStatus(){
    let ownHome;
    if (document.getElementById('is_homeowner').checked){
        ownHome = true;
    } else {
        ownHome = false;
    }
    return ownHome;
}

function getIncomeStream(){
    let incomeStream, incomeStreamP;
    if (document.getElementById('is_income_stream_single').checked){
        incomeStream = true;
    } else if ((document.getElementById('is_income_stream_couple').checked) && (document.getElementById('is_income_stream_couple_spouse').checked)){
        incomeStream = true;
        incomeStreamP = true;
    } else {
        incomeStream = false;
        incomeStreamP = false;
    }
}

function userValidationSingle(grossAnnualSalary, realEstateIncome, otherIncome, vehicle, content, bankAccount, shares, managedFund, loan, superAnnuation, investmentPorperty, giftedAsset, funeralBond, grossAnnualSalaryP, superAnnuationP, ageOfFirstPerson){
    if (grossAnnualSalary < 0 || realEstateIncome < 0 ||  otherIncome < 0 || vehicle < 0 || content < 0 || bankAccount < 0 || shares < 0 || managedFund < 0 || loan < 0 || superAnnuation < 0 || investmentPorperty < 0 || giftedAsset < 0 || funeralBond < 0 || ageOfFirstPerson < 0) {
        alert('Please enter correct values for fields')
    }
    else  if (isNaN(grossAnnualSalary) || isNaN(realEstateIncome) ||  isNaN(otherIncome) || isNaN(vehicle) || isNaN(content) || isNaN(bankAccount) || isNaN(shares) || isNaN(managedFund) || isNaN(loan) || isNaN(superAnnuation) || isNaN(investmentPorperty) || isNaN(giftedAsset) || isNaN(funeralBond) || isNaN(ageOfFirstPerson)) {
        alert('Please enter values for empty fields')
    }
}

function userValidationCouple(grossAnnualSalary, realEstateIncome, otherIncome, vehicle, content, bankAccount, shares, managedFund, loan, superAnnuation, investmentPorperty, giftedAsset, funeralBond, grossAnnualSalaryP, superAnnuationP, ageOfFirstPerson, ageOfPartners){
    if (grossAnnualSalary < 0 || realEstateIncome < 0 ||  otherIncome < 0 || vehicle < 0 || content < 0 || bankAccount < 0 || shares < 0 || managedFund < 0 || loan < 0 || superAnnuation < 0 || investmentPorperty < 0 || giftedAsset < 0 || funeralBond < 0 || grossAnnualSalaryP < 0 || superAnnuationP < 0 || ageOfFirstPerson < 0 || ageOfPartners < 0){
        alert('Please enter correct values for fields')
    }
    else if (isNaN(grossAnnualSalary)|| isNaN(realEstateIncome) ||  isNaN(otherIncome) || isNaN(vehicle) || isNaN(content)|| isNaN(bankAccount) || isNaN(shares) || isNaN(managedFund) || isNaN(loan) || isNaN(superAnnuation) || isNaN(investmentPorperty) || isNaN(giftedAsset) || isNaN(funeralBond) || isNaN(grossAnnualSalaryP) || isNaN(superAnnuationP) ||isNaN(ageOfFirstPerson) || isNaN(ageOfPartners)){
        alert('Please enter values for empty fields')
    }
}

function fetchPensionSingle(){
    //check single
    let isSingle= isSingleCheck(getRelationship());
    let ownHome=getHomeStatus();
//Income
    let grossAnnualSalary = parseInt(document.getElementById('Gross_annual_salary_single').value);
    let realEstateIncome = parseInt(document.getElementById('Real_Estate_Income_single').value);
    let otherIncome = parseInt(document.getElementById('Other_Income_single').value);
//Non-Finance Asset
    let vehicle = parseInt(document.getElementById('vehicle_invest_single').value);
    let content = parseInt(document.getElementById('content_invest_single').value);
//Finance Asset
    let bankAccount = parseInt(document.getElementById('bank_accounts_invest_single').value);
    let shares = parseInt(document.getElementById('shares_invest_single').value);
    let managedFund = parseInt(document.getElementById('funds_invest_single').value);
    let loan = parseInt(document.getElementById('loans_invest_single').value);
    let superAnnuation = parseInt(document.getElementById('Super_single').value);
    let investmentPorperty = parseInt(document.getElementById('Investment_property_single').value);
    let incomeStream= true;
    //Other asset
    let giftedAsset = parseInt(document.getElementById('gifted_assets_single').value);
    let funeralBond = parseInt(document.getElementById('funeral_bond_single').value);

//partners income
    let grossAnnualSalaryP = parseInt(document.getElementById('spouse_Gross_annual_salary').value);
    //super annuation
    let superAnnuationP = parseInt(document.getElementById('spouse_Super').value);
    let incomeStreamP=true;
//background working
    let ageOfFirstPerson=parseInt(document.getElementById('Birth_single').value);
    let ageOfPartners=67;
    let isFirstPersonEligibleAgePension=checkAgePensionEligible(ageOfFirstPerson);
    let isPartnersEligibleAgePension=checkAgePensionEligible(ageOfPartners);
    let financialAssetTotal=financialAssetTotalCheck(bankAccount, shares, managedFund, loan, superAnnuation, investmentPorperty);
    let financialAssetDeemed=financialAssetDeemedCheck(financialAssetTotal);
    
 ///*****   ADMIN  SIDE */
    //income rule
    let singleFortnightlyIncomeLimit=190;
    let divideAmount=26;
    let incomeTotal= getIncomeTotal(isSingle, grossAnnualSalary, realEstateIncome, otherIncome, financialAssetDeemed, grossAnnualSalaryP);
    
    let singleReductionRuleAmount=singleReductionRuleAmountFunction(incomeTotal, divideAmount, singleFortnightlyIncomeLimit);
    let coupleFortnightlyIncomeLimit=336;
    
  
    let coupleReductionRuleAmount=coupleReductionRuleAmountFunction(incomeTotal, divideAmount, coupleFortnightlyIncomeLimit);
    
    let singlePensionCutoffLimit=2318;
    let couplePensionCutoffLimit=3544;
    //asset rule
        //Full Pension
    let singleFullPensionHomeOwner=280000;
    let singleFullPensionNonHomeOwner=504500;
    let coupleFullPensionHomeOwner=419000;
    let coupleFullPensionNonHomeOwner=643500;
        //Part Pension
    let singlePartPensionHomewOwner=643750;
    let singlePartPensionNonHomeOwner=859250;
    
    let couplePartPensionHomewOwner=954000;
    let couplePartPensionNonHomeOwner= 1178500;
    let forEvery1000OverLimit= 3;
    //Age Pension Rate
    let singleMaximumBaseRate=1064;
    let coupleBothOver67MaximumBaseRate=1604;
    let coupleOneOver67MaximumBaseRate=802;

//income test
    
    let incomePension=incomePensionCalculation(isSingle, singleMaximumBaseRate, singleReductionRuleAmount, ageOfFirstPerson, ageOfPartners, coupleBothOver67MaximumBaseRate, coupleReductionRuleAmount, coupleOneOver67MaximumBaseRate);
    
    let assetTotal=getAssetTotal(isSingle, vehicle, content, bankAccount, shares, managedFund, loan, superAnnuation, investmentPorperty, giftedAsset, funeralBond, isFirstPersonEligibleAgePension, isPartnersEligibleAgePension,superAnnuationP);
    
    let typeOfPensionFull=typeOfPensionFullCheck(isSingle, ownHome, assetTotal, singleFullPensionHomeOwner, singlePartPensionHomewOwner, singleFullPensionNonHomeOwner, singlePartPensionNonHomeOwner, coupleFullPensionHomeOwner, couplePartPensionHomewOwner, coupleFullPensionNonHomeOwner, couplePartPensionNonHomeOwner);//-------------------
    
    let reductionValue=reductionValueFunction(typeOfPensionFull, isSingle, ownHome, assetTotal, singleFullPensionHomeOwner, singleFullPensionNonHomeOwner, coupleFullPensionHomeOwner, coupleFullPensionNonHomeOwner);
    
    let assetPensionFortnightly=assetPensionFortnightlyFunction(isSingle, singleMaximumBaseRate, reductionValue, ageOfFirstPerson, ageOfPartners, coupleBothOver67MaximumBaseRate, coupleOneOver67MaximumBaseRate)
    
//AGE PENSION VALUE

    let agePensionValue=agePensionValueCheck(incomePension, assetPensionFortnightly, typeOfPensionFull, ageOfFirstPerson);
    document.getElementById("Income_Pension_Value").innerHTML = Math.round(incomePension.toFixed(2).toString()) + " ";
    document.getElementById("Asset_Pension_Value").innerHTML = Math.round(assetPensionFortnightly.toString())+ " ";
    document.getElementById("Age_Pension_Value").innerHTML =agePensionValue.toString();
        
    userValidationSingle(grossAnnualSalary, realEstateIncome,  otherIncome, vehicle, content, bankAccount, shares, managedFund, loan, superAnnuation, investmentPorperty, giftedAsset, funeralBond, grossAnnualSalaryP, superAnnuationP, ageOfFirstPerson)

}

//COuple function
function fetchPensionCouple(){
    //check single
    let isSingle= isSingleCheck(getRelationship());
    let ownHome=getHomeStatus();
//Income
    let grossAnnualSalary = parseInt(document.getElementById('Gross_annual_salary').value);
    let realEstateIncome = parseInt(document.getElementById('Real_Estate_Income').value);
    let otherIncome = parseInt(document.getElementById('Other_Income').value);
//Non-Finance Asset
    let vehicle = parseInt(document.getElementById('vehicle_invest').value);
    let content = parseInt(document.getElementById('content_invest').value);
//Finance Asset
    let bankAccount = parseInt(document.getElementById('bank_accounts_invest').value);
    let shares = parseInt(document.getElementById('shares_invest').value);
    let managedFund = parseInt(document.getElementById('funds_invest').value);
    let loan = parseInt(document.getElementById('loans_invest').value);
    let superAnnuation = parseInt(document.getElementById('Super').value);
    let investmentPorperty = parseInt(document.getElementById('Investment_property').value);
    let incomeStream= true;
    //Other asset
    let giftedAsset = parseInt(document.getElementById('gifted_assets').value);
    let funeralBond = parseInt(document.getElementById('funeral_bond').value);

//partners income
    let grossAnnualSalaryP = parseInt(document.getElementById('spouse_Gross_annual_salary').value);
    //super annuation
    let superAnnuationP = parseInt(document.getElementById('spouse_Super').value);
    let incomeStreamP=true;
//background working
    let ageOfFirstPerson=parseInt(document.getElementById('Birth').value);
    let ageOfPartners=parseInt(document.getElementById('spouse_Birth').value);
    let isFirstPersonEligibleAgePension=checkAgePensionEligible(ageOfFirstPerson);
    let isPartnersEligibleAgePension=checkAgePensionEligible(ageOfPartners);
    let financialAssetTotal=financialAssetTotalCheck(bankAccount, shares, managedFund, loan, superAnnuation, investmentPorperty);
    let financialAssetDeemed=financialAssetDeemedCheck(financialAssetTotal);
    
 ///*****   ADMIN  SIDE */
    //income rule
    let singleFortnightlyIncomeLimit=190;
    let divideAmount=26;
    let incomeTotal= getIncomeTotal(isSingle, grossAnnualSalary, realEstateIncome, otherIncome, financialAssetDeemed, grossAnnualSalaryP);
    
    let singleReductionRuleAmount=singleReductionRuleAmountFunction(incomeTotal, divideAmount, singleFortnightlyIncomeLimit);
    let coupleFortnightlyIncomeLimit=336;
    
  
    let coupleReductionRuleAmount=coupleReductionRuleAmountFunction(incomeTotal, divideAmount, coupleFortnightlyIncomeLimit);
    
    let singlePensionCutoffLimit=2318;
    let couplePensionCutoffLimit=3544;
    //asset rule
        //Full Pension
    let singleFullPensionHomeOwner=280000;
    let singleFullPensionNonHomeOwner=504500;
    let coupleFullPensionHomeOwner=419000;
    let coupleFullPensionNonHomeOwner=643500;
        //Part Pension
    let singlePartPensionHomewOwner=643750;
    let singlePartPensionNonHomeOwner=859250;
    
    let couplePartPensionHomewOwner=954000;
    let couplePartPensionNonHomeOwner= 1178500;
    let forEvery1000OverLimit= 3;
    //Age Pension Rate
    let singleMaximumBaseRate=1064;
    let coupleBothOver67MaximumBaseRate=1604;
    let coupleOneOver67MaximumBaseRate=802;

//income test
    
    let incomePension=incomePensionCalculation(isSingle, singleMaximumBaseRate, singleReductionRuleAmount, ageOfFirstPerson, ageOfPartners, coupleBothOver67MaximumBaseRate, coupleReductionRuleAmount, coupleOneOver67MaximumBaseRate);
    
    let assetTotal=getAssetTotal(isSingle, vehicle, content, bankAccount, shares, managedFund, loan, superAnnuation, investmentPorperty, giftedAsset, funeralBond, isFirstPersonEligibleAgePension, isPartnersEligibleAgePension,superAnnuationP);
    
    let typeOfPensionFull=typeOfPensionFullCheck(isSingle, ownHome, assetTotal, singleFullPensionHomeOwner, singlePartPensionHomewOwner, singleFullPensionNonHomeOwner, singlePartPensionNonHomeOwner, coupleFullPensionHomeOwner, couplePartPensionHomewOwner, coupleFullPensionNonHomeOwner, couplePartPensionNonHomeOwner);//-------------------
    
    let reductionValue=reductionValueFunction(typeOfPensionFull, isSingle, ownHome, assetTotal, singleFullPensionHomeOwner, singleFullPensionNonHomeOwner, coupleFullPensionHomeOwner, coupleFullPensionNonHomeOwner);
    
    let assetPensionFortnightly=assetPensionFortnightlyFunction(isSingle, singleMaximumBaseRate, reductionValue, ageOfFirstPerson, ageOfPartners, coupleBothOver67MaximumBaseRate, coupleOneOver67MaximumBaseRate)
    
//AGE PENSION VALUE
    let agePensionValue=agePensionValueCheck1(incomePension, assetPensionFortnightly, typeOfPensionFull, ageOfFirstPerson, ageOfPartners);
    document.getElementById("Income_Pension_Value_Couple").innerHTML = Math.round(incomePension.toFixed(2).toString()) + " ";
    document.getElementById("Asset_Pension_Value_Couple").innerHTML = Math.round(assetPensionFortnightly.toString())+ " ";
    document.getElementById("Age_Pension_Value_Couple").innerHTML =agePensionValue.toString();
    
    userValidationCouple(grossAnnualSalary, realEstateIncome,  otherIncome, vehicle, content, bankAccount, shares, managedFund, loan, superAnnuation, investmentPorperty, giftedAsset, funeralBond, grossAnnualSalaryP, superAnnuationP, ageOfFirstPerson, ageOfPartners)
    
}




function checkAgePensionEligible(age){
    if(age>=67){
        return true;
    }
    else return false;
}
function getIncomeTotal(isSingle, grossAnnualSalary, realEstateIncome, otherIncome, financialAssetDeemed, grossAnnualSalaryP){
    if (isSingle){
        return grossAnnualSalary+realEstateIncome+otherIncome+financialAssetDeemed;
    }
    else {
        return grossAnnualSalary+realEstateIncome+otherIncome+financialAssetDeemed+grossAnnualSalaryP;
    }
}
function getAssetTotal(isSingle, vehicle, content, bankAccount, share, managedFund, loan, superAnnuation, investmentPorperty, giftedAsset, funeralBond, isFirstPersonEligibleAgePension, isPartnersEligibleAgePension,superAnnuationP){
    if(isSingle) {
        return vehicle+content+bankAccount+share+managedFund+loan+superAnnuation+investmentPorperty+giftedAsset+funeralBond;
    }
    else{
        if(isFirstPersonEligibleAgePension&&isPartnersEligibleAgePension){
            return vehicle+content+bankAccount+share+managedFund+loan+superAnnuation+investmentPorperty+giftedAsset+funeralBond+superAnnuationP;
        }
        else{
            return vehicle+content+bankAccount+share+managedFund+loan+superAnnuation+investmentPorperty+giftedAsset+funeralBond;
        }
    }
}

function incomePensionCalculation(isSingle, singleMaximumBaseRate, singleReductionRuleAmount, ageOfFirstPerson, ageOfPartners, coupleBothOver67MaximumBaseRate, coupleReductionRuleAmount, coupleOneOver67MaximumBaseRate){
    let bool= false;
    let final=0;
    if(isSingle){
        bool=(singleMaximumBaseRate-singleReductionRuleAmount)<0;
    }
    else {
        if((ageOfFirstPerson>=67)&&(ageOfPartners>=67)) {
            bool=(coupleBothOver67MaximumBaseRate-coupleReductionRuleAmount)<0;
        }
        else{
            bool=(coupleOneOver67MaximumBaseRate-coupleReductionRuleAmount)<0
        }
    }
    if(bool){
        final=0;
    }
    else{
        if(isSingle){
            final=singleMaximumBaseRate-singleReductionRuleAmount;
        }
        else{
            if((ageOfFirstPerson>=67)&&(ageOfPartners>=67)) {
                final=(coupleBothOver67MaximumBaseRate-coupleReductionRuleAmount);
            }
            else{
               final=(coupleOneOver67MaximumBaseRate-coupleReductionRuleAmount);
            }
        }
    }
    return final;
}
function typeOfPensionFullCheck(isSingle, ownHome, assetTotal, singleFullPensionHomeOwner, singlePartPensionHomewOwner, singleFullPensionNonHomeOwner, singlePartPensionNonHomeOwner, coupleFullPensionHomeOwner, couplePartPensionHomewOwner, coupleFullPensionNonHomeOwner, couplePartPensionNonHomeOwner){
    if (isSingle){
        if(ownHome){
            if(assetTotal<=singleFullPensionHomeOwner){
                return "full";
            }
            else{
                if(assetTotal>singlePartPensionHomewOwner){
                    return "no pension";
                }
                else{
                    return "part";
                }
            }
        }
        else{
            if(assetTotal<=singleFullPensionNonHomeOwner){
                return "full";
            }
            else{
                if(assetTotal>singlePartPensionNonHomeOwner){
                    return "no pension";
                }
                else {
                    return "part";
                }
            }
        }
    }
    else{
        if(ownHome){
            if(assetTotal<=coupleFullPensionHomeOwner){
                return "full";
            }
            else{
                if(assetTotal>couplePartPensionHomewOwner){
                    return "no pension";
                }
                else{
                    return "part";
                }
            }
        }
        else{
            if(assetTotal<=coupleFullPensionNonHomeOwner){
                return "full";
            }
            else{
                if(assetTotal>couplePartPensionNonHomeOwner){
                    return "no pension";
                }
                else {
                    return "part";
                }
            }
        }
    }
}
function reductionValueFunction(typeOfPensionFull, isSingle, ownHome, assetTotal, singleFullPensionHomeOwner, singleFullPensionNonHomeOwner, coupleFullPensionHomeOwner, coupleFullPensionNonHomeOwner){
    if(typeOfPensionFull=="part"){
        if(isSingle){
            if(ownHome){
                return ((assetTotal-singleFullPensionHomeOwner)/1000)*3;
            }
            else{
                return ((assetTotal-singleFullPensionNonHomeOwner)/1000)*3;
            }
        }
        else{
            if(ownHome){
                return ((assetTotal-coupleFullPensionHomeOwner)/1000)*3;
            }
            else{
                return ((assetTotal-coupleFullPensionNonHomeOwner)/1000)*3;
            }
        }
    }
    else if(typeOfPensionFull=="full"){
        return 0;
    }
    else{
        return 0;
    }

}
function assetPensionFortnightlyFunction(isSingle, singleMaximumBaseRate, reductionValue, ageOfFirstPerson, ageOfPartners, coupleBothOver67MaximumBaseRate, coupleOneOver67MaximumBaseRate){
    if(isSingle){
        return singleMaximumBaseRate-reductionValue;
    }
    else{
        if((ageOfFirstPerson>=67)&&(ageOfPartners)>=67){
            return coupleBothOver67MaximumBaseRate-reductionValue;
        }
        else{
            return coupleOneOver67MaximumBaseRate-reductionValue;
        }
    }
}
function agePensionValueCheck(incomePension, assetPensionFortnightly, typeOfPensionFull, ageOfFirstPerson){

    if (ageOfFirstPerson>=67){
    if((incomePension>assetPensionFortnightly)&&(typeOfPensionFull != "no pension")){
        return Math.round(assetPensionFortnightly);
    }
    else if (typeOfPensionFull == "no pension"){
        return "No pension";
    }
    else if (isNaN(assetPensionFortnightly)|| isNaN(incomePension)){
        return "Not applicable";
    }
    else{
        return Math.round(incomePension);
    }
    }
    else{
        return "No Pension";
    }
}
function agePensionValueCheck1(incomePension, assetPensionFortnightly, typeOfPensionFull, ageOfFirstPerson, ageOfPartners){

    if (ageOfFirstPerson<67 && ageOfPartners<67){
        return "No Pension";
    }
    else{
    if((incomePension>assetPensionFortnightly)&&(typeOfPensionFull != "no pension")){
        return Math.round(assetPensionFortnightly);
    }
    else if (typeOfPensionFull == "no pension"){
        return "No pension";
    }
    else if (isNaN(assetPensionFortnightly)|| isNaN(incomePension)){
        return "Not applicable";
    }
    else{
        return Math.round(incomePension);
    }
    }
    
}
//income rules
function singleReductionRuleAmountFunction(incomeTotal, divideAmount, singleFortnightlyIncomeLimit){
    if((incomeTotal/divideAmount) > singleFortnightlyIncomeLimit){
        return 0.5*(incomeTotal/divideAmount-singleFortnightlyIncomeLimit);
    }
    else{
        return 0;
    }
}
function coupleReductionRuleAmountFunction(incomeTotal, divideAmount, coupleFortnightlyIncomeLimit){
    if((incomeTotal/divideAmount) > coupleFortnightlyIncomeLimit){
        return 0.5*(incomeTotal/divideAmount-coupleFortnightlyIncomeLimit);
    }
    else{
        return 0;
    }
}

function financialAssetDeemedCheck(financialAssetTotal){
    if(financialAssetTotal>56400) {
        return (56400*0.0025+((financialAssetTotal-56400)*0.0225));
    }
    else{
        return (financialAssetTotal*0.0025);
    }
}
function financialAssetTotalCheck(bankAccount, shares, managedFund, loan, superAnnuation, investmentPorperty){
    return bankAccount+shares+managedFund+loan+superAnnuation+investmentPorperty;
}
function returnEligibleCheck(isEligible){
    if (isEligible){
        return "YES";
    }
    else{
        return "NO";
    }
}
function isSingleCheck(is_Relationship){
    if (is_Relationship=='couple'){
        return false;
    }
    else {
        return true;
    }
}

jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

$( "#age_pension_basic_form" ).validate({
    rules: {
        errorElement:'div',
        field: {
            required: true,
            number: true
        }
    }
});