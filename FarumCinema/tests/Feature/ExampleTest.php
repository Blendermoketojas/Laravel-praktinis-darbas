<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function test_root_url_redirects_to_login()
    {
        $response = $this->get('/');
        $response->assertStatus(302);
    }
    
    public function test_miestai_route_displays_farum_cinema()
{
    $response = $this->get('/Miestai');
    $response->assertSee('FarumCinema');
}

public function test_miestai_route_returns_correct_content_type_header()
{
    $response = $this->get('/Miestai');
    $response->assertHeader('Content-Type', 'text/html; charset=UTF-8');
}

public function test_miestai_route_displays_miestai_view()
{
    $response = $this->get('/Miestai');
    $response->assertViewIs('Miestai');
}

public function test_home_route_does_not_display_error_message_when_logged_in()
{
    $response = $this->get('/Miestai');
    $response->assertDontSee('You are not logged in');
}

}
