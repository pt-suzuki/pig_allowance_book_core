<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrandTest extends TestCase
{
    /**
     * @test
     */
    public function api_v1_ai_navigationのgetメソッドでヘッダー無しの際認証エラー(){
        $response = $this->get("/api/v1/ai_navigation");
        $this->assertEquals(401,$response->getStatusCode());
    }
}
