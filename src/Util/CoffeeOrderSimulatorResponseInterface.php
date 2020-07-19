<?php


namespace App\Util;

/**
 * Interface CoffeeOrderSimulatorResponseInterface
 * @package App\Util
 */
interface CoffeeOrderSimulatorResponseInterface
{
    public function getStatusCode(): int;

    public function getMessage(): string;

    public function getResponse(): array;
}