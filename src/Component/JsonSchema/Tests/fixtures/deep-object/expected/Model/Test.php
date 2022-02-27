<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var TestFooItem[]
     */
    protected array $foo;
    /**
     * 
     *
     * @return TestFooItem[]
     */
    public function getFoo() : array
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param TestFooItem[] $foo
     *
     * @return self
     */
    public function setFoo(array $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}