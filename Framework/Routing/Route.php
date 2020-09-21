<?php


class Route
{
    const METHOD_GET = 1;
    const METHOD_POST = 2;

    // Путь
    private $path;
    // Действие, которое в нём заложено (метод контроллера)
    private $action;
    // Тип запроса (get или post)
    private $type;

    /**
     * Route constructor.
     */
    public function __construct($path, $action, $type)
    {
        $this->path = $path;
        $this->action = $action;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

//     public function getParams()
//     {
//         $params = [];
//         preg_match_all('/{([a-z]\w*)}/',$this->path,$params);
//         var_dump($params[1]);
//         return $params[1];
//     }

//     public function getMask()
//     {
//         $params = $this->getParams();
//         $path = $this->path;
//         foreach ($params as $param)
//         {
//             $path = preg_replace("/{[a-z]\w*}/","(\w*)",$path);
//         }
//         return '~'.$path.'~';
//     }
// }
