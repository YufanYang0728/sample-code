<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $student
 */

$temporaryProgress = 40;

?>

<header>
    <h1 style="text-align: center">My Courses</h1>
    <hr>
</header>
<!-- Page Content-->
<main>
    <br>
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <?php if (sizeof($courses) == 0): ?>
                <h1>You have no enrolled courses</h1>

                <?php else: ?>
                    <?php foreach ($courses as $course): ?>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <a href="<?= $this->Url->build(['controller' => 'Courses', 'action' => 'view', h($course->id)]) ?>" style="text-decoration: none; color: #0f0f0f">
                                <div class="card bg-light border-0 h-100 shadow rounded-3">
                                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                        <div class="feature bg-gradient text-dark rounded-3 mb-4 mt-n4" style="background-color: #94EDED">
                                            <i class="bi bi-collection"></i></div>
                                        <h2 class="fs-4"><?= h($course->title) ?></h2>
                                        <p class="mb-0"><?= h($course->description) ?></p>
                                        <p class="mb-0">Progress: <?= h($temporaryProgress) ?>%</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <?=$this->Html->link(__('See available Courses'), ['controller' => 'Students', 'action' => 'availableCourses', h($student->id)], ['class'=>'btn btn-primary me-3']) ?>
                <div class="p-2"></div>
<!--                --><?php //=$this->Html->link(__('Join Membership'), ['controller' => 'Payments', 'action' => 'index', h($student->id)], ['class'=>'btn btn-success'])  ?>
            </div>
        </div>
    </section>
</main>
<style>
    .bottom-style {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #f5f5f5;
        padding: 10px;
        text-align: center;
        font-size: 14px;
        color: #333;
    }


    .btn_link {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: all 0.15s ease-in-out;
        cursor: pointer;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-success {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        color: #fff;
        background-color: #218838;
        border-color: #1e7e34;
    }

</style>
