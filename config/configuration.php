<?

require_once 'define.php';
session_start();

function deconnexion(){
    session_destroy();
    header('Location: index.php');
    exit();
}

function redirect(string $target){
    header('Location:'. $target);
    exit();
}

function _dump($variable, bool $type = false): ?string
{
    if (APP_ENV === true && $type === false) {
        return '<pre class="my-4">'.print_r($variable, true).'</pre>';
    } elseif (APP_ENV === true && $type === true) {
        return var_dump($variable);
    } else {
        return null;
    }
}

?>