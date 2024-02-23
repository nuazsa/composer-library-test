<?php

namespace Nuazsa\LibraryTest;

class People
{
    public function __construct(private string $name) 
    {
    }

    public function getName(string $name = "Guest") : string
    {
        return "Hello $name, My Name Is $this->name";
    }
}