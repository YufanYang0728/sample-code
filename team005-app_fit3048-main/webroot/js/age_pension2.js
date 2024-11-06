
const btn = document.getElementById('Submit_Age_pension_Basic');
btn.addEventListener('click',fetchPensionBasic);



const btn_single_pension = document.getElementById('Submit_Age_pension_single');
btn_single_pension.addEventListener('click',PensionSingle);

const FULL_SINGLE_HOMEOWNER_AR = 280000;
const FULL_COUPLE_HOMEOWNER_AR = 419000;
const FULL_SINGLE_NONHOMEOWNER_AR = 504500;
const FULL_COUPLE_NONHOMEOWNER_AR = 643500;

const PART_SINGLE_HOMEOWNER_AR = 643750;
const PART_COUPLE_HOMEOWNER_AR = 954000;
const PART_SINGLE_NONHOMEOWNER_AR = 859250;
const PART_COUPLE_NONHOMEOWNER_AR = 1178500;

const SINGLE_MAXIMUM_BASE_RATE = 1064;
const COUPLE_MAXIMUM_BASE_RATE = 1604;
const HALF_COUPLE_MAXIMUM_BASE_RATE = 802;

function fetchPensionBasic(){

    const is_Relationship= getRelationship();

    const form_double = document.getElementById('age_pension_input_double')
    const form_single = document.getElementById('age_pension_input_single_form')
   // console.log(is_Relationship);


    if(is_Relationship === "couple"){
        form_double.style.display = 'block'
        form_single.style.display = 'none'

    }else if (is_Relationship === "single"){
        form_single.style.display = 'block'
        form_double.style.display = 'none'

    }else{
        form_single.style.display = 'none'
        form_double.style.display = 'none'
    }
}
function getRelationship(){
     let relationship
     if(document.getElementById('is_couple').checked){
         relationship = 'couple'
     }else{
         relationship = 'single'
     }
     return relationship
}
function getGender(){
    let is_gender
    if (document.getElementById('is_gender_male_single').checked){
        is_gender = 'male'
    }else if(document.getElementById('is_gender_female_single').checked){
        is_gender = 'female'
    }else{
        is_gender = 'other'
    }
    return is_gender
}

function getHomeStatus(){
    let is_Homeowner
    if(document.getElementById('is_homeowner').checked){
        is_Homeowner = 'ownHouse'
    }else{
        is_Homeowner ='noHouse'
    }
    return is_Homeowner
}

function getUserAge(){
    let userDOB 
    userDOB = document.getElementById('DOB')
    return userDOB
}

function getPartnerAge(){
    let spouseDOB
    spouseDOB = document.getElementById('spouse_DOB')
    return spouseDOB
}


function getAge(DOB) {
    const Age = new Date(Date.parse(DOB))
    const Current_date = new Date()
    const C_Age = Current_date.getFullYear() - Age.getFullYear()

    return C_Age
}

function getPartnerEligiblePension(){
    if (getAge(getPartnerAge() >= 67)){
        return 'yes'
    }
    else {
        return 'no'
    }
}

function getIsIncomeStream() {
    //user input
    let isIncomeStream
    if (document.getElementById('is_income_stream').checked()){
        isIncomeStream = 'yes'
    }
    else {
        isIncomeStream = 'no'
    }
    return isIncomeStream
}

function getVehicleInvest() {
    let vehicleInvest
    vehicleInvest = document.getElementById('vehicle_invest')
    return vehicleInvest
}

function getContentInvest() {
    let contentInvest
    contentInvest = document.getElementById('content_invest')
    return contentInvest
}

function getBankAccountInvest() {
    let bankAccountInvest
    bankAccountInvest = document.getElementById('bank_accounts_invest')
    return bankAccountInvest
}

function getSharesInvest() {
    let sharesInvest
    sharesInvest = document.getElementById('shares_invest')
    return sharesInvest
}

function getFundsInvest() {
    let fundsInvest
    fundsInvest = document.getElementById('funds_invest')
    return fundsInvest
}

function getLoansInvest() {
    let loansInvest
    loansInvest = document.getElementById('loans_invest')
    return loansInvest
}

function getGiftedAssets() {
    let giftedAssets
    giftedAssets = document.getElementById('gifted_assets')
    return giftedAssets
}

function getFuneralBond() {
    let funeralBond
    funeralBond = document.getElementById('funeral_bond')
    return funeralBond
}

function getLoansInvest() {
    let loansInvest
    loansInvest = document.getElementById('loans_invest')
    return loansInvest
}

function getSuperannuation() {
    let superannuation
    superannuation = document.getElementById('Super')
    return superannuation
}

function getInvestmentProperty() {
    let investmentProperty
    investmentProperty = document.getElementById('Investment_property_single')
    return investmentProperty
}

function getSpouseSuper(){
    let spouseSuper
    spouseSuper = document.getElementById('spouse_Super')
    return spouseSuper
}

function getAssetsPension() {
    if (getRelationship() == 'single') {
        return SINGLE_MAXIMUM_BASE_RATE - getReductionValue();
    }
    else {
        if (getAge(getUserAge()) >= 67 && getAge(getPartnerAge()) >= 67) {
            return COUPLE_MAXIMUM_BASE_RATE - getReductionValue();
        }
        else {
            return HALF_COUPLE_MAXIMUM_BASE_RATE - getReductionValue();
        }
    }
}

function getReductionValue(){
    if (getTypeOfPension() == 'part'){
        if (getRelationship() == 'single'){
            if (getHomeStatus() == 'yes'){
                return ((getAssetsTotal() - SINGLE_HOMEOWNER_AR)/1000)*3
            }
            else {
                return ((getAssetsTotal() - SINGLE_NONHOMEOWNER_AR)/1000)*3
            }
        }
        else {
            if (getHomeStatus() == 'yes'){
                return ((getAssetsTotal() - COUPLE_HOMEOWNER_AR)/1000)*3
            }
            else {
                return ((getAssetsTotal() - COUPLE_NONHOMEOWNER_AR)/1000)*3
            }
        }
    }
    else {
        if (getTypeOfPension() == 'full') {
            return 0
        }
        else {
            return 'no pension'
        }
    }
}

function getAssetsTotal() {
    if (getRelationship() == 'single') {
        return getVehicleInvest() + getContentInvest() + getBankAccountInvest() + getSharesInvest() + getFundsInvest() + getLoansInvest() + getSuperannuation() + getInvestmentProperty() + getGiftedAssets() + getFuneralBond() 
    }
    else {
        if (getPartnerEligiblePension() == 'no' && getIsIncomeStream() == 'no'){
            return getVehicleInvest() + getContentInvest() + getBankAccountInvest() + getSharesInvest() + getFundsInvest() + getLoansInvest() + getSuperannuation() + getInvestmentProperty() + getGiftedAssets() + getFuneralBond() 
            //sum(B13:B:14, B17:B22, B25:B26)
        }
        else {
            return getVehicleInvest() + getContentInvest() + getBankAccountInvest() + getSharesInvest() + getFundsInvest() + getLoansInvest() + getSuperannuation() + getInvestmentProperty() + getGiftedAssets() + getFuneralBond() + getSpouseSuper()
            //sum(B13:B:14, B17:B22, B25:B26, B35)
        }
    }
}


function getTypeOfPension(){
    if (getRelationship() == 'single'){
        if (getHomeStatus() == 'yes'){
            if (getAssetsTotal() <= SINGLE_HOMEOWNER_AR){
                return 'full';
            }
            else{
                if (getAssetsTotal() > PART_SINGLE_HOMEOWNER_AR){
                    return 'no pension'
                }
                else {
                    return 'part'
                }
            }
        }
        else{
            if (getAssetsTotal() <= FULL_SINGLE_NONHOMEOWNER_AR){
                return 'full'
            }
            else {
                if (getAssetsTotal() > PART_SINGLE_HOMEOWNER_AR){
                    return 'no pension'
                }
                else {
                    return 'part'
                }
            }
        }
    }
    else {
        if (getHomeStatus() == 'yes'){
            if (getAssetsTotal() <= COUPLE_HOMEOWNER_AR){
                return 'full'
            }
            else{
                if (getAssetsTotal() > PART_COUPLE_HOMEOWNER_AR){
                    return 'no pension'
                }
                else {
                    return 'part'
                }
            }
        }
        else{
            if (getAssetsTotal() <= FULL_COUPLE_NONHOMEOWNER_AR){
                return 'full'
            }
            else {
                if (getAssetsTotal() > PART_COUPLE_HOMEOWNER_AR){
                    return 'no pension'
                }
                else {
                    return 'part'
                }
            }
        }
    }
}