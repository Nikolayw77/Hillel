
//require_once 'App1/Begin1/MyEcho.php';
//require_once 'App2/End2/myEcho.php';

echo "Hello World!";

spl_autoload_register(function($classname){
    $path = __DIR__ . "/$classname.php";
    if (file_exists($path)) {
        require_once $path;
    }
});


use App1\Begin1 as App1;
use App2\End2 as App2;

$a = new App1\MyEcho();
$a -> prnt();

echo "<br>";

App2\myEcho();

