<?php

namespace App\Http\Controllers;

use FixerClient\FixerClient;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DemoController extends BaseController
{
    private $_client;
    
    public function __construct() {
        $this->_client = new FixerClient();
    }
    
    public function index(Request $r) {
        
        $result = '';
        
        if($r->input('latest')) {
            $result = $this->_client->latest('');
        } elseif($r->input('historical')) {
            $result = $this->_client->historicalRates($r->input('historical'));
        } elseif($r->input('symbolic')) {
            $result = $this->_client->symbolicRates($r->input('base'), $r->input('target'));
        }
        
        
        return view('demo')->with(['result' => $result]);
    }
}
