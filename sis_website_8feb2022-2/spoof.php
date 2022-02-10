<?php

if (isset($_POST['ajax'])) {

$to = $_POST['to'];

$subject = $_POST['sub'];

$msg = $_POST['msg'];

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= "From: ".$_POST['name']."<".$_POST['from'].">";

$send = mail($to,$subject,$msg,$headers);

if ($send) {

  echo "<p id='success'>&#10004;&#65039;  $to</p>";

}else{

  echo "<p id='error'>&#10060;  $to</p>";

}

exit();

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">

  <link rel="icon" href="https://c.top4top.io/p_2177njhj50.jpg">

  <title>UHI SPOOFING</title>

  <style>

  body{

    margin: 0;

    padding: 0;

    background-color: #1b2e4b;

  }

  ::placeholder {

      color: white;

      opacity: .9;

      font-size: 15px!important;

  }

  .main{

    max-width: 768px;

    margin: 0 auto;

  }

  #title{

    color: white;

      text-shadow: 0 0 20px white;

    text-align: center;

    font-family: Montserrat;

  }

  input[type="text"]{

    background-color: #000;

    box-shadow: 0 0 11px 0px white;

    height: 40px;

    width: 47%;

    border: none;

    border-radius: 4px;

    padding: 15px;

    margin: 1%;

    box-sizing: border-box;

    outline: none;

    transition: .5s ease-in;

    color: white;

    font-family: Montserrat;

    font-size: 14px;

  }

  input[type="text"]:hover{

    box-shadow: 0 0 11px 0px red;

  }

  #sub{

    width: 96.5%;

  }

  textarea{

    background-color: #000;

    box-shadow: 0 0 11px 0px white;

    height: 300px;

      width: 47%;

      max-width: 49%;

    border: none;

    border-radius: 4px;

    padding: 15px;

    margin: 1%;

    box-sizing: border-box;

    outline: none;

    transition: .5s ease-in;

    color: white;

    font-family: Montserrat;

    font-size: 14px;

  }

  textarea:hover{

    box-shadow: 0 0 11px 0px red;

  }

  #btn{

    background-color: white;

    box-shadow: 0 0 11px 0px white;

    width: 96.5%;

    height: 40px;

      margin-left: 5px;

    margin-bottom: 40px;

    color: black;

    border: none;

    border-radius: 4px;

    font-family: Montserrat;

    font-size: 18px;

    font-weight: bold;

    letter-spacing: 1px;

    box-sizing: border-box;

    outline: none;

    transition: .5s ease-in;

    cursor: pointer;

  }

  #btn:hover{

    color: white;

  }

  #success{

    font-family: Montserrat;

    color: green;

  }

  #error{

    font-family: Montserrat;

    color: red;

  }

  </style>

</head>

<body>

<form action="" method="post">

<div class="main" style="margin-top: 100px;">
<center>
  <img src="https://c.top4top.io/p_2177njhj50.jpg"widht="250"height="250"></center>
<br>

  <div>

    <input type="text" name="from" id="from" placeholder="From Email">

    <input type="text" name="name" id="name" placeholder="From Name">

  </div><br>

  <div>

    <input type="text" name="sub" id="sub" placeholder="Subject">

  </div><br>

  <div>

    <textarea name="msg" id="msg" placeholder="Message Text or HTML code"></textarea>

    <textarea name="to" id="to" placeholder="Mailist"></textarea>

  </div>

  <div><br><br>

    <button id="btn" onclick="return false">SEND</button>

  </div>

  <div id="result"></div>

</div>

</form>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script type="text/javascript">

$(document).ready(function(){

  $("#btn").on('click',function(){

    var mailist = $("#to").val().split("\n");

    var tmailist =  mailist.length;

    for (var current = 0; current < tmailist; current++) {

    var from = $("#from").val();

    var name = $("#name").val();

    var sub = $("#sub").val();

    var msg = $("#msg").val();

    var to = mailist[current];

    var data = "ajax=1&from=" + from + "&name=" + name + "&sub=" + sub + "&msg=" + msg + "&to=" + to;

      $.ajax({

        type : 'POST',

        data:  data,

        success: function(data) {

                  $("#result").append(data);

              }

      });

    }

  });

});

</script>

</body>

</html>