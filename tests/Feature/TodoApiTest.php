<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoApiTest extends TestCase
{
    /**
     * Test the /api/todos endpoint.
     *
     * @return void
     */
    public function testGetAllTodos()
    {
        // Führe eine GET-Anfrage auf /api/todos durch
        $response = $this->get('/api/todos');

        // Überprüfe, ob die Anfrage erfolgreich war (Statuscode 200)
        $response->assertStatus(200);

        // Überprüfe, ob die Antwort eine JSON-Struktur ist
        $response->assertJsonStructure([
            '*' => [
                'id',
                'name',
                'description',
                'done_until',
                // Weitere erwartete Felder
            ]
        ]);
    }
}