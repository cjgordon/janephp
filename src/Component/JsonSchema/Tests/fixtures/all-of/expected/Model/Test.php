<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var Childtype
     */
    protected Childtype $child;
    /**
     * 
     *
     * @var Parenttype
     */
    protected Parenttype $parent;
    /**
     * 
     *
     * @return Childtype
     */
    public function getChild() : Childtype
    {
        return $this->child;
    }
    /**
     * 
     *
     * @param Childtype $child
     *
     * @return self
     */
    public function setChild(Childtype $child) : self
    {
        $this->child = $child;
        return $this;
    }
    /**
     * 
     *
     * @return Parenttype
     */
    public function getParent() : Parenttype
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param Parenttype $parent
     *
     * @return self
     */
    public function setParent(Parenttype $parent) : self
    {
        $this->parent = $parent;
        return $this;
    }
}