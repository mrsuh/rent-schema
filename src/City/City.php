<?php

namespace Schema\City;

use ODM\Document\Document;

/**
 * @ODM\Collection(name="city")
 */
class City extends Document
{
    /**
     * @ODM\Field(name="name", type="string")
     */
    private $name;

    /**
     * @ODM\Field(name="short_name", type="string")
     */
    private $short_name;

    /**
     * @ODM\Field(name="picture_link", type="string")
     */
    private $picture_link;

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
    public function getPictureLink()
    {
        return $this->picture_link;
    }

    /**
     * @param string $picture_link
     * @return $this
     */
    public function setPictureLink(string $picture_link)
    {
        $this->picture_link = $picture_link;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->short_name;
    }

    /**
     * @param string $short_name
     * @return $this
     */
    public function setShortName(string $short_name)
    {
        $this->short_name = $short_name;

        return $this;
    }
}