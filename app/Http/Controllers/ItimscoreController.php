<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItimscoreRepository;


class ItimscoreController extends Controller
{
    public function __construct() 
    {
        $this->itimscore = new ItimscoreRepository;
    }

    public function getAll()
    {
        return $this->itimscore->getAll();
    }

    public function getBy($userId)
    {
        return $this->itimscore->getBy($userId);
    }

    public function put(Request $request)
    {
        //json_decode
        $data = $request->input('data');
        return $this->itimscore->put($data);
    }

    public function post(Request $request)
    {
        //json_decode
        $data = $request->input('data');
        return $this->itimscore->post($data);
    }

    public function getWithEvals()
    {
        return $this->itimscore->getWithEvals();
    }
}
