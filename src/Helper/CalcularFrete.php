<?php 

namespace Oldbikes\Loja\Helper;

class CalcularFrete 
{
    public function calcular_frete(
        $cep_origem,
        $cep_destino,
        $peso,
        $valor,
        $tipo_do_frete,
        $altura = 1.50,
        $largura = 0.60,
        $comprimento = 2.00){

            $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
            $url .= "nCdEmpresa=";
            $url .= "&sDsSenha=";
            $url .= "&sCepOrigem=" . $cep_origem;
            $url .= "&sCepDestino=" . $cep_destino;
            $url .= "&nVlPeso=" . $peso;
            $url .= "&nVlLargura=" . $largura;
            $url .= "&nCdFormato=1";
            $url .= "&nVlComprimento=" . $comprimento;
            $url .= "&sCdMaoPropria=n";
            $url .= "&nVlValorDeclarado=" . $valor;
            $url .= "&sCdAvisoRecebimento=n";
            $url .= "&nCdServico" . $tipo_do_frete;
            $url .= "&nVlDiametro=0";
            $url .= "&StrRetorno=xml";

            $xml = simplexml_load_file($url);

            return $xml;

    }
}