<?php
class Controller {
    protected function view($viewFile, $data = []) {
        extract($data);
        require_once(APP_ROOT . "/app/views/{$viewFile}.php");
    }

    protected function redirect($url) {
        header("Location: $url");
        exit();
    }
}
?>
