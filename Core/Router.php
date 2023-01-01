<?php


class Router {
    
    protected $routes = [];

    /**
     * l'ensemble des paramètres de la route
     */
    protected $params = [];

    /**
     * Permet d'ajouter une route à la table des routes
     * @param string $url l'url à ajouter
     * @param array $params l'ensemble fes paramètres de la route
     * @return void 
     */
    public function add ($url, $params =[]) {
        $route = preg_replace("/\//", "\/", $url);
        $route = preg_replace("/\{([a-z-]+)\}/i", "(?'\\1'[\w-]+)", $route);
        $route = preg_replace("/^admin\/\{([a-z-]+)\}/i", "(?'\\1'[\w-]+)", $route);
        $route = preg_replace("/\{(\w+):(\d+)\}/i", "(?'\\1'\d+)", $route);
        $route = "/^" . $route . "$/";
        $this->routes[$route] = $params;

    }

    /**
     * Permet de matcher une route
     * @param string
     * @return booléen 
     */
    public function match($url) {
        foreach ($this->routes as $route => $params) {
            # code...
            if (preg_match($route, $url, $matches)) {
                # code...
                foreach ($matches as $key => $value) {
                    if(is_string($key)){
                        $param[$key] = $val;
                    }
                    return true;
                };
                $this->params = $param;
                return false;
            }
        }
    }

    /**
     * Dispatche la route en executant la methode
     * @param string $url
     * @return void
     */
    public function dispatch($url) {
        if($this->match($url)) {
            
        }
        
            
        
    }

     


     
    /**
     * Retrieve the url and return the page requested to use the main controller
     */
    // public function handleRequest() {
    //     $route = $_GET['page'] ?? 'home';
    //     $_GET['page'] = str_replace(".php", "", $_SERVER['QUERY_STRING']);
        
    //     switch ($route) {
    //         case 'login':
    //             $controller = new LoginController();
    //             $controller->displayLome();
    //             header("Location:$controller")

    //             # code...

    //             break;
    //         case 'profil':
    //             $controller = new ProfilController();
    //             $controller->displayHome();
    //             header("Location:$controller")

    //             # code...

    //             break;
            
    //         default:
    //         $controller = new HomeController();
    //         $controller->displayHome();
    //         header("Location:$controller")

    //             # code...
    //             break;
    //     }
        
    // }




    /**
     * Renvoi les paramètres de la route actuelle
     * @return array 
     */
    public function getParams () {
        return $this->params;
    }

    /**
     * Renvoi toutes les routes
     * @return void 
     */
    public function getRoutes () {
        return $this->routes;
    }


}




?>