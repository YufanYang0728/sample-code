<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-md-10">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Log in</h3>
                    <div class="pt-3">
                        <?= $this->Form->create() ?>
                        <fieldset>
                            <h6>Email address</h6>
                            <div class="form-floating  mb-2">
                                <?= $this->Form->control('email', array('label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => 'Email address'), ['required' => true]) ?>

                            </div>
                            <h6>Password</h6>
                            <div class="form-floating mb-2">
                                <?= $this->Form->control('password', array('value' => '', 'label' => false, 'class' => 'mb-2 user form-group form-control form-control-user', 'placeholder' => 'Password'), ['required' => true]) ?>

                            </div>
                        </fieldset>
                        <?= $this->Flash->render() ?>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-user btn-block" type="submit">Log in</button>
                            <a href="<?= $this->Url->build(['controller' => 'users','action' => 'add']) ?>" class="btn btn-secondary btn-user btn-block" role="button">Sign up</a>
                            <a href="<?= $this->Url->build(['controller' => 'users','action' => 'passwordreset']) ?>" class="btn btn-secondary btn-user btn-block" role="button">Forgot Password</a>

                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function pop (){
                alert("Please contact administrator at admin.advicecyborg@gmail.com for further assistance");
            }
        </script>
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
    </div>
</div>
