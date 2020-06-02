<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleApiUnitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

   public function __construct()
   {
        $this->it_can_create_an_article();
   }
    public function it_can_create_an_article() {
       $data = [
        'title' => $this->faker->sentence,
        'content' => $this->faker->paragraph
      ];

      $this->post(route('articles.store'), $data)
        ->dump()
        ->assertStatus(201)
        ->assertJson($data);
    }
}
