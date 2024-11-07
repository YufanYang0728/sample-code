<?php session_start();
$page_title="Password Reset Form";
include('database.php');
?>
<div class ="py-5">
        <div class ="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php
                        if(isset($_SESSION['status']))
                        {
                            ?>
                            <div class="alert alert-sucess">
                                <h5><? $_SESSION['status'];?></h5>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                        }
                    ?>

                    <div class="card">
                        <div class = "card-header">
                            <h5> Reset Password</h5>
                    </div>
                    <div class ="card-body p-4">
                    <?= $this->Form->create(null, ['url' => ['controller' => 'users','action' => 'passwordresetcode']]) ?>
                            <div class="form-floating  mb-3">
                            <fieldset>
                                <label> EMAIL ADDRESS:</label>
                                <br>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email Address"></input>
                            </fieldset>
                            </div>
                            <div class ="form-floating  mb-2">
                                <button type="submit"name ="password_reset_link" class="btn btn-primary"> Send Password Reset </button>
                            </div>
                    <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>