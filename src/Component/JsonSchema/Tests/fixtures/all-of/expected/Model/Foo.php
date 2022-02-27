<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Foo
{
    /**
     * 
     *
     * @var string
     */
    protected string $foo;
    /**
     * 
     *
     * @return string
     */
    public function getFoo() : string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(string $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}