<?php
class Home extends Controller
{
    public function __construct()
    {
        echo "Home controller<br>";
    }

    public function show($x = null, $y = null)
    {
        $this->data = "555";
        $data = ["new_x" => $x, "new_y" => $y];
        $this->view('v_home', $data);
    }
}
