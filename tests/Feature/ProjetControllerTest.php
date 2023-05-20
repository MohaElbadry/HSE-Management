<?php
namespace Tests\Feature;

use App\Models\Projet;
use App\Models\Site;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjetControllerTest extends TestCase
{
use RefreshDatabase;

public function testIndex()
{
// Create dummy sites and projets
$site = Site::factory()->create();
$projets = Projet::factory()->count(3)->create(['site_id' => $site->id]);

// Send a GET request to the index route
$response = $this->get('/projets');

// Assert that the response has the correct view
$response->assertViewIs('projets.index');

// Assert that the view has the correct variables
$response->assertViewHas('projets', $projets);
}

public function testStore()
{
// Create a dummy site
$site = Site::factory()->create();

// Prepare dummy data
$data = [
'name' => 'Test',
'description' => 'Test',
'site_id' => $site->id,
'proj_start' => '2023-05-20',
];

// Send a POST request to the store route with form data
$response = $this->post('/projets', $data);
$this->assertDatabaseHas('projets', $data);

$response->assertSessionHas('success', 'Project added successfully');
}

public function testShow()
{
// Create a dummy site and projet
$site = Site::factory()->create();
$projet = Projet::factory()->create(['site_id' => $site->id]);

// Send a GET request to the show route
$response = $this->get("/projets/{$projet->id}");
$response->assertViewIs('projets.show');

// Assert that the view has the correct variable
$response->assertViewHas('projet', $projet);
}

public function testEdit()
{
// Create a dummy site and projet
$site = Site::factory()->create();
$projet = Projet::factory()->create(['site_id' => $site->id]);

// Send a GET request to the edit route
$response = $this->get("/projets/{$projet->id}/edit");

// Assert that the edit view is rendered
$response->assertViewIs('projets.edit');

// Assert that the view has the correct variable
$response->assertViewHas('projet', $projet);
}
}