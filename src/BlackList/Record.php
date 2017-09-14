<?php

namespace Schema\BlackList;

use ODM\Document\Document;

/**
 * @ODM\Collection(name="black_list")
 */
class Record extends Document
{
    const TYPE_PHONE = 1;
    const TYPE_PERSON = 2;
    const TYPE_DESCRIPTION = 3;

    /**
     * @ODM\Field(name="regexp", type="string")
     */
    private $regexp;

    /**
     * @ODM\Field(name="type", type="integer")
     */
    private $type;

    /**
     * @return string
     */
    public function getRegexp()
    {
        return $this->regexp;
    }

    /**
     * @param $regexp
     * @return $this
     */
    public function setRegexp(string $regexp)
    {
        $this->regexp = $regexp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}