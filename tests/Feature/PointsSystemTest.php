<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;


class PointsSystemTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate:refresh --seed');
    }

    #[Test] public function awards_points_on_order()
    {
        $user = User::factory()->create(['points' => 0]);
        $this->actingAs($user);

        $this->post('/ticket/1', ['bus_id' => 1, 'quantity' => 5]);

        $user->refresh();
        $this->assertEquals(50, $user->points);
    }

    #[Test]
    public function it_redeems_points_for_free_ticket()
    {
        $user = User::factory()->create(['points' => 100]);

        $this->actingAs($user);

        $response = $this->post('/ticket/2', [
            'bus_id' => 2,
            'is_free_ticket' => 1,
        ]);

        $response->assertStatus(302);
        $user->refresh();
        $this->assertEquals(0, $user->points);
    }

}
