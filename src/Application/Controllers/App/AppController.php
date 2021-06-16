<?php
declare(strict_types=1);

namespace App\Application\Controllers\App;

use Psr\Http\Message\ResponseInterface as Response;
use App\Application\Controllers\BaseController;

class AppController extends BaseController
{
    protected function action() :Response
    {
        $this->logger->info("El controlador APP ha sido visto");
        return $this->respondWithData([
            "crm"     => "SAP HANA API",
            "home"    => "Bienvenido",
            "version" => "1.0"
        ]);
    }
}
