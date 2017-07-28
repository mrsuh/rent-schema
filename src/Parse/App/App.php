<?php

namespace Schema\Parse\App;

use ODM\Document\Document;

/**
 * @ODM\Collection(name="parse_app")
 */
class App extends Document
{
    /**
     * @ODM\Field(name="token", type="string")
     */
    private $token;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return $this
     */
    public function setToken(string $token)
    {
        $this->token = $token;

        return $this;
    }
}