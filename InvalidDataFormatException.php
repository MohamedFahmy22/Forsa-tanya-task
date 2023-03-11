<?php

class InvalidDataFormatException extends Exception {
    public function __construct(string $message = 'Invalid data format', int $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}