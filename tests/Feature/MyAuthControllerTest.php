<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class MyAuthControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_success()
    {
        // テストユーザーを作成
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123')
        ]);

        // ログインリクエストを送信
        $response = $this->postJson('/login', [
            'email' => 'test@example.com',
            'password' => 'password123'
        ]);

        // レスポンスの検証
        $response->assertStatus(200)
            ->assertJsonStructure(['token']);
    }

    public function test_login_failure()
    {
        // ログインリクエストを送信（不正なパスワード）
        $response = $this->postJson('/login', [
            'email' => 'test@example.com',
            'password' => 'wrongpassword'
        ]);

        // レスポンスの検証
        $response->assertStatus(401)
            ->assertJson(['error' => '認証に失敗しました。']);
    }
}