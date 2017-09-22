<?php

namespace Hypersistence\Auth;

trait HypersistenceAuthenticatable
{
    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return $this->getPrimaryKeyField();
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        $getId = 'get' . $this->getAuthIdentifierName(); 
        return parent::$getId();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        $getPassword = 'get' . $this->getPasswordField();
        return parent::$getPassword();
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        $getRemember = 'get' . $this->getRememberTokenField();
        return parent::$getRemember();
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $setRemember = 'set' . $this->getRememberTokenField();
        parent::$setRemember($value);
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return $this->getRememberTokenField();
    }
}
