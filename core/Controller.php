<?php
class Controller
{
    public function view($file, $data = null)
    {
        extract($data);
        unset($data);
        include __DIR__ . '/../src/views/' . $file . '.php';
    }
}
