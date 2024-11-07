<?php

?>

<div class="container">
    <h1>Select a Designated Premade Questionnaire</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Your Questionnaire Options:</h5>
                </div>
                <div class="card-body">

                        <?php if ($married): ?>
                        <?php if ($dependents): ?>
                            <p><?= $this->Html->link('Married With Kids Questionnaire', [
                                    'action' => 'startDesignatedPremadeQuestionnaire',
                                    $married,
                                    $dependents
                                ]) ?>
                            </p>
                        <?php else: ?>
                            <p><?= $this->Html->link('Married Questionnaire', [
                                    'action' => 'startDesignatedPremadeQuestionnaire',
                                    $married,
                                    $dependents
                                ]) ?>
                            </p>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if ($dependents): ?>
                                <p><?= $this->Html->link('Single Parent Questionnaire', [
                                        'action' => 'startDesignatedPremadeQuestionnaire',
                                        $married  ,
                                        $dependents
                                    ]) ?></p>
                        <?php else: ?>
                            <p><?= $this->Html->link('Single Questionnaire', [
                                    'action' => 'startDesignatedPremadeQuestionnaire',
                                    $married,
                                    $dependents
                                ]) ?>
                            </p>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if ($retired): ?>
                        <p><?= $this->Html->link('Retired Questionnaire',
                                ['action' => 'startDesignatedPremadeQuestionnaireRetired']) ?>
                        </p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <br>
    <p><?= $this->Html->link('Back to the Package Selection Page', ['action' => 'packageSelection', $userId], ['class' => 'btn btn-primary', 'style' => 'background-color: #0D8ABF;']) ?></p>
</div>
