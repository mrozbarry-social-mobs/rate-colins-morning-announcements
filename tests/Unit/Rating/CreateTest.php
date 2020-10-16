<?php

namespace Tests\Unit\Rating;

use Tests\TestCase;

class CreateTest extends TestCase
{
    /** @test */
    public function itDisplaysTheForm()
    {
        $this->get(route('rate.create'))
             ->assertSuccessful()
             ->assertViewIs('rating.create')
             ->assertSee('<form action="' . route('rate.post') . '"', false);
    }
}
