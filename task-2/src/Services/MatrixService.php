<?php
namespace App\Services;

use App\Generators\UniqueNumsGenerator;

/**
 * Сервис для работы с двумерным массивом
 */
class MatrixService
{
    /** Для обеспечения уникальности значений, используем генератор в заранее созданными значениями */
    private \Generator $generator;
    private array $matrix = [];

    public function __construct(int $x = 5, int $y = 7)
    {
        $this->generator = (new UniqueNumsGenerator())->getGenerator();

        $this->init($x, $y);
    }

    /**
     * Инициализация случайного массива 
     */
    private function init(int $x, int $y): void
    {
        for ($i = 0; $i < $x; $i++) {
            for ($j = 0; $j < $y; $j++) {
                $this->matrix[$i][$j] = $this->generator->current();
                $this->generator->next();
            }
        }
    }

    /**
     * Получить матрицу
     */
    public function getMatrix(): array
    {
        return $this->matrix;
    }

    /**
     * Получить массив сумм по строкам
     */
    public function getLineSums(): array
    {
        $sums = [];
        foreach ($this->matrix as $key => $line) {
            $sums[$key] = array_sum($line);
        }

        return $sums;
    }

    /**
     * Получить массив сумм по колонкам
     */
    public function getColumnSums(): array
    {
        $sums = [];
        for ($i = 0; $i < count($this->matrix); $i++) {
            $sums[$i] = array_sum(array_column($this->matrix, $i));
        }

        return $sums;
    }
}