<?php

namespace Schema\Note;

class Contact
{
    /**
     * @ODM\Field(name="external_id", type="string")
     */
    private $external_id;

    /**
     * @ODM\Field(name="name", type="string")
     */
    private $name;

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
     * @return int[]
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param int[] $phones
     * @return $this
     */
    public function setPhones(array $phones)
    {
        $this->phones = $phones;

        return $this;
    }

    /**
     * @param int $phone
     * @return $this
     */
    public function addPhone(int $phone)
    {
        $this->phones[] = $phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * @param $external_id
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->external_id = $external_id;

        return $this;
    }
}