<?php
session_start();
$page_title="Password Change Update";
?>
<div class ="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                        <div class="alert alert-success">
                            <h5><?=$_SESSION['status'];?></h5>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                    <div class ="card">
                        <div class="card header">
                            <h5> Change Password</h5>
                        </div>
                        <div class ="card-body p-4">
                        <?= $this->Form->create(null, ['url' => ['controller' => 'users','action' => 'passwordresetcode']]) ?>
                                <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>">
                                <div class="form-group mb-3">
                                    <label> Email Address</label>
                                    <input type="text" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" class="form-control" placeholder="Enter Email Address"></input>
                                </div>
                                <div class ="form-group mb-3">
                                    <label> New Password </label>
                                    <input type="text" name ="new_password" class ="form-control" placeholder="Enter New Password"></input>
                                </div>
                                <div class ="form-group mb-3">
                                    <label> Confirm Password</label>
                                    <input type="text" name="confirm_password" class="form-control" placeholder="Enter New Password Again"></input>
                                </div>
                                <div class ="form-group mb-3" >
                                    <button type="submit" style="background-color:#17a5e7;"name="password_update" class="btn btn-success w-100">Update Password</button>
                                </div>
                        <?= $this->Form->end() ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>