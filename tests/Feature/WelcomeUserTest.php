<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /** @test*/
    public function it_welcome_user_whit_nickname()
    {
        $this->get('saludo/aaron/jork')
        ->assertStatus(200)
        ->assertSee("bienvenido aaron, y tu apodo es jork");
    }

    /** @test */
        function it_welcome_user_whit_not_nickname(){
            $this->get('saludo/aaron/')
            ->assertStatus(200)
            ->assertSee("bienvenido aaron y no tienes ningun apodo");

        }
}
