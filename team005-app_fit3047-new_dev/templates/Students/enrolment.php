<?php


/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $student
 */

use Cake\Routing\Router;


?>

<body>
<!-- Responsive navbar-->
<header>
    <div>
        <?= $this->Html->link(__('Back'), 'javascript:history.back()') ?>
    </div>
    <h1 style="text-align: center; color: black;"><?= h($course->title) ?></h1>
    <?= $this->Html->image($course->image, [
        'style' => 'width: 100%; height: 42vh; object-fit: cover; object-position: center; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);'
    ]) ?>

    <?=$this->Html->script('https://code.jquery.com/jquery-3.6.0.min.js') ?>
    <hr>
</header>

<main>
    <h3 style="text-align: center"><?= h($course->description) ?></h3>
    <h4 style="text-align: center">(<?=h(count($course->sections) ?? 0)?> sections)</h4>
    <?php foreach ($course->sections as $section): ?>
        <ul>
            <li class="fs-4">
                <h5><?= h($section->title) ?></h5>
            </li>
            <p><?= h($section->description) ?></p>
        </ul>
    <?php endforeach; ?>

    <script>
        function enrolmentConfirmation() {
            console.log('HELLO')
            var text = 'Are you sure you want to enrol?';
            if (confirm(text)) {
                $.ajax({
                    url: "<?= $this->Url->build([
                        'controller' => 'Students', 'action' => 'enrol', $course->id
                    ]) ?>",
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'X-CSRF-TOKEN': "<?= $this->request->getAttribute('csrfToken') ?>"
                    },
                    method: 'put',
                    success: function(response) {
                        window.location.href = "<?= $this->Url->build([
                            'controller' => 'Students', 'action' => 'myCourses'
                        ]) ?>"
                    },
                    error: function(xhr, status, error) {
                        alert("Internal Server Error")
                    }
                });
            }
        }
    </script>

    <?= $this->Form->button('Enrol Now', [
        'class' => 'btn btn-primary btn-sm',
        'onclick' => "enrolmentConfirmation()"
    ]) ?>


</main>

</body>
