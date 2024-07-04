<?php

class Router {
    private $routes = [];

    public function add($route, $controllerAction) {
        // Substituir {param} por regex (por exemplo, {id} por (\d+))
        $route = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<\1>[a-zA-Z0-9_-]+)', $route);
        $this->routes['#^' . $route . '$#'] = $controllerAction;
    }

    public function dispatch() {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        
        // Ajuste para considerar a pasta raiz manageasy
        $uri = preg_replace('/^manageasy\//', '', $uri);

        foreach ($this->routes as $route => $controllerAction) {
            if (preg_match($route, $uri, $matches)) {
                array_shift($matches);
                // Filtra as chaves não numéricas
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                list($controller, $action) = explode('@', $controllerAction);
                require_once "app/controllers/{$controller}.php";
                $controller = new $controller();
                call_user_func_array([$controller, $action], $params);
                return;
            }
        }

        http_response_code(404);
        echo " ";
    }
}
?>
