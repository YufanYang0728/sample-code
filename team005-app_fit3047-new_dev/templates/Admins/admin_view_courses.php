<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Course> $courses
 * @var iterable<\App\Model\Entity\Course> $enrolled_courses
 * @var \App\Model\Entity\User $student
 */

use Cake\View\Helper\HtmlHelper;

?>
<head>
    <?= $this->Html->css('paginator')?>
    <?= $this->Html->css('button')?>
</head>

<style>
    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #171616;
        font-weight: bold;
    }




     .btn-black {
         background-color: black;
         color: white;
     }


</style>

<body>
<!-- Responsive navbar-->
<header>

    <h1 style="text-align: center">Courses list</h1>
    <hr>
</header>
<!-- Page Content-->
<main>
    <br>
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <ul class="pagination" style="margin: auto; padding-bottom: 10px">
                <?= $this->Paginator->prev("<< Prev", ['class' => 'pagination-link font-weight-bold']) ?>
                <li class="font-weight-bold">Page <?= $this->Paginator->current() ?></li>
                <?= $this->Paginator->next("Next >>", ['class' => 'pagination-link font-weight-bold']) ?>

                <li>
                    <?= $this->Html->link(
                        '<b class="font-weight-bold">New Course</b>',
                        ['controller' => 'Admins', 'action' => 'addCourse'],
                        ['escape' => false, 'class' => 'new-course-button btn btn-black float-end']
                    ); ?>
                </li>

            </ul>

<!--            TODO: MUST LIMIT THE WORD COUNT IN EACH CARD-->
            <div class="row gx-lg-5">
                <?php if (sizeof($courses) == 0): ?>
                    <h1>You have no enrolled courses</h1>

                <?php else: ?>
                    <?php foreach ($courses as $course): ?>

                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <a href="<?= $this->Url->build(['controller' => 'Admins', 'action' => 'viewCourse', $course->id]) ?>" style="text-decoration: none; color: #0f0f0f">
                                <div class="card bg-light border-0 h-100 shadow rounded-3 card-3d-effect">
                                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                        <div class="feature bg-gradient text-dark rounded-3 mb-4 mt-n4" style="background-color: orange; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                            <i class="bi bi-collection"></i>
                                        </div>
                                        <h2 class="fs-4 font-weight-bold" style="color: black; margin-bottom: 10px;"><?= h($course->title) ?></h2>
                                        <p class="mb-0" style="color: grey; font-size: 14px;"><?= h($course->description) ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <ul class="pagination" style="margin: auto">
                    <?= $this->Paginator->prev("<<") ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(">>") ?>
                </ul>
            </div>
        </div>
    </section>
</main>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<!--<script src="/webroot/js/scripts.js"></script>-->
</body>
