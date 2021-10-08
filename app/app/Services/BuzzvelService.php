<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Config\Repository;
use Illuminate\Contracts\Foundation\Application;
use Throwable;

class BuzzvelService
{

    /**
     * @var Client
     */
    protected $client;
    /**
     * @var Repository|Application|mixed
     */
    protected $url;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = config('buzzvel.api_url');
    }

    /**
     * @throws Throwable
     * @throws GuzzleException
     */
    public function getHotels()
    {
        $response = $this->client
            ->get($this->url,  [])
            ->getBody();

        $response = json_decode($response);

        throw_if(!$response->success, Exception::class, 'Request failure when consulting hotels');

        return collect($response->message);
    }
}
