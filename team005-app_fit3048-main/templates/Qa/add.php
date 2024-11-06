<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qa $qa
 */
$formtemplate=[
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}"class="form-control"{{attrs}}/>',
    ];
    $this->Form->setTemplates($formtemplate);
?>
<div class="container">
    <div class="column-responsive column-80">
        <div class="qa form content">
            <?= $this->Form->create($qa) ?>
            <fieldset>
                <legend><?= __('Add Question and Answer') ?></legend>
                <?php
                    echo $this->Form->control('Question');
                    echo $this->Form->control('Answer');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
