<DOCTYPE HTML>
<html>
<head>
<?php 
$title="обратна связь";
reguire_onse "bocks/head.php"?>
<Script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0. 3/jquery. min.js"></script>
<script>
$(document).ready(function (){
  $("#done").click (function () {
  $('#messageShow').hide ();
  var name = $("#name").val ();
  var email = $("#email").val ();
  var subject I $("#subject").val ();
   var lessage = $("#nessage").val ():
  var fail = "";
  if (nale.length < 3) fail = "Имя He мение 3 символов";
  else if (email.split ('@').length 1 == 0 || enail.split ('.').length 1 == 0)
  fail = "Вы вели некоктный email" ;
 else if (subject.length < 5)
 fail = "Тема сообщения не  5 символов"; 
  else if (nessage.length < 20)
  fail = "сообщения не  20 символов";
  if (fail != ""){
  $('#message5how').html (fail + "<d1v class='clear'><br></div>");
    $('#messageShow').show ();
    return false;
   }
   $.ajax({
  url:'/ajax/feedback.php',
  type:'POST',
  cache:false,
  data {'name': name, 'mail': email, 'subject': subject, 'message': message}
  dataType:,'html',
  success: function (data){
      if (data =='Соощение отправлино'){
          $('#message5how').html (data + "<d1v class='clear'><br></div>");
          $('#messageShow').show ();
      }
       });
    });
  });
});
</script>
</head>
<body>
<?php reguire_onse "bocks/header.php"?>
<div id="wrapper">
<div id="leftcol">
<input type="text" placeholder="Имя" id="name" name="name"><br />
<input type="text" placeholder="email" id="email" name="email"><br />
<input type="text" placeholder="Тема слобщения" id="subject" name="subject"><br />
<div id="messageShow"></div>
<textarea name="message" id="message"></textarea><br />
<input type="button"  name="done" id="done" value="Отправить">

<div>
<?php reguire_onse "bocks/rightcol.php"?>
</div>
<?php reguire_onse "bocks/footer.php"?>
</body>
</html>