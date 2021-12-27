<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Util;

class BuscaController extends Controller
{
    public function getBuscaTipo(Request $request)
    {
        $finalidade = $request['finalidade'];

        $data   = DB::table('imovel')
                    ->select('tp_bem', DB::raw('count(*) as count, tp_bem'))
                    ->where('id_imob', '=', '85')
                    ->where('finalidade', '=', $finalidade)
                    ->groupBy('tp_bem')
                    ->get();

        foreach($data as $d){
            $aData['data'][$d->tp_bem] = Util::getStringUf8($d->tp_bem) . ' ('. $d->count .')';
        }

        return response($aData, 200);
    }
}
