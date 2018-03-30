<?php
namespace App\Repositories;
use Illuminate\Support\Facades\DB;
use App\Models\ItimScore;
use App\Models\Profile;

class ItimscoreRepository implements ItimscoreRepositoryInterface {
    protected $score;
    protected $profile;

    public function __construct()
    {
        $this->score = new ItimScore;
        $this->profile = new Profile;    
    }
    public function getEvals()
    {
        // return $this->score->with('eval_answer')->get();
    }

    public function getAll()
    {
        return 'getAll';
    }

    public function getBy($userId)
    {
        // return $this->itimscore->getBy($userId);
        return $userId;
    }

    public function put($data)
    {
        return $data;
    }

    public function post($data)
    {
        return $data;
    }
// 
    public function getWithEvals()
    {
        $data =  $this->profile->with('eval_answers','eval_answers.evals','eval_answers.evals.eval_criteria')->get();
        //$data->eval_answers.length>6
        return $data->filter(function ($val,$key){
            return $val->eval_answers->count() > 5;
        });
    }
    
}