<?php
// Маршрутизация и объявление маршрутов

namespace Framework\Routing;
class Router
{
    private static $routes = [];
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getContent(){
        $exec_route = null;
        foreach (self::$routes as $route){
            if($route->getPath() == $this->request->getPath() && $route->getType() == $this->request->getType()){
                $exec_route = $route;
            }
        }
        if($exec_route) return $exec_route->getAction();
        return "404";
    }

    // Выявление контента по заданному маршруту
    // public function getContent()
    // {
    //     $exec_route = null;
    //     // Найдём нужный маршрут и выведем его название
    //     foreach (self::$routes as $route)
    //     {
    //         // Если путь и тип запроса совпадают с теми, что есть в базе (routes.php)
    //         if($route->getPath() == $this->request->getPath() && $route->getType() == $this->request->getType())
    //         {
    //             $exec_route = $route;
    //         }
    //     }
    //     var_dump($exec_route->getParams());
    //     var_dump($exec_route->getMask());
    //     if($exec_route)
    //     {
    //         // Разделим контроллер на название и метод (создадим массив), разделив их по "@"
    //         $action = explode('@',$exec_route->getAction());
    //         // Проверка на наличие контроллера
    //         if (isset($action[0]) && isset($action[1]))
    //         {
    //             $controller_name = "App\MVC\Controllers\\".$action[0];
    //             $method_name = $action[1];
    //             $controller = new $controller_name();

    //             if(method_exists($controller, $method_name))
    //             {
    //                 $rm = new ReflectionMethod($controller_name,$method_name);
    //                 $params = [];
    //                 $params_to_controller = [];
    //                 preg_match_all($exec_route->getMask(), $this->request->getPath(),$params);
    //                 foreach ($exec_route->getParams() as $key => $param){
    //                 $params_to_controller[$param] = $params[$key+1][0];
    //             }
    //             return $rm->invokeArgs($controller, $params_to_controller);
    //             }
    //             return "Метод ".$method_name." не найден";
    //         }
    //         else return "Контроллер не найден";
    //     }
    //     return "Маршрут не найден";
    // }

    // Функция "регистрации" (добавления) маршрута
    public static function addRoute($route)
    {
        array_push(self::$routes, $route);
    }
}
