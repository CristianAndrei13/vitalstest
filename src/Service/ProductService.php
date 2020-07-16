<?php


namespace App\Service;

use App\Repository\ProductRepository;

/**
 * Class ProductService
 * @package App\Service
 */
final class ProductService
{
    /**
     * @var ProductPrinter
     */
    private ProductPrinter $productPrinter;

    /**
     * @var ProductRepository
     */
    private ProductRepository $productRepository;

    /**
     * ProductService constructor.
     * @param ProductPrinter $productPrinter
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductPrinter $productPrinter, ProductRepository $productRepository)
    {
        $this->productPrinter = $productPrinter;
        $this->productRepository = $productRepository;
    }

    /**
     * Return listing text for available products
     *
     * @return string
     */
    public function getListingTextForAvailableProducts(): string
    {
        $products = $this->productRepository->findAvailableProducts();
        $listingText = $this->productPrinter->getPrintTextFormatForProducts($products);

        return strlen($listingText) ? $listingText : "No available products";
    }
}