<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Spot;
use PHPUnit\Framework\TestCase;
use App\Http\Controllers\SpotController;

class SpotControllerTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testCalcCost()
    {

        $spot = new Spot();
        $spot->cost = 10;

        $spotController = new SpotController();

        $result = $spotController->calcCost($spot);

        $this->assertEquals(1000, $result); // 10 * 100 = 1000
    }
}
