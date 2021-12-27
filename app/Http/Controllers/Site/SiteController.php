<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Util;

use App\Models\Site\Imovel;
use App\Models\Site\BenfCruz;

class SiteController extends Controller
{
    public function index()
    {
        $imoveis_venda = Imovel::where('id_imob', '=', '85')->where('finalidade', '=', 'Venda')->limit(10)->get();
        $imoveis_locacao = Imovel::where('id_imob', '=', '85')->where('finalidade', '=', 'Locacao')->inRandomOrder()->limit(10)->get();

        $a_destaque_locacao = $this->getRetorno($imoveis_locacao);
        $a_destaque_venda   = $this->getRetorno($imoveis_venda);

        return view('site.home.index', compact('a_destaque_locacao', 'a_destaque_venda'));
    }

    public function empresa()
    {
        return view('site.empresa.index');
    }

    public function contato()
    {
        return view('site.contato.index');
    }

    public function venda(Request $request)
    {
        if(isset($request['order'])){
            switch ($request['order']) {
                case '1':
                    $colum   =   'vlr_oferta';
                    $orderby = 'asc';
                    break;
                case '2':
                    $colum   =   'vlr_oferta';
                    $orderby = 'desc';
                    break;
                case '3':
                    $colum   =   'cod_bem';
                    $orderby = 'DESC';
                    break;
            }
        }else{
            $colum   =   'cod_bem';
            $orderby = 'DESC';
        }
        $imovel     = Imovel::where('id_imob', '=', '85')
                    ->where('finalidade', '=', 'Venda')
                    ->orderBy($colum, $orderby)
                    ->paginate(10);

        $imoveis    = $this->getRetorno($imovel);

        $tp_bem_venda   = DB::table('imovel')
                        ->select('tp_bem', DB::raw('count(*) as count, tp_bem'))
                        ->where('id_imob', '=', '85')
                        ->where('finalidade', '=', 'Venda')
                        ->groupBy('tp_bem')
                        ->get();

        $tp_bem_locacao  = DB::table('imovel')
                        ->select('tp_bem', DB::raw('count(*) as count, tp_bem'))
                        ->where('id_imob', '=', '85')
                        ->where('finalidade', '=', 'Locacao')
                        ->groupBy('tp_bem')
                        ->get();

        return view('site.venda.index', compact('imovel', 'imoveis', 'tp_bem_venda', 'tp_bem_locacao'));
    }

    public function locacao(Request $request)
    {
        if(isset($request['order'])){
            switch ($request['order']) {
                case '1':
                    $colum   =   'vlr_oferta';
                    $orderby = 'asc';
                    break;
                case '2':
                    $colum   =   'vlr_oferta';
                    $orderby = 'desc';
                    break;
                case '3':
                    $colum   =   'cod_bem';
                    $orderby = 'DESC';
                    break;
            }
        }else{
            $colum   =   'cod_bem';
            $orderby = 'DESC';
        }
        $imovel = Imovel::where('id_imob', '=', '85')
                    ->where('finalidade', '=', 'Locacao')
                    ->orderBy($colum, $orderby)
                    ->paginate(10);

        $imoveis = $this->getRetorno($imovel);

        $tp_bem_venda   = DB::table('imovel')
                        ->select('tp_bem', DB::raw('count(*) as count, tp_bem'))
                        ->where('id_imob', '=', '85')
                        ->where('finalidade', '=', 'Venda')
                        ->groupBy('tp_bem')
                        ->get();

        $tp_bem_locacao  = DB::table('imovel')
                        ->select('tp_bem', DB::raw('count(*) as count, tp_bem'))
                        ->where('id_imob', '=', '85')
                        ->where('finalidade', '=', 'Locacao')
                        ->groupBy('tp_bem')
                        ->get();

        return view('site.locacao.index', compact('imovel', 'imoveis', 'tp_bem_venda', 'tp_bem_locacao'));
    }

    public function busca_rapida(Request $request)
    {
        $busca = $request->all();

        if(isset($request['order'])){
            switch ($request['order']) {
                case '1':
                    $colum   =   'vlr_oferta';
                    $orderby = 'asc';
                    break;
                case '2':
                    $colum   =   'vlr_oferta';
                    $orderby = 'desc';
                    break;
                case '3':
                    $colum   =   'cod_bem';
                    $orderby = 'DESC';
                    break;
            }
        }else{
            $colum   =   'cod_bem';
            $orderby = 'DESC';
        }

        $imovel = Imovel::where('id_imob', '=', '85')
                    ->where('finalidade', '=', $busca['finalidade'])
                    ->where('tp_bem', '=', $busca['tipo'])
                    ->orderBy($colum, $orderby)
                    ->paginate(10);

        $imoveis = $this->getRetorno($imovel);

        $tp_bem_venda   = DB::table('imovel')
                        ->select('tp_bem', DB::raw('count(*) as count, tp_bem'))
                        ->where('id_imob', '=', '85')
                        ->where('finalidade', '=', 'Venda')
                        ->groupBy('tp_bem')
                        ->get();

        $tp_bem_locacao  = DB::table('imovel')
                        ->select('tp_bem', DB::raw('count(*) as count, tp_bem'))
                        ->where('id_imob', '=', '85')
                        ->where('finalidade', '=', 'Locacao')
                        ->groupBy('tp_bem')
                        ->get();

        return view('site.busca.busca_rapida', compact('imovel', 'imoveis', 'tp_bem_venda', 'tp_bem_locacao', 'busca'));
    }

    public function busca_avancada(Request $request)
    {
        $busca = $request->all();
        $imovel = Imovel::where('id_imob', '=', '85')
                    ->where('finalidade', '=', $busca['finalidade'])
                    ->where('tp_bem', '=', $busca['tipo'])
                    ->paginate(10);

        $imoveis = $this->getRetorno($imovel);

        $tp_bem_venda   = DB::table('imovel')
                    ->select('tp_bem', DB::raw('count(*) as count, tp_bem'))
                    ->where('id_imob', '=', '85')
                    ->where('finalidade', '=', 'Venda')
                    ->groupBy('tp_bem')
                    ->get();

        $tp_bem_locacao  = DB::table('imovel')
                    ->select('tp_bem', DB::raw('count(*) as count, tp_bem'))
                    ->where('id_imob', '=', '85')
                    ->where('finalidade', '=', 'Locacao')
                    ->groupBy('tp_bem')
                    ->get();

        return view('site.busca.busca_rapida', compact('imovel', 'imoveis', 'tp_bem_venda', 'tp_bem_locacao', 'busca'));

    }

    public function favoritos(Request $request)
    {
        if(!isset($_COOKIE['favoritos'])){
            return;
        }else{
            $aFavorito = json_decode($_COOKIE['favoritos'], true);
        }

        if(count($aFavorito) > 0){
            if(isset($request['order'])){
                switch ($request['order']) {
                    case '1':
                        $colum   =   'vlr_oferta';
                        $orderby = 'asc';
                        break;
                    case '2':
                        $colum   =   'vlr_oferta';
                        $orderby = 'desc';
                        break;
                    case '3':
                        $colum   =   'cod_bem';
                        $orderby = 'DESC';
                        break;
                }
            }else{
                $colum   =   'cod_bem';
                $orderby = 'DESC';
            }

            //$imovel = Imovel::where('id_imob', '=', '186');
            $imovel = DB::table('imovel')->where('id_imob', '=', '186');
            $imovel->whereIn('cod_bem', $aFavorito);

            /*
            foreach($aFavorito as $favorito){
                $imovel->whereIn('cod_bem', '=', $favorito);
            }
            */

            $imovel->orderBy($colum, $orderby)->paginate(10);
            $imovel = $imovel->orderBy($colum, $orderby)->paginate(10);
            $imoveis = $this->getRetorno($imovel);

            return view('site.imovel.favoritos', compact('imovel', 'imoveis'));
        }else{
            return \view('site.imovel.vazio');
        }
    }

    public function setFovorito(Request $request)
    {
        $id = $request['id'];

        if(isset($_COOKIE['favoritos'])){
            $aFavorito = json_decode($_COOKIE['favoritos'], true);
            $index = array_search($id, $aFavorito);

            if(false !== $index){
                $index = array_search($id, $aFavorito);
                unset($aFavorito[$index]);
                $aFavorito = json_encode($aFavorito);
                setcookie('favoritos', $aFavorito, time() + ( 2 * 3600 ), '/');
                return \response(['ok' => 'removido'], 200);
            }

            array_push($aFavorito, $id);
            $aFavorito = json_encode($aFavorito);
            setcookie('favoritos', $aFavorito, time() + ( 2 * 3600 ), '/');
        }else{
            $aFavorito = [];
            array_push($aFavorito, $id);
            $aFavorito = json_encode($aFavorito);
            setcookie('favoritos', $aFavorito, time() + ( 2 * 3600 ), '/');
        }

        return \response(['ok' => 'adicionado'], 200);
    }

    public function removerFavorito($id)
    {
        if(isset($_COOKIE['favoritos'])){
            $aFavorito = json_decode($_COOKIE['favoritos'], true);
            $index = array_search($id, $aFavorito);

            if(false !== $index){
                unset($aFavorito[$index]);
                $aFavorito = json_encode($aFavorito);
                setcookie('favoritos', $aFavorito, time() + ( 2 * 3600 ), '/');
                return \back();
            }
        }

        return \back();
    }

    public function buscaRapida(Request $request)
    {
        $referencia     = $request['referencia'];
        $palavra_chave  = $request['palavra-chave'];

        if(isset($request['order'])){
            switch ($request['order']) {
                case '1':
                    $colum   =   'vlr_oferta';
                    $orderby = 'asc';
                    break;
                case '2':
                    $colum   =   'vlr_oferta';
                    $orderby = 'desc';
                    break;
                case '3':
                    $colum   =   'cod_bem';
                    $orderby = 'DESC';
                    break;
            }
        }else{
            $colum   =   'cod_bem';
            $orderby = 'DESC';
        }

        if($referencia != null){

            $imovel = DB::table('imovel')
                ->where('id_imob', '=', '186')
                ->where('id', 'LIKE', '%' . $referencia . '%')
                ->orderBy($colum, $orderby)
                ->paginate(10);

        }else{

            if($palavra_chave != null){
                $imovel = DB::table('imovel')
                    ->where('id_imob', '=', '186')
                    ->where('tp_bem', 'LIKE', '%' . $palavra_chave . '%')
                    ->orderBy($colum, $orderby)
                    ->paginate(10);
            }
        }

        $imoveis = $this->getRetorno($imovel);
        return view('site.busca.rapida', compact('imovel', 'imoveis'));

    }

    public function buscaAvancada(Request $request)
    {
        $operacao       = $request['select-operacao'];
        $cidade         = $request['select-cidade'];
        $tipo           = $request['select-tipo'];
        $bairro         = $request['select-bairro'];
        $dormitorio     = $request['dormitorio'];
        $garagem        = $request['garagem'];
        $valor_min      = str_replace('.', '', substr($request['valor-minimo'], 0, -3));
        $valor_max      = str_replace('.', '', substr($request['valor-maximo'], 0, -3));

        if(isset($request['order'])){
            switch ($request['order']) {
                case '1':
                    $colum   =   'vlr_oferta';
                    $orderby = 'asc';
                    break;
                case '2':
                    $colum   =   'vlr_oferta';
                    $orderby = 'desc';
                    break;
                case '3':
                    $colum   =   'cod_bem';
                    $orderby = 'DESC';
                    break;
            }
        }else{
            $colum   =   'cod_bem';
            $orderby = 'DESC';
        }

        $model = DB::table('imovel')->where('id_imob', '=', '186')->where('finalidade', '=', $operacao)->where('cidade', '=', $cidade);

        if($tipo        != null){ $model->where('tp_bem', '=', $tipo); }
        if($bairro      != null){ $model->where('bairro', '=', $bairro); }
        if($dormitorio  != null){ $model->where('qtde_quartos', '=', $dormitorio); }
        if($garagem     != null){ $model->where('qtde_garagens', '=', $garagem); }
        if($valor_min   != null){ $model->where('vlr_oferta', '>=', $valor_min); }
        if($valor_max   != null){ $model->where('vlr_oferta', '<=', $valor_max); }

        $model->orderBy($colum, $orderby);
        $count = $model->count();

        if($count > 0){
            $result  = 0;
            $imovel = $model->paginate(10);
        }else{
            unset($model->wheres[4]);
            unset($model->wheres[5]);
            unset($model->wheres[6]);
            unset($model->wheres[7]);
            unset($model->wheres[8]);

            $result  = 1;
            $imovel = $model->paginate(10);
        }

        $imoveis = $this->getRetorno($imovel);

        return view('site.busca.avancada', compact('imovel', 'imoveis', 'result'));

    }

    public function imovel($descricao, $id)
    {
        $imv = Imovel::find($id);

        $img_name = 'imgr-'.sprintf("%09d", $imv->cod_bem).'.jpg';
        $url_img  = 'http://www.encontraimoveis.com.br/img/' . $img_name;

        $imovel =  [
            'tipo'          => 'VENDA',
            'cod_bem'       => $imv->cod_bem,
            'referencia'    => Util::formata($imv->id ,'ref'),
            'cidade'        => Util::getStringUf8($imv->cidade) . '/' . $imv->uf,
            'endereco'      => Util::getStringUf8($imv->endereco_1),
            'complemento'   => Util::getStringUf8($imv->complemento),
            'cep'           => Util::getStringUf8($imv->cep),
            'bairro'        => Util::getStringUf8($imv->bairro),
            'img'           => (Util::url_exists($url_img) ? $url_img : asset('images/imovel-sem-foto3.jpg')),
            'tp_bem'        => Util::getStringUf8($imv->tp_bem),
            'finalidade'    => Util::getStringUf8($imv->finalidade),
            'aplicacao'     => Util::getStringUf8($imv->aplicacao),
            'estrutura'     => Util::getStringUf8($imv->estrutura),
            'estado'        => Util::getStringUf8($imv->estado),
            'valor'         => 'R$ ' . number_format($imv->vlr_oferta, 0, ',', '.'),
            'area_total'    => ($imv->area_total > 0 ? number_format($imv->area_total, 2, ',', '.') . ' m<sup>2</sup>' : null),
            'area_util'     => ($imv->area_util > 0 ? number_format($imv->area_util, 2, ',', '.') . ' m<sup>2</sup>' : null),
            'qtde_quartos'  => $imv->qtde_quartos,
            'qtde_suites'   => $imv->qtde_suites,
            'qtde_salas'    => $imv->qtde_salas,
            'qtde_cozinha'  => $imv->qtde_cozinhas,
            'qtde_banheiro' => $imv->qtde_banheiros,
            'qtde_garagens' => $imv->qtde_garagens,
            'qtde_aservico' => $imv->qtde_area_servico,
            'anuncio'       => Util::getStringUf8($imv->anuncio),
            'estrutura'     => Util::getStringUf8($imv->estrutura),
            'google_maps'   => Util::getGoogleMaps($imv->endereco_1, $imv->bairro, $imv->cidade . '-' . $imv->uf),
            'url_amigavel'  => Util::getStringUf8($imv->finalidade) .
                                "+" . Util::getStringUf8($imv->tp_bem) .
                                "+" . Util::getStringUf8($imv->bairro)  .
                                "+" . Util::getStringUf8($imv->cidade) . '-' . $imv->uf,
        ];

        $imovel['whatsapp'] = $this->getUrlWhatsApp($imovel);

        $string_benf = Util::getStringUf8($imv->benfeitorias);
        $aBenf = $this->trataBenfeitoria($string_benf);
        $aBenf = explode(',', $aBenf);

        foreach ($aBenf as $kay=> $benf) {
            $aBenf[$kay] = Util::getStringUTF8(ltrim($benf));
        }

        $aBenf = array_filter($aBenf);
        $imovel['benfeitorias'] = $aBenf;

        return view('site.imovel.index', compact('imovel'));
    }

    private function getRetorno($aRetorno)
    {
        $i=0;

        foreach ($aRetorno as $imv) {

            $img_name = 'imgr-'.sprintf("%09d", $imv->cod_bem).'.jpg';
            $url_img  = asset('img/'.$img_name);
            $url_img  = (Storage::disk('public')->exists('img/' . $img_name) ? $url_img : asset('images/imovel-sem-foto3.jpg'));

            //USAR LOCALpublic_path(url_img)
            //$url_img  = 'http://www.encontraimoveis.com.br/img/' . $img_name;

            $imoveis[$i] =  [
                'tipo'          => 'VENDA',
                'cod_bem'       => $imv->cod_bem,
                'referencia'    => Util::formata($imv->id ,'ref'),
                'cidade'        => Util::getStringUf8($imv->cidade) . '/' . $imv->uf,
                'bairro'        => Util::getStringUf8($imv->bairro),
                'img'           => (Util::url_exists($url_img) ? $url_img : asset('images/imovel-sem-foto3.jpg')),
                'tp_bem'        => Util::getStringUf8($imv->tp_bem),
                'finalidade'    => Util::getStringUf8($imv->finalidade),
                'aplicacao'     => Util::getStringUf8($imv->aplicacao),
                'estrutura'     => Util::getStringUf8($imv->estrutura),
                'estado'        => Util::getStringUf8($imv->estado),
                'valor'         => 'R$ ' . number_format($imv->vlr_oferta, 0, ',', '.'),
                'area_total'    => ($imv->area_total > 0 ? number_format($imv->area_total, 2, ',', '.') . ' m<sup>2</sup>' : null),
                'area_util'     => ($imv->area_util > 0 ? number_format($imv->area_util, 2, ',', '.') . ' m<sup>2</sup>' : null),
                'qtde_quartos'  => $imv->qtde_quartos,
                'qtde_suites'   => $imv->qtde_suites,
                'qtde_salas'    => $imv->qtde_salas,
                'qtde_cozinha'  => $imv->qtde_cozinhas,
                'qtde_banheiro' => $imv->qtde_banheiros,
                'qtde_garagens' => $imv->qtde_garagens,
                'qtde_aservico' => $imv->qtde_area_servico,
                'url_amigavel'  => Util::getStringUf8($imv->finalidade) .
                                    "+" . Util::getStringUf8($imv->tp_bem) .
                                    "+" . Util::getStringUf8($imv->bairro)  .
                                    "+" . Util::getStringUf8($imv->cidade) . '-' . $imv->uf,
            ];

            $imoveis[$i]['whatsapp'] = $this->getUrlWhatsApp($imoveis[$i]);

            $i++;
        }

        return $imoveis;

    }

    private function getUrlWhatsApp($aDados)
    {
        $url =  'https://api.whatsapp.com/';
        $url .= 'send?l=pt-BR&';
        $url .= 'text=';
        $url .= '%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D';
        $url .= '%0A%';
        $url .= '20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20IM%C3%93VEL%20'. $aDados['tipo'];
        $url .= '%0A';
        $url .= '%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D';
        $url .= '%0A';
        $url .= '*REF%3A*%20'. $aDados['referencia'];
        $url .= '%0A';
        $url .= '*Cidade%3A*%20' . $aDados['cidade'];
        $url .= '%0A';
        $url .= '*Bairro%3A*%20' . $aDados['bairro'];
        $url .= '%0A';
        $url .= '*Tipo%3A*%20'. $aDados['tp_bem'];
        $url .= '%0A*';
        $url .= 'Aplica%C3%A7%C3%A3o%3A*%20'. $aDados['aplicacao'];
        $url .= '%0A*';
        $url .= 'Estrutura%3A*%20'. $aDados['estrutura'];
        $url .= '%0A*';
        $url .= 'Estado%3A*%20'. $aDados['estado'];
        $url .= '%0A*';
        $url .= 'Valor%3A*%20'. $aDados['valor'];
        $url .= '%0A';
        $url .= '%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D';
        $url .= '%0A';
        $url .= '%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D';
        $url .= '&phone=5544988435803';

        return $url;
    }

    private function trataBenfeitoria($string, $chSeparador=", ")
    {
        $benf = new BenfCruz;
        $dataProvider = $benf::all();

        foreach ($dataProvider as $data) {
            $return[$data->id] = $data->aLegenda;
        }

        $benfe = explode(',', $string);

        foreach ($benfe as $benfeitoria) {
            $ids[] = explode('[', str_replace(' ', '', $benfeitoria));
        }

        $benfeitorias = '';

        foreach ($ids as $id) {
            // $qtd = substr($id[1], -2,1);
            // $qtd = substr($id[1], -9,7);
            if (isset($id[1])) {
                $qtd = substr($id[1], 1, -1);
            } else {
                $qtd = 0;
            }
            if (isset($id[1][0])) {
                $tp = $id[1][0];
            } else {
                $tp = "";
            }
            if (isset($return[$id[0]])) {
                $item = $return[$id[0]];
            } else {
                $item = "";
            }

            $benfeitorias .= $this->TrataTipoBenfeitoria($item, $tp, $qtd) . $chSeparador;
        }
        return $benfeitorias;
    }

    private function TrataTipoBenfeitoria($benf, $tp, $qt)
    {
        switch ($tp) {
            case 'F' : {
                    if (strpos(strtoupper($benf), 'CONVENIO_') === FALSE){
                        return $benf;
                    } else{
                        return '';
                    }
                    break;
                }
            case 'Q' : {
                    return substr($qt, -2, 1) . " " . $benf;
                    break;
                }
            case 'M' : {
                    return substr($benf, 0, -2) . " " . number_format($qt, 2, ",", "") . " m&sup2;";
                    //return substr($benf, 0, -2) . " " . $qt . " m&sup2;";
                    break;
                }
            case 'A' : {
                    return substr($benf, 0, -2) . " " . $qt . "";
                    break;
                }
            case 'V' : {
                    return $benf . " " . "R$ " . $qt;
                    break;
                }
            case '' : {
                    return $qt;
                    break;
                }
            default : {
                    return $qt . " " . $benf;
                    break;
                }
        }
    }

    private function getPathRealImagens()
    {
        return asset('img/');
    }

    public function getArrayImagensExiste()
    {
	    $aPath = self::getPathRealImagens();

        $aNome = sprintf("????-%09d.???", $this->cod_bem);
        $aArrayArq = glob($aPath . $aNome);

        //return glob($aPath . $aNome);
        $aArrayRtn = [];

        $aArrayPrefixos = [
            'imgr', 'im01', 'impl', 'im02', 'im03', 'im04', 'im05',
            'im06', 'im07', 'im08', 'im09', 'im10',
        ];

        foreach($aArrayPrefixos as $aPref) {
            if(strlen(trim($aPref)) <= 0) {
                continue;
            }
            for($nIdx=0; $nIdx < count($aArrayArq); $nIdx++) {
                if(strlen(trim($aArrayArq[$nIdx])) > 0) {
                    $aArrayArq[$nIdx] = str_replace($aPath, "", $aArrayArq[$nIdx]);
                    if(strstr($aArrayArq[$nIdx], $aPref) ) {
                        // imagem principal
                        $aArrayRtn[] = $aArrayArq[$nIdx];
                        $aArrayArq[$nIdx] = "";
                        break;
                    }
                }
            }
        }

        sort($aArrayArq);
        // complementa array de retorno com imagens que sobraram
        for($nIdx=0; $nIdx < count($aArrayArq); $nIdx++) {
            if(strlen(trim($aArrayArq[$nIdx])) > 0) {
                $aArrayRtn[] = $aArrayArq[$nIdx];
            }
        }

        return $aArrayRtn;


        // procura pela imagem principal
        for($nIdx=0; $nIdx < count($aArrayArq); $nIdx++) {
            if(strstr($aArrayArq[$nIdx], "imgr") ) {
                // branco proposital
            }
            else {
                $aArrayRtn[] = $aArrayArq[$nIdx];
            }
        }

        return $aArrayRtn;


        // limpa o array ...
        for($nIdx=0; $nIdx < count($aArrayArq); $nIdx++) {
            $aArrayArq[$nIdx] = str_replace($aPath, "", $aArrayArq[$nIdx]);
        }

        return $aArrayArq;

    }
}
