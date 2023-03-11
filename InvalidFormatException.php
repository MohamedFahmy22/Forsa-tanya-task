<?php

class InvalidFormatException extends Exception {
    public function __construct(string $message = 'Invalid format', int $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
