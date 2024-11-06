<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $question->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $question->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Questions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="questions form content">
            <?= $this->Form->create($question, ['id' => 'question-form']) ?>
            <fieldset>
                <legend><?= __('Edit Question') ?></legend>
                <?php
                echo $this->Form->control('user_id', ['options' => $users]);
                echo $this->Form->control('prompt');
                echo $this->Form->control('stage');
                echo $this->Form->control('audience_type');
                echo $this->Form->control(h('Possible Answer Type'), [
                    'type' => 'select',
                    'options' => [
                        'Yes or No' => 'Yes or No',
                        'Positive Integer' => 'Positive Integer',
                        'Any Integer' => 'Any Integer',
                        'Previous Date' => 'Previous Date',
                        'Any Date' => 'Any Date',
                        'Options' => 'Options',
                    ],
                    'empty' => 'Choose type',
                    'id' => 'question-type'
                ]);
                echo $this->Form->label('Answer Options', h('Answer Options'));
                echo '<div style="display:none;" id="options-description"><small>Enter each option separated by a semicolon (;).</small></div>';
                echo $this->Form->control(h('Answer Options'), [
                    'type' => 'text',
                    'style' => 'display:none;',
                    'id' => 'options-input',
                    'placeholder' => 'Ex: Option One;Option Two;Option 3;',
                    'label' => false
                ]);

                echo $this->Form->hidden('possible_answers', ['id' => 'final-possible-answers']);
                echo $this->Form->control('question_number', ['min' => '0']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#question-type').change(function() {
            const type = $(this).val();
            if (type === 'Options') {
                $('#options-input, #options-description').show();
            } else {
                $('#options-input, #options-description').hide().val('');
            }
        });

        $('#question-form').submit(function() {
            const type = $('#question-type').val();
            let finalValue = type;
            if (type === 'Options') {
                finalValue += "\n" + $('#options-input').val();
            }
            $('#final-possible-answers').val(finalValue);
        });
    });
</script>
