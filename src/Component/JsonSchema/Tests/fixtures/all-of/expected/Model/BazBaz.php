<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class BazBaz
{
    /**
     * 
     *
     * @var string
     */
    protected string $baz;
    /**
     * 
     *
     * @return string
     */
    public function getBaz() : string
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param string $baz
     *
     * @return self
     */
    public function setBaz(string $baz) : self
    {
        $this->baz = $baz;
        return $this;
    }
}