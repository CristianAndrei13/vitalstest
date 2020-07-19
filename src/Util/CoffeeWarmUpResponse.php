<?php


namespace App\Util;

/**
 * Class CoffeeWarmUpResponse
 * @package App\Util
 */
class CoffeeWarmUpResponse extends AbstractCoffeeOrderSimulatorResponse
{
    /**
     * Warm up status code
     */
    private const WARM_UP_STATUS = 186520;
    /**
     * Warm up message response
     */
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