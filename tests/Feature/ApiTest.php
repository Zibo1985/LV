<?php

use Tests\TestCase;

class ApiTest extends TestCase{
    public function testgetalltodos() {
    $response = $this->get('/api/todos');
    
    $response->assertStatus(200);
    }
}