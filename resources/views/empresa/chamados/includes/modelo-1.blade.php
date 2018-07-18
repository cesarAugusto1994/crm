<div class="well">
<p><b>Prezado {{ $chamado->cliente->nome }},</b></p>
<p>{{ $saudacao }} - Tudo bem ?.</p>
<p>Em primeiro lugar gostaria de agradecer pela consulta realizada ao Empreendimento {{ $emp->nome }}.</p>
<p>O meu nome é {{ ucfirst($chamado->responsavel->name ?? '') }},
  trabalho na Seabra Consultoria de Imóveis ltda e me coloco à disposição para lhe ajudar
   da melhor forma possível,
visando que conheça esse ótimo imóvel que consultou.</p>
</div>

<h4 class="text-center" style="text-transform: uppercase;">Segue Abaixo as informações solicitadas</h4>

<div class="well">
<div class="row">

    <table class="table table-bordered">

          <tbody>

            <tr>
              <td>Endereco</td>
              <td>{{ $empreendimento['extras'][0]['endereco'] }}</td>
            </tr>

            <tr>
                <td>Bairro</td>
                <td>{{ $empreendimento['extras'][0]['bairro'] }}</td>
            </tr>

            <tr>
              <td>Ponto de referência</td>
              <td>{{ $empreendimento['estproximas'] }}</td>
            </tr>

            <tr>
              <td>Dormitórios</td>
              <td>{{ $empreendimento['tipologia']['dorms'] }}</td>
            </tr>

            <tr>
              <td>Suites</td>
              <td>{{ $empreendimento['tipologia']['suites'] }}</td>
            </tr>

            <tr>
                <td>Vagas</td>
                <td>{{ $empreendimento['tipologia']['vagas'] }}</td>
            </tr>

            <tr>
                <td>Área Privativa</td>
                <td>{{ $empreendimento['tipologia']['area'] }}</td>
            </tr>

            <tr>
              <td>Estágio</td>
              <td>{{ $empreendimento['faseobra'] }}</td>
            </tr>

            <tr>
              <td>Data Entrega</td>
              <td>{{ $imovel[0]->emp_previsao_entrega ? (new \DateTime($imovel[0]->emp_previsao_entrega))->format('d/m/Y') : '' }}</td>
            </tr>

            <tr>
              <td>Perço (a partir de):</td>
              <td>{{ $empreendimento['tipologia']['quadrado'] }}</td>
            </tr>

            <tr>
              <td>Construtor</td>
              <td>{{ $empreendimento['construcao'] }}</td>
            </tr>

            <tr>
                <td>Arquiteto</td>
                <td>{{ $empreendimento['arquitetura'] }}</td>
            </tr>

            <tr>
                <td>No de torres</td>
                <td>{{ $empreendimento['qtdtorres'] }}</td>
            </tr>

            <tr>
              <td>No de unidades</td>
              <td>{{ $empreendimento['qtdunidades'] }}</td>
            </tr>

            <tr>
                <td>Referência</td>
                <td>{{ $empreendimento['referencia'] }}</td>
            </tr>

            <tr>
              <td>Link do site</td>
              <td><a target="_blank" class="btn btn-instagram btn-xs" href="{{ url('http://www.seabra.com.br/' . $empreendimento['extras'][0]['link']) }}">Acessar</a></td>
            </tr>

          </tbody>

    </table>


</div>
</div>

<div class="row">
<h4 class="text-center" style="text-transform: uppercase;">Detalhes do Projeto</h4>
<div class="well">
@foreach($decricaoProjeto as $decricao)
<span>{{ $decricao->des_basica }}</span>
@endforeach
</div>
</div>

<div class="row">
<h4 class="text-center" style="text-transform: uppercase;">Tipologias Existentes</h4>
<div class="well">
<ul>
    @foreach($tipologias as $tipologia)
    <li>{{ $tipologia['tipologiaExtenso'] }}</li>
    @endforeach
</ul>
</div>
</div>

<div class="row">
<h4 class="text-center" style="text-transform: uppercase;">Áreas comuns</h4>
<div class="well">
<ul>
    @foreach($areasComuns as $area)
    <li>{{ $area->arc_nome }}</li>
    @endforeach
</ul>
</div>
</div>

<div class="row">
  <div class="col-xs-12">
    <h4 class="text-center" style="text-transform: uppercase;">Imagens (Empreendimento)</h4>
    <div class="row">
      @foreach($imagensEmpreendimento as $imagem)
      <div class="{{$loop->index == 0 ? 'col-md-12' : 'col-md-6' }} {{$loop->index == 0 ? 'col-xs-12' : 'col-xs-6' }}" style="padding:0">
          <img class="img" style="width:100%;max-width:100%;min-height:200px;max-height:200px;" src="{{ $imagem }}" alt="..."/>
      </div>
      @endforeach

      @foreach($plantasEmpreendimento as $imagem)
      <div class="col-md-6 col-sm-6 col-xs-6" style="padding:0">
      <img class="img" style="width:100%;max-width:100%;min-height:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
      </div>
      @endforeach

      @foreach($imagensImovel as $imagem)
      <div class="col-md-6 col-sm-6 col-xs-6" style="padding:0">
      <img class="img" style="width:100%;max-width:100%;min-height:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
      </div>
      @endforeach

      @foreach($imagensfachada as $imagem)
      <div class="col-md-6 col-sm-6 col-xs-6" style="padding:0">
      <img class="img" style="width:100%;max-width:100%;min-height:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
      </div>
      @endforeach
  </div>
  </div>
</div>
<!--
<div class="row">
<h4 class="text-center">Imagens (Plantas)</h4>
<div class="row">
    @foreach($plantasEmpreendimento as $imagem)
    <div class="col-md-6 col-sm-6 col-xs-12">
    <img class="img" style="width:100%;max-width:100%;min-height:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
    </div>
    @endforeach
</div>
</div>

<div class="row">
<h4 class="text-center">Imagens (Imóvel)</h4>
<div class="row">
    @foreach($imagensImovel as $imagem)
    <div class="col-md-6 col-sm-6 col-xs-12">
    <img class="img" style="width:100%;max-width:100%;min-height:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
    </div>
    @endforeach
</div>
</div>

<div class="row">
    <h4 class="text-center">Imagens (Fachada)</h4>
    <div class="row">
        @foreach($imagensfachada as $imagem)
        <div class="col-md-6 col-sm-6 col-xs-12">
        <img class="img" style="width:100%;max-width:100%;min-height:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
        </div>
        @endforeach
    </div>
</div>

<div class="row text-center">
  <div class="col-xs-12">
    <p class="lead">Localização</p>
    <img src="http://maps.googleapis.com/maps/api/staticmap?center={{ ($empreendimento['extras'][0]['endereco']) }}
    &zoom=18&size=400x400&maptype=roadmap&radius=300&key=AIzaSyAsFXx4lY-JJqXob-z9HjejP6bCdbtFwT8
    &markers=size:small%7Ccolor:0x0a00ff%7Clabel:1%7C{{ ($empreendimento['extras'][0]['endereco']) }}&sensor=false
    &format=png&visual_refresh=true&scale=1alt={{ ($empreendimento['extras'][0]['endereco']) }}">
  </div>
</div>
-->

<br/>
<br/>

<div class="row">
  <div class="text-center" style="font-weight:bolder;">
    <div class="col-xs-12" style="background-color:white;">
      <h4 style="color:#0330b5">AGENDE A SUA VISITA</h4>
      <h4>Aguardo o seu retorno.</h4>
      <h4>Atenciosamente</h4>
      <h4>{{ \Auth::user()->name }}</h4>
      <h4>Seabra Consultoria de Imóveis Ltda</h4>
      <h4>No Creci {{ \Auth::user()->creci }}</h4>
      <h4>Celular/WhatsApp {{ \Auth::user()->celular }}</h4>
    </div>
  </div>
</div>
