<?php
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
        <h4 class="section-heading text-uppercase" style="margin-bottom: 2em">Welcome! Here is your admin dashboard.</h4>

        </div>
        <div class="row">
            <!-- Manage Users and Products -->
            <!-- List Users -->
            <h5 class="section-heading text-uppercase" style="margin-bottom: 2em">Manage Users And Products</h5>
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('users/'."Sample_User_Icon.png", ['alt' => 'users_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"> List Users </div>

                    </div>
                </div>
            </div>
            
            <!-- Manage Modules -->
            <!-- List Modules -->
            <h5 class="section-heading text-uppercase" style="margin-bottom: 2em">Manage Modules</h5>
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="<?= $this->Url->build(['controller' => 'Modules', 'action' => 'index']) ?>">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('users/'."modules.jpg", ['alt' => 'users_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"> List Modules </div>
                    </div>
                </div>
            </div>

            <!-- Manage Payments -->
            <!-- List Payments -->
            <h5 class="section-heading text-uppercase" style="margin-bottom: 2em">Manage Payments</h5>
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="<?= $this->Url->build(['controller' => 'Payments', 'action' => 'index']) ?>">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('users/'."payment.jpg", ['alt' => 'users_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"> List Payments </div>
                    </div>
                </div>
            </div>

            <!-- List Payments Providers -->
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="<?= $this->Url->build(['controller' => 'PaymentProviders', 'action' => 'index']) ?>">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('users/'."payment2.jpg", ['alt' => 'users_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"> List Payments Providers </div>
                    </div>
                </div>
            </div>

            <!-- Manage ChatBot -->
            <!-- Add ChatBot Question -->
            <h5 class="section-heading text-uppercase" style="margin-bottom: 2em">Manage ChatBot</h5>
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Portfolio item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="<?= $this->Url->build(['controller' => 'Chatbot', 'action' => 'add']) ?>">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('users/'."chatbot.jpg", ['alt' => 'users_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"> Add ChatBot Question </div>
                    </div>
                </div>
            </div>

            <!-- List ChatBot Question -->
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Portfolio item 6-->
                <div class="portfolio-item">
                    <a class="portfolio-link"  href="<?= $this->Url->build(['controller' => 'Chatbot', 'action' => 'index']) ?>">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('users/'."chatbot.jpg", ['alt' => 'users_image',"class"=>"img-fluid"])?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"> List ChatBot Question </div>
                    </div>
                </div>
            </div>
        </div>
</body>



<!-- <div class="row" style="margin-left:15%; margin-right:15%">
<div class="row">
    <div class="col-lg-4">
        <div class="card w-75">
        <div class="card shadow mb-0"> -->
            <!-- Card Header - Accordion -->
            <!-- <a href="#manageusers" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="manageusers">
                <h6 class="m-0 font-weight-bold text-primary text-center">Manage users and products</h6>
            </a> -->
            <!-- Card Content - Collapse -->
            <!-- <div class="collapse show" id="manageusers" style="">
                <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List users</span>
                    </a>
                    
                    
                </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card w-75">
        <div class="card shadow mb-0"> -->

            <!-- Card Header - Accordion -->
            <!-- <a href="#managemodules" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="managemodules">
                <h6 class="m-0 font-weight-bold text-primary text-center">Manage modules</h6>
            </a> -->
            <!-- Card Content - Collapse -->
            <!-- <div class="collapse show" id="managemodules" style="">
                <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="<?= $this->Url->build(['controller' => 'Modules', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List modules</span>
                    </a>
                    
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="card w-75">
        <div class="card shadow mb-0"> -->
            <!-- Card Header - Accordion -->
            <!-- <a href="#manageusers" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="manageusers">
                <h6 class="m-0 font-weight-bold text-primary text-center">Manage payments</h6>
            </a> -->
            <!-- Card Content - Collapse -->
            <!-- <div class="collapse show" id="manageusers" style="">
                <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="<?= $this->Url->build(['controller' => 'Payments', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List payments</span>
                    </a>
                    <a href="<?= $this->Url->build(['controller' => 'PaymentProviders', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List payments providers</span>
                    </a>
                </div>
                </div>
            </div>
            <div class="card shadow mb-0"> -->
            <!-- Card Header - Accordion -->
            <!-- <a href="#manageusers" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="manageusers">
                <h6 class="m-0 font-weight-bold text-primary text-center">Manage Chatbot</h6>
            </a> -->
            <!-- Card Content - Collapse -->
            <!-- <div class="collapse show" id="manageusers" style="">
                <div class="card-body">
                <div class="btn-group-vertical">
                    <a href="<?= $this->Url->build(['controller' => 'Chatbot', 'action' => 'add']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">Add Chatbot question</span>
                    </a>
                    <a href="<?= $this->Url->build(['controller' => 'Chatbot', 'action' => 'index']) ?>" class="btn btn-primary btn-icon-split btn" style="align-content: center">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                        <span class="text">List Chatbot question</span>
                    </a>
                </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
</div> -->
