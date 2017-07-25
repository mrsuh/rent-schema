<?php

namespace Schema\City;

use ODM\Document\Document;

/**
 * @ODM\Collection(name="subway")
 */
class Subway extends Document
{
    /**
     * @ODM\Field(name="name", type="string")
     */
    private $name;

    /**
     * @ODM\Field(name="city", type="string")
     */
    private $city;

    /**
     * @ODM\Field(name="regexp", type="string")
     */
    private $regexp;

    /**
     * @ODM\Field(name="colors", type="string[]")
     */
    private $colors;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity(string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegexp()
    {
        return $this->regexp;
    }

    /**
     * @param string $regexp
     * @return $this
     */
    public function setRegexp(string $regexp)
    {
        $this->regexp = $regexp;

        return $this;
    }

    /**
     * @return string
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * @param string $color
     * @return $this
     */
    public function addColor(string $color)
    {
        $this->colors[] = $color;

        return $this;
    }
}