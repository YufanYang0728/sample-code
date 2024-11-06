<?php

?>

<div class="container bg-white p-4" style="border: 1px solid #0D8ABF;">
    <h2 class="text-primary">Package Menu</h2>
    <p>Please choose one of the following options:</p>

    <div class="mb-3">
        <h5 class="text-primary">Review Your Screening Questionnaire Answers</h5>
        <p>You can review the answers you provided in the screening questionnaire.</p>
        <?= $this->Html->link('Review Answers', ['controller' => 'Questions', 'action' => 'reviewAnswers', $userId], ['class' => 'btn btn-primary', 'style' => 'background-color: #0D8ABF;']) ?>
    </div>

    <div class="mb-3">
        <h5 class="text-primary">Go to the Premade Questionnaire</h5>
        <p>You can go to the premade questionnaire template if you haven't filled it out yet.</p>
        <?= $this->Html->link('Go to Premade Questionnaire', ['controller' => 'Questions', 'action' => 'startPremadeQuestionnaire'], ['class' => 'btn btn-primary', 'style' => 'background-color: #0D8ABF;']) ?>
    </div>

    <div class="mb-3">
        <h5 class="text-primary">Select Custom Insurance Packages</h5>
        <p>You can customize and select the insurance packages that suit your needs.</p>
        <?= $this->Html->link('Select Custom Packages', ['controller' => 'Packages', 'action' => 'customPackage'], ['class' => 'btn btn-primary', 'style' => 'background-color: #0D8ABF;']) ?>
    </div>
    <div class="mt-5 mb-2">
        <?= $this->Html->link('Redo Screening Questionnaire', ['action' => 'start', 'prefix' => 'Insurance/Customer'], ['class' => 'btn btn-warning']) ?>
    </div>
</div>
