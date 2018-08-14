<div class="row">

    <div class="col-xs-12">

        <div class="well">
            <p style="font-weight:bolder;">Prezado(a) {{ $chamado->cliente->nome }},</p>
            <p>Em primeiro lugar gostaria de agradecer pela consulta realizada ao Empreendimento <b>{{ $emp->nome }}</b>.</p>
            <p>O meu nome é {{ ucfirst(\Auth::user()->name ?? '') }}, trabalho na Seabra Consultoria de Imóveis ltda e me coloco a disposição para lhe ajudar da melhor forma possível, visando que conheça esse ótimo imóvel que consultou.</p>
        </div>

    </div>

    <div class="col-xs-12">

        <h4 class="text-center" style="text-transform: uppercase;">Segue Abaixo as informações solicitadas</h4>

        <div class="well" style="background-color:#f5f5f5;min-height:700px">

            <div class="row" style="background-color:#f5f5f5">

                <div class="col-md-6 col-xs-6" style="">

                    <div class="list-group">
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Referência</h4>
                            <p class="list-group-item-text">{{ $emp->nome }}</p>
                            <p class="list-group-item-text">{{ $empreendimento['referencia'] }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Endereço</h4>
                            <p class="list-group-item-text">{{ $empreendimento['extras'][0]['endereco'] }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Bairro</h4>
                            <p class="list-group-item-text">{{ $empreendimento['extras'][0]['bairro'] }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Ponto de referência</h4>
                            <p class="list-group-item-text">{{ $empreendimento['estproximas'] }}</p>
                        </a>

                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Dormitórios</h4>
                            <p class="list-group-item-text">{{ $empreendimento['tipologia']['dorms'] }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Suites</h4>
                            <p class="list-group-item-text">{{ $empreendimento['tipologia']['suites'] }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Vagas</h4>
                            <p class="list-group-item-text">{{ $empreendimento['tipologia']['vagas'] }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Área Privativa</h4>
                            <p class="list-group-item-text">{{ $empreendimento['tipologia']['area'] }}</p>
                        </a>

                    </div>

                </div>

                <div class="col-md-6 col-xs-6" style="">

                    <div class="list-group">

                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Estágio</h4>
                            <p class="list-group-item-text">{{ $empreendimento['faseobra'] }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Data Entrega (previsão)</h4>
                            <p class="list-group-item-text">{{ $imovel[0]->emp_previsao_entrega ? (new \DateTime($imovel[0]->emp_previsao_entrega))->format('d/m/Y') : '' }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Preço (a partir de)</h4>
                            <p class="list-group-item-text">{{ $empreendimento['tipologia']['quadrado'] }}</p>
                        </a>

                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Incorporação</h4>
                            <p class="list-group-item-text">{{ $empreendimento['incorporacao'] }}</p>
                        </a>

                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Construção</h4>
                            <p class="list-group-item-text">{{ $empreendimento['construcao'] }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Arquitetura</h4>
                            <p class="list-group-item-text">{{ $empreendimento['arquitetura'] }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">No de torres</h4>
                            <p class="list-group-item-text">{{ $empreendimento['qtdtorres'] }}</p>
                        </a>
                        <a href="#" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">No de unidades</h4>
                            <p class="list-group-item-text">{{ $empreendimento['qtdunidades'] }}</p>
                        </a>
                        <a href="{{ url('http://www.seabra.com.br/' . $empreendimento['extras'][0]['link']) }}" class="list-group-item" style="border:none;background-color:#f5f5f5">
                            <h4 class="list-group-item-heading">Link do site <a href="{{ url('http://www.seabra.com.br/' . $empreendimento['extras'][0]['link']) }}" class="btn btn-primary" style="margin-left:15px">Acessar</a></h4>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-xs-12">

        <h4 class="text-center" style="text-transform: uppercase;">Detalhes do Projeto</h4>
        <div class="well">
            <div class="row">
              @foreach($decricaoProjeto as $decricao)
              <span>{{ $decricao->des_basica }}</span> @endforeach
          </div>
        </div>

    </div>

    <div class="col-xs-12">

        <h4 class="text-center" style="text-transform: uppercase;">Tipologias Existentes</h4>
        <div class="well">
          <div class="row">
            <ul>
                @foreach($tipologias as $tipologia)
                <li>{{ $tipologia['tipologiaExtenso'] }}</li>
                @endforeach
            </ul>
          </div>
        </div>

    </div>

    <div class="col-xs-12">

        <h4 class="text-center" style="text-transform: uppercase;">Áreas comuns</h4>
        <div class="well">
            <div class="row">
                <ul>
                    @foreach($areasComuns as $area)
                    <li>{{ $area->arc_nome }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

    <h4 class="text-center" style="text-transform: uppercase;">Imagens (Empreendimento)</h4>
    <div class="col-xs-12" style="background-color:#0330b5;padding:1em">

        <div class="row">

            <div class="col-xs-12" >

                <div class="row">
                  <!--
                    <div class="col-md-12" style="padding:0">
                        <img class="img" style="width:100%;max-width:100%;min-height:200px;max-height:200px;" src="{{ $imagemFachada }}" alt="..." />
                    </div>
                  -->
                    @foreach($imagensLazer as $imagem)
                    <div class="{{ $loop->first || $loop->last ? 'col-md-12 col-sm-12 col-xs-12' : 'col-md-6 col-sm-6 col-xs-6' }}" style="padding:0">
                        <img class="img" style="width:100%;max-width:100%;min-height:250px;max-height:250px" src="{{ $imagem }}" alt="..." />
                    </div>
                    @endforeach
                    <!--
                    <div class="col-md-12" style="padding:0">
                        <img class="img" style="width:100%;max-width:100%;min-height:200px;max-height:200px;" src="{{ $imagemFooter }}" alt="..." />
                    </div>
                    -->
                </div>
            </div>
        </div>

    </div>

    <div class="col-xs-12" style="background-color:#0330b5;padding:2em">

        <div class="row">
            <div class="text-center">
                <div class="col-xs-12 text-center" style="background-color:white;">
                    <h4 style="color:#0330b5">AGENDE A SUA VISITA!</h4>
                    <h4>Aguardo o seu retorno.</h4>
                    <h4>Atenciosamente,</h4>
                    <h4>{{ \Auth::user()->name }}</h4>
                    <h4>Seabra Consultoria de Imóveis Ltda</h4>
                    <h4>No Creci {{ \Auth::user()->creci }}</h4>
                    <h4><b style="color:black">Celular/WhatsApp {{ \Auth::user()->celular }}</b></h4>
                </div>
            </div>
        </div>

    </div>

</div>
