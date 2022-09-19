<?php

namespace Hmos9c\PhpComposerHello;

class Constomer{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name): string
    {
        return "Hello $name, My Name is $this->name";
    }
}