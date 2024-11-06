<?php
/**
 * @var \App\View\AppView $this
 */
?>
<style>
    .container-bg-transition {
        transition: transform 0.5s ease-in-out;
    }

    /* Adjust the styling to achieve the 3D border effect */
    .container-custom {
        border: 2px solid #0d8abf;
        border-radius: 30px; /* Make the border more rounded */
        padding: 20px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4); /* Increase the box-shadow for popping effect */
    }

    /* Adjust the margin and padding to cover the screen more */
    .content-wrapper {
        margin-top: 5vh;
        padding: 40px;
        display: flex;
        align-items: flex-start; /* Align items to the top */
    }

    /* Left column */
    .left-column {
        background-image: url('/img/insurance/im.jpg');
        background-size: cover;
        background-position: center;
        height: 100%;
        width: 60%; /* Adjust as needed */
        margin-right: 50px; /* Add some space between image and text */
    }

    /* Right column */
    .right-column {
        width: 40%; /* Adjust as needed */
    }

    /* Customize the image fit */
    .custom-image {
        width: 100%;
        height: auto;
        max-height: calc(100vh - 40px);
    }

    /* Customize the button */
    .custom-button {
        background-color: #00b0f0;
        border-radius: 30px; /* Make it rounded */
        padding: 15px 30px; /* Adjust padding to make it bigger */
        font-size: 18px; /* Adjust font size */
        color: white;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.5s cubic-bezier(0.25, 0.1, 0.25, 1); /* Adjust the cubic-bezier values for a dramatic effect */
    }

    /* On button hover */
    .custom-button:hover {
        background-color: #0085c7;
        transform: scale(1.1); /* Slightly scale up on hover */
    }
    .content-text {
        font-size: 18px;
        line-height: 1.6;
    }
</style>


<div class="container container-custom bg-white p-4 container-bg-transition">
    <div class="row">
        <div class="col-md-12 content-wrapper">
            <div class="left-column"></div>
            <div class="right-column">
                <h1 class="text-primary" style="color: #0d8abf;">Discover Your Personalized Insurance Journey</h1>

                <p class="content-text">
                    Ready to take the first step towards a more secure future? Click the button below to get started on your insurance journey today!
                </p>

                <a href="<?= $this->Url->build(['controller' => 'Questions', 'action' => 'start', 'prefix' => 'Insurance/Customer']) ?>" class="btn btn-primary custom-button">Start Now</a>

                <?php if (isset($profile)): ?>
                    <a href="<?= $this->Url->build(['controller' => 'Questions', 'action' => 'packageSelection', $userId, 'prefix' => 'Insurance/Customer']) ?>" class="btn btn-primary custom-button">Use Your Previous Answer and Select Package</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script>
    // Your existing script here
</script>

<script>
    // Add a click event listener to apply the transition class on button click
    document.querySelector('.btn-primary').addEventListener('click', function () {
        document.querySelector('.container-custom').classList.add('container-bg-transition');
    });
</script>


