<?php
namespace App\GraphQL\Mutations;

use App\Models\Heritage;
use Carbon\Carbon;

class UpdateHeritage {
    public function __invoke($rootValue, array $args)
    {
        $heritage = new Heritage();
        $heritage = $heritage->find($args["id"]);
        $heritage->continent = Carbon::now()->format('Y');
        $heritage->save();

        return $heritage;
    }
}
