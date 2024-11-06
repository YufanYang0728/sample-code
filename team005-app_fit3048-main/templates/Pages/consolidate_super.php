
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">
<head>
    <!-- Custom styles for this template -->
    <link href="../webroot/css/form-validation.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .hide {
            display: none;
        }
    </style>
</head>

<body class="bg-light">
<div class="container-fluid">
    <main class="py-5 text-center">
        <div class="py-5 text-center" id="title">
            <h2 class="section-heading text-uppercase">Consolidate super</h2>
            <p class="section-subheading text-muted">Let's help you consolidate your superannuation!</p>
        </div>

        <div id="initialQuestion">
            <form>
                <div class="card" style="width:50%;margin:auto">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <p class="lead">To start! Please go to the ATO online (MyGov) to see if you have any lost super</p>
                        <P class="lead">You can access this <a href="https://www.ato.gov.au/forms/searching-for-lost-super/#Howtosearchforyourlostsuper1" target="_blank">here!</a></P>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <button class="btn btn-primary btn-lg btn-block mt-5" onclick="startQuestionnaire()" type="button">Start Questionnaire!</button>
                    </div>
                </div>
                <br>
                <br>
                </div>
            </form>
        </div>
        <script>
            function startQuestionnaire() {
                var x = document.getElementById("initialQuestion");
                var y = document.getElementById("eligibility")
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                    y.style.display ="block";
                }
            }
        </script>
        <div class="hide" id="eligibility">
            <form>
                <div class="card" style="width:50%;margin:auto;padding: 2vh">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <p class="lead">Do you have only one super account?</p>
                    </div>
                    <div class="col-auto">
                        <select class="form-select" id="test" name="form_select">
                            <option value="" disabled selected>Choose..</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary btn-lg btn-block mt-5" onclick="socialSecurity();" type="button">Next</button>
                </div>
            </form>
        </div>
        </div>
        <script>
            function socialSecurity() {
                var y = document.getElementById("eligibility")
                var test = $('#test').val();
                if(test === "1") {
                    if (y.style.display === "none") {
                        y.style.display = "block";
                    } else {
                        document.getElementById("selectYes").style.display ="block";
                        y.style.display = "none";
                    }
                }
                else if (test === "0"){
                    document.getElementById("title").style.display ="none";
                    document.getElementById("selectNo").style.display ="block";
                    y.style.display = "none";
                }
            }
        </script>
        <div class="hide" id="selectNo">
            <div class="container-fluid" style="width: 70%">

                <div id="compare">
                    <h2 class="section-heading text-uppercase">Compare funds</h2>
                    <p class="section-subheading text-muted">Let's help you find the most suitable product!</p>
                    <br>

                    <table class="table table-bordered table-hover table-dark" style="width:40%;margin:auto">
                        <thead >
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Fee(%)</th>
                            <th scope="col">Growth(%)</th>
                            <th scope="col">Defensive(%)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">BlackRock Global Allocation Aus D</th>
                            <td>0.22</td>
                            <td>60.45</td>
                            <td>39.55</td>
                        </tr>
                        <tr>
                            <th scope="row">BlackRock W Monthly Income D</th>
                            <td>0.55</td>
                            <td>0</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <th scope="row">Vanguard Australian Shares Index</th>
                            <td>0.46</td>
                            <td>100</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">Vanguard International Shares Index</th>
                            <td>0.38</td>
                            <td>100</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">CFS Wholesale Enhanced Yield</th>
                            <td>0.53</td>
                            <td>21.12</td>
                            <td>78.88</td>
                        </tr>
                        <tr>
                            <th scope="row">AMP Capital Wholesale Global Equity - Value Fund</th>
                            <td>0.98</td>
                            <td>98.43</td>
                            <td>1.57</td>
                        </tr>
                        <tr>
                            <th scope="row">Netwealth Active Balanced Fund</th>
                            <td>0.7</td>
                            <td>55.09</td>
                            <td>44.91</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <p class="section-subheading text-muted">Notice: E.g  70,000 balance with $35,000 in BlackRock Global Allocation AUS D and BlackRock W Monthly Income D</p>
                    <br>
                    <div class="row" style="justify-content: center">
                        <div class="col-auto">
                            <div class="card" style="margin-bottom: 2vh">
                                <div class="card-header">
                                    Macquarie Investment Manager II
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover table-dark">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Rate(%)</th>
                                            <th scope="col">Balance($)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">BlackRock Global Allocation Aus D</th>
                                            <td>0.22</td>
                                            <td>35000.00</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">BlackRock W Monthly Income D</th>
                                            <td>0.55</td>
                                            <td>35000.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Admin Fees</th>
                                            <td>0.49%</td>
                                            <td>70000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" >Total Fee($)</th>
                                            <td colspan="2">612.5</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card"  style="margin-bottom: 2vh">
                                <div class="card-header">
                                    BT Panorama
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover table-dark">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Rate(%)</th>
                                            <th scope="col">Balance($)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">BlackRock Global Allocation Aus D</th>
                                            <td>0.22</td>
                                            <td>35000.00</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">BlackRock W Monthly Income D</th>
                                            <td>0.55</td>
                                            <td>35000.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Admin Fees</th>
                                            <td>0.15%</td>
                                            <td>70000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" >Total Fee($)</th>
                                            <td colspan="2">914.5</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card" style="margin-bottom: 2vh">
                                <div class="card-header">
                                    AMP North
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover table-dark">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Rate(%)</th>
                                            <th scope="col">Balance($)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">BlackRock Global Allocation Aus D</th>
                                            <td>0.22</td>
                                            <td>35000.00</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">BlackRock W Monthly Income D</th>
                                            <td>0.55</td>
                                            <td>35000.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Admin Fees</th>
                                            <td>0.56%</td>
                                            <td>70000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" >Total Fee($)</th>
                                            <td colspan="2">1786</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card" style="margin-bottom: 2vh">
                                <div class="card-header">
                                    Special title treatment
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover table-dark">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Rate(%)</th>
                                            <th scope="col">Balance($)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">BlackRock Global Allocation Aus D</th>
                                            <td>0.22</td>
                                            <td>35000.00</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">BlackRock W Monthly Income D</th>
                                            <td>0.55</td>
                                            <td>35000.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Admin Fees</th>
                                            <td>0.48%</td>
                                            <td>70000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" >Total Fee($)</th>
                                            <td colspan="2">1411</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" onclick="toolImportant()">Next</button>
        </div>
        <script>
            function toolImportant(){
                document.getElementById("selectNo").style.display ="none";
                document.getElementById("importantNote").style.display ="block";
                document.getElementById("title").style.display ="block";
            }
        </script>
        <div class="hide" id="importantNote">
           <div class="container-fluid" style="width: 50%">
               <h2>Important:</h2>
               <br>
               <div class="card" style="width:50%;margin:auto;padding: 2vh">
               <p>Important: If you choose to consolidate your super
                   accounts into one, this will close your other accounts
                   and may cancel any insurance or any other
                   entitlements associated with those accounts.</p>
               <br>
                   <div class="col-auto"> <button class="btn btn-primary" onclick="nextImportant()">Next</button></div>

           </div>
           </div>
        </div>
        <script>
            function nextImportant(){
                document.getElementById("importantNote").style.display ="none";
                document.getElementById("afterImportant").style.display ="block";
            }
        </script>
        <div class="hide" id="afterImportant">
            <div class="card" style="width:50%;margin:auto;padding: 2vh">
                <div class="col-auto">    <button class="btn btn-primary"  onclick="location.href= '<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>'" >Back to dashboard</button>
                </div>
            <div class="row text-center" style="justify-content: center">
                <p>Do you want to explore other options?</p>
                <div class="col-auto">
                    <button class="btn btn-primary"  onclick="# ">Yes(coming soon)</button>
                </div>
                <div class="col-1">
                    <button class="btn btn-primary" onclick="readyRetire()">No</button>
                </div>
            </div>
            </div>
        </div>

        <div class="hide" id="selectYes">
            <div class="card" style="width:50%;margin:auto;padding: 2vh">
                <div class="col-auto">    <button class="btn btn-primary"  onclick="location.href= '<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>'" >Back to dashboard</button>
                </div>
            <div class="allHere" id="allHere">
                <div class="form-group fieldGroup">
                        <p class="lead">You don't need to consolidate your super.</p>
                </div>
                <div class="row text-center" style="justify-content: center">
                    <p>Do you want to explore other options?</p>
                    <div class="col-auto">
                        <button class="btn btn-primary"  onclick="#" >Yes(coming soon)</button>
                    </div>

                    <div class="col-1">
                        <button class="btn btn-primary" onclick="readyRetire()">No</button>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <script>
            function readyRetire(){
                var x = document.getElementById("selectYes");
                var y= document.getElementById("readyRetire");
                if (x.style.display === "none") {
                    x.style.display = "block";
                    document.getElementById("afterImportant").style.display ="none";

                } else {
                    x.style.display = "none";
                    y.style.display ="block";
                    document.getElementById("afterImportant").style.display ="none";
                }

            }
        </script>
        <div class="hide" id="readyRetire">
            <div class="card" style="width:50%;margin:auto;padding: 2vh">
            <div class="allHere" id="allHere">
                <div class="form-group fieldGroup">
                    <p class="lead">Are you ready to retire now?</p>
                </div>
                <div class="row text-center" style="justify-content: center">
                    <div class="col-1">
                        <button class="btn btn-primary"  onclick="location.href='income_stream' ">Yes</button>
                    </div>
                    <div class="col-1" style="margin-left: 2vh; padding-left: 2vh">
                        <a class="btn btn-primary " href="<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>">No</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </main>
</div>
</body>
