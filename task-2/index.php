<?php
namespace App;

use App\Services\MatrixService;

require 'vendor/autoload.php';

$matrixService = new MatrixService();

echo 'Массив:'.PHP_EOL;
foreach($matrixService->getMatrix() as $line) {
    echo implode(' ', $line).PHP_EOL;
}

echo 'Суммы по строкам:'.PHP_EOL;
echo implode(' ', $matrixService->getLineSums()).PHP_EOL;

echo 'Суммы по стоблцам:'.PHP_EOL;
echo implode(' ', $matrixService->getColumnSums()).PHP_EOL;