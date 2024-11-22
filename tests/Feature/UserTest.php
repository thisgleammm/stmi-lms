<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertNotNull;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testLoginSuccess()
    {
        $this->seed([UserSeeder::class]);
        $this->post('/api/users/login', [
            'email' => 'test',
            'password' => 'test'
        ])->assertStatus(200)
            ->assertJson([
                'data' => [
                    'email' => 'test',
                    'name' => 'test'
                ]
            ]);

        $user = User::where('email', 'test')->first();
        self::assertNotNull($user->token);
    }

    public function testLoginFailedEmailNotFound()
    {
        $this->post('/api/users/login', [
            'email' => 'test',
            'password' => 'test'
        ])->assertStatus(401)
            ->assertJson([
                'errors' => [
                    'message' => [
                        "Email or Password wrong"
                    ]
                ]
            ]);
    }

    public function testLoginFailedPasswordWrong()
    {
        $this->seed(UserSeeder::class);
        $this->post('/api/users/login', [
            'email' => 'test',
            'password' => 'salah'
        ])->assertStatus(401)
            ->assertJson([
                'errors' => [
                    'message' => [
                        "Email or Password wrong"
                    ]
                ]
            ]);
    }

    public function testGetSuccess()
    {
        $this->seed([UserSeeder::class]);

        $this->get('/api/users/current', [
            'Authorization' => 'test'
        ])->assertStatus(200)
            ->assertJson([
                'data' => [
                    'email' => 'test',
                    'name' => 'test'
                ]
            ]);
    }

    public function testGetUnathorized()
    {
        $this->seed([UserSeeder::class]);

        $this->get('/api/users/current')
        ->assertStatus(401)
            ->assertJson([
                'errors' => [
                    'message' => [
                        'unathorized'
                    ]
                ]
            ]);
    }

    public function testGetInvalidToken()
    {
        $this->seed([UserSeeder::class]);

        $this->get('/api/users/current', [
            'Authorization' => 'salah'
        ])->assertStatus(401)
            ->assertJson([
                'errors' => [
                    'message' => [
                        'unathorized'
                    ]
                ]
            ]);
    }

    public function testUpdatePasswordSuccess() 
    {
        $this->seed([UserSeeder::class]);
        $oldUser = User::where('email', 'test')->first();

        $this->patch('/api/users/current', 
            [
                'password' => 'baru'
            ],
            ['Authorization' => 'test'
            ])
        ->assertStatus(200)
            ->assertJson([
                'data' => [
                    'email' => 'test',
                    'name' => 'test'
                ]
            ]);

            $newUser = User::where('email', 'test')->first();
            self::assertNotEquals($oldUser->password, $newUser->password);
    }

    public function testUpdateFailed() 
    {
        $this->seed([UserSeeder::class]);
        $oldUser = User::where('email', 'test')->first();

        $this->patch('/api/users/current', 
            [
                'password' => 'barubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubarubaru'
            ],
            ['Authorization' => 'test'
            ])
        ->assertStatus(400)
            ->assertJson([
                'errors' => [
                    'name' => [
                        'salah'
                    ]
                ]
            ]);
    }

    public function testLogoutSuccess()
    {
        $this->seed([UserSeeder::class]);

        $this->delete(uri: 'api/users/logout', headers: [
            'Authorization' => 'test'
        ])->assertStatus(200)
            ->assertJson([
                'data' => true
            ]);

            $user = User::where('email', 'test')->first();
            self::assertNull($user->token);
    }

    public function testLogoutFailed()
    {
        $this->seed([UserSeeder::class]);

        $this->delete(uri: 'api/users/logout', headers: [
            'Authorization' => 'salah'
        ])->assertStatus(401)
            ->assertJson([
                'errors' => [
                    'message' => [
                        'unauthorized'
                    ]
                ]
            ]);
    }
}
