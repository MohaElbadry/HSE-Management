<?php

namespace Tests\Feature;

use App\Models\Emergencie;
use App\Models\Projet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmergencieControllerTest extends TestCase
{
    use RefreshDatabase;


    public function testStore()
    {
        // Create a dummy projet
        $projet = Projet::factory()->create();

        // Prepare dummy data
        $data = [
            'lib' => 'Test',
            'description' => 'Test',
            'projet_id' => $projet->id,
        ];

        // Send a POST request to the store route with form data
        $response = $this->post('/emergencies', $data);
        $this->assertDatabaseHas('emergencies', $data);

        $response->assertSessionHas('success', 'Emergency added successfully');
    }
}
