<?php

class SearchNextSmallNumber implements SearchWithForeachInterface, SearchWithFilterInterface {
    private array $dataset;

    public function __construct(array $dataset) {
        $this->dataset = $dataset;
        sort($this->dataset);
    }

    public function searchWithForeach(int $searchNumber): int
    {
        $result = -1;

        foreach ($this->dataset as $number) {
            if ($number < $searchNumber && $number > $result) {
                $result = $number;
            }
        }

        return $result;
    }

    public function searchWithFilter(int $searchNumber): int
    {
        $filteredArray = array_filter($this->dataset, static function ($num) use ($searchNumber) {
            return $num < $searchNumber;
        });

        if (!empty($filteredArray)) {
            return max($filteredArray);
        }

        return -1;
    }
}