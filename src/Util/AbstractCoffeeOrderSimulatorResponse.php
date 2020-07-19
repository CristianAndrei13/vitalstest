<?php


namespace App\Util;

/**
 * Class AbstractCoffeeOrderSimulatorResponse
 * @package App\Util
 */
abstract class AbstractCoffeeOrderSimulatorResponse implements CoffeeOrderSimulatorResponseInterface
{
    /**
     * @return int
     */
    abstract public function getStatusCode(): int;

    /**
     * @return string
     */
    abstract public function getMessage(): string;

    /**
     * @return array
     */
    public function getResponse(): array {
        return [
            'status' => $this->getStatusCode(),
            'message' => $this->getMessage()
        ];
    }
}