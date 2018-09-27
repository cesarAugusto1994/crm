<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class Helper
{
    public static function imoveis(Request $request)
    {
        $data = $request->request->all();

        $offset          =   $data['offset'];

        $offset          =   ceil( $offset ) ? $offset : 10;

        $search          =   $data['search'];

        $resultado            =   self::getImoveis( 0, $offset, $search  );

        $resultado["count"]   =   count($resultado);

        echo json_encode( $resultado );

    }

    public static function getImoveis( $value, $offset, $search )
    {
       $sql = "Select imv_id, imv_titulo, imv_referencia, imv_oferta
         from imoveis IMV
         WHERE imv_status = 1";

        if(!empty($search)) {
            $sql .= " AND imv_referencia LIKE '%$search%' OR imv_titulo LIKE '%$search%' ";
        }

       $sql .= " GROUP BY imv_id, IMV.imv_titulo, IMV.imv_referencia, IMV.imv_oferta LIMIT $value, $offset";

       $data = \DB::connection('mysql_seabra')->select($sql);

  		 $response = array();

  		 $response["imoveis"] = array();

  		//Check if return any data
  		if( count( $data ) > 0 ) {

  			//To count
  			$i = 0;

  			//Fecth data
  			foreach ( $data as $key ) {

  				$response["imoveis"][$i]["id"]        =   $key->imv_id;

  				$response["imoveis"][$i]["title"]     =   $key->imv_titulo;

  				$response["imoveis"][$i]["ref"]       =   $key->imv_referencia;

  				$response["imoveis"][$i]["oferta"]    =   $key->imv_oferta == 0 ? "Não" : "Sim";

  				$i++;

  			}

  		}

  		//return data
  		return $response;

  	}

    public static function getImoveisInformacoes(Request $request)
    {
        $data = $request->request->all();

        $search = $data['search'];

        //$search = 'tower';

        $sql = "Select IMV.imv_id, imv_referencia, imv_titulo, imv_tipo, emp_incorporacao, bai_nome
          from imoveis IMV
          LEFT JOIN empreendimentos AS EMP ON EMP.imv_id = IMV.imv_id
          LEFT JOIN localidades AS LOC ON LOC.imv_id = IMV.imv_id
          LEFT JOIN bairros AS BAI ON BAI.bai_id = LOC.bai_id
          where 1 = 1 ";

        $sql .= " AND imv_referencia LIKE '%$search%' OR imv_titulo LIKE '%$search%' OR emp_incorporacao LIKE '%$search%'OR bai_nome LIKE '%$search%'";

        $response = \DB::connection('mysql_seabra')->select($sql);

        $result = array();

        if (count($response) > 0) {
            $i = 0;

            foreach ($response as $imovel) {
                $result[$i]['value'] = $imovel->imv_id;

                $result[$i]['referencia'] = $imovel->imv_referencia;

                $result[$i]['titulo'] = ucwords(mb_strtolower($imovel->imv_titulo, 'UTF-8'));

                $result[$i]['tipo'] = self::tipo($imovel->imv_tipo);

                $result[$i]['incorporadora'] = ucwords(mb_strtolower($imovel->emp_incorporacao, 'UTF-8'));

                $result[$i]['bairro'] = ucwords(mb_strtolower($imovel->bai_nome, 'UTF-8'));

                ++$i;
            }
        }

        echo json_encode($result);
    }

    public static function tipo($tipo)
    {
      switch ($tipo) {
          case 1:
              $tipo = 'Apartamento';
          break;
          case 2:
              $tipo = 'Casa';
          break;
          case 3:
              $tipo = 'Cobertura';
          break;
          case 4:
              $tipo = 'Conjunto Comercial';
          break;
          case 5:
              $tipo = 'Duplex';
          break;
          case 6:
              $tipo = 'Flat';
          break;
          case 7:
              $tipo = 'Loja';
          break;
          case 8:
              $tipo = 'Ponto Comercial';
          break;
          case 9:
              $tipo = 'Terreno/Loteamento';
          break;
          case 10:
              $tipo = 'Vaga de Garagem';
          break;
          case 11:
              $tipo = 'Rural';
          break;
          default:
              $tipo = 'Indefinido';
          break;
      }

      return $tipo;
    }

    public static function imagens(Request $request)
    {
        $data = $request->request->all();

        $offset           =   $data['offset'];
        $offset           =   ceil( $offset ) ? $offset : 0;
        $id               =   $data['id'];
        $data["imoveis"]  =   array();
        $data["count"]    =   0;

        $imoveis = self::getImagesImoveisData( 10, $offset, $id  );
        $data["imoveis"] = $imoveis;
        $data["count"] = count($imoveis);

        echo json_encode( $data );
    }

    public static function getImagesImoveisData( $value, $offset, $id, $apply = true )
    {
        if( $apply )
            $dir  =   '../admin/';
        else
            $dir = '';

       $sql = " /* " . __METHOD__ . " */
           SELECT imagens.img_id, imagens.img_diretorio
           FROM imagens_imoveis imagens
           WHERE imagens.imv_id = ?
           GROUP BY imagens.img_id, imagens.img_diretorio
       ";

       /*if(!$offset) {
          $sql .= " LIMIT 10 ";
       } else {
         $sql .= " LIMIT $value, $offset ";
       }*/

       //exit($sql);

       $data = \DB::connection('mysql_seabra')->select($sql, [$id]);

        $response = array();

        if( count( $data ) > 0 ) {

          $i = 0;

          foreach ( $data as $key ) {

            $img  =  $dir . substr( $key->img_diretorio, 3 );

            //if( file_exists( $img ) ) {

              $response[$i]["id"]   =   $key->img_id;

              $response[$i]["img"]  =   'http://www.seabra.com.br/'.$img;

              $i++;

            //}

          }

        }

        return $response;

    }

    public static function dormitorios(Request $request)
    {
        $data = $request->request->all();

        $id    =   $data['id'];

        $data  =   array();

        $data  =   self::getInfoDormsImovel( $id  );


        echo json_encode( $data );
    }

    public static function tipologias($id, $field = 'tip_dorms')
    {
        $sql = "SELECT MIN($field) AS min, MAX($field) AS max
          from tipologias
          WHERE imv_id = ?";

        $data = \DB::connection('mysql_seabra')->select($sql, [$id]);

        return $data;
    }

    public static function getInfoDormsImovel($id)
    {
    		$response =  array();

    		$data = self::tipologias($id, 'tip_dorms');

    		if( $data[0]->min == $data[0]->max )
    			$response["dorms"]  =  $data[0]->min . ' dormitório(s)';
    		else
    			$response["dorms"]  =  $data[0]->min . " a " . $data[0]->max . ' dormitório(s)';


        $data = self::tipologias($id, 'tip_suite');

    		if( $data[0]->min == $data[0]->max )
    			$response["suite"]  =  $data[0]->min . ' suítes(s)';
    		else
    			$response["suite"]  =  $data[0]->min . " a " . $data[0]->max . ' suítes(s)';

        $data = self::tipologias($id, 'tip_area');

    		if( $data[0]->min == $data[0]->max )
    			$response["area"]   =  $data[0]->min . " m2";
    		else
    			$response["area"]   =  $data[0]->min . " a " . $data[0]->max . " m2";

        $data = self::tipologias($id, 'tip_vagas');

    		if( $data[0]->min == $data[0]->max )
    			$response["vagas"]  =  $data[0]->min . ' vaga(s)';
    		else
    			$response["vagas"]  =  $data[0]->min . " a " . $data[0]->max . ' vaga(s)';

         $sql = "SELECT bai_nome, est_uf, imv_publicidade, imv_referencia
           from imoveis AS IMV
           INNER JOIN localidades AS LOC ON LOC.imv_id = IMV.imv_id
           INNER JOIN bairros AS BAI ON BAI.bai_id = LOC.bai_id
           INNER JOIN estados AS EST ON EST.est_id = LOC.est_id
           WHERE IMV.imv_id = ?";

         $data = \DB::connection('mysql_seabra')->select($sql, [$id]);

    		$response["bairro"]  =  'REF: ' . $data[0]->imv_referencia . ' - ' . $data[0]->bai_nome . "/" . $data[0]->est_uf;
    		$response["publicidade"]  =  self::estagio( $data[0]->imv_publicidade );

    		return $response;

  	}

    public static function estagio( $estagio )
    {
        switch ($estagio) {
          case 1:
                  $estagio = 'Pronto Para Morar';
                  break;

              case 2:
                  $estagio = 'Em construção';
                  break;

              case 3:
                  $estagio = 'Lançamento';
                  break;

              case 4:
                  $estagio = 'Pronto Para Morar *';
                  break;

              default:
                  $estagio = 'Sem estágio';
                  break;
        }

        return $estagio;
    }

    public static function informacoes(Request $request)
    {
        $data = $request->request->all();

        $id    =   $data['id'];

        $data  =   array();

        $data  =   self::getInfoGeral( $id );

        echo json_encode( $data );
    }

    public static function getInfoGeral( $id )
    {
        $sql = "SELECT imv_localidade, bai_nome, cid_nome, emp_link_video
           FROM imoveis AS IMV
           INNER JOIN empreendimentos AS EMP ON EMP.imv_id = IMV.imv_id
           INNER JOIN localidades AS LOC ON LOC.imv_id = IMV.imv_id
           INNER JOIN bairros AS BAI ON BAI.bai_id = LOC.bai_id
           INNER JOIN cidades AS CID ON CID.cid_id = LOC.cid_id
           WHERE IMV.imv_id = ?";

        $data = \DB::connection('mysql_seabra')->select($sql, [$id]);

        $response =  array();

        if( count( $data ) > 0 ) {

          $i = 0;

          foreach ( $data as $key ) {
            $response["local"]   =   $key->imv_localidade . ", " . $key->bai_nome . " - " . $key->cid_nome;
            $response['video']   =   $key->emp_link_video;
          }
        }

        return $response;

    }
}
