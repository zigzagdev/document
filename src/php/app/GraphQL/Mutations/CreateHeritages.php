<?php
namespace App\GraphQL\Mutations;

use App\Models\Heritage;

class CreateHeritages {
    public function  __invoke($rootValue, array $args)
    {
        $heritages = [];
        foreach ($args["heritages"] as $input) {
            $heritage = new Heritage();
            $heritage->name = "{$input["name"]}";
            $heritage->country_name = $input["country_name"];
            $heritage->explanation = $input["explanation"];
            $heritage->registered_year = $input["registered_year"];
            $heritage->continent = $input["continent"];
            $heritage->save();
            $heritages[] = $heritage;
        }
        return $heritages;
    }

}
