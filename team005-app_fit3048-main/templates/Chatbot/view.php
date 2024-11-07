<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chatbot $chatbot
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
        <div class="chatbot view content">
            <h3><?= h($chatbot->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chatbot->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Messages') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chatbot->messages)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Response') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chatbot->response)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
