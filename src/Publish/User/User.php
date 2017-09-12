<?php

namespace Schema\Publish\User;

use ODM\Document\Document;

/**
 * @ODM\Collection(name="publish_user")
 */
class User extends Document
{
    /**
     * @ODM\Field(name="external_id", type="string")
     */
    private $external_id;

    /**
     * @ODM\Field(name="username", type="string")
     */
    private $username;

    /**
     * @ODM\Field(name="password", type="string")
     */
    private $password;

    /**
     * @ODM\Field(name="app_token", type="string")
     */
    private $app_token;

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * @param string $external_id
     * @return $this
     */
    public function setExternalId(string $external_id)
    {
        $this->external_id = $external_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return $this
     */
    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password
     * @return $this
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppToken()
    {
        return $this->app_token;
    }

    /**
     * @param string $app_token
     * @return $this
     */
    public function setAppToken(string $app_token)
    {
        $this->app_token = $app_token;

        return $this;
    }
}