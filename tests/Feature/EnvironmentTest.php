<?php

    namespace Tests\Feature;

    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\WithFaker;
    use Illuminate\Support\Env;
    use Tests\TestCase;
    use function PHPUnit\Framework\assertEquals;

    class EnvironmentTest extends TestCase
    {
        public function testGetEnv()
        {
//            env adalah function bawaan dari laravel, jadi kita menggunakan integration test kalau menggunakan
//            unit test biasa ngga bisa
            $youtube = env('YOUTUBE');

            self::assertEquals('Programmer Zaman Now', $youtube);
        }

        public function testDefaultEnv()
        {
            $author = Env::get('AUTHOR', 'Eko');

            self::assertEquals('Eko', $author);
        }
    }
