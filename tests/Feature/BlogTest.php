<?php

namespace Tests\Feature;

use App\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
{
    use RefreshDatabase; //trait run migartion before any task
    public function setup():void{
        parent::setUp();
        $this->withExceptionHandling();
    }

  
   

    /** @test  */
    public function all_blogs()
    {
        
        // $this->withExceptionHandling();
        //past/scene/prepare
         $blog=$this->createBlog('all blog');;
       

        //presenet/action/act
         $response = $this->get('/blog');


        //future/assertion/assert
         $response->assertSee($blog->title);
    
         $response->assertStatus(200);

     
       

    }
        /** @test  */
    public function single_blogs()
    {
        
       
        //past/scene/prepare
         $blog=$this->createBlog('create blog');
       

        //presenet/action/act
         $response = $this->get('/blog/'.$blog->id);


        //future/assertion/assert
      
        $response->assertSee($blog->title);
         $response->assertStatus(200);
    

 }
 public function createBlog($title=null){
     $title=$title??'simple title';
     return   Blog::create(['title'=>$title]);
 }
          
}
