<?php

namespace App\Repository\Eloquents;

use App\Repository\Eloquents\Interfaces\ClientRepositoryInterface;
use Illuminate\Support\Collection;
use App\Models\Client;
use App\Repository\Eloquents\BaseRepository;

Class ClientRepository extends BaseRepository implements ClientRepositoryInterface 
{
    protected $model;
     /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Client $model)
   {
       parent::__construct($model);
   }
   /**
    * @return Collection
    */
    public function all(): Collection
    {
        return $this->model->all();    
    }
}