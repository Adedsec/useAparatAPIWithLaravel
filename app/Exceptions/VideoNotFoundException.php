<?php

namespace App\Exceptions;

use Exception;

class VideoNotFoundException extends Exception
{
    protected $message = 'Video Not Found !';
}
