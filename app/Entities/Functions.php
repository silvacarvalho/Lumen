<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 09/05/17
 * Time: 11:40
 */

namespace CodeAgenda\Entities;


class Functions
{

    public static function MapPhoneData( $data = false )
    {
        $retorno['pessoa_id'] = $data['pessoa_id'];
        $retorno['descrição'] = $data['descrição'];
        $explode = explode(" ", $data['telefone']);

        $retorno['codpais'] = preg_replace("/\D/","", $explode[0]);
        $retorno['ddd'] = preg_replace("/\D/","", $explode[1]);
        $retorno['prefixo'] = preg_replace("/\D/","", $explode[2]);
        $retorno['sufixo'] = preg_replace("/\D/","", $explode[3]);

        return $retorno;
    }
}