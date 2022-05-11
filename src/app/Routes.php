<?php


namespace App;

class Routes
{
    public function __construct()
    {
        try {
            $router = new Router();

            $router
                ->get('/', [Controllers\HomeController::class, 'index'])
                ->post('/upload', [Controllers\HomeController::class, 'upload'])
                ->get('/invoices', [Controllers\InvoicesController::class, 'index'])
                ->get('/invoices/create', [Controllers\InvoicesController::class, 'create'])
                ->post('/invoices/create', [Controllers\InvoicesController::class, 'store']);

            echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

        } catch (Exceptions\RouteNotFoundException $e) {
            http_response_code(404);
            echo View::make('error/404');
        }

    }
}