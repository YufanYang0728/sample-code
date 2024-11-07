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
        <div class="qa view content">
            <h3><?= h($qa->Question) ?></h3>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Question') ?></th>
                    <td><?= h($qa->Question) ?></td>
                </tr>
                
            </table>
            <div class="text">
                <strong><?= __('Answer') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($qa->Answer)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
