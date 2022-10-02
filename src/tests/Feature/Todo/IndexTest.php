<?php

namespace Tests\Feature\Todo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class IndexTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_successed()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/todo');
        $response->assertStatus(200);
        $response->assertViewHas('todos');
        $todos = $response->original['todos'];

        $this->assertEquals(0, count($todos));
    }
}
