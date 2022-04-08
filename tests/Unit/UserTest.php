<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $users = new User(['Lena', 'Misa', 'Leona']);
        $this->assertTrue($users->has('Lena'));
        $this->assertFalse($user->has('Minh Minh'));
    }
}
