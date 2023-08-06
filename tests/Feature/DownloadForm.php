<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class DownloadForm extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/homepade');

        $response->assertStatus(200);
    }

    public function testApplication()
    {
        $response = $this->withSession(['foo' => 'bar'])
            ->get('/homepage');
    }

    public function rules()
    {
        $postData = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'message' => 'required'
        ];

        $response = $this->post(route('homepage'), $postData);
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJson($postData);
    }
}
