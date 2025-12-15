<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function cache_store():void
    {
    Cache::spy();

    $response = $this->get('/regidter');

    $response->assertStatus(200);

    Cache::shouldHaveReceived('put')->once()->with('name','Daniel');
    }
}
