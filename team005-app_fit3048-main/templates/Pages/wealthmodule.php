<?php
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Building Wealth</h2>
            <h3 class="section-subheading text-muted">Answer the questionnaire</h3>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col-auto align-self-center">
                            <a class="btn btn-secondary" href="" onclick="">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <div class="col-6 align-content-center">
                            <h5 id="question-title" class="card-title text-center">Card title</h5>
                            <h6 id="question-subtitle" class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                            <p id="question-text" class="text-center">Question text</p>
                            <div class="d-flex justify-content-center">
                                <div class="col">
                                    <div id="question-input" class="form-floating mt-3">
                                        <input id="question-input" type="text" class="form-control" placeholder="Input placeholder">
                                        <label for="question-input" class="form-label">Input label</label>
                                    </div>
                                    <div id="question-select" class="mt-3">
                                        <select class="form-select mb-3" aria-label=".form-select-lg example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto align-self-center">
                            <a class="btn btn-primary" href="" onclick="">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
