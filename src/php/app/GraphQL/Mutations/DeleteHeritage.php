<?php
namespace App\GraphQL\Mutations;

use App\Models\Heritage;

class DeleteHeritage {
    function __invoke($rootValue, array $args)
    {
        $heritage = Heritage::find($args["id"]);
        $heritage->delete();

        return $heritage;
    }
}
