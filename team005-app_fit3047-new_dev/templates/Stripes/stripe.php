<!DOCTYPE html>
<html>
<head>
    <title>Yogabuddy Membership payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="container">

    <h3 style="text-align: center;">Yogabuddy Membership payment</h3><br/>

    <?= $this->Flash->render() ?>

    <div class="row d-flex">



        <div class="col-md-6 mx-auto d-flex flex-column">
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
                        <input class='form-control' size='4' type='text'>
                    </div>

                    <div class='mb-3'>
                        <label class='form-label'>Card Number</label>
                        <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                    </div>

                    <div class='row'>
                        <div class='col-12 col-md-4 mb-3'>
                            <label class='form-label'>CVC</label>
                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                        </div>
                        <div class='col-12 col-md-4 mb-3'>
                            <label class='form-label'>Expiration Month</label>
                            <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-12 col-md-4 mb-3'>
                            <label class='form-label'>Expiration Year</label>
                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
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

        <div class="col-md-6 d-flex align-items-stretch">
            <img src="img/slide_image_1/im11.jpg" alt="Descriptive alt text" class="img-fluid">
        </div>
    </div>


</div>

</body>

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
