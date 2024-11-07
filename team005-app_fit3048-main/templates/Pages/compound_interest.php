<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Compound Interest Calculator</h2>
            <h3 class="section-subheading text-muted">Use this tool to calculate compounding interest over many years</h3>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Starting amount</h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control input" id="txtInitialDeposit" placeholder="Initial deposit">
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary" href="#" onclick="ZeroInitialDeposit();return false;" role="button">None</button>
                        </div>
                        <script>
                            function ZeroInitialDeposit() {
                                document.getElementById('txtInitialDeposit').value = 0.0;
                                RefreshChart();
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Interest</h5>
                        <div class="input-group mb-3">
                            <input type="decimal" class="form-control input" id="txtInterestRatePercent" placeholder="Interest rate (1.5)">
                            <span class="input-group-text">% p.a.</span>
                        </div>
                        <select class="form-select input" id="selInterestFreq" aria-label="Default select example">
                            <option selected>Interest calculated...</option>
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="fortnightly">Fortnightly</option>
                            <option value="monthly">Monthly</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="yearly">Annually</option>
                        </select>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary" href="#" onclick="ZeroInterestRate();return false;" role="button">None</button>
                        </div>
                        <script>
                            function ZeroInterestRate() {
                                document.getElementById('txtInterestRatePercent').value = 0;
                                document.getElementById('selInterestFreq').value = "yearly";
                                RefreshChart();
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Regular deposit</h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="decimal" class="form-control input" id="txtRegularDeposit" placeholder="Regular deposit">
                        </div>
                        <select class="form-select input" id="selRegularDepositFreq" aria-label="Default select example">
                            <option selected>Regular deposit frequency...</option>
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Annually</option>
                        </select>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary" href="#" onclick="ZeroRegularDeposit();return false;" role="button">None</button>
                        </div>
                        <script>
                            function ZeroRegularDeposit() {
                                document.getElementById('txtRegularDeposit').value = 0;
                                document.getElementById('selRegularDepositFreq').value = "yearly";
                                RefreshChart();
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Time frame</h5>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control input" id="txtTimeLengthInYears" placeholder="Number of">
                            <span class="input-group-text">years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title text-center">Compound interest graph</h5>
                <h6 id="textout" class="card-subtitle mb-2 text-muted text-center">The height of each bar represents the total money accumulated up to that year, each bar contains a break down of the number of amount of money that was initially deposited, the amount that has been deposited regularly and the amount of interest earned on that money.</h6>
                <div class="row">
                    <canvas id="myChart" width="400" height="200" ></canvas>
                    <script>
                        function RefreshChart() {
                            function returnTimesPerYearFromAdverbial(adverbial) {
                                if (adverbial == "daily") {
                                    return 365;
                                } else if (adverbial == "weekly") {
                                    return 52;
                                } else if (adverbial == "fortnightly") {
                                    return 26;
                                } else if (adverbial == "monthly") {
                                    return 12;
                                } else if (adverbial == "quarterly") {
                                    return 4;
                                } else {
                                    return 1;
                                }
                            }

                            function calcInterestEarnedAfterOneYear(initialPrincipal, interestRateDecimal, timesInterestApplied) {
                                return (initialPrincipal * ((1 + (interestRateDecimal / timesInterestApplied)) ** timesInterestApplied)) - initialPrincipal;
                            }

                            function numberWithCommas(x) {
                                //code snippet from https://stackoverflow.com/questions/2901102/how-to-print-a-number-with-commas-as-thousands-separators-in-javascript
                                //add commas to large numbers
                                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            }

                            //get inputs from webpage
                            const initialDeposit = parseFloat(document.getElementById("txtInitialDeposit").value);
                            const interestRatePercent = parseFloat(document.getElementById("txtInterestRatePercent").value);
                            const interestFreq = document.getElementById('selInterestFreq').value;
                            const regularDeposit = parseFloat(document.getElementById("txtRegularDeposit").value);
                            const regularDepositFreq = document.getElementById("selRegularDepositFreq").value;
                            const timeLengthInYears = parseFloat(document.getElementById("txtTimeLengthInYears").value);

                            //create regular deposit array and give it an initial value
                            var regularDepositMultiplier = returnTimesPerYearFromAdverbial(regularDepositFreq);
                            const regularDepositAccumulatedArray = [regularDepositMultiplier * regularDeposit];

                            var timesInterestAppliedPerYear = returnTimesPerYearFromAdverbial(interestFreq);
                            const totalInterestEarnedArray = [calcInterestEarnedAfterOneYear(initialDeposit, interestRatePercent/100, timesInterestAppliedPerYear)];
                            const runningTotalArray = [initialDeposit + totalInterestEarnedArray[0] + regularDepositAccumulatedArray[0]];

                            //calculate values for interest earned, regular deposit and total array
                            for (let index = 1; index < timeLengthInYears; index++) {
                                regularDepositAccumulatedArray[index] = regularDepositAccumulatedArray[index - 1] + regularDepositMultiplier * regularDeposit;
                                totalInterestEarnedArray[index] = totalInterestEarnedArray[index - 1] + calcInterestEarnedAfterOneYear(runningTotalArray[index - 1], interestRatePercent / 100, timesInterestAppliedPerYear);
                                runningTotalArray[index] = totalInterestEarnedArray[index] + regularDepositAccumulatedArray[index] + initialDeposit;
                            }

                            const initialDepositAllTheWayArray = new Array(timeLengthInYears).fill(initialDeposit);
                            const dateNow = new Date();
                            const labelArray = new Array(timeLengthInYears).fill(null).map((_, i) => i + dateNow.getFullYear() + 1);

                            document.getElementById("textout").innerHTML = "After " + numberWithCommas(timeLengthInYears) + " years, you will have a total of $" + numberWithCommas(runningTotalArray[runningTotalArray.length - 1].toFixed(2)) + " dollars, earning $" + numberWithCommas(totalInterestEarnedArray[totalInterestEarnedArray.length - 1].toFixed(2)) + " from interest.";

                            if(window.myChart instanceof Chart)
                            {
                                window.myChart.destroy();
                            }
                            var ctx = document.getElementById('myChart').getContext("2d");
                            window.myChart = new Chart(ctx, {
                                data: {
                                    labels: labelArray,
                                    datasets: [{
                                        type: 'line',
                                        label: 'Total',
                                        data: runningTotalArray,
                                        borderColor: [
                                            '#a2dff0'
                                        ],
                                        borderWidth: 2
                                    },
                                    {
                                        type: 'bar',
                                        label: 'Initial amount',
                                        data: initialDepositAllTheWayArray,
                                        backgroundColor: [
                                            '#212529'
                                        ],
                                        borderColor: [
                                            '#212529'
                                        ],
                                        borderWidth: 1
                                    },
                                    {
                                        type: 'bar',
                                        label: 'Money deposited',
                                        data: regularDepositAccumulatedArray,
                                        backgroundColor: [
                                            '#4682b4'
                                        ],
                                        borderColor: [
                                            '#4682b4'
                                        ],
                                        borderWidth: 1
                                    },
                                    {
                                        type: 'bar',
                                        label: 'Interest earned',
                                        data: totalInterestEarnedArray,
                                        backgroundColor: [
                                            '#6b9bc3'
                                        ],
                                        borderColor: [
                                            '#6b9bc3'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            stacked: true,
                                        },
                                        x: {
                                            stacked: true
                                        }
                                    }
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('.input').on('input', function(){
        RefreshChart();
    });
    RefreshChart();
</script>
