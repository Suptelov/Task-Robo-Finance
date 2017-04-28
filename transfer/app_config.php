<?php 
    define("DEBUG_MODE", false);
    define('DATABASE_HOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE_NAME', 'blog');
    define('HOST_WWW_ROOT',"/task2/" );
//    define('VALID_USERNAME', "admin");
//    define('VALID_PASSWORD', "none");
    $root = $_SERVER["DOCUMENT_ROOT"];
    define('ROOT',"http://localhost/training/" );
    function debug_print($message)
    {
        if (DEBUG_MODE)
        {
            echo $message;
        }
    }
$error_arr;
   
    function handle_error($user_error_message, $system_error_message)
    {
        $error_arr= push($user_error_message);
        header("Location: " . $root . "/training/"."error.php?"."error_message={$user_error_message}&".
              "system_error_message={$system_error_message}");
        exit();
    }
$file_system_name="C:\Server\data\htdocs\training\uploads\pic.jpg";
function get_web_path($file_system_path)
{
    return str_replace($_SERVER['DOCUMENT_ROOT'], '' , $file_system_path);
}

session_start();
