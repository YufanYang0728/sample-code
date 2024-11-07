<style>
    .card:hover {
        border-color: #0D8ABF;
        box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.1);
    }
    .fixed-button-container {
        position: fixed;
        right: 20px;
        bottom: 60px;
        z-index: 1000;
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    @media (min-width: 1200px) {
        .fixed-button-container {
            right: calc(50% - 400px);
        }
    }


</style>

<div class="container">
    <h1>Review Your Answers</h1>

    <div class="row">
        <?php foreach ($questions as $index => $question): ?>
            <div class="col-md-12">
                <div class="card mb-1">
                    <div class="card-body">
                        <h3>Question <?= $index + 1 ?></h3>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse<?= $index ?>" aria-expanded="false" aria-controls="collapse<?= $index ?>">
                            <?= h($question->prompt) ?>
                        </button>
                        <div class="collapse show" id="collapse<?= $index ?>">
                            <div class="card card-body mt-3">
                                <?php
                                $answerIndex = $index+2;
                                $answer = isset($savedanswerArray[$answerIndex]) ? $savedanswerArray[$answerIndex] : '';
                                $formattedAnswer = ($answer === true) ? 'Yes' : (($answer === false) ? 'No' : h($answer));
                                ?>
                                Your Answer: <?= h($formattedAnswer) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="fixed-button-container">
        <?= $this->Html->link('Redo Screening Questionnaire', ['action' => 'start', 'prefix' => 'Insurance/Customer'], ['class' => 'btn btn-warning']) ?>
        <?= $this->Html->link('Go back to Package Selection', ['action' => 'packageSelection', $userId, 'prefix' => 'Insurance/Customer'], ['class' => 'btn btn-info ml-3']) ?>
    </div>


</div>
