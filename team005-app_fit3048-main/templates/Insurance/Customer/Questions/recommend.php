<?php
$packages = $packages ?? [];
$income = $income ?? 0;
$home_loan = $home_loan ?? 0;
$debt = $debt ?? 0;
?>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f5f5;
    }

    .package-item {
        border: none;
        height: 250px;
        transition: transform .2s;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.05);
    }

    .package-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.15), 0 12px 24px 0 rgba(0, 0, 0, 0.1);
    }

    .package-title {
        color: #2C3E50;
    }

    .rounded-header {
        background-color: #34495E;
    }
</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <div class="text-center mb-4">
                <h3 class="d-inline-block rounded-header text-white px-3 py-1 rounded">
                    📘 Your package will consist of the following
                </h3>
            </div>

            <div class="row justify-content-center">
                <?php if (empty(array_filter($packages))): ?>
                    <div class="col-md-12 mb-4 text-center">
                        <h4>No packages were selected.</h4>
                        <p>No action is required.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($packages as $package => $description): ?>
                        <?php if (isset($description)): ?>
                            <div class="col-md-6 mb-4">
                                <div class="card package-item bg-white">
                                    <div class="card-body">
                                        <h5 class="card-title package-title"><?= $package ?></h5>
                                        <p class="card-text"><?= $description ?></p>
                                        <hr>
                                        <div class="insurance-value mt-5 text-lg" data-insurance-type="<?= $package ?>"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="mt-4 text-right">
                <a href="javascript:void(0)" class="btn btn-outline-secondary" id="cancelBtn">Redo Audience-Based Questionnaire</a>
                <?php if (!empty(array_filter($packages))): ?>
                    <a href="<?= $this->Url->build(['controller' => 'Questions', 'action' => 'confirm', 'prefix' => 'Insurance/Customer']) ?>" class="btn btn-primary">Confirm</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('cancelBtn').addEventListener('click', function() {
        window.history.back();
    });

    const income = <?= json_encode($income) ?>;
    const home_loan = <?= json_encode($home_loan) ?>;
    const debt = <?= json_encode($debt) ?>;

    function calculateInsuranceValue(insuranceType) {
        let result;

        console.log(income)
        console.log(home_loan)
        console.log(debt)

        switch (insuranceType) {
            case 'Life Insurance':
                result = parseInt(home_loan) + parseInt(debt) + (2 * parseInt(income));
                break;
            case 'Total Permanent Disability':
                result = parseInt(home_loan) + parseInt(debt) + (2 * parseInt(income));
                break;
            case 'Income Protection':
                result = (0.75 * parseInt(income)) / 12;
                break;
            default:
                result = "N/A";
        }

        return result.toLocaleString('en-AU', { style: 'currency', currency: 'AUD' });
    }

    $(document).ready(function() {
        $('.package-item').each(function () {
            const insuranceType = $(this).find('.insurance-value').data('insurance-type');
            const calculatedValue = calculateInsuranceValue(insuranceType);
            $(this).find('.insurance-value').text(`Calculated Value: ${calculatedValue}`);
        });
    });
</script>


