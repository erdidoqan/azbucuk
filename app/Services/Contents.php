<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Contents
{
    public static function get(string $param) {
        return (new Contents)->request($param);
    }

    public function request(string $params)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.env('TOKEN')
        ])->get('https://main.azbucuk.com/api/'. $params);

        if (empty($response->object()->data)){
            abort(404);
        }

        return $response->object()->data;
    }
}
