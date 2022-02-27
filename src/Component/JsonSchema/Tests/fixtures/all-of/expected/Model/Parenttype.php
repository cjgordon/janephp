<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Parenttype
{
    /**
     * 
     *
     * @var string
     */
    protected string $inheritedProperty;
    /**
     * 
     *
     * @return string
     */
    public function getInheritedProperty() : string
    {
        return $this->inheritedProperty;
    }
    /**
     * 
     *
     * @param string $inheritedProperty
     *
     * @return self
     */
    public function setInheritedProperty(string $inheritedProperty) : self
    {
        $this->inheritedProperty = $inheritedProperty;
        return $this;
    }
}