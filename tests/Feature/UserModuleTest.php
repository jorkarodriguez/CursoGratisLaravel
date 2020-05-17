<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_user_list_page()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee("usuario");
    }

/** @test */
    function it_load_the_user_details_page(){
     $this-> get('/usuarios/5')
     ->assertStatus(200)
     ->assertSee('mostrando detalle del usuario :5');

    }


/** @test */
    function it_load_the_new_user_page(){
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('crear nuevo usuario');
    }


}
