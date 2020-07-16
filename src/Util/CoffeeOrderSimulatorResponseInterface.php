<?php


namespace App\Util;


interface CoffeeOrderSimulatorResponseInterface
{
    public function getStatusCode(): int;

    public function getMessage(): string;

    public function getResponse(): array;
}