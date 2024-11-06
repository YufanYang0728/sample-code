<!doctype html>
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
<div class="container">
    <div class="py-5 text-center">
        <div class="text-center" style="vertical-align: center; margin-bottom:2em">                    <button type="button" onclick="location.href='<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>' "  class="btn btn-primary" style="font-size: 2vh; border-radius: 12px; text-transform: uppercase">Back to Dashboard</button>
        </div>
        <h2 class="section-heading text-uppercase">Manage your investment portfolio</h2>
        <p class="section-subheading text-muted">Let's help you set up your investment portfolio!</p>
    </div>

    <div id="initialQuestion">
        <div class="card" >
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p class="section-subheading text-muted">To start! You need to review your investment profile first, complete the risk profile questionnaire to continue.</p></div>
                <div class="col-auto">
                    <button class="btn btn-primary btn-lg btn-block mt-5" onclick="location.href='iteration3_risk_profile'" type="button">Start Questionnaire!</button>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>
</body>
