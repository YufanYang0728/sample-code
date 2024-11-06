<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Course> $courses
 * @var iterable<\App\Model\Entity\Course> $unenrolled_courses
 * @var \App\Model\Entity\User $student
 */

?>

<body>
<!-- Responsive navbar-->
<header>
    <h1 style="text-align: center">Available Courses</h1>
    <hr>
</header>
<!-- Page Content-->
<head>
    <?= $this->Html->css('paginator')?>
    <?= $this->Html->css('button')?>
</head>

<main>
    <br>
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <ul class="pagination" style="margin: auto; padding-bottom: 10px">
                <?= $this->Paginator->prev("<< Prev") ?>
                <li>Page <?= $this->Paginator->current() ?></li>
                <?= $this->Paginator->next("Next >>") ?>
            </ul>

            <div class="row gx-lg-5">
                <?php if (sizeof($unenrolled_courses) == 0): ?>
                    <h1>You have no available courses</h1>
                <?php else: ?>
                    <?php foreach ($unenrolled_courses as $course): ?>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <a href="<?= $this->Url->build(['controller' => 'Students', 'action' => 'enrolment', $course->id]) ?>" style="text-decoration: none; color: #0f0f0f">
                                <div class="card bg-light border-0 h-100 shadow rounded-3">
                                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                        <div class="feature bg-gradient text-dark rounded-3 mb-4 mt-n4" style="background-color: #94EDED">
                                            <i class="bi bi-collection"></i></div>
                                        <h2 class="fs-4"><?= h($course->title) ?></h2>
                                        <p class="mb-0"><?= h($course->description) ?></p>
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
