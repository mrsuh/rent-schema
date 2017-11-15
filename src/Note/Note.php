<?php

namespace Schema\Note;

use ODM\Document\Document;

/**
 * @ODM\Collection(name="note")
 */
class Note extends Document
{
    const TYPE_ROOM   = 0;
    const TYPE_FLAT_1 = 1;
    const TYPE_FLAT_2 = 2;
    const TYPE_FLAT_3 = 3;
    const TYPE_FLAT_N = 4;
    const TYPE_STUDIO = 5;
    const TYPE_ERR    = 6;

    /**
     * @ODM\Field(name="link", type="string")
     */
    private $link;

    /**
     * @ODM\Field(name="city", type="string")
     */
    private $city;

    /**
     * @ODM\Field(name="type", type="integer")
     */
    private $type;

    /**
     * @ODM\Field(name="photos", type="Schema\Note\Photo[]")
     */
    private $photos;

    /**
     * @ODM\Field(name="price", type="integer")
     */
    private $price;

    /**
     * @ODM\Field(name="contact", type="Schema\Note\Contact")
     */
    private $contact;

    /**
     * @ODM\Field(name="timestamp", type="integer")
     */
    private $timestamp;

    /**
     * @ODM\Field(name="subways", type="integer[]")
     */
    private $subways;

    /**
     * @ODM\Field(name="description", type="string")
     */
    private $description;

    /**
     * @ODM\Field(name="description_hash", type="string")
     */
    private $description_hash;

    /**
     * @ODM\Field(name="published", type="bool")
     */
    private $published;

    /**
     * @ODM\Field(name="published_timestamp", type="integer")
     */
    private $published_timestamp;

    /**
     * @ODM\Field(name="duplicated", type="bool")
     */
    private $duplicated;

    /**
     * @ODM\Field(name="duplicated_timestamp", type="integer")
     */
    private $duplicated_timestamp;

    /**
     * @ODM\Field(name="source", type="string")
     */
    private $source;

    /**
     * Note constructor.
     */
    public function __construct()
    {
        $this->subways   = [];
        $this->photos   = [];
        $this->published = false;
        $this->duplicated = false;
        $this->duplicated_timestamp = null;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Photo[]
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param Photo $photo
     * @return $this
     */
    public function addPhoto(Photo $photo)
    {
        $this->photos[] = $photo;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return $this
     */
    public function setPrice(int $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     * @return $this
     */
    public function setTimestamp(int $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getSubways()
    {
        return $this->subways;
    }

    /**
     * @param int $subway
     * @return $this
     */
    public function addSubway(int $subway)
    {
        $this->subways[] = $subway;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description      = $description;
        $this->description_hash = md5($description);

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
     * @return bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param bool $published
     * @return $this
     */
    public function setPublished(bool $published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return $this
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return int
     */
    public function getPublishedTimestamp()
    {
        return $this->published_timestamp;
    }

    /**
     * @param int $published_timestamp
     * @return $this
     */
    public function setPublishedTimestamp(int $published_timestamp)
    {
        $this->published_timestamp = $published_timestamp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptionHash()
    {
        return $this->description_hash;
    }

    /**
     * @param $description_hash
     * @return $this
     */
    public function setDescriptionHash($description_hash)
    {
        $this->description_hash = $description_hash;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param $link
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDuplicated()
    {
        return (bool)$this->duplicated;
    }

    /**
     * @param $duplicated
     * @return $this
     */
    public function setDuplicated(bool $duplicated)
    {
        $this->duplicated = $duplicated;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDuplicatedTimestamp()
    {
        return $this->duplicated_timestamp;
    }

    /**
     * @param $duplicated_timestamp
     * @return $this
     */
    public function setDuplicatedTimestamp($duplicated_timestamp)
    {
        $this->duplicated_timestamp = $duplicated_timestamp;

        return $this;
    }
}