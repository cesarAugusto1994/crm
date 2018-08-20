<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = 'imoveis';

    protected $fillable = [
      'seabra_id',
      'titulo',
      'localidade',
      'referencia',
      'incorporacao',
      'construcao',
      'arquitetura',
      'torres',
      'unidades',
      'elevadores',
      'dormitorios',
      'suites',
      'vagas',
      'areas',
      'estacoes_proximas',
      'previsao_entrega',
      'faixa_preco_ini',
      'faixa_preco_fim',
      'fases_obra',
      'areas_comuns',
    ];
}
