<?php
//
//namespace App\GraphQL\Queries;
//
//use App\Models\Heritage;
//
//class Heritages {
//    public function __invoke($rootValue, array $args)
//    {
//        $heritages = Heritage::orderBy("continent", "DESC")->get();
//
//        return $heritages;
//    }
//
//    public function __test($rootValue, array $args)
//    {
//        $heritage = Heritage::orderBy("continent", "ASC")->get();
//
//        return $heritage;
//    }
//}
