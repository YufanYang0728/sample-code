<!doctype html>
<html lang="en">
<head>
    <?php
    echo $this->Html->js("../webroot/css/investment.js");
    ?>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

    <script type="text/javascript" src="../../webroot/js/clearview_occupations.json"></script>
    <script type="text/javascript" src="../../webroot/js/neos_occupations.json"></script>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/webroot/css/form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">

<form action="api" method="get">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Let's get to know each other</h2>
                <p class="lead">By filling in the form we will have a better understanding on how to serve you best.</p>
            </div>

            <div class="py-5 text-center">
                <p class="lead">Do you hold any existing investments currently?</p>
                <select aria-label="Default select example" id="state" name="state" required>
                    <option>Yes</option>
                    <option>No</option>
            </div>


            <div class="form-group fieldGroup">
                <form>
                    <div class="input-group">
                        <div class="column">
                            <p class="name">Company Name:</p>
                            <select aria-label="Default select example" id="state" name="state" required>
                                <option value="" disabled selected>Select your option</option>
                                <option>NSW</option>
                                <option>Vic</option>
                                <option>Qld</option>
                                <option>SA</option>
                                <option>WA</option>
                                <option>Tas</option>
                                <option>NT</option>
                                <option>ACT</option>
                            </select>
                        </div>

                        <div class="column">
                            <p class="name">Investment Type:</p>
                            <select aria-label="Default select example" id="state" name="state" required>
                                <option value="" disabled selected>Select your option</option>
                                <option>NSW</option>
                                <option>Vic</option>
                                <option>Qld</option>
                                <option>SA</option>
                                <option>WA</option>
                                <option>Tas</option>
                                <option>NT</option>
                                <option>ACT</option>
                            </select>
                        </div>

                        <div class="column">
                            <p class="name">Amount Invested:</p>
                            <input type="number" min="0" placeholder="$" id="invested" name="invested">
                        </div>

                        <div class="input-group-addon">
                            <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
                        </div>
                    </div>
                </form>
            </div>

            <br>

            <div>

            </div>

            <br>

            <button class="btn btn-primary btn-lg btn-block" type="button">Continue >></button>
            <hr class="my-4">
    </div>

    <!-- copy of input fields group -->
    <div class="form-group fieldGroupCopy" style="display: none;">
        <div class="input-group">
            <div class="column">
                <p class="name">Company Name:</p>
                <select aria-label="Default select example" id="state" name="state" required>
                    <option value="" disabled selected>Select your option</option>
                    <option>NSW</option>
                    <option>Vic</option>
                    <option>Qld</option>
                    <option>SA</option>
                    <option>WA</option>
                    <option>Tas</option>
                    <option>NT</option>
                    <option>ACT</option>
                </select>
            </div>

            <div class="column">
                <p class="name">Investment Type:</p>
                <select aria-label="Default select example" id="state" name="state" required>
                    <option value="" disabled selected>Select your option</option>
                    <option>NSW</option>
                    <option>Vic</option>
                    <option>Qld</option>
                    <option>SA</option>
                    <option>WA</option>
                    <option>Tas</option>
                    <option>NT</option>
                    <option>ACT</option>
                </select>
            </div>

            <div class="column">
                <p class="name">Amount Invested:</p>
                <input type="number" min="0" placeholder="$" id="invested" name="invested">
            </div>

            <div class="input-group-addon">
                <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            //group add limit
            var maxGroup = 10;

            //add more fields group
            $(".addMore").click(function(){
                if($('body').find('.fieldGroup').length < maxGroup){
                    var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
                    $('body').find('.fieldGroup:last').after(fieldHTML);
                }else{
                    alert('Maximum '+maxGroup+' groups are allowed.');
                }
            });

            //remove fields group
            $("body").on("click",".remove",function(){
                $(this).parents(".fieldGroup").remove();
            });
        });
    </script>
</form>
</div>
</div>
</main>
</div>

</body>
</html>
