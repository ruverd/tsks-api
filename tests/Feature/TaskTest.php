<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    public function test_get_tasks()
    {
        $response = $this->get('/api/tasks');

        $response->assertStatus(200);
    }

    public function test_get_task()
    {
        $response = $this->get('/api/tasks/1');

        $response->assertStatus(200);
    }
}
