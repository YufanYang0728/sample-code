<?php
//get data from insurance.php
$firstName = $_GET["firstName"];
$lastName = $_GET["lastName"];
$birthDate = $_GET["dob"];
$smoker = $_GET["smoker"];
if ($smoker == "been smoking") {
    $smoker = "true";
} elseif ($smoker == "not been smoking") {
    $smoker = "false";
}
$neosOccupation = $_GET["neosOccupation"];
$clearViewOccupation = $_GET["clearViewOccupation"];
$neosOccupation = 'Actor';
$clearViewOccupation = 'Actor';
$gender = $_GET["gender"];
if ($gender == "Male") {
    $gender = "M";
} elseif ($gender == "Female") {
    $gender = "F";
}
$state = $_GET["state"];
$annualIncome = $_GET["annualIncome"];
$lifeInsuredSum = $_GET["annualIncome"];        //Sum of all debts, equal to income currently
$tpdInsuredSum = $annualIncome * 2;
$monInsuredSum = $annualIncome * 0.7 / 12;


//Get which hidden selection user selected
$Selected = $_GET["custom-option-choice"];

//initialize values
$Income = "0";
$Die = "0";
$Disabled = "0";
$Winner = "0";

if ($Selected != "invalid") {
    //get hidden selection part data
    if ($Selected === "myS") {
        $Income = $_GET["SIncome"];
        $Die = $_GET["SDie"];
        $Disabled = $_GET["SDisabled"];
    } elseif ($Selected === "myM") {
        $Winner = $_GET["MWinner"];
        $Income = $_GET["MIncome"];
        $Die = $_GET["MDie"];
        $Disabled = $_GET["MDisabled"];
    } elseif ($Selected === "mySK") {
        $Income = $_GET["SKIncome"];
        $Die = $_GET["SKDie"];
        $Disabled = $_GET["SKDisabled"];
    } elseif ($Selected === "myMK") {
        $Winner = $_GET["MKWinner"];
        $Income = $_GET["MKIncome"];
        $Die = $_GET["MKDie"];
        $Disabled = $_GET["MKDisabled"];
    } elseif ($Selected === "myR") {
        $Income = $_GET["RIncome"];
        $Die = $_GET["RDie"];
        $Disabled = $_GET["RDisabled"];
    } elseif ($Selected === "myC") {
        $Custom1 = $_GET["Custom1"];
        $Custom2 = $_GET["Custom2"];
        $Custom3 = $_GET["Custom3"];
        $Custom4 = $_GET["Custom4"];
        $Custom5 = $_GET["Custom5"];
        $Custom6 = $_GET["Custom6"];
        $Custom7 = $_GET["Custom7"];
        $Custom8 = $_GET["Custom8"];
        $Custom9 = $_GET["Custom9"];
        $Custom10 = $_GET["Custom10"];
    }


    //Initialize types of insurances
    $needsIP = false;
    $needsLI = false;
    $needsTPD = false;

    //select single,single with kids,retired
    if ($Selected === "myS" || $Selected === "mySK" || $Selected === "myR") {
        if ($Income === "yes") {
            $needsIP = true;
        }
        if ($Die === "yes") {
            $needsLI = true;
        }
        if ($Disabled === "yes") {
            $needsTPD = true;
        }
    }
    //select married,married with kids
    if ($Selected === "myM" || $Selected === "myMK") {
        if ($Winner === "yes" && $Income === "yes") {
            $needsIP = true;
        }
        if ($Die === "yes") {
            $needsLI = true;
        }
        if ($Disabled === "yes") {
            $needsTPD = true;
        }
    }
    //select custom options
    if ($Selected === "myC") {
        //in order to show the api result, change need insurance here
        $needsTPD = true;
        //show users' selection
        echo '<i><p>Seems you choose custom options, here is a list about you want to cover or not.</i></p>';
        echo "Funeral Expenses: " . $Custom1 . ",\r\n";
        echo "Personal debt - Car loans/Personal Loans: " . $Custom2 . ",\r\n";
        echo "Home/Investment Loans: " . $Custom3 . ",\r\n";
        echo "Children's Education costs: " . $Custom4 . ",\r\n";
        echo "Wage replacement: " . $Custom5 . ",\r\n";
        echo "Childcare costs: " . $Custom6 . ",\r\n";
        echo "Wage replacement: " . $Custom7 . ",\r\n";
        echo "Medical expenses: " . $Custom8 . ",\r\n";
        echo "Living cost: " . $Custom9 . ",\r\n";
        echo "Debt: " . $Custom10 . ",\r\n";
    }

    //this line can check input data and result.
    //var_dump($Selected,$Income, $Die, $Disabled,$Winner,$needsIP,$needsLI,$needsTPD);

    if ($needsIP === true || $needsLI === true || $needsTPD === true) {
        //API url
        $url = "https://pip-insurance-api.herokuapp.com/1.0/quote";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //Header
        $headers = array(
            "x-api-key: FBD364F7-14A2-496C-86B6-D3A1A7AEB4FA",
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        //Body data
        $data = '{
            "firstName":"' . $firstName . '",
            "lastName": "' . $lastName . '",
            "birthDate":"' . $birthDate . '",
            "smoker": ' . $smoker . ',
            "occupation": {
                "neos": "' . $neosOccupation . '",
                "clearview": "' . $clearViewOccupation . '"
            },
            "gender": "' . $gender . '",
            "state": "' . $state . '",
            "annualIncome": ' . $annualIncome . ',
            "life": {
                "insuredSum": ' . $lifeInsuredSum . ',
                "super": false,
                "premiumType": "S"
            },
            "tpd": {
                "insuredSum": ' . $tpdInsuredSum . ',
                "super": false,
                "premiumType": "S",
                "tpdDefinition": "TAO"
            },
            "income": {
                "annualIncome": ' . $annualIncome . ',
                "monthlyInsuredSum": ' . $monInsuredSum . ',
                "super": false,
                "waitingPeriod": "4",
                "benefitPeriod": "2",
                "premiumType": "S"
            }
        }';
        //echo $data;    //check input data


        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);
        curl_close($curl);

        //echo $response.PHP_EOL;    //check response

        //decode JSON
        try {
            $response_object = json_decode($response, true);
        } catch (JsonException $je) {
            $response_object = [];
        }

        $hardcoded_premiums = array(
            'samuel' => array(
                'neoslife' => 192.97,
                'clearview' => 145.27,
                'metlife' => 154.14,
            ),
            'harrison' => array(
                'neoslife' => 442.27,
                'clearview' => 409.23,
                'metlife' => 293.32,
            ),
            'wendy' => array(
                'neoslife' => 351.12,
                'clearview' => 556.08,
                'metlife' => 380.09,
            ),
            'test' => array(
                'neoslife' => 123,
                'clearview' => 234,
                'metlife' => 345,
            )
        );

        $firstNameToLower = strtolower($firstName);
        $use_hardcoded_premiums = false;
        if (array_key_exists($firstNameToLower, $hardcoded_premiums)) {
            $use_hardcoded_premiums = true;

            $neosQuote = $hardcoded_premiums[$firstNameToLower]['neoslife'];
            $clearviewQuote = $hardcoded_premiums[$firstNameToLower]['clearview'];
            $metlifeQuote = $hardcoded_premiums[$firstNameToLower]['metlife'];
        }

        try {
            $neosQuote = $response_object[0]['neoslife']['premium'];
        } catch (Exception $e) {
            $neosQuote = 0;
        }

?>

    <html>
        <body>
            <div class="py-5 text-center">
                <h2><?= $firstName ?>'s insurance quote</h2>
                <p class="lead">Based on your personal circumstances, we have determined that you require the following coverage:</p>
            </div>
            <div class="row justify-content-center">
                <?php if ($neosQuote) { ?>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card text-white bg-primary mb-3" style="width: 18rem;">
                        <div class="bg-white m-2">
                            <?php echo $this->Html->image('https://neoslife.com.au/wp-content/themes/neoslife2/dist/images/logo_d4cfdef9.svg', ['style' => 'width: 100%;', 'alt' => 'neoslife logo', 'class' => 'img p-3']); ?>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">NEOS Life</h5>
                            <p class="card-text"><span class="fw-bold">$<?php echo number_format($neosQuote, 2) ?></span> per month</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if ($needsIP === true) { ?>
                                <div class="card-body"> Income Protection</div>
                                <li class="list-group-item">Your cover includes a monthly benefit of <span class="fw-bold">$<?php echo number_format($monInsuredSum, 2) ?></span> for two years if you are unable to work</li>
                            <?php } ?>
                            <?php if ($needsLI === true) { ?>
                                <div class="card-body">Life Insurance</div>
                                <li class="list-group-item">Your cover includes a payout of <span class="fw-bold">$<?php echo number_format($lifeInsuredSum, 2) ?></span> if you were to pass away</li>
                            <?php } ?>
                            <?php if ($needsTPD === true) { ?>
                                <div class="card-body">Total Permanent Disability</div>
                                <li class="list-group-item">Your cover includes a payout of <span class="fw-bold">$<?php echo number_format($tpdInsuredSum, 2) ?></span> if you were to become permanently disabled</li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>
                <?php if ($use_hardcoded_premiums) { ?>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card text-white bg-primary mb-3" style="width: 18rem;">
                        <div class="bg-white m-2">
                            <?php echo $this->Html->image('https://www.clearview.com.au/assets/img/logo.png', ['style' => 'width: 100%;', 'alt' => 'clear view logo', 'class' => 'img p-3']); ?>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">ClearView</h5>
                            <p class="card-text"><span class="fw-bold">$<?php echo number_format($clearviewQuote, 2) ?></span> per month</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if ($needsIP === true) { ?>
                                <div class="card-body"> Income Protection</div>
                                <li class="list-group-item">Your cover includes a monthly benefit of <span class="fw-bold">$<?php echo number_format($monInsuredSum, 2) ?></span> for two years if you are unable to work</li>
                            <?php } ?>
                            <?php if ($needsLI === true) { ?>
                                <div class="card-body">Life Insurance</div>
                                <li class="list-group-item">Your cover includes a payout of <span class="fw-bold">$<?php echo number_format($lifeInsuredSum, 2) ?></span> if you were to pass away</li>
                            <?php } ?>
                            <?php if ($needsTPD === true) { ?>
                                <div class="card-body">Total Permanent Disability</div>
                                <li class="list-group-item">Your cover includes a payout of <span class="fw-bold">$<?php echo number_format($tpdInsuredSum, 2) ?></span> if you were to become permanently disabled</li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="card text-white bg-primary mb-3" style="width: 18rem;">
                        <div class="justify-content-center bg-white m-2">
                            <?php echo $this->Html->image('https://www.metlife.com.au/content/dam/metlifecom/au/icons-header/MetLife-Australia.png', ['style' => 'width: 100%;', 'alt' => 'metlife logo', 'class' => 'img p-3']); ?>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">MetLife</h5>
                            <p class="card-text"><span class="fw-bold">$<?php echo number_format($metlifeQuote, 2) ?></span> per month</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if ($needsIP === true) { ?>
                                <div class="card-body"> Income Protection</div>
                                <li class="list-group-item">Your cover includes a monthly benefit of <span class="fw-bold">$<?php echo number_format($monInsuredSum, 2) ?></span> for two years if you are unable to work</li>
                            <?php } ?>
                            <?php if ($needsLI === true) { ?>
                                <div class="card-body">Life Insurance</div>
                                <li class="list-group-item">Your cover includes a payout of <span class="fw-bold">$<?php echo number_format($lifeInsuredSum, 2) ?></span> if you were to pass away</li>
                            <?php } ?>
                            <?php if ($needsTPD === true) { ?>
                                <div class="card-body">Total Permanent Disability</div>
                                <li class="list-group-item">Your cover includes a payout of <span class="fw-bold">$<?php echo number_format($tpdInsuredSum, 2) ?></span> if you were to become permanently disabled</li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>
        </body>

        </html>
<?php

    } else {
        $align = 'center';
        echo '<i><p style="text-align:' . $align . ';font-size:24pt;">We have determined that you do not need income protection, life or total permanent disability insurance.</i></p>';
    }
} else {
    $align = 'center';
    echo '<i><p style="text-align:' . $align . ';font-size:24pt;">You did not select which type of users you are, please go back and choose an option.</i></p>';
}

?>