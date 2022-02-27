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
     * @var string
     */
    protected string $bar;
    /**
     * 
     *
     * @var string
     */
    protected string $fooBar;
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
    /**
     * 
     *
     * @return string
     */
    public function getBar() : string
    {
        return $this->bar;
    }
    /**
     * 
     *
     * @param string $bar
     *
     * @return self
     */
    public function setBar(string $bar) : self
    {
        $this->bar = $bar;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFooBar() : string
    {
        return $this->fooBar;
    }
    /**
     * 
     *
     * @param string $fooBar
     *
     * @return self
     */
    public function setFooBar(string $fooBar) : self
    {
        $this->fooBar = $fooBar;
        return $this;
    }
}