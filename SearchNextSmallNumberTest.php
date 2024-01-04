<?php

use PHPUnit\Framework\TestCase;

class SearchNextSmallNumberTest extends TestCase
{
    public function testSearchWithForeach(): void
    {
        $dataset = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];
        $searcher = new SearchNextSmallNumber($dataset);

        $result1 = $searcher->searchWithForeach(11);
        $result2 = $searcher->searchWithForeach(30);
        $result3 = $searcher->searchWithForeach(2);

        $this->assertEquals(10, $result1);
        $this->assertEquals(21, $result2);
        $this->assertEquals(-1, $result3);
    }

    public function testSearchWithFilter(): void
    {
        $dataset = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];
        $searcher = new SearchNextSmallNumber($dataset);

        $result1 = $searcher->searchWithFilter(11);
        $result2 = $searcher->searchWithFilter(30);
        $result3 = $searcher->searchWithFilter(2);

        $this->assertEquals(10, $result1);
        $this->assertEquals(21, $result2);
        $this->assertEquals(-1, $result3);
    }
}