<?php
    /*
      Author :      Luke Brown
      License:      Permission based - ask me first before using.
      Created:      July 2014
      URL    :      https://github.com/LukeXF/tfg-website
      Contact:      me@luke.sx
    */
?>
<div class="wrapper">
<title>TFG - CHAT ROOM</title>
<?php 
    include 'assets/header.php';
?>


<header>
<div class="container">
<h2 class="docs-header">Chat Room</h2>
</div>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="assets/js/jScrollPane/jScrollPane.css" />
<link rel="stylesheet" type="text/css" href="assets/css/chat.css" />

</header>

<body>

<div id="chatContainer">

    <div id="chatTopBar" class="rounded"></div>
    <div id="chatLineHolder"></div>
    
    <div id="chatUsers" class="rounded"></div>
        <div id="chatBottomBar">
            <div class="tip"></div>
            
            <form id="loginForm" method="post" action="">
                <input id="name" name="name" class="rounded" maxlength="16" />
                <input id="email" name="email" class="rounded" />
                <input type="submit" class="blueButton" value="Login" />
            </form>
            
            <form id="submitForm" method="post" action="">
                <input id="chatText" name="chatText" class="rounded" maxlength="255" />
                <input type="submit" class="blueButton" value="Submit" />
            </form>
            
        </div>
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="assets/js/jScrollPane/jquery.mousewheel.js"></script>
<script src="assets/js/jScrollPane/jScrollPane.min.js"></script>
<script src="assets/js/chatscript.js"></script>
</body>
</html>
