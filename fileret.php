<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === "POST" && openssl_decrypt( $_COOKIE["log3"], "AES-128-CTR", "TrKaxsra7Mt89cHHRS4A" . date("Y/m/d"),0, "3828393174502354") === $_SERVER["REMOTE_ADDR"] . date("Y/m/d")){
    
    if(isset($_POST["configsee"])){
        echo file_get_contents("./inc/secrets.php");
    }
    
    if(isset($_POST["remove"]) && isset($_POST["num"]) && $_POST["remove"] === "!.iTR3m0v3!@-"){
           
function trim_lines($path, $max) { 
  // Read the lines into an array
  $lines = file($path);
  // Setup counter for loop
  $counter = 0;
  while($counter < $max) {
    // array_pop removes the last element from an array
    array_pop($lines);
    // Increment the counter
    $counter++;
  }  // End loop
  // Write the trimmed lines to the file
  file_put_contents($path, implode('', $lines));
}
trim_lines("./inc/secrets.php",$_POST["num"]);
echo "<p style = 'color:green'>success!</p><br><a href = 'editor.php'>Back to editor</a>";
    }
    
    if(isset($_POST["lines"])){
        $content = explode(";",file_get_contents("./inc/secrets.php"));
        $cons = " ";
for($e = 0; $e < $_POST["lines"]; $e++){
    $cons2 = $cons;
    $cons = $cons2 . $content[count($content)-($_POST["lines"]+1-$e)];
}
        echo "<p>Delete the following lines?:<b style = 'color:red'".addslashes($cons)."</b></p><br><form method = 'POST' action = ''><input type = 'text' name = 'remove' value = '!.iTR3m0v3!@-' style = 'display:none'><input type = 'number' name = 'num' style = 'display:none' value ='".$_POST["lines"]."'/> <input type = 'submit' value = 'remove'></form>";
    }
    
     if(isset($_POST["image"]) && isset($_POST["filename"])) {
    file_put_contents("/imgs/".$_POST["filename"].".png",base64_decode($_POST["image"]));
    echo "success!";
    }
    
    }
    
    if(isset($_POST["config"])){
        $configs = explode(";", $_POST["config"]);
        file_put_contents("./inc/secrets.php", "\n// File Editor created changes at:".date("Y:m:dh:i:sa"), FILE_APPEND);
        for($l = 0; $l < count($configs); $l++) {
            if(str_starts_with($configs[$l], '$config[')){
                file_put_contents("./inc/secrets.php", "\n".rtrim($configs[$l],";").";\n", FILE_APPEND);
            }
        }
        echo "<p style = 'color:green'>Success!</p><br><a href = '/editor.php'>back to editor</a>";
    }
    
    if(isset($_POST["filen"])) {
        if(str_contains($_POST['filen'], '.php') === false && str_contains($_POST['filen'], '.htaccess') === false && empty($_POST["filen"]) === false && file_exists("/home/soyjvfyq/vio.soyja.cc/" . $_POST['filen']) === true){
            echo file_get_contents("/home/folder/yourwebsitehere.com/" . $_POST['filen']);
        }
        else {
            echo "Invalid Input!";
        }
    }
    if(isset($_POST["code"]) && isset($_POST["file"])) {
        if(str_contains($_POST['file'], '.php') === false && str_contains($_POST['file'], '.htaccess') === false && empty($_POST["file"]) === false){
            echo file_put_contents("/home/folder/yourwebsitehere.com/". $_POST['file'] , $_POST["code"]);
            header('Location: '. "https://yourwebsitehere.com" . $_POST['file']);
        }
        else {
            echo "Invalid Input!";
        }
    }

  
    ?>