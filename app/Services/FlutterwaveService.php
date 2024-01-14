<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use stdClass;

class FlutterwaveService
{

    /**
     * @return FlutterwaveService
     */
    public static function make(): FlutterwaveService
    {
        return new static();
    }

    private function initialization(){
        $secretKey = config('flutterwave.secret_key');
        $baseUrl = config('flutterwave.base_url');

        return Http::withToken($secretKey)->baseUrl($baseUrl);;
    }

    /**
     * @param mixed $transactionId
     * @param mixed $amount
     * @param string $txRef
     * 
     * @return stdClass
     */
    public function verifyTransaction($transactionId, $amount, string $txRef): stdClass
    {
        $http = $this->initialization();
        $response = $http->get("transactions/$transactionId/verify");

        $res = new stdClass();

        if($response->successful()){
            $data = $response->object()->data ?? null;
           if($data->status == 'successful' && $data->tx_ref === $txRef && $data->amount === $amount){
                $res->status = 'successful';
           }else{
                $res->status = 'invalid transaction record';
           }
        }else{
            $res->status = 'unable to fetch transaction record';
        }
        
        return $res;
    }
}
