<?php

use Illuminate\Database\Seeder;
use App\Models\Imovel\AreasComuns;

class AreasComunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itens = [
          [1,'Piscina com raia ','2015-12-21 01:09:36'],
          [12,'Piscina climatizada','2015-12-21 10:32:55'],
          [13,'Piscina Coberta','2015-12-21 10:33:42'],
          [14,'Piscinas Adulto e Infantil','2015-12-21 10:34:25'],
          [15,'Piscina c/ Iluminação de Fibra Optica','2015-12-21 10:35:07'],
          [16,'Piscina','2015-12-21 10:36:07'],
          [17,'Piscina com Borda Infinita','2015-12-21 10:36:32'],
          [18,'Quadra Poliesportiva','2015-12-21 10:37:52'],
          [19,'Quadra de Tênis','2015-12-21 10:38:12'],
          [20,'Quadra de Squash','2015-12-21 10:38:32'],
          [21,'Quadra Gramada','2015-12-21 10:39:10'],
          [22,'Quadra de Futebol de Salão','2015-12-21 10:39:38'],
          [23,'Quadra de Basquete','2015-12-21 10:40:00'],
          [24,'Quadra de Volei','2015-12-21 10:40:20'],
          [25,'Campo de Futebol','2015-12-21 10:40:52'],
          [26,'Campo de Futebol society','2015-12-21 10:41:25'],
          [27,'Campo de futebol c/ grama sintética','2015-12-21 10:41:59'],
          [28,'Sala de Ginástica','2015-12-21 10:42:44'],
          [30,'Fitness','2015-12-21 10:44:25'],
          [31,'Academia de Ginástica','2015-12-21 10:45:02'],
          [32,'Spa ','2015-12-21 10:45:52'],
          [33,'Spa & Sauna','2015-12-21 10:46:30'],
          [34,'Sauna úmida','2015-12-21 10:46:52'],
          [35,'Sauna Seca','2015-12-21 10:47:07'],
          [36,'Sala de Descanso','2015-12-21 10:47:37'],
          [37,'Sala de Massagem','2015-12-21 10:47:52'],
          [38,'Ducha','2015-12-21 10:48:21'],
          [39,'Sauna & Ducha ','2015-12-21 10:48:47'],
          [40,'Sauna & Sala de Descanso  ','2015-12-21 10:49:27'],
          [41,'Solarium','2015-12-21 10:50:09'],
          [42,'Deck Molhado','2015-12-21 10:50:40'],
          [43,'Espaço Mulher','2015-12-21 10:51:10'],
          [45,'Pet Place','2016-10-07 11:11:21'],
          [46,'Área Verde Preservada','2015-12-21 10:52:34'],
          [47,'Bosque','2015-12-21 10:52:58'],
          [48,'Jardins ','2015-12-21 10:53:33'],
          [49,'Trilha Ecológica','2015-12-21 10:54:15'],
          [50,'Trilha c/ estações de Ginástica','2015-12-21 01:10:41'],
          [52,'Jardins c/ Espelho D´Agua ','2015-12-21 10:56:44'],
          [53,'Espelho D´Agua','2015-12-21 10:57:22'],
          [54,'Pomar','2015-12-21 10:57:52'],
          [55,'Fitness Externo','2015-12-21 10:58:11'],
          [56,'Estações de Ginástica Outdoor','2015-12-21 10:58:37'],
          [57,'Redário','2015-12-21 10:58:50'],
          [58,'Gazebo','2015-12-21 10:59:12'],
          [59,'Praça','2015-12-21 10:59:27'],
          [60,'Praça com Gazebo','2015-12-21 10:59:44'],
          [61,'Espaço Zen','2015-12-21 11:00:28'],
          [62,'Pista de Caminhada','2015-12-21 11:00:57'],
          [63,'Pista de Cooper','2015-12-21 11:01:11'],
          [64,'Pista de Corrida','2015-12-21 11:01:30'],
          [65,'Quiosque com Churrasqueira','2015-12-21 11:02:15'],
          [67,'Churrasqueira & Forno de Pizza','2015-12-21 11:03:45'],
          [68,'Quiosque','2015-12-21 11:04:03'],
          [69,'Quiosque Gourmet','2015-12-21 11:04:20'],
          [70,'Gazebo Gourmet','2015-12-21 11:04:36'],
          [71,'Forno de Pizzas','2015-12-21 11:04:55'],
          [72,'Churrasqueira','2015-12-21 11:06:13'],
          [73,'Bicicletário','2015-12-21 11:06:39'],
          [74,'Bike Sharing','2016-10-07 11:09:43'],
          [75,'Car Share','2015-12-21 11:07:10'],
          [76,'Playground','2015-12-21 11:09:22'],
          [77,'Brinquedoteca','2015-12-21 11:09:59'],
          [78,'Sala de recreação Infantil','2015-12-21 11:10:42'],
          [79,'Salão de Festas','2015-12-21 11:11:12'],
          [80,'Salão de Jogos','2015-12-21 11:11:28'],
          [81,'Sala de Cinema','2015-12-21 11:11:43'],
          [82,'Espaço Gourmet','2015-12-21 11:12:09'],
          [83,'Lareira','2015-12-21 11:12:41'],
          [84,'Lounge Social','2015-12-21 11:12:58'],
          [85,'Lounge de Festas','2015-12-21 11:13:15'],
          [86,'Lounge Gourmet','2015-12-21 11:13:31'],
          [87,'Salão de Jogos Infantil','2015-12-21 11:14:14'],
          [88,'Salão de Jogos Juvenil','2015-12-21 11:14:34'],
          [89,'Salão de Jogos Adultos','2015-12-21 11:14:52'],
          [90,'Sala de Jogos','2015-12-21 11:15:22'],
          [91,'Lan House','2015-12-21 11:15:39'],
          [92,'Home Office','2015-12-21 11:16:52'],
          [93,'Sala de Reuniões','2015-12-21 11:17:08'],
          [94,'Lavanderia Coletiva','2015-12-21 11:17:32'],
          [95,'Sala de Congelados','2015-12-21 11:17:48'],
          [96,'Adega Climatizada','2015-12-21 11:18:04'],
          [97,'Adega','2015-12-21 11:18:15'],
          [98,'Lounge','2015-12-21 11:19:15'],
          [99,'Hall Social','2015-12-21 11:19:33'],
          [100,'Lobby','2015-12-21 11:19:45'],
          [101,'Lobby c/ Pé Direito Duplo','2015-12-21 11:20:06'],
          [102,'Lobby c/ Pé Direito Triplo','2015-12-21 11:20:28'],
          [103,'Mezzanino','2015-12-21 11:20:47'],
          [104,'Bar & Restaurante','2015-12-21 11:21:19'],
          [105,'Bar da Piscina','2015-12-21 11:21:35'],
          [106,'Restaurante','2015-12-21 11:21:54'],
          [107,'Bar','2015-12-21 11:22:06'],
          [108,'Sala de Bricolagem','2015-12-21 11:22:33'],
          [109,'Sala de Música','2015-12-21 11:22:53'],
          [110,'Oficina','2015-12-21 11:23:10'],
          [111,'Ateliê','2015-12-21 11:23:24'],
          [112,'Guarita de Segurança','2015-12-21 11:24:02'],
          [113,'Guarita Blindada','2015-12-21 11:24:16'],
          [114,'Portaria Central','2015-12-21 11:24:34'],
          [115,'Portões com Clausura','2015-12-21 11:25:03'],
          [116,'Portões Automáticos','2015-12-21 11:25:24'],
          [119,'Sistema de Segurança','2015-12-21 11:27:30'],
          [120,'Cameras & Sensores de Segurança','2015-12-21 11:27:58'],
          [121,'Wireless','2015-12-21 11:28:39'],
          [122,'Wireless nas Áreas Comuns','2015-12-21 11:29:00'],
          [124,'Sistema de Biometria','2015-12-21 11:29:41'],
          [125,'Áreas Comuns Equipadas & Decoradas','2015-12-21 11:30:34'],
          [126,'Consierge','2015-12-21 11:31:25'],
          [128,'Serviços Pay-per-Use ','2015-12-21 11:32:10'],
          [129,'Serviços Condominiais Básicos','2015-12-21 11:32:54'],
          [130,'Serviços ( Básicos & Pay-per-Use)','2015-12-21 11:33:43'],
          [131,'Estacionamento para Visitantes','2015-12-21 11:34:22'],
          [132,'Estacionamento para Clientes','2015-12-21 11:34:39'],
          [133,'Vallet Park','2015-12-21 11:34:53'],
          [134,'Segurança Planejada','2015-12-21 11:35:51'],
          [135,'Infraestrutura para Automação','2015-12-21 11:48:00'],
          [136,'Infraestrutura para Ar Condicionado','2015-12-21 11:48:23'],
          [137,'Infraestrutura para Biometria','2015-12-21 11:48:51'],
          [138,'Lazer na Cobertura','2015-12-21 11:49:29'],
          [139,'Auditório','2015-12-21 12:00:40'],
          [140,'Gestão Patrimonial','2015-12-21 12:01:17'],
          [141,'Serviços De Manutenção Patrimonial','2015-12-21 12:01:51'],
          [142,'Salão para Coffe Break','2015-12-21 12:02:27'],
          [143,'Piso Elevado','2015-12-21 12:02:52'],
          [145,'Infra para Ar Condicionado Split','2015-12-21 01:10:10'],
          [150,'Infra p/ Ar Condicionado Central','2015-12-21 12:06:54'],
          [151,'Gerador de Energia','2015-12-21 12:07:21'],
          [152,'Elevadores Panorâmicos','2015-12-21 12:08:09'],
          [153,'Elevadores Privativos','2015-12-21 12:08:26'],
          [154,'Lojas no Terreo','2015-12-21 12:09:59'],
          [156,'Paisagismo','2015-12-21 12:12:28'],
          [158,'Office Center','2016-01-06 05:41:22'],
          [160,'Quadra esportiva coberta','2016-01-07 12:44:19'],
          [161,'Terraço Grill ','2016-01-07 12:44:53'],
          [162,'Piscina coberta climatizada','2016-01-07 02:45:35'],
          [163,'Salão de Festas Gourmet ','2016-01-07 02:46:17'],
          [164,'Piscina com raia 25 m','2016-01-07 02:50:17'],
          [165,'Terraço Gourmet','2016-01-07 02:50:35'],
          [166,'Piscina infantil','2016-01-07 02:51:31'],
          [167,'Salão Multiuso','2016-01-07 02:53:24'],
          [168,'Imovel Mobiliado ','2016-01-07 04:23:04'],
          [169,'Lounge Externo c/ Lareira','2016-01-07 05:24:00'],
          [170,'Sala de Pilates','2016-01-07 05:48:19'],
          [172,'Piscina coberta com raia ','2016-01-07 05:22:08'],
          [173,'Sala de Lutas','2016-01-08 04:13:32'],
          [174,'Salão de Festas Adulto','2016-01-08 04:13:54'],
          [175,'Salão de Festas Juvenil','2016-01-08 04:14:17'],
          [176,'Salão de Festas Infantil','2016-01-08 04:14:49'],
          [178,'Quadra de StreetBall','2016-01-08 05:26:03'],
          [179,'Quadra Recreativa','2016-01-08 05:26:26'],
          [180,'Praça Central c/ Fonte ','2016-01-14 08:10:23'],
          [181,'Piscina adulto & infantil c/ Cascata','2016-01-14 08:11:05'],
          [182,'Pista de Cooper c/ estações ginástica','2016-01-14 08:11:51'],
          [183,'Infraestrutura p/ Aspiração Central','2016-02-03 12:20:55'],
          [187,'Sala para Motoristas','2016-02-03 12:28:13'],
          [188,'Wi-fi','2016-02-03 12:28:45'],
          [189,'Wi-fi nas Áreas Comuns','2016-02-03 12:29:43'],
          [190,'Espaço Teen','2016-02-03 12:30:14'],
          [191,'Lounge Teen','2016-02-03 12:30:31'],
          [192,'Biometria e Reconhecimento Facial','2016-02-03 12:30:58'],
          [193,'Elevadores com Biometria','2016-02-03 12:31:23'],
          [194,'Oficina para Bicicletas','2016-02-03 12:31:46'],
          [195,'Infraestrutura p/ Calefação de Piso','2016-02-03 12:32:21'],
          [196,'Tomadas padrão USB','2016-02-03 12:32:49'],
          [197,'Tomadas p/ carga de Carro Elétrico','2016-02-03 12:35:52'],
          [198,'Bicicletas Elétricas','2016-02-03 12:34:08'],
          [199,'Laundry Room','2016-02-03 12:34:54'],
          [200,'Piscina Adulto','2016-02-03 12:36:46'],
          [202,'Playground Baby','2016-02-03 12:37:45'],
          [203,'Bike Sharing ','2016-02-03 01:26:19'],
          [204,'Car Sharing','2016-02-03 01:26:42'],
          [205,'Cabeamento p/ TV a Cabo/ Internet ','2016-02-03 01:27:31'],
          [206,'Infraestrutura p/ Ar Condicionado','2016-02-03 01:27:59'],
          [207,'Biometria nas Áreas Comuns','2016-02-03 03:28:08'],
          [208,'Campo de Futebol Gramado','2016-02-03 07:04:37'],
          [209,'Half Pipe (skate)','2016-02-03 07:05:03'],
          [210,'Quadra de Areia','2016-02-03 07:05:24'],
          [211,'Hidromassagem','2016-02-03 07:05:44'],
          [212,'Bike Indoor','2016-02-03 07:06:09'],
          [213,'Pista de Bocha','2016-02-03 07:06:43'],
          [214,'Sala de Yoga','2016-02-03 07:07:12'],
          [215,'Lanchonete','2016-02-03 07:07:37'],
          [216,'Snooker Bar','2016-02-10 01:57:40'],
          [217,'Snack Bar','2016-02-10 01:57:59'],
          [218,'Fechadura Biométrica','2016-02-10 01:58:29'],
          [219,'Tratamento Acústico do Piso','2016-02-10 01:58:58'],
          [220,'Sala de Spinning','2016-02-10 06:11:27'],
          [221,'sky Lounge','2016-02-10 06:11:47'],
          [222,'Sports Lounge','2016-02-10 06:12:07'],
          [223,'Porte Cochére','2016-02-10 06:12:32'],
          [224,'Coworking room','2016-02-11 02:39:49'],
          [225,'Biribol','2016-03-03 05:24:03'],
          [226,'Boulevard','2016-03-23 06:22:33'],
          [227,'Piscina Infantil','2016-03-23 06:22:54'],
          [228,'Home Theater','2016-03-23 06:23:12'],
          [229,'Centro de conveniencias','2016-03-29 06:55:36'],
          [230,'mall com lojas','2016-03-29 06:55:59'],
          [231,'Biblioteca','2016-04-06 04:56:46'],
          [232,'Bangalôs','2016-05-09 01:02:48'],
          [233,'Ar Condicionado ( tipo VRV)','2016-05-09 01:03:27'],
          [234,'café','2016-06-08 01:23:16'],
          [235,'Apartamento Compartilhado','2016-06-08 01:48:11'],
          [236,'Lounge Externo','2016-06-08 01:53:51'],
          [237,'Lounge Bar','2016-06-08 01:54:13'],
          [238,'Game Room','2016-06-08 01:54:35'],
          [239,'Home Theater','2016-06-08 01:55:00'],
          [240,'Fechadura Eletrônica','2016-06-08 04:58:40'],
          [241,'Infra p/ Wireless ','2016-06-08 04:59:04'],
          [242,'Pista de Skate','2016-06-08 07:25:13'],
          [243,'Pista de Bicicross','2016-06-08 07:25:32'],
          [244,'Quadra de Volei de Praia','2016-06-08 07:26:13'],
          [245,'Horta','2016-06-08 07:26:33'],
          [246,'Bosque Privativo','2016-06-10 01:23:53'],
          [247,'Condominio Clube','2016-06-10 01:24:17'],
          [248,'Casa do Tarzã','2016-06-10 01:24:49'],
          [249,'Spa c/ Ofurô','2016-06-10 01:39:45'],
          [250,'Mini Quadra de Esportes ','2016-08-01 08:40:10'],
          [251,'Espaço Locker','2016-09-02 11:14:19'],
          [252,'Parede de Escalada','2016-09-19 08:30:03'],
          [253,'Praia Artificial','2017-02-16 07:43:13'],
          [254,'Poço Artesiano ','2016-09-28 05:47:05'],
          [255,'Sala de Motoristas','2016-09-28 05:47:34'],
          [256,'Simulador de Golfe','2016-10-02 09:41:48'],
          [257,'Hobby Box ','2016-10-08 02:55:43'],
          [258,'Pizza Lift','2016-10-15 04:10:25'],
          [259,'Business Lounge','2016-10-15 04:11:04'],
          [260,'Lounge externo','2016-10-15 04:11:33'],
          [261,'Cinema ao ar Livre','2016-10-16 09:39:40'],
          [262,'Lounge Externo','2016-10-16 09:40:16'],
          [263,'Quadra de Areia','2016-10-20 11:58:37'],
          [264,'Site Condominial (Portal de Serviços)','2016-10-21 12:42:31'],
          [265,'Mini Golfe','2016-10-21 11:43:16'],
          [266,'Quadra de Peteca','2016-10-21 11:43:56'],
          [267,'Sala de Leitura ','2016-10-22 02:13:07'],
          [268,'Business Lounge','2016-11-19 09:43:52'],
          [269,'Cobertura Compartilhada','2016-11-19 09:44:37'],
          [270,'Piscina Descoberta','2016-11-19 09:45:03'],
          [271,'Putting Green','2016-12-08 08:32:38'],
          [272,'Complexo Aquático','2017-02-16 07:44:10'],
          [273,'MegaLounge ','2017-05-18 01:48:28'],
          [274,'CoWorking Space','2017-05-22 02:07:33'],
          [275,'Sky Bar ','2017-06-06 03:20:16'],
          [276,'Wine Bar ','2017-10-16 01:41:59'],
          [277,'Escada com medidor de calorias','2018-08-09 05:47:10'],
          [278,'Cozinha Compartilhada','2018-08-09 05:47:37'],
          [279,'Ferramentas Compartilhadas','2018-08-09 05:48:00'],
        ];

        foreach ($itens as $key => $item) {
            $area = new AreasComuns();
            $area->id = $item[0];
            $area->nome = $item[1];
            $area->save();
        }
    }
}
