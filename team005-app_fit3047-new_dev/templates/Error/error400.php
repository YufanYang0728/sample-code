<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Database\StatementInterface $error
 * @var string $message
 * @var string $url
 */
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error400.php');

    $this->start('file');
    ?>
    <?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
    <?php if (!empty($error->params)) : ?>
    <p>
        <strong>SQL Query Params: </strong>
        <?php Debugger::dump($error->params) ?>
    </p>
<?php endif; ?>
    <?= $this->element('auto_table_warning') ?>
    <?php

    $this->end();
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops! Page not found</title>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <style>
        body {
            background-color: #ffd1dc;
            font-family: 'Fredoka One', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            font-size: 48px;
            color: #ff3864;
            margin-bottom: 20px;
        }

        p {
            font-size: 24px;
            color: #333;
        }
        p1 {
            font-size: 16px;
            color: #333;
        }

        .emoji {
            font-size: 72px;
        }
    </style>
</head>
<body>
<h1>Oops!</h1>
<p>Page not found. <span class="emoji">😞</span></p>
<p>We couldn't find the page you were looking for.</p>
<p1>He who seeks does not find, but he who does not seek will be found.</p1>
<p>Error: <?= h($message) ?></p>
</body>
</html>
