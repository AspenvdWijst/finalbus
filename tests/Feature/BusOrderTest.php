<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;


class BusOrderTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate:refresh --seed');
    }

    #[Test] public function it_creates_a_bus_order()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post('/ticket/1', [
            'bus_id' => 1,
            'quantity' => 2,
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('bus_user', [
            'user_id' => $user->id,
            'bus_id' => 1,
        ]);
    }
}
