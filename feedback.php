<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Feedback";
    require_once "blocks/head.php"
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#done').click(function () {
                $('#messageShow').hide();
                var name = $('#name').val();
                var email = $('#email').val();
                var subject = $('#subject').val();
                var messsage = $('#message').val();
                var fail = "";
                if (name.length < 3) fail = "Name of at least 3 characters";
                else if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0)
                    fail = "You entered an incorrect email";
                else if (subject.length < 5)
                    fail = "Message subject not less than 5 characters";
                else if (messsage.length < 20)
                    fail = "Message not less than 20 characters";
                if (fail != "") {
                    $('#messageShow').html(fail + "<div class='clear'><br></div>");
                    $('#messageShow').show();
                    return false;
                }
                $.ajax({
                    url: 'ajax/feedback.php',
                    type: 'POST',
                    cache: false,
                    data: {'name': name, 'email': email, 'subject': subject, 'message': messsage},
                    dataType: 'html',
                    success: function (data) {
                        $('#messageShow').html(data + "<div class='clear'><br></div>");
                        $('#messageShow').show();
                    }
                });

            });
        });
    </script>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<div id="wrapper">
    <div id="leftCol">
        <input type="text" placeholder="Name" id="name" name="name"><br/>
        <input type="text" placeholder="Email" id="email" name="email"><br/>
        <input type="text" placeholder="Message subject" id="subject" name="subject"><br/>
        <textarea placeholder="Enter your message here" name="message" id="message"></textarea><br/>
        <div id="messageShow"></div>

        <input type="button" name="done" id="done" value="Send">


    </div>

    <?php require_once "blocks/rightCol.php" ?>

</div>


<?php require_once "blocks/footer.php" ?>
</body>
</html>