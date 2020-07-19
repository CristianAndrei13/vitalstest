<?php


namespace App\Util;

/**
 * Class CoffeeEspressoFlowResponse
 * @package App\Util
 */
class CoffeeEspressoFlowResponse extends AbstractCoffeeOrderSimulatorResponse
{
    /**
     * Espresso flow status code
     */
    private const ESPRESSO_STATUS = 186520;
    /**
     * Espresso flow message response
     */
    private const ESPRESSO_MESSAGE = "The coffee flows...";

    public function getStatusCode(): int
    {
        return self::ESPRESSO_STATUS;
    }

    public function getMessage(): string
    {
        return self::ESPRESSO_MESSAGE;
    }
}