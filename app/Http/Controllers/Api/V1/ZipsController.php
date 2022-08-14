<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZipsController extends Controller
{
    public function index($zipcode)
    {

        $entities =  DB::select('SELECT
                        `d_codigo`, `d_asenta`, `d_tipo_asenta`, `D_mnpio`, `d_estado`, `d_ciudad`, `d_CP`, `c_estado`, `c_oficina`, `c_CP`, `c_tipo_asenta`, `c_mnpio`, `id_asenta_cpcons`, `d_zona`, `c_cve_ciudad`
                    FROM entities
                        WHERE 
                    d_codigo = ?
                    ', [$zipcode]);
        // */





        $data = [];
        $statusCode = 500;

        if (count($entities) > 0) {
            //dd($entities[0]);
            $statusCode = 200;
            $data = [
                "zip_code" => $entities[0]->d_codigo,
                "locality" => $entities[0]->d_estado,
                "federal_entity" => [
                    "key" => $entities[0]->c_estado,
                    "name" => $entities[0]->d_estado,
                    "code" => null
                ],
                "municipality" => [
                    "key" => 10,
                    "name" => $entities[0]->D_mnpio
                ]
            ];
            foreach ($entities as $entitie) {
                $data['settlements'][] = [
                    "key" => $entitie->id_asenta_cpcons,
                    "name" => $entitie->d_asenta,
                    "zone_type" => $entitie->d_zona,
                    "settlement_type" => [
                        "name" => $entitie->d_tipo_asenta
                    ]
                ];
            }
        }
        // */
        //return json_encode($data);
        return response()->json($data, $statusCode);
    }
}
