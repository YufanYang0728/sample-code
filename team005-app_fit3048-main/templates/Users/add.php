<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <style>
            @media only screen and (max-width: 1200px) {
                #img-ava {
                    display: none;
                }
            }
        </style>
        <div id="img-ava" class="col-4">
            <?= $this->Html->image('ava.png', ['alt' => 'Ava', 'class' => 'img-fluid']) ?>
        </div>
        <div class="col-xl-5 col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Sign up</h3>
                    <div class="pt-3">
                        <?= $this->Form->create($user) ?>
                        <fieldset>
                            <h6>First name</h6>
                            <div class="form-floating mb-2">
                                <?= $this->Form->control('first_name', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => ''), ['required' => true]) ?>

                            </div>
                            <h6>Last name</h6>
                            <div class="form-floating mb-2">
                                <?= $this->Form->control('last_name', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => ''), ['required' => true]) ?>

                            </div>
                            <h6>Email</h6>
                            <div class="form-floating mb-2">
                                <?= $this->Form->control('email', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => ''), ['required' => true]) ?>
                            </div>
                            <h6>Password</h6>
                            <div class="form-floating mb-2">
                                <?= $this->Form->control('password', array('value' => '', 'label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => ''), ['required' => true]) ?>

                            </div>
                            <h6>Mobile number</h6>
                            <div class="form-floating mb-2">
                                <?= $this->Form->control('mobile_number', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => ''), ['required' => true]) ?>

                            </div>
                            <h6>Date of birth</h6>

                            <div class="form-floating mb-2">
                                <?= $this->Form->control('DOB', array('type' => 'date','label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => ''), ['required' => true]) ?>

                            </div>
                            <h6>Postcode</h6>

                            <div class="form-floating mb-2">
                                <?= $this->Form->control('postcode', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => ''), ['required' => true]) ?>
                                <div style="display:none">
                                    <?= $this->Form->control('role',['value' => 'user']) ?>
                                </div>


                            </div>
                        </fieldset>
                        <?= $this->Flash->render() ?>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-user btn-block" type="submit">Create account</button>
                            <a href="<?= $this->Url->build(['controller' => 'users','action' => 'login']) ?>" class="btn btn-secondary btn-user btn-block" role="button">Log in</a>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
