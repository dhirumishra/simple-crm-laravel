<?php

namespace App\Repository\Eloquents\Interfaces;

use App\Models\Client;
use Illuminate\Support\Collection;

interface ClientRepositoryInterface {

    public function all() :Collection;
}