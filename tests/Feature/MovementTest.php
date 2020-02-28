<?php

namespace Tests\Feature;

use App\Movement;
use App\Container;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MovementTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function a_movement_does_have_containers()
    {
        $container = factory(Container::class)->create();

        $movement = factory(Movement::class)->create(['container_id' => $container->id]);


        $this->assertCount(1, $movement->containers);
    }
}
