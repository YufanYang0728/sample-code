<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Collection\CollectionInterface|string[] $insurances
 */
?>

<style>
    .insurance-card {
        cursor: pointer;
        transition: transform 0.2s;
        height: 250px;
        display: flex;
        flex-direction: column;
    }

    .insurance-card:hover {
        transform: scale(1.05);
    }

    .insurance-card.active {
        background-color: #0D8ABF;
        color: white;
    }

    .card-header {
        font-weight: bold;
        flex: 1;
    }

    .card-body {
        flex: 3;
        overflow: hidden;
    }

    .form-check-input {
        margin-right: 8px; /* Add spacing between the radio button and its label */
    }

</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
                <?= $this->Html->link('Back to Package Selection',['controller' => 'Questions', 'action' => 'packageSelection', $userId, 'prefix' => 'Insurance/Customer'], ['class' => 'btn btn-warning']) ?>
            <h4 class="m-5 text-center"><?= __('Choose Your Insurances') ?></h4>
            <?= $this->Form->create(null, ['url' => ['controller' => 'Packages', 'action' => 'add', 'prefix' => 'Insurance/Customer']]) ?>
            <div class="row">
                <?php foreach ($insurances as $id => $insurance): ?>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="card insurance-card" data-id="<?= $id ?>">
                            <div class="card-header text-center"><?= $insurance->name ?></div>
                            <div class="card-body">
                                <p><?= $insurance->description ?></p>
                            </div>
                            <div class="insurance-amount"></div>
                        </div>
                        <?= $this->Form->hidden('insurance_' . $id, ['value' => '0', 'id' => 'insurance-input-' . $id]) ?>
                        <?= $this->Form->hidden('insurance_data_' . $id . '[amount]', ['id' => 'insurance-amount-' . $id]) ?>
                        <?= $this->Form->hidden('insurance_data_' . $id . '[payment_method]', ['id' => 'insurance-method-' . $id]) ?>
                        <?= $this->Form->hidden('insurance_data_' . $id . '[payment_wait_time]', ['id' => 'insurance-wait-time-' . $id]) ?>
                        <?= $this->Form->hidden('insurance_data_' . $id . '[payment_duration]', ['id' => 'insurance-duration-' . $id]) ?>
                    </div>
                <?php endforeach; ?>

                <!-- Modal Structure -->
                <div class="modal fade" id="insuranceModal" tabindex="-1" aria-labelledby="insuranceModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="insuranceModalLabel">Insurance Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <?= $this->Form->label('amount', 'Please indicate your desired coverage amount', ['class' => 'form-label']); ?>
                                    <?= $this->Form->number('amount', ['class' => 'form-control', 'step' => '0.01']); ?>
                                </div>
<!--                                TODO: Select 'Income Protection'  -->
                                <div id="additionalQuestions" style="display: none;">
                                    <div class="form-group">
                                        <?= $this->Form->label('payment_wait_time', 'How long until I get paid?', ['class' => 'form-label']); ?>
                                        <div class="form-check mb-2 mr-1">
                                            <?= $this->Form->radio('payment_wait_time_{id}', ['cheap_premium' => 'Cheap Premium (180 days)'], ['legend' => false]); ?>
                                        </div>
                                        <div class="form-check mb-2 mr-1">
                                            <?= $this->Form->radio('payment_wait_time_{id}', ['medium_wait' => 'Medium Wait (90 days)'], ['legend' => false]); ?>
                                        </div>
                                        <div class="form-check mb-2 mr-1">
                                            <?= $this->Form->radio('payment_wait_time_{id}', ['short_wait' => 'Short Wait (30 days)'], ['legend' => false]); ?>
                                        </div>
                                        <div class="form-check">
                                            <?= $this->Form->radio('payment_wait_time_{id}', ['asap' => 'As soon as possible (14 days)'], ['legend' => false]); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?= $this->Form->label('payment_duration', 'When does the payment stop?', ['class' => 'form-label']); ?>
                                        <div class="form-check mb-2 mr-1">
                                            <?= $this->Form->radio('payment_duration_{id}', ['2_years' => '2 Years'], ['legend' => false]); ?>
                                        </div>
                                        <div class="form-check">
                                            <?= $this->Form->radio('payment_duration_{id}', ['5_years' => '5 Years'], ['legend' => false]); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->label('payment_method', 'How do you want to pay for Income Protection?', ['class' => 'form-label']); ?>
                                    <div class="form-check mb-2 mr-1">
                                        <?= $this->Form->radio('payment_method', ['superannuation' => 'From Superannuation'], ['legend' => false]); ?>
                                    </div>
                                    <div class="form-check">
                                        <?= $this->Form->radio('payment_method', ['out_of_pocket' => 'Out of Pocket'], ['legend' => false]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" id="confirmInsurance">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <?= $this->Form->label('description', 'Customer Comment', ['class' => 'form-label']); ?>
                <?= $this->Form->textarea('description', ['placeholder' => 'Enter your comment here', 'class' => 'form-control']); ?>
            </div>

            <div class="text-center m-5">
                <button id="clearAll" class="btn btn-secondary btn-lg mr-5">Clear All</button>
<!--                TODO: See if we can use this to jump to the QuestionsController for accuracy -->
                <?= $this->Form->button(__('Proceed with Selected Insurances'), ['type' => 'button', 'class' => 'btn btn-primary btn-lg', 'style' => 'background-color: #00b0f0; text-decoration: none;', 'onclick' => 'submitForm();']) ?>
            </div>


            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


<script>
    function submitForm() {
        let selectedInsurancesCount = 0;

        $('input[id^="insurance-input-"]').each(function() {
            if ($(this).val() === '1') {
                selectedInsurancesCount++;
            }
        });

        if (selectedInsurancesCount > 0) {
            const isConfirmed = confirm('Are you sure you want to confirm this package selection?');
            if (isConfirmed) {
                $('form').submit();
            }
        } else {
            alert('Please select at least one insurance card before proceeding.');
        }
    }


    function deselectCard(card) {
        const id = card.data('id');
        card.removeClass('active');
        $('#insurance-input-' + id).val('0');
        card.find('.insurance-amount').text('');
    }

    $(document).ready(function() {
        let selectedCard;
        let wasActiveBeforeModal;

        $('.insurance-card').on('click', function(event) {
            event.stopPropagation();
            const id = $(this).data('id');

            $('#insuranceModal input[name*="{id}"]').each(function() {
                const updatedName = $(this).attr('name').replace('{id}', id);
                $(this).attr('name', updatedName);
            });

            if(id === 3) {
                $('#additionalQuestions').show();
            } else {
                $('#additionalQuestions').hide();
            }

            if ($(this).hasClass('active')) {
                // Card is active, so unselect it
                $(this).removeClass('active');
                $('#insurance-input-' + id).val('0');
                $(this).find('.insurance-amount').html('');  // Clear the displayed values
            } else {
                // Card is not active, so open the modal
                selectedCard = $(this);
                $('#insuranceModal').modal('show');
            }
        });

        // Close & Cancel Button Logic
        $('#insuranceModal .close, #insuranceModal .btn-secondary').on('click', function() {
            if (selectedCard && !wasActiveBeforeModal) {
                deselectCard(selectedCard);
            }
            $('#insuranceModal').modal('hide');
        });

        $('#clearAll').on('click', function(event) {
            event.preventDefault();
            $('.insurance-card').each(function() {
                deselectCard($(this));
            });
        });

        $('#confirmInsurance').on('click', function() {
            const amount = $('input[name="amount"]').val();
            const paymentMethod = $('input[name="payment_method"]:checked').val();

            if (amount && paymentMethod) {
                const id = selectedCard.data('id');
                // Populate hidden fields
                $('#insurance-amount-' + id).val(amount);
                $('#insurance-method-' + id).val(paymentMethod);

                if(id === 3) {
                    const paymentWaitTime = $('input[name="payment_wait_time_' + id + '"]:checked').val();
                    const paymentDuration = $('input[name="payment_duration_' + id + '"]:checked').val();

                    $('#insurance-wait-time-' + id).val(paymentWaitTime);
                    $('#insurance-duration-' + id).val(paymentDuration);
                }

                selectedCard.addClass('active');
                $('#insurance-input-' + id).val('1');
                let tempStr = 'From Superannuation'
                if (paymentMethod === 'out_of_pocket') { tempStr = 'Out of Pocket' }
                selectedCard.find('.insurance-amount').html(`Amount: $${amount} <br> Method: ${tempStr}`);
                $('input[name="amount"]').val('');
                $('input[name="payment_method"]').prop('checked', false);
                $('#insuranceModal').modal('hide');
            } else {
                alert('Please provide all required details.');
            }
        });


        $('#insuranceModal').modal({
            backdrop: 'static',
            keyboard: false
        });
    });
</script>
