This is a guide on how to use and install Politica.

# Installing
Installing Politica is as easy as copying the folder into a server host.
The server hoster must support PHP. You can also run Politica locally.

# Config
Posting is locked by default, so you will need to edit post.php to unlock the boards.

Replace this with your website and to that page where ever you see it.
header("Location: yoursitehere.com/board.html");

For editor.php, change user and pass to create an admin password and username.
if(isset($_POST["user"]) && isset($_POST["pass"])) {
