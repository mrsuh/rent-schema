<?php

namespace Schema\Note;

class Contact
{
    /**
     * @ODM\Field(name="name", type="string")
     */
    private $name;

    /**
     * @ODM\Field(name="photo_link", type="string")
     */
    private $photo_link;

    /**
     * @ODM\Field(name="link", type="string")
     */
    private $link;

    /**
     * @ODM\Field(name="phones", type="integer[]")
     */
    private $phones;

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
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return $this
     */
    public function setLink(string $link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return integer[]
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param integer $phone
     * @return $this
     */
    public function addPhone(integer $phone)
    {
        $this->phones[] = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhotoLink()
    {
        return $this->photo_link;
    }

    /**
     * @param string $photo_link
     * @return $this
     */
    public function setPhotoLink(string $photo_link)
    {
        $this->photo_link = $photo_link;

        return $this;
    }
}