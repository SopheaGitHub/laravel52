<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends Controller
{
    public function getIndex() {

    	try{

            $url = 'http://192.168.168.118:8080/TrueService_new/service/cash_in';

            $client = new \GuzzleHttp\Client();
            $dataFields = [
                    'accountId'		=>'23023063',
                    'cardId' 		=>'200004060',
                    'requestGateWay'=>'ag_mobile',
                    'appId' 		=>'easy',
                    'deviceId' 		=>'iOS.7B49A82D-265E-42FB-8BE1-4CC214BE2582-1491966137348',
                    'simId' 		=>null,
                    'extRefId' 		=>null,
                    'currentTime' 	=>null,
                    'requestId' 	=>null,
                    'trackTime' 	=>null,
                    'serviceId' 	=>'cash_in',
                    'step' 			=>'check',
                    'remark' 		=>null,
                    'data' => [
                    	'amount'		=> '1000',
                    	'customerCardId'=> '202610814',
                    	'currency'		=> 'USD'
                    ]
                ];
                
            $res = $client->post($url, [
            	'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
                'body' => json_encode($dataFields)
            ]);

        	echo $res->getStatusCode().'<br />';
        	echo $res->getHeaderLine('content-type').'<br />';
        	echo $res->getBody().'<br />';
        	exit();
        } catch (Exception $e) {
			dd($e->getMessage());
        }

    	exit();
    }



}
