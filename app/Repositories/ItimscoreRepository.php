<?php
namespace App\Repositories;
use Illuminate\Support\Facades\DB;
use App\Models\ItimScore;

class ItimscoreRepository implements ItimscoreRepositoryInterface {
    protected $evals;
    public function getEvals()
    {
        $this->evals = new Evals();
        return $this->evals->with('eval_answer')->get();
    }

    public function getAll()
    {
        return 'getAll'
    }

    public function getBy($userId)
    {
        // return $this->itimscore->getBy($userId);
        return $userId
    }

    public function put($data)
    {
        return $data;
    }

    public function post($data)
    {
        return $data;
    }
    
}