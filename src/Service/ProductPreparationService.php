<?php


namespace App\Service;


use App\Entity\Customer;
use App\Entity\Order;
use App\Entity\Product;
use App\Util\CoffeeOrderSimulator;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class ProductPreparationService
 * @package App\Service
 */
final class ProductPreparationService
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;

    /**
     * @var CoffeeOrderSimulator
     */
    private CoffeeOrderSimulator $coffeeSimulator;

    /**
     * ProductPreparationService constructor.
     * @param EntityManagerInterface $em
     * @param CoffeeOrderSimulator $coffeeSimulator
     */
    public function __construct(EntityManagerInterface $em, CoffeeOrderSimulator $coffeeSimulator)
    {
        $this->em = $em;
        $this->coffeeSimulator = $coffeeSimulator;
    }

    /**
     * @param Product $product
     * @param Customer $customer
     */
    public function orderCoffee(Product $product, Customer $customer): void
    {
        $coffeeOrder = $this->createOrder($product, $customer);


    }

    /**
     * @param Product $product
     * @param Customer $customer
     * @return Order
     */
    protected function createOrder(Product $product, Customer $customer): Order
    {
        $coffeeOrder = $this->buildCoffeeOrder($product, $customer);

        $this->em->persist($coffeeOrder);
        $this->em->flush();

        return $coffeeOrder;
    }

    /**
     * @param Product $product
     * @param Customer $customer
     * @return Order
     */
    protected function buildCoffeeOrder(Product $product, Customer $customer): Order
    {
        $coffeeOrder = new Order();
        $coffeeOrder->setProduct($product);
        $coffeeOrder->setCustomer($customer);
        $coffeeOrder->setStep(Order::INIT);

        return $coffeeOrder;
    }
}