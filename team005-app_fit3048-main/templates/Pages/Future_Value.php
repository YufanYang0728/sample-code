<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<!doctype html>
<html lang="en">
<style>

</style>
<link rel="stylesheet" href="\team18-app_fit3048\webroot\css\styles.css" type="text/css">
<body>
<div class="container" >
    <div class="text-center" style="margin-top: 5%">
        <h2 class="text-uppercase" style="font-size: 56px">Financial Calculators</h2>
        <form id="FV_Single_Sum" >
            <ul class="no-bullets">
                <h4>Future Value of a single sum</h4>
                <li>
                    <label for="Start_Balance">Balance at Start:</label>
                    <input type="number" id="Start_Balance">
                </li>
                <li>
                    <label for="Interest">Interest (%) :</label>
                    <input type="number" id="Interest" >
                </li>
                <li>
                    <label for="Term">Terms (Year) :</label>
                    <input type="number" id="Term">
                </li>


                <button id="Submit_FV_Single_Sum"> Calculate </button>


                <h4> Outputs </h4>
                <li>
                    <label for="Future_Value_Sum">Future Value :</label>
                    <input type="text" id="Future_Value_Sum" readonly>
                </li>
                <li>
                    <label for="Today_Value">Today's Value :</label>
                    <input type="text" id="Today_Value" readonly>
                </li>
            </ul>
        </form>


        <button id="Submit_Future_Value"> Calculate </button>

        <form id="lease_form" >
            <ul class="no-bullets">
                <li>
                    <label for="Loan_Date">Total Number of Payments:</label>
                    <input type="text" id="Total_NO_Payments" readonly>
                </li>
                <li>
                    <label for="Loan_Amount">Final Payment Date:</label>
                    <input type="text" id="Final_Payment_Date" readonly>
                </li>
                <li>
                    <label for="Annual_Interest_Rate">Total Interest:</label>
                    <input type="text" id="Total_Interest" readonly>
                </li>
            </ul>
        </form>
    </div>

</div>
<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-success py-4 w-100" style="width: 100%; margin-bottom: 25%">

    <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 300%;color: white">
        <ul class="navbar-nav">
            <li class="nav-item active px-5">
                <a class="nav-link" href="#" style="border-bottom:  5px solid #f5f4eb ">Car Lease <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-5 " >
                <a class="nav-link" href="income_tax_calculator">Income Tax</a>
            </li>
            <li class="nav-item px-5">
                <a class="nav-link" href="retirement_calculator">Retirement</a>
            </li>
            <li class="nav-item px-5">
                <a class="nav-link" href="salary_sacrifice_calculator">Salary Sacrifice</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="age_pension_calculator">Age Pension</a>
            </li>
        </ul>
    </div>
</nav>
-->



<script src="\team18-app_fit3048\webroot\js\FutureValue.js"></script>
</body>
