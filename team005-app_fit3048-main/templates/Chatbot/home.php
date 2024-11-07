<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Chating Bot</title>
   <?php echo $this->Html->css('bot');?>
</head>
<body>
<div id="container">
    <div id="dot1"></div>
    <div id="dot2"></div>
    <div id="screen">
        <div id="header">ONLINE CHATBOT</div>
        <div id="messageDisplaySection">
            <!-- bot messages -->
            <div class="chat botMessages">Welcome to the chatbot.</div>

            <!-- usersMessages -->
            <!-- <div id="messagesContainer">
            <div class="chat usersMessages">I need your help to build a website.</div>
        </div> -->
        </div>
        <!-- messages input field -->
        <div id="userInput">
            <input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Type Your Message Here." required>
            <input type="submit" value="Send" id="send" name="send">
        </div>
    </div>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Jquery Start -->
<style>
    .chat {
        min-height: 40px;
        max-width: 60%;
        padding: 10px;
        border-radius: 10px;
        margin: 15px 0;
    }

    .usersMessages {
        background: #17a5e7;
        color: #fff;
        float: right;
        word-wrap: break-word;
        text-shadow: 1px 1px 2px #000000d4;
        clear: both;
    }

    .botMessages {
      color: 	#000000;
        background: #ebe7e6;
        word-wrap: break-word;
        
        float: left;
        clear: both;
    }
</style>

<script>
    $(document).ready(function(){
        $("#messages").on("keyup",function(){

            if($("#messages").val()){
                $("#send").css("display","block");
            }else{
                $("#send").css("display","none");
            }
        });
    });

    // when send button clicked
    $("#send").on("click",function(e){
        $userMessage = $("#messages").val();
        $appendUserMessage = '<div class="chat usersMessages">'+ $userMessage +'</div>';
        $("#messageDisplaySection").append($appendUserMessage);
        // ajax start
        $.ajax({
            url: "../webroot/js/bot.php",
            type: "POST",
            // sending data
            data: {messageValue: $userMessage},
            // response text
            headers: {
                'X-CSRF-Token': '<?= h($this->request->getParam('_csrfToken')); ?>'
            },
            success: function(data){
                // show response
                $appendBotResponse = '<div class="chat botMessages">'+data+'</div>';
                $("#messageDisplaySection").append($appendBotResponse);
            }
        });
        $("#messages").val("");
        $("#send").css("display","none");
    });
</script>
</body>
</html>
