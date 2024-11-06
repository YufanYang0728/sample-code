<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$identity = $this->Identity->get();
?>
<!-- Masthead-->
<header class="masthead" id="masthead">
    <!-- <section class="bg-logo-position"></section> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pb-6">
                <?= $this->Html->image('ava.png', ['class' => 'img-fluid logo']) ?>
            </div>
            <div class="col-lg-6 my-content">
                <?php if ($this->Identity->isLoggedIn()): ?>
                    <div class="masthead-subheading">Welcome back, <?= $identity->first_name ;?>!</div>
                    <a class="btn btn-primary btn-xl text-uppercase" href="<?= $this->Url->build(['controller' => 'modules','action' => 'dashboard']);?>">Go to dashboard</a>
                <?php else: ?>
                    <div class="masthead-subheading">Fast advice customised and hassle free</div>
                    <div class="masthead-heading text-uppercase">Advice Cyborg</div>
                    <a class="btn btn-primary btn-xl text-uppercase" href="<?= $this->Url->build(['controller' => 'users','action' => 'login']);?>">Get advice now</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<!-- Services-->
<section class="page-section bg-light" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Why us</h2>
            <h3 class="section-subheading text-muted">.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x" style="color:rgba(139, 216, 237,1)"></i>
                           <i class="fas fa-bolt fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Fast</h4>
                <p class="text-muted">Advice Cyborg can help match you to investments and insurance options to reach your goals faster.</p>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x"style="color:rgba(139, 216, 237,1)"></i>
                            <i class="fas fa-graduation-cap fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Smart</h4>
                <p class="text-muted">Advice Cyborg can cut through the jargon used by industry professionals and put you in control of your financial future.</p>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x"style="color:rgba(139, 216, 237,1)"></i>
                            <i class="fas fa-user-friends fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Customised</h4>
                <p class="text-muted">Advice Cyborg can scan the entire investment universe in minutes to help create a custom plan suited for you. </p>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Grid-->
<section class="page-section" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Modules</h2>

        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Investment Portfolio-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('portfolio/investment_module.jpg', ['class' => 'img-fluid']) ?>

                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Investment</div>
                        <div class="portfolio-caption-subheading text-muted">Easy managed investment</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Retirement Portfolio -->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
<!--                        <img class="img-fluid" src="webroot/img/portfolio/Retirement_module.jpg" alt="..." />-->
                        <?= $this->Html->image('portfolio/Retirement_module.jpg', ['class' => 'img-fluid']) ?>

                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Retirement</div>
                        <div class="portfolio-caption-subheading text-muted">Easy retirement planning</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-4">
                <!-- Super Portfolio -->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('portfolio/super_module.jpg', ['class' => 'img-fluid']) ?>

                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Super</div>
                        <div class="portfolio-caption-subheading text-muted">Simple super fund advice</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-4 ">
                <!-- Insurance Portfolio -->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class=""></i></div>
                        </div>
                        <?= $this->Html->image('portfolio/insurance_module.png', ['class' => 'img-fluid']) ?>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Insurance</div>
                        <div class="portfolio-caption-subheading text-muted">Quick insurance guidance</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-->
<section class="page-section bg-light" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted"><p>10 years our team set out to find a way to bring advice to the everyday Australian in a efficient way to reduce costs and reduce the conflicts found in the traditional financial planning landscape. We have used 10 years of data from our traditional financial planning practice to develop the algorithms within Advice cyborg , and still to this day we are modifying them to suit the never ending changes life , regulations and world brings.</p>
            </h3>

        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image">
                    <?= $this->Html->image('about/1.jpg', ['class' => 'rounded-circle img-fluid']) ?>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2010</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">We started working on our algorithm</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><?= $this->Html->image('about/2.jpg', ['class' => 'rounded-circle img-fluid']) ?></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>March 2019</h4>
                        <h4 class="subheading">Development Stage</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">We developed what is now advice cyborg and started the testing of our algorithms.</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><?= $this->Html->image('about/3.jpg', ['class' => 'rounded-circle img-fluid']) ?></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>December 2021</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">We opened the doors to beta testing.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><?= $this->Html->image('about/4.jpg', ['class' => 'rounded-circle img-fluid']) ?></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>July 2022</h4>
                        <h4 class="subheading">Going Live</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">We go live to market with the complete build.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- About-->
<section class="page-section" id="faq">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">FAQ</h2>
            <h3 class="section-subheading text-muted">Frequently asked questions</h3>
        </div>
        <div class="accordion" id="accordionFAQ">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        How do I future-proof my retirement?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="mb-0">
                            We would recommend using our budgeting tool to give you some indication on ensuring you will have enough money for the day you retire. However, planning for your retirement is a complex process. Planning for retirement entails many non-monetary based decisions.
                            <br><br>
                            <strong>Answering the following questions would be a good place to start:</strong>
                            <br>
                            1. What type of lifestyle do I want to live in retirement?
                            <br>
                            2. How much will this lifestyle cost per year?
                            <br>
                            3. How much do I currently have in my superannuation fund, and how much am I likely to have by retirement age?
                            <br>
                            4. Do I have more than one superannuation fund and should I consolidate them?
                            <br>
                            5. Is it worth putting more into superannuation now, but still staying under the reasonable threshold?
                            <br>
                            6. Will I have any large debts outstanding? (i.e. mortgage, car etc.)
                            <br>
                            7. Will I be helping pay off someone else’s expenses? (i.e. daughter going through University etc.)
                            <br>
                            8. Do I want to go on holidays periodically?
                            <br>
                            9. What other income sources will I have and how much will I earn from them? (ie investment property, owner of a business, shares etc.)
                            <br><br>
                            Although it is possible to plan your retirement by yourself, we don’t recommend it. We suggest speaking to an adviser when it comes to something as important and complex as your retirement. An adviser will give you the clarity and peace of mind you need when making these critical life decisions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Is my data secure?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="mb-0">
                            You can be assured that your data is 100% safe with Advice Cyborg. We do not sell, distribute or share your data with any third-party.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How do I invest with AdviceCyborg?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="mb-0">
                            It’s very simple - signing up only takes 5 minutes! If you are interested in our services, we will give you a questionnaire to understand more about you. We need to know things such as your current position, future goals and your risk tolerance – all of which will help us give you the right advice!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>

        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
<!--                    <img class="mx-auto rounded-circle" src="webroot/img/team/1.jpg" alt="..." />-->
                    <?= $this->Html->image('team/1.jpg', ['class' => 'mx-auto rounded-circle']) ?>

                    <h4>Paul Pellegrino</h4>
                    <p class="text-muted">The big Picture guy.</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/papellegrino/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <?= $this->Html->image('team/2.jpg', ['class' => 'mx-auto rounded-circle']) ?>
                    <h4>Rob</h4>
                    <p class="text-muted">The guy that makes thing work.</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <?= $this->Html->image('team/3.jpg', ['class' => 'mx-auto rounded-circle']) ?>
                    <h4>Chao</h4>
                    <p class="text-muted">The person in charge of the coffee orders.</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

</section>
<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="webroot/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Investment</h2>
                            <p class="item-intro text-muted">For You And Many Other Australians, A Secure Financial Future Is A Top Priority. Why?.</p>
                            <img class="img-fluid d-block mx-auto" src="webroot/img/portfolio/investment_module.jpg" alt="..." />
                            <p>Because financial security brings choice. And choice allows you to achieve your goals, live your dreams and realise your ambitions, whatever they may be. The only way to know where you are comfortable ‘investment wise’, we need to know your risk tolerance and investment horizon. Financial Investment Adviser.</p>

                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Close Module
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 2 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="webroot/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Retiremnet</h2>
                            <p class="item-intro text-muted">HOW TO GET READY FOR RETIREMENT.</p>
                            <img class="img-fluid d-block mx-auto" src="webroot/img/portfolio/Retirement_module.jpg" alt="..." />
                            <p>You are likely to spend more than 20 years in retirement. Don’t leave things to chance; you’ve earned it, so don’t lose it. Retirement Planning – it’s a subject that many people tend not to think about too much. After all, for many people, retirement is a long way off, so why worry about it now?</p>

                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Close Module
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 3 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="webroot/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Super</h2>
                            <p class="item-intro text-muted">HOW MUCH SUPER IS ENOUGH?.</p>
                            <img class="img-fluid d-block mx-auto" src="webroot/img/portfolio/super_module.jpg" alt="..." />
                            <p>That all depends on how much money you think you will need in retirement. This will be different for everyone. To give you an idea of what is achievable, here are two examples which may help. Both examples assume that your retirement income has to keep pace with inflation of 2.5% pa, and that the investments deliver a return of 7% pa. A change to one or more of the variables will produce different results. These examples are for illustration only and do not take into account any of your personal circumstances. You should</p>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Close Module
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 4 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="webroot/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Insurance</h2>
                            <p class="item-intro text-muted">LIFE’S BIG MOMENTS AND INSURANCE.</p>
                            <img class="img-fluid d-block mx-auto" src="webroot/img/portfolio/insurance_module.png" alt="..." />
                            <p>With the mind field of insurances, we can help you find your way around to make sure you have what your need in place to protect your loved ones. Insurance Advice in Melbourne.
                                <br><br>

                                Protecting What’s Important Whether You’re A Young Single Or Managing A Busy Family, Having The Right Insurance Provides Great Peace Of Mind.
                                <br><br>

                                Whatever you’re trying to protect in life, there’s an insurance solution to match. And so whether you need to protect your income and lifestyle, family home, children’s future or
                                livelihood to run your own business – an Partners in Planning financial planner can help in investing in insurance.</p>

                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 5 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="webroot/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="webroot/img/portfolio/5.jpg" alt="..." />
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Client:</strong>
                                    Southwest
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    Website Design
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Close Module
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
