
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$identity = $this->Identity->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>
    <title>
        <?= h('Advice Cyborg') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Font Awesome icons (free version)-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- CSS -->

    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <?= $this->Html->css(['styles']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?= $this->Url->build('/') ?>" id="navbar-brand">
                <?= $this->Html->image('ava.png', ['alt' => 'Advice Cyborg']); ?>
            <?= $this->Html->tableRow('Advice Cyborg'); ?>

            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                    <?php if ($this->Identity->isLoggedIn()): ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                                My Account
                            </a>

                            <ul class="dropdown-menu dropdown-menu-dark" style="background-color: #4682b4" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?= $this->Url->build([ 'controller' => 'Modules','action' => 'dashboard', 'prefix' => false]);?>">Dashboard</a></li>

                                <li><a class="dropdown-item" href="<?= $this->Url->build(['controller' => 'Users','action' => 'profile', 'prefix' => false]);?>">Settings</a></li>
                                <li><a class="dropdown-item" href="<?= $this->Url->build(['controller' => 'Users','action' => 'logout', 'prefix' => false]);?>">Logout</a></li>
                            </ul>
                        </li>

                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build(['controller' => 'Users','action' => 'login', 'prefix' => false]);?>">Log in</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build(['controller' => 'Users','action' => 'add', 'prefix' => false]);?>">Sign up</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div id="chatbot-container" style="display: none">
  <div id="chatbot-interface">
    <div id="chatbot-header">
      <p>Let's chat.</p>
    </div>
    <div id="chatbot-chat">
      <div class="chatbot-messages chatbot-received-messages">
        <p>How can I help you today?</p>
      </div>
      <div class="chatbot-messages chatbot-received-messages">
        <p>Hello! I am Advice Cyborg's chatbot</p>
      </div>
    </div>
    <div id="chatbot-footer">
      <div id="chatbot-input-container">
        <input type="text" id="chatbot-input" name="chatbot-input" placeholder="Type your message here...">
      </div>
      <div id="chatbot-new-message-send-button">
        <i id="send-icon">Send</i>
      </div>
    </div>
  </div>
</div>




<div id="chatbot-open-container">
  <i class="material-icons" id="open-chat-button" >chat</i>
  <i class="material-icons" id="close-chat-button" style="display: none">close</i>
</div>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-4 text-lg-start">Copyright &copy;  Advice Cyborg 2023</div>
                <div class="col-sm-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href=""><i class="fas fa-globe"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/AVA-AdviceCyborg-559264284478177"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/company/advicecyborg/about/?viewAsMember=true"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-sm-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'privacy']);?>">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'terms_condition']);?>">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <?= $this->Html->script('scripts.js') ?>
</body>
<script>
const chat = document.getElementById("chatbot-chat");


$("#chatbot-open-container").click(function(){
  $("#open-chat-button").toggle(200);
  $("#close-chat-button").toggle(200);
  $("#chatbot-container").fadeToggle(200);
});

document.getElementById("chatbot-new-message-send-button").addEventListener("click", newInput);

document.getElementById("chatbot-input").addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      newInput();
    }
});

function newInput(){
  newText = document.getElementById("chatbot-input").value;
  if (newText != ""){
    document.getElementById("chatbot-input").value = "";
    addMessage("sent", newText);
    generateResponse(newText);
  }
}


function addMessage(type, text){
  let messageDiv = document.createElement("div");
  let responseText = document.createElement("p");
  responseText.appendChild(document.createTextNode(text));

  if (type == "sent"){
    messageDiv.classList.add("chatbot-messages", "chatbot-sent-messages");
  } else if (type == "received"){
    messageDiv.classList.add("chatbot-messages", "chatbot-received-messages");
  }

  messageDiv.appendChild(responseText);
  chat.prepend(messageDiv);
}




function generateResponse($userMessage){
  // Here you can add your answer-generating code

        // ajax start
        $.ajax({

            url: "/webroot/js/bot.php",
            type: "POST",

            // sending data
            data: {messageValue: $userMessage},
            // response text
            headers: {
                'X-CSRF-Token': '<?= h($this->request->getParam('_csrfToken')); ?>'
            },
            success: function(data){
                // show response
                $appendBotResponse = '<div class="chatbot-messages">'+data+'</div>';
                $("#messageDisplaySection").append($appendBotResponse);
                addMessage("received",data);
            }
        });
}
</script>
<style>


#chatbot-container{
  z-index: 999;
  color: #2c2325;
  position: fixed;
  right:30px;
  bottom:50px;
  width:350px;
  max-width: 85vw;
  max-height:100vh;
  border-radius:5px;
  display: flex;
  justify-content: center;

  backdrop-filter: grayscale(0.8);
}

#chatbot-interface {
  height: 60vh;
  width: 60vw;
  border-radius: 30px;
    background: #f6f6f6;
    border-radius: 1rem;
    border: 15px solid #fff;
    box-shadow: 3px 3px 15px rgba(0,0,0,0.2);
  max-width: 100%;
}

#chatbot-header {
  font-weight: 600;
  border-top-left-radius: 1rem;
  border-top-right-radius: 1rem;
  text-align: center;
  color: #fff;
    background: #17a5e7;
  padding: 0.2rem;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  display: flex;

  flex-wrap: nowrap;
  justify-content: space-between;
}

#chatbot-chat{
  height: calc(100% - 56.9px - 6rem);
  border-bottom-left-radius: 1rem;
  border-bottom-right-radius: 1rem;
  padding: 1rem;

  overflow-y: scroll;
  display: flex;
  flex-direction: column-reverse;
}

.chatbot-messages {
  padding: 1rem;

  padding-top: 0.2rem;
  padding-bottom: 0.2rem;
  border-radius: 1rem;
  margin-top: 0.3rem;
  margin-bottom: 0.3rem;
  max-width: 70%;
  word-wrap: break-word;
  width: fit-content;
}

.chatbot-received-messages {

  filter: grayscale(0.3);
  color: 	#000000;
        background: #ebe7e6;
  max-width: 70%;
  word-wrap: break-word;
  border-top-left-radius: 0rem;
}

.chatbot-sent-messages {

  background-color: #17a5e7;
  border-top-right-radius: 0rem;
  margin-left: auto;
  color:white;
  max-width: 70%;
  word-wrap: break-word;
  margin-right: 0;
}

#chatbot-footer {
  padding: 2rem;
  position: fixed;
  bottom:25px;
  left: 0px;
  padding-top: 1rem;
  padding-bottom: 1rem;
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-around;
  align-items: center;

}

#chatbot-input-container{
  width: calc(100%);
}

#chatbot-input {
  width: calc(100% - 0.5rem);
  padding: 0.5rem;
  color: black;
  margin-left: 0;
  background: #fff;
  box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
  border: 0.1rem solid grey;

  border-radius: 1rem;
}

#chatbot-input:focus {
  outline-offset: 0px !important;
  outline: none !important;
  border: 0.1rem solid black;
  /*box-shadow: 0 0 5px #FDB931 !important;*/
}

#chatbot-new-message-send-button{
  cursor: pointer;
}

#send-icon {
  width: 1.5rem;
  padding: 0.5rem;
  color: black;


  color: #fff;
    font-size: 20px;
    background: #17a5e7;
  border: 0.1rem solid grey;

border-radius: 1rem;
}

#chatbot-open-container {
  position: fixed;
  bottom: 1rem;
  right: 1rem;
  background: #17a5e7;
  padding: 1rem;
  border-radius: 50%;
  width: 3.5rem;
  height: 3.5rem;
  max-width: 70%;

  cursor: pointer;
  z-index: 1000;
  align-items: center;
}

.material-icons {

  font-family: 'Material Icons';
  font-weight: normal;
  position:absolute;
  font-style: normal;
  place-items: center;
  font-size: 26px;  /* Preferred icon size */
  display: inline-block;
  line-height: 1;
  text-transform: none;
  letter-spacing: normal;
  word-wrap: normal;
  white-space: nowrap;
  direction: ltr;

  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
}
</style>
</html>
