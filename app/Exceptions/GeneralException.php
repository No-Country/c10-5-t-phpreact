<?php

namespace App\Exceptions;

use RuntimeException;
use Throwable;

class GeneralException extends RuntimeException
{
    public function __construct(
        $message = null,
        $code = 0,
        Throwable $previous = null
    ) {
        $message = $message ?: 'Ha ocurrido un error al procesar su solicitud.';
        parent::__construct($message, $code, $previous);
    }
}
