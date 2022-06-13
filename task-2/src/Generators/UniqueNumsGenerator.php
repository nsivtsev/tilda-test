<?php 
namespace App\Generators;

/**
 * Генератор случайных чисел в заданном диапазоне
 * Заполняет массив по порядку и перемешивает
 */
class UniqueNumsGenerator
{
    private array $arr;

    public function __construct(int $start = 1, int $end = 1000)
    {
        $this->arr = range($start, $end);
        shuffle($this->arr);
    }

    public function getGenerator(): \Generator
    {
        yield from $this->arr;
    }
}