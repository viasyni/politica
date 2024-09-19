<?php
// Start the session
session_start();
?>
<html>
<head><meta http-equiv="Content-type" content="text/html; charset=utf-8"><title>File Editor</title><link rel="stylesheet" media="screen" href="/stylesheets/style.css"><link rel="stylesheet" media="screen" href="style.css"><link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/hwabag.css"><link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css"><link rel="stylesheet" media="screen" href="/stylesheets/style.css"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"><link rel="stylesheet" type="text/css" id="stylesheet" href="/stylesheets/hwabag.css"><link rel="stylesheet" href="/stylesheets/font-awesome/css/font-awesome.min.css"><link rel="stylesheet" href="/static/flags/flags.css"><script type="text/javascript" src="/main.js"></script><script type="text/javascript" src="https://talks.soyja.cc/js/jquery.min.js"></script><script type="text/javascript" src="/js/inline-expanding.js"></script><script type="text/javascript" src="/js/multi-image.js"></script><script type="text/javascript" src="/js/multi-image.js"></script><script type="text/javascript" src="/js/style-select.js"></script><script type="text/javascript" src="/js/wpaint.js"></script><script type="text/javascript" src="/js/options.js"></script><script type="text/javascript" src="/js/options/general.js"></script><script type="text/javascript" src="/js/no-animated-gif.js"></script></head>
<h1 style = "text-align:center">File Editor:</h1>
<span style = "text-align:center">
    <form method = "POST" action = "">
        
        <p>User: </p><input type = "text" id = "u" name = "user"><br>
        <p>Pass: </p><input type = "text" name = "pass"><br>
        <input type = "submit" value = "submit">
    </form>
</span>
</html>
<?php
    
if($_SERVER["REQUEST_METHOD"] === "POST"){
  
    if(isset($_POST["user"]) && isset($_POST["pass"])) {
 if($_POST["user"] === "" && $_POST["pass"] === "") {
     echo "<p style = 'color:green'>Logged in!</p><hr>";
  
     
     // editor
     echo "<script>
  
     </script> <div style = 'text-align:center'>
     <h3>Editor:</h3>
     <form method = 'POST' action = 'fileret.php'>
     <p style = 'color:red'>NOTE: This feature can still be VERY dangerous! If you accidentally delete a file's contents, its gone for good.</p>
     <small>*To make a new file, just ignore the 'Invalid input!' and click submit</small><br>
     <input type = 'text' onchange = 'console.log(\"x\");$.post(\"fileret.php\",{filen: document.getElementById(\"file\").value},function(data, status){document.getElementById(\"code\").value = data;});' name = 'file' id = 'file' placeholder = 'enter file path here'></input>
     <textarea id = 'code' name = 'code' placeholder = 'code will pop up here after inputting a file path'></textarea>
     <input type = 'submit' value = 'submit'>
     </form>
     </div>
     
     ";
     // img 
 

     setcookie("log3", openssl_encrypt( $_SERVER["REMOTE_ADDR"] . date("Y/m/d"), "AES-128-CTR", "TrKaxsra7Mt89cHHRS4A" . date("Y/m/d"),0, "3828393174502354"), time() + (86400 * 30), "/");
     
 
     
     
 }  
 else {
     echo "<p style = 'color:red'>Failure.</p>";
 }
}
}
?>

