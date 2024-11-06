<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $student
 */
$this->disableAutoLayout();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Yogabuddy Membership payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<section class="pt-4">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center pt-xxl-5">
        <div class="row">
            <!-- Description column -->
            <div class="col-md-6">
                <h3>Yogabuddy Membership payment</h3><br/>
                <div class="membership">
                    <p>Join our community of yoga enthusiasts and access our library of yoga classes and programs designed to improve your physical, mental, and emotional well-being.</p>
                    <ul id="paydescription">
                        <li>Expert instruction from experienced yoga teachers</li>
                        <li>Flexible membership options to suit your needs and schedule</li>
                        <li>Supportive environment to encourage and inspire your practice</li>
                        <li>Access to our library of yoga classes and programs</li>
                    </ul>
                    <p>Start your yoga journey today and become a Yogabuddy member to prioritize your health and well-being.</p>
                </div>
            </div>

            <!-- Payment Form column -->
            <div class="col-md-6">
                <?= $this->Flash->render() ?>
                <div class="card credit-card-box">
                    <div class="card-body">

                        <?= $this->Form->create(null, [
                            'action' => $this->Url->build('/payment', ['fullBase' => false]),
                            'method' => 'post',
                            'class' => 'require-validation',
                            'data-cc-on-file' => 'false',
                            'data-stripe-publishable-key' => STRIPE_KEY,
                            'id' => 'payment-form',
                        ]) ?>

                        <div class='mb-3'>
                            <label class='form-label'>Name on Card</label>
                            <input class='form-control' size='4' type='text' pattern='[A-Za-z\s]+' required>
                        </div>

                        <div class='mb-3'>
                            <label class='form-label'>Card Number</label>
                            <input autocomplete='off' class='form-control card-number' maxlength='16' minlength='16' size='20' type='text' pattern='\d{16}' required>
                        </div>

                        <div class='row'>
                            <div class='col-12 col-md-4 mb-3'>
                                <label class='form-label'>CVC</label>
                                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' maxlength='3' minlength='3' type='text' pattern='\d{3}' required>
                            </div>
                            <div class='col-12 col-md-4 mb-3'>
                                <label class='form-label'>Expiration Month</label>
                                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' maxlength='2' minlength='2'pattern='(0[1-9]|1[0-2])' required>
                            </div>
                            <div class='col-12 col-md-4 mb-3'>
                                <label class='form-label'>Expiration Year</label>
                                <input class='form-control card-expiry-year' placeholder='YYYY' size='4'maxlength='4' minlength='4' type='text' pattern='(20[2-9][0-9])' required>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='col-md-12 error form-group d-none'>
                                <div class='alert alert-danger'>Please correct the errors and try again.</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($50)</button>
                            </div>
                        </div>

                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {

        var $form         = $(".require-validation");

        $('form.require-validation').bind('submit', function(e) {
            var $form         = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid         = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];

                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
</html>
