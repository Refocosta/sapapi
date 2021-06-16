<?php
declare(strict_types=1);

namespace App\Application\Controllers\App;

use Exception;

class AppException extends Exception
{
    public $message = 'APP_EXCEPTION_ERR';
}
