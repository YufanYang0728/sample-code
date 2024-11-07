
const btn = document.getElementById('Submit_Age_pension_Basic');
btn.addEventListener('click',fetchPensionBasic);



const btn_single_pension = document.getElementById('Submit_Age_pension_single');
btn_single_pension.addEventListener('click',PensionSingle);

function fetchPensionBasic(){

    maxbaserat=26;
    
    const is_Relationship= getRelationship();

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
function getGender(){
    let is_gender;
    if (document.getElementById('is_gender_male_single').checked){
        is_gender = 'male';
    }else if(document.getElementById('is_gender_female_single').checked){
        is_gender = 'female';
    }else{
        is_gender = 'other';
    }
    return is_gender;
}

function getHomeStatus(){
    let is_Homeowner;
    if(document.getElementById('is_homeowner').checked){
        is_Homeowner = 'ownHouse';
    }else{
        is_Homeowner ='noHouse';
    }
    return is_Homeowner;
}

function getAge(DOB) {
    const Age = new Date(Date.parse(DOB));
    const Current_date = new Date();
    const C_Age = Current_date.getFullYear() - Age.getFullYear();

    return C_Age;
}
function Maximum_Assets_For_Full_Pension_H8(relationship,is_Homeowner){
    //c6 = home owner
    if (relationship === "couple" && is_Homeowner === "ownHouse"){
        return 419000;
    }else if(relationship === "couple" && is_Homeowner === "noHouse"){
        return 643500;
    } else if(relationship === "single" && is_Homeowner === "ownHouse"){
        return 280000;
    }else if(relationship === "single" && is_Homeowner === "noHouse"){
        return 504500;
    }
}

function Maximum_Assets_for_Part_Pension_H9(relationship,is_Homeowner){
    //c6 = home owner
    if (relationship === "couple" && is_Homeowner === "ownHouse"){
        return 915500;
    }else if(relationship === "couple" && is_Homeowner === "noHouse"){
        return 1140000;
    } else if(relationship === "single" && is_Homeowner === "ownHouse"){
        return 609250;
    }else if(relationship === "single" && is_Homeowner === "noHouse"){
        return 833750;
    }
}

function Deemed_Financial_Assets_H12(bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse){
    let invest_total = bank_accounts + shares + funds + loans;
    let gift_total;
    let superSingle;
    let superSpouse;
    if(gifted > 10000) {
        gift_total = gifted - 10000;
    }
    if (relationship === 'single'){
        superSingle = getSuperZ3(gender,age,Super);
        return gift_total + invest_total + superSingle;

    }else{
        superSingle = getSuperZ3(gender,age,Super);
        superSpouse = getSpouseSuperZ4(gender,age,SuperSpouse);
        return gift_total + invest_total + superSpouse + superSingle;
    }

}

function getSuperZ3(gender,age,Super){
    //c12 =gender  , c11 =age , z11=65 , z12=60

        if(gender === 'male' && age >= 65){
            return Super;
        }else if(gender === 'male' && age < 65){
            return 0;
        }else if(gender === 'female' && age >= 60){
            return Super;
        }else if(gender === 'female' && age < 60){
            return 0
        }


}

function getSpouseSuperZ4(gender,age,Super){
    if(gender === 'male' && age >= 65){
        return Super;
    }else if(gender === 'male' && age < 65){
        return 0;
    }else if(gender === 'female' && age >= 62.5){
        return Super;
    }else if(gender === 'female' && age < 62.5){
        return 0
    }

}
function Deemed_Personal_Assets_H13(vehicles_invest,content_invest,property_invest){
    return vehicles_invest + content_invest + property_invest;
}

function Total_Assessable_assets_H15(bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest){
    const Deemed_Personal_Assets = Deemed_Personal_Assets_H13(vehicles_invest,content_invest,property_invest);
    const Deemed_Financial_assets = Deemed_Financial_Assets_H12(bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse);
    return Deemed_Financial_assets+Deemed_Personal_Assets;
}


function Maximum_fortnightly_pension_H18(relationship,Age,is_gender){
    //c5 = relationship
    //c12 = gender
    //c11 = age
    if(relationship === "couple" && Age >= 65 && is_gender === "female" ){
        return 744.4;
    }else if( relationship === "couple" && Age < 65 && is_gender === "male"){
        return "N/A";
    }else if(relationship === "couple" && is_gender === "female" && Age >= 60){
        return 744.4;
    }else if(relationship === "couple" && is_gender === "female" && Age < 60){
        return  "N/A";
    }else if (relationship === "single" && is_gender === "male" && Age >= 65){
        return 987.6;
    }else if(relationship=== "single" && is_gender === "male" && Age < 65){
        return "N/A";
    }else if(relationship === "single" && is_gender === "female" && Age >= 60){
        return 987.6;
    }else if(relationship === "single" && is_gender === "female" && Age < 60){
        return "N/A";
    }
}

function Asset_test_pension_reduction_u3(relationship,homeowner,bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest){
    //c5 relationship
    //h15 total assessable assets
    //h8 maximum assest for full pension
    //m17 = 1.5
    //m16 = 3
    //Maximum_Assets_For_Full_Pension_H8();


    const maximum_asset_full_pension = Maximum_Assets_For_Full_Pension_H8(relationship,homeowner);
    const total_assessable_assets = Total_Assessable_assets_H15(bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest);

    if(relationship === "couple"){
        return ((total_assessable_assets - maximum_asset_full_pension) / 1000) * 1.5;
    }else if(relationship === 'single'){
        return ((total_assessable_assets - maximum_asset_full_pension) / 1000) * 3;
    }
}


function pensionReduction_H19(relationship,Age,is_gender,bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest,homeowner){
    //H18 maximum fortnightly pension
    //H15 total assessable assets
    //H9 maximum assets for part pension
    //H8
    //U3 asset test pension reduction

    const maximum_fortnightly_pension = Maximum_fortnightly_pension_H18(relationship,Age,is_gender);
    const total_assessable_assets =  Total_Assessable_assets_H15(bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest);
    const maximum_asset_part_pension = Maximum_Assets_for_Part_Pension_H9(relationship,homeowner);
    const maximum_asset_full_pension =  Maximum_Assets_For_Full_Pension_H8(relationship,homeowner);
    const asset_test_pension_reduction = Asset_test_pension_reduction_u3(relationship,homeowner,bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest);
    if(maximum_fortnightly_pension === 'N/A'){
        return 'N/A';
    }else if(total_assessable_assets >= maximum_asset_part_pension){
        return 0;
    }else if(maximum_asset_full_pension < total_assessable_assets && total_assessable_assets > maximum_asset_part_pension){
        return asset_test_pension_reduction;
    }

}

function Total_fortnightly_pension_payableH21(relationship,Age,is_gender,bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest,homeowner){
    const pension_reduction = pensionReduction_H19(relationship,Age,is_gender,bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,0,vehicles_invest,content_invest,property_invest,homeowner);
    const maximum_fortnightly_pension = Maximum_fortnightly_pension_H18( relationship,Age,is_gender);


    const diff = maximum_fortnightly_pension - pension_reduction;
    if(maximum_fortnightly_pension === "N/A"){
        return "N/A";
    }else {
        if(diff > 0){
            return diff;
        }else{
            return 0;
        }
    }

}

function pharma_allowance_H22(bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest,is_Homeowner){

    /*
     //H18 maximum fortnightly pension
    //H15 total assessable assets
    //H9 maximum assets for part pension
    //c5 relationship
     //c12 = gender
    //c11 = age
     M37 single 8.8
     M36 couple each 7.9
     */
    const total_assessable_asset = Total_Assessable_assets_H15(bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest);
    const maximum_asset_part_pension = Maximum_Assets_for_Part_Pension_H9(relationship,is_Homeowner);
    if(total_assessable_asset > maximum_asset_part_pension){
        return 0;
    }else if(maximum_fortnightly_pension === "N/A"){
        return "N/A";
    }else if(relationship === "single" && gender === "male" && age >=65){
        return 8.8;
    }else if(relationship ===  "couple" && gender === "male" && age >= 65){
        return 7.9;
    }else if(relationship === "single" && gender === "female" && age >= 61.5){
        return 8.8;
    }else if(relationship === "couple" && gender=== "female"  && age >= 61.5){
        return 7.9
    }

}

function total_benefit_payable_H25(bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest,homeowner){
    //h21
    //h22
    //I21
    //I22
    const pharmaceutical_allowance = pharma_allowance_H22(bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest,homeowner);
    const total_fortnightly_pension_payable = Total_fortnightly_pension_payableH21(relationship,age,gender,bank_accounts,shares,funds,loans,gifted,gender,age,relationship,Super,SuperSpouse,vehicles_invest,content_invest,property_invest,homeowner);

    if(total_fortnightly_pension_payable === "N/A"){
        return "N/A";
    }else{
        return total_fortnightly_pension_payable+pharmaceutical_allowance;
    }
}

function maximum_fortnightly_income_full_pensionH29(relationship){
    if(relationship === "single"){
        return 190;
    }else if(relationship === "couple"){
        return 336
    }
}

function maximum_fortnightly_income_part_pensionH30(relationship){
    if(relationship === "single"){
        return 2165.19;
    }else if(relationship === "couple"){
        return 3313.60;
    }
}

function Income_from_salary_H32(gross_annual_salary,gross_annual_salary_spouse){
    return (gross_annual_salary_spouse + gross_annual_salary)/26;
}

function sum_financialAssetsC23toC27(banks,share,funds,insurance,bonds,Super,super_spouse){
    return parseInt(banks)+parseInt(share)+parseInt(funds)+parseInt(insurance)+parseInt(bonds)+parseInt(Super)+parseInt(super_spouse);
}

function Deemed_income_from_financial_assetsH33(relationship,sum_financialAssets,gifted_assets,funeral_bond){
    /*
    c5 = relationship
    sum c23 -> c27
    c45 = gifted assets
    c46 = bond
    c47 = 0
    M31 = 56400
    c46
    M30 = 0.25%
    M31 = 56400
    M32 = 93600
    N30 = 0.30%
     */
    let gifted_total;
    if(gifted_assets > 10000) {
        gifted_total = gifted_assets - 10000;
    }else{
        gifted_total = 0;
    }

    if(relationship === "single"){
        if(sum_financialAssets+gifted_total+funeral_bond <= 56400){
            return (sum_financialAssets+funeral_bond+gifted_total)*(0.25/100)/26;
        }else{
            return (56400*(0.25/100))+((sum_financialAssets+funeral_bond+gifted_total)-56400)*(0.3/100)/26;
        }
    }else if(relationship === "couple"){
        if(sum_financialAssets+funeral_bond+gifted_assets <= 93600){
            return (sum_financialAssets+funeral_bond+gifted_assets)*(0.25/100)/26;
        }else{
            return (93600*(0.25/100)+((sum_financialAssets+funeral_bond+gifted_assets)-93600)*(0.3/100)/26);
        }
    }


}

function Deemed_income_from_complying_annuitiesH34(){
    //=((E33-(C33/D33))/26)+((E34-(C34/D34))/26)+((E38-(C38/D38))/26)+((E39-(C39/D39))/26)
    /*
        e33 = 3732
        c33 = 0
        d33 = 13
        e34 = 0
        c34 = 0
        d34 = 20
        e38 = 0
        c38 = 0
        d38 = 4
        e39 = 0
        c39 = 0
        d39 = 15
     */
    //3732
    return (((3732-(0/13))/26)+(((0-(0/20)))/26)+(((0-(0/4)))/26)+(((0-(0/15)))/26));
}

function life_expectancy(gender,age){

    //Age 50 - 109

    const male_expectancy = [
        28.64, 27.74, 26.85, 25.97, 25.09, 24.22, 23.36, 22.52, 21.68, 20.86, 20.05, 19.25, 18.46, 17.7, 16.94, 6.21, 15.49, 14.79, 14.11, 13.44, 12.8, 12.17, 11.56, 10.96, 10.38, 9.82, 9.27, 8.74, 8.24,
        7.76, 7.3, 6.87, 6.46, 6.08,5.73, 5.4, 5.1, 4.82, 4.57, 4.35, 4.16, 3.99, 3.86, 3.73, 3.62, 3.50, 3.39, 3.28, 3.18, 3.07, 2.98, 2.88, 2.79, 2.71, 2.64, 2.57, 2.51, 2.45, 2.40, 2.36];

    const female_expectancy = [33.11, 32.18, 31.26, 30.34, 29.43, 28.53, 27.63, 26.74, 25.86, 24.98, 24.11, 23.25, 22.39, 21.54, 20.7, 19.88, 19.06, 18.25, 17.46, 16.67, 15.9,
       15.14, 14.4, 13.67, 12.96, 12.26, 11.58, 10.92, 10.28, 9.67, 9.09, 8.53, 8, 7.48, 7, 6.53, 6.1, 5.69, 5.32, 4.98, 4.67, 4.39, 4.15, 3.93, 3.72, 3.54, 3.37, 3.21, 3.07, 2.93, 2.81, 2.7, 2.59, 2.5, 2.41, 2.32, 2.24, 2.17, 2.1, 2.03
    ];
    for(let i = 0 ; i < 50; i++){
        male_expectancy.unshift(0);
        female_expectancy.unshift(0);
    }
    if(gender === "male" && age >=50 && age < 110){
        return male_expectancy[age];
    }
    else if(gender ==="female" && age>=50 && age < 110){
        return female_expectancy[age];
    }else{
        return 1;
    }


}



function Deemed_income_for_client_allocated_pensionV5(gender,age){
    /*
    =IF((E35-(C35/D35))/26<=0,0,IF((E35-(C35/D35))/26>0,(E35-(C35/D35))/26))
    e35 = 8900
    c35 = 0
    d35 = life_expectancy

     */
    const life_expectancy_output = life_expectancy(gender,age)
    if(((8900-(0/life_expectancy_output))/26 <= 0)){
        return 0;
    }else if(((8900-(0/life_expectancy_output))/26 > 0)){
        return ((8900-(0/life_expectancy_output))/26);
    }
}
function Deemed_income_for_spouse_allocated_pensionV6(gender,age){
    /*
    =IF((E36-(C36/D36))/26<=0,0,IF((E36-(C36/D36))/26>0,(E36-(C36/D36))/26))
    e36
    c36
    d36
     */
    if((8900-(0/life_expectancy(gender,age))/26 <= 0)){
        return 0;
    }else if((8900-(0/life_expectancy(gender,age))/26 > 0)){
        return (8900-(0/life_expectancy(gender,age))/26)
    }
}

function Deemed_income_from_allocated_pensionsH35(gender,age,gender_spouse,age_spouse,relationship){
    //Sum(v5:v6)
    if(relationship === "single"){
        return Deemed_income_for_client_allocated_pensionV5(gender,age);
    }else{
        let total =  Deemed_income_for_client_allocated_pensionV5(gender,age) + Deemed_income_for_spouse_allocated_pensionV6(gender_spouse,age_spouse);
        return total;
    }

}

function Deemed_income_from_non_complying_pension(){
    //=((C37/D37))/26+(SUM(E40:E41)/26)
    /*
    c37
    d37
    e40
    e41

     */
}

function total_deemed_fortnightly_income_H38(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,gross_annual_salary_spouse,banks,share,funds,insurance,bonds,Super,super_spouse){
    //return H32 -> H37
    const income_from_salary = Income_from_salary_H32(gross_annual_salary,gross_annual_salary_spouse); //H32
    const sum_assets = sum_financialAssetsC23toC27(banks,share,funds,insurance,bonds,Super,super_spouse);
    const Deemed_income_financial_assets =  Deemed_income_from_financial_assetsH33(relationship,sum_assets,gifted_assets,funeral_bond); //H33
    const Deemed_income_complying_annuities = Deemed_income_from_complying_annuitiesH34(); //H34
    const Deemed_income_from_allocate_pensions = Deemed_income_from_allocated_pensionsH35(gender,age); //H35
    let temp = income_from_salary + sum_assets + Deemed_income_financial_assets + Deemed_income_complying_annuities + Deemed_income_from_allocate_pensions;
    //console.log(temp);
   // console.log(income_from_salary,sum_assets,Deemed_income_financial_assets,Deemed_income_complying_annuities,Deemed_income_from_allocate_pensions);
    //console.log(income_from_salary+Deemed_income_financial_assets+Deemed_income_complying_annuities+Deemed_income_from_allocate_pensions);

    return temp;
}


function pension_reductionH42(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,gross_annual_salary_spouse,banks,share,funds,insurance,bonds,Super,super_spouse){
    //H38
    //H29
    //M28 = 0.25
    //H41 = H18
    //M27 = 0.5
    //c5 = relationship


    const maximum_fortnightly_pension = Maximum_fortnightly_pension_H18(relationship,age,gender);
    const total_deemed_fortnightly_come = total_deemed_fortnightly_income_H38(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,gross_annual_salary_spouse,banks,share,funds,insurance,bonds,Super,super_spouse);
    const maximum_fortnightly_income_full_pension = maximum_fortnightly_income_full_pensionH29(relationship);
   // console.log(maximum_fortnightly_pension,total_deemed_fortnightly_come ,maximum_fortnightly_income_full_pension);

    if(maximum_fortnightly_pension === "N/A"){
        return "N/A";
    }else if(total_deemed_fortnightly_come <= maximum_fortnightly_income_full_pension){
        return 0;
    }else if(total_deemed_fortnightly_come > maximum_fortnightly_income_full_pension && relationship ==="couple"){
        let temp = (total_deemed_fortnightly_come - maximum_fortnightly_income_full_pension) * 0.25;
       // console.log(temp);
        return Math.min(temp,maximum_fortnightly_pension);

    }else if (total_deemed_fortnightly_come > maximum_fortnightly_income_full_pension && relationship ==="single"){
        let temp = (total_deemed_fortnightly_come - maximum_fortnightly_income_full_pension) * 0.5;
        //console.log(temp);
        return Math.min(temp,maximum_fortnightly_pension);
    }

}

function total_fortnightly_pension_payable_H44(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,gross_annual_salary_spouse,banks,share,funds,insurance,bonds,Super,super_spouse){
    const Maximum_fortnightly_pension =  Maximum_fortnightly_pension_H18(relationship,age,gender);
    const pension_reduction =  pension_reductionH42(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,gross_annual_salary_spouse,banks,share,funds,insurance,bonds,Super,super_spouse);
   // console.log(Maximum_fortnightly_pension,pension_reduction);

    if(Maximum_fortnightly_pension === "N/A"){
        return Maximum_fortnightly_pension;
    }else{
        return Maximum_fortnightly_pension - pension_reduction;
    }

}

function pharmaceutical_allowance_H45(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,gross_annual_salary_spouse,banks,share,funds,insurance,bonds,Super,super_spouse){
    /*
    H38 total deemed fortnightly income
    H30 maximum fortnightly income for part pension
    H18 pension reduction
    C5 relationship
    C12 gender
    C11 age
    M37 8.8
    M36 7.9
     */
    const total_deemed_fortnightly_income =  total_deemed_fortnightly_income_H38(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,gross_annual_salary_spouse,banks,share,funds,insurance,bonds,Super,super_spouse);
    const maximum_fortnightly_income_part_pension = maximum_fortnightly_income_part_pensionH30(relationship);
    const maximum_fortnightly_pension =  Maximum_fortnightly_pension_H18(relationship,age,gender);

    //console.log(total_deemed_fortnightly_income,maximum_fortnightly_income_part_pension);

    if(total_deemed_fortnightly_income > maximum_fortnightly_income_part_pension){
        return 0;
    }else if(maximum_fortnightly_pension === "N/A"){
        return "N/A";
    }else if(relationship ==="single" && gender === "male" && age >=65){
        return 8.8;
    }else if(relationship === "couple" && gender === "male"  && age >= 65){
        return 7.9;
    }else if(relationship === "single" && gender === "female" && age >= 61.5){
        return 8.8;
    }else if(relationship === "couple" && gender === "female" && age >= 61.5){
        return 7.9;
    }

}

function lettersOnly()
{
    var charCode = event.keyCode;

    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)

        return true;
    else
        return false;
}
function PensionSingle(){
    const relationship = 'single';
    const DOB = document.getElementById('DOB_single').value;
    const name_single = document.getElementById('name_single').value;
    let bank_accounts = document.getElementById('bank_accounts_invest_single').value;
    let shares = document.getElementById('shares_invest_single').value;
    let funds = document.getElementById('funds_invest_single').value;
    let gross_annual_salary = document.getElementById('Gross_annual_salary_single').value;
    let funeral_bond = document.getElementById('funeral_bond_single').value;
    let gifted_assets = document.getElementById('gifted_assets-single').value
    const vehicles_invest = document.getElementById('vehicle_invest_single').value;
    const content_invest = document.getElementById('content_invest_single').value;
    const property_invest = document.getElementById('property_invest_single').value;
    let insurance = document.getElementById('insurance_invest_single').value;
    let bond = document.getElementById('loans_invest_single').value;
    let Super = document.getElementById('super_single').value;


        const DOB_String = DOB.toString();
        const age = getAge(DOB_String);
        let gender = getGender();
        let is_Homeowner = getHomeStatus();

        shares = parseInt(shares);
        funds = parseInt(funds);
        bank_accounts = parseInt(bank_accounts);
        gross_annual_salary = parseInt(gross_annual_salary);
        funeral_bond = parseInt(funeral_bond);
        gifted_assets = parseInt(gifted_assets);
        insurance = parseInt(insurance);
        bond = parseInt(bond);
        Super = parseInt(Super);


        const sum_financialAssets = sum_financialAssetsC23toC27(bank_accounts,shares,funds,insurance,bond,Super,0);
        const pharma_allowance = pharmaceutical_allowance_H45(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,0,bank_accounts,shares,funds,insurance,bond,Super,0);

        const total_fortnightly_pension_payable =  total_fortnightly_pension_payable_H44(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,0,bank_accounts,shares,funds,insurance,bond,Super,0);
        //console.log(gender,age,relationship,parseInt(gifted_assets),sum_financialAssets,parseInt(funeral_bond), parseInt(gross_annual_salary),0, parseInt(bank_accounts),parseInt(shares),parseInt(funds),parseInt(insurance),parseInt(bond),parseInt(Super),0);
        const H18 = Maximum_fortnightly_pension_H18(relationship,age,gender);
        const H42 = pension_reductionH42(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,0,bank_accounts,shares,funds,insurance,bond,Super,0);
        //console.log(H18,H42);

        //console.log(gender,age,relationship,gifted_assets,sum_financialAssets,funeral_bond,gross_annual_salary,bank_accounts,shares,funds,insurance,bond,Super);

        //console.log(pharma_allowance,total_fortnightly_pension_payable);

        let output;
        output = total_fortnightly_pension_payable - pharma_allowance;
        //console.log(output);
        if(output == "NaN"){
            document.getElementById("model_output").innerHTML = "$ " + output;
        } else{
            document.getElementById("model_output").innerHTML = "$ " + 0;
        }





}

function PensionDouble(){
    //const is_Homeowner = document.querySelector('input[name="is_house"]:checked').value;
    //const is_gender = document.querySelector('input[name="is_gender"]:checked ').value;
    //const is_gender_spouse = document.querySelector('input[name="is_gender_spouse"]:checked ').value;

}



