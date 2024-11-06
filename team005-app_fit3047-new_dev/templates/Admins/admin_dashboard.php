<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $User
 */
//$id = $this->request->getData('id');
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        h1 {
            text-align: center;
            font-weight: bold;
            color: black;
        }
    </style>
    <h1>Admin Dashboard</h1>
    <?=$this->Html->css('admin_dashboard_style.css') ?>
</head>
<body>
<hr>
<div class="container">
    <div class="square" onclick="window.location.href='<?php echo $this->Url->build(['controller' => 'Admins', 'action' => 'index']); ?>'">
        <h2 style="margin: auto; padding-top: 15px;">User Management</h2>
        <p style="margin: auto; padding-top: 30px; color: black">View, create, edit, and delete users</p>
    </div>
    <div class="square" onclick="window.location.href='<?php echo $this->Url->build(['controller' => 'Admins', 'action' => 'adminViewCourses']); ?>'">
        <h2 style="margin: auto; padding-top: 15px;">Course Management</h2>
        <p style="margin: auto; padding-top: 30px; color: black">View, create, edit, and delete courses</p>
    </div>
</div>
</body>
</html>


