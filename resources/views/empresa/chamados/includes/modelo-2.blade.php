<h1>Prezado Cliente, {{ $chamado->cliente->nome }}</h1>
{{ $saudacao }}!!!.
<p>Em relação ao Empreendimento {{ $emp->nome }} gostaria de mais algum esclarecimento a respeito do produto???</p>
<p>Caso esse imóvel não seja exatamente o que esteja procurando ou caso o mesmo esteja fora da faixa de preço desejada, gostaria muito de ter a oportunidade de continuar lhe atendendo pois tenho várias outras opções de imóveis no próprio bairro ou em bairros vizinhos. A SEABRA Consultoria é uma imobiliária altamente especializada em imóveis novos ou em fase de entrega de obra e temos em nossa carteira imóveis das principais Incorporadoras do mercado paulistano.</p>
<p>Gostaria de receber outras opções de imóveis na região???</p>

<p>Cito abaixo como exemplos alguns empreendimentos que selecionei com perfil semelhante ao VN CASA CARDOSO DE MELO ( veja nos links abaixo):</p>

<table class="table">
  <tbody>
    @foreach($imoveisModelo2 as $imovel)

      @if($emp->nome == $imovel['empreendimento'])
        @continue;
      @endif

      <tr>
        <td>{{ $imovel['empreendimento'] }} - {{ $imovel['terreno'] }} {{ $imovel['faseobra'] }}    @if($imovel['faseobra'] == 'LANÇAMENTO')<b>Entrega {{ (new \DateTime($imovel['entrega']))->format('m/Y') }}</b>@endif</td>
        <td><a href="{{ $imovel['link'] }}">acessar<a></td>
      </tr>
    @endforeach
  </tbody>
</table>

<p><b>Estou a sua disposição para lhe dar o melhor atendimento possível e ajudar a achar o imóvel desejado
Aguardo o seu retorno para que possa continuar lhe atendendo.</b></p>

<p>Atenciosamente</p>

<h3>{{ \Auth::user()->name }}</h3>
<h3>Seabra Consultoria de Imóveis Ltda</h3>
<p>No Creci {{ \Auth::user()->creci }}</p>
<p>Celular/WhatsApp {{ \Auth::user()->celular }}</p>

<a href="https://www.seabra.com.br">www.seabra.com.br</a>
