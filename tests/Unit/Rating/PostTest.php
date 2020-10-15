<?php

namespace Tests\Unit\Rating;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function itAcceptsPosts()
    {
        $this
            ->post(route('rate.post'), [
                'rating' => 1,
            ])
            ->assertRedirect();

        $this->assertDatabaseHas('ratings', [
            'rating' => 1,
        ]);
    }

    /** @test */
    public function itWillFailValidation()
    {
        $this
            ->post(route('rate.post'), [
                'rating' => 100
            ])
            ->assertRedirect();

        $this->assertDatabaseMissing('ratings', [
            'rating' => 100
        ]);
    }
}
