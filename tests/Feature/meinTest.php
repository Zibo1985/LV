<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class meinTest extends TestCase {

    /**
     * A basic feature test example.
     */
    public function test_example(): void {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testEinfacherTest() {
        $this->assertTrue(true);
        $this->assertEquals($expected, $actual);
        $this->assertNotNull($value);
        $this->assertDatabaseHas('tabelle', ['spalte' => 'Wert']);
    }

}
