<?php


namespace App\Util;


class CoffeeWarmUpResponse extends AbstractCoffeeOrderSimulatorResponse
{
    private const WARM_UP_STATUS = 186520;
    private const WARM_UP_MESSAGE = "The machine is warming up...";

    public function getStatusCode(): int
    {
        return self::WARM_UP_STATUS;
    }

    public function getMessage(): string
    {
        return self::WARM_UP_MESSAGE;
    }
}