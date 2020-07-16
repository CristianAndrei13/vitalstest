<?php


namespace App\Util;


abstract class AbstractCoffeeOrderSimulatorResponse implements CoffeeOrderSimulatorResponseInterface
{
    abstract public function getStatusCode(): int;

    abstract public function getMessage(): string;

    public function getResponse(): array {
        return [
            'status' => $this->getStatusCode(),
            'message' => $this->getMessage()
        ];
    }
}