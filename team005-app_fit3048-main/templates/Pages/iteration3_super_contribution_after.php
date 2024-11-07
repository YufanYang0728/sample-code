<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    .hide{
        display: none;
    }
    .hide span{
        color: #0d6efd;
        font-weight: bold;
    }
    td{
        padding-bottom: 2vh;
    }
</style>
<body class="bg-light">
<div class="container-fluid">
    <main class="py-5 text-center">
        <div class="py-5 text-center">
            <h2 class="section-heading text-uppercase">Make contribution to your super</h2>
            <p class="section-subheading text-muted">Let's help you set up your retirement goals by guiding you through making contributions to your super!</p>
        </div>
        <div class="card" style="width:50%;margin:auto;padding: 2vh">
            <div class="text-center">
                <?php if ($_SESSION['my_age']>75){ ?>
                    <p>Sorry, Your age is over 75!</p>
                    <p>You cannot contribute into superannuation.</p>
                    <p>You do not qualify to make after-tax contributions</p>
                    <a class="btn btn-primary " href="<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>">Back to Dashboard</a>
                <?php } else {?>
                <div class="row" style="justify-content: center" id="input">
                    <form>
                        <h4>I have contributed </h4>
                        <table style="margin-left: auto;margin-right: auto;text-align: left">
                            <tr>
                                <td>This year</td>
                                <td><input type="number" id="thisYear" class="form-control" placeholder="$"  maxlength="6" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="1" pattern="[0-9]+" onkeypress="return event.charCode >= 48 && event.charCode <= 57" ></td>
                            </tr>
                            <tr> <td> <div style="display: none;color: red" id="this_error" > <span >Please enter a value less than 110,000 </span></div> </td></tr>


                            <tr>
                                <td>Last year</td>
                                <td><input type="number" id="lastYear" class="form-control" placeholder="$" maxlength="6" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="1" pattern="[0-9]+" onkeypress="return event.charCode >= 48 && event.charCode <= 57" ></td>

                            </tr>
                            <tr>  <td> <div style="display: none;color: red" id="last_error"> <span>Please enter a value less than 110,000 </span></div> </td></tr>


                            <tr>
                                <td>The year before</td>
                                <td><input type="number" id="yearBefore" class="form-control" placeholder="$" maxlength="6" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  step="1" pattern="[0-9]+" onkeypress="return event.charCode >= 48 && event.charCode <= 57" ></td>

                            </tr>
                            <tr> <td>  <div style="display: none;color: red" id="before_error"> <span>Please enter a value less than 110,000 </span></div> </td> </tr>

                        </table>
                        <button type="button" class="btn btn-primary" style="margin-top: 1em" onclick="displayOutput()">calculate</button>
                        <br>
                        <br>
                    </form>

                </div>
            </div>
            <script>
                function displayOutput(){
                    const thisYear = document.getElementById("thisYear").value;
                    const lastYear = document.getElementById("lastYear").value;
                    const yearBefore = document.getElementById("yearBefore").value;
                    if (thisYear == ''|| thisYear > 110000){
                        document.getElementById("this_error").style.display ="block";
                    } else if (thisYear <= 110000){
                        document.getElementById("this_error").style.display ="none";
                    }

                    if (lastYear == '' || lastYear > 110000){
                        document.getElementById("last_error").style.display ="block";
                    }else if (lastYear <= 110000){
                        document.getElementById("last_error").style.display ="none";
                    }


                    if (yearBefore == ''|| yearBefore > 110000){
                        document.getElementById("before_error").style.display ="block";

                    }else if (yearBefore <= 110000){
                        document.getElementById("before_error").style.display ="none";
                    }
                    if (thisYear != ''&& lastYear != '' && yearBefore != '' && thisYear <= 110000 && lastYear <= 110000  && yearBefore <= 110000){
                        var x = document.getElementById("input");
                        var y = document.getElementById("output");
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                            y.style.display ="block";
                        }

                        let maxThisYear = 110000 - thisYear;
                        let yearForward = 330000 - thisYear;
                        document.getElementById("myThisYear").innerHTML = maxThisYear;
                        document.getElementById("myLastYear").innerHTML = yearForward;



                    }
                }
            </script>


            <div class="hide" id="output">
                <div class="text-center">
                    <h3>Result</h3>
                    <p>You can contribute this year up to:$<span id="myThisYear"></span></p>
                    <h4>Or</h4>
                    <p>You can bring forward 2 years and contribute up to:$<span id="myLastYear"></span></p>
                </div>
                <button style="margin-bottom: 1vh" type="button" class="btn btn-primary" onclick="seePre()">Next</button>
            </div>

            <script>
                function seePre(){
                    var x = document.getElementById("output");
                    var y = document.getElementById("seePre");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                        y.style.display ="block";
                    }

                }
            </script>
            <div class="hide" id="seePre">
                <div class="col-auto" style="padding: 2vh">
                    <p class="lead">Do you wish to see options for Before Tax Contributions?</p>
                    <div class="row text-center" style="justify-content: center">
                        <div class="col-1">
                            <button class="btn btn-primary"  onclick="location.href='iteration3_super_contribution' ">Yes</button>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-primary " href="iteration3_portfolio_1" style="padding-left: 2vh;margin-left: 2vh">No</a>
                        </div>
                    </div>

                </div>
            </div>

            <?php }?>
        </div>
    </main>
</div>
</body>

