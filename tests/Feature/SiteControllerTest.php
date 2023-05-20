<?php

namespace Tests\Feature;

use App\Models\Site;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SiteControllerTest extends TestCase
{
    use RefreshDatabase;


    public function testIndex()
    {
        // Create dummy sites and projets
        $sites = Site::factory()->count(3)->create();

        // Send a GET request to the index route
        $response = $this->get('/sites');

        // Assert that the response has the correct view
        $response->assertViewIs('sites.index');

        // Assert that the view has the correct variables
        $response->assertViewHas('sites', $sites);
    }

    public function testStore()
    {
        // Prepare dummy data
        $data = [
            'name' => 'Test',
            'description' => 'Test',
        ];

        // Send a POST request to the store route with form data
        $response = $this->post('/sites', $data);
        $this->assertDatabaseHas('sites', $data);

        $response->assertSessionHas('success', 'Sites added successfully');
    }


    // Example test method for the 'show' function
    public function testShow()
    {
        // Create a dummy site
        $site = Site::factory()->create();

        // Send a GET request to the show route
        $response = $this->get("/sites/{$site->id}");
        $response->assertViewIs('sites.show');

        // Assert that the view has the correct variable
        $response->assertViewHas('site', $site);
    }

    // Example test method for the 'edit' function
    public function testEdit()
    {
        // Create a dummy site
        $site = Site::factory()->create();

        // Send a GET request to the edit route
        $response = $this->get("/sites/{$site->id}/edit");

        // Assert that the edit view is rendered
        $response->assertViewIs('sites.edit');

        // Assert that the view has the correct variable
        $response->assertViewHas('site', $site);
    }
}
