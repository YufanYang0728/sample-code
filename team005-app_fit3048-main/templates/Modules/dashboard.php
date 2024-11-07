<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Modules</h2>
            <h3 class="section-subheading text-muted">Please select the module you would like to use below</h3>
        </div>
        <div class="row">
            <?php foreach ($modules as $module): ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="<?= $this->Url->build(['action' => 'view', $module->module_id]) ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class=""></i></div>
                            </div>

                            <?= $this->Html->image('modules/'.h($module->module_id).".jpg", ['alt' => 'module_image',"class"=>"img-fluid"])?>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                                <?= h($module->module_name) ?>
                                <?php if ($module->paid): ?>
                                    <span class="badge bg-primary">Premium</span>
                                <?php else: ?>
                                    <span class="badge bg-secondary">Free</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
