<?php

namespace Tests\Feature;

use App\Models\Document;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class DocumentControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Create some dummy documents
        $documents = Document::factory()->count(5)->create();

        // Send a GET request to the index route
        $response = $this->get('/documents');

        $response->assertViewIs('documents.index');

        // Assert that the view has the correct variables
        $response->assertViewHas('documents', $documents); // Replace 'Document Title' with the actual title of a document
    }

    public function testShow()
    {
        // Create a dummy site
        $document= Document::factory()->create();

        // Send a GET request to the show route
        $response = $this->get("/documents/{$document->id}");
        $response->assertViewIs('documents.show');

        // Assert that the view has the correct variable
        $response->assertViewHas('document', $document);
    }

    public function testStore()
    {
        Storage::fake('public'); // Use a fake disk for file uploads

        // Create a dummy file to simulate the uploaded file
        // $file = UploadedFile::fake()->create('document.pdf');

        // Send a POST request to the store route with form data
        $response = $this->post('/documents', [
            'titre' => 'Document Title',
            'description' => 'Document Description',
            // 'fichier' => $file,
        ]);

        // Assert the response status code
        $response->assertStatus(302);

        // Assert that the document was saved in the database
        $this->assertDatabaseHas('documents', [
            'titre' => 'Document Title',
            'description' => 'Document Description',
            // 'fichier' => 'path/to/your/storage/directory/document.pdf', // Replace 'path/to/your/storage/directory/document.pdf' with the actual file path
        ]);

        // Assert that the file was stored in the specified disk
        // Storage::disk('public')->assertExist('\assets\PDF\1684528661.pdf'); // Replace 'path/to/your/storage/directory/document.pdf' with the actual file path

        // Assert that the user is redirected to the index page after successful upload
        $response->assertRedirect('/documents');
    }

    // Add more test methods for other controller functions

    // Example test method for the 'destroy' function
    // public function testDestroy()
    // {
    //     // Create a dummy document
    //     $document = Document::factory()->create();

    //     // Send a DELETE request to the destroy route
    //     $response = $this->delete("/documents/{$document->id}");

    //     // Assert the response status code
    //     $response->assertStatus(302);

    //     // Assert that the document was deleted from the database
    //     // $this->assertSoftDeleted($document);
    // }
}
