<?php

namespace App\Services\FootballData\Requests;

use Illuminate\Http\Client\Factory as HttpFactory;
use JustSteveKing\Transporter\Request;

class FootballDataRequest extends Request
{
    public function __construct(HttpFactory $http)
    {
        parent::__construct($http);

        parent::withHeader('X-Auth-Token', config('services.footballdata.access_token'));
    }
}
