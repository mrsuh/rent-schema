<?php

namespace Schema\PublishList;

use ODM\Document\Document;

/**
 * @ODM\Collection(name="community_publish")
 */
class Record extends Document
{
    /**
     * @ODM\Field(name="name", type="string")
     */
    private $name;

    /**
     * @ODM\Field(name="link", type="string")
     */
    private $link;

    /**
     * @ODM\Field(name="city", type="string")
     */
    private $city;

    /**
     * @ODM\Field(name="group_id", type="string")
     */
    private $group_id;

    /**
     * @ODM\Field(name="user_id", type="string")
     */
    private $user_id;

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
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @param string $group_id
     * @return $this
     */
    public function setGroupId(string $group_id)
    {
        $this->group_id = $group_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param string $user_id
     * @return $this
     */
    public function setUserId(string $user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}