<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\PostTooLargeException;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof PostTooLargeException) {
            // Custom handling code, e.g., redirect back with a specific error message
            return redirect()->back()->withInput()->withErrors(['file' => 'File size too large.']);
        }

        return parent::render($request, $exception);
    }
}
