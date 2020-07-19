<?php


namespace App\Util;

/**
 * Class ApiCoffeeSimulatorResponsePrinter
 * @package App\Service
 */
class ApiCoffeeSimulatorResponsePrinter
{
    /**
     * Api response object
     *
     * @var AbstractCoffeeOrderSimulatorResponse
     */
    protected AbstractCoffeeOrderSimulatorResponse $apiResponse;

    /**
     * ApiCoffeeSimulatorResponsePrinter constructor.
     * @param AbstractCoffeeOrderSimulatorResponse $apiResponse
     */
    public function __construct(AbstractCoffeeOrderSimulatorResponse $apiResponse)
    {
        $this->apiResponse = $apiResponse;
    }

    /**
     * Return an array presentation of api response
     *
     * @return array
     */
    public function getApiResponseAsArray(): array
    {
        return $this->apiResponse->getResponse();
    }
}