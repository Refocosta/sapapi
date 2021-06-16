<?php 
declare(strict_types=1);

namespace App\Application\Controllers\Default;

use Psr\Http\Message\ResponseInterface as Response;
use App\Core\Base;
use App\Application\Controllers\BaseController;

class DefaultController extends BaseController
{
    protected function action(): Response
    {   
        $stmt = (new Base())->DB('SELECT BILL_TO_PARTY FROM DWH_HDI_DB_1.CV_REFO_PEDIDOS_VENTAS');
        $stmt['query']->execute();
        $result = $stmt['query']->fetchAll();
        return $this->respondWithData($result);
    }
}