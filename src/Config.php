<?php

namespace Instagram;

use Instagram\Helpers\SessionLoginHelper;
use Instagram\Http\Middleware\AuthMiddleware;
use Noodlehaus\AbstractConfig;

/**
 * Config
 *
 * @package    Instagram
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/instagram-sdk
 * @license    MIT
 */
class Config extends AbstractConfig
{
    /**
     * Constructor method and sets default options, if any
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $filteredData = array_filter(array_merge($this->getDefaults(), $data));
        parent::__construct($filteredData);
    }

    /**
     * @inheritDoc
     */
    protected function getDefaults()
    {
        return [
            'base_uri'      => 'https://api.instagram.com/v1/',
            'client_id'     => '',
            'client_secret' => '',
            'access_token'  => null,
            'redirect_url'  => '',
            'session_store' => SessionLoginHelper::class,
            'middleware'    => [
                'auth'   => AuthMiddleware::class,
//                'secure' => '',
            ],
        ];
    }
}
