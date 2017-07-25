<?php

namespace Schema\Note;

use ODM\Document\Document;

/**
 * @ODM\Collection(name="note_old")
 */
class NoteOld extends Document
{
    const ROOM   = 0;
    const FLAT_1 = 1;
    const FLAT_2 = 2;
    const FLAT_3 = 3;
    const FLAT_N = 4;
    const STUDIO = 5;
    const ERR    = 6;

    /**
     * @ODM\Field(name="external_id", type="string")
     */
    private $external_id;

    /**
     * @ODM\Field(name="city", type="integer")
     */
    private $city;

    /**
     * @ODM\Field(name="type", type="integer")
     */
    private $type;

    /**
     * @ODM\Field(name="photos", type="array")
     */
    private $photos;

    /**
     * @ODM\Field(name="price", type="integer")
     */
    private $price;

    /**
     * @ODM\Field(name="area", type="float")
     */
    private $area;

    /**
     * @ODM\Field(name="contacts", type="array")
     */
    private $contact;

    /**
     * @ODM\Field(name="timestamp", type="integer")
     */
    private $timestamp;

    /**
     * @ODM\Field(name="subways", type="array")
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
     * @ODM\Field(name="published", type="integer")
     */
    private $published;

    /**
     * @ODM\Field(name="publishedTimestamp", type="integer")
     */
    private $published_timestamp;

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return mixed
     */
    public function getSubways()
    {
        return $this->subways;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getDescriptionHash()
    {
        return $this->description_hash;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @return mixed
     */
    public function getPublishedTimestamp()
    {
        return $this->published_timestamp;
    }
}