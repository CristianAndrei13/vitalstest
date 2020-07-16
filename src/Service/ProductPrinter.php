<?php


namespace App\Service;


use App\Entity\Product;

/**
 * Class ProductPrinter
 * @package App\Service
 */
class ProductPrinter
{
    /**
     * Return formatted text for given products
     *
     * @param Product[] $products
     * @return string
     */
    public function getPrintTextFormatForProducts(array $products): string
    {
        $formattedText = '';

        foreach ($products as $product) {
            $formattedText .= $this->getPrintTextFormatForProduct($product);
        }

        return $formattedText;
    }

    /**
     * Return formatted text for one given product
     *
     * @param Product $product
     * @return string
     */
    public function getPrintTextFormatForProduct(Product $product): string
    {
        return "Name: " . $product->getName() . "\n" .
            "Price: " . $product->getPrice() . " USD\n" .
            "Quantity: " . $product->getQuantity() . "\n";
    }
}