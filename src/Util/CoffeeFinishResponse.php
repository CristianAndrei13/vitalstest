<?php


namespace App\Util;

/**
 * Class CoffeeFinishResponse
 * @package App\Util
 */
class CoffeeFinishResponse extends AbstractCoffeeOrderSimulatorResponse
{
    /**
     * Finish status code
     */
    private const FINISH_STATUS = 300000;
    /**
     * Finish message response
     */
    private const FINISH_MESSAGE = "Coffee is ready!!!";

    public function getStatusCode(): int
    {
        return self::FINISH_STATUS;
    }

    public function getMessage(): string
    {
        return self::FINISH_MESSAGE;
    }
}