<?php

namespace Datapage\DatapageSDK\Exceptions\Base;

use App\Core\Exceptions\AbstractException;

class GeneralException extends AbstractException
{
    public function __construct($message)
    {
        parent::__construct(['error' => $message]);
    }
}
