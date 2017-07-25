<?php

namespace Schema\Note;

class Photo
{
    /**
     * @ODM\Field(name="low", type="string")
     */
    private $low;

    /**
     * @ODM\Field(name="high", type="string")
     */
    private $high;

    /**
     * @return string
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @param string $low
     * @return $this
     */
    public function setLow(string $low)
    {
        $this->low = $low;

        return $this;
    }

    /**
     * @return string
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param string $high
     * @return $this
     */
    public function setHigh(string $high)
    {
        $this->high = $high;

        return $this;
    }
}