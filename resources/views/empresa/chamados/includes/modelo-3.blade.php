<h1>Prezado(a) {{ $chamado->cliente->nome ?? 'Cliente Nome' }}</h1>
{{ $saudacao ?? 'Saudação' }}!, tudo bem ???.
<p>Segue abaixo uma seleção de Empreendimentos que identifiquei para você no perfil que está buscando ;</p>
<p>Espero conseguir atendê-lo(a) a contento pois a SEABRA é uma imobiliária com 45 anos de atuação mercadológica ao longo dos quais desenvolveu exclusivas parcerias com as principais Incorporadoras e Construtoras do mercado Imobiliário , o que nos permite oferecer sempre os melhores imóveis disponíveis aos nossos clientes.</p>

<p>Peço que dê uma analisada nos links abaixo e me conte quais lhe interessam.</p>

<table class="table">
  <tbody>
    @foreach($imoveisModelo3 as $imovel)
      <tr>
        <td>{{ $imovel['empreendimento'] }} - {{ $imovel['terreno'] }} {{ $imovel['faseobra'] }}    @if($imovel['faseobra'] == 'LANÇAMENTO')<b>Entrega {{ (new \DateTime($imovel['entrega']))->format('m/Y') }}</b>@endif</td>
        <td><a href="{{ $imovel['link'] }}">acessar<a></td>
      </tr>
    @endforeach
  </tbody>
</table>

<p>Aguardo seu retorno, </p>

<p>Atenciosamente</p>

<h3>{{ \Auth::user()->name }}</h3>
<h3>Seabra Consultoria de Imóveis Ltda</h3>
<p>No Creci {{ \Auth::user()->creci }}</p>
<p>Celular/WhatsApp {{ \Auth::user()->celular }}</p>

<a href="https://www.seabra.com.br">www.seabra.com.br</a>
