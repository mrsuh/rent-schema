<?php

namespace Schema\Note;

class Contact
{
    /**
     * @ODM\Field(name="id", type="string")
     */
    private $id;

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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}