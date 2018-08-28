<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itens = array (
  0 =>
  array (
    'id' => 1,
    'nome' => 'Produto A',
    'id_empresa' => 8,
    'referencia' => NULL,
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 =>
  array (
    'id' => 2,
    'nome' => 'Produto B',
    'id_empresa' => 8,
    'referencia' => NULL,
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 =>
  array (
    'id' => 3,
    'nome' => 'Produto C',
    'id_empresa' => 8,
    'referencia' => NULL,
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 =>
  array (
    'id' => 4,
    'nome' => 'Produto D',
    'id_empresa' => 8,
    'referencia' => NULL,
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 =>
  array (
    'id' => 5,
    'nome' => 'Serviço A',
    'id_empresa' => 8,
    'referencia' => NULL,
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  5 =>
  array (
    'id' => 6,
    'nome' => 'Serviço B',
    'id_empresa' => 8,
    'referencia' => NULL,
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  6 =>
  array (
    'id' => 7,
    'nome' => 'Serviço C',
    'id_empresa' => 8,
    'referencia' => NULL,
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  7 =>
  array (
    'id' => 8,
    'nome' => 'Serviço D',
    'id_empresa' => 8,
    'referencia' => NULL,
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  8 =>
  array (
    'id' => 400,
    'nome' => 'ADDRESS DESIRE',
    'id_empresa' => 8,
    'referencia' => 'SETIN15',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  9 =>
  array (
    'id' => 401,
    'nome' => 'ADVANCED IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'SOLI003',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  10 =>
  array (
    'id' => 402,
    'nome' => 'ALL ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'CEGG001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  11 =>
  array (
    'id' => 403,
    'nome' => 'AMALFI',
    'id_empresa' => 8,
    'referencia' => 'SEA103',
    'midia' => 'SITE',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  12 =>
  array (
    'id' => 404,
    'nome' => 'APOGEE',
    'id_empresa' => 8,
    'referencia' => 'RYAZB14',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  13 =>
  array (
    'id' => 405,
    'nome' => 'AREA FRANÇA PINTO',
    'id_empresa' => 8,
    'referencia' => 'NORTIS01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  14 =>
  array (
    'id' => 406,
    'nome' => 'ARISTO VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'LDI007',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  15 =>
  array (
    'id' => 407,
    'nome' => 'AROUND ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'SEA001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  16 =>
  array (
    'id' => 408,
    'nome' => 'ARTE ARQUITETURA MOEMA ',
    'id_empresa' => 8,
    'referencia' => 'STAN26',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  17 =>
  array (
    'id' => 409,
    'nome' => 'ARTE ARQUITETURA PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'STAN07',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  18 =>
  array (
    'id' => 410,
    'nome' => 'ARTE ARQUITETURA PINHEIROS 2',
    'id_empresa' => 8,
    'referencia' => 'STAN02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  19 =>
  array (
    'id' => 411,
    'nome' => 'ARTS MOURATO COELHO',
    'id_empresa' => 8,
    'referencia' => 'TIB001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  20 =>
  array (
    'id' => 412,
    'nome' => 'AUTHENTIC MADALENA',
    'id_empresa' => 8,
    'referencia' => 'EXTO001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  21 =>
  array (
    'id' => 413,
    'nome' => 'AUTHENTIC WE',
    'id_empresa' => 8,
    'referencia' => 'EXTO002',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  22 =>
  array (
    'id' => 414,
    'nome' => 'AUTHENTIQUE MOEMA',
    'id_empresa' => 8,
    'referencia' => 'FELLER01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  23 =>
  array (
    'id' => 415,
    'nome' => 'AUTORAL',
    'id_empresa' => 8,
    'referencia' => 'BROOK21',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  24 =>
  array (
    'id' => 416,
    'nome' => 'BAUHAUS',
    'id_empresa' => 8,
    'referencia' => 'SEA002',
    'midia' => 'SITE',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  25 =>
  array (
    'id' => 417,
    'nome' => 'BELA CINTRA RESIDENCE',
    'id_empresa' => 8,
    'referencia' => 'BKO012',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  26 =>
  array (
    'id' => 418,
    'nome' => 'BEYOND  JARDINS',
    'id_empresa' => 8,
    'referencia' => 'RYAZB13',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  27 =>
  array (
    'id' => 419,
    'nome' => 'BK30 ALTO DA BOA VISTA',
    'id_empresa' => 8,
    'referencia' => 'BKO002',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  28 =>
  array (
    'id' => 420,
    'nome' => 'BKO EXTAY ',
    'id_empresa' => 8,
    'referencia' => 'BKO004',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  29 =>
  array (
    'id' => 421,
    'nome' => 'BLEND VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'KALL02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  30 =>
  array (
    'id' => 422,
    'nome' => 'BLESS FAGUNDES FILHO',
    'id_empresa' => 8,
    'referencia' => 'ARCH02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  31 =>
  array (
    'id' => 423,
    'nome' => 'BLUE NOTE',
    'id_empresa' => 8,
    'referencia' => 'EVEN018',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  32 =>
  array (
    'id' => 424,
    'nome' => 'BLUE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'UPCON06',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  33 =>
  array (
    'id' => 425,
    'nome' => 'BONNA VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'RYAZB11',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  34 =>
  array (
    'id' => 426,
    'nome' => 'BRAND PENSILVANIA',
    'id_empresa' => 8,
    'referencia' => 'PLANO001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  35 =>
  array (
    'id' => 427,
    'nome' => 'BROOKLIN XPRESSION',
    'id_empresa' => 8,
    'referencia' => 'BROOK19',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  36 =>
  array (
    'id' => 428,
    'nome' => 'CAIUBI 601',
    'id_empresa' => 8,
    'referencia' => 'ARQUI06',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  37 =>
  array (
    'id' => 429,
    'nome' => 'CAPRI',
    'id_empresa' => 8,
    'referencia' => 'SEA103',
    'midia' => 'SITE',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  38 =>
  array (
    'id' => 430,
    'nome' => 'CASAVIVA BKO',
    'id_empresa' => 8,
    'referencia' => 'BKO001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  39 =>
  array (
    'id' => 431,
    'nome' => 'CELEBRATION ITAIM',
    'id_empresa' => 8,
    'referencia' => 'AURI02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  40 =>
  array (
    'id' => 432,
    'nome' => 'COMFORT GRU',
    'id_empresa' => 8,
    'referencia' => 'HELB36',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  41 =>
  array (
    'id' => 433,
    'nome' => 'CORRETORES',
    'id_empresa' => 8,
    'referencia' => '',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  42 =>
  array (
    'id' => 434,
    'nome' => 'DESTINY LAPA',
    'id_empresa' => 8,
    'referencia' => 'ARQUI04',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  43 =>
  array (
    'id' => 435,
    'nome' => 'DOLCE MOEMA',
    'id_empresa' => 8,
    'referencia' => 'BARB005',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  44 =>
  array (
    'id' => 436,
    'nome' => 'DOURO VILA MONUMENTO',
    'id_empresa' => 8,
    'referencia' => 'MDL004',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  45 =>
  array (
    'id' => 437,
    'nome' => 'ECLAT',
    'id_empresa' => 8,
    'referencia' => 'GAF032',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  46 =>
  array (
    'id' => 438,
    'nome' => 'EDIFICIO TRIPLO',
    'id_empresa' => 8,
    'referencia' => 'PEDRA02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  47 =>
  array (
    'id' => 439,
    'nome' => 'ESCRITORIO',
    'id_empresa' => 8,
    'referencia' => '',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  48 =>
  array (
    'id' => 440,
    'nome' => 'ESSENZA MOEMA',
    'id_empresa' => 8,
    'referencia' => 'CYR011',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  49 =>
  array (
    'id' => 441,
    'nome' => 'FATTO NOVO PANAMBY',
    'id_empresa' => 8,
    'referencia' => 'PLANO003',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  50 =>
  array (
    'id' => 442,
    'nome' => 'FATTO UNIQUE',
    'id_empresa' => 8,
    'referencia' => 'PLANO002',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  51 =>
  array (
    'id' => 443,
    'nome' => 'FOLLOW',
    'id_empresa' => 8,
    'referencia' => 'GAF013',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  52 =>
  array (
    'id' => 444,
    'nome' => 'FORMA ITAIM',
    'id_empresa' => 8,
    'referencia' => 'HUMA03',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  53 =>
  array (
    'id' => 445,
    'nome' => 'GALERIA 90',
    'id_empresa' => 8,
    'referencia' => 'GMR04',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  54 =>
  array (
    'id' => 446,
    'nome' => 'GALERIA MORAIS DE BARROS',
    'id_empresa' => 8,
    'referencia' => 'STAN29',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  55 =>
  array (
    'id' => 447,
    'nome' => 'GEO 2288',
    'id_empresa' => 8,
    'referencia' => 'INK002',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  56 =>
  array (
    'id' => 448,
    'nome' => 'GIRASSOL ',
    'id_empresa' => 8,
    'referencia' => 'UPCON05',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  57 =>
  array (
    'id' => 449,
    'nome' => 'GRAND PANAMBY',
    'id_empresa' => 8,
    'referencia' => 'CCDI004',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  58 =>
  array (
    'id' => 450,
    'nome' => 'HABITARTE',
    'id_empresa' => 8,
    'referencia' => 'STAN04',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  59 =>
  array (
    'id' => 451,
    'nome' => 'HABITARTE 2',
    'id_empresa' => 8,
    'referencia' => 'STAN01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  60 =>
  array (
    'id' => 452,
    'nome' => 'HAMPTONS PARK',
    'id_empresa' => 8,
    'referencia' => 'KASLIK01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  61 =>
  array (
    'id' => 453,
    'nome' => 'HAVAI 295',
    'id_empresa' => 8,
    'referencia' => 'PM029',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  62 =>
  array (
    'id' => 454,
    'nome' => 'HOME DESIGN PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'BROOK05',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  63 =>
  array (
    'id' => 455,
    'nome' => 'HOMELIKE',
    'id_empresa' => 8,
    'referencia' => 'LUCIO003',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  64 =>
  array (
    'id' => 456,
    'nome' => 'HORIZONTE JK',
    'id_empresa' => 8,
    'referencia' => 'AAM003',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  65 =>
  array (
    'id' => 457,
    'nome' => 'HUMA KLABIN',
    'id_empresa' => 8,
    'referencia' => 'HUMA02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  66 =>
  array (
    'id' => 458,
    'nome' => 'HUMBERTO PRIMO RESERVA',
    'id_empresa' => 8,
    'referencia' => 'FRAIHA08',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  67 =>
  array (
    'id' => 459,
    'nome' => 'INTENSE VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'SOL002',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  68 =>
  array (
    'id' => 460,
    'nome' => 'INTERSECTION BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'YUNY03',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  69 =>
  array (
    'id' => 461,
    'nome' => 'IPEROING 333',
    'id_empresa' => 8,
    'referencia' => 'SHPAIS02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  70 =>
  array (
    'id' => 462,
    'nome' => 'ITACEMA ',
    'id_empresa' => 8,
    'referencia' => 'UPCON11',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  71 =>
  array (
    'id' => 463,
    'nome' => 'ITAHY',
    'id_empresa' => 8,
    'referencia' => 'BARB020',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  72 =>
  array (
    'id' => 464,
    'nome' => 'J330',
    'id_empresa' => 8,
    'referencia' => 'GAF045',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  73 =>
  array (
    'id' => 465,
    'nome' => 'JAZZ PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'ALFA001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  74 =>
  array (
    'id' => 466,
    'nome' => 'JL LIFE BY DESIGN',
    'id_empresa' => 8,
    'referencia' => 'SETIN08',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  75 =>
  array (
    'id' => 467,
    'nome' => 'KASA KLABIN',
    'id_empresa' => 8,
    'referencia' => 'RED402',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  76 =>
  array (
    'id' => 468,
    'nome' => 'LA VIE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'ARQUI01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  77 =>
  array (
    'id' => 469,
    'nome' => 'LANDCAPE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'SHPAIS01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  78 =>
  array (
    'id' => 470,
    'nome' => 'LIKE BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'GAF031',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  79 =>
  array (
    'id' => 471,
    'nome' => 'LIMITED ITAIM',
    'id_empresa' => 8,
    'referencia' => 'YUNY07',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  80 =>
  array (
    'id' => 472,
    'nome' => 'LINK HOME AUGUSTA',
    'id_empresa' => 8,
    'referencia' => 'HAB001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  81 =>
  array (
    'id' => 473,
    'nome' => 'LINKED',
    'id_empresa' => 8,
    'referencia' => 'FIBRA015',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  82 =>
  array (
    'id' => 474,
    'nome' => 'LIVE IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'SOLI001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  83 =>
  array (
    'id' => 475,
    'nome' => 'LUME JOÃO RAMALHO',
    'id_empresa' => 8,
    'referencia' => 'RED401',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  84 =>
  array (
    'id' => 476,
    'nome' => 'MADERO',
    'id_empresa' => 8,
    'referencia' => 'MDL002',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  85 =>
  array (
    'id' => 477,
    'nome' => 'MEDLEY',
    'id_empresa' => 8,
    'referencia' => 'MDL001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  86 =>
  array (
    'id' => 478,
    'nome' => 'MEDLEY NATURE',
    'id_empresa' => 8,
    'referencia' => 'ALFA009',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  87 =>
  array (
    'id' => 479,
    'nome' => 'M FERRAZ 415',
    'id_empresa' => 8,
    'referencia' => 'UPCON04',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  88 =>
  array (
    'id' => 480,
    'nome' => 'MODERN LIFE FAGUNDES FILHO',
    'id_empresa' => 8,
    'referencia' => 'FRAIHA01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  89 =>
  array (
    'id' => 481,
    'nome' => 'MODERN LIFE VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'FRAIHA02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  90 =>
  array (
    'id' => 482,
    'nome' => 'MONDRIAN ',
    'id_empresa' => 8,
    'referencia' => 'MDL003',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  91 =>
  array (
    'id' => 483,
    'nome' => 'MOTION AVANHADAVA',
    'id_empresa' => 8,
    'referencia' => 'STAN03',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  92 =>
  array (
    'id' => 484,
    'nome' => 'MOVIM ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'DIAL02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  93 =>
  array (
    'id' => 485,
    'nome' => 'NEED CAMPO BELO ',
    'id_empresa' => 8,
    'referencia' => 'TAVI002',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  94 =>
  array (
    'id' => 486,
    'nome' => 'NEW PARKER',
    'id_empresa' => 8,
    'referencia' => 'CCDI001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  95 =>
  array (
    'id' => 487,
    'nome' => 'NEXT ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'SHPAIS04',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  96 =>
  array (
    'id' => 488,
    'nome' => 'NEXT POMPEIA',
    'id_empresa' => 8,
    'referencia' => 'SHPAIS03',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  97 =>
  array (
    'id' => 489,
    'nome' => 'NOVOS CLIENTES',
    'id_empresa' => 8,
    'referencia' => '',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  98 =>
  array (
    'id' => 490,
    'nome' => 'ORIGINALLE IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'CANO02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  99 =>
  array (
    'id' => 491,
    'nome' => 'O² JARDIM SUL',
    'id_empresa' => 8,
    'referencia' => 'CCDI003',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  100 =>
  array (
    'id' => 492,
    'nome' => 'PARAMOUNT PARAISO',
    'id_empresa' => 8,
    'referencia' => 'RYAZB02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  101 =>
  array (
    'id' => 493,
    'nome' => 'PARIS 824',
    'id_empresa' => 8,
    'referencia' => 'SHPAIS05',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  102 =>
  array (
    'id' => 494,
    'nome' => 'PARK SIDE IBIRAPUERA ',
    'id_empresa' => 8,
    'referencia' => 'SEA104',
    'midia' => 'SITE',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  103 =>
  array (
    'id' => 495,
    'nome' => 'PARKWAY PANAMBY',
    'id_empresa' => 8,
    'referencia' => 'CCDI005',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  104 =>
  array (
    'id' => 496,
    'nome' => 'PASEO FIORI ',
    'id_empresa' => 8,
    'referencia' => 'STUHL003',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  105 =>
  array (
    'id' => 497,
    'nome' => 'PASEO ORCHARD',
    'id_empresa' => 8,
    'referencia' => 'STUHL001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  106 =>
  array (
    'id' => 498,
    'nome' => 'PASEO VENICE',
    'id_empresa' => 8,
    'referencia' => 'STUHL004',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  107 =>
  array (
    'id' => 499,
    'nome' => 'PASEO VERMONT',
    'id_empresa' => 8,
    'referencia' => 'STUHL002',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  108 =>
  array (
    'id' => 500,
    'nome' => 'PATEO BARRA',
    'id_empresa' => 8,
    'referencia' => 'YUNY05',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  109 =>
  array (
    'id' => 501,
    'nome' => 'PAULISTA LIFE',
    'id_empresa' => 8,
    'referencia' => 'BKO012',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  110 =>
  array (
    'id' => 502,
    'nome' => 'PERFIL JABAQUARA',
    'id_empresa' => 8,
    'referencia' => 'PLANO004',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  111 =>
  array (
    'id' => 503,
    'nome' => 'PINTASSILGO 556',
    'id_empresa' => 8,
    'referencia' => 'TAVI003',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  112 =>
  array (
    'id' => 504,
    'nome' => 'PRAÇA GAIVOTA',
    'id_empresa' => 8,
    'referencia' => 'BROOK04',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  113 =>
  array (
    'id' => 505,
    'nome' => 'PRAÇA POMPEIA',
    'id_empresa' => 8,
    'referencia' => 'STAN10',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  114 =>
  array (
    'id' => 506,
    'nome' => 'PRESENCE SAÚDE',
    'id_empresa' => 8,
    'referencia' => 'ARCH03',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  115 =>
  array (
    'id' => 507,
    'nome' => 'PRIZMA PARAISO',
    'id_empresa' => 8,
    'referencia' => 'LUCIO010',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  116 =>
  array (
    'id' => 508,
    'nome' => 'QU4TRO BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'EVEN017',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  117 =>
  array (
    'id' => 509,
    'nome' => 'QUARTIER AURI',
    'id_empresa' => 8,
    'referencia' => 'AURI01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  118 =>
  array (
    'id' => 510,
    'nome' => 'QUEEN PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'ARQUI02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  119 =>
  array (
    'id' => 511,
    'nome' => 'RESERVA MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'LIV002',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  120 =>
  array (
    'id' => 512,
    'nome' => 'RESERVE 650',
    'id_empresa' => 8,
    'referencia' => 'EXTO004',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  121 =>
  array (
    'id' => 513,
    'nome' => 'RESIDENCIAL DI LUCCA',
    'id_empresa' => 8,
    'referencia' => 'PDG003',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  122 =>
  array (
    'id' => 514,
    'nome' => 'SENZO PARAISO',
    'id_empresa' => 8,
    'referencia' => 'BARB021',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  123 =>
  array (
    'id' => 515,
    'nome' => 'SYNTHESYS PINHEIROS ',
    'id_empresa' => 8,
    'referencia' => 'TRIS28',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  124 =>
  array (
    'id' => 516,
    'nome' => 'SOBERANO BY TARJAB',
    'id_empresa' => 8,
    'referencia' => 'TARJ08',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  125 =>
  array (
    'id' => 517,
    'nome' => 'SOL DA SAÚDE',
    'id_empresa' => 8,
    'referencia' => 'SEA111',
    'midia' => 'SITE',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  126 =>
  array (
    'id' => 518,
    'nome' => 'STORIA IBIRAPUERA ',
    'id_empresa' => 8,
    'referencia' => 'CYR039',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  127 =>
  array (
    'id' => 519,
    'nome' => 'TETRYS POMPEIA',
    'id_empresa' => 8,
    'referencia' => 'INK001',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  128 =>
  array (
    'id' => 520,
    'nome' => 'THE SINGULAR PARAISO',
    'id_empresa' => 8,
    'referencia' => 'RYAZB10',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  129 =>
  array (
    'id' => 521,
    'nome' => 'TIME SÃO PAULO',
    'id_empresa' => 8,
    'referencia' => 'CANO03',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  130 =>
  array (
    'id' => 522,
    'nome' => 'TIMES KLABIN',
    'id_empresa' => 8,
    'referencia' => 'KALL03',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  131 =>
  array (
    'id' => 523,
    'nome' => 'UBER ITAIM',
    'id_empresa' => 8,
    'referencia' => 'CANO01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  132 =>
  array (
    'id' => 524,
    'nome' => 'UNITED HOME',
    'id_empresa' => 8,
    'referencia' => 'YUNY06',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  133 =>
  array (
    'id' => 525,
    'nome' => 'UP CONCEPT',
    'id_empresa' => 8,
    'referencia' => 'UPCON15',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  134 =>
  array (
    'id' => 526,
    'nome' => 'UP LIFE CIDADE UNIVERSITARIA',
    'id_empresa' => 8,
    'referencia' => 'UPCON09',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  135 =>
  array (
    'id' => 527,
    'nome' => 'UP LIFE INTERLAGOS',
    'id_empresa' => 8,
    'referencia' => 'UPCON07',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  136 =>
  array (
    'id' => 528,
    'nome' => 'UP STYLE ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'UPCON02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  137 =>
  array (
    'id' => 529,
    'nome' => 'UPTOWN AROUCHE',
    'id_empresa' => 8,
    'referencia' => 'UPCON08',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  138 =>
  array (
    'id' => 530,
    'nome' => 'UPSIDE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'GAF048',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  139 =>
  array (
    'id' => 531,
    'nome' => 'URBAN ',
    'id_empresa' => 8,
    'referencia' => 'MDL010',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  140 =>
  array (
    'id' => 532,
    'nome' => 'URBANITY HOME',
    'id_empresa' => 8,
    'referencia' => 'YUNY04',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  141 =>
  array (
    'id' => 533,
    'nome' => 'VALENCIA',
    'id_empresa' => 8,
    'referencia' => 'SEA107',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  142 =>
  array (
    'id' => 534,
    'nome' => 'VIAZA 400',
    'id_empresa' => 8,
    'referencia' => 'QGDI01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  143 =>
  array (
    'id' => 535,
    'nome' => 'VILA  NOVA SABARA - PRAÇA MARAJOARA',
    'id_empresa' => 8,
    'referencia' => 'PDG007',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  144 =>
  array (
    'id' => 536,
    'nome' => 'VILLE DE FRANCE',
    'id_empresa' => 8,
    'referencia' => 'PM006',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  145 =>
  array (
    'id' => 537,
    'nome' => 'VITREO KLABIN',
    'id_empresa' => 8,
    'referencia' => 'BRCORP1',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  146 =>
  array (
    'id' => 538,
    'nome' => 'VN ALVORADA',
    'id_empresa' => 8,
    'referencia' => 'VIT0020',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  147 =>
  array (
    'id' => 539,
    'nome' => 'VN CARDOSO DE MELO',
    'id_empresa' => 8,
    'referencia' => 'VIT0021',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  148 =>
  array (
    'id' => 540,
    'nome' => 'WAVE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'BKO011',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  149 =>
  array (
    'id' => 541,
    'nome' => 'YANG BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'ARCH01',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  150 =>
  array (
    'id' => 542,
    'nome' => 'YBYRA',
    'id_empresa' => 8,
    'referencia' => 'PGREG02',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  151 =>
  array (
    'id' => 543,
    'nome' => 'YYYY ',
    'id_empresa' => 8,
    'referencia' => '',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  152 =>
  array (
    'id' => 544,
    'nome' => 'ZZZZ',
    'id_empresa' => 8,
    'referencia' => '',
    'midia' => 'PORTAL 123I',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  153 =>
  array (
    'id' => 545,
    'nome' => 'ED.GBC',
    'id_empresa' => 8,
    'referencia' => 'REV01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  154 =>
  array (
    'id' => 546,
    'nome' => 'TEMPO BELLO',
    'id_empresa' => 8,
    'referencia' => 'CYR001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  155 =>
  array (
    'id' => 547,
    'nome' => 'ENCONTRO IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'CYR004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  156 =>
  array (
    'id' => 548,
    'nome' => 'ALAMEDA MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'CYR005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  157 =>
  array (
    'id' => 549,
    'nome' => 'SUMMER FAMILY RESORT',
    'id_empresa' => 8,
    'referencia' => 'TEC001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  158 =>
  array (
    'id' => 550,
    'nome' => 'FUTURA CONDOMINIO CLUB',
    'id_empresa' => 8,
    'referencia' => 'TEC002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  159 =>
  array (
    'id' => 551,
    'nome' => 'EASY MARACA',
    'id_empresa' => 8,
    'referencia' => 'GAF001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  160 =>
  array (
    'id' => 552,
    'nome' => 'SMART ALTO DE SANTANA',
    'id_empresa' => 8,
    'referencia' => 'GAF002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  161 =>
  array (
    'id' => 553,
    'nome' => 'LIKE SAUDE',
    'id_empresa' => 8,
    'referencia' => 'GAF003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  162 =>
  array (
    'id' => 554,
    'nome' => 'ENERGY BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'GAF004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  163 =>
  array (
    'id' => 555,
    'nome' => 'STATION',
    'id_empresa' => 8,
    'referencia' => 'GAF005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  164 =>
  array (
    'id' => 556,
    'nome' => 'VISION ANALIA FRANCO',
    'id_empresa' => 8,
    'referencia' => 'GAF006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  165 =>
  array (
    'id' => 557,
    'nome' => 'FANTASTIQUE',
    'id_empresa' => 8,
    'referencia' => 'GAF007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  166 =>
  array (
    'id' => 558,
    'nome' => 'IT´S 163',
    'id_empresa' => 8,
    'referencia' => 'TEC006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  167 =>
  array (
    'id' => 559,
    'nome' => 'COND.BAUHAUS VILLAGE',
    'id_empresa' => 8,
    'referencia' => 'SEA101',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  168 =>
  array (
    'id' => 560,
    'nome' => 'RES.SOL DA SAUDE',
    'id_empresa' => 8,
    'referencia' => 'SEA111',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  169 =>
  array (
    'id' => 561,
    'nome' => 'CONDOMINIO MARAJOARA',
    'id_empresa' => 8,
    'referencia' => 'SEA103',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  170 =>
  array (
    'id' => 562,
    'nome' => 'RES.PARKSIDE IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'SEA104',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  171 =>
  array (
    'id' => 563,
    'nome' => 'RES.MONTREUX',
    'id_empresa' => 8,
    'referencia' => 'SEA105',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  172 =>
  array (
    'id' => 564,
    'nome' => 'COND.PALAZZO SAVOIA',
    'id_empresa' => 8,
    'referencia' => 'SEA106',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  173 =>
  array (
    'id' => 565,
    'nome' => 'COND. VALENCIA',
    'id_empresa' => 8,
    'referencia' => 'SEA107',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  174 =>
  array (
    'id' => 566,
    'nome' => 'ED.SEVENTH AVENUE',
    'id_empresa' => 8,
    'referencia' => 'SEA108',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  175 =>
  array (
    'id' => 567,
    'nome' => 'ED.MONTE CARLO ',
    'id_empresa' => 8,
    'referencia' => 'SEA109',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  176 =>
  array (
    'id' => 568,
    'nome' => 'ED. C.R MONTEIRO ',
    'id_empresa' => 8,
    'referencia' => 'SEA110',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  177 =>
  array (
    'id' => 569,
    'nome' => 'ED.ANA PAULA',
    'id_empresa' => 8,
    'referencia' => 'SEA111',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  178 =>
  array (
    'id' => 570,
    'nome' => 'ED. R.C.MARQUES',
    'id_empresa' => 8,
    'referencia' => 'SEA112',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  179 =>
  array (
    'id' => 571,
    'nome' => 'RES.NOSSA SENHORA DE FATIMA',
    'id_empresa' => 8,
    'referencia' => 'SEA113',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  180 =>
  array (
    'id' => 572,
    'nome' => 'RES.VILLA BORGHESE',
    'id_empresa' => 8,
    'referencia' => 'SEA114',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  181 =>
  array (
    'id' => 573,
    'nome' => 'COND. TRIANON ',
    'id_empresa' => 8,
    'referencia' => 'SEA115',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  182 =>
  array (
    'id' => 574,
    'nome' => 'ED. VILLA DI CAPRI',
    'id_empresa' => 8,
    'referencia' => 'SEA118',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  183 =>
  array (
    'id' => 575,
    'nome' => 'CONDOMINIO MANHATTAN',
    'id_empresa' => 8,
    'referencia' => 'SEA120',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  184 =>
  array (
    'id' => 576,
    'nome' => 'ED.VALERIA',
    'id_empresa' => 8,
    'referencia' => 'SEA121',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  185 =>
  array (
    'id' => 577,
    'nome' => 'RES.PARQUE TOMAS SARAIVA',
    'id_empresa' => 8,
    'referencia' => 'SEA122',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  186 =>
  array (
    'id' => 578,
    'nome' => 'RES.NOVA UTINGA',
    'id_empresa' => 8,
    'referencia' => 'SEA123',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  187 =>
  array (
    'id' => 579,
    'nome' => 'RES. MACHADO DE ASSIS',
    'id_empresa' => 8,
    'referencia' => 'SEA124',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  188 =>
  array (
    'id' => 580,
    'nome' => 'CONDOMINIO ITALIA',
    'id_empresa' => 8,
    'referencia' => 'SEA125',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  189 =>
  array (
    'id' => 581,
    'nome' => 'ED. ALVINO SLAVIERO',
    'id_empresa' => 8,
    'referencia' => 'BRLINC1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  190 =>
  array (
    'id' => 582,
    'nome' => 'ED. JUNDIAI ',
    'id_empresa' => 8,
    'referencia' => 'REV008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  191 =>
  array (
    'id' => 583,
    'nome' => 'ED.TORINO',
    'id_empresa' => 8,
    'referencia' => 'REV009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  192 =>
  array (
    'id' => 584,
    'nome' => 'BAUHAUS VILLAGE',
    'id_empresa' => 8,
    'referencia' => 'SEA002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  193 =>
  array (
    'id' => 585,
    'nome' => 'VOX VILA OLIMPIA',
    'id_empresa' => 8,
    'referencia' => 'VIT0001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  194 =>
  array (
    'id' => 586,
    'nome' => 'INDI VILA OLIMPIA',
    'id_empresa' => 8,
    'referencia' => 'VIT0006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  195 =>
  array (
    'id' => 587,
    'nome' => 'PAX PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'VIT0005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  196 =>
  array (
    'id' => 588,
    'nome' => 'TAG SPACE',
    'id_empresa' => 8,
    'referencia' => 'VIT0007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  197 =>
  array (
    'id' => 589,
    'nome' => 'VERTICAL ITAIM',
    'id_empresa' => 8,
    'referencia' => 'VIT0008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  198 =>
  array (
    'id' => 590,
    'nome' => 'VN TURIASSU',
    'id_empresa' => 8,
    'referencia' => 'VIT0002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  199 =>
  array (
    'id' => 591,
    'nome' => 'VN TOPAZIO',
    'id_empresa' => 8,
    'referencia' => 'VIT0003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  200 =>
  array (
    'id' => 592,
    'nome' => 'VN CASA JORGE TIBIRIÇA',
    'id_empresa' => 8,
    'referencia' => 'VIT0004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  201 =>
  array (
    'id' => 593,
    'nome' => 'MAISON ROSE',
    'id_empresa' => 8,
    'referencia' => 'REV0051',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  202 =>
  array (
    'id' => 594,
    'nome' => 'MISTI MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'CYR007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  203 =>
  array (
    'id' => 595,
    'nome' => 'GIOIA ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'CYR008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  204 =>
  array (
    'id' => 596,
    'nome' => 'VETRINO BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'CYR009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  205 =>
  array (
    'id' => 597,
    'nome' => 'MARIZ VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'EVEN001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  206 =>
  array (
    'id' => 598,
    'nome' => 'VERNISSAGE',
    'id_empresa' => 8,
    'referencia' => 'EVEN002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  207 =>
  array (
    'id' => 599,
    'nome' => 'WIDE',
    'id_empresa' => 8,
    'referencia' => 'GAF009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  208 =>
  array (
    'id' => 600,
    'nome' => 'TIMELIFE ',
    'id_empresa' => 8,
    'referencia' => 'TEC003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  209 =>
  array (
    'id' => 601,
    'nome' => 'BC BELA CINTRA',
    'id_empresa' => 8,
    'referencia' => 'EVEN003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  210 =>
  array (
    'id' => 602,
    'nome' => 'DOMINIO MARAJOARA',
    'id_empresa' => 8,
    'referencia' => 'CYR006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  211 =>
  array (
    'id' => 603,
    'nome' => 'ANDALUS',
    'id_empresa' => 8,
    'referencia' => 'CYR010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  212 =>
  array (
    'id' => 604,
    'nome' => 'DOC QUATÁ',
    'id_empresa' => 8,
    'referencia' => 'GAF010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  213 =>
  array (
    'id' => 605,
    'nome' => 'VISTA VERDE',
    'id_empresa' => 8,
    'referencia' => 'TEC007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  214 =>
  array (
    'id' => 606,
    'nome' => 'TASTY PANAMBY',
    'id_empresa' => 8,
    'referencia' => 'TEC008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  215 =>
  array (
    'id' => 607,
    'nome' => 'RESERVA JARDIM SUL',
    'id_empresa' => 8,
    'referencia' => 'TEC004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  216 =>
  array (
    'id' => 608,
    'nome' => 'VILA ARBORETO',
    'id_empresa' => 8,
    'referencia' => 'TEC005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  217 =>
  array (
    'id' => 609,
    'nome' => 'LUNE',
    'id_empresa' => 8,
    'referencia' => 'TEC010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  218 =>
  array (
    'id' => 610,
    'nome' => 'TOM 1102',
    'id_empresa' => 8,
    'referencia' => 'CYR013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  219 =>
  array (
    'id' => 611,
    'nome' => 'K BY CYRELA',
    'id_empresa' => 8,
    'referencia' => 'CYR014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  220 =>
  array (
    'id' => 612,
    'nome' => 'ARTISAN',
    'id_empresa' => 8,
    'referencia' => 'CYR015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  221 =>
  array (
    'id' => 613,
    'nome' => 'DELUX',
    'id_empresa' => 8,
    'referencia' => 'GAF011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  222 =>
  array (
    'id' => 614,
    'nome' => 'SQUARE TATUAPÉ LIVE',
    'id_empresa' => 8,
    'referencia' => 'GAF012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  223 =>
  array (
    'id' => 615,
    'nome' => 'V.I.P AUGUSTA',
    'id_empresa' => 8,
    'referencia' => 'ESSER01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  224 =>
  array (
    'id' => 616,
    'nome' => 'VIBE REPUBLICA',
    'id_empresa' => 8,
    'referencia' => 'CYR016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  225 =>
  array (
    'id' => 617,
    'nome' => 'PORTAL CENTRO',
    'id_empresa' => 8,
    'referencia' => 'EVEN005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  226 =>
  array (
    'id' => 618,
    'nome' => 'LEGACY VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'CYR017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  227 =>
  array (
    'id' => 619,
    'nome' => 'GEOMETRIA',
    'id_empresa' => 8,
    'referencia' => 'BENX01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  228 =>
  array (
    'id' => 620,
    'nome' => 'FOLLOW BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'GAF013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  229 =>
  array (
    'id' => 621,
    'nome' => 'WISH MOEMA',
    'id_empresa' => 8,
    'referencia' => 'EVEN007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  230 =>
  array (
    'id' => 622,
    'nome' => 'HI CENTRO',
    'id_empresa' => 8,
    'referencia' => 'GAF014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  231 =>
  array (
    'id' => 623,
    'nome' => 'CYRELA INSPIRED',
    'id_empresa' => 8,
    'referencia' => 'CYR018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  232 =>
  array (
    'id' => 624,
    'nome' => 'PANAMERICA BRICKELL',
    'id_empresa' => 8,
    'referencia' => 'CYR019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  233 =>
  array (
    'id' => 625,
    'nome' => 'START UP LIBERDADE',
    'id_empresa' => 8,
    'referencia' => 'ESSER03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  234 =>
  array (
    'id' => 626,
    'nome' => 'HYPER HOME & DESIGN',
    'id_empresa' => 8,
    'referencia' => 'ESSER02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  235 =>
  array (
    'id' => 627,
    'nome' => 'VN FERREIRA LOBO',
    'id_empresa' => 8,
    'referencia' => 'VIT0009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  236 =>
  array (
    'id' => 628,
    'nome' => 'VN QUATÁ',
    'id_empresa' => 8,
    'referencia' => 'VIT0010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  237 =>
  array (
    'id' => 629,
    'nome' => 'EASY CIDADE UNIVERSITÁRIA',
    'id_empresa' => 8,
    'referencia' => 'GAF015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  238 =>
  array (
    'id' => 630,
    'nome' => 'VISION PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'GAF016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  239 =>
  array (
    'id' => 631,
    'nome' => 'VN ALVARO RODRIGUES',
    'id_empresa' => 8,
    'referencia' => 'VIT0011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  240 =>
  array (
    'id' => 632,
    'nome' => 'MARTESE ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'EVEN009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  241 =>
  array (
    'id' => 633,
    'nome' => 'LUV ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'HAB002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  242 =>
  array (
    'id' => 634,
    'nome' => 'CYRELA-THE YEAR EDITION 2014',
    'id_empresa' => 8,
    'referencia' => 'CYR020',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  243 =>
  array (
    'id' => 635,
    'nome' => 'VN CASA DO ATOR',
    'id_empresa' => 8,
    'referencia' => 'VIT0012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  244 =>
  array (
    'id' => 636,
    'nome' => 'VN GOMES DE CARVALHO',
    'id_empresa' => 8,
    'referencia' => 'VIT0013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  245 =>
  array (
    'id' => 637,
    'nome' => 'SP NEW HOME',
    'id_empresa' => 8,
    'referencia' => 'ESSER05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  246 =>
  array (
    'id' => 638,
    'nome' => 'SQUARE SANTO AMARO',
    'id_empresa' => 8,
    'referencia' => 'GAF017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  247 =>
  array (
    'id' => 639,
    'nome' => 'EQ JARDIM PRUDENCIA',
    'id_empresa' => 8,
    'referencia' => 'GAF018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  248 =>
  array (
    'id' => 640,
    'nome' => 'TODAY SANTANA',
    'id_empresa' => 8,
    'referencia' => 'GAF019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  249 =>
  array (
    'id' => 641,
    'nome' => 'BOSQUE MARAJOARA',
    'id_empresa' => 8,
    'referencia' => 'GAF020',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  250 =>
  array (
    'id' => 642,
    'nome' => 'HUMA ITAIM',
    'id_empresa' => 8,
    'referencia' => 'HUMA01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  251 =>
  array (
    'id' => 643,
    'nome' => 'HELBOR TREND SP',
    'id_empresa' => 8,
    'referencia' => 'HELB02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  252 =>
  array (
    'id' => 644,
    'nome' => 'QU4TRO',
    'id_empresa' => 8,
    'referencia' => 'EVEN017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  253 =>
  array (
    'id' => 645,
    'nome' => 'DELFINA RESIDENCE',
    'id_empresa' => 8,
    'referencia' => 'PEDRA01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  254 =>
  array (
    'id' => 646,
    'nome' => 'SP SUMARÉ PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'EVEN019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  255 =>
  array (
    'id' => 647,
    'nome' => 'TRIPLO',
    'id_empresa' => 8,
    'referencia' => 'PEDRA02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  256 =>
  array (
    'id' => 648,
    'nome' => 'ESSÊNCIA',
    'id_empresa' => 8,
    'referencia' => 'EVEN021',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  257 =>
  array (
    'id' => 649,
    'nome' => 'SOMMA BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'EVEN022',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  258 =>
  array (
    'id' => 650,
    'nome' => 'MOVIN ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'DIAL02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  259 =>
  array (
    'id' => 651,
    'nome' => 'GAIVOTA 1081',
    'id_empresa' => 8,
    'referencia' => 'TRIS01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  260 =>
  array (
    'id' => 652,
    'nome' => 'URBAN RESORT',
    'id_empresa' => 8,
    'referencia' => 'HELB03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  261 =>
  array (
    'id' => 653,
    'nome' => 'ATRATIVE VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'ODBR04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  262 =>
  array (
    'id' => 654,
    'nome' => 'BIOGRAFIA VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'ODBR03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  263 =>
  array (
    'id' => 655,
    'nome' => 'PRAÇA SÃO PAULO',
    'id_empresa' => 8,
    'referencia' => 'ODBR02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  264 =>
  array (
    'id' => 656,
    'nome' => 'DIMENSION',
    'id_empresa' => 8,
    'referencia' => 'FRAIHA03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  265 =>
  array (
    'id' => 657,
    'nome' => 'TIME ',
    'id_empresa' => 8,
    'referencia' => 'CANO03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  266 =>
  array (
    'id' => 658,
    'nome' => 'IDEAL BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'EVEN023',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  267 =>
  array (
    'id' => 659,
    'nome' => 'BELLA VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'ODBR06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  268 =>
  array (
    'id' => 660,
    'nome' => '106 SERIDÓ',
    'id_empresa' => 8,
    'referencia' => 'SJ001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  269 =>
  array (
    'id' => 661,
    'nome' => 'PRAÇA VILA NOVA',
    'id_empresa' => 8,
    'referencia' => 'JHSF01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  270 =>
  array (
    'id' => 662,
    'nome' => 'PARQUE CIDADE JARDIM',
    'id_empresa' => 8,
    'referencia' => 'JHSF02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  271 =>
  array (
    'id' => 663,
    'nome' => 'FREDERIC CHOPIN',
    'id_empresa' => 8,
    'referencia' => 'SJ002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  272 =>
  array (
    'id' => 664,
    'nome' => 'VITRA',
    'id_empresa' => 8,
    'referencia' => 'JHSF03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  273 =>
  array (
    'id' => 665,
    'nome' => 'FRANZ SCHUBERT',
    'id_empresa' => 8,
    'referencia' => 'SJ003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  274 =>
  array (
    'id' => 666,
    'nome' => 'CHATEAU MARGAUX',
    'id_empresa' => 8,
    'referencia' => 'BIESP1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  275 =>
  array (
    'id' => 667,
    'nome' => 'GEORGE SAND',
    'id_empresa' => 8,
    'referencia' => 'SJ004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  276 =>
  array (
    'id' => 668,
    'nome' => 'CHATEAU LATOUR',
    'id_empresa' => 8,
    'referencia' => 'BIESP2',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  277 =>
  array (
    'id' => 669,
    'nome' => 'CLERMONT FERRAND',
    'id_empresa' => 8,
    'referencia' => 'BIESP3',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  278 =>
  array (
    'id' => 670,
    'nome' => 'CASA FERRAZ ',
    'id_empresa' => 8,
    'referencia' => 'BIESP4',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  279 =>
  array (
    'id' => 671,
    'nome' => 'TERRAÇO LEOPOLDO',
    'id_empresa' => 8,
    'referencia' => 'BIESP5',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  280 =>
  array (
    'id' => 672,
    'nome' => 'CHATEAU LAFITE',
    'id_empresa' => 8,
    'referencia' => 'BIESP6',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  281 =>
  array (
    'id' => 673,
    'nome' => 'MODERN LIFE BACELAR',
    'id_empresa' => 8,
    'referencia' => 'FRAIHA04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  282 =>
  array (
    'id' => 674,
    'nome' => 'LOUNGE 161 BENEDITO LAPIN',
    'id_empresa' => 8,
    'referencia' => 'BIESP7',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  283 =>
  array (
    'id' => 675,
    'nome' => 'PÁTEO LEOPOLDO',
    'id_empresa' => 8,
    'referencia' => 'BIESP8',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  284 =>
  array (
    'id' => 676,
    'nome' => '701 ARIZONA',
    'id_empresa' => 8,
    'referencia' => 'EVEN024',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  285 =>
  array (
    'id' => 677,
    'nome' => 'CODE BERRINI',
    'id_empresa' => 8,
    'referencia' => 'EVEN025',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  286 =>
  array (
    'id' => 678,
    'nome' => 'HABITARTE AMARELO ',
    'id_empresa' => 8,
    'referencia' => 'STAN01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  287 =>
  array (
    'id' => 679,
    'nome' => 'MOTION AVANHANDAVA',
    'id_empresa' => 8,
    'referencia' => 'STAN03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  288 =>
  array (
    'id' => 680,
    'nome' => 'HABITARTE VERDE',
    'id_empresa' => 8,
    'referencia' => 'STAN04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  289 =>
  array (
    'id' => 681,
    'nome' => 'IQUALI JARDINS',
    'id_empresa' => 8,
    'referencia' => 'QDI01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  290 =>
  array (
    'id' => 682,
    'nome' => 'CUBE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EVEN026',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  291 =>
  array (
    'id' => 683,
    'nome' => 'FL RESIDENCE',
    'id_empresa' => 8,
    'referencia' => 'STAN05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  292 =>
  array (
    'id' => 684,
    'nome' => 'ONE BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'STAN06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  293 =>
  array (
    'id' => 685,
    'nome' => 'DESIGN ARTE',
    'id_empresa' => 8,
    'referencia' => 'EVEN030',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  294 =>
  array (
    'id' => 686,
    'nome' => 'ADD VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'TRIS02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  295 =>
  array (
    'id' => 687,
    'nome' => 'MARIO FERRAZ 339',
    'id_empresa' => 8,
    'referencia' => 'UPCON01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  296 =>
  array (
    'id' => 688,
    'nome' => 'ACERVO PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'EVEN027',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  297 =>
  array (
    'id' => 689,
    'nome' => 'ADD NOVA BERRINI',
    'id_empresa' => 8,
    'referencia' => 'TRIS03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  298 =>
  array (
    'id' => 690,
    'nome' => 'LATITUDE ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'TRIS04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  299 =>
  array (
    'id' => 691,
    'nome' => 'PIRAPORA 250',
    'id_empresa' => 8,
    'referencia' => 'UPCON03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  300 =>
  array (
    'id' => 692,
    'nome' => 'MARIO FERRAZ 415',
    'id_empresa' => 8,
    'referencia' => 'UPCON04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  301 =>
  array (
    'id' => 693,
    'nome' => 'GIRASOL',
    'id_empresa' => 8,
    'referencia' => 'UPCON05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  302 =>
  array (
    'id' => 694,
    'nome' => 'LATITUDE VILA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'TRIS05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  303 =>
  array (
    'id' => 695,
    'nome' => 'OLIVIA VILA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'TRIS06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  304 =>
  array (
    'id' => 696,
    'nome' => 'LINE SP',
    'id_empresa' => 8,
    'referencia' => 'TRIS07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  305 =>
  array (
    'id' => 697,
    'nome' => 'DOWNTOWN REPÚBLICA',
    'id_empresa' => 8,
    'referencia' => 'SETIN01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  306 =>
  array (
    'id' => 698,
    'nome' => 'DOWNTOWN GENEBRA ',
    'id_empresa' => 8,
    'referencia' => 'SETIN02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  307 =>
  array (
    'id' => 699,
    'nome' => 'DOWNTOWN SÃO JOÃO',
    'id_empresa' => 8,
    'referencia' => 'SETIN03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  308 =>
  array (
    'id' => 700,
    'nome' => 'DOWNTOWN BRIGADEIRO',
    'id_empresa' => 8,
    'referencia' => 'SETIN04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  309 =>
  array (
    'id' => 701,
    'nome' => 'DOWNTOWN SÃO LUIS',
    'id_empresa' => 8,
    'referencia' => 'SETIN05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  310 =>
  array (
    'id' => 702,
    'nome' => 'DOWNTOWN ESTAÇÃO DA LUZ',
    'id_empresa' => 8,
    'referencia' => 'SETIN06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  311 =>
  array (
    'id' => 703,
    'nome' => 'ATMOSFERA',
    'id_empresa' => 8,
    'referencia' => 'CYR002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  312 =>
  array (
    'id' => 704,
    'nome' => 'CYPRIANI 955',
    'id_empresa' => 8,
    'referencia' => 'CYR003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  313 =>
  array (
    'id' => 705,
    'nome' => 'DOWNTOWN PRAÇA DA SÉ',
    'id_empresa' => 8,
    'referencia' => 'SETIN07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  314 =>
  array (
    'id' => 706,
    'nome' => 'CYRELA BY PININFARINA',
    'id_empresa' => 8,
    'referencia' => 'CYR021',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  315 =>
  array (
    'id' => 707,
    'nome' => 'MY STATION VILA SONIA',
    'id_empresa' => 8,
    'referencia' => 'TRIS08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  316 =>
  array (
    'id' => 708,
    'nome' => 'PAYSAGE MOOCA',
    'id_empresa' => 8,
    'referencia' => 'TRIS09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  317 =>
  array (
    'id' => 709,
    'nome' => 'ALTTO CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EVEN033',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  318 =>
  array (
    'id' => 710,
    'nome' => 'HOME BOUTIQUE BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'CYR022',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  319 =>
  array (
    'id' => 711,
    'nome' => 'VARANDA IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'CYR023',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  320 =>
  array (
    'id' => 712,
    'nome' => 'THERA RESIDENCE',
    'id_empresa' => 8,
    'referencia' => 'CYR024',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  321 =>
  array (
    'id' => 713,
    'nome' => 'NYSP',
    'id_empresa' => 8,
    'referencia' => 'EVEN035',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  322 =>
  array (
    'id' => 714,
    'nome' => 'NEW AGE MICHIGAN',
    'id_empresa' => 8,
    'referencia' => 'EVEN036',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  323 =>
  array (
    'id' => 715,
    'nome' => 'AFFINITY FOR LIVE',
    'id_empresa' => 8,
    'referencia' => 'VIT0015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  324 =>
  array (
    'id' => 716,
    'nome' => 'VX CHANGE',
    'id_empresa' => 8,
    'referencia' => 'VIT0016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  325 =>
  array (
    'id' => 717,
    'nome' => 'VN ALAMEDA CAMPINAS',
    'id_empresa' => 8,
    'referencia' => 'VIT0017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  326 =>
  array (
    'id' => 718,
    'nome' => 'TAG DECOR',
    'id_empresa' => 8,
    'referencia' => 'VIT0018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  327 =>
  array (
    'id' => 719,
    'nome' => 'VENTANA',
    'id_empresa' => 8,
    'referencia' => 'CYR025',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  328 =>
  array (
    'id' => 720,
    'nome' => 'MENARA',
    'id_empresa' => 8,
    'referencia' => 'CYR026',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  329 =>
  array (
    'id' => 721,
    'nome' => 'ALTTO ALTO DE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'EVEN034',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  330 =>
  array (
    'id' => 722,
    'nome' => 'VILLAGIO NOVA CARRÃO',
    'id_empresa' => 8,
    'referencia' => 'EVEN037',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  331 =>
  array (
    'id' => 723,
    'nome' => 'TAG EDITED',
    'id_empresa' => 8,
    'referencia' => 'VIT0019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  332 =>
  array (
    'id' => 724,
    'nome' => 'DESIGN CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EVEN039',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  333 =>
  array (
    'id' => 725,
    'nome' => 'CODE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EVEN038',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  334 =>
  array (
    'id' => 726,
    'nome' => 'ARTE ARQUITETURA PINHEIROS 1',
    'id_empresa' => 8,
    'referencia' => 'STAN07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  335 =>
  array (
    'id' => 727,
    'nome' => 'VALENCE PARQUE ',
    'id_empresa' => 8,
    'referencia' => 'PDG001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  336 =>
  array (
    'id' => 728,
    'nome' => 'MERIDIAN',
    'id_empresa' => 8,
    'referencia' => 'PDG002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  337 =>
  array (
    'id' => 729,
    'nome' => 'QUARTIER RESIDENCE',
    'id_empresa' => 8,
    'referencia' => 'PDG004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  338 =>
  array (
    'id' => 730,
    'nome' => 'PRAÇA MARAJOARA-NOVA SABARÁ',
    'id_empresa' => 8,
    'referencia' => 'PDG007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  339 =>
  array (
    'id' => 731,
    'nome' => 'LISSE RESIDENCE',
    'id_empresa' => 8,
    'referencia' => 'PDG008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  340 =>
  array (
    'id' => 732,
    'nome' => 'VIA EMA',
    'id_empresa' => 8,
    'referencia' => 'PDG009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  341 =>
  array (
    'id' => 733,
    'nome' => 'MAXI PIRITUBA',
    'id_empresa' => 8,
    'referencia' => 'PDG010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  342 =>
  array (
    'id' => 734,
    'nome' => 'PRIX PIRITUBA',
    'id_empresa' => 8,
    'referencia' => 'PDG011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  343 =>
  array (
    'id' => 735,
    'nome' => 'VENIT',
    'id_empresa' => 8,
    'referencia' => 'PDG012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  344 =>
  array (
    'id' => 736,
    'nome' => 'THE VIEW ANALIA FRANCO',
    'id_empresa' => 8,
    'referencia' => 'PDG013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  345 =>
  array (
    'id' => 737,
    'nome' => 'VL. NOVA LEOPOLDINA',
    'id_empresa' => 8,
    'referencia' => 'PDG014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  346 =>
  array (
    'id' => 738,
    'nome' => 'RES.PARQUE DOS PASSAROS',
    'id_empresa' => 8,
    'referencia' => 'PDG015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  347 =>
  array (
    'id' => 739,
    'nome' => 'DNA FARIA LIMA',
    'id_empresa' => 8,
    'referencia' => 'LUCIO001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  348 =>
  array (
    'id' => 740,
    'nome' => 'NKSP',
    'id_empresa' => 8,
    'referencia' => 'LUCIO002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  349 =>
  array (
    'id' => 741,
    'nome' => 'VISION CAPOTE VALENTE',
    'id_empresa' => 8,
    'referencia' => 'GAF021',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  350 =>
  array (
    'id' => 742,
    'nome' => 'SMART VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'GAF022',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  351 =>
  array (
    'id' => 743,
    'nome' => 'SMART SANTA CECILIA',
    'id_empresa' => 8,
    'referencia' => 'GAF023',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  352 =>
  array (
    'id' => 744,
    'nome' => 'MAISON ARTISAN',
    'id_empresa' => 8,
    'referencia' => 'PDG016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  353 =>
  array (
    'id' => 745,
    'nome' => 'SPLENDOR IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  354 =>
  array (
    'id' => 746,
    'nome' => 'CONDOMINIO ARENA',
    'id_empresa' => 8,
    'referencia' => 'PDG017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  355 =>
  array (
    'id' => 747,
    'nome' => 'MÁXIMO NOVA SAUDE',
    'id_empresa' => 8,
    'referencia' => 'EZTEC06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  356 =>
  array (
    'id' => 748,
    'nome' => 'SKY CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EZTEC01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  357 =>
  array (
    'id' => 749,
    'nome' => 'STILL VILA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'EZTEC02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  358 =>
  array (
    'id' => 750,
    'nome' => 'BRAZILIANO',
    'id_empresa' => 8,
    'referencia' => 'EZTEC03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  359 =>
  array (
    'id' => 751,
    'nome' => 'SPLENDOR VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  360 =>
  array (
    'id' => 752,
    'nome' => 'THE VIEW NOVA ATLANTICA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  361 =>
  array (
    'id' => 753,
    'nome' => 'PERFETTO IBITIRAMA',
    'id_empresa' => 8,
    'referencia' => 'ARCH04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  362 =>
  array (
    'id' => 754,
    'nome' => 'MAXIMO VILA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'EZTEC09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  363 =>
  array (
    'id' => 755,
    'nome' => 'LE PREMIER PARAISO',
    'id_empresa' => 8,
    'referencia' => 'EZTEC10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  364 =>
  array (
    'id' => 756,
    'nome' => 'CHARME DA VILLA',
    'id_empresa' => 8,
    'referencia' => 'ESSER04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  365 =>
  array (
    'id' => 757,
    'nome' => 'VARANDA TATUAPÉ',
    'id_empresa' => 8,
    'referencia' => 'CYR027',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  366 =>
  array (
    'id' => 758,
    'nome' => 'GIARDINO SAN FELIPE',
    'id_empresa' => 8,
    'referencia' => 'EZTEC12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  367 =>
  array (
    'id' => 759,
    'nome' => 'PALAZZO SAN FELIPE',
    'id_empresa' => 8,
    'referencia' => 'EZTEC13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  368 =>
  array (
    'id' => 760,
    'nome' => 'IMMAGINATO CASA VERDE',
    'id_empresa' => 8,
    'referencia' => 'TRIS10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  369 =>
  array (
    'id' => 761,
    'nome' => 'ATTITUDE HOME ',
    'id_empresa' => 8,
    'referencia' => 'ESSER07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  370 =>
  array (
    'id' => 762,
    'nome' => 'PREMIATTO SACOMÃ',
    'id_empresa' => 8,
    'referencia' => 'EZTEC11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  371 =>
  array (
    'id' => 763,
    'nome' => 'ONE SIXTY',
    'id_empresa' => 8,
    'referencia' => 'CYR028',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  372 =>
  array (
    'id' => 764,
    'nome' => 'QUADRILÁTERO SP',
    'id_empresa' => 8,
    'referencia' => 'TRIS11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  373 =>
  array (
    'id' => 765,
    'nome' => 'EXPANDE VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'TRIS12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  374 =>
  array (
    'id' => 766,
    'nome' => 'SCENA ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'GAF024',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  375 =>
  array (
    'id' => 767,
    'nome' => '067 HERMANN JR.',
    'id_empresa' => 8,
    'referencia' => 'GAF025',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  376 =>
  array (
    'id' => 768,
    'nome' => 'LINDEMBERG ITAIM',
    'id_empresa' => 8,
    'referencia' => 'LDI001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  377 =>
  array (
    'id' => 769,
    'nome' => 'HELBOR NUN VILA NOVA',
    'id_empresa' => 8,
    'referencia' => 'HELB04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  378 =>
  array (
    'id' => 770,
    'nome' => 'CYRELA CLASSIC LAPA',
    'id_empresa' => 8,
    'referencia' => 'CYR029',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  379 =>
  array (
    'id' => 771,
    'nome' => 'PEDRA FARIA LIMA',
    'id_empresa' => 8,
    'referencia' => 'AMY003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  380 =>
  array (
    'id' => 772,
    'nome' => 'OCA RESIDENCIAL MARACATINS',
    'id_empresa' => 8,
    'referencia' => 'AMY001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  381 =>
  array (
    'id' => 773,
    'nome' => 'OCA RESIDENCIAL MOEMA',
    'id_empresa' => 8,
    'referencia' => 'AMY002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  382 =>
  array (
    'id' => 774,
    'nome' => 'SCENARIUM BRAZ LEME',
    'id_empresa' => 8,
    'referencia' => 'TARJ01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  383 =>
  array (
    'id' => 775,
    'nome' => 'UP SAÚDE',
    'id_empresa' => 8,
    'referencia' => 'TARJ02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  384 =>
  array (
    'id' => 776,
    'nome' => 'HELBOR ART FARIA LIMA',
    'id_empresa' => 8,
    'referencia' => 'HELB06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  385 =>
  array (
    'id' => 777,
    'nome' => 'VILLAGGIO',
    'id_empresa' => 8,
    'referencia' => 'TARJ03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  386 =>
  array (
    'id' => 778,
    'nome' => 'NEO SAUDE',
    'id_empresa' => 8,
    'referencia' => 'TARJ04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  387 =>
  array (
    'id' => 779,
    'nome' => 'DUO MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'TISH001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  388 =>
  array (
    'id' => 780,
    'nome' => 'TREND HIGIENOPOLIS',
    'id_empresa' => 8,
    'referencia' => 'HELB05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  389 =>
  array (
    'id' => 781,
    'nome' => 'SPAZIO HELBOR',
    'id_empresa' => 8,
    'referencia' => 'HELB07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  390 =>
  array (
    'id' => 782,
    'nome' => 'LE VILLAGE CASA VERDE',
    'id_empresa' => 8,
    'referencia' => 'ESSER06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  391 =>
  array (
    'id' => 783,
    'nome' => 'VILA NOVA LUXURY HOME DESIGN',
    'id_empresa' => 8,
    'referencia' => 'TISH002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  392 =>
  array (
    'id' => 784,
    'nome' => 'MAIRARÊ RESERVA RAPOSO',
    'id_empresa' => 8,
    'referencia' => 'TISH003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  393 =>
  array (
    'id' => 785,
    'nome' => 'PICTURE SANTA CRUZ',
    'id_empresa' => 8,
    'referencia' => 'TARJ05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  394 =>
  array (
    'id' => 786,
    'nome' => 'OASIS BOSQUE DA SAÚDE',
    'id_empresa' => 8,
    'referencia' => 'TARJ06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  395 =>
  array (
    'id' => 787,
    'nome' => 'HARMONIA JABAQUARA',
    'id_empresa' => 8,
    'referencia' => 'TARJ07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  396 =>
  array (
    'id' => 788,
    'nome' => 'SOPHIS SANTANA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  397 =>
  array (
    'id' => 789,
    'nome' => 'YOU PÁTEO SANTA CRUZ',
    'id_empresa' => 8,
    'referencia' => 'YOU002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  398 =>
  array (
    'id' => 790,
    'nome' => 'YOU JARDIM PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'YOU001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  399 =>
  array (
    'id' => 791,
    'nome' => 'HUB BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'REITZ001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  400 =>
  array (
    'id' => 792,
    'nome' => 'STORIA VILA CLEMENTINO',
    'id_empresa' => 8,
    'referencia' => 'CYR012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  401 =>
  array (
    'id' => 793,
    'nome' => 'ESTAÇÃO GABRIELE',
    'id_empresa' => 8,
    'referencia' => 'ODBR05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  402 =>
  array (
    'id' => 794,
    'nome' => 'FATTO FAMILY CLUB',
    'id_empresa' => 8,
    'referencia' => 'PLANO005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  403 =>
  array (
    'id' => 795,
    'nome' => 'LESSENCE',
    'id_empresa' => 8,
    'referencia' => 'PDG006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  404 =>
  array (
    'id' => 796,
    'nome' => 'VILLA SOLARE',
    'id_empresa' => 8,
    'referencia' => 'CYR030',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  405 =>
  array (
    'id' => 797,
    'nome' => 'PORTALE MATTINO',
    'id_empresa' => 8,
    'referencia' => 'CYR031',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  406 =>
  array (
    'id' => 798,
    'nome' => 'VILLAGIO LUNA',
    'id_empresa' => 8,
    'referencia' => 'CYR032',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  407 =>
  array (
    'id' => 799,
    'nome' => 'SPAZIO LUME',
    'id_empresa' => 8,
    'referencia' => 'CYR033',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  408 =>
  array (
    'id' => 800,
    'nome' => 'RES. VILLAGE DEZE',
    'id_empresa' => 8,
    'referencia' => 'SEA117',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  409 =>
  array (
    'id' => 801,
    'nome' => 'COND. PLACE PIGALE',
    'id_empresa' => 8,
    'referencia' => 'SEA116',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  410 =>
  array (
    'id' => 802,
    'nome' => 'BELLACQUA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  411 =>
  array (
    'id' => 803,
    'nome' => 'RESIDENCIAL FASCINO',
    'id_empresa' => 8,
    'referencia' => 'PDG005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  412 =>
  array (
    'id' => 804,
    'nome' => 'YOU BOSQUE DA SAUDE',
    'id_empresa' => 8,
    'referencia' => 'YOU003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  413 =>
  array (
    'id' => 805,
    'nome' => 'YOU NOW BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'YOU004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  414 =>
  array (
    'id' => 806,
    'nome' => 'YOU VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'YOU005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  415 =>
  array (
    'id' => 807,
    'nome' => 'YOU IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'YOU006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  416 =>
  array (
    'id' => 808,
    'nome' => 'YOU PRIME ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'YOU007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  417 =>
  array (
    'id' => 809,
    'nome' => 'YOU NOW ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'YOU008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  418 =>
  array (
    'id' => 810,
    'nome' => 'YOU NOW CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'YOU009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  419 =>
  array (
    'id' => 811,
    'nome' => 'YOU PRIME VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'YOU010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  420 =>
  array (
    'id' => 812,
    'nome' => 'YOU GO VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'YOU011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  421 =>
  array (
    'id' => 813,
    'nome' => 'YOU NOW ALTO DA BOA VISTA',
    'id_empresa' => 8,
    'referencia' => 'YOU012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  422 =>
  array (
    'id' => 814,
    'nome' => 'NOW CHACARA SANTO ANTONIO',
    'id_empresa' => 8,
    'referencia' => 'YOU013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  423 =>
  array (
    'id' => 815,
    'nome' => 'YOU LINK SAUDE',
    'id_empresa' => 8,
    'referencia' => 'YOU014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  424 =>
  array (
    'id' => 816,
    'nome' => 'YOU SANTANA',
    'id_empresa' => 8,
    'referencia' => 'YOU015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  425 =>
  array (
    'id' => 817,
    'nome' => 'YOU PENHA',
    'id_empresa' => 8,
    'referencia' => 'YOU016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  426 =>
  array (
    'id' => 818,
    'nome' => 'YOU NEWTOWN',
    'id_empresa' => 8,
    'referencia' => 'YOU017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  427 =>
  array (
    'id' => 819,
    'nome' => 'YOU TUCURUVI',
    'id_empresa' => 8,
    'referencia' => 'YOU018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  428 =>
  array (
    'id' => 820,
    'nome' => 'YOU VILA FORMOSA',
    'id_empresa' => 8,
    'referencia' => 'YOU019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  429 =>
  array (
    'id' => 821,
    'nome' => 'YOU PARADA INGLESA',
    'id_empresa' => 8,
    'referencia' => 'YOU020',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  430 =>
  array (
    'id' => 822,
    'nome' => 'YOU VILA MARIA',
    'id_empresa' => 8,
    'referencia' => 'YOU021',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  431 =>
  array (
    'id' => 823,
    'nome' => 'YOU PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'YOU022',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  432 =>
  array (
    'id' => 824,
    'nome' => 'TREE MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'LIV001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  433 =>
  array (
    'id' => 825,
    'nome' => 'CASAVIVA',
    'id_empresa' => 8,
    'referencia' => 'BKO001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  434 =>
  array (
    'id' => 826,
    'nome' => 'COSMOPOLITAN HIGH GARDEN',
    'id_empresa' => 8,
    'referencia' => 'MAC001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  435 =>
  array (
    'id' => 827,
    'nome' => 'ARES DO PARQUE ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'MAC002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  436 =>
  array (
    'id' => 828,
    'nome' => 'VILLA VARANDA ',
    'id_empresa' => 8,
    'referencia' => 'MAC003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  437 =>
  array (
    'id' => 829,
    'nome' => 'CLASS VARANDA',
    'id_empresa' => 8,
    'referencia' => 'MAC004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  438 =>
  array (
    'id' => 830,
    'nome' => 'NOW ALTO DA BOA VISTA',
    'id_empresa' => 8,
    'referencia' => 'MAC005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  439 =>
  array (
    'id' => 831,
    'nome' => 'BOULEVARD LAPA',
    'id_empresa' => 8,
    'referencia' => 'MAC006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  440 =>
  array (
    'id' => 832,
    'nome' => 'ESTILO JARDINS',
    'id_empresa' => 8,
    'referencia' => 'MAC007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  441 =>
  array (
    'id' => 833,
    'nome' => 'BK30 SANTANA',
    'id_empresa' => 8,
    'referencia' => 'BKO003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  442 =>
  array (
    'id' => 834,
    'nome' => 'BK30 LARGO DO AROUCHE',
    'id_empresa' => 8,
    'referencia' => 'BKO005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  443 =>
  array (
    'id' => 835,
    'nome' => 'BKS SANTO ANTONIO',
    'id_empresa' => 8,
    'referencia' => 'BKO006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  444 =>
  array (
    'id' => 836,
    'nome' => 'YOU ZOOM PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'YOU023',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  445 =>
  array (
    'id' => 837,
    'nome' => 'YOU MARAJOARA',
    'id_empresa' => 8,
    'referencia' => 'YOU024',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  446 =>
  array (
    'id' => 838,
    'nome' => 'YOU BARRA SP',
    'id_empresa' => 8,
    'referencia' => 'YOU025',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  447 =>
  array (
    'id' => 839,
    'nome' => 'CYRELA GRAN CYPRIANI',
    'id_empresa' => 8,
    'referencia' => 'CYR034',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  448 =>
  array (
    'id' => 840,
    'nome' => 'VILLA SÃO PAULO ',
    'id_empresa' => 8,
    'referencia' => 'QGDI02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  449 =>
  array (
    'id' => 841,
    'nome' => 'PAULISTANO',
    'id_empresa' => 8,
    'referencia' => 'ROSSI001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  450 =>
  array (
    'id' => 842,
    'nome' => 'RES. PAULISTANO',
    'id_empresa' => 8,
    'referencia' => 'ROSSI002 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  451 =>
  array (
    'id' => 843,
    'nome' => 'ROSSI ESTILO MOOCA',
    'id_empresa' => 8,
    'referencia' => 'ROSSI003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  452 =>
  array (
    'id' => 844,
    'nome' => 'ITAPETI 792',
    'id_empresa' => 8,
    'referencia' => 'ROSSI004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  453 =>
  array (
    'id' => 845,
    'nome' => 'ROSSI ATUAL ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'ROSSI006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  454 =>
  array (
    'id' => 846,
    'nome' => 'ROSSI MAIS RESERVA JAGUARÉ',
    'id_empresa' => 8,
    'referencia' => 'ROSSI005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  455 =>
  array (
    'id' => 847,
    'nome' => 'COSMOPOLITAN SANTA CECÍLIA',
    'id_empresa' => 8,
    'referencia' => 'MAC008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  456 =>
  array (
    'id' => 848,
    'nome' => 'COSMOPOLITAN HIGIENOPOLIS',
    'id_empresa' => 8,
    'referencia' => 'MAC009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  457 =>
  array (
    'id' => 849,
    'nome' => 'NOW STUDIOS IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'MAC010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  458 =>
  array (
    'id' => 850,
    'nome' => 'NEW RESIDENCE IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'MAC011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  459 =>
  array (
    'id' => 851,
    'nome' => 'PASSEIO DO BOSQUE',
    'id_empresa' => 8,
    'referencia' => 'MAC012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  460 =>
  array (
    'id' => 852,
    'nome' => 'VARANDA BOTANIC',
    'id_empresa' => 8,
    'referencia' => 'MAC013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  461 =>
  array (
    'id' => 853,
    'nome' => 'ITACEMA PROJECT',
    'id_empresa' => 8,
    'referencia' => 'UPCON11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  462 =>
  array (
    'id' => 854,
    'nome' => 'CHEZ PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'UPCON10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  463 =>
  array (
    'id' => 855,
    'nome' => 'QUADRA VILA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'EVEN020',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  464 =>
  array (
    'id' => 856,
    'nome' => 'LIKE ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'GAF026',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  465 =>
  array (
    'id' => 857,
    'nome' => 'REFERENCE ',
    'id_empresa' => 8,
    'referencia' => 'HELB08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  466 =>
  array (
    'id' => 858,
    'nome' => 'ONE ELEVEN BY HOME',
    'id_empresa' => 8,
    'referencia' => 'HELB09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  467 =>
  array (
    'id' => 859,
    'nome' => 'ONE ELEVEN BY WORK',
    'id_empresa' => 8,
    'referencia' => 'HELB10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  468 =>
  array (
    'id' => 860,
    'nome' => 'SUMMIT',
    'id_empresa' => 8,
    'referencia' => 'AAM005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  469 =>
  array (
    'id' => 861,
    'nome' => 'VERSATILLE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'AAM014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  470 =>
  array (
    'id' => 862,
    'nome' => 'VENTURI RESIDENCIAL',
    'id_empresa' => 8,
    'referencia' => 'PDG018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  471 =>
  array (
    'id' => 863,
    'nome' => 'ADRESSE GUARULHOS',
    'id_empresa' => 8,
    'referencia' => 'PDG019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  472 =>
  array (
    'id' => 864,
    'nome' => 'MAGNÍFICO MOOCA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  473 =>
  array (
    'id' => 865,
    'nome' => 'DOLCE VILLA',
    'id_empresa' => 8,
    'referencia' => 'TEC009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  474 =>
  array (
    'id' => 866,
    'nome' => 'YOU ESTAÇÃO MADALENA',
    'id_empresa' => 8,
    'referencia' => 'YOU026 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  475 =>
  array (
    'id' => 867,
    'nome' => 'LE PREMIER MOEMA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC16',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  476 =>
  array (
    'id' => 868,
    'nome' => 'HIGH PARK ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'KALL01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  477 =>
  array (
    'id' => 869,
    'nome' => 'BE LIVE TATUAPE',
    'id_empresa' => 8,
    'referencia' => 'KALL04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  478 =>
  array (
    'id' => 870,
    'nome' => 'ON PANAMBY',
    'id_empresa' => 8,
    'referencia' => 'KALL05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  479 =>
  array (
    'id' => 871,
    'nome' => 'UNION MOOCA',
    'id_empresa' => 8,
    'referencia' => 'KALL06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  480 =>
  array (
    'id' => 872,
    'nome' => 'VISTA BELLA PENHA',
    'id_empresa' => 8,
    'referencia' => 'KALL07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  481 =>
  array (
    'id' => 873,
    'nome' => 'OGGI PENHA',
    'id_empresa' => 8,
    'referencia' => 'KALL08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  482 =>
  array (
    'id' => 874,
    'nome' => 'PERFIL SANTANA',
    'id_empresa' => 8,
    'referencia' => 'KALL09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  483 =>
  array (
    'id' => 875,
    'nome' => 'VL. NOVA MARIA',
    'id_empresa' => 8,
    'referencia' => 'KALL10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  484 =>
  array (
    'id' => 876,
    'nome' => 'HI GUACÁ',
    'id_empresa' => 8,
    'referencia' => 'GAF027',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  485 =>
  array (
    'id' => 877,
    'nome' => 'UP HOME VILA CARRÃO',
    'id_empresa' => 8,
    'referencia' => 'EZTEC17',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  486 =>
  array (
    'id' => 878,
    'nome' => 'MAXIMO VILA CARRÃO',
    'id_empresa' => 8,
    'referencia' => 'EZTEC18',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  487 =>
  array (
    'id' => 879,
    'nome' => 'GRAN VILLAGE VILA FORMOSA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC19',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  488 =>
  array (
    'id' => 880,
    'nome' => 'UP HOME SANTANA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC20',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  489 =>
  array (
    'id' => 881,
    'nome' => 'LINE',
    'id_empresa' => 8,
    'referencia' => 'TEC012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  490 =>
  array (
    'id' => 882,
    'nome' => 'FLEX SACOMÃ',
    'id_empresa' => 8,
    'referencia' => 'TEC013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  491 =>
  array (
    'id' => 883,
    'nome' => 'VOXY IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'TEC014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  492 =>
  array (
    'id' => 884,
    'nome' => 'LEVITÁ',
    'id_empresa' => 8,
    'referencia' => 'TEC015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  493 =>
  array (
    'id' => 885,
    'nome' => 'WIN',
    'id_empresa' => 8,
    'referencia' => 'ESSER08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  494 =>
  array (
    'id' => 886,
    'nome' => 'DESEO TATUAPÉ',
    'id_empresa' => 8,
    'referencia' => 'ESSER09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  495 =>
  array (
    'id' => 887,
    'nome' => 'CAPITAL BRÁS',
    'id_empresa' => 8,
    'referencia' => 'ESSER10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  496 =>
  array (
    'id' => 888,
    'nome' => 'ESSENCIS ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'ESSER11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  497 =>
  array (
    'id' => 889,
    'nome' => 'EMOTION MOOCA',
    'id_empresa' => 8,
    'referencia' => 'STAN08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  498 =>
  array (
    'id' => 890,
    'nome' => 'JARDINS DA CIDADE COND. CLUBE ',
    'id_empresa' => 8,
    'referencia' => 'STAN09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  499 =>
  array (
    'id' => 891,
    'nome' => 'SPACE ANALIA FRANCO',
    'id_empresa' => 8,
    'referencia' => 'TRIS13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  500 =>
  array (
    'id' => 892,
    'nome' => 'VIDA PLENA ITAQUERA',
    'id_empresa' => 8,
    'referencia' => 'TRIS14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  501 =>
  array (
    'id' => 893,
    'nome' => 'ACTION LIFE',
    'id_empresa' => 8,
    'referencia' => 'TRIS15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  502 =>
  array (
    'id' => 894,
    'nome' => 'MAGNIFIC SANTANA',
    'id_empresa' => 8,
    'referencia' => 'TRIS16',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  503 =>
  array (
    'id' => 895,
    'nome' => 'CONTEMPLARE VILA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'TRIS17',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  504 =>
  array (
    'id' => 896,
    'nome' => 'BE HAPPY',
    'id_empresa' => 8,
    'referencia' => 'TRIS18',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  505 =>
  array (
    'id' => 897,
    'nome' => 'SAX ITAIM',
    'id_empresa' => 8,
    'referencia' => 'TRIS19',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  506 =>
  array (
    'id' => 898,
    'nome' => 'IBIRAPUERA DIAMOND',
    'id_empresa' => 8,
    'referencia' => 'TRIS20',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  507 =>
  array (
    'id' => 899,
    'nome' => 'TERRAÇO VIVERE',
    'id_empresa' => 8,
    'referencia' => 'TRIS21',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  508 =>
  array (
    'id' => 900,
    'nome' => 'VIVART TRAMEMBÉ',
    'id_empresa' => 8,
    'referencia' => 'EZTEC21',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  509 =>
  array (
    'id' => 901,
    'nome' => 'CHATEAU MONET',
    'id_empresa' => 8,
    'referencia' => 'EZTEC22',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  510 =>
  array (
    'id' => 902,
    'nome' => 'TIMES POMPÉIA',
    'id_empresa' => 8,
    'referencia' => 'KALL11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  511 =>
  array (
    'id' => 903,
    'nome' => 'ALAMEDA COTEGIPE',
    'id_empresa' => 8,
    'referencia' => 'CYR035',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  512 =>
  array (
    'id' => 904,
    'nome' => 'LE CHAMP',
    'id_empresa' => 8,
    'referencia' => 'CYR036',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  513 =>
  array (
    'id' => 905,
    'nome' => 'PREMIERE ANALIA FRANCO',
    'id_empresa' => 8,
    'referencia' => 'CYR037',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  514 =>
  array (
    'id' => 906,
    'nome' => 'VILLA 156',
    'id_empresa' => 8,
    'referencia' => 'LDI002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  515 =>
  array (
    'id' => 907,
    'nome' => 'PETIT 327',
    'id_empresa' => 8,
    'referencia' => 'LDI003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  516 =>
  array (
    'id' => 908,
    'nome' => 'ARISTO TATUAPÉ',
    'id_empresa' => 8,
    'referencia' => 'LDI004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  517 =>
  array (
    'id' => 909,
    'nome' => 'HELBOR NEW TATUAPÉ  ',
    'id_empresa' => 8,
    'referencia' => 'HELB12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  518 =>
  array (
    'id' => 910,
    'nome' => 'BOULEVARD TATUAPÉ',
    'id_empresa' => 8,
    'referencia' => 'HELB13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  519 =>
  array (
    'id' => 911,
    'nome' => 'ORIGEM TATUAPÉ',
    'id_empresa' => 8,
    'referencia' => 'HELB11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  520 =>
  array (
    'id' => 912,
    'nome' => 'DOPPIO BY HELBOR',
    'id_empresa' => 8,
    'referencia' => 'HELB14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  521 =>
  array (
    'id' => 913,
    'nome' => 'HELBOR APTO CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'HELB15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  522 =>
  array (
    'id' => 914,
    'nome' => 'PARQUE DA SERRA',
    'id_empresa' => 8,
    'referencia' => 'KALL12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  523 =>
  array (
    'id' => 915,
    'nome' => 'TOM PARQUE SÃO DOMINGOS',
    'id_empresa' => 8,
    'referencia' => 'KALL13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  524 =>
  array (
    'id' => 916,
    'nome' => 'BOSQUE JARAGUÁ',
    'id_empresa' => 8,
    'referencia' => 'KALL14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  525 =>
  array (
    'id' => 917,
    'nome' => 'ARTSY ITAIM',
    'id_empresa' => 8,
    'referencia' => 'BENX02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  526 =>
  array (
    'id' => 918,
    'nome' => 'BE DESIGN ',
    'id_empresa' => 8,
    'referencia' => 'FIBRA001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  527 =>
  array (
    'id' => 919,
    'nome' => 'MEET SP',
    'id_empresa' => 8,
    'referencia' => 'FIBRA002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  528 =>
  array (
    'id' => 920,
    'nome' => 'ONZE 180 IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'FIBRA003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  529 =>
  array (
    'id' => 921,
    'nome' => 'PLACE MADALENA',
    'id_empresa' => 8,
    'referencia' => 'TRIS22',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  530 =>
  array (
    'id' => 922,
    'nome' => 'MOZAIK VILA SONIA',
    'id_empresa' => 8,
    'referencia' => 'BROOK01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  531 =>
  array (
    'id' => 923,
    'nome' => 'VIZ PONTE ESTAIADA',
    'id_empresa' => 8,
    'referencia' => 'BENX03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  532 =>
  array (
    'id' => 924,
    'nome' => 'GOODLIFE ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'YUNY01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  533 =>
  array (
    'id' => 925,
    'nome' => 'CLUB LIFE',
    'id_empresa' => 8,
    'referencia' => 'YUNY02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  534 =>
  array (
    'id' => 926,
    'nome' => 'INTERSECTION',
    'id_empresa' => 8,
    'referencia' => 'YUNY03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  535 =>
  array (
    'id' => 927,
    'nome' => 'URBANITY',
    'id_empresa' => 8,
    'referencia' => 'YUNY04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  536 =>
  array (
    'id' => 928,
    'nome' => 'CENTRAL DA BARRA ESTILO',
    'id_empresa' => 8,
    'referencia' => 'BENX04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  537 =>
  array (
    'id' => 929,
    'nome' => 'CENTRAL DA BARRA',
    'id_empresa' => 8,
    'referencia' => 'BENX005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  538 =>
  array (
    'id' => 930,
    'nome' => 'BARRA VIVA',
    'id_empresa' => 8,
    'referencia' => 'BENX006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  539 =>
  array (
    'id' => 931,
    'nome' => 'BARRA VISTA',
    'id_empresa' => 8,
    'referencia' => 'BENX007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  540 =>
  array (
    'id' => 932,
    'nome' => 'JUST BRIGADEIRO',
    'id_empresa' => 8,
    'referencia' => 'PM001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  541 =>
  array (
    'id' => 933,
    'nome' => 'FORME VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'PM002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  542 =>
  array (
    'id' => 934,
    'nome' => 'ROMANEÈ',
    'id_empresa' => 8,
    'referencia' => 'PM003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  543 =>
  array (
    'id' => 935,
    'nome' => 'PRAÇAS DA CIDADE- PRAÇA PIRATININGA',
    'id_empresa' => 8,
    'referencia' => 'LAVVI001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  544 =>
  array (
    'id' => 936,
    'nome' => 'BE PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'FIBRA004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  545 =>
  array (
    'id' => 937,
    'nome' => 'I AM TATUAPÉ LIFESTYLE',
    'id_empresa' => 8,
    'referencia' => 'FIBRA005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  546 =>
  array (
    'id' => 938,
    'nome' => 'ART CUBE ',
    'id_empresa' => 8,
    'referencia' => 'MDL005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  547 =>
  array (
    'id' => 939,
    'nome' => 'E-MOTION BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'BARB001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  548 =>
  array (
    'id' => 940,
    'nome' => 'LED BARRA FUNDA',
    'id_empresa' => 8,
    'referencia' => 'ODBR01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  549 =>
  array (
    'id' => 941,
    'nome' => 'LINK CAMBUCI',
    'id_empresa' => 8,
    'referencia' => 'REITZ002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  550 =>
  array (
    'id' => 942,
    'nome' => 'LANDSCAPE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'SHPAIS01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  551 =>
  array (
    'id' => 943,
    'nome' => 'IPEROIG 333',
    'id_empresa' => 8,
    'referencia' => 'SHPAIS02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  552 =>
  array (
    'id' => 944,
    'nome' => 'VHOUSE',
    'id_empresa' => 8,
    'referencia' => 'SISPAR1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  553 =>
  array (
    'id' => 945,
    'nome' => 'ABSOLUTO PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'ARQUI03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  554 =>
  array (
    'id' => 946,
    'nome' => 'FATTO JARDIM BOTANICO',
    'id_empresa' => 8,
    'referencia' => 'PLANO006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  555 =>
  array (
    'id' => 947,
    'nome' => 'SMILEY HOME RESORT',
    'id_empresa' => 8,
    'referencia' => 'BROOK02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  556 =>
  array (
    'id' => 948,
    'nome' => 'SPLENDOR BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'EZTEC23',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  557 =>
  array (
    'id' => 949,
    'nome' => 'DOURO',
    'id_empresa' => 8,
    'referencia' => 'MDL004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  558 =>
  array (
    'id' => 950,
    'nome' => 'ARAGUARI 561',
    'id_empresa' => 8,
    'referencia' => 'MDL006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  559 =>
  array (
    'id' => 951,
    'nome' => 'ZENITH',
    'id_empresa' => 8,
    'referencia' => 'GAF028',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  560 =>
  array (
    'id' => 952,
    'nome' => 'LINDEMBERG IGUATEMI',
    'id_empresa' => 8,
    'referencia' => 'LDI005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  561 =>
  array (
    'id' => 953,
    'nome' => 'LINDEMBERG ID ITAIM',
    'id_empresa' => 8,
    'referencia' => 'LDI006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  562 =>
  array (
    'id' => 954,
    'nome' => 'L ITAIM',
    'id_empresa' => 8,
    'referencia' => 'TRIS23',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  563 =>
  array (
    'id' => 955,
    'nome' => 'ARTE ARQUITETURA ITAIM',
    'id_empresa' => 8,
    'referencia' => 'STAN11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  564 =>
  array (
    'id' => 956,
    'nome' => 'CINDY & NAOMI ',
    'id_empresa' => 8,
    'referencia' => 'SEISA1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  565 =>
  array (
    'id' => 957,
    'nome' => 'BOSSANOVA',
    'id_empresa' => 8,
    'referencia' => 'BIESP9',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  566 =>
  array (
    'id' => 958,
    'nome' => 'OLYMPIA VISTA',
    'id_empresa' => 8,
    'referencia' => 'SEISA3',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  567 =>
  array (
    'id' => 959,
    'nome' => 'MAISON LA FRONTIERE',
    'id_empresa' => 8,
    'referencia' => 'HMTA002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  568 =>
  array (
    'id' => 960,
    'nome' => 'NOVA YORK PENTHOUSES',
    'id_empresa' => 8,
    'referencia' => 'BROOK03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  569 =>
  array (
    'id' => 961,
    'nome' => 'HOME DESIGN BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'BROOK06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  570 =>
  array (
    'id' => 962,
    'nome' => 'PANAMBY PENTHOUSES',
    'id_empresa' => 8,
    'referencia' => 'BROOK07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  571 =>
  array (
    'id' => 963,
    'nome' => 'HOME DESIGN IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'BROOK08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  572 =>
  array (
    'id' => 964,
    'nome' => 'LAS VENTANAS',
    'id_empresa' => 8,
    'referencia' => 'BROOK09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  573 =>
  array (
    'id' => 965,
    'nome' => 'YOU KLABIN',
    'id_empresa' => 8,
    'referencia' => 'YOU027',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  574 =>
  array (
    'id' => 966,
    'nome' => 'VOLTAIRE',
    'id_empresa' => 8,
    'referencia' => 'QGDI03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  575 =>
  array (
    'id' => 967,
    'nome' => 'LE KLABIN',
    'id_empresa' => 8,
    'referencia' => 'QGDI04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  576 =>
  array (
    'id' => 968,
    'nome' => 'LIMITED FUNCHAL',
    'id_empresa' => 8,
    'referencia' => 'YUNY08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  577 =>
  array (
    'id' => 969,
    'nome' => 'BENEDITO LAPIN',
    'id_empresa' => 8,
    'referencia' => 'JHSF04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  578 =>
  array (
    'id' => 970,
    'nome' => 'SPOT ALTO DA BOA VISTA',
    'id_empresa' => 8,
    'referencia' => 'LOGICA1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  579 =>
  array (
    'id' => 971,
    'nome' => 'TIRÉE ITAIM',
    'id_empresa' => 8,
    'referencia' => 'ZOGBI1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  580 =>
  array (
    'id' => 972,
    'nome' => 'FRAME VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'PM004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  581 =>
  array (
    'id' => 973,
    'nome' => 'MARK',
    'id_empresa' => 8,
    'referencia' => 'PM005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  582 =>
  array (
    'id' => 974,
    'nome' => 'MOMA',
    'id_empresa' => 8,
    'referencia' => 'JAFET01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  583 =>
  array (
    'id' => 975,
    'nome' => 'JADE JARDIM PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'CTRAC01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  584 =>
  array (
    'id' => 976,
    'nome' => 'SOUL JARDINS',
    'id_empresa' => 8,
    'referencia' => 'CTRAC02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  585 =>
  array (
    'id' => 977,
    'nome' => 'MN /15 IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'GAF029',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  586 =>
  array (
    'id' => 978,
    'nome' => 'SEED',
    'id_empresa' => 8,
    'referencia' => 'GMRO1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  587 =>
  array (
    'id' => 979,
    'nome' => 'EPIC',
    'id_empresa' => 8,
    'referencia' => 'CCDI002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  588 =>
  array (
    'id' => 980,
    'nome' => 'O2 JARDIM SUL',
    'id_empresa' => 8,
    'referencia' => 'CCDI003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  589 =>
  array (
    'id' => 981,
    'nome' => 'LIKE ALTO DA BOA VISTA',
    'id_empresa' => 8,
    'referencia' => 'GAF030',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  590 =>
  array (
    'id' => 982,
    'nome' => 'LEOPOLDO 695',
    'id_empresa' => 8,
    'referencia' => 'LDI008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  591 =>
  array (
    'id' => 983,
    'nome' => 'LONDON',
    'id_empresa' => 8,
    'referencia' => 'EZTEC24',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  592 =>
  array (
    'id' => 984,
    'nome' => 'VITA BOM RETIRO',
    'id_empresa' => 8,
    'referencia' => 'VIT0022',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  593 =>
  array (
    'id' => 985,
    'nome' => 'UP LIFE CONCEIÇÃO',
    'id_empresa' => 8,
    'referencia' => 'UPCON12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  594 =>
  array (
    'id' => 986,
    'nome' => 'UP STYLE BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'UPCON13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  595 =>
  array (
    'id' => 987,
    'nome' => 'VISTA CLEMENTINO',
    'id_empresa' => 8,
    'referencia' => 'TRIS24',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  596 =>
  array (
    'id' => 988,
    'nome' => 'ORIGEM VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'TRIS25',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  597 =>
  array (
    'id' => 989,
    'nome' => 'ILHA DO VERDE PENHA',
    'id_empresa' => 8,
    'referencia' => 'BROOK10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  598 =>
  array (
    'id' => 990,
    'nome' => 'NEW WAY',
    'id_empresa' => 8,
    'referencia' => 'BROOK11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  599 =>
  array (
    'id' => 991,
    'nome' => 'VANGUARDA- CAMINHOS DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'BROOK12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  600 =>
  array (
    'id' => 992,
    'nome' => 'VILA AMALFI',
    'id_empresa' => 8,
    'referencia' => 'BROOK13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  601 =>
  array (
    'id' => 993,
    'nome' => 'AMPLIFY MOEMA',
    'id_empresa' => 8,
    'referencia' => 'ZKF001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  602 =>
  array (
    'id' => 994,
    'nome' => 'NY LIVING',
    'id_empresa' => 8,
    'referencia' => 'ZKF002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  603 =>
  array (
    'id' => 995,
    'nome' => 'PAULISTÂNIA BOSQUE RESIDENCIAL',
    'id_empresa' => 8,
    'referencia' => 'CYR038',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  604 =>
  array (
    'id' => 996,
    'nome' => 'BELLE VUE ',
    'id_empresa' => 8,
    'referencia' => 'ZKF003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  605 =>
  array (
    'id' => 997,
    'nome' => 'PORTOVENERE',
    'id_empresa' => 8,
    'referencia' => 'ZKF004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  606 =>
  array (
    'id' => 998,
    'nome' => 'SPHERA KLABIN',
    'id_empresa' => 8,
    'referencia' => 'ZKF005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  607 =>
  array (
    'id' => 999,
    'nome' => 'IBIRAPUERA BOULEVARD',
    'id_empresa' => 8,
    'referencia' => 'MFRJ001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  608 =>
  array (
    'id' => 1000,
    'nome' => 'CADORO OFFICES',
    'id_empresa' => 8,
    'referencia' => 'BROOK14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  609 =>
  array (
    'id' => 1001,
    'nome' => 'ART WORK',
    'id_empresa' => 8,
    'referencia' => 'BROOK15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  610 =>
  array (
    'id' => 1002,
    'nome' => 'PRAÇA PAMPLONA',
    'id_empresa' => 8,
    'referencia' => 'BROOK16',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  611 =>
  array (
    'id' => 1003,
    'nome' => 'MARQUÊS BUSINESS CENTER',
    'id_empresa' => 8,
    'referencia' => 'BROOK17',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  612 =>
  array (
    'id' => 1004,
    'nome' => 'DESIGN OFFICE TOWER',
    'id_empresa' => 8,
    'referencia' => 'ESSER12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  613 =>
  array (
    'id' => 1005,
    'nome' => 'BELAUGUSTA ',
    'id_empresa' => 8,
    'referencia' => 'ESSER13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  614 =>
  array (
    'id' => 1006,
    'nome' => 'ATTITUDE OFFICES',
    'id_empresa' => 8,
    'referencia' => 'ESSER14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  615 =>
  array (
    'id' => 1007,
    'nome' => 'MAXHAUS VILA OLÍMPIA',
    'id_empresa' => 8,
    'referencia' => 'MAX001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  616 =>
  array (
    'id' => 1008,
    'nome' => 'MAXHAUS CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'MAX002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  617 =>
  array (
    'id' => 1009,
    'nome' => 'MAXHAUS BERRINI',
    'id_empresa' => 8,
    'referencia' => 'MAX003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  618 =>
  array (
    'id' => 1010,
    'nome' => 'MAXHAUS BLX',
    'id_empresa' => 8,
    'referencia' => 'MAX004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  619 =>
  array (
    'id' => 1011,
    'nome' => 'MAXHAUS PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'MAX005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  620 =>
  array (
    'id' => 1012,
    'nome' => 'MAXHAUS BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'MAX006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  621 =>
  array (
    'id' => 1013,
    'nome' => 'MAXHAUS ITAIM',
    'id_empresa' => 8,
    'referencia' => 'MAX007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  622 =>
  array (
    'id' => 1014,
    'nome' => 'TREND PAULISTA OFFICES',
    'id_empresa' => 8,
    'referencia' => 'EZTEC25',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  623 =>
  array (
    'id' => 1015,
    'nome' => 'NEO OFFICES ADOLFO PINHEIRO',
    'id_empresa' => 8,
    'referencia' => 'EZTEC26',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  624 =>
  array (
    'id' => 1016,
    'nome' => 'SUPÉRIA PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'EZTEC27',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  625 =>
  array (
    'id' => 1017,
    'nome' => 'NEO CORPORATE OFFICES',
    'id_empresa' => 8,
    'referencia' => 'EZTEC28',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  626 =>
  array (
    'id' => 1018,
    'nome' => 'PRAÇA BUTANTÃ',
    'id_empresa' => 8,
    'referencia' => 'EVEN004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  627 =>
  array (
    'id' => 1019,
    'nome' => 'JD DO JOCKEY',
    'id_empresa' => 8,
    'referencia' => 'BFONS01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  628 =>
  array (
    'id' => 1020,
    'nome' => 'BOTHÂNICA VILA SONIA',
    'id_empresa' => 8,
    'referencia' => 'LARE001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  629 =>
  array (
    'id' => 1021,
    'nome' => 'SIDE CHÁCARA SANTO ANTONIO',
    'id_empresa' => 8,
    'referencia' => 'NISS001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  630 =>
  array (
    'id' => 1022,
    'nome' => 'GENUÍNE HIGIENOPOLIS',
    'id_empresa' => 8,
    'referencia' => 'NISS002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  631 =>
  array (
    'id' => 1023,
    'nome' => 'ESSÊNCIA VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'NISS003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  632 =>
  array (
    'id' => 1024,
    'nome' => 'ATRIO VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'NISS004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  633 =>
  array (
    'id' => 1025,
    'nome' => 'PARK VIEW',
    'id_empresa' => 8,
    'referencia' => 'NISS005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  634 =>
  array (
    'id' => 1026,
    'nome' => 'INVITE KLABIN',
    'id_empresa' => 8,
    'referencia' => 'CAUC001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  635 =>
  array (
    'id' => 1027,
    'nome' => 'NOVAVILLA',
    'id_empresa' => 8,
    'referencia' => 'CAUC002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  636 =>
  array (
    'id' => 1028,
    'nome' => 'ABSOLUTE',
    'id_empresa' => 8,
    'referencia' => 'CAUC003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  637 =>
  array (
    'id' => 1029,
    'nome' => 'OPTION PARAISO',
    'id_empresa' => 8,
    'referencia' => 'CAUC004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  638 =>
  array (
    'id' => 1030,
    'nome' => 'CONTEMPORÂNEO',
    'id_empresa' => 8,
    'referencia' => 'CAUC005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  639 =>
  array (
    'id' => 1031,
    'nome' => 'SOBERANO',
    'id_empresa' => 8,
    'referencia' => 'TARJ08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  640 =>
  array (
    'id' => 1032,
    'nome' => 'UPPER SIDE ',
    'id_empresa' => 8,
    'referencia' => 'TAVI001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  641 =>
  array (
    'id' => 1033,
    'nome' => 'Cinque Terre Residenza',
    'id_empresa' => 8,
    'referencia' => 'SERG01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  642 =>
  array (
    'id' => 1034,
    'nome' => 'MONFORT',
    'id_empresa' => 8,
    'referencia' => 'MATH01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  643 =>
  array (
    'id' => 1035,
    'nome' => 'CHATEL & DIJON',
    'id_empresa' => 8,
    'referencia' => 'MATH02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  644 =>
  array (
    'id' => 1036,
    'nome' => 'SOUL JARDIM SUL',
    'id_empresa' => 8,
    'referencia' => 'CCDI006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  645 =>
  array (
    'id' => 1037,
    'nome' => 'FEEL JARDIM SUL',
    'id_empresa' => 8,
    'referencia' => 'CCDI007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  646 =>
  array (
    'id' => 1038,
    'nome' => 'MOB',
    'id_empresa' => 8,
    'referencia' => 'ECON001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  647 =>
  array (
    'id' => 1039,
    'nome' => 'MY SPACE CONCEIÇÃO',
    'id_empresa' => 8,
    'referencia' => 'TIB003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  648 =>
  array (
    'id' => 1040,
    'nome' => 'NEXT SÃO JUDAS',
    'id_empresa' => 8,
    'referencia' => 'TIB004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  649 =>
  array (
    'id' => 1041,
    'nome' => 'MY JOY SAÚDE',
    'id_empresa' => 8,
    'referencia' => 'TIB005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  650 =>
  array (
    'id' => 1042,
    'nome' => 'FACE VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'TIB002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  651 =>
  array (
    'id' => 1043,
    'nome' => 'INTENSE VILA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'TIB006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  652 =>
  array (
    'id' => 1044,
    'nome' => 'PRIVILEGE VILA MONUMENTO',
    'id_empresa' => 8,
    'referencia' => 'TIB007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  653 =>
  array (
    'id' => 1045,
    'nome' => 'CONNECT SACOMÃ ',
    'id_empresa' => 8,
    'referencia' => 'TIB008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  654 =>
  array (
    'id' => 1046,
    'nome' => 'HIGH ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'TIB009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  655 =>
  array (
    'id' => 1047,
    'nome' => 'PASSEIO VILA LEOPOLDINA',
    'id_empresa' => 8,
    'referencia' => 'TIB010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  656 =>
  array (
    'id' => 1048,
    'nome' => 'WAYS VILA SÔNIA',
    'id_empresa' => 8,
    'referencia' => 'TIB011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  657 =>
  array (
    'id' => 1049,
    'nome' => 'FLEX ANCHIETA',
    'id_empresa' => 8,
    'referencia' => 'TEC016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  658 =>
  array (
    'id' => 1050,
    'nome' => 'WONDER MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'ESSER15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  659 =>
  array (
    'id' => 1051,
    'nome' => 'GREEN POINT ',
    'id_empresa' => 8,
    'referencia' => 'FGF001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  660 =>
  array (
    'id' => 1052,
    'nome' => 'SAPHIR MORGADO DE MATEUS',
    'id_empresa' => 8,
    'referencia' => 'FRAIHA05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  661 =>
  array (
    'id' => 1053,
    'nome' => 'URBE PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'AAM001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  662 =>
  array (
    'id' => 1054,
    'nome' => 'MY SPACE BELA VISTA',
    'id_empresa' => 8,
    'referencia' => 'AAM002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  663 =>
  array (
    'id' => 1055,
    'nome' => 'HORIZONTE JK HOME',
    'id_empresa' => 8,
    'referencia' => 'AAM003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  664 =>
  array (
    'id' => 1056,
    'nome' => 'HORIZONTE JK OFFICES',
    'id_empresa' => 8,
    'referencia' => 'AAM004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  665 =>
  array (
    'id' => 1057,
    'nome' => 'ENGLAND VILA NOVA',
    'id_empresa' => 8,
    'referencia' => 'ZSJ001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  666 =>
  array (
    'id' => 1058,
    'nome' => 'MAISON LOUISE',
    'id_empresa' => 8,
    'referencia' => 'ZABO001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  667 =>
  array (
    'id' => 1059,
    'nome' => 'EXACT VILA NOVA',
    'id_empresa' => 8,
    'referencia' => 'ZABO002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  668 =>
  array (
    'id' => 1060,
    'nome' => 'RESERVA MANACÁ',
    'id_empresa' => 8,
    'referencia' => 'TEC017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  669 =>
  array (
    'id' => 1061,
    'nome' => 'BOSQUE ARAUCÁRIA',
    'id_empresa' => 8,
    'referencia' => 'TEC018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  670 =>
  array (
    'id' => 1062,
    'nome' => 'BOSQUE JEQUITIBÁ',
    'id_empresa' => 8,
    'referencia' => 'TEC019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  671 =>
  array (
    'id' => 1063,
    'nome' => 'MARQUISE IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'YUNY09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  672 =>
  array (
    'id' => 1064,
    'nome' => 'CLARIDGE',
    'id_empresa' => 8,
    'referencia' => 'RYAZB01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  673 =>
  array (
    'id' => 1065,
    'nome' => 'HEMISPHERE IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'AGRA001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  674 =>
  array (
    'id' => 1066,
    'nome' => 'SQUARE IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'GAF033',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  675 =>
  array (
    'id' => 1067,
    'nome' => 'MOOV FREGUESIA DO Ó',
    'id_empresa' => 8,
    'referencia' => 'GAF034',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  676 =>
  array (
    'id' => 1068,
    'nome' => 'MOOV ESTAÇÃO VILA PRUDENTE',
    'id_empresa' => 8,
    'referencia' => 'GAF035',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  677 =>
  array (
    'id' => 1069,
    'nome' => 'LIVING RESORT',
    'id_empresa' => 8,
    'referencia' => 'LIV004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  678 =>
  array (
    'id' => 1070,
    'nome' => 'LIVING WISH',
    'id_empresa' => 8,
    'referencia' => 'LIV003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  679 =>
  array (
    'id' => 1071,
    'nome' => 'FACE HOME LIFE',
    'id_empresa' => 8,
    'referencia' => 'CONX001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  680 =>
  array (
    'id' => 1072,
    'nome' => 'SPOTLIGHT CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'CONX002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  681 =>
  array (
    'id' => 1073,
    'nome' => 'MOMENTO VILA OLIMPIA ',
    'id_empresa' => 8,
    'referencia' => 'AGRE001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  682 =>
  array (
    'id' => 1074,
    'nome' => 'LE PAYSAGE IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'YUNY10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  683 =>
  array (
    'id' => 1075,
    'nome' => 'JC RESIDENCE',
    'id_empresa' => 8,
    'referencia' => 'STAN12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  684 =>
  array (
    'id' => 1076,
    'nome' => 'GUEDALA HOUSE',
    'id_empresa' => 8,
    'referencia' => 'STAN13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  685 =>
  array (
    'id' => 1077,
    'nome' => 'IGLOO VILA OLIMPIA',
    'id_empresa' => 8,
    'referencia' => 'BKO007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  686 =>
  array (
    'id' => 1078,
    'nome' => 'SET BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'BKO008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  687 =>
  array (
    'id' => 1079,
    'nome' => 'ARRUDA 168',
    'id_empresa' => 8,
    'referencia' => 'TEC021',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  688 =>
  array (
    'id' => 1080,
    'nome' => 'IN SP',
    'id_empresa' => 8,
    'referencia' => 'ATUA001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  689 =>
  array (
    'id' => 1081,
    'nome' => 'IN PARQUE BELÉM',
    'id_empresa' => 8,
    'referencia' => 'ATUA002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  690 =>
  array (
    'id' => 1082,
    'nome' => 'SELFIE SÃO PAULO',
    'id_empresa' => 8,
    'referencia' => 'ATUA003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  691 =>
  array (
    'id' => 1083,
    'nome' => 'IT HOME BELÉM',
    'id_empresa' => 8,
    'referencia' => 'ATUA004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  692 =>
  array (
    'id' => 1084,
    'nome' => 'NEW IN  ',
    'id_empresa' => 8,
    'referencia' => 'ECON002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  693 =>
  array (
    'id' => 1085,
    'nome' => 'BOTÂNICA',
    'id_empresa' => 8,
    'referencia' => 'ATUA005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  694 =>
  array (
    'id' => 1086,
    'nome' => 'ARTE ARQUITETURA JARDINS ',
    'id_empresa' => 8,
    'referencia' => 'STAN14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  695 =>
  array (
    'id' => 1087,
    'nome' => 'GRAND LOFT',
    'id_empresa' => 8,
    'referencia' => 'STAN15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  696 =>
  array (
    'id' => 1088,
    'nome' => 'LIFE IN ITAIM',
    'id_empresa' => 8,
    'referencia' => 'STAN16',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  697 =>
  array (
    'id' => 1089,
    'nome' => 'LIFE IN 2 ITAIM',
    'id_empresa' => 8,
    'referencia' => 'STAN17',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  698 =>
  array (
    'id' => 1090,
    'nome' => 'LOFT SÃO PAULO 2',
    'id_empresa' => 8,
    'referencia' => 'STAN18 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  699 =>
  array (
    'id' => 1091,
    'nome' => 'LOFT SÃO PAULO 3',
    'id_empresa' => 8,
    'referencia' => 'STAN19',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  700 =>
  array (
    'id' => 1092,
    'nome' => 'LOFT SÃO PAULO 4',
    'id_empresa' => 8,
    'referencia' => 'STAN20',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  701 =>
  array (
    'id' => 1093,
    'nome' => 'VILA BELA CINTRA',
    'id_empresa' => 8,
    'referencia' => 'STAN22',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  702 =>
  array (
    'id' => 1094,
    'nome' => 'LOFT SÃO PAULO 1',
    'id_empresa' => 8,
    'referencia' => 'STAN21',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  703 =>
  array (
    'id' => 1095,
    'nome' => 'GRAND LOFT 2',
    'id_empresa' => 8,
    'referencia' => 'STAN23',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  704 =>
  array (
    'id' => 1096,
    'nome' => 'PENINSULA',
    'id_empresa' => 8,
    'referencia' => 'BIESP10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  705 =>
  array (
    'id' => 1097,
    'nome' => 'SAINT REGIS',
    'id_empresa' => 8,
    'referencia' => 'BIESP11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  706 =>
  array (
    'id' => 1098,
    'nome' => 'SAINT PAUL',
    'id_empresa' => 8,
    'referencia' => 'BIESP12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  707 =>
  array (
    'id' => 1099,
    'nome' => 'QUASAR',
    'id_empresa' => 8,
    'referencia' => 'REV1001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  708 =>
  array (
    'id' => 1100,
    'nome' => 'THE PLACE MOEMA',
    'id_empresa' => 8,
    'referencia' => 'AAM005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  709 =>
  array (
    'id' => 1101,
    'nome' => 'LEGITIMO MOEMA',
    'id_empresa' => 8,
    'referencia' => 'REV1002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  710 =>
  array (
    'id' => 1102,
    'nome' => 'AVIS RARA',
    'id_empresa' => 8,
    'referencia' => 'FRAIHA06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  711 =>
  array (
    'id' => 1103,
    'nome' => 'ARTHÉ ',
    'id_empresa' => 8,
    'referencia' => 'FRAIHA07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  712 =>
  array (
    'id' => 1104,
    'nome' => 'LE VERT',
    'id_empresa' => 8,
    'referencia' => 'TRIS26',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  713 =>
  array (
    'id' => 1105,
    'nome' => 'GRAN PARK VILA NOVA',
    'id_empresa' => 8,
    'referencia' => 'ESSER16',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  714 =>
  array (
    'id' => 1106,
    'nome' => 'DOMANI MOEMA',
    'id_empresa' => 8,
    'referencia' => 'MAC015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  715 =>
  array (
    'id' => 1107,
    'nome' => 'DETAILS MOEMA',
    'id_empresa' => 8,
    'referencia' => 'GAF036',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  716 =>
  array (
    'id' => 1108,
    'nome' => 'VIVAI MOEMA ',
    'id_empresa' => 8,
    'referencia' => 'CYR040',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  717 =>
  array (
    'id' => 1109,
    'nome' => 'CONTEMPORÂNEO MOEMA',
    'id_empresa' => 8,
    'referencia' => 'CYR041',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  718 =>
  array (
    'id' => 1110,
    'nome' => 'HUMANARI',
    'id_empresa' => 8,
    'referencia' => 'CYR042',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  719 =>
  array (
    'id' => 1111,
    'nome' => 'MANDARIM',
    'id_empresa' => 8,
    'referencia' => 'CYR043',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  720 =>
  array (
    'id' => 1112,
    'nome' => 'LA PROMENADE MOEMA',
    'id_empresa' => 8,
    'referencia' => 'TRIS27',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  721 =>
  array (
    'id' => 1113,
    'nome' => 'CHATEAU DE BRISSAC',
    'id_empresa' => 8,
    'referencia' => 'RESULT02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  722 =>
  array (
    'id' => 1114,
    'nome' => 'SAINT LOUIS',
    'id_empresa' => 8,
    'referencia' => 'BIESP13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  723 =>
  array (
    'id' => 1115,
    'nome' => 'THE PARK MOEMA',
    'id_empresa' => 8,
    'referencia' => 'AAM006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  724 =>
  array (
    'id' => 1116,
    'nome' => 'THE BLUE LOFT',
    'id_empresa' => 8,
    'referencia' => 'MAC016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  725 =>
  array (
    'id' => 1117,
    'nome' => 'THE STAGE',
    'id_empresa' => 8,
    'referencia' => 'HELB16',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  726 =>
  array (
    'id' => 1118,
    'nome' => 'MOEMA OPEN VIEW',
    'id_empresa' => 8,
    'referencia' => 'REV1004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  727 =>
  array (
    'id' => 1119,
    'nome' => 'THE CORNER',
    'id_empresa' => 8,
    'referencia' => 'REV1005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  728 =>
  array (
    'id' => 1120,
    'nome' => 'BAUMAN JARDINS',
    'id_empresa' => 8,
    'referencia' => 'REV1006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  729 =>
  array (
    'id' => 1121,
    'nome' => 'MAISON DAPHNE',
    'id_empresa' => 8,
    'referencia' => 'ZABO014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  730 =>
  array (
    'id' => 1122,
    'nome' => 'MAISON CATHERINE',
    'id_empresa' => 8,
    'referencia' => 'ZABO003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  731 =>
  array (
    'id' => 1123,
    'nome' => 'MAISON CAMILLE',
    'id_empresa' => 8,
    'referencia' => 'ZABO004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  732 =>
  array (
    'id' => 1124,
    'nome' => 'MAISON SOPHIE',
    'id_empresa' => 8,
    'referencia' => 'ZABO005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  733 =>
  array (
    'id' => 1125,
    'nome' => 'MAISON JOSEPHINE ',
    'id_empresa' => 8,
    'referencia' => 'ZABO006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  734 =>
  array (
    'id' => 1126,
    'nome' => 'VOGUE MOEMA',
    'id_empresa' => 8,
    'referencia' => 'LARE002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  735 =>
  array (
    'id' => 1127,
    'nome' => 'MAISON JOLIE',
    'id_empresa' => 8,
    'referencia' => 'ZABO007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  736 =>
  array (
    'id' => 1128,
    'nome' => 'ED.RENATA',
    'id_empresa' => 8,
    'referencia' => 'ZABO008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  737 =>
  array (
    'id' => 1129,
    'nome' => 'MAISON VIVIANNE',
    'id_empresa' => 8,
    'referencia' => 'ZABO009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  738 =>
  array (
    'id' => 1130,
    'nome' => 'MAISON CHARLOTTE',
    'id_empresa' => 8,
    'referencia' => 'ZABO010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  739 =>
  array (
    'id' => 1131,
    'nome' => 'MAISON JACQUELINE',
    'id_empresa' => 8,
    'referencia' => 'ZABO011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  740 =>
  array (
    'id' => 1132,
    'nome' => 'MAISON MADELEINE',
    'id_empresa' => 8,
    'referencia' => 'ZABO012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  741 =>
  array (
    'id' => 1133,
    'nome' => 'MAISON MICHELLE',
    'id_empresa' => 8,
    'referencia' => 'ZABO013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  742 =>
  array (
    'id' => 1134,
    'nome' => 'LARMONIA',
    'id_empresa' => 8,
    'referencia' => 'ZABO015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  743 =>
  array (
    'id' => 1135,
    'nome' => 'MAISON ALINNE',
    'id_empresa' => 8,
    'referencia' => 'ZABO016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  744 =>
  array (
    'id' => 1136,
    'nome' => 'MAISON NATHALIE',
    'id_empresa' => 8,
    'referencia' => 'ZABO017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  745 =>
  array (
    'id' => 1137,
    'nome' => 'TENDENCY POMPEIA',
    'id_empresa' => 8,
    'referencia' => 'ZABO019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  746 =>
  array (
    'id' => 1138,
    'nome' => 'VISTA POMPÉIA',
    'id_empresa' => 8,
    'referencia' => 'REM001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  747 =>
  array (
    'id' => 1139,
    'nome' => 'VIVANTI VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'REM002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  748 =>
  array (
    'id' => 1140,
    'nome' => 'PRAÇA AIROSA',
    'id_empresa' => 8,
    'referencia' => 'REM003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  749 =>
  array (
    'id' => 1141,
    'nome' => 'BELLINI IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'BIESP14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  750 =>
  array (
    'id' => 1142,
    'nome' => 'METROPOLITAN',
    'id_empresa' => 8,
    'referencia' => 'TISH004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  751 =>
  array (
    'id' => 1143,
    'nome' => 'ART DECO',
    'id_empresa' => 8,
    'referencia' => 'RFM001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  752 =>
  array (
    'id' => 1144,
    'nome' => 'BEAUX ARTS',
    'id_empresa' => 8,
    'referencia' => 'BARB002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  753 =>
  array (
    'id' => 1145,
    'nome' => 'EVIDENCE',
    'id_empresa' => 8,
    'referencia' => 'GAF037',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  754 =>
  array (
    'id' => 1146,
    'nome' => 'E VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'EVEN006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  755 =>
  array (
    'id' => 1147,
    'nome' => 'MOEMA SIGNATURE',
    'id_empresa' => 8,
    'referencia' => 'EVEN008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  756 =>
  array (
    'id' => 1148,
    'nome' => 'SYNTHESIS PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'TRIS28',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  757 =>
  array (
    'id' => 1149,
    'nome' => 'MADRIGAL',
    'id_empresa' => 8,
    'referencia' => 'STAN24',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  758 =>
  array (
    'id' => 1150,
    'nome' => 'LINEA PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'EVEN010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  759 =>
  array (
    'id' => 1151,
    'nome' => 'NEW YORK CLUB',
    'id_empresa' => 8,
    'referencia' => 'AAM007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  760 =>
  array (
    'id' => 1152,
    'nome' => 'TRIBECA PERSONAL CLUB',
    'id_empresa' => 8,
    'referencia' => 'AAM008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  761 =>
  array (
    'id' => 1153,
    'nome' => 'PARADISO VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'BROOK18',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  762 =>
  array (
    'id' => 1154,
    'nome' => 'RESIDENCIAL FLORENÇA',
    'id_empresa' => 8,
    'referencia' => 'PGUIMA01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  763 =>
  array (
    'id' => 1155,
    'nome' => 'MERANO',
    'id_empresa' => 8,
    'referencia' => 'AAM009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  764 =>
  array (
    'id' => 1156,
    'nome' => 'PAYSAGE IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'AAM010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  765 =>
  array (
    'id' => 1157,
    'nome' => 'VINTAGE IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'AAM011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  766 =>
  array (
    'id' => 1158,
    'nome' => 'MONDO ITAIM',
    'id_empresa' => 8,
    'referencia' => 'AAM012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  767 =>
  array (
    'id' => 1159,
    'nome' => 'PAULISTA HOME RESORT',
    'id_empresa' => 8,
    'referencia' => 'AAM013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  768 =>
  array (
    'id' => 1160,
    'nome' => 'CLUB PARK BUTANTÃ',
    'id_empresa' => 8,
    'referencia' => 'EVEN011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  769 =>
  array (
    'id' => 1161,
    'nome' => 'CAMP LIFE ',
    'id_empresa' => 8,
    'referencia' => 'LUCIO004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  770 =>
  array (
    'id' => 1162,
    'nome' => 'ATMOSFERA VILA OLIMPIA',
    'id_empresa' => 8,
    'referencia' => 'CYR044',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  771 =>
  array (
    'id' => 1163,
    'nome' => 'HORIZONTES CIDADE UNIVERSITÁRIA',
    'id_empresa' => 8,
    'referencia' => 'CYR045',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  772 =>
  array (
    'id' => 1164,
    'nome' => 'VIVA JARDIM DO GOLF',
    'id_empresa' => 8,
    'referencia' => 'CYR046',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  773 =>
  array (
    'id' => 1165,
    'nome' => '360 TREZENTOS E SESSENTA GRAUS',
    'id_empresa' => 8,
    'referencia' => 'ZARV011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  774 =>
  array (
    'id' => 1166,
    'nome' => 'AUTORIA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'ALFA003 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  775 =>
  array (
    'id' => 1167,
    'nome' => 'JAZZ VILLA PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'ALFA002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  776 =>
  array (
    'id' => 1168,
    'nome' => 'YOU LINK PAULISTA ',
    'id_empresa' => 8,
    'referencia' => 'YOU028',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  777 =>
  array (
    'id' => 1169,
    'nome' => 'TENDENCIA BARRA FUNDA',
    'id_empresa' => 8,
    'referencia' => 'SETIN09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  778 =>
  array (
    'id' => 1170,
    'nome' => 'RESIDENCIAL CASA DAS CALDEIRAS',
    'id_empresa' => 8,
    'referencia' => 'SETIN10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  779 =>
  array (
    'id' => 1171,
    'nome' => 'VERDI ALTO DE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'ALFA005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  780 =>
  array (
    'id' => 1172,
    'nome' => 'FLORA HOUSE AND GARDEN',
    'id_empresa' => 8,
    'referencia' => 'MDL007 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  781 =>
  array (
    'id' => 1173,
    'nome' => 'IEPÊ GOLF CONDOMINIUM',
    'id_empresa' => 8,
    'referencia' => 'PDG020',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  782 =>
  array (
    'id' => 1174,
    'nome' => 'CIDADE JARDIM TOWNHOUSES',
    'id_empresa' => 8,
    'referencia' => 'JHSF05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  783 =>
  array (
    'id' => 1175,
    'nome' => 'BOTHANICA ALTO DE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'ALFA006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  784 =>
  array (
    'id' => 1176,
    'nome' => 'VANILLA HOUSE & GARDEN ',
    'id_empresa' => 8,
    'referencia' => 'ALFA007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  785 =>
  array (
    'id' => 1177,
    'nome' => 'RIVERSIDE',
    'id_empresa' => 8,
    'referencia' => 'ALFA008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  786 =>
  array (
    'id' => 1178,
    'nome' => 'CELEBRATION BARRA FUNDA',
    'id_empresa' => 8,
    'referencia' => 'MDL008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  787 =>
  array (
    'id' => 1179,
    'nome' => 'BELLE VUE ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'MDL009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  788 =>
  array (
    'id' => 1180,
    'nome' => 'MUND JARDIM DO GOLF',
    'id_empresa' => 8,
    'referencia' => 'INPAR01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  789 =>
  array (
    'id' => 1181,
    'nome' => 'RESERVA JACUTINGA',
    'id_empresa' => 8,
    'referencia' => 'GALLI001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  790 =>
  array (
    'id' => 1182,
    'nome' => 'ST. LEOPOLD',
    'id_empresa' => 8,
    'referencia' => 'SJ005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  791 =>
  array (
    'id' => 1183,
    'nome' => 'ST. BARTHS',
    'id_empresa' => 8,
    'referencia' => 'SJ006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  792 =>
  array (
    'id' => 1184,
    'nome' => 'ST. LOUIS',
    'id_empresa' => 8,
    'referencia' => 'SJ007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  793 =>
  array (
    'id' => 1185,
    'nome' => 'ST. PAUL',
    'id_empresa' => 8,
    'referencia' => 'SJ008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  794 =>
  array (
    'id' => 1186,
    'nome' => 'ST. PATRICK',
    'id_empresa' => 8,
    'referencia' => 'SJ009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  795 =>
  array (
    'id' => 1187,
    'nome' => 'ST. PETER',
    'id_empresa' => 8,
    'referencia' => 'SJ010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  796 =>
  array (
    'id' => 1188,
    'nome' => 'ST. PHILIP',
    'id_empresa' => 8,
    'referencia' => 'SJ011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  797 =>
  array (
    'id' => 1189,
    'nome' => 'ED.ARTUR RAMOS',
    'id_empresa' => 8,
    'referencia' => 'SJ012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  798 =>
  array (
    'id' => 1190,
    'nome' => 'WALK VILA NOVA',
    'id_empresa' => 8,
    'referencia' => 'TEC011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  799 =>
  array (
    'id' => 1191,
    'nome' => 'ARTS IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'EVEN12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  800 =>
  array (
    'id' => 1192,
    'nome' => 'PARAMOUNT IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'RYAZB02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  801 =>
  array (
    'id' => 1193,
    'nome' => 'PALAZZO DEL IMPERATORE',
    'id_empresa' => 8,
    'referencia' => 'KAUFF02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  802 =>
  array (
    'id' => 1194,
    'nome' => 'VILLA ADRIANA',
    'id_empresa' => 8,
    'referencia' => 'REV1007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  803 =>
  array (
    'id' => 1195,
    'nome' => 'IT STYLE HOME',
    'id_empresa' => 8,
    'referencia' => 'GAF008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  804 =>
  array (
    'id' => 1196,
    'nome' => 'SHANTI ITAIM ',
    'id_empresa' => 8,
    'referencia' => 'REV1008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  805 =>
  array (
    'id' => 1197,
    'nome' => 'ROMI 56 VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'LARE003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  806 =>
  array (
    'id' => 1198,
    'nome' => 'ESSENZA POMPEIA',
    'id_empresa' => 8,
    'referencia' => 'LARE004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  807 =>
  array (
    'id' => 1199,
    'nome' => 'UPSIDE VILA LEOPOLDINA',
    'id_empresa' => 8,
    'referencia' => 'LARE005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  808 =>
  array (
    'id' => 1200,
    'nome' => 'ACQUA VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'LARE006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  809 =>
  array (
    'id' => 1201,
    'nome' => 'MAISON DES ARTS',
    'id_empresa' => 8,
    'referencia' => 'AMY004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  810 =>
  array (
    'id' => 1202,
    'nome' => 'RITZ VILA NOVA',
    'id_empresa' => 8,
    'referencia' => 'AMY005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  811 =>
  array (
    'id' => 1203,
    'nome' => 'LA CONCORDE',
    'id_empresa' => 8,
    'referencia' => 'AMY006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  812 =>
  array (
    'id' => 1204,
    'nome' => 'MIRYADE',
    'id_empresa' => 8,
    'referencia' => 'AMY007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  813 =>
  array (
    'id' => 1205,
    'nome' => 'ECHELLES PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'AMY008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  814 =>
  array (
    'id' => 1206,
    'nome' => 'MAISON VICTOR HUGO',
    'id_empresa' => 8,
    'referencia' => 'AMY009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  815 =>
  array (
    'id' => 1207,
    'nome' => 'LE PARC ',
    'id_empresa' => 8,
    'referencia' => 'AMY011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  816 =>
  array (
    'id' => 1208,
    'nome' => 'LE BLANC',
    'id_empresa' => 8,
    'referencia' => 'AMY012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  817 =>
  array (
    'id' => 1209,
    'nome' => 'MAISON RENOIR',
    'id_empresa' => 8,
    'referencia' => 'AMY013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  818 =>
  array (
    'id' => 1210,
    'nome' => 'GEO BERRINI',
    'id_empresa' => 8,
    'referencia' => 'BIESP15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  819 =>
  array (
    'id' => 1211,
    'nome' => 'GRAND DIAMOND',
    'id_empresa' => 8,
    'referencia' => 'REV1009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  820 =>
  array (
    'id' => 1212,
    'nome' => 'STREET',
    'id_empresa' => 8,
    'referencia' => 'CEGG002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  821 =>
  array (
    'id' => 1213,
    'nome' => 'VOIR PARC ACLIMACAO',
    'id_empresa' => 8,
    'referencia' => 'CONAR01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  822 =>
  array (
    'id' => 1214,
    'nome' => 'VOIR IBIRAPUERA ',
    'id_empresa' => 8,
    'referencia' => 'CONAR02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  823 =>
  array (
    'id' => 1215,
    'nome' => 'EXT CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EXTO003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  824 =>
  array (
    'id' => 1216,
    'nome' => 'VILLAGGIO PANAMBY',
    'id_empresa' => 8,
    'referencia' => 'GAF038',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  825 =>
  array (
    'id' => 1217,
    'nome' => 'SELECTIVE MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'EXTO005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  826 =>
  array (
    'id' => 1218,
    'nome' => 'MERITE VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'EXTO006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  827 =>
  array (
    'id' => 1219,
    'nome' => 'PARC DEVANT',
    'id_empresa' => 8,
    'referencia' => 'EXTO007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  828 =>
  array (
    'id' => 1220,
    'nome' => 'RG DOMINGOS',
    'id_empresa' => 8,
    'referencia' => 'EXTO009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  829 =>
  array (
    'id' => 1221,
    'nome' => 'RG OSCAR',
    'id_empresa' => 8,
    'referencia' => 'EXTO008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  830 =>
  array (
    'id' => 1222,
    'nome' => 'EXT PRAÇA MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'EXTO010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  831 =>
  array (
    'id' => 1223,
    'nome' => 'VERDE MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'EXTO011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  832 =>
  array (
    'id' => 1224,
    'nome' => 'PERFIL MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'EXTO012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  833 =>
  array (
    'id' => 1225,
    'nome' => 'SENSE BOTANIC',
    'id_empresa' => 8,
    'referencia' => 'EXTO013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  834 =>
  array (
    'id' => 1226,
    'nome' => 'SCENE VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'EXTO015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  835 =>
  array (
    'id' => 1227,
    'nome' => 'PARC EXCLUSIF PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'EXTO014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  836 =>
  array (
    'id' => 1228,
    'nome' => 'PAESAGGIO VILLA LOBOS',
    'id_empresa' => 8,
    'referencia' => 'EXTO016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  837 =>
  array (
    'id' => 1229,
    'nome' => 'DON KLABIN ',
    'id_empresa' => 8,
    'referencia' => 'TXDUA01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  838 =>
  array (
    'id' => 1230,
    'nome' => 'QUARTIER CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'TXDUA02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  839 =>
  array (
    'id' => 1231,
    'nome' => 'RETRATO PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'TXDUA03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  840 =>
  array (
    'id' => 1232,
    'nome' => 'MYPLACE BRAZ LEME',
    'id_empresa' => 8,
    'referencia' => 'TXDUA04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  841 =>
  array (
    'id' => 1233,
    'nome' => 'SQUARE CHOICE SANTO AMARO',
    'id_empresa' => 8,
    'referencia' => 'GAF039',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  842 =>
  array (
    'id' => 1234,
    'nome' => 'PROVENANCE MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'EXTO017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  843 =>
  array (
    'id' => 1235,
    'nome' => 'BONJOUR',
    'id_empresa' => 8,
    'referencia' => 'SEQUO01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  844 =>
  array (
    'id' => 1236,
    'nome' => 'INSIDE PARK PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'CTRAC03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  845 =>
  array (
    'id' => 1237,
    'nome' => 'DUO DESIGN PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'DUO001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  846 =>
  array (
    'id' => 1238,
    'nome' => 'IQUALI AUGUSTA',
    'id_empresa' => 8,
    'referencia' => 'QDI02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  847 =>
  array (
    'id' => 1239,
    'nome' => 'AUGUSTA HYPE LIVING',
    'id_empresa' => 8,
    'referencia' => 'ARQUI05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  848 =>
  array (
    'id' => 1240,
    'nome' => 'UNIVERSO AUGUSTA',
    'id_empresa' => 8,
    'referencia' => 'SINCO01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  849 =>
  array (
    'id' => 1241,
    'nome' => 'ASTRE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'PM013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  850 =>
  array (
    'id' => 1242,
    'nome' => 'VITRE VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'PM007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  851 =>
  array (
    'id' => 1243,
    'nome' => 'LESPACE ',
    'id_empresa' => 8,
    'referencia' => 'PM008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  852 =>
  array (
    'id' => 1244,
    'nome' => 'QUARTIER PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'PM009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  853 =>
  array (
    'id' => 1245,
    'nome' => 'LE MARC',
    'id_empresa' => 8,
    'referencia' => 'PM010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  854 =>
  array (
    'id' => 1246,
    'nome' => 'LESPACE VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'PM011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  855 =>
  array (
    'id' => 1247,
    'nome' => 'LIEU',
    'id_empresa' => 8,
    'referencia' => 'PM012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  856 =>
  array (
    'id' => 1248,
    'nome' => 'VISTA PARQUE',
    'id_empresa' => 8,
    'referencia' => 'REM004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  857 =>
  array (
    'id' => 1249,
    'nome' => 'VERONE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'REM005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  858 =>
  array (
    'id' => 1250,
    'nome' => 'VISTA VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'REM007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  859 =>
  array (
    'id' => 1251,
    'nome' => 'VISTA PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'REM008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  860 =>
  array (
    'id' => 1252,
    'nome' => 'MATISSE',
    'id_empresa' => 8,
    'referencia' => 'REM006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  861 =>
  array (
    'id' => 1253,
    'nome' => 'TRILOGIE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'REM009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  862 =>
  array (
    'id' => 1254,
    'nome' => 'VISTA PACAEMBU',
    'id_empresa' => 8,
    'referencia' => 'REM010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  863 =>
  array (
    'id' => 1255,
    'nome' => 'MANSÃO RAVELLO',
    'id_empresa' => 8,
    'referencia' => 'REM011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  864 =>
  array (
    'id' => 1256,
    'nome' => 'ETOILE',
    'id_empresa' => 8,
    'referencia' => 'PM014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  865 =>
  array (
    'id' => 1257,
    'nome' => 'ATRIA',
    'id_empresa' => 8,
    'referencia' => 'PM015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  866 =>
  array (
    'id' => 1258,
    'nome' => 'VERANDA',
    'id_empresa' => 8,
    'referencia' => 'PM016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  867 =>
  array (
    'id' => 1259,
    'nome' => 'ART DE VIVRE',
    'id_empresa' => 8,
    'referencia' => 'PM017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  868 =>
  array (
    'id' => 1260,
    'nome' => 'BLANC',
    'id_empresa' => 8,
    'referencia' => 'PM018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  869 =>
  array (
    'id' => 1261,
    'nome' => 'PARALLELE',
    'id_empresa' => 8,
    'referencia' => 'PM019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  870 =>
  array (
    'id' => 1262,
    'nome' => 'AVANCE',
    'id_empresa' => 8,
    'referencia' => 'PM020',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  871 =>
  array (
    'id' => 1263,
    'nome' => 'LUMIERE',
    'id_empresa' => 8,
    'referencia' => 'PM021',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  872 =>
  array (
    'id' => 1264,
    'nome' => 'DOME',
    'id_empresa' => 8,
    'referencia' => 'PM022',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  873 =>
  array (
    'id' => 1265,
    'nome' => 'ST. JOHN',
    'id_empresa' => 8,
    'referencia' => 'PM023',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  874 =>
  array (
    'id' => 1266,
    'nome' => 'MONT PARC',
    'id_empresa' => 8,
    'referencia' => 'PM024',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  875 =>
  array (
    'id' => 1267,
    'nome' => 'BRISE',
    'id_empresa' => 8,
    'referencia' => 'PM025',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  876 =>
  array (
    'id' => 1268,
    'nome' => 'PREMIUM NEBRASKA',
    'id_empresa' => 8,
    'referencia' => 'PM026',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  877 =>
  array (
    'id' => 1269,
    'nome' => 'RESIDENCIAL DI MAURO',
    'id_empresa' => 8,
    'referencia' => 'REM012 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  878 =>
  array (
    'id' => 1270,
    'nome' => 'MAISON VERSAILLES',
    'id_empresa' => 8,
    'referencia' => 'REM013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  879 =>
  array (
    'id' => 1271,
    'nome' => 'YOU SENA MADUREIRA',
    'id_empresa' => 8,
    'referencia' => 'YOU029',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  880 =>
  array (
    'id' => 1272,
    'nome' => 'WAVE SAÚDE',
    'id_empresa' => 8,
    'referencia' => 'BKO009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  881 =>
  array (
    'id' => 1273,
    'nome' => 'HOME CLUB- CAMINHOS DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'BROOK20',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  882 =>
  array (
    'id' => 1274,
    'nome' => 'SPLENDIDO JARDIM DO GOLF',
    'id_empresa' => 8,
    'referencia' => 'CYR047',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  883 =>
  array (
    'id' => 1275,
    'nome' => 'AQUARELLE ',
    'id_empresa' => 8,
    'referencia' => 'MAC017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  884 =>
  array (
    'id' => 1276,
    'nome' => 'GRAND TOLLE ',
    'id_empresa' => 8,
    'referencia' => 'STAN27',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  885 =>
  array (
    'id' => 1277,
    'nome' => 'SCENA SANTANA',
    'id_empresa' => 8,
    'referencia' => 'GAF040',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  886 =>
  array (
    'id' => 1278,
    'nome' => 'PLANO&CAMBUCI',
    'id_empresa' => 8,
    'referencia' => 'PLANO007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  887 =>
  array (
    'id' => 1279,
    'nome' => 'VILA ARBORI',
    'id_empresa' => 8,
    'referencia' => 'PLANO008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  888 =>
  array (
    'id' => 1280,
    'nome' => 'CASA LEOPOLDINA',
    'id_empresa' => 8,
    'referencia' => 'PM027',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  889 =>
  array (
    'id' => 1281,
    'nome' => 'AIMBERE HOUSE',
    'id_empresa' => 8,
    'referencia' => 'WERTH01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  890 =>
  array (
    'id' => 1282,
    'nome' => 'TRIO PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'FORT001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  891 =>
  array (
    'id' => 1283,
    'nome' => 'ATTIMO TATUAPÉ',
    'id_empresa' => 8,
    'referencia' => 'SOLI004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  892 =>
  array (
    'id' => 1284,
    'nome' => 'YOU NOW SANTA CECILIA',
    'id_empresa' => 8,
    'referencia' => 'YOU030',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  893 =>
  array (
    'id' => 1285,
    'nome' => 'SUNDAY VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'ESSER17',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  894 =>
  array (
    'id' => 1286,
    'nome' => 'UP ONE VILA CARRÃO',
    'id_empresa' => 8,
    'referencia' => 'ONE001 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  895 =>
  array (
    'id' => 1287,
    'nome' => 'HOMECLUB CARRÃO',
    'id_empresa' => 8,
    'referencia' => 'TIB012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  896 =>
  array (
    'id' => 1288,
    'nome' => 'INFINITO BOSQUE DA SAUDE',
    'id_empresa' => 8,
    'referencia' => 'ONE002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  897 =>
  array (
    'id' => 1289,
    'nome' => 'RARISSIMO ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'ONE003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  898 =>
  array (
    'id' => 1290,
    'nome' => 'LIFE PARK IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'ONE004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  899 =>
  array (
    'id' => 1291,
    'nome' => 'TOP CLUB PLAZA',
    'id_empresa' => 8,
    'referencia' => 'ONE005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  900 =>
  array (
    'id' => 1292,
    'nome' => 'VIVA MOOCA',
    'id_empresa' => 8,
    'referencia' => 'ONE006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  901 =>
  array (
    'id' => 1293,
    'nome' => 'GIRO TATUAPE',
    'id_empresa' => 8,
    'referencia' => 'TIB013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  902 =>
  array (
    'id' => 1294,
    'nome' => 'QUINTA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'SINCO03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  903 =>
  array (
    'id' => 1295,
    'nome' => 'PRAÇA MADA',
    'id_empresa' => 8,
    'referencia' => 'SINCO02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  904 =>
  array (
    'id' => 1296,
    'nome' => 'SOULMADA',
    'id_empresa' => 8,
    'referencia' => 'PDG021',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  905 =>
  array (
    'id' => 1297,
    'nome' => 'VILA OLIMPIA OPEN',
    'id_empresa' => 8,
    'referencia' => 'TAEL01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  906 =>
  array (
    'id' => 1298,
    'nome' => 'CIX PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'VIT0014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  907 =>
  array (
    'id' => 1299,
    'nome' => 'PINTASSILGO 566',
    'id_empresa' => 8,
    'referencia' => 'TAVI003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  908 =>
  array (
    'id' => 1300,
    'nome' => 'DISENO ALTO DE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'EVEN013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  909 =>
  array (
    'id' => 1301,
    'nome' => 'ORCHARD',
    'id_empresa' => 8,
    'referencia' => 'STUHL001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  910 =>
  array (
    'id' => 1302,
    'nome' => 'VERMONT',
    'id_empresa' => 8,
    'referencia' => 'STUHL002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  911 =>
  array (
    'id' => 1303,
    'nome' => 'FIORI',
    'id_empresa' => 8,
    'referencia' => 'STUHL003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  912 =>
  array (
    'id' => 1304,
    'nome' => 'VENICE',
    'id_empresa' => 8,
    'referencia' => 'STUHL004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  913 =>
  array (
    'id' => 1305,
    'nome' => 'ICON ITAIM',
    'id_empresa' => 8,
    'referencia' => 'EVEN014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  914 =>
  array (
    'id' => 1306,
    'nome' => 'TRUST ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'TRUST01 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  915 =>
  array (
    'id' => 1307,
    'nome' => 'SYNC PRAÇA DA ÁRVORE',
    'id_empresa' => 8,
    'referencia' => 'ARCH05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  916 =>
  array (
    'id' => 1308,
    'nome' => 'SP NEXT HOME',
    'id_empresa' => 8,
    'referencia' => 'ESSER18',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  917 =>
  array (
    'id' => 1309,
    'nome' => 'PHD BARRA FUNDA',
    'id_empresa' => 8,
    'referencia' => 'ESSER19',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  918 =>
  array (
    'id' => 1310,
    'nome' => 'NEW JAZZ',
    'id_empresa' => 8,
    'referencia' => 'TEC022',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  919 =>
  array (
    'id' => 1311,
    'nome' => 'ARUÁ',
    'id_empresa' => 8,
    'referencia' => 'ZARV001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  920 =>
  array (
    'id' => 1312,
    'nome' => 'FLORA',
    'id_empresa' => 8,
    'referencia' => 'ZARV002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  921 =>
  array (
    'id' => 1313,
    'nome' => 'MIRÁ',
    'id_empresa' => 8,
    'referencia' => 'ZARV003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  922 =>
  array (
    'id' => 1314,
    'nome' => 'ARBOL',
    'id_empresa' => 8,
    'referencia' => 'ZARV004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  923 =>
  array (
    'id' => 1315,
    'nome' => 'BRISA',
    'id_empresa' => 8,
    'referencia' => 'ZARV005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  924 =>
  array (
    'id' => 1316,
    'nome' => 'POP MADALENA',
    'id_empresa' => 8,
    'referencia' => 'ZARV006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  925 =>
  array (
    'id' => 1317,
    'nome' => 'AZUL',
    'id_empresa' => 8,
    'referencia' => 'ZARV007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  926 =>
  array (
    'id' => 1318,
    'nome' => 'POP XYZ',
    'id_empresa' => 8,
    'referencia' => 'ZARV008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  927 =>
  array (
    'id' => 1319,
    'nome' => 'OITO',
    'id_empresa' => 8,
    'referencia' => 'ZARV009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  928 =>
  array (
    'id' => 1320,
    'nome' => 'OKA',
    'id_empresa' => 8,
    'referencia' => 'ZARV010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  929 =>
  array (
    'id' => 1321,
    'nome' => 'MANACÁ',
    'id_empresa' => 8,
    'referencia' => 'ALFA010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  930 =>
  array (
    'id' => 1322,
    'nome' => 'IN BERRINI',
    'id_empresa' => 8,
    'referencia' => 'CCDI008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  931 =>
  array (
    'id' => 1323,
    'nome' => 'VIVABENX VILA LEOPOLDINA',
    'id_empresa' => 8,
    'referencia' => 'BENX08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  932 =>
  array (
    'id' => 1324,
    'nome' => 'BELLA BONINA VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'TRIS29',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  933 =>
  array (
    'id' => 1325,
    'nome' => 'SPLENDOR IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC29',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  934 =>
  array (
    'id' => 1326,
    'nome' => 'SPLENDOR KLABIN',
    'id_empresa' => 8,
    'referencia' => 'EZTEC30',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  935 =>
  array (
    'id' => 1327,
    'nome' => 'PASCAL 1777',
    'id_empresa' => 8,
    'referencia' => 'SKR001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  936 =>
  array (
    'id' => 1328,
    'nome' => 'YOU FARIA LIMA',
    'id_empresa' => 8,
    'referencia' => 'YOU031',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  937 =>
  array (
    'id' => 1329,
    'nome' => 'MARQUÊS',
    'id_empresa' => 8,
    'referencia' => 'GAF041',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  938 =>
  array (
    'id' => 1330,
    'nome' => 'LONDON SP RESIDENCES',
    'id_empresa' => 8,
    'referencia' => 'EVEN015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  939 =>
  array (
    'id' => 1331,
    'nome' => 'DUET KLABIN',
    'id_empresa' => 8,
    'referencia' => 'LUCIO005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  940 =>
  array (
    'id' => 1332,
    'nome' => 'CENTRAL PARK PRIME',
    'id_empresa' => 8,
    'referencia' => 'LUCIO006 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  941 =>
  array (
    'id' => 1333,
    'nome' => 'PRAÇA DAS AGUAS',
    'id_empresa' => 8,
    'referencia' => 'LUCIO007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  942 =>
  array (
    'id' => 1334,
    'nome' => 'CENTRAL PARK MOOCA',
    'id_empresa' => 8,
    'referencia' => 'LUCIO008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  943 =>
  array (
    'id' => 1335,
    'nome' => 'MOVE VILA OLIMPIA',
    'id_empresa' => 8,
    'referencia' => 'BARB004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  944 =>
  array (
    'id' => 1336,
    'nome' => 'B103 BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'BARB003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  945 =>
  array (
    'id' => 1337,
    'nome' => 'IQUALI PEDROSO',
    'id_empresa' => 8,
    'referencia' => 'QDI03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  946 =>
  array (
    'id' => 1338,
    'nome' => 'Option Home Jardins',
    'id_empresa' => 8,
    'referencia' => 'ZATZ001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  947 =>
  array (
    'id' => 1339,
    'nome' => 'EDICAO PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'DIAL03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  948 =>
  array (
    'id' => 1340,
    'nome' => 'PALAZZO SAVOIA',
    'id_empresa' => 8,
    'referencia' => 'SEA102',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  949 =>
  array (
    'id' => 1341,
    'nome' => 'HERITAGE',
    'id_empresa' => 8,
    'referencia' => 'CYR048',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  950 =>
  array (
    'id' => 1342,
    'nome' => 'UNIQUE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'THINK01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  951 =>
  array (
    'id' => 1343,
    'nome' => 'BARRA PARK',
    'id_empresa' => 8,
    'referencia' => 'THINK02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  952 =>
  array (
    'id' => 1344,
    'nome' => 'FLEX SANTANA',
    'id_empresa' => 8,
    'referencia' => 'TEC023',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  953 =>
  array (
    'id' => 1345,
    'nome' => 'UP HOME VILA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'EZTEC31',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  954 =>
  array (
    'id' => 1346,
    'nome' => 'HELBOR ART PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'HELB17',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  955 =>
  array (
    'id' => 1347,
    'nome' => 'BLANC CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'SKR002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  956 =>
  array (
    'id' => 1348,
    'nome' => 'SUPREMO CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'GAF042',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  957 =>
  array (
    'id' => 1349,
    'nome' => 'MAISON ROYALE ',
    'id_empresa' => 8,
    'referencia' => 'MSB001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  958 =>
  array (
    'id' => 1350,
    'nome' => 'CAMPO BELISSIMO',
    'id_empresa' => 8,
    'referencia' => 'EVEN016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  959 =>
  array (
    'id' => 1351,
    'nome' => 'ATMOSPHERE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'HELB18',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  960 =>
  array (
    'id' => 1352,
    'nome' => 'ESPAÇO DAS ARTES',
    'id_empresa' => 8,
    'referencia' => 'REDVCO1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  961 =>
  array (
    'id' => 1353,
    'nome' => 'TRESOR MOEMA',
    'id_empresa' => 8,
    'referencia' => 'HELB19',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  962 =>
  array (
    'id' => 1354,
    'nome' => 'CENA GOLF RESIDENCE',
    'id_empresa' => 8,
    'referencia' => 'PDG022',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  963 =>
  array (
    'id' => 1355,
    'nome' => 'SOPHISTIC CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EVEN028',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  964 =>
  array (
    'id' => 1356,
    'nome' => 'DOUBLE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EVEN029',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  965 =>
  array (
    'id' => 1357,
    'nome' => 'PAÇO VENTURA ',
    'id_empresa' => 8,
    'referencia' => 'TINN001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  966 =>
  array (
    'id' => 1358,
    'nome' => 'TENDENCE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'HELB20',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  967 =>
  array (
    'id' => 1359,
    'nome' => 'DU CHAMP CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EVEN031',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  968 =>
  array (
    'id' => 1360,
    'nome' => 'GABRIELLE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EVEN032',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  969 =>
  array (
    'id' => 1361,
    'nome' => 'PARTICOLARE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'TISH005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  970 =>
  array (
    'id' => 1362,
    'nome' => 'LONDON BLUE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'BROOK22',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  971 =>
  array (
    'id' => 1363,
    'nome' => 'CODE ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'STC001 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  972 =>
  array (
    'id' => 1364,
    'nome' => 'BARÃO DO CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'HELB21',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  973 =>
  array (
    'id' => 1365,
    'nome' => 'PENSILVANIA BY HELBOR',
    'id_empresa' => 8,
    'referencia' => 'HELB22',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  974 =>
  array (
    'id' => 1366,
    'nome' => 'HELBOR LA RESERVE ',
    'id_empresa' => 8,
    'referencia' => 'HELB23',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  975 =>
  array (
    'id' => 1367,
    'nome' => 'BROOKLIN PARK SPA & CLUB',
    'id_empresa' => 8,
    'referencia' => 'BROOK23',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  976 =>
  array (
    'id' => 1368,
    'nome' => 'MUSTIQUE',
    'id_empresa' => 8,
    'referencia' => 'EZTEC32',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  977 =>
  array (
    'id' => 1369,
    'nome' => 'FLORIDA PENTHOUSES',
    'id_empresa' => 8,
    'referencia' => 'TISH006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  978 =>
  array (
    'id' => 1370,
    'nome' => 'CINQUO PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'UPCON14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  979 =>
  array (
    'id' => 1371,
    'nome' => 'MAISON LALIQUE',
    'id_empresa' => 8,
    'referencia' => 'REDVCO2',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  980 =>
  array (
    'id' => 1372,
    'nome' => 'SOPHIS IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC33',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  981 =>
  array (
    'id' => 1373,
    'nome' => 'LE PREMIER IBIRAPUERA PARC',
    'id_empresa' => 8,
    'referencia' => 'EZTEC34',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  982 =>
  array (
    'id' => 1374,
    'nome' => 'PARC MONDRIAN MOEMA',
    'id_empresa' => 8,
    'referencia' => 'LIDER01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  983 =>
  array (
    'id' => 1375,
    'nome' => 'LADRESSE  ',
    'id_empresa' => 8,
    'referencia' => 'BROOK24',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  984 =>
  array (
    'id' => 1376,
    'nome' => 'DIOGO HOME BOUTIQUE',
    'id_empresa' => 8,
    'referencia' => 'MAC018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  985 =>
  array (
    'id' => 1377,
    'nome' => 'UPSCALE',
    'id_empresa' => 8,
    'referencia' => 'BARB006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  986 =>
  array (
    'id' => 1378,
    'nome' => 'EDITION VILA NOVA',
    'id_empresa' => 8,
    'referencia' => 'HELB24',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  987 =>
  array (
    'id' => 1379,
    'nome' => 'PRAÇA DE MILÃO',
    'id_empresa' => 8,
    'referencia' => 'BARB007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  988 =>
  array (
    'id' => 1380,
    'nome' => 'THE FOUR SEASONS',
    'id_empresa' => 8,
    'referencia' => 'BARB009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  989 =>
  array (
    'id' => 1381,
    'nome' => 'ALTANA',
    'id_empresa' => 8,
    'referencia' => 'VIPAR01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  990 =>
  array (
    'id' => 1382,
    'nome' => 'VILA NOVA RESERVED',
    'id_empresa' => 8,
    'referencia' => 'TEC024',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  991 =>
  array (
    'id' => 1383,
    'nome' => 'VIVA CITTÁ ',
    'id_empresa' => 8,
    'referencia' => 'BROOK25',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  992 =>
  array (
    'id' => 1384,
    'nome' => 'CAMAROTTE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'CYR049',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  993 =>
  array (
    'id' => 1385,
    'nome' => 'ACQUARE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'BROOK26',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  994 =>
  array (
    'id' => 1386,
    'nome' => 'CRYSTAL CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'AKREA01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  995 =>
  array (
    'id' => 1387,
    'nome' => 'FASCINATION PENTHOUSES',
    'id_empresa' => 8,
    'referencia' => 'TISH007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  996 =>
  array (
    'id' => 1388,
    'nome' => 'VIDE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'PDG023',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  997 =>
  array (
    'id' => 1389,
    'nome' => 'LA ROCHE',
    'id_empresa' => 8,
    'referencia' => 'BARB010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  998 =>
  array (
    'id' => 1390,
    'nome' => 'LA GRAND ROCHE',
    'id_empresa' => 8,
    'referencia' => 'BARB011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  999 =>
  array (
    'id' => 1391,
    'nome' => 'PIAZZA DELLA FORTEZZA ',
    'id_empresa' => 8,
    'referencia' => 'PATRIM1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1000 =>
  array (
    'id' => 1392,
    'nome' => 'DELACROIX ',
    'id_empresa' => 8,
    'referencia' => 'BARB012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1001 =>
  array (
    'id' => 1393,
    'nome' => 'AVANT GARDE',
    'id_empresa' => 8,
    'referencia' => 'TEC025',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1002 =>
  array (
    'id' => 1394,
    'nome' => 'MURANO',
    'id_empresa' => 8,
    'referencia' => 'AMPRO01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1003 =>
  array (
    'id' => 1395,
    'nome' => 'LINDEMBERG MELO ALVES',
    'id_empresa' => 8,
    'referencia' => 'LDI009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1004 =>
  array (
    'id' => 1396,
    'nome' => 'DANTE ALIGUIERI',
    'id_empresa' => 8,
    'referencia' => 'EVNIGRI1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1005 =>
  array (
    'id' => 1397,
    'nome' => 'LE LOCLE JARDINS',
    'id_empresa' => 8,
    'referencia' => 'BROOK27',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1006 =>
  array (
    'id' => 1398,
    'nome' => 'LE CRILLON',
    'id_empresa' => 8,
    'referencia' => 'TEC026',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1007 =>
  array (
    'id' => 1399,
    'nome' => 'CIRAGAN',
    'id_empresa' => 8,
    'referencia' => 'CYR050',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1008 =>
  array (
    'id' => 1400,
    'nome' => 'VIA PAULISTA HOME STAY',
    'id_empresa' => 8,
    'referencia' => 'CYR051',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1009 =>
  array (
    'id' => 1401,
    'nome' => 'VIA IBIRAPUERA HOME STAY',
    'id_empresa' => 8,
    'referencia' => 'CYR052',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1010 =>
  array (
    'id' => 1402,
    'nome' => 'ACERVO ALTO DE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'TEC027',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1011 =>
  array (
    'id' => 1403,
    'nome' => 'DUO ALTO DE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'TISH008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1012 =>
  array (
    'id' => 1404,
    'nome' => 'LE OBELISQUE',
    'id_empresa' => 8,
    'referencia' => 'RYAZB03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1013 =>
  array (
    'id' => 1405,
    'nome' => 'DIAMANI IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'RYAZB04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1014 =>
  array (
    'id' => 1406,
    'nome' => 'LA TOUR',
    'id_empresa' => 8,
    'referencia' => 'RYAZB05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1015 =>
  array (
    'id' => 1407,
    'nome' => 'PALAIS DU PARC',
    'id_empresa' => 8,
    'referencia' => 'RYAZB06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1016 =>
  array (
    'id' => 1408,
    'nome' => 'ACROPOLIS',
    'id_empresa' => 8,
    'referencia' => 'BARB013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1017 =>
  array (
    'id' => 1409,
    'nome' => 'ONIX IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'RYAZB07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1018 =>
  array (
    'id' => 1410,
    'nome' => 'INFINITY IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'RYAZB08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1019 =>
  array (
    'id' => 1411,
    'nome' => 'POEME PARAISO',
    'id_empresa' => 8,
    'referencia' => 'RYAZB09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1020 =>
  array (
    'id' => 1412,
    'nome' => 'VICINO',
    'id_empresa' => 8,
    'referencia' => 'CTRAC04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1021 =>
  array (
    'id' => 1413,
    'nome' => 'ESSENTIALS VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'ROVIC01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1022 =>
  array (
    'id' => 1414,
    'nome' => 'BOSQUE DA ESTAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'ZOGBI2',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1023 =>
  array (
    'id' => 1415,
    'nome' => 'STUDIO AVANHANDAVA',
    'id_empresa' => 8,
    'referencia' => 'ZOGBI3',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1024 =>
  array (
    'id' => 1416,
    'nome' => 'TRADITION BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'SOBLO01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1025 =>
  array (
    'id' => 1417,
    'nome' => 'LE TEMPS CAMPO BELO ',
    'id_empresa' => 8,
    'referencia' => 'MSB002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1026 =>
  array (
    'id' => 1418,
    'nome' => 'VITTORIALE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'STAN28',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1027 =>
  array (
    'id' => 1419,
    'nome' => 'PIAZZA DART ',
    'id_empresa' => 8,
    'referencia' => 'PANAM01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1028 =>
  array (
    'id' => 1420,
    'nome' => 'PENTHOUSE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'AGRA002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1029 =>
  array (
    'id' => 1421,
    'nome' => 'VILLA TOSCANA ',
    'id_empresa' => 8,
    'referencia' => 'PANAM02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1030 =>
  array (
    'id' => 1422,
    'nome' => 'ELDORADO RESIDENCIAL BUTANTA',
    'id_empresa' => 8,
    'referencia' => 'TRIS30',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1031 =>
  array (
    'id' => 1423,
    'nome' => 'GIARDINO DI FIRENZE',
    'id_empresa' => 8,
    'referencia' => 'PANAM03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1032 =>
  array (
    'id' => 1424,
    'nome' => 'COSTA AMALFITANA',
    'id_empresa' => 8,
    'referencia' => 'PANAM04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1033 =>
  array (
    'id' => 1425,
    'nome' => 'VILLA VENETO',
    'id_empresa' => 8,
    'referencia' => 'PANAM05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1034 =>
  array (
    'id' => 1426,
    'nome' => 'ED.MARIANA',
    'id_empresa' => 8,
    'referencia' => 'SEISA2',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1035 =>
  array (
    'id' => 1427,
    'nome' => 'SMART VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'GAF043',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1036 =>
  array (
    'id' => 1428,
    'nome' => 'LANDSCAPE PANAMBY',
    'id_empresa' => 8,
    'referencia' => 'AMPROP1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1037 =>
  array (
    'id' => 1429,
    'nome' => 'ON THE PARK ',
    'id_empresa' => 8,
    'referencia' => 'CYR053',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1038 =>
  array (
    'id' => 1430,
    'nome' => 'WIDE PARQUE BURLE MARX',
    'id_empresa' => 8,
    'referencia' => 'CYR054',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1039 =>
  array (
    'id' => 1431,
    'nome' => 'ANAUÁ PANAMBY',
    'id_empresa' => 8,
    'referencia' => 'BKO010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1040 =>
  array (
    'id' => 1432,
    'nome' => 'MOSAIC ALTO DE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'BIANC01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1041 =>
  array (
    'id' => 1433,
    'nome' => 'WINNER FAMILY CLUB',
    'id_empresa' => 8,
    'referencia' => 'CHIRO01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1042 =>
  array (
    'id' => 1434,
    'nome' => 'CELEBRITY',
    'id_empresa' => 8,
    'referencia' => 'KAUFF01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1043 =>
  array (
    'id' => 1435,
    'nome' => 'VITTALIS ECO CLUB',
    'id_empresa' => 8,
    'referencia' => 'FORT001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1044 =>
  array (
    'id' => 1436,
    'nome' => 'CARDEAL 1720',
    'id_empresa' => 8,
    'referencia' => 'PLANIK1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1045 =>
  array (
    'id' => 1437,
    'nome' => 'COBOGO PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'GIP001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1046 =>
  array (
    'id' => 1438,
    'nome' => 'APE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'GIP002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1047 =>
  array (
    'id' => 1439,
    'nome' => 'LINE UP CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'TENE001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1048 =>
  array (
    'id' => 1440,
    'nome' => 'MONUMENTO SAO PAULO',
    'id_empresa' => 8,
    'referencia' => 'EVEN033',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1049 =>
  array (
    'id' => 1441,
    'nome' => 'LOAA CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EVEN034',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1050 =>
  array (
    'id' => 1442,
    'nome' => 'E SIDE VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'EVEN035',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1051 =>
  array (
    'id' => 1443,
    'nome' => 'BARAO305',
    'id_empresa' => 8,
    'referencia' => 'PM028',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1052 =>
  array (
    'id' => 1444,
    'nome' => 'FRADIK VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'ANTAR01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1053 =>
  array (
    'id' => 1445,
    'nome' => 'HOME STUDIO 47',
    'id_empresa' => 8,
    'referencia' => 'PGREG01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1054 =>
  array (
    'id' => 1446,
    'nome' => 'CADORO RESIDENCIAL',
    'id_empresa' => 8,
    'referencia' => 'BROOK28',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1055 =>
  array (
    'id' => 1447,
    'nome' => 'FIDALGA 800',
    'id_empresa' => 8,
    'referencia' => 'CPD001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1056 =>
  array (
    'id' => 1448,
    'nome' => 'WELCOME MASTER LIVING',
    'id_empresa' => 8,
    'referencia' => 'PATRIM2',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1057 =>
  array (
    'id' => 1449,
    'nome' => 'SOFISTIC VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'PATRIM3',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1058 =>
  array (
    'id' => 1450,
    'nome' => 'UN1CO ITAIM ',
    'id_empresa' => 8,
    'referencia' => 'META001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1059 =>
  array (
    'id' => 1451,
    'nome' => 'SPECIALE VILA OLIMPIA',
    'id_empresa' => 8,
    'referencia' => 'BENX09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1060 =>
  array (
    'id' => 1452,
    'nome' => 'SARANDI 54',
    'id_empresa' => 8,
    'referencia' => 'FELLER02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1061 =>
  array (
    'id' => 1453,
    'nome' => 'NORAH MOEMA',
    'id_empresa' => 8,
    'referencia' => 'PROJ001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1062 =>
  array (
    'id' => 1454,
    'nome' => 'NORAH HIGIENOPOLIS',
    'id_empresa' => 8,
    'referencia' => 'PROJ002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1063 =>
  array (
    'id' => 1455,
    'nome' => 'PRAÇA DANKMAR',
    'id_empresa' => 8,
    'referencia' => 'PROJ003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1064 =>
  array (
    'id' => 1456,
    'nome' => 'VANGUARDA PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'FELLER03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1065 =>
  array (
    'id' => 1457,
    'nome' => 'VANGUARDA JARDINS',
    'id_empresa' => 8,
    'referencia' => 'FELLER04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1066 =>
  array (
    'id' => 1458,
    'nome' => 'VANGUARDA MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'FELLER05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1067 =>
  array (
    'id' => 1459,
    'nome' => 'TREE TOP',
    'id_empresa' => 8,
    'referencia' => 'FELLER06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1068 =>
  array (
    'id' => 1460,
    'nome' => 'VAMPRE EXCLUSIVE',
    'id_empresa' => 8,
    'referencia' => 'FELLER07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1069 =>
  array (
    'id' => 1461,
    'nome' => 'OCA PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'POSI001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1070 =>
  array (
    'id' => 1462,
    'nome' => 'VERT CIDADE UNIVERSITARIA',
    'id_empresa' => 8,
    'referencia' => 'PDG024',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1071 =>
  array (
    'id' => 1463,
    'nome' => 'GARDEN HOME ',
    'id_empresa' => 8,
    'referencia' => 'CAMBUR1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1072 =>
  array (
    'id' => 1464,
    'nome' => 'JARDINS DE BALI',
    'id_empresa' => 8,
    'referencia' => 'ORBE001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1073 =>
  array (
    'id' => 1465,
    'nome' => 'INSIDE VILA OLIMPIA',
    'id_empresa' => 8,
    'referencia' => 'GLOBAL1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1074 =>
  array (
    'id' => 1466,
    'nome' => 'VN MELO ALVES',
    'id_empresa' => 8,
    'referencia' => 'VIT0023',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1075 =>
  array (
    'id' => 1467,
    'nome' => 'VN BELA CINTRA ',
    'id_empresa' => 8,
    'referencia' => 'VIT0024',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1076 =>
  array (
    'id' => 1468,
    'nome' => 'VN ALVORADA 1217',
    'id_empresa' => 8,
    'referencia' => 'VIT0025',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1077 =>
  array (
    'id' => 1469,
    'nome' => 'HELBOR SPAZIO CLUB',
    'id_empresa' => 8,
    'referencia' => 'HELB25',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1078 =>
  array (
    'id' => 1470,
    'nome' => 'HELBOR VIVERE IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'HELB26',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1079 =>
  array (
    'id' => 1471,
    'nome' => 'VN CAPOTE VALENTE ',
    'id_empresa' => 8,
    'referencia' => 'VIT0026',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1080 =>
  array (
    'id' => 1472,
    'nome' => 'VN FARIA LIMA',
    'id_empresa' => 8,
    'referencia' => 'VIT0027',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1081 =>
  array (
    'id' => 1473,
    'nome' => 'VN HUMBERTO',
    'id_empresa' => 8,
    'referencia' => 'VIT0028',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1082 =>
  array (
    'id' => 1474,
    'nome' => 'VITA IPIRANGA ',
    'id_empresa' => 8,
    'referencia' => 'VIT0029',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1083 =>
  array (
    'id' => 1475,
    'nome' => 'VN LOBÃO',
    'id_empresa' => 8,
    'referencia' => 'VIT0030',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1084 =>
  array (
    'id' => 1476,
    'nome' => 'GEO2288',
    'id_empresa' => 8,
    'referencia' => 'INK002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1085 =>
  array (
    'id' => 1477,
    'nome' => 'YRIS ',
    'id_empresa' => 8,
    'referencia' => 'LUCIO009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1086 =>
  array (
    'id' => 1478,
    'nome' => 'PISCINE STATION RESORT',
    'id_empresa' => 8,
    'referencia' => 'GMR02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1087 =>
  array (
    'id' => 1479,
    'nome' => 'PISCINE RESORT',
    'id_empresa' => 8,
    'referencia' => 'GMR03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1088 =>
  array (
    'id' => 1480,
    'nome' => 'SCENARIO',
    'id_empresa' => 8,
    'referencia' => 'DIAL06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1089 =>
  array (
    'id' => 1481,
    'nome' => 'VENTURA',
    'id_empresa' => 8,
    'referencia' => 'DIAL04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1090 =>
  array (
    'id' => 1482,
    'nome' => 'UNITA',
    'id_empresa' => 8,
    'referencia' => 'DIAL05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1091 =>
  array (
    'id' => 1483,
    'nome' => 'BRISE VERGUEIRO',
    'id_empresa' => 8,
    'referencia' => 'DIAL01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1092 =>
  array (
    'id' => 1484,
    'nome' => 'RESERVA SAUDE',
    'id_empresa' => 8,
    'referencia' => 'DIAL07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1093 =>
  array (
    'id' => 1485,
    'nome' => 'VEREDA SÃO PAULO',
    'id_empresa' => 8,
    'referencia' => 'DIAL08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1094 =>
  array (
    'id' => 1486,
    'nome' => 'PATEO KLABIN',
    'id_empresa' => 8,
    'referencia' => 'ACH001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1095 =>
  array (
    'id' => 1487,
    'nome' => 'SPACE VILA PRUDENTE',
    'id_empresa' => 8,
    'referencia' => 'ACH002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1096 =>
  array (
    'id' => 1488,
    'nome' => 'LES CHAMPS ',
    'id_empresa' => 8,
    'referencia' => 'MITRE005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1097 =>
  array (
    'id' => 1489,
    'nome' => 'RAIZES VILA MATILDE',
    'id_empresa' => 8,
    'referencia' => 'MITRE004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1098 =>
  array (
    'id' => 1490,
    'nome' => 'RITMO VILA GUILHERME',
    'id_empresa' => 8,
    'referencia' => 'MITRE003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1099 =>
  array (
    'id' => 1491,
    'nome' => 'EXCLUSIVE SANTANA',
    'id_empresa' => 8,
    'referencia' => 'MITRE001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1100 =>
  array (
    'id' => 1492,
    'nome' => 'UNICO SANTANA',
    'id_empresa' => 8,
    'referencia' => 'MITRE002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1101 =>
  array (
    'id' => 1493,
    'nome' => 'CURITIBA 381',
    'id_empresa' => 8,
    'referencia' => 'BROOK29',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1102 =>
  array (
    'id' => 1494,
    'nome' => 'MOOU',
    'id_empresa' => 8,
    'referencia' => 'SKR003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1103 =>
  array (
    'id' => 1495,
    'nome' => 'NOMAD',
    'id_empresa' => 8,
    'referencia' => 'SKR004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1104 =>
  array (
    'id' => 1496,
    'nome' => 'UNIK SAÚDE',
    'id_empresa' => 8,
    'referencia' => 'ATUA006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1105 =>
  array (
    'id' => 1497,
    'nome' => 'PLANO&MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'PLANO009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1106 =>
  array (
    'id' => 1498,
    'nome' => 'PLANO&PANAMBY',
    'id_empresa' => 8,
    'referencia' => 'PLANO010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1107 =>
  array (
    'id' => 1499,
    'nome' => 'VITRINE MOURATO',
    'id_empresa' => 8,
    'referencia' => 'AAM015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1108 =>
  array (
    'id' => 1500,
    'nome' => 'PENN TOWER',
    'id_empresa' => 8,
    'referencia' => 'RN001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1109 =>
  array (
    'id' => 1501,
    'nome' => 'VIVIER',
    'id_empresa' => 8,
    'referencia' => 'AAM016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1110 =>
  array (
    'id' => 1502,
    'nome' => 'SPOT 393',
    'id_empresa' => 8,
    'referencia' => 'ZARV012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1111 =>
  array (
    'id' => 1503,
    'nome' => 'SP4U ',
    'id_empresa' => 8,
    'referencia' => 'CTRAC05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1112 =>
  array (
    'id' => 1504,
    'nome' => 'ÊTRE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'EXTO018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1113 =>
  array (
    'id' => 1505,
    'nome' => 'UP VILLAGE ',
    'id_empresa' => 8,
    'referencia' => 'HELB27',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1114 =>
  array (
    'id' => 1506,
    'nome' => 'EXCLUSIVE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'EXTO019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1115 =>
  array (
    'id' => 1507,
    'nome' => 'EVIDENCE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'EXTO020',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1116 =>
  array (
    'id' => 1508,
    'nome' => 'HERITAGE HOMEM DE MELO',
    'id_empresa' => 8,
    'referencia' => 'EXTO021',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1117 =>
  array (
    'id' => 1509,
    'nome' => 'DUCATO PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'EXTO022 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1118 =>
  array (
    'id' => 1510,
    'nome' => 'RESERVA VERDE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'EXTO023',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1119 =>
  array (
    'id' => 1511,
    'nome' => 'VILLA REALE',
    'id_empresa' => 8,
    'referencia' => 'EXTO024',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1120 =>
  array (
    'id' => 1512,
    'nome' => 'CELEBRITIES JARDINS ',
    'id_empresa' => 8,
    'referencia' => 'EXTO025',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1121 =>
  array (
    'id' => 1513,
    'nome' => 'PALLADIO VN CONCEIÇÃO',
    'id_empresa' => 8,
    'referencia' => 'EXTO026 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1122 =>
  array (
    'id' => 1514,
    'nome' => 'VILLA DEI FIORI',
    'id_empresa' => 8,
    'referencia' => 'EXTO027',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1123 =>
  array (
    'id' => 1515,
    'nome' => 'EXCLUSIVE PACAEMBU',
    'id_empresa' => 8,
    'referencia' => 'EXTO028',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1124 =>
  array (
    'id' => 1516,
    'nome' => 'RESERVE DU PARC',
    'id_empresa' => 8,
    'referencia' => 'EXTO029',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1125 =>
  array (
    'id' => 1517,
    'nome' => 'PLACE ROYALE',
    'id_empresa' => 8,
    'referencia' => 'EXTO030',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1126 =>
  array (
    'id' => 1518,
    'nome' => 'ADESSO OFFICE PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'EXTO032',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1127 =>
  array (
    'id' => 1519,
    'nome' => 'ELEVÉ VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'SHPAIS06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1128 =>
  array (
    'id' => 1520,
    'nome' => 'ALTIER PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'SHPAIS07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1129 =>
  array (
    'id' => 1521,
    'nome' => 'NEXT KLABIN',
    'id_empresa' => 8,
    'referencia' => 'SHPAIS08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1130 =>
  array (
    'id' => 1522,
    'nome' => 'CHARMANT VILA NOVA',
    'id_empresa' => 8,
    'referencia' => 'FELLER08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1131 =>
  array (
    'id' => 1523,
    'nome' => 'VITRINE OFFICES POMPEIA',
    'id_empresa' => 8,
    'referencia' => 'EVEN036',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1132 =>
  array (
    'id' => 1524,
    'nome' => 'IN OFFICES PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'DOME001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1133 =>
  array (
    'id' => 1525,
    'nome' => 'IN OFFICES PARAISO',
    'id_empresa' => 8,
    'referencia' => 'DOME002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1134 =>
  array (
    'id' => 1526,
    'nome' => 'THINK BUSINESS CENTER',
    'id_empresa' => 8,
    'referencia' => 'THINK03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1135 =>
  array (
    'id' => 1527,
    'nome' => 'COMERCIAL CASA DAS CALDEIRAS',
    'id_empresa' => 8,
    'referencia' => 'SETIN11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1136 =>
  array (
    'id' => 1528,
    'nome' => 'LEAD OFFICES FARIA LIMA',
    'id_empresa' => 8,
    'referencia' => 'HELB28',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1137 =>
  array (
    'id' => 1529,
    'nome' => 'UP OFFICES BERRINI',
    'id_empresa' => 8,
    'referencia' => 'HELB29',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1138 =>
  array (
    'id' => 1530,
    'nome' => 'ROYAL ALTO DO IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'TRIS31',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1139 =>
  array (
    'id' => 1531,
    'nome' => 'HADDOCK OFFICES',
    'id_empresa' => 8,
    'referencia' => 'EVEN037',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1140 =>
  array (
    'id' => 1532,
    'nome' => 'ARCHITETTO',
    'id_empresa' => 8,
    'referencia' => 'TARJ09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1141 =>
  array (
    'id' => 1533,
    'nome' => 'FARIA LIMA OFFICES SQUARE',
    'id_empresa' => 8,
    'referencia' => 'YUNY11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1142 =>
  array (
    'id' => 1534,
    'nome' => 'TORRE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'EVEN038',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1143 =>
  array (
    'id' => 1535,
    'nome' => 'PAULISTA TOWER',
    'id_empresa' => 8,
    'referencia' => 'EVEN039',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1144 =>
  array (
    'id' => 1536,
    'nome' => 'ALAMEDA SANTOS CORPORATE',
    'id_empresa' => 8,
    'referencia' => 'EVEN040',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1145 =>
  array (
    'id' => 1537,
    'nome' => 'OSCAR FREIRE OFFICES',
    'id_empresa' => 8,
    'referencia' => 'EVEN041',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1146 =>
  array (
    'id' => 1538,
    'nome' => 'SPOT OFFICES MOEMA',
    'id_empresa' => 8,
    'referencia' => 'EVEN045',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1147 =>
  array (
    'id' => 1539,
    'nome' => 'PALM OFFICES PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'FGF001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1148 =>
  array (
    'id' => 1540,
    'nome' => 'ARQ ESCRITORIOS MOEMA',
    'id_empresa' => 8,
    'referencia' => 'EVEN042',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1149 =>
  array (
    'id' => 1541,
    'nome' => 'E.OFFICE DESIGN BERRINI',
    'id_empresa' => 8,
    'referencia' => 'EVEN043',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1150 =>
  array (
    'id' => 1542,
    'nome' => 'GC CORPORATE',
    'id_empresa' => 8,
    'referencia' => 'VIT0031',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1151 =>
  array (
    'id' => 1543,
    'nome' => 'VITA CORÁ',
    'id_empresa' => 8,
    'referencia' => 'VIT0032',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1152 =>
  array (
    'id' => 1544,
    'nome' => 'EVOLUTION PARAISO',
    'id_empresa' => 8,
    'referencia' => 'VIT0033',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1153 =>
  array (
    'id' => 1545,
    'nome' => 'GEO OFFICES  ',
    'id_empresa' => 8,
    'referencia' => 'EXTO033',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1154 =>
  array (
    'id' => 1546,
    'nome' => 'MURANO PARAISO',
    'id_empresa' => 8,
    'referencia' => 'ZOGBI4',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1155 =>
  array (
    'id' => 1547,
    'nome' => 'BOUTIQUE OFFICES',
    'id_empresa' => 8,
    'referencia' => 'YUNY12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1156 =>
  array (
    'id' => 1548,
    'nome' => 'LINDEMBERG TUTOIA',
    'id_empresa' => 8,
    'referencia' => 'LDI010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1157 =>
  array (
    'id' => 1549,
    'nome' => 'PARK ONE IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'ODBR07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1158 =>
  array (
    'id' => 1550,
    'nome' => 'TIME OFFICE & CORPORATE  ',
    'id_empresa' => 8,
    'referencia' => 'TEC028',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1159 =>
  array (
    'id' => 1551,
    'nome' => 'UNITED WORK',
    'id_empresa' => 8,
    'referencia' => 'YUNY13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1160 =>
  array (
    'id' => 1552,
    'nome' => 'URBANITY OFFICES & CORPORATE',
    'id_empresa' => 8,
    'referencia' => 'YUNY14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1161 =>
  array (
    'id' => 1553,
    'nome' => 'OFFICES NAÇÕES UNIDAS',
    'id_empresa' => 8,
    'referencia' => 'HELB30',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1162 =>
  array (
    'id' => 1554,
    'nome' => 'THERA OFFICE',
    'id_empresa' => 8,
    'referencia' => 'CYR055',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1163 =>
  array (
    'id' => 1555,
    'nome' => 'ESCRITORIOS MORUMBI PRIME ',
    'id_empresa' => 8,
    'referencia' => 'CYR056',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1164 =>
  array (
    'id' => 1556,
    'nome' => 'AF 377',
    'id_empresa' => 8,
    'referencia' => 'ALFA011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1165 =>
  array (
    'id' => 1557,
    'nome' => 'TRADEMARK FARIA LIMA',
    'id_empresa' => 8,
    'referencia' => 'ESSER20',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1166 =>
  array (
    'id' => 1558,
    'nome' => 'NEO OFFICES',
    'id_empresa' => 8,
    'referencia' => 'ESSER21',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1167 =>
  array (
    'id' => 1559,
    'nome' => 'METRÔ OFFICE & MALL',
    'id_empresa' => 8,
    'referencia' => 'ESSER22',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1168 =>
  array (
    'id' => 1560,
    'nome' => 'OFFICES VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'ESSER23',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1169 =>
  array (
    'id' => 1561,
    'nome' => 'SKYLINE INTELLIGENT BUSINESS',
    'id_empresa' => 8,
    'referencia' => 'QGDI05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1170 =>
  array (
    'id' => 1562,
    'nome' => 'ESSENZA ',
    'id_empresa' => 8,
    'referencia' => 'KLASEG1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1171 =>
  array (
    'id' => 1563,
    'nome' => 'NEW STATION VILA CLEMENTINO',
    'id_empresa' => 8,
    'referencia' => 'MAC019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1172 =>
  array (
    'id' => 1564,
    'nome' => 'PIAZZA DEL SOLE',
    'id_empresa' => 8,
    'referencia' => 'MC001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1173 =>
  array (
    'id' => 1565,
    'nome' => 'THE VIEW BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'EVEN044',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1174 =>
  array (
    'id' => 1566,
    'nome' => 'LUMEN BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'OBCIL01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1175 =>
  array (
    'id' => 1567,
    'nome' => 'THERA RESIDENCE BERRINI',
    'id_empresa' => 8,
    'referencia' => 'CYR057',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1176 =>
  array (
    'id' => 1568,
    'nome' => 'THERA OFFICE BERRINI',
    'id_empresa' => 8,
    'referencia' => 'CYR058',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1177 =>
  array (
    'id' => 1569,
    'nome' => 'MODERN HOUSE BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'FELLER09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1178 =>
  array (
    'id' => 1570,
    'nome' => 'DOMANI BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'PDG025',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1179 =>
  array (
    'id' => 1571,
    'nome' => 'CONNECTION BROOKLIN ',
    'id_empresa' => 8,
    'referencia' => 'PDG026',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1180 =>
  array (
    'id' => 1572,
    'nome' => 'UNIQUENESS',
    'id_empresa' => 8,
    'referencia' => 'BROOK30',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1181 =>
  array (
    'id' => 1573,
    'nome' => 'GRAND ART',
    'id_empresa' => 8,
    'referencia' => 'BROOK31',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1182 =>
  array (
    'id' => 1574,
    'nome' => 'RSVP',
    'id_empresa' => 8,
    'referencia' => 'ODBR08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1183 =>
  array (
    'id' => 1575,
    'nome' => 'CAYOWAA 412',
    'id_empresa' => 8,
    'referencia' => 'ODBR09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1184 =>
  array (
    'id' => 1576,
    'nome' => 'HOMENAGEM JAÇANA',
    'id_empresa' => 8,
    'referencia' => 'ODBR10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1185 =>
  array (
    'id' => 1577,
    'nome' => 'YOU TATUAPE BOULEVARD',
    'id_empresa' => 8,
    'referencia' => 'YOU032',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1186 =>
  array (
    'id' => 1578,
    'nome' => 'IS LIBERDADE ',
    'id_empresa' => 8,
    'referencia' => 'MAC020',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1187 =>
  array (
    'id' => 1579,
    'nome' => 'MIDTOWN PACAEMBU',
    'id_empresa' => 8,
    'referencia' => 'SETIN12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1188 =>
  array (
    'id' => 1580,
    'nome' => 'MIDTOWN PACAEMBU OFFICES',
    'id_empresa' => 8,
    'referencia' => 'SETIN13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1189 =>
  array (
    'id' => 1581,
    'nome' => 'BERRINI ONE',
    'id_empresa' => 8,
    'referencia' => 'BENX010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1190 =>
  array (
    'id' => 1582,
    'nome' => 'ED.TEODORO BUSINESS',
    'id_empresa' => 8,
    'referencia' => 'PEDRA03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1191 =>
  array (
    'id' => 1583,
    'nome' => 'ED.ARCOVERDE BUSINESS',
    'id_empresa' => 8,
    'referencia' => 'PEDRA04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1192 =>
  array (
    'id' => 1584,
    'nome' => 'ED.PINHEIROS BUSINESS',
    'id_empresa' => 8,
    'referencia' => 'PEDRA05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1193 =>
  array (
    'id' => 1585,
    'nome' => 'ED.TRIBECA',
    'id_empresa' => 8,
    'referencia' => 'PEDRA06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1194 =>
  array (
    'id' => 1586,
    'nome' => 'ARTE MADALENA',
    'id_empresa' => 8,
    'referencia' => 'PEDRA07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1195 =>
  array (
    'id' => 1587,
    'nome' => 'ED.CHELSEA',
    'id_empresa' => 8,
    'referencia' => 'PEDRA08',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1196 =>
  array (
    'id' => 1588,
    'nome' => 'ED.ARQ. JORGE PROUSHAN',
    'id_empresa' => 8,
    'referencia' => 'PEDRA09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1197 =>
  array (
    'id' => 1589,
    'nome' => 'ED. ANGELICA BUSINESS',
    'id_empresa' => 8,
    'referencia' => 'PEDRA10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1198 =>
  array (
    'id' => 1590,
    'nome' => 'NEW OFFICE AUGUSTA',
    'id_empresa' => 8,
    'referencia' => 'BRCORP2',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1199 =>
  array (
    'id' => 1591,
    'nome' => 'BREVE LANÇAMENTO',
    'id_empresa' => 8,
    'referencia' => 'UPCON16',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1200 =>
  array (
    'id' => 1592,
    'nome' => 'WONDERFUL ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'FIBRA006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1201 =>
  array (
    'id' => 1593,
    'nome' => 'LAS VILLAS IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'FIBRA007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1202 =>
  array (
    'id' => 1594,
    'nome' => 'RES. VISTA ALEGRE',
    'id_empresa' => 8,
    'referencia' => 'STAN25',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1203 =>
  array (
    'id' => 1595,
    'nome' => 'PRIVILEGE BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'DIAL09',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1204 =>
  array (
    'id' => 1596,
    'nome' => 'BROOKLIN TO LIVE',
    'id_empresa' => 8,
    'referencia' => 'ROSSI007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1205 =>
  array (
    'id' => 1597,
    'nome' => 'PRACTICAL LIFE BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'PTCL01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1206 =>
  array (
    'id' => 1598,
    'nome' => 'RES.SONATTA ',
    'id_empresa' => 8,
    'referencia' => 'JZM001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1207 =>
  array (
    'id' => 1599,
    'nome' => 'RES.TOCATTA',
    'id_empresa' => 8,
    'referencia' => 'JZM002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1208 =>
  array (
    'id' => 1600,
    'nome' => 'RES.SPALLA',
    'id_empresa' => 8,
    'referencia' => 'JZM003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1209 =>
  array (
    'id' => 1601,
    'nome' => 'VISION BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'GAF044',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1210 =>
  array (
    'id' => 1602,
    'nome' => 'CAPITAL CORPORATE OFFICES',
    'id_empresa' => 8,
    'referencia' => 'EZTEC35',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1211 =>
  array (
    'id' => 1603,
    'nome' => 'AFFINITY FOR WORK',
    'id_empresa' => 8,
    'referencia' => 'VIT0034',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1212 =>
  array (
    'id' => 1604,
    'nome' => 'OSCAR FREIRE DESIGN OFFICES',
    'id_empresa' => 8,
    'referencia' => 'VIT0035',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1213 =>
  array (
    'id' => 1605,
    'nome' => 'OSCAR FREIRE OFFICE BOUTIQUE ',
    'id_empresa' => 8,
    'referencia' => 'AKREA01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1214 =>
  array (
    'id' => 1606,
    'nome' => 'J330 JARDINS',
    'id_empresa' => 8,
    'referencia' => 'GAF045',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1215 =>
  array (
    'id' => 1607,
    'nome' => 'DEFINE HOME LIFE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'ROVIC02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1216 =>
  array (
    'id' => 1608,
    'nome' => 'TITO 19',
    'id_empresa' => 8,
    'referencia' => 'OFI001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1217 =>
  array (
    'id' => 1609,
    'nome' => 'LEGITTIMO VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC36',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1218 =>
  array (
    'id' => 1610,
    'nome' => 'HOMME LIFT',
    'id_empresa' => 8,
    'referencia' => 'ROVIC03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1219 =>
  array (
    'id' => 1611,
    'nome' => 'RAIZES DO PARQUE',
    'id_empresa' => 8,
    'referencia' => 'CAUC006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1220 =>
  array (
    'id' => 1612,
    'nome' => 'HORIZONTE VITAL BRASIL',
    'id_empresa' => 8,
    'referencia' => 'AAM017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1221 =>
  array (
    'id' => 1613,
    'nome' => 'SOUL PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'AAM018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1222 =>
  array (
    'id' => 1614,
    'nome' => 'BENEDITO PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'EVEN046',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1223 =>
  array (
    'id' => 1615,
    'nome' => 'PARC DES PRINCES',
    'id_empresa' => 8,
    'referencia' => 'HELB31',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1224 =>
  array (
    'id' => 1616,
    'nome' => 'MAISON CLASSIC',
    'id_empresa' => 8,
    'referencia' => 'ABACO01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1225 =>
  array (
    'id' => 1617,
    'nome' => 'FAMILIA MOOCA ',
    'id_empresa' => 8,
    'referencia' => 'BARB008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1226 =>
  array (
    'id' => 1618,
    'nome' => 'SPHERE CORPORATE OFFICES',
    'id_empresa' => 8,
    'referencia' => 'BARB014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1227 =>
  array (
    'id' => 1619,
    'nome' => 'THE VILA NOVA OFFICES',
    'id_empresa' => 8,
    'referencia' => 'BARB015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1228 =>
  array (
    'id' => 1620,
    'nome' => 'EVIDENCE OFFICES',
    'id_empresa' => 8,
    'referencia' => 'BARB016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1229 =>
  array (
    'id' => 1621,
    'nome' => 'TRADEMARK PACAEMBU',
    'id_empresa' => 8,
    'referencia' => 'ESSER24',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1230 =>
  array (
    'id' => 1622,
    'nome' => 'BALTHAZAR OFFICES',
    'id_empresa' => 8,
    'referencia' => 'BARB017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1231 =>
  array (
    'id' => 1623,
    'nome' => 'VILA NOVA OFFICES',
    'id_empresa' => 8,
    'referencia' => 'BARB018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1232 =>
  array (
    'id' => 1624,
    'nome' => 'LIBER 1000 OFFICES',
    'id_empresa' => 8,
    'referencia' => 'BARB019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1233 =>
  array (
    'id' => 1625,
    'nome' => 'KASA 99',
    'id_empresa' => 8,
    'referencia' => 'GMR05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1234 =>
  array (
    'id' => 1626,
    'nome' => 'ORBIT RESIDENCIAL',
    'id_empresa' => 8,
    'referencia' => 'TRIS32',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1235 =>
  array (
    'id' => 1627,
    'nome' => 'POESIA VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'TRIS33',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1236 =>
  array (
    'id' => 1628,
    'nome' => 'SUR LA SITÉ',
    'id_empresa' => 8,
    'referencia' => 'HELB32',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1237 =>
  array (
    'id' => 1629,
    'nome' => 'L ALTO PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'HELB33',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1238 =>
  array (
    'id' => 1630,
    'nome' => 'OFFICES IMPERATRIZ LEOPOLDINA',
    'id_empresa' => 8,
    'referencia' => 'HELB34',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1239 =>
  array (
    'id' => 1631,
    'nome' => 'SOHO OFFICES V. LEOPOLDINA',
    'id_empresa' => 8,
    'referencia' => 'EVEN045',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1240 =>
  array (
    'id' => 1632,
    'nome' => 'VILA OLIMPIA PRIME OFFICES',
    'id_empresa' => 8,
    'referencia' => 'BENX011 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1241 =>
  array (
    'id' => 1633,
    'nome' => 'BROOKLIN PRIME OFFICES',
    'id_empresa' => 8,
    'referencia' => 'BENX012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1242 =>
  array (
    'id' => 1634,
    'nome' => 'DESIGN TOWER 1151',
    'id_empresa' => 8,
    'referencia' => 'BENX013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1243 =>
  array (
    'id' => 1635,
    'nome' => '1245 TEODORO CORPORATE',
    'id_empresa' => 8,
    'referencia' => 'QDI04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1244 =>
  array (
    'id' => 1636,
    'nome' => 'PRIZE HALL OFFICES JARDINS',
    'id_empresa' => 8,
    'referencia' => 'ZOGBI15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1245 =>
  array (
    'id' => 1637,
    'nome' => 'ROYAL OFFICE JARDINS',
    'id_empresa' => 8,
    'referencia' => 'KASLIK02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1246 =>
  array (
    'id' => 1638,
    'nome' => 'LIVING WISH LAPA',
    'id_empresa' => 8,
    'referencia' => 'LIV005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1247 =>
  array (
    'id' => 1639,
    'nome' => 'BANDEIRA PAULICEIA',
    'id_empresa' => 8,
    'referencia' => 'TPA001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1248 =>
  array (
    'id' => 1640,
    'nome' => 'PASEO DIADEMA',
    'id_empresa' => 8,
    'referencia' => 'FIBRA008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1249 =>
  array (
    'id' => 1641,
    'nome' => 'GRIFE PAULICEIA 360o',
    'id_empresa' => 8,
    'referencia' => 'TPA002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1250 =>
  array (
    'id' => 1642,
    'nome' => 'SKY PAULICEIA',
    'id_empresa' => 8,
    'referencia' => 'TPA003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1251 =>
  array (
    'id' => 1643,
    'nome' => 'AM PM PAULICEIA',
    'id_empresa' => 8,
    'referencia' => 'TPA004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1252 =>
  array (
    'id' => 1644,
    'nome' => 'HOME BIKERS PAULICEIA',
    'id_empresa' => 8,
    'referencia' => 'TPA005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1253 =>
  array (
    'id' => 1645,
    'nome' => 'STEP CAMBUCI',
    'id_empresa' => 8,
    'referencia' => 'ENGE001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1254 =>
  array (
    'id' => 1646,
    'nome' => 'VERACE BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'EZTEC37',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1255 =>
  array (
    'id' => 1647,
    'nome' => 'LINDEMBERG TUCUMÃ',
    'id_empresa' => 8,
    'referencia' => 'LDI011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1256 =>
  array (
    'id' => 1648,
    'nome' => 'LE GRAND ART JARDINS ',
    'id_empresa' => 8,
    'referencia' => 'LDI012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1257 =>
  array (
    'id' => 1649,
    'nome' => 'DUETTO JARDINS',
    'id_empresa' => 8,
    'referencia' => 'LDI013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1258 =>
  array (
    'id' => 1650,
    'nome' => 'PALAIS ROYALE',
    'id_empresa' => 8,
    'referencia' => 'LDI014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1259 =>
  array (
    'id' => 1651,
    'nome' => 'VISCONDE DE PORTO SEGURO',
    'id_empresa' => 8,
    'referencia' => 'LDI015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1260 =>
  array (
    'id' => 1652,
    'nome' => 'PALAIS ROYAL',
    'id_empresa' => 8,
    'referencia' => 'SOLI005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1261 =>
  array (
    'id' => 1653,
    'nome' => 'QUINTAS DA LAPA ( fase2)',
    'id_empresa' => 8,
    'referencia' => 'EVEN047',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1262 =>
  array (
    'id' => 1654,
    'nome' => 'OLHAR AUGUSTA',
    'id_empresa' => 8,
    'referencia' => 'TEGRA001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1263 =>
  array (
    'id' => 1655,
    'nome' => 'BOSQUES DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'EVEN048',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1264 =>
  array (
    'id' => 1656,
    'nome' => 'PARQUES DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'EVEN049',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1265 =>
  array (
    'id' => 1657,
    'nome' => 'PRAÇAS DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'EVEN050',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1266 =>
  array (
    'id' => 1658,
    'nome' => 'GRAND MOOCA',
    'id_empresa' => 8,
    'referencia' => 'FIBRA009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1267 =>
  array (
    'id' => 1659,
    'nome' => 'THE GARDENS SEASONS',
    'id_empresa' => 8,
    'referencia' => 'FIBRA010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1268 =>
  array (
    'id' => 1660,
    'nome' => 'THE GARDENS SPRING',
    'id_empresa' => 8,
    'referencia' => 'FIBRA011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1269 =>
  array (
    'id' => 1661,
    'nome' => 'THE GARDENS SUMMER',
    'id_empresa' => 8,
    'referencia' => 'FIBRA012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1270 =>
  array (
    'id' => 1662,
    'nome' => 'DUETTO ',
    'id_empresa' => 8,
    'referencia' => 'FIBRA013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1271 =>
  array (
    'id' => 1663,
    'nome' => 'BOULEVARD DOS CRISTAIS',
    'id_empresa' => 8,
    'referencia' => 'DIAL10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1272 =>
  array (
    'id' => 1664,
    'nome' => 'VEREDA PARQUE TUIUTI',
    'id_empresa' => 8,
    'referencia' => 'DIAL11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1273 =>
  array (
    'id' => 1665,
    'nome' => 'VEREDA TATUAPE',
    'id_empresa' => 8,
    'referencia' => 'DIAL12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1274 =>
  array (
    'id' => 1666,
    'nome' => 'LANDSCAPE TATUAPE',
    'id_empresa' => 8,
    'referencia' => 'DIAL13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1275 =>
  array (
    'id' => 1667,
    'nome' => 'URBAN HOME TATUAPE',
    'id_empresa' => 8,
    'referencia' => 'DIAL14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1276 =>
  array (
    'id' => 1668,
    'nome' => 'RESERVA CHAMANTA',
    'id_empresa' => 8,
    'referencia' => 'DIAL15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1277 =>
  array (
    'id' => 1669,
    'nome' => 'VEREDA ALTO DA MOOCA',
    'id_empresa' => 8,
    'referencia' => 'DIAL16',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1278 =>
  array (
    'id' => 1670,
    'nome' => 'ALLEGRO',
    'id_empresa' => 8,
    'referencia' => 'DIAL17',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1279 =>
  array (
    'id' => 1671,
    'nome' => 'VITAL VILA CARRÃO',
    'id_empresa' => 8,
    'referencia' => 'DIAL18',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1280 =>
  array (
    'id' => 1672,
    'nome' => 'VEREDA RESERVA VILA CARRAO',
    'id_empresa' => 8,
    'referencia' => 'DIAL19',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1281 =>
  array (
    'id' => 1673,
    'nome' => 'VALENTINA',
    'id_empresa' => 8,
    'referencia' => 'DIAL20',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1282 =>
  array (
    'id' => 1674,
    'nome' => 'SOPHIA',
    'id_empresa' => 8,
    'referencia' => 'DIAL21',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1283 =>
  array (
    'id' => 1675,
    'nome' => 'THE ADDRESS VILA CARRÃO',
    'id_empresa' => 8,
    'referencia' => 'DIAL22',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1284 =>
  array (
    'id' => 1676,
    'nome' => 'VISTA DI TRENTO',
    'id_empresa' => 8,
    'referencia' => 'DIAL23',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1285 =>
  array (
    'id' => 1677,
    'nome' => 'MOMENTO BOULEVARD CLUB',
    'id_empresa' => 8,
    'referencia' => 'DIAL24',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1286 =>
  array (
    'id' => 1678,
    'nome' => 'RESERVA VILA EMA',
    'id_empresa' => 8,
    'referencia' => 'DIAL25',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1287 =>
  array (
    'id' => 1679,
    'nome' => 'COTOXO 926',
    'id_empresa' => 8,
    'referencia' => 'MOBY001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1288 =>
  array (
    'id' => 1680,
    'nome' => 'SAN FILIPPO RESIDENCIAL',
    'id_empresa' => 8,
    'referencia' => 'ALCA001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1289 =>
  array (
    'id' => 1681,
    'nome' => 'PROVENCE',
    'id_empresa' => 8,
    'referencia' => 'BARRO001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1290 =>
  array (
    'id' => 1682,
    'nome' => 'RETRATO PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'TXDUA05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1291 =>
  array (
    'id' => 1683,
    'nome' => 'IN DESIGN LIBERDADE',
    'id_empresa' => 8,
    'referencia' => 'EZTEC38',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1292 =>
  array (
    'id' => 1684,
    'nome' => 'LINK IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'DIREC01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1293 =>
  array (
    'id' => 1685,
    'nome' => 'JARDINS DE FATIMA',
    'id_empresa' => 8,
    'referencia' => 'SULP01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1294 =>
  array (
    'id' => 1686,
    'nome' => 'LANDING HOME CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'MSB003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1295 =>
  array (
    'id' => 1687,
    'nome' => 'LOOK VILA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'COSIL01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1296 =>
  array (
    'id' => 1688,
    'nome' => 'LIV ON ',
    'id_empresa' => 8,
    'referencia' => 'CTRAC06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1297 =>
  array (
    'id' => 1689,
    'nome' => 'RECANTO JACARANDÁ',
    'id_empresa' => 8,
    'referencia' => 'TEC020',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1298 =>
  array (
    'id' => 1690,
    'nome' => 'PLACE DES VOGES',
    'id_empresa' => 8,
    'referencia' => 'REV100',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1299 =>
  array (
    'id' => 1691,
    'nome' => 'MOOV ESTAÇÃO BRÁS',
    'id_empresa' => 8,
    'referencia' => 'GAF046',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1300 =>
  array (
    'id' => 1692,
    'nome' => 'YOU COLLECTION JOÃO MOURA',
    'id_empresa' => 8,
    'referencia' => 'YOU033',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1301 =>
  array (
    'id' => 1693,
    'nome' => 'YOU COLLECTION ALVES GUIMARAES',
    'id_empresa' => 8,
    'referencia' => 'YOU034',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1302 =>
  array (
    'id' => 1694,
    'nome' => 'YOU CENTRAL PARK',
    'id_empresa' => 8,
    'referencia' => 'YOU035',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1303 =>
  array (
    'id' => 1695,
    'nome' => 'CONDOMINIO DE CASAS',
    'id_empresa' => 8,
    'referencia' => 'CASA001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1304 =>
  array (
    'id' => 1696,
    'nome' => 'ELEV POMPEIA',
    'id_empresa' => 8,
    'referencia' => 'ARCH006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1305 =>
  array (
    'id' => 1697,
    'nome' => 'WE LIBERDADE',
    'id_empresa' => 8,
    'referencia' => 'KALL15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1306 =>
  array (
    'id' => 1698,
    'nome' => 'VN NOVA HIGIENOPOLIS',
    'id_empresa' => 8,
    'referencia' => 'VIT0036',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1307 =>
  array (
    'id' => 1699,
    'nome' => 'Le Havre Residencial',
    'id_empresa' => 8,
    'referencia' => 'KALL16',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1308 =>
  array (
    'id' => 1700,
    'nome' => 'LODZ VILA LEOPOLDINA ',
    'id_empresa' => 8,
    'referencia' => 'KALL17',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1309 =>
  array (
    'id' => 1701,
    'nome' => 'WEST SIDE BARRA FUNDA',
    'id_empresa' => 8,
    'referencia' => 'YUNY15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1310 =>
  array (
    'id' => 1702,
    'nome' => 'MOOV ESPAÇO CERAMICA',
    'id_empresa' => 8,
    'referencia' => 'GAF047',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1311 =>
  array (
    'id' => 1703,
    'nome' => 'INK PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'INK004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1312 =>
  array (
    'id' => 1704,
    'nome' => 'RIOS MIGUEL YUNES',
    'id_empresa' => 8,
    'referencia' => 'EVEN051',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1313 =>
  array (
    'id' => 1705,
    'nome' => 'CORES CAMPO LIMPO',
    'id_empresa' => 8,
    'referencia' => 'TIB014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1314 =>
  array (
    'id' => 1706,
    'nome' => 'ORIGENS SANTANA',
    'id_empresa' => 8,
    'referencia' => 'TIB015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1315 =>
  array (
    'id' => 1707,
    'nome' => 'MY WISH SAUDE',
    'id_empresa' => 8,
    'referencia' => 'TIB016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1316 =>
  array (
    'id' => 1708,
    'nome' => 'RITMOS DA BARRA',
    'id_empresa' => 8,
    'referencia' => 'BENX014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1317 =>
  array (
    'id' => 1709,
    'nome' => 'SANTA MARGHERITA',
    'id_empresa' => 8,
    'referencia' => 'FIOR001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1318 =>
  array (
    'id' => 1710,
    'nome' => 'CLOCK VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'EXTO034',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1319 =>
  array (
    'id' => 1711,
    'nome' => 'MOVVA SP',
    'id_empresa' => 8,
    'referencia' => 'LAVVI02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1320 =>
  array (
    'id' => 1712,
    'nome' => 'UP STYLE VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'UPCON17',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1321 =>
  array (
    'id' => 1713,
    'nome' => 'Trix Santa Cecilia',
    'id_empresa' => 8,
    'referencia' => 'BENX015',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1322 =>
  array (
    'id' => 1714,
    'nome' => 'SIDE ATLANTICA',
    'id_empresa' => 8,
    'referencia' => 'TRIS34',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1323 =>
  array (
    'id' => 1715,
    'nome' => 'IN OUT AMERICA',
    'id_empresa' => 8,
    'referencia' => 'CHIRO02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1324 =>
  array (
    'id' => 1716,
    'nome' => 'THE PARKER',
    'id_empresa' => 8,
    'referencia' => 'CCDI009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1325 =>
  array (
    'id' => 1717,
    'nome' => 'TAO CONCEIÇÃO',
    'id_empresa' => 8,
    'referencia' => 'ARQ100',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1326 =>
  array (
    'id' => 1718,
    'nome' => 'LIVING NEAR PACAEMBU',
    'id_empresa' => 8,
    'referencia' => 'LIV006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1327 =>
  array (
    'id' => 1719,
    'nome' => 'CITIZEN PAULISTA',
    'id_empresa' => 8,
    'referencia' => 'BKO012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1328 =>
  array (
    'id' => 1720,
    'nome' => 'SETIN ESTAÇÃO BRÁS  ',
    'id_empresa' => 8,
    'referencia' => 'SETIN14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1329 =>
  array (
    'id' => 1721,
    'nome' => 'GREEN STREET',
    'id_empresa' => 8,
    'referencia' => 'ZABO020',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1330 =>
  array (
    'id' => 1722,
    'nome' => 'MAISON MARIE',
    'id_empresa' => 8,
    'referencia' => 'ZABO021',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1331 =>
  array (
    'id' => 1723,
    'nome' => 'MAISON MARINA',
    'id_empresa' => 8,
    'referencia' => 'ZABO022',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1332 =>
  array (
    'id' => 1724,
    'nome' => 'MAISON HELENA',
    'id_empresa' => 8,
    'referencia' => 'ZABO023',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1333 =>
  array (
    'id' => 1725,
    'nome' => 'STUDIO Z',
    'id_empresa' => 8,
    'referencia' => 'ZABO024',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1334 =>
  array (
    'id' => 1726,
    'nome' => 'CAYRÊ PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'FIBRA014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1335 =>
  array (
    'id' => 1727,
    'nome' => 'PIN HOME DESIGN',
    'id_empresa' => 8,
    'referencia' => 'TEGRA002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1336 =>
  array (
    'id' => 1728,
    'nome' => 'HUM LIBERDADE',
    'id_empresa' => 8,
    'referencia' => 'PLANO011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1337 =>
  array (
    'id' => 1729,
    'nome' => 'PLANO&JARDIM SUL',
    'id_empresa' => 8,
    'referencia' => 'PLANO012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1338 =>
  array (
    'id' => 1730,
    'nome' => 'CORES DA MATA ',
    'id_empresa' => 8,
    'referencia' => 'SERG02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1339 =>
  array (
    'id' => 1731,
    'nome' => 'PLAY PREMIER SAUDE',
    'id_empresa' => 8,
    'referencia' => 'CONTRC1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1340 =>
  array (
    'id' => 1732,
    'nome' => 'NEW LIFE IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'MBIGU01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1341 =>
  array (
    'id' => 1733,
    'nome' => 'ED. LARA',
    'id_empresa' => 8,
    'referencia' => 'SULP02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1342 =>
  array (
    'id' => 1734,
    'nome' => 'RESIDENCIAL VISCONDE',
    'id_empresa' => 8,
    'referencia' => 'SULP03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1343 =>
  array (
    'id' => 1735,
    'nome' => 'ESCRITORIOS VERGUEIRO',
    'id_empresa' => 8,
    'referencia' => 'SKR005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1344 =>
  array (
    'id' => 1736,
    'nome' => 'TO BE FREE',
    'id_empresa' => 8,
    'referencia' => 'PROH001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1345 =>
  array (
    'id' => 1737,
    'nome' => 'CONNECT SP',
    'id_empresa' => 8,
    'referencia' => 'SABIA01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1346 =>
  array (
    'id' => 1738,
    'nome' => 'BRAS CLUBE',
    'id_empresa' => 8,
    'referencia' => 'REZE001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1347 =>
  array (
    'id' => 1739,
    'nome' => 'ADD HOUSE',
    'id_empresa' => 8,
    'referencia' => 'ENGE002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1348 =>
  array (
    'id' => 1740,
    'nome' => 'STAMP MOOCA',
    'id_empresa' => 8,
    'referencia' => 'ENGE003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1349 =>
  array (
    'id' => 1741,
    'nome' => 'CHEZ VOUS MOEMA',
    'id_empresa' => 8,
    'referencia' => 'TEGRA003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1350 =>
  array (
    'id' => 1742,
    'nome' => 'VN VERGUEIRO',
    'id_empresa' => 8,
    'referencia' => 'VIT0037',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1351 =>
  array (
    'id' => 1743,
    'nome' => 'VN CASA APIACÁS',
    'id_empresa' => 8,
    'referencia' => 'VIT0038',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1352 =>
  array (
    'id' => 1744,
    'nome' => 'NEW PARK ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'MBIGU02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1353 =>
  array (
    'id' => 1745,
    'nome' => 'QUADRA GREENWICH',
    'id_empresa' => 8,
    'referencia' => 'CYR059',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1354 =>
  array (
    'id' => 1746,
    'nome' => 'MONTPELLIER',
    'id_empresa' => 8,
    'referencia' => 'RAS001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1355 =>
  array (
    'id' => 1747,
    'nome' => 'HORIZON ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'SEQUO02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1356 =>
  array (
    'id' => 1748,
    'nome' => 'VIVABENX CAMBUCI CLUBE',
    'id_empresa' => 8,
    'referencia' => 'BENX016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1357 =>
  array (
    'id' => 1749,
    'nome' => 'CHACARA SANTA CRUZ',
    'id_empresa' => 8,
    'referencia' => 'ROSSI 008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1358 =>
  array (
    'id' => 1750,
    'nome' => 'PLENO SANTA CRUZ ',
    'id_empresa' => 8,
    'referencia' => 'EVEN052',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1359 =>
  array (
    'id' => 1751,
    'nome' => 'PIAZZA DI ROMA ',
    'id_empresa' => 8,
    'referencia' => 'TROP001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1360 =>
  array (
    'id' => 1752,
    'nome' => 'TOPAZIO TROPICAL',
    'id_empresa' => 8,
    'referencia' => 'TROP002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1361 =>
  array (
    'id' => 1753,
    'nome' => 'HIT SANTA CRUZ',
    'id_empresa' => 8,
    'referencia' => 'RHF001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1362 =>
  array (
    'id' => 1754,
    'nome' => 'PASEO DE LAS ROSAS',
    'id_empresa' => 8,
    'referencia' => 'FRES01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1363 =>
  array (
    'id' => 1755,
    'nome' => 'IBIZA',
    'id_empresa' => 8,
    'referencia' => 'FRES02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1364 =>
  array (
    'id' => 1756,
    'nome' => 'SAINT JAMES',
    'id_empresa' => 8,
    'referencia' => 'FRES03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1365 =>
  array (
    'id' => 1757,
    'nome' => 'NEW HOUSE VILA OLIMPIA',
    'id_empresa' => 8,
    'referencia' => 'FRES04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1366 =>
  array (
    'id' => 1758,
    'nome' => 'SPLENDID MOEMA',
    'id_empresa' => 8,
    'referencia' => 'FRES05',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1367 =>
  array (
    'id' => 1759,
    'nome' => 'VILA RIZIERI SACOMÃ',
    'id_empresa' => 8,
    'referencia' => 'DISSEI01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1368 =>
  array (
    'id' => 1760,
    'nome' => 'BROOKLIN SKYMARK ',
    'id_empresa' => 8,
    'referencia' => 'BENX017',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1369 =>
  array (
    'id' => 1761,
    'nome' => 'ED. EUROPA',
    'id_empresa' => 8,
    'referencia' => 'MAC014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1370 =>
  array (
    'id' => 1762,
    'nome' => 'JERIVÁS- CAMINHOS DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'TEGRA004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1371 =>
  array (
    'id' => 1763,
    'nome' => 'HELBOR WIDE SÃO PAULO',
    'id_empresa' => 8,
    'referencia' => 'HELB35',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1372 =>
  array (
    'id' => 1764,
    'nome' => 'PATTEO BOSQUE MAIA ',
    'id_empresa' => 8,
    'referencia' => 'HELB36',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1373 =>
  array (
    'id' => 1765,
    'nome' => 'THE LAKE GRAMERCY PARK ',
    'id_empresa' => 8,
    'referencia' => 'TEGRA005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1374 =>
  array (
    'id' => 1766,
    'nome' => 'THE GARDEN GRAMERCY PARK ',
    'id_empresa' => 8,
    'referencia' => 'TEGRA006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1375 =>
  array (
    'id' => 1767,
    'nome' => 'THE GIFT ',
    'id_empresa' => 8,
    'referencia' => 'EVEN053',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1376 =>
  array (
    'id' => 1768,
    'nome' => 'JARDINS DE PROVENCE ',
    'id_empresa' => 8,
    'referencia' => 'ESSER25',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1377 =>
  array (
    'id' => 1769,
    'nome' => 'URBAN LIVING PACAEMBU',
    'id_empresa' => 8,
    'referencia' => 'TEGRA007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1378 =>
  array (
    'id' => 1770,
    'nome' => 'QUARTIER BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'TXDU06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1379 =>
  array (
    'id' => 1771,
    'nome' => 'BEYOND JARDINS',
    'id_empresa' => 8,
    'referencia' => 'RYAZB13',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1380 =>
  array (
    'id' => 1772,
    'nome' => 'VILA NOVA IPIRANGA',
    'id_empresa' => 8,
    'referencia' => 'EVEN054',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1381 =>
  array (
    'id' => 1773,
    'nome' => 'VERDI SPAZIO',
    'id_empresa' => 8,
    'referencia' => 'EVEN055',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1382 =>
  array (
    'id' => 1774,
    'nome' => 'STORY JAGUARE',
    'id_empresa' => 8,
    'referencia' => 'EVEN056',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1383 =>
  array (
    'id' => 1775,
    'nome' => 'RESERVA RAPOSO',
    'id_empresa' => 8,
    'referencia' => 'REZEK01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1384 =>
  array (
    'id' => 1776,
    'nome' => 'FEEL CIDADE UNIVERSITARIA',
    'id_empresa' => 8,
    'referencia' => 'EVEN057',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1385 =>
  array (
    'id' => 1777,
    'nome' => 'REFERENCE BUTANTA',
    'id_empresa' => 8,
    'referencia' => 'CONX003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1386 =>
  array (
    'id' => 1778,
    'nome' => 'NOVITÁ BUTANTA',
    'id_empresa' => 8,
    'referencia' => 'EVEN058',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1387 =>
  array (
    'id' => 1779,
    'nome' => 'PATEO VILA POMPEIA',
    'id_empresa' => 8,
    'referencia' => 'HAB003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1388 =>
  array (
    'id' => 1780,
    'nome' => 'LINK FREE HOME ',
    'id_empresa' => 8,
    'referencia' => 'HAB004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1389 =>
  array (
    'id' => 1781,
    'nome' => 'ART POMPEIA',
    'id_empresa' => 8,
    'referencia' => 'HAB005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1390 =>
  array (
    'id' => 1782,
    'nome' => 'CLUB PARK REMEDIOS',
    'id_empresa' => 8,
    'referencia' => 'EVEN059',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1391 =>
  array (
    'id' => 1783,
    'nome' => 'ALCANCE CLUBE RESIDENCIAL',
    'id_empresa' => 8,
    'referencia' => 'LUCIO011',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1392 =>
  array (
    'id' => 1784,
    'nome' => 'OPUS 95',
    'id_empresa' => 8,
    'referencia' => 'JZM004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1393 =>
  array (
    'id' => 1785,
    'nome' => '407 ONE MOEMA ',
    'id_empresa' => 8,
    'referencia' => 'ONE007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1394 =>
  array (
    'id' => 1786,
    'nome' => 'JT 230',
    'id_empresa' => 8,
    'referencia' => 'TRIS35',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1395 =>
  array (
    'id' => 1787,
    'nome' => 'PARADISO FREGUESIA DO Ó',
    'id_empresa' => 8,
    'referencia' => 'TIB018',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1396 =>
  array (
    'id' => 1788,
    'nome' => 'ENJOY FREGUESIA DO Ó',
    'id_empresa' => 8,
    'referencia' => 'PLANIK2',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1397 =>
  array (
    'id' => 1789,
    'nome' => 'MATRIZ FREGUESIA DO Ó',
    'id_empresa' => 8,
    'referencia' => 'EVEN060',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1398 =>
  array (
    'id' => 1790,
    'nome' => 'PASSIONE DUE',
    'id_empresa' => 8,
    'referencia' => 'EVEN061',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1399 =>
  array (
    'id' => 1791,
    'nome' => 'VIVAZ VILA PRUDENTE',
    'id_empresa' => 8,
    'referencia' => 'EVEN062',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1400 =>
  array (
    'id' => 1792,
    'nome' => 'PRAÇA BRAZ LEME',
    'id_empresa' => 8,
    'referencia' => 'TIB019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1401 =>
  array (
    'id' => 1793,
    'nome' => 'VIVERDE',
    'id_empresa' => 8,
    'referencia' => 'TEC029',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1402 =>
  array (
    'id' => 1794,
    'nome' => 'MENA BARRETO 423',
    'id_empresa' => 8,
    'referencia' => 'JHSF06',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1403 =>
  array (
    'id' => 1795,
    'nome' => 'CLASS ANALIA FRANCO',
    'id_empresa' => 8,
    'referencia' => 'PLANIK3',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1404 =>
  array (
    'id' => 1796,
    'nome' => 'BOSQUE VENTURA GRAN CLUB',
    'id_empresa' => 8,
    'referencia' => 'EZTEC39',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1405 =>
  array (
    'id' => 1797,
    'nome' => 'PARQUE VENTURA GRAN CLUB',
    'id_empresa' => 8,
    'referencia' => 'EZTEC40',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1406 =>
  array (
    'id' => 1798,
    'nome' => 'ALAMEDA CIDADE MAIA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC41',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1407 =>
  array (
    'id' => 1799,
    'nome' => 'JARDIM CIDADE MAIA ',
    'id_empresa' => 8,
    'referencia' => 'EZTEC42',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1408 =>
  array (
    'id' => 1800,
    'nome' => 'PRAÇA CIDADE MAIA ',
    'id_empresa' => 8,
    'referencia' => 'EZTEC43',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1409 =>
  array (
    'id' => 1801,
    'nome' => 'RESERVA CIDADE MAIA ',
    'id_empresa' => 8,
    'referencia' => 'EZTEC44',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1410 =>
  array (
    'id' => 1802,
    'nome' => 'NEW CITY',
    'id_empresa' => 8,
    'referencia' => 'ECON003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1411 =>
  array (
    'id' => 1803,
    'nome' => 'CENTRAL VILA OLIMPIA',
    'id_empresa' => 8,
    'referencia' => 'ODBR11',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1412 =>
  array (
    'id' => 1804,
    'nome' => 'VILA OLIMPIA CORPORATE',
    'id_empresa' => 8,
    'referencia' => 'ODBR12',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1413 =>
  array (
    'id' => 1805,
    'nome' => 'HD ACLIMACÃO',
    'id_empresa' => 8,
    'referencia' => 'GRIFO01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1414 =>
  array (
    'id' => 1806,
    'nome' => 'FLORART VILA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'CONX004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1415 =>
  array (
    'id' => 1807,
    'nome' => 'WIN WORK IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'LDI016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1416 =>
  array (
    'id' => 1808,
    'nome' => 'MOBI LIBERDADE',
    'id_empresa' => 8,
    'referencia' => 'STEEL01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1417 =>
  array (
    'id' => 1809,
    'nome' => 'VARANDA VILA ROMANA',
    'id_empresa' => 8,
    'referencia' => 'DIAL26',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1418 =>
  array (
    'id' => 1810,
    'nome' => 'PRAÇAS DA CIDADE - PRAÇA MOOCA',
    'id_empresa' => 8,
    'referencia' => 'LAVVI03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1419 =>
  array (
    'id' => 1811,
    'nome' => 'IS MOEMA',
    'id_empresa' => 8,
    'referencia' => 'MAC021',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1420 =>
  array (
    'id' => 1812,
    'nome' => 'SINTESE SP',
    'id_empresa' => 8,
    'referencia' => 'ROVIC04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1421 =>
  array (
    'id' => 1813,
    'nome' => 'TUTTI MOOCA',
    'id_empresa' => 8,
    'referencia' => 'CONX005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1422 =>
  array (
    'id' => 1814,
    'nome' => 'APOGEE VILA MARIANA ',
    'id_empresa' => 8,
    'referencia' => 'RYAZB14',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1423 =>
  array (
    'id' => 1815,
    'nome' => 'VERISSIMO MOOCA',
    'id_empresa' => 8,
    'referencia' => 'TXDUA07',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1424 =>
  array (
    'id' => 1816,
    'nome' => 'UBÁ',
    'id_empresa' => 8,
    'referencia' => 'ZARV013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1425 =>
  array (
    'id' => 1817,
    'nome' => 'Z.COTOVIA RESIDENCIAL ',
    'id_empresa' => 8,
    'referencia' => 'EZTEC45',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1426 =>
  array (
    'id' => 1818,
    'nome' => 'ALTTO VILA MADALENA',
    'id_empresa' => 8,
    'referencia' => 'EVEN064',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1427 =>
  array (
    'id' => 1819,
    'nome' => 'VISTTA 180',
    'id_empresa' => 8,
    'referencia' => 'BENX18',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1428 =>
  array (
    'id' => 1820,
    'nome' => 'CLICK MORUMBI ',
    'id_empresa' => 8,
    'referencia' => 'ECON004',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1429 =>
  array (
    'id' => 1821,
    'nome' => 'BEM VIVER VILA BUARQUE',
    'id_empresa' => 8,
    'referencia' => 'MAGIK001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1430 =>
  array (
    'id' => 1822,
    'nome' => 'LUV JARDIM BOTANICO',
    'id_empresa' => 8,
    'referencia' => 'ECON005',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1431 =>
  array (
    'id' => 1823,
    'nome' => 'GO JARDIM BOTANICO',
    'id_empresa' => 8,
    'referencia' => 'CURY001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1432 =>
  array (
    'id' => 1824,
    'nome' => 'INSIGHT VILA LEOPOLDINA',
    'id_empresa' => 8,
    'referencia' => 'SETIN17',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1433 =>
  array (
    'id' => 1825,
    'nome' => 'WALK SP ',
    'id_empresa' => 8,
    'referencia' => 'DIAL27',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1434 =>
  array (
    'id' => 1826,
    'nome' => 'SANTOS AUGUSTA',
    'id_empresa' => 8,
    'referencia' => 'REUD001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1435 =>
  array (
    'id' => 1827,
    'nome' => 'GET JARDIM BOTANICO',
    'id_empresa' => 8,
    'referencia' => 'ECON006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1436 =>
  array (
    'id' => 1828,
    'nome' => 'ATEMPORAL POMPEIA',
    'id_empresa' => 8,
    'referencia' => 'TRIS36',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1437 =>
  array (
    'id' => 1829,
    'nome' => 'Nido',
    'id_empresa' => 8,
    'referencia' => 'ZAR014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1438 =>
  array (
    'id' => 1830,
    'nome' => 'EDICAO JARDINS ',
    'id_empresa' => 8,
    'referencia' => 'DIAL28',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1439 =>
  array (
    'id' => 1831,
    'nome' => 'ABSOLUTO TATUAPÉ',
    'id_empresa' => 8,
    'referencia' => 'DIAL29',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1440 =>
  array (
    'id' => 1832,
    'nome' => 'CONQUISTA JARDIM AMARALINA',
    'id_empresa' => 8,
    'referencia' => 'DIREC02',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1441 =>
  array (
    'id' => 1833,
    'nome' => 'SERENO ALTO DE PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'JAL0001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1442 =>
  array (
    'id' => 1834,
    'nome' => 'WISE SANTANA ',
    'id_empresa' => 8,
    'referencia' => 'EVEN066',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1443 =>
  array (
    'id' => 1835,
    'nome' => 'NEAR PARQUE SANTANA',
    'id_empresa' => 8,
    'referencia' => 'EVEN067',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1444 =>
  array (
    'id' => 1836,
    'nome' => 'LUMINUS JARDINS',
    'id_empresa' => 8,
    'referencia' => 'BENX19',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1445 =>
  array (
    'id' => 1837,
    'nome' => 'URBAN VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'MDL010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1446 =>
  array (
    'id' => 1838,
    'nome' => 'AUTHENTIQUE CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'FELLER10',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1447 =>
  array (
    'id' => 1839,
    'nome' => 'HAUS MITRE VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'MITRE006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1448 =>
  array (
    'id' => 1840,
    'nome' => 'FIRST SANTANA',
    'id_empresa' => 8,
    'referencia' => 'SPIN001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1449 =>
  array (
    'id' => 1841,
    'nome' => 'MUST JARDIM SÃO PAULO',
    'id_empresa' => 8,
    'referencia' => 'RYAZB15',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1450 =>
  array (
    'id' => 1842,
    'nome' => 'MAXMITRE VILA PRUDENTE',
    'id_empresa' => 8,
    'referencia' => 'MITRE007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1451 =>
  array (
    'id' => 1843,
    'nome' => 'PÁTIO SANTANA',
    'id_empresa' => 8,
    'referencia' => 'WDS001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1452 =>
  array (
    'id' => 1844,
    'nome' => 'E-TOWER',
    'id_empresa' => 8,
    'referencia' => 'COM001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1453 =>
  array (
    'id' => 1845,
    'nome' => 'AUTÊNTICO MOOCA',
    'id_empresa' => 8,
    'referencia' => 'EVEN068',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1454 =>
  array (
    'id' => 1846,
    'nome' => 'ESTAÇÕES MOOCA',
    'id_empresa' => 8,
    'referencia' => 'EVEN069',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1455 =>
  array (
    'id' => 1847,
    'nome' => 'VERTE BELEM',
    'id_empresa' => 8,
    'referencia' => 'EVEN070',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1456 =>
  array (
    'id' => 1848,
    'nome' => 'BIO TATUAPE ',
    'id_empresa' => 8,
    'referencia' => 'EVEN071',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1457 =>
  array (
    'id' => 1849,
    'nome' => 'MIRADA TATUAPE',
    'id_empresa' => 8,
    'referencia' => 'EVEN072',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1458 =>
  array (
    'id' => 1850,
    'nome' => 'RED TATUAPE',
    'id_empresa' => 8,
    'referencia' => 'EVEN073',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1459 =>
  array (
    'id' => 1851,
    'nome' => 'VILA JARDIM CASA VERDE',
    'id_empresa' => 8,
    'referencia' => 'EVEN074',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1460 =>
  array (
    'id' => 1852,
    'nome' => 'MOSAICO VILA GUILHERME ',
    'id_empresa' => 8,
    'referencia' => 'EVEN075',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1461 =>
  array (
    'id' => 1853,
    'nome' => 'PARQUE JARDIM VILA GUILHERME',
    'id_empresa' => 8,
    'referencia' => 'EVEN076',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1462 =>
  array (
    'id' => 1854,
    'nome' => 'CLUBE JARDIM VILA MARIA',
    'id_empresa' => 8,
    'referencia' => 'EVEN077',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1463 =>
  array (
    'id' => 1855,
    'nome' => 'CLUBE JAÇANA',
    'id_empresa' => 8,
    'referencia' => 'EVEN078',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1464 =>
  array (
    'id' => 1856,
    'nome' => 'GRAND HABITARTE',
    'id_empresa' => 8,
    'referencia' => 'STAN31',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1465 =>
  array (
    'id' => 1857,
    'nome' => 'VICINO PASSO DA PATRIA',
    'id_empresa' => 8,
    'referencia' => 'DIAL30',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1466 =>
  array (
    'id' => 1858,
    'nome' => 'LOADD SÃO JUDAS',
    'id_empresa' => 8,
    'referencia' => 'MAC022',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1467 =>
  array (
    'id' => 1859,
    'nome' => 'ARVO LACERDA FRANCO',
    'id_empresa' => 8,
    'referencia' => 'RNI001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1468 =>
  array (
    'id' => 1860,
    'nome' => 'MYRÁ ALPHAVILLE',
    'id_empresa' => 8,
    'referencia' => 'MPD001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1469 =>
  array (
    'id' => 1861,
    'nome' => 'ACQUA PARK HOME RESORT ALPHAVILLE',
    'id_empresa' => 8,
    'referencia' => 'CNA0001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1470 =>
  array (
    'id' => 1862,
    'nome' => 'BR CAETANO ',
    'id_empresa' => 8,
    'referencia' => 'BRAC001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1471 =>
  array (
    'id' => 1863,
    'nome' => 'DSGN LORENA',
    'id_empresa' => 8,
    'referencia' => 'TPA006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1472 =>
  array (
    'id' => 1864,
    'nome' => 'URBE',
    'id_empresa' => 8,
    'referencia' => 'PDG027',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1473 =>
  array (
    'id' => 1865,
    'nome' => 'AIR CAMPO BELO',
    'id_empresa' => 8,
    'referencia' => 'EVEN079',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1474 =>
  array (
    'id' => 1866,
    'nome' => 'ELEVO MOEMA',
    'id_empresa' => 8,
    'referencia' => 'NORTIS04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1475 =>
  array (
    'id' => 1867,
    'nome' => 'SPAZIO MOOCA',
    'id_empresa' => 8,
    'referencia' => 'ACH003',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1476 =>
  array (
    'id' => 1868,
    'nome' => 'MOURATO 473 ',
    'id_empresa' => 8,
    'referencia' => 'MOBY002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1477 =>
  array (
    'id' => 1869,
    'nome' => 'LIVING PRIVILEGE',
    'id_empresa' => 8,
    'referencia' => 'LIV007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1478 =>
  array (
    'id' => 1870,
    'nome' => 'CAZA MOOCA',
    'id_empresa' => 8,
    'referencia' => 'MAJORE1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1479 =>
  array (
    'id' => 1871,
    'nome' => 'YUP VILA PRUDENTE',
    'id_empresa' => 8,
    'referencia' => 'ECON007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1480 =>
  array (
    'id' => 1872,
    'nome' => 'PALAZZO VILA MARIANA ',
    'id_empresa' => 8,
    'referencia' => 'LAVVI04',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1481 =>
  array (
    'id' => 1873,
    'nome' => 'RIO 335',
    'id_empresa' => 8,
    'referencia' => 'KALL18',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1482 =>
  array (
    'id' => 1874,
    'nome' => 'UPSIDE PARAISO',
    'id_empresa' => 8,
    'referencia' => 'GAF049',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1483 =>
  array (
    'id' => 1875,
    'nome' => 'ÂMBAR JARDIM AMERICA',
    'id_empresa' => 8,
    'referencia' => 'RFM002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1484 =>
  array (
    'id' => 1876,
    'nome' => 'HEREDITÁ',
    'id_empresa' => 8,
    'referencia' => 'CYR060',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1485 =>
  array (
    'id' => 1877,
    'nome' => 'ATRIO GIORNO',
    'id_empresa' => 8,
    'referencia' => 'CYR061',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1486 =>
  array (
    'id' => 1878,
    'nome' => 'STAY AEROPORTO',
    'id_empresa' => 8,
    'referencia' => 'ONE008 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1487 =>
  array (
    'id' => 1879,
    'nome' => 'LEGITTIMO ALTO DE SANTANA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC46',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1488 =>
  array (
    'id' => 1880,
    'nome' => 'RESIDENCIAL ANNA GIULIA',
    'id_empresa' => 8,
    'referencia' => 'FAZIO01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1489 =>
  array (
    'id' => 1881,
    'nome' => 'JARDINS DO BRASIL- AMAZÔNIA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC47',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1490 =>
  array (
    'id' => 1882,
    'nome' => 'JARDINS DO BRASIL- MANTIQUEIRA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC48',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1491 =>
  array (
    'id' => 1883,
    'nome' => 'JARDINS DO BRASIL-ATLÂNTICA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC49',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1492 =>
  array (
    'id' => 1884,
    'nome' => 'JARDINS DO BRASIL- ABROLHOS ',
    'id_empresa' => 8,
    'referencia' => 'EZTEC50',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1493 =>
  array (
    'id' => 1885,
    'nome' => 'JARDINS DO BRASIL- EMPRESARIAL',
    'id_empresa' => 8,
    'referencia' => 'EZTEC51',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1494 =>
  array (
    'id' => 1886,
    'nome' => 'CLIMA SÃO FRANCISCO',
    'id_empresa' => 8,
    'referencia' => 'EZTEC52',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1495 =>
  array (
    'id' => 1887,
    'nome' => 'THE HOUSE GOLF SAO FRANCISCO',
    'id_empresa' => 8,
    'referencia' => 'EKKO001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1496 =>
  array (
    'id' => 1888,
    'nome' => 'THE CITTYPLEX OSASCO',
    'id_empresa' => 8,
    'referencia' => 'HELB37',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1497 =>
  array (
    'id' => 1889,
    'nome' => 'NEO CONX FREGUESIA ',
    'id_empresa' => 8,
    'referencia' => 'CONX006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1498 =>
  array (
    'id' => 1890,
    'nome' => 'METROPOLITAN RESIDENCIAL CLUB',
    'id_empresa' => 8,
    'referencia' => 'DIAL31',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1499 =>
  array (
    'id' => 1891,
    'nome' => 'CLUB STATION PENHA',
    'id_empresa' => 8,
    'referencia' => 'DIAL32',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1500 =>
  array (
    'id' => 1892,
    'nome' => 'TRADIÇÃO VILA MATILDE',
    'id_empresa' => 8,
    'referencia' => 'DIAL33',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1501 =>
  array (
    'id' => 1893,
    'nome' => 'PASSOS DO PARQUE ',
    'id_empresa' => 8,
    'referencia' => 'NISS006',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1502 =>
  array (
    'id' => 1894,
    'nome' => 'COLETANEA OFFICE SQUARE',
    'id_empresa' => 8,
    'referencia' => 'AAM019',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1503 =>
  array (
    'id' => 1895,
    'nome' => 'CANARIAS 128',
    'id_empresa' => 8,
    'referencia' => 'JACU001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1504 =>
  array (
    'id' => 1896,
    'nome' => 'UP LIFE SÃO PAULO',
    'id_empresa' => 8,
    'referencia' => 'DIREC03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1505 =>
  array (
    'id' => 1897,
    'nome' => 'YOU PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'YOU036',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1506 =>
  array (
    'id' => 1898,
    'nome' => 'VIZCAYA SAÚDE',
    'id_empresa' => 8,
    'referencia' => 'RESULT01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1507 =>
  array (
    'id' => 1899,
    'nome' => 'BELVEDERE LORIAN BOULEVARD',
    'id_empresa' => 8,
    'referencia' => 'GAF050',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1508 =>
  array (
    'id' => 1900,
    'nome' => 'LINKED MOOCA',
    'id_empresa' => 8,
    'referencia' => 'JACU002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1509 =>
  array (
    'id' => 1901,
    'nome' => 'MOBI ONE SAÚDE',
    'id_empresa' => 8,
    'referencia' => 'ONE009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1510 =>
  array (
    'id' => 1902,
    'nome' => 'MOBI ONE SANTANA',
    'id_empresa' => 8,
    'referencia' => 'ONE010',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1511 =>
  array (
    'id' => 1903,
    'nome' => 'CAROLINA VILLAGE',
    'id_empresa' => 8,
    'referencia' => 'ONE011 ',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1512 =>
  array (
    'id' => 1904,
    'nome' => 'MOBI ONE TATUAPE',
    'id_empresa' => 8,
    'referencia' => 'ONE012',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1513 =>
  array (
    'id' => 1905,
    'nome' => 'MOBI ONE CONSOLAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'ONE013',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1514 =>
  array (
    'id' => 1906,
    'nome' => 'SQUARE VILA GUILHERME',
    'id_empresa' => 8,
    'referencia' => 'CAM0001',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1515 =>
  array (
    'id' => 1907,
    'nome' => 'RISTRETTO LORIAN BOULEVARD',
    'id_empresa' => 8,
    'referencia' => 'GAF051',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1516 =>
  array (
    'id' => 1908,
    'nome' => 'SQUARE OSASCO',
    'id_empresa' => 8,
    'referencia' => 'GAF052',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1517 =>
  array (
    'id' => 1909,
    'nome' => 'KLUBHAUS JAGUARE',
    'id_empresa' => 8,
    'referencia' => 'PROH002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1518 =>
  array (
    'id' => 1910,
    'nome' => 'FAMILY SQUARE OSASCO',
    'id_empresa' => 8,
    'referencia' => 'GAF053',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1519 =>
  array (
    'id' => 1911,
    'nome' => 'EDGE',
    'id_empresa' => 8,
    'referencia' => 'ONE014',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1520 =>
  array (
    'id' => 1912,
    'nome' => 'YOU SAUDE',
    'id_empresa' => 8,
    'referencia' => 'YOU037',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1521 =>
  array (
    'id' => 1913,
    'nome' => 'VARANDAS SANTO ANDRE',
    'id_empresa' => 8,
    'referencia' => 'DIAL34',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1522 =>
  array (
    'id' => 1914,
    'nome' => 'LE QUARTIER SANTO ANDRE',
    'id_empresa' => 8,
    'referencia' => 'DIAL35',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1523 =>
  array (
    'id' => 1915,
    'nome' => 'CENTURY PLAZA LIVING',
    'id_empresa' => 8,
    'referencia' => 'TEGRA008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1524 =>
  array (
    'id' => 1916,
    'nome' => 'CENTURY PLAZZA RESIDENCE',
    'id_empresa' => 8,
    'referencia' => 'TEGRA009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1525 =>
  array (
    'id' => 1917,
    'nome' => 'WORK STATION JOCKEY',
    'id_empresa' => 8,
    'referencia' => 'EPSON1',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1526 =>
  array (
    'id' => 1918,
    'nome' => 'EZ MARK ',
    'id_empresa' => 8,
    'referencia' => 'EZTEC53',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1527 =>
  array (
    'id' => 1919,
    'nome' => 'SUPERIA MOEMA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC54',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1528 =>
  array (
    'id' => 1920,
    'nome' => 'SUPERIA PARAISO',
    'id_empresa' => 8,
    'referencia' => 'EZTEC55',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1529 =>
  array (
    'id' => 1921,
    'nome' => 'GREEN WORK BOULEVARD JABAQUARA',
    'id_empresa' => 8,
    'referencia' => 'EZTEC56',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1530 =>
  array (
    'id' => 1922,
    'nome' => 'MOEMA WORK CENTER',
    'id_empresa' => 8,
    'referencia' => 'KALL19',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1531 =>
  array (
    'id' => 1923,
    'nome' => 'OFFICES BOUTIQUE KLABIN',
    'id_empresa' => 8,
    'referencia' => 'KALL20',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1532 =>
  array (
    'id' => 1924,
    'nome' => 'DOUBLE OFFICES SANTANA',
    'id_empresa' => 8,
    'referencia' => 'KALL21',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1533 =>
  array (
    'id' => 1925,
    'nome' => 'LINCOLN OFFICES PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'NISS007',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1534 =>
  array (
    'id' => 1926,
    'nome' => 'NEAR OFFICES ACLIMAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'NISS008',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1535 =>
  array (
    'id' => 1927,
    'nome' => 'NEAR OFFICES PERDIZES',
    'id_empresa' => 8,
    'referencia' => 'NISS009',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1536 =>
  array (
    'id' => 1928,
    'nome' => 'EXP MOEMA',
    'id_empresa' => 8,
    'referencia' => 'JAL002',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1537 =>
  array (
    'id' => 1929,
    'nome' => 'ESTADOS UNIDOS 702',
    'id_empresa' => 8,
    'referencia' => 'SEQUO03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1538 =>
  array (
    'id' => 1930,
    'nome' => 'MOOV BELEM',
    'id_empresa' => 8,
    'referencia' => 'GAF054',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1539 =>
  array (
    'id' => 1931,
    'nome' => 'MOOV PARQUE MAIA',
    'id_empresa' => 8,
    'referencia' => 'GAF055',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1540 =>
  array (
    'id' => 1932,
    'nome' => 'GRAND TATUAPE',
    'id_empresa' => 8,
    'referencia' => 'FIBRA016',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1541 =>
  array (
    'id' => 1933,
    'nome' => 'VILA TATUAPE',
    'id_empresa' => 8,
    'referencia' => 'WZAR01',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1542 =>
  array (
    'id' => 1934,
    'nome' => 'MAISON MASSI',
    'id_empresa' => 8,
    'referencia' => 'RESULT03',
    'midia' => '',
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1543 =>
  array (
    'id' => 1935,
    'nome' => 'IMOVEL TESTE SEABRA',
    'id_empresa' => 8,
    'referencia' => 'IMOVELTESTESEABRA',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1544 =>
  array (
    'id' => 1936,
    'nome' => 'BREVE LANÇAMENTO',
    'id_empresa' => 8,
    'referencia' => 'STAN33',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1545 =>
  array (
    'id' => 1937,
    'nome' => 'BREVE LANÇAMENTO',
    'id_empresa' => 8,
    'referencia' => 'GMR06',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1546 =>
  array (
    'id' => 1938,
    'nome' => 'MY PLACE PARAISO',
    'id_empresa' => 8,
    'referencia' => 'EXATA01',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1547 =>
  array (
    'id' => 1939,
    'nome' => 'ONLY SÃO PAULO ',
    'id_empresa' => 8,
    'referencia' => 'EXTO035',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1548 =>
  array (
    'id' => 1940,
    'nome' => 'PATIO PARADISO',
    'id_empresa' => 8,
    'referencia' => 'FILI001',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1549 =>
  array (
    'id' => 1941,
    'nome' => 'LOJAS - MOEMA',
    'id_empresa' => 8,
    'referencia' => 'LOJA001',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1550 =>
  array (
    'id' => 1942,
    'nome' => 'LOJA- JARDINS',
    'id_empresa' => 8,
    'referencia' => 'LOJA02',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1551 =>
  array (
    'id' => 1943,
    'nome' => 'MOURATO 111',
    'id_empresa' => 8,
    'referencia' => 'FOCAL01',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1552 =>
  array (
    'id' => 1944,
    'nome' => 'JAÚNAS 95',
    'id_empresa' => 8,
    'referencia' => 'FOCAL02',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1553 =>
  array (
    'id' => 1945,
    'nome' => 'HEAVEN',
    'id_empresa' => 8,
    'referencia' => 'ARCH007',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1554 =>
  array (
    'id' => 1946,
    'nome' => 'BREVE LANÇAMENTO',
    'id_empresa' => 8,
    'referencia' => 'CYR062',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1555 =>
  array (
    'id' => 1947,
    'nome' => 'ALL JAZZ',
    'id_empresa' => 8,
    'referencia' => 'JZM005',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1556 =>
  array (
    'id' => 1948,
    'nome' => 'ALL JAZZ',
    'id_empresa' => 8,
    'referencia' => 'JZM005',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1557 =>
  array (
    'id' => 1949,
    'nome' => 'SYMPHONIE',
    'id_empresa' => 8,
    'referencia' => 'JZM006',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1558 =>
  array (
    'id' => 1950,
    'nome' => 'SYMPHONIE',
    'id_empresa' => 8,
    'referencia' => 'JZM006',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1559 =>
  array (
    'id' => 1951,
    'nome' => 'EVOLVE',
    'id_empresa' => 8,
    'referencia' => 'MARQ01',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1560 =>
  array (
    'id' => 1952,
    'nome' => 'BREVE LANÇAMENTO ',
    'id_empresa' => 8,
    'referencia' => 'MITRE008',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1561 =>
  array (
    'id' => 1953,
    'nome' => 'PRIMAVERA MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'MARQ02',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1562 =>
  array (
    'id' => 1954,
    'nome' => 'CANTO DAS ARVORES',
    'id_empresa' => 8,
    'referencia' => 'MARQ03',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1563 =>
  array (
    'id' => 1955,
    'nome' => 'PATEO DAS FLORES',
    'id_empresa' => 8,
    'referencia' => 'MARQ04',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1564 =>
  array (
    'id' => 1956,
    'nome' => 'MAIS ALTOS MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'MARQ05',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1565 =>
  array (
    'id' => 1957,
    'nome' => 'STUDIO 38',
    'id_empresa' => 8,
    'referencia' => 'MARQ06',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1566 =>
  array (
    'id' => 1958,
    'nome' => 'RAIZES MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'MARQ07',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1567 =>
  array (
    'id' => 1959,
    'nome' => 'FLORADA MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'MARQ08',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1568 =>
  array (
    'id' => 1960,
    'nome' => 'INSPIRE MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'MARQ09',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1569 =>
  array (
    'id' => 1961,
    'nome' => 'MAIS ARES MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'MARQ10',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1570 =>
  array (
    'id' => 1962,
    'nome' => 'HELBOR VIVERE ANALIA FRANCO',
    'id_empresa' => 8,
    'referencia' => 'HELB38',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1571 =>
  array (
    'id' => 1963,
    'nome' => 'CHROME MORUMBI',
    'id_empresa' => 8,
    'referencia' => 'MARQ11',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1572 =>
  array (
    'id' => 1964,
    'nome' => 'STATE IBIRAPUERA',
    'id_empresa' => 8,
    'referencia' => 'TRIS38',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1573 =>
  array (
    'id' => 1965,
    'nome' => 'GATE 1 CORPORATE&OFFICES',
    'id_empresa' => 8,
    'referencia' => 'RYAZB37',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1574 =>
  array (
    'id' => 1966,
    'nome' => 'NOVAMERICA - COLORADO ',
    'id_empresa' => 8,
    'referencia' => 'CYR063',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1575 =>
  array (
    'id' => 1967,
    'nome' => 'NOVAMERICA - MICHIGAN RES.',
    'id_empresa' => 8,
    'referencia' => 'CYR064',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1576 =>
  array (
    'id' => 1968,
    'nome' => 'NOVAMERICA -COLORADO RES.',
    'id_empresa' => 8,
    'referencia' => 'CYR065',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1577 =>
  array (
    'id' => 1969,
    'nome' => 'NOVAMERICA - FLORIDA RES.',
    'id_empresa' => 8,
    'referencia' => 'CYR066',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1578 =>
  array (
    'id' => 1970,
    'nome' => 'NOVAMERICA - CALIFORNIA RES.',
    'id_empresa' => 8,
    'referencia' => 'CYR067',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1579 =>
  array (
    'id' => 1971,
    'nome' => 'LIBERTY VILA PRUDENTE',
    'id_empresa' => 8,
    'referencia' => 'REITZ003',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1580 =>
  array (
    'id' => 1972,
    'nome' => 'VIVA BENX NAÇÕES UNIDAS',
    'id_empresa' => 8,
    'referencia' => 'BENX20',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1581 =>
  array (
    'id' => 1973,
    'nome' => 'THE PLACE MOOCA HOME ',
    'id_empresa' => 8,
    'referencia' => 'DIAL38',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1582 =>
  array (
    'id' => 1974,
    'nome' => 'THE PLACE MOOCA OFFICES',
    'id_empresa' => 8,
    'referencia' => 'DIAL39',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1583 =>
  array (
    'id' => 1975,
    'nome' => 'LE QUARTIER MOEMA ',
    'id_empresa' => 8,
    'referencia' => 'TEC030',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1584 =>
  array (
    'id' => 1976,
    'nome' => 'SPAZIO VITA ',
    'id_empresa' => 8,
    'referencia' => 'HELB39',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1585 =>
  array (
    'id' => 1977,
    'nome' => 'HILL HOUSE CONDOMINIUM',
    'id_empresa' => 8,
    'referencia' => 'CAM0002',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1586 =>
  array (
    'id' => 1978,
    'nome' => 'CLIMA MASCOTE',
    'id_empresa' => 8,
    'referencia' => 'EZTEC57',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1587 =>
  array (
    'id' => 1979,
    'nome' => 'I9 HAUSEN',
    'id_empresa' => 8,
    'referencia' => 'I90001',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1588 =>
  array (
    'id' => 1980,
    'nome' => 'TATE REAL PARQUE',
    'id_empresa' => 8,
    'referencia' => 'DITO001',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1589 =>
  array (
    'id' => 1981,
    'nome' => 'IDEA CONDOMINIUM',
    'id_empresa' => 8,
    'referencia' => 'DITO002',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1590 =>
  array (
    'id' => 1982,
    'nome' => 'GUEDALA MIX',
    'id_empresa' => 8,
    'referencia' => 'COPLAM1',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1591 =>
  array (
    'id' => 1983,
    'nome' => 'SPAZIO VITA MORUMBI ',
    'id_empresa' => 8,
    'referencia' => 'HELB40',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1592 =>
  array (
    'id' => 1984,
    'nome' => 'GUEDALA NEXT',
    'id_empresa' => 8,
    'referencia' => 'COPLAM2',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1593 =>
  array (
    'id' => 1985,
    'nome' => 'NEO CONX SAPOPEMBA ',
    'id_empresa' => 8,
    'referencia' => 'CONX007',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1594 =>
  array (
    'id' => 1986,
    'nome' => 'ALBA VILA MADALENA ',
    'id_empresa' => 8,
    'referencia' => 'ZAR015',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1595 =>
  array (
    'id' => 1987,
    'nome' => 'NOW OFFICES',
    'id_empresa' => 8,
    'referencia' => 'TARJ10',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1596 =>
  array (
    'id' => 1988,
    'nome' => 'BREVE LANÇAMENTO ',
    'id_empresa' => 8,
    'referencia' => 'LAVVI05',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1597 =>
  array (
    'id' => 1989,
    'nome' => 'EUROPA 105',
    'id_empresa' => 8,
    'referencia' => 'META002',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1598 =>
  array (
    'id' => 1990,
    'nome' => 'PIAZZA SAN GIOVANNI',
    'id_empresa' => 8,
    'referencia' => 'FAO002',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1599 =>
  array (
    'id' => 1991,
    'nome' => 'PIAZZA SAN SIMONE',
    'id_empresa' => 8,
    'referencia' => 'FAO003',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1600 =>
  array (
    'id' => 1992,
    'nome' => 'PIAZZA SAN GIUDA TADDEO',
    'id_empresa' => 8,
    'referencia' => 'FAO004',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1601 =>
  array (
    'id' => 1993,
    'nome' => 'PIAZZA SAN TOMMASO',
    'id_empresa' => 8,
    'referencia' => 'FAO005',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1602 =>
  array (
    'id' => 1994,
    'nome' => 'PIAZZA SAN TOMMASO',
    'id_empresa' => 8,
    'referencia' => 'FAO005',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1603 =>
  array (
    'id' => 1995,
    'nome' => 'PIAZZA SAN MATTIA',
    'id_empresa' => 8,
    'referencia' => 'FAO007',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1604 =>
  array (
    'id' => 1996,
    'nome' => 'BREVE LANÇAMENTO',
    'id_empresa' => 8,
    'referencia' => 'CONX006',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1605 =>
  array (
    'id' => 1997,
    'nome' => 'PALMER 683',
    'id_empresa' => 8,
    'referencia' => 'HELB41',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1606 =>
  array (
    'id' => 1998,
    'nome' => 'YOU VILA MADALENA ',
    'id_empresa' => 8,
    'referencia' => 'YOU038',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1607 =>
  array (
    'id' => 1999,
    'nome' => 'OXY ALTO DA LAPA',
    'id_empresa' => 8,
    'referencia' => 'TIB020',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1608 =>
  array (
    'id' => 2000,
    'nome' => 'VN OSCAR FREIRE',
    'id_empresa' => 8,
    'referencia' => 'VIT0039',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1609 =>
  array (
    'id' => 2001,
    'nome' => 'VISION PINHEIROS',
    'id_empresa' => 8,
    'referencia' => 'GAF100',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1610 =>
  array (
    'id' => 2002,
    'nome' => 'L FOR CONSOLAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'LIV008',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1611 =>
  array (
    'id' => 2003,
    'nome' => 'L FOR CONSOLAÇÃO',
    'id_empresa' => 8,
    'referencia' => 'LIV008',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1612 =>
  array (
    'id' => 2004,
    'nome' => 'GUEST SAUDE',
    'id_empresa' => 8,
    'referencia' => 'NOVA001',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1613 =>
  array (
    'id' => 2005,
    'nome' => 'MONDIAL SÃO BERNARDO',
    'id_empresa' => 8,
    'referencia' => 'SETIN19',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1614 =>
  array (
    'id' => 2006,
    'nome' => 'HELBOR FAMILY GARDEN',
    'id_empresa' => 8,
    'referencia' => 'HELB42',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1615 =>
  array (
    'id' => 2007,
    'nome' => 'HELBOR TRILOGY HOME',
    'id_empresa' => 8,
    'referencia' => 'HELB43',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1616 =>
  array (
    'id' => 2008,
    'nome' => 'HELBOR IDEALE',
    'id_empresa' => 8,
    'referencia' => 'HELB44',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1617 =>
  array (
    'id' => 2009,
    'nome' => 'MOVEMENT CITY & LIFE',
    'id_empresa' => 8,
    'referencia' => 'HELB45',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1618 =>
  array (
    'id' => 2010,
    'nome' => 'PRIME HOUSE SBC',
    'id_empresa' => 8,
    'referencia' => 'EZTEC58',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1619 =>
  array (
    'id' => 2011,
    'nome' => 'ROYALE MERIT',
    'id_empresa' => 8,
    'referencia' => 'EZTEC59',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1620 =>
  array (
    'id' => 2012,
    'nome' => 'GRAN VILLAGE SBC',
    'id_empresa' => 8,
    'referencia' => 'EZTEC60',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1621 =>
  array (
    'id' => 2013,
    'nome' => 'ROYALE TRESÓR',
    'id_empresa' => 8,
    'referencia' => 'EZTEC61',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1622 =>
  array (
    'id' => 2014,
    'nome' => 'ROYALE PRESTIGE',
    'id_empresa' => 8,
    'referencia' => 'EZTEC62',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1623 =>
  array (
    'id' => 2015,
    'nome' => 'TERRAÇOS CAMPESTRES',
    'id_empresa' => 8,
    'referencia' => 'TRIS39',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1624 =>
  array (
    'id' => 2016,
    'nome' => 'CENARIO SANTO ANDRE',
    'id_empresa' => 8,
    'referencia' => 'CONX007',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1625 =>
  array (
    'id' => 2017,
    'nome' => 'DOMANI ',
    'id_empresa' => 8,
    'referencia' => 'MBIGU03',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1626 =>
  array (
    'id' => 2018,
    'nome' => 'CARPE DIEM BOSQUE MAIA',
    'id_empresa' => 8,
    'referencia' => 'HELB46',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1627 =>
  array (
    'id' => 2019,
    'nome' => 'CARPE DIEM BOSQUE MAIA',
    'id_empresa' => 8,
    'referencia' => 'HELB46',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1628 =>
  array (
    'id' => 2020,
    'nome' => 'HELBOR ENJOY GUARULHOS',
    'id_empresa' => 8,
    'referencia' => 'HELB48',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1629 =>
  array (
    'id' => 2021,
    'nome' => 'UP OFFICES',
    'id_empresa' => 8,
    'referencia' => 'HELB49',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1630 =>
  array (
    'id' => 2022,
    'nome' => 'DEZ BOM RETIRO',
    'id_empresa' => 8,
    'referencia' => 'CURY002',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1631 =>
  array (
    'id' => 2023,
    'nome' => 'VOSS GUARULHOS',
    'id_empresa' => 8,
    'referencia' => 'TUREKI1',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1632 =>
  array (
    'id' => 2024,
    'nome' => 'PLANO & CUPECE',
    'id_empresa' => 8,
    'referencia' => 'PLANO013',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1633 =>
  array (
    'id' => 2025,
    'nome' => 'MAGICAL HOME',
    'id_empresa' => 8,
    'referencia' => 'CAMBUR2',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1634 =>
  array (
    'id' => 2026,
    'nome' => 'SKY HOME',
    'id_empresa' => 8,
    'referencia' => 'CAMBUR3',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1635 =>
  array (
    'id' => 2027,
    'nome' => 'CONDOMINIO MANDI',
    'id_empresa' => 8,
    'referencia' => 'IMANG01',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1636 =>
  array (
    'id' => 2028,
    'nome' => 'VISTA POLITECNICA',
    'id_empresa' => 8,
    'referencia' => 'PROH003',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1637 =>
  array (
    'id' => 2029,
    'nome' => 'VERTIZ CLUB HOME',
    'id_empresa' => 8,
    'referencia' => 'EZTEC63',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1638 =>
  array (
    'id' => 2030,
    'nome' => 'I LIVE ITAIM',
    'id_empresa' => 8,
    'referencia' => 'SETIN20',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1639 =>
  array (
    'id' => 2031,
    'nome' => 'BROOKLIN STUDIOS',
    'id_empresa' => 8,
    'referencia' => 'SETIN21',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1640 =>
  array (
    'id' => 2032,
    'nome' => 'MAXIMO ZONA SUL',
    'id_empresa' => 8,
    'referencia' => 'CURY003',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1641 =>
  array (
    'id' => 2033,
    'nome' => 'ED. ALEIXO GARCIA',
    'id_empresa' => 8,
    'referencia' => 'BARB023',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1642 =>
  array (
    'id' => 2034,
    'nome' => 'CORPORATE ALAMEDAS',
    'id_empresa' => 8,
    'referencia' => 'ROFER01',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1643 =>
  array (
    'id' => 2035,
    'nome' => 'IMAN VILA MARIANA',
    'id_empresa' => 8,
    'referencia' => 'TARJ11',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1644 =>
  array (
    'id' => 2036,
    'nome' => 'KEY MOEMA',
    'id_empresa' => 8,
    'referencia' => 'TEGRA011',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1645 =>
  array (
    'id' => 2037,
    'nome' => 'QUATTRO CASA JARDIM -BROOKLIN',
    'id_empresa' => 8,
    'referencia' => 'SEED01',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1646 =>
  array (
    'id' => 2038,
    'nome' => 'LOUNGE 71',
    'id_empresa' => 8,
    'referencia' => 'MAC023',
    'midia' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);

        foreach ($itens as $key => $item) {
            App\Models\Produtos::create($item);
        }

    }
}
