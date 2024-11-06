<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ $user
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 */
$this->assign('title', __('CMS'));
$this->disableAutoLayout();

//$this->Html->css("/css/home_style.css")
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>YogaBuddy - CMS</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <?= $this->Html->css("/css/home_style.css") ?>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark custom-bg-color">
            <div class="container px-5">
                <img src="<?php echo $this->Url->image('/img/logo/yogabuddy_logo.jpg'); ?>" alt="Logo">
                <a class="navbar-brand" href="/" id="logo">YogaBuddy</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"> <?= $this->Html->link('Student Home', ['controller' => 'Students', 'action' => 'myCourses'], ['class' => 'nav-link']) ?></li>
                        <li class="nav-item"> <?= $this->Html->link('Admin Home', ['controller' => 'Admins', 'action' => 'adminDashboard'], ['class' => 'nav-link']) ?></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="row" style="margin: 5vb">
            <div class="column-responsive column-80">
<!--                <a class="nav-link active" aria-current="page" href="/">Home</a>-->

                <div class="user_form_content">
                    <h2 style="text-align: center">Edit Home Page</h2>
                    <?= $this->Html->link('Back to Home', '/', [
                        'class' => 'btn btn-primary',
                        'id' => 'back_button'
                    ]) ?>
                    <?= $this->Form->create(null, ['class' => 'form-group', 'style' => 'margin-left: 25%; margin-right: 25%;', 'type' => 'file']) ?>

                    <div id="aligner">
                        <fieldset>
                            <h3 style="text-align: center">Logo</h3>
                            <div class="form-group">
                                <?= $this->Form->label('logo', __('Logo'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('logo', ['class' => 'form-control-file', 'id' => 'logo', 'type' => 'file']); ?>
                            </div>

                            <h3 style="text-align: center">Call to Action</h3>
                            <div class="form-group">
                                <?= $this->Form->label('callToAction', __('Call to Action Text'), ['class' => 'control-label']); ?>
                                <?= $this->Form->textarea('callToAction', ['class' => 'form-control', 'id' => 'callToAction', 'value' => file_get_contents(WWW_ROOT . 'call_to_action.txt')]); ?>
                            </div>


                            <h3 style="text-align: center">About Us Section</h3>
                            <div class="form-group">
                                <?= $this->Form->label('pfp', __('Profile picture'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('pfp', ['class' => 'form-control-file', 'id' => 'pfp', 'type' => 'file']); ?>
                            </div>

                            <div class="form-group">
                                <?= $this->Form->label('aboutUs', __('About Us Text'), ['class' => 'control-label']); ?>
                                <?= $this->Form->textarea('aboutUs', ['class' => 'form-control', 'id' => 'aboutUs', 'rows' => 5, 'value' => file_get_contents(WWW_ROOT . 'about_us.txt')]); ?>
                            </div>


                            <h3 style="text-align: center">Slide Image Section</h3>
                            <div class="form-group">
                                <?= $this->Form->label('image1', __('Slide image 1'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('image1', ['class' => 'form-control-file', 'id' => 'slideFile1', 'type' => 'file']); ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->label('image2', __('Slide image 2'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('image2', ['class' => 'form-control-file', 'id' => 'slideFile2', 'type' => 'file']); ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->label('image3', __('Slide image 3'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('image3', ['class' => 'form-control-file', 'id' => 'slideFile3', 'type' => 'file']); ?>
                            </div>


                            <h3 style="text-align: center">Tile Section</h3>
                            <div class="form-group">
                                <?= $this->Form->label('tile1Image', __('Tile 1 Image'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('tile1Image', ['class' => 'form-control-file', 'id' => 'tile1Image', 'type' => 'file']); ?>
                            </div>
<!--                            <div class="form-group">-->
<!--                                --><?php //= $this->Form->label('tile1Text', __('Tile 1 Text'), ['class' => 'control-label']); ?>
<!--                                --><?php //= $this->Form->control('tile1Text', ['class' => 'form-control-file', 'id' => 'tile1Text']); ?>
<!--                            </div>-->
                            <div class="form-group">
                                <?= $this->Form->label('tile2Image', __('Tile 2 Image'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('tile2Image', ['class' => 'form-control-file', 'id' => 'tile2Image', 'type' => 'file']); ?>
                            </div>
<!--                            <div class="form-group">-->
<!--                                --><?php //= $this->Form->label('tile2Text', __('Tile 2 Text'), ['class' => 'control-label']); ?>
<!--                                --><?php //= $this->Form->control('tile2Text', ['class' => 'form-control-file', 'id' => 'tile2Text', 'type' => 'file']); ?>
<!--                            </div>-->
                            <div class="form-group">
                                <?= $this->Form->label('tile3Image', __('Tile 3 Image'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('tile3Image', ['class' => 'form-control-file', 'id' => 'tile3Image', 'type' => 'file']); ?>
                            </div>
<!--                            <div class="form-group">-->
<!--                                --><?php //= $this->Form->label('tile3Text', __('Tile 3 Text'), ['class' => 'control-label']); ?>
<!--                                --><?php //= $this->Form->control('tile3Text', ['class' => 'form-control-file', 'id' => 'tile3Text', 'type' => 'file']); ?>
<!--                            </div>-->
                            <div class="form-group">
                                <?= $this->Form->label('tile4Image', __('Tile 4 Image'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('tile4Image', ['class' => 'form-control-file', 'id' => 'tile4Image', 'type' => 'file']); ?>
                            </div>
<!--                            <div class="form-group">-->
<!--                                --><?php //= $this->Form->label('tile4Text', __('Tile 4 Text'), ['class' => 'control-label']); ?>
<!--                                --><?php //= $this->Form->control('tile4Text', ['class' => 'form-control-file', 'id' => 'tile4Text', 'type' => 'file']); ?>
<!--                            </div>-->
                            <div class="form-group">
                                <?= $this->Form->label('tile5Image', __('Tile 5 Image'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('tile5Image', ['class' => 'form-control-file', 'id' => 'tile5Image', 'type' => 'file']); ?>
                            </div>
<!--                            <div class="form-group">-->
<!--                                --><?php //= $this->Form->label('tile5Text', __('Tile 5 Text'), ['class' => 'control-label']); ?>
<!--                                --><?php //= $this->Form->control('tile5Text', ['class' => 'form-control-file', 'id' => 'tile5Text', 'type' => 'file']); ?>
<!--                            </div>-->
                            <div class="form-group">
                                <?= $this->Form->label('tile6Image', __('Tile 6 Image'), ['class' => 'control-label']); ?>
                                <?= $this->Form->file('tile6Image', ['class' => 'form-control-file', 'id' => 'tile6Image', 'type' => 'file']); ?>
                            </div>
<!--                            <div class="form-group">-->
<!--                                --><?php //= $this->Form->label('tile6Text', __('Tile 6 Text'), ['class' => 'control-label']); ?>
<!--                                --><?php //= $this->Form->control('tile6Text', ['class' => 'form-control-file', 'id' => 'tile6Text', 'type' => 'file']); ?>
                            </div>
                        </fieldset>
                    </div>

                    <div class="button_group">
                        <?= $this->Form->button('Cancel', [
                            'class' => 'btn btn-primary',
                            'id' => 'submitButton',
                            'onclick' => 'backHomeConfirmation()'
                        ]); ?>

                        <?= $this->Form->button(__('Save Changes'), [
                            'class' => 'btn btn-primary',
                            'id' => 'submitButton',
                            'onclick' => 'return confirm("' . __('Are you sure you want to save changes?') . '")',
                            'formaction' => $this->Url->build(['action' => 'editPages'])
                        ]); ?>
                    </div>
                    <?= $this->Form->end() ?>

                </div>
            </div>
        </div>
    </main>
</body>

<script>
    function backHomeConfirmation() {
        if (confirm("Do you want to go back to the previous page?")) {
            history.back()
        }
    }
</script>

<style>
    #aligner {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-group label {
        font-weight: bold;
        padding: 3%;
    }

    .btn-primary {
        background-color: #f4623a;
        border-color: #f4623a;
    }

    #submitButton {
        position: relative;
        bottom: -4vh;
        left: 3vw;
        width: 15vw;
        margin: 20px;
        margin-top: 3%;
    }

    .btn-primary:hover {
        background-color: #f38a6f;
        border-color: #f38a6f;
    }

    .btn-primary:active {
        background-color: #f38a6f;
        border-color: #f38a6f;
    }

    h2 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .form-group {
        padding: 1%;
        width: 70%;
    }

    header {
        background-color: #f4623a;
    }


    .button_group {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 5vw;
    }

    #back_button {
        margin-left: 5vw;
    }

</style>
