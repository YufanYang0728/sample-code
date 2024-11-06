<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section class="page-section bg-light" id="profile">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">My account</h2>
                    <h3 class="section-subheading text-muted">Edit your profile details below</h3>
                </div>
                <div class="container">
                    <?= $this->Form->create($user) ?>
                    <fieldset>
                        <h6>Email</h6>
                        <?= $this->Form->control('email', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => 'Email address', 'readonly'), ['required' => true]) ?>
                        <h6>Password</h6>
                        <?= $this->Form->control('password', array('value' => '', 'label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => 'Password'), ['required' => true]) ?>
                        <h6>First name</h6>
                        <?= $this->Form->control('first_name', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => 'First name'), ['required' => true]) ?>
                        <h6>Last name</h6>
                        <?= $this->Form->control('last_name', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => 'Last name'), ['required' => true]) ?>
                        <h6>Mobile number</h6>
<?= $this->Form->control('mobile_number', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => 'Mobile number', 'type' => 'tel', 'inputmode' => 'numeric', 'pattern' => '[0-9]*', 'required' => true)) ?>
                        <h6>Profile field</h6>
                        <?= $this->Form->control('profile_fields', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => 'Profile fields'), ['required' => true]) ?>
                    </fieldset>
                    <?= $this->Flash->render() ?>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-user btn-block" type="submit">Save changes</button>
                        <?= $this->Form->end() ?>
                        <?= $this->Form->postLink(
                            __('Delete account'),
                            ['action' => 'delete', $user->user_id],
                            ['confirm' => __('Are you sure you want to delete your account?'), 'class' => 'btn btn-secondary btn-user btn-block']
                        ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
