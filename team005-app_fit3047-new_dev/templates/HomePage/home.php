<?php
/**
* CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
* @link      https://cakephp.org CakePHP(tm) Project
* @since     0.10.0
* @license   https://opensource.org/licenses/mit-license.php MIT License
* @var \App\View\AppView $this
* @property \Authentication\Controller\Component\AuthenticationComponent $Authentication
* @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])


*/
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>YogaBuddy</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="/team005-app_fit3047/webroot/css/styles.css" rel="stylesheet" />
    <script src="/team005-app_fit3047/webroot/js/scripts.js"></script>
    <?= $this->Html->script("/js/home_JS.js")?>

</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <img src="<?php echo $this->Url->image('/img/logo/yogabuddy_logo.jpg'); ?>" alt="Logo">
        <a class="navbar-brand" href="#page-top">YogaBuddy</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" onclick="togglePopup()" style="cursor:pointer;">About</a></li>

                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

                <?php if ($isLogged): ?>
                    <li class="nav-item"> <?= $this->Html->link('Student Dashboard', ['controller' => 'Students', 'action' => 'myCourses'], ['class' => 'nav-link', 'id' => 'student_button']) ?>
                        <?php if ($isAdmin): ?>
                            <li class="nav-item"> <?= $this->Html->link('Admin Dashboard', ['controller' => 'Admins', 'action' => 'adminDashboard'], ['class' => 'nav-link', 'id' => 'admin_button']) ?>
                        <?php endif; ?>
                        <?php if ($isSuperAdmin): ?>
                            <li class="nav-item"> <?= $this->Html->link('CMS', ['controller' => 'Superadmin', 'action' => 'display'], ['class' => 'nav-link', 'id' => 'admin_button']) ?>
                        <?php endif; ?>
                    <li class="nav-item"> <?= $this->Html->link('Log out', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link', 'id' => 'logout_button']) ?>
                    </li>
                <?php else: ?>
                    <li class="nav-item"> <?= $this->Html->link('Log in', ['controller' => 'Users', 'action' => 'login'], ['class' => 'nav-link', 'id' => 'login_button']) ?>
                    </li>
                <?php endif; ?>

                <li class="nav-item"><?= $this->Html->link('Register', ['controller' => 'Users', 'action' => 'register'], ['class' => 'nav-link custom-btn-color1', 'id' => 'register_button']) ?>  </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">YogaBuddy</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <?php
                $filePath = WWW_ROOT . 'call_to_action.txt';
                if (file_exists($filePath)) {
                    $callToActionText = file_get_contents($filePath);
                    $formattedText = nl2br($callToActionText);
                    echo '<p class="text-white-75 mb-4">' . $formattedText . '</p>';
                }
                ?>
                <ul class="nav-item"><?= $this->Html->link('Register Now!', ['controller' => 'Users', 'action' => 'register'], ['class' => 'btn btn-primary btn-xl', 'id' => 'register_button']) ?>  </ul>
            </div>
        </div>
    </div>
</header>

<!-- About Us -->

<div class="popup" id="aboutPopup">
    <div class="popup-content">
        <span class="popup-close" onclick="togglePopup()">&times;</span>
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="text-white mt-0">About Us</h2>
                        <hr class="divider divider-light" />
                        <img src="<?php echo $this->Url->image('/img/about_us_pfp/ph1.jpg') ?>" style="width: 300px; border: 1px solid black; border-radius: 50%;">
                        <?php
                        $filePath = WWW_ROOT . 'about_us.txt';
                        if (file_exists($filePath)) {
                            $aboutUsText = file_get_contents($filePath);
                            $formattedText = nl2br($aboutUsText);
                            echo '<p class="text-white-75 mb-4">' . $formattedText . '</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">What we promise!</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Improved Flexibility</h3>
                    <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Stress Reduction</h3>
                    <p class="text-muted mb-0"> Mindfulness and relaxation techniques that help reduce stress and anxiety..</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2"> Increased Strength</h3>
                    <p class="text-muted mb-0">Challenge your body in new ways and help you build strong muscles</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2"> Better Sleep</h3>
                    <p class="text-muted mb-0">Relax and unwind before bed, improve your breathing, and calm your mind</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-->
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tile_images/tile1.jpg" title="Strengthens muscles">
                    <div class="image-wrapper">
                        <img class="img-fluid " src="img/tile_images/tile1.jpg" alt="..." />
                    </div>
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Why Yoga?</div>
                        <div class="project-name">Strengthens muscles</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tile_images/tile2.jpg" title="Enhances focus and concentration">
                    <img class="img-fluid" src="img/tile_images/tile2.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Why Yoga?</div>
                        <div class="project-name">Enhances focus and concentration</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tile_images/tile3.jpg" title="Supports overall well-being">
                    <img class="img-fluid" src="img/tile_images/tile3.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Why Yoga?</div>
                        <div class="project-name">Supports overall well-being</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tile_images/tile4.jpg" title="Meditation with Experienced Yoga Teachers">
                    <img class="img-fluid" src="img/tile_images/tile4.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Why Yoga?</div>
                        <div class="project-name">Meditation with Experienced Yoga Teachers</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tile_images/tile5.jpg" title="Reduces stress and anxiety">
                    <img class="img-fluid" src="img/tile_images/tile5.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Why Yoga?</div>
                        <div class="project-name">Reduces stress and anxiety</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="img/tile_images/tile6.jpg" title="Improves flexibility and balance">
                    <img class="img-fluid" src="img/tile_images/tile6.jpg" alt="..." />
                    <div class="portfolio-box-caption p-3">
                        <div class="project-category text-white-50">Why Yoga? </div>
                        <div class="project-name">Improves flexibility and balance</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Call to action-->

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Let's Get In Touch!</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Have further questions about our classes? Send us a messages and we will get back to you as soon as possible!</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Thanks for your enquiry we will get back to you within 1 business day!</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">

        </div>
    </div>
</section>
<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - YogaBuddy</div></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>

