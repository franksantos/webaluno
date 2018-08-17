<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Mensalidade;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dataAtual = Carbon::now();
        // $dataInicial = $dataAtual->subDays(30);
        // $dataFinal = $dataInicial->addMonth();
        // $valorRecebidoNoUltimoMes = Mensalidade::whereBetween('mes_data_venc',[$dataInicial,$dataFinal])->where('mes_status','=','Pago')->sum('mes_valor');
        $totalUtilipecas = Mensalidade::where('mes_status','=','Pago')->where('mes_alu_id', '=', 850)->sum('mes_valor');
        $totalCarraoAcessorios = Mensalidade::where('mes_status','=','Pago')->where('mes_alu_id', '=', 851)->sum('mes_valor');
        $totalIpesa = Mensalidade::where('mes_status','=','Pago')->where('mes_alu_id', '=', 852)->sum('mes_valor');
        $totalWnuclear = Mensalidade::where('mes_status','=','Pago')->where('mes_alu_id', '=', 853)->sum('mes_valor');
        $totalGeral = Mensalidade::where('mes_status','=','Pago')->sum('mes_valor');

        $qtdPagasUtilipecas = Mensalidade::where('mes_status','=','Pago')->where('mes_alu_id', '=', 850)->count();
        $qtdPagasCarrao = Mensalidade::where('mes_status','=','Pago')->where('mes_alu_id', '=', 851)->count();
        $qtdPagasIpesa = Mensalidade::where('mes_status','=','Pago')->where('mes_alu_id', '=', 852)->count();
        $qtdPagasWnuclear = Mensalidade::where('mes_status','=','Pago')->where('mes_alu_id', '=', 853)->count();
        return view('home', [
          'totalUtilipecas'=>$totalUtilipecas,
          'totalCarraoAcessorios' => $totalCarraoAcessorios,
          'totalIpesa'=>$totalIpesa,
          'totalWnuclear'=>$totalWnuclear,
          'totalGeral' => $totalGeral,
          'qtdPagasUtilipecas'=>$qtdPagasUtilipecas,
          'qtdPagasCarrao'=>$qtdPagasCarrao,
          'qtdPagasIpesa'=>$qtdPagasIpesa,
          'qtdPagasWnuclear'=>$qtdPagasWnuclear
        ]);
    }
}
