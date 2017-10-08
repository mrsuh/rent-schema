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
     * @ODM\Field(name="vk_id", type="integer")
     */
    private $vk_id;

    /**
     * @ODM\Field(name="picture_link", type="string")
     */
    private $picture_link;

    /**
     * @ODM\Field(name="has_subway", type="bool")
     */
    private $has_subway;

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

    /**
     * @return mixed
     */
    public function hasSubway()
    {
        return $this->has_subway;
    }

    /**
     * @param $has_subway
     * @return $this
     */
    public function setHasSubway($has_subway)
    {
        $this->has_subway = $has_subway;

        return $this;
    }

    /**
     * @return int
     */
    public function getVkId()
    {
        return $this->vk_id;
    }

    /**
     * @param int $vk_id
     * @return $this
     */
    public function setVkId(int $vk_id)
    {
        $this->vk_id = $vk_id;

        return $this;
    }
}