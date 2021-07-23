<?php

namespace Tests\Feature;

use App\Models\User;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginPageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_homepage_load()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_can_login_the_form(){
        $user = User::factory()->create();

        $response = $this->post('/login',[
            'email'=>$user->email,
            'password'=>'password'
        ]);
        $this->assertAuthenticated();
        $response->assertRedirect('/home');
    }
    
    public function test_user_without_admin_usertype_cannot_access_dashboard(){
        $user = User::factory()->create(['name'=>'User','email'=>'user@user.com','password'=>'password']);
        $response = $this->actingAs($user)
                    ->get('/dashboard')
                    ->assertRedirect('/home');
    }

  
    
    public function test_user_can_login_as_admin_credential(){
        $admin = User::factory()->create(['name'=>'Admin','email'=>'admin@admin.com','usertype'=>'admin','password'=>'password']);
        $response = $this->post('/login',[
                        'email'=>$admin->email,
                        
                        'password'=>$admin->password
                    ]);
        $this->assertAuthenticated();
        $response->get('/dashboard');
      
        
    }
}