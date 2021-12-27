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
        $url_img  = 'https://www.encontraimoveis.com.br/img/' . $img_name;

        $imovel =  [
            'tipo'          => (Util::getStringUTF8($imv->finalidade) == 'Locacao' ? 'LOCAÇÃO' : 'VENDA'),
            'cod_bem'       => $imv->cod_bem,
            'referencia'    => Util::formata($imv->id ,'ref'),
            'cidade'        => Util::getStringUTF8($imv->cidade) . '/' . $imv->uf,
            'endereco'      => Util::getStringUTF8($imv->endereco_1),
            'complemento'   => Util::getStringUTF8($imv->endereco_2),
            'cep'           => Util::getStringUTF8($imv->cep),
            'bairro'        => Util::getStringUTF8($imv->bairro),
            'proximidade1'  => Util::getStringUTF8($imv->proximidade1),
            'proximidade2'  => Util::getStringUTF8($imv->proximidade2),
            'proximidade3'  => Util::getStringUTF8($imv->proximidade3),
            'proximidade4'  => Util::getStringUTF8($imv->proximidade4),
            'proximidade5'  => Util::getStringUTF8($imv->proximidade5),
            'img'           => $this->getImagemPrincipal($imv->cod_bem),
            'img_pach'      => $this->getImagemPatch($imv->cod_bem),
            'tp_bem'        => Util::getStringUTF8($imv->tp_bem),
            'finalidade'    => Util::getStringUTF8($imv->finalidade),
            'aplicacao'     => (Util::getStringUTF8($imv->aplicacao) == 'Misto' ? 'Residencial ou Comercial' : Util::getStringUTF8($imv->aplicacao)),
            'estrutura'     => Util::getStringUTF8($imv->estrutura),
            'estado'        => Util::getStringUTF8($imv->estado),
            'valor'         => 'R$ ' . number_format($imv->vlr_oferta, 0, ',', '.'),
            'vlr_locacao'           => 'R$ ' . number_format($imv->vlr_locacao, 0, ',', '.'),
            'vlr_rentabilidade'     => 'R$ ' . number_format($imv->vlr_rentabilidade, 0, ',', '.'),
            'vlr_financiamento'     => 'R$ ' . number_format($imv->vlr_financiamento, 0, ',', '.'),
            'vlr_sld_devedor'       => 'R$ ' . number_format($imv->vlr_sld_devedor, 0, ',', '.'),
            'vlr_direitos'          => 'R$ ' . number_format($imv->vlr_direitos, 0, ',', '.'),
            'vlr_poupanca'          => 'R$ ' . number_format($imv->vlr_poupanca, 0, ',', '.'),
            'vlr_parcela'           => 'R$ ' . number_format($imv->vlr_parcela, 0, ',', '.'),
            'vlr_iptu'              => 'R$ ' . number_format($imv->vlr_iptu, 0, ',', '.'),
            'vlr_condominio'        => 'R$ ' . number_format($imv->vlr_condominio, 0, ',', '.'),
            'area_total'    => ($imv->area_total > 0 ? number_format($imv->area_total, 2, ',', '.') . ' m<sup>2</sup>' : null),
            'area_util'     => ($imv->area_util > 0 ? number_format($imv->area_util, 2, ',', '.') . ' m<sup>2</sup>' : null),
            'qtde_quartos'  => $imv->qtde_quartos,
            'qtde_suites'   => $imv->qtde_suites,
            'qtde_salas'    => $imv->qtde_salas,
            'qtde_cozinha'  => $imv->qtde_cozinhas,
            'qtde_banheiro' => $imv->qtde_banheiros,
            'qtde_garagens' => $imv->qtde_garagens,
            'qtde_aservico' => $imv->qtde_area_servico,
            'anuncio'       => Util::getStringUTF8(str_replace(chr(10), '<br>', $imv->anuncio)),
            'observacao1'   => Util::getStringUTF8(str_replace(chr(10), '<br>', $imv->observacao1)),
            'observacao2'   => Util::getStringUTF8(str_replace(chr(10), '<br>', $imv->observacao2)),
            'observacao3'   => Util::getStringUTF8(str_replace(chr(10), '<br>', $imv->observacao3)),
            'observacao4'   => Util::getStringUTF8(str_replace(chr(10), '<br>', $imv->observacao4)),
            'estrutura'     => Util::getStringUTF8($imv->estrutura),
            'google_maps'   => Util::getGoogleMaps($imv->endereco_1, $imv->bairro, $imv->cidade . '-' . $imv->uf),
            'url_amigavel'  => Util::getStringUTF8($imv->finalidade) .
                                "+" . Util::getStringUTF8($imv->tp_bem) .
                                "+" . Util::getStringUTF8($imv->bairro)  .
                                "+" . Util::getStringUTF8($imv->cidade) . '-' . $imv->uf,
        ];


        $imovel['whatsapp'] = $this->getUrlWhatsApp($imovel);

        $string_benf = Util::getStringUTF8($imv->benfeitorias);
        $aBenf = $this->trataBenfeitoria($string_benf);
        $aBenf = explode(',', $aBenf);

        foreach ($aBenf as $kay=> $benf) {
            $aBenf[$kay] = Util::getStringUTF8(ltrim($benf));
        }

        $aBenf = array_filter($aBenf);
        $imovel['benfeitorias'] = $aBenf;

        dd($imovel);

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

    private function getImagemPrincipal($id_bem)
    {
        $aPath = '/home/sambura/public_html/img/';
        //$aPath = '/opt/www/nossolar/public/img/';
            $aNome = sprintf("????-%09d.???", $id_bem);
            $aArrayArq = glob($aPath . $aNome);

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

            if(isset($aArrayRtn)){
                $imagem_0 = $aArrayRtn[0];
                $imagem_1 = array_filter($aArrayArq);
                $url = 'https://www.encontraimoveis.com.br/img/';
                $url_img = $url . $imagem_0;
                //$url_img  = (Storage::disk('public')->exists('img/' . $imagem_0) ? $url . $imagem_0 : asset('images/logo.png'));
            }else{
                $url_img = asset('images/logo.png');
            }

            return $url_img;

    }

    private function getImagemPatch($id_bem)
    {
        //$aPath = '/home/jmimobiliaria/novo.jmimobiliariaivp.com.br/public/storage/img/';
        $aPath = '/home/sambura/public_html/img/';
        $aNome = sprintf("????-%09d.???", $id_bem);
        $aArrayArq = glob($aPath . $aNome);

       	$aNewArray = [];
       	$i=1;

            foreach($aArrayArq as $img) {
                $str = substr($img, 46);
                $str_c = substr($str, 0, 4);

                if($str_c == "imgr"){
                    $aNewArray[0] = $str;
                    $i++;
                }else{
                    $aNewArray[$i] = $str;
                    $i++;
                }

            }

            dd($aArrayArq);

            ksort($aNewArray);
            $url = 'https://www.encontraimoveis.com.br/img/';

            foreach($aNewArray as $kay => $img){
                $imagem_1[$kay] = $url . $img;
                //$imagem_1[$kay] = (Storage::disk('public')->exists('img/' . $img) ? $url . $img : asset('images/imovel-sem-foto3.jpg'));
            }

            if(!isset($imagem_1)){
                $imagem_1 = '';
            }

            return $imagem_1;

    }
}
