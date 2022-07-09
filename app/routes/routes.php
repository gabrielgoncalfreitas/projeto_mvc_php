<?php

namespace app\routes;

class Routes
{
    private $uri;

    private $routes = [
        "/" => [
            "view"       => "Login",
            "controller" => "LoginController",
            "model"      => "LoginModel"
        ],

        "/Login" => [
            "view"       => "app/view/login/login.php",
            "controller" => "LoginController",
            "model"      => "LoginModel"
        ],

        "/Register" => [
            "view"       => "app/view/login/register.php",
            "controller" => "RegisterController",
            "model"      => "RegisterModel"
        ],

        "/Forgot" => [
            "view"       => "Forgot",
            "controller" => "ForgotController",
            "model"      => "ForgotModel"
        ],

        "/Reset" => [
            "view"       => "Reset",
            "controller" => "ResetController",
            "model"      => "ResetModel"
        ],
    ];

    public function getRoute()
    {
        $this->uri = $_SERVER["REQUEST_URI"];
        if ($this->matchRoutes()) {
            require($this->routes[$this->uri]["view"]);
        }
    }

    private function matchRoutes()
    {
        if (array_key_exists($this->uri, $this->routes)) return true;
        else return false;
    }

    private function getParams()
    {
    }
}
