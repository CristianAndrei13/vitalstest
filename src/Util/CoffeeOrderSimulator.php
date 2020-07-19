<?php


namespace App\Util;


class CoffeeOrderSimulator
{

    public function simulateWarmUp(): array
    {
        $response = new ApiCoffeeSimulatorResponsePrinter(new CoffeeWarmUpResponse());
        return $response->getApiResponseAsArray();
    }

    public function simulateMilkFlow(): array
    {
        $response = new ApiCoffeeSimulatorResponsePrinter(new CoffeeMilkFlowResponse());
        return $response->getApiResponseAsArray();
    }

    public function simulateCoffeePreparation(): array
    {
        $response = new ApiCoffeeSimulatorResponsePrinter(new CoffeeEspressoFlowResponse());
        return $response->getApiResponseAsArray();
    }

    public function simulateFinish(): array
    {
        $response = new ApiCoffeeSimulatorResponsePrinter(new CoffeeFinishResponse());
        return $response->getApiResponseAsArray();
    }
}