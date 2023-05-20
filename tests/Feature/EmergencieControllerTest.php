<?php

namespace Tests\Feature;

use App\Models\Emergencie;
use App\Models\Projet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmergencieControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Create a dummy projet and emergencies
        $projet = Projet::factory()->create();
        $emergencies = Emergencie::factory()->count(3)->create(['projet_id' => $projet->id]);

        // Send a GET request to the index route
        $response = $this->get('/emergencies');

        // Assert that the response has the correct view
        $response->assertViewIs('emergencies.index');

        // Assert that the view has the correct variables
        $response->assertViewHas('emergencies', $emergencies);
    }

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

    public function testShow()
    {
        // Create a dummy projet and emergency
        $projet = Projet::factory()->create();
        $emergencie = Emergencie::factory()->create(['projet_id' => $projet->id]);

        // Send a GET request to the show route
        $response = $this->get("/emergencies/{$emergencie->id}");
        $response->assertViewIs('emergencies.show');

        // Assert that the view has the correct variable
        $response->assertViewHas('emergencie', $emergencie);
    }

}
