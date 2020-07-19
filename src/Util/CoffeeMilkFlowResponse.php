<?php


namespace App\Util;

/**
 * Class CoffeeMilkFlowResponse
 * @package App\Util
 */
class CoffeeMilkFlowResponse extends AbstractCoffeeOrderSimulatorResponse
{
    /**
     * Milk flow status code
     */
    private const FLOW_MILK_STATUS = 186520;
    /**
     * Milk flow message response
     */
    private const FLOW_MILK_MESSAGE = "The milk flows...";

    public function getStatusCode(): int
    {
        return self::FLOW_MILK_STATUS;
    }

    public function getMessage(): string
    {
        return self::FLOW_MILK_MESSAGE;
    }
}