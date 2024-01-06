<?php

use PHPUnit\Framework\TestCase;
use App\Models\Spot;

class SpotTest extends TestCase
{
    public function testAverageRatingWithNoRatings()
    {
        $model = new Spot();
        $model->comments = collect();

        $result = $model->averageRating();

        $this->assertEquals(0, $result);
    }

    public function testAverageRatingWithRatings()
    {
        $model = new Spot();
        $model->comments = collect([
            ['rating' => 3],
            ['rating' => 5],
            ['rating' => 4],
        ]);

        $result = $model->averageRating();

        $this->assertEquals(4, $result);
    }
}
