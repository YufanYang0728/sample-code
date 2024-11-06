<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Question> $questions
 */

echo $this->Html->css('insurance/customer/privacy_popup');
echo $this->Html->css('insurance/customer/questionnaire');
echo $this->Html->script('insurance/customer/privacy_popup');
echo $this->Html->script('insurance/customer/questionnaire_jQuery');
?>

<div id="questionnaire">
    <!-- Progress Bar -->
    <div class="progress mb-4">
        <div id="progress-bar" class="progress-bar" style="width: 0%; background-color: #0D8ABF;"></div>
    </div>

    <?php echo $this->Form->create(null, ['url' => ['controller' => 'Questions', 'action' => 'storeProfile', 'prefix' => 'Insurance/Customer'], 'id' => 'questionnaire-form']); ?>
    <?php foreach ($questions as $index => $question): ?>
        <div class="question-card" style="<?= $index > 0 ? 'display:none;' : '' ?>">
            <h5 class="text-primary">Question <?= $index + 1 ?></h5>
            <p><?= h($question->prompt) ?></p>
            <?php
            $lines = explode("\n", h($question->possible_answers));
            $answerType = trim($lines[0]);
            $optionsString = $lines[1] ?? "";

            switch ($answerType) {
                case 'Yes or No':
                    echo $this->Form->control('answers.' . $question->question_number, ['type' => 'radio', 'options' => ['Yes' => 'Yes', 'No' => 'No'], 'label' => false]);
                    break;
                case 'Positive Integer':
                    echo $this->Form->control('answers.' . $question->question_number, [
                        'type' => 'number',
                        'step' => '1',
                        'min' => '0',
                        'value' => '0',
                        'label' => false
                    ]);
                    break;
                case 'Any Integer':
                    echo $this->Form->control('answers.' . $question->question_number, ['type' => 'number', 'step' => '0.01', 'label' => false]);
                    break;
                case 'Previous Date':
                    $maxDate = date('d/m/Y', strtotime('yesterday'));
                    echo $this->Form->control('answers.' . $question->question_number, [
                        'type' => 'text',
                        'label' => false,
                        'class' => 'previous-date',
                        'placeholder' => 'dd/mm/yyyy',
                    ]);
                    break;
                case 'Any Date':
                    echo $this->Form->control('answers.' . $question->question_number, [
                        'type' => 'date',
                        'label' => false,
                        'class' => 'any-date',
                    ]);
                    break;
                case 'Options':
                    $optionsString = $lines[1] ?? "";
                    $optionsString = h($optionsString);
                    $optionsArray = explode(';', $optionsString);
                    $options = array_combine($optionsArray, $optionsArray);
                    unset($options['']);
                    echo $this->Form->control('answers.' . $question->question_number, [
                        'type' => 'select',
                        'options' => $options,
                        'label' => false,
                        'class' => 'select-css',
                    ]);
                    break;
                default:
                    echo $this->Form->control('answers.' . $question->question_number, ['type' => 'text', 'label' => false]);
                    break;
            }
            ?>



            <div class="btn-group">
                <?php if ($index > 0): ?>
                    <button type="button" class="btn btn-primary btn-round btn-3d prev-btn">Previous</button>
                <?php endif; ?>
                <?php if ($index < count($questions) - 1): ?>
                    <button type="button" class="btn btn-primary btn-round btn-3d next-btn">Next</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary btn-round btn-3d">Submit</button>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
    <?php echo $this->Form->end(); ?>

    <div class="btn-group">
        <a href="<?= $this->Url->build(['controller' => 'Questions', 'action' => 'index', 'prefix' => 'Insurance/Customer']); ?>" class="btn btn-primary btn-round btn-3d">Back to Questionnaire Home</a>
        <button type="button" class="btn btn-primary btn-round btn-3d" id="restart-btn">Restart</button>
    </div>
</div>


<div class="progress-indicator-container" style="width: 100%; padding: 20px; background-color: #3a75f4;">
    <div class="progress-indicator-icon" style="width: 50px; height: 25px; background-color: #0af5be; border-radius: 50%;"></div>
<!--    <div class="progress-indicator-text" style="font-size: 18px; margin-left: 20px;">Answered <span id="current-question-index">1</span> out of --><?php //= count($questions) ?><!-- questions</div>-->
    <div class="progress-indicator-text" style="font-size: 18px; margin-left: 20px;">Total <?= count($questions) ?> Questions</div>
</div>


