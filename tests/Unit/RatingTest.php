<?php

namespace Tests\Unit;

use App\Models\Rating;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RatingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function itCanAddARatingToTheDatabase()
    {
        $rating = Rating::query()->create([
            'rating' => 2
        ]);

        $this->assertDatabaseHas('ratings', [
            'rating' => $rating->rating,
        ]);
    }
}
