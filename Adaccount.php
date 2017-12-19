<?php

namespace ahmadrezaei\yii\authclient;

use yii\authclient\OAuth2;

class Adaccount extends OAuth2
{
    /**
     * @inheritdoc
     */
    public $authUrl = 'http://adaccount.ir/oauth/authorize';
    /**
     * @inheritdoc
     */
    public $tokenUrl = 'http://adaccount.ir/oauth/token';
    /**
     * @inheritdoc
     */
    public $apiBaseUrl = 'http://adaccount.ir/api/v1';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if ($this->scope === null) {
            $this->scope = implode(' ', [
                'profile',
            ]);
        }
    }

    /**
     * @inheritdoc
     */
    protected function initUserAttributes()
    {
        $accessToken = $this->accessToken->token;
        $headers = ['Authorization' => 'Bearer '. $accessToken];
        return $this->api('user/me', 'GET', [], $headers);
    }

    /**
     * @inheritdoc
     */
    protected function defaultName()
    {
        return 'Adaccount';
    }

    /**
     * @inheritdoc
     */
    protected function defaultTitle()
    {
        return 'Adaccount';
    }
}