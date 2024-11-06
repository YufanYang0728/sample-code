<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<!doctype html>
<html lang="en">
<style>
    #portfolio .portfolio-item .portfolio-caption {

        background-color: rgba(99, 99, 98, 0.06);
    }
</style>

<body>
<section class="page-section" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase" style="margin-bottom: 2em">Calculators</h2>

        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="car_lease_calculator">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('modules/'."car.jpg", ['alt' => 'module_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Car Lease Calculator</div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="income_tax_calculator">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('modules/'."tax.jpg", ['alt' => 'module_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Income Tax Calculator</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="retirement_calculator">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('modules/'."retire.jpg", ['alt' => 'module_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Retirement Calculator</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="salary_sacrifice_calculator">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('modules/'."sacrifice.jpg", ['alt' => 'module_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Salary Sacrifice Calculator</div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="age_pension_calculator">
                        <!--<a class="portfolio-link"  href="#">-->
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('modules/'."pension.jpg", ['alt' => 'module_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Age Pension Calculator</div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 6-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="mortgage_calculator">
                        <!--<a class="portfolio-link"  href="#">-->
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('modules/'."mortgage.jpg", ['alt' => 'module_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Mortgage Calculator</div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 7-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="credit_card_debt_calculator">
                        <!--<a class="portfolio-link"  href="#">-->
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('modules/'."creditcard.jpg", ['alt' => 'module_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Credit Card Debt Calculator</div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
</body>
