<h1>Prezado Cliente, {{ $chamado->cliente->nome }}</h1>
<p>{{ $saudacao }}</p>
<br/>
<p>Em primeiro lugar gostaria de agradecer pela consulta realizada ao Empreendimento {{ $emp->nome }}.</p>
<p>O meu nome é {{ ucfirst($chamado->responsavel->name ?? '') }},
  trabalho na Seabra Corretora de Imóveis e me coloco à disposição para lhe ajudar
   da melhor forma possível,
visando que conheça esse ótimo imóvel que consultou.</p>

<p>Segue Abaxo as informações solicitadas:</p>
<br/>
<div class="row">

    <table class="table table-bordered">

          <tbody>

              <tr>
                  <th>Referencia</th>
                  <td>{{ $empreendimento['referencia'] }}</td>
              </tr>

              <tr>
                <th>Ponto de referencia</th>
                <td>{{ $empreendimento['estproximas'] }}</td>
              </tr>

              <tr>
                  <th>Arquitetura</th>
                  <td>{{ $empreendimento['arquitetura'] }}</td>

              </tr>

              <tr>
                  <th>Bairro</th>
                  <td>{{ $empreendimento['extras'][0]['bairro'] }}</td>
              </tr>

              <tr>
                <th>Construção</th>
                <td>{{ $empreendimento['construcao'] }}</td>
              </tr>

              <tr>
                  <th>No de torres</th>
                  <td>{{ $empreendimento['qtdtorres'] }}</td>
              </tr>

              <tr>
                  <th>Vagas</th>
                  <td>{{ $empreendimento['tipologia']['vagas'] }}</td>
              </tr>

              <tr>
                  <th>Area</th>
                  <td>{{ $empreendimento['tipologia']['area'] }}</td>
              </tr>

              <tr>
                <th>Incorporação</th>
                <td>{{ $empreendimento['incorporacao'] }}</td>
              </tr>

              <tr>
                <th>Endereco</th>
                <td>{{ $empreendimento['extras'][0]['endereco'] }}</td>
              </tr>

              <tr>
                <th>Estagio da obra</th>
                <td>{{ $empreendimento['fasesobra'] }}</td>
              </tr>

              <tr>
                <th>Dormitorios</th>
                <td>{{ $empreendimento['tipologia']['dorms'] }}</td>
              </tr>

              <tr>
                <th>Suites</th>
                <td>{{ $empreendimento['tipologia']['suites'] }}</td>
              </tr>

              <tr>
                <th>Valor metro quadrado</th>
                <td>{{ $empreendimento['tipologia']['quadrado'] }}</td>
              </tr>

              <tr>
                <th>No de unidades</th>
                <td>{{ $empreendimento['qtdunidades'] }}</td>
              </tr>

              <tr>
                <th>Link do site</th>
                <td><a target="_blank" class="btn btn-instagram btn-xs" href="{{ url('http://www.seabra.com.br/' . $empreendimento['extras'][0]['link']) }}">Acessar</a></td>
              </tr>

          </tbody>

    </table>


</div>

<h3>Tipologias Existentes</h3>
<ul>
    @foreach($tipologias as $tipologia)
    <li>{{ $tipologia['tipologiaExtenso'] }}</li>
    @endforeach
</ul>

<h3>Detalhes do Projeto</h3>
@foreach($decricaoProjeto as $decricao)
<p>{{ $decricao->des_basica }}</p>
@endforeach

<h3>Areas comuns</h3>
<ul>
    @foreach($areasComuns as $area)
    <li>{{ $area->des_areas_comuns }}</li>
    @endforeach
</ul>

<h2>Imagens (Empreendimento)</h2>
    @foreach($imagensEmpreendimento as $imagem)
    <img class="img" style="max-width:200px;max-height:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
    @endforeach

<h2>Imagens (Plantas)</h2>
    @foreach($plantasEmpreendimento as $imagem)
    <img class="img" style="max-width:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
    @endforeach

<h2>Imagens (Imóvel)</h2>
    @foreach($imagensImovel as $imagem)
    <img class="img" style="max-width:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
    @endforeach

<h2>Imagens (Fachada)</h2>
    @foreach($imagensfachada as $imagem)
    <img class="img" style="max-width:200px;max-height:200px" src="{{ $imagem }}" alt="..."/>
    @endforeach

<h2>Localização</h2>
<div id="map" class='maps-canvas' style='width: 100%; height: 400px;'></div>

<p>Gostaria de agendar uma visita ao local para eu te mostrar o imóvel.</p>
<p>Aguardo o retorno,</p>
<p>Atenciosamente</p>

<h2>Flavio Seabra</h2>
<h2>Seabra Consultoria de Imóveis LTDA</h2>
<p>Creci __________</p>
<p>celular __________</p>
