<h1>Prezado Cliente, {{ $chamado->cliente->nome }}</h1>
{{ $saudacao }} - Tudo bem ?.
<p>Em primeiro lugar gostaria de agradecer pela consulta realizada ao Empreendimento {{ $emp->nome }}.</p>
<p>O meu nome é {{ ucfirst($chamado->responsavel->name ?? '') }},
  trabalho na Seabra Consultoria de Imóveis ltda e me coloco à disposição para lhe ajudar
   da melhor forma possível,
visando que conheça esse ótimo imóvel que consultou.</p>

<h3>Segue Abaxo as informações solicitadas:</h3>

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
              <td>{{ $empreendimento['fasesobra'] }}</td>
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

<h2>Tipologias Existentes</h2>
<ul>
    @foreach($tipologias as $tipologia)
    <li>{{ $tipologia['tipologiaExtenso'] }}</li>
    @endforeach
</ul>

<h2>Detalhes do Projeto</h2>
@foreach($decricaoProjeto as $decricao)
<span>{{ $decricao->des_basica }}</span>
@endforeach

<h2>Areas comuns</h2>
<ul>
    @foreach($areasComuns as $area)
    <li>{{ $area->arc_nome }}</li>
    @endforeach
</ul>

<h2>Imagens (Empreendimento)</h2>
    @foreach($imagensEmpreendimento as $imagem)
    <img class="img" style="max-widtd:200px;max-height:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
    @endforeach

<h2>Imagens (Plantas)</h2>
    @foreach($plantasEmpreendimento as $imagem)
    <img class="img" style="max-widtd:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
    @endforeach

<h2>Imagens (Imóvel)</h2>
    @foreach($imagensImovel as $imagem)
    <img class="img" style="max-widtd:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
    @endforeach

<h2>Imagens (Fachada)</h2>
    @foreach($imagensfachada as $imagem)
    <img class="img" style="max-widtd:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
    @endforeach

<h2>Localização</h2>
<img src="http://maps.googleapis.com/maps/api/staticmap?center={{ ($empreendimento['extras'][0]['endereco']) }}
&zoom=18&size=400x400&maptype=roadmap&radius=300&key=AIzaSyAsFXx4lY-JJqXob-z9HjejP6bCdbtFwT8
&markers=size:small%7Ccolor:0x0a00ff%7Clabel:1%7C{{ ($empreendimento['extras'][0]['endereco']) }}&sensor=false
&format=png&visual_refresh=true&scale=1alt={{ ($empreendimento['extras'][0]['endereco']) }}">

<p><b>Gostaria de agendar uma visita ao local para eu te mostrar o imóvel?</b></p>
<p><b>Aguardo o seu retorno.</b></p>
<p>Atenciosamente</p>

<h2>Flavio Seabra</h2>
<h2>Seabra Consultoria de Imóveis Ltda</h2>
<p>No Creci __________</p>
<p>Celular/WhatsApp __________</p>
