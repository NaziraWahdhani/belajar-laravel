<?php

	namespace App\Data;
	class Bar //class Bar difen ke class Foo
	{
        public Foo $foo;

        public function __construct(Foo $foo) //constructor yang punya parameter foo
        {
            $this->foo = $foo;
        }

        public function bar() : string
        {
            return $this->foo->foo() . ' and Bar'; //mengembalikan nilai foo dan bar
        }
	}
