<?php

namespace App\Command;

use App\Service\ProductService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ListProductsCommand extends Command
{
    protected static $defaultName = 'app:list-products';

    protected ProductService $productService;

    public function __construct(string $name = null, ProductService $productService)
    {
        parent::__construct($name);

        $this->productService = $productService;
    }

    protected function configure()
    {
        $this
            ->setDescription('List all available coffee products');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $availableProductsListingText = $this->productService->getListingTextForAvailableProducts();

        $output->writeln($availableProductsListingText);

        return 0;
    }
}
