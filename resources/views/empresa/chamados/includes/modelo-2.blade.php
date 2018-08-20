<div class="row">

  <div class="col-md-12" style="margin-bottom:20px;border-radius:4px">
    @if($modelo == 2)
    <img style="width:100%" src="http://seabra.com.br/admin/assets/images/banners/header2.png" alt=""/>
    @else
    <img style="width:100%" src="http://seabra.com.br/admin/assets/images/banners/header.jpg" alt=""/>
    @endif
  </div>

  <div class="col-md-12">
  <div class="well">
    <h3>Prezado(a) {{ $chamado->cliente->nome }}.</h3>
    <p><b>Em relação ao Empreendimento {{ $emp->nome }} gostaria de mais algum esclarecimento?</b></p>
    <p><b>O meu nome é {{ ucfirst(\Auth::user()->name ?? '') }}, e vou ajudá-lo (a) a encontrar o imóvel que procura. Caso esse imóvel não seja exatamente o que esteja buscando ou caso esteja fora da faixa de preço desejada, tenho outras opções para te oferecer.</b></p>
    <p><b>Veja abaixo algumas opções que selecionei com o perfil que está buscando:</b></p>
  </div>
  </div>

  <div class="col-md-12">
  <div class="well">

    @foreach($imoveisModelo2 as $key => $imovel)

        @if($emp->nome == $imovel['empreendimento'])
          @continue;
        @endif

        @if($loop->index % 2 != 0)

        <div class="row" style="min-height:500px;max-height:500px">

        <div class="col-xs-6">
            <img class="img" style="width:100%;min-height:470px;max-height:470px" src="{{ $imovel['imagens'][0] }}" alt="..." />
        </div>

        <div class="col-xs-6">
            <h2>{{ $imovel['empreendimento'] }}</h2>
            <p>Referência {{ $imovel['referencia'] }}</p>
            <p>{{ $imovel['extras'][0]['bairro'] }} / {{ $imovel['extras'][0]['cidade'] }}</p>
            <p>{{ $imovel['tipologia']['dorms'] }}</p>
            <p>{{ $imovel['tipologia']['suites'] }}</p>
            <p>{{ $imovel['tipologia']['vagas'] }}</p>
            <p>{{ $imovel['tipologia']['area'] }}</p>
            <p>Estágio: {{ $imovel['faseobra'] }}</p>
            <p>Arquitetura: {{ $imovel['arquitetura'] }}</p>
            <p>Entrega (previsão): {{ $imovel['entrega'] }}</p>
            <p>Ponto de referêcia: {{ $imovel['imovel']['estproximas'] }}</p>
            <a href="{{ url($imovel['link']) }}" class="btn btn-xs btn-google">Acessar</a>
        </div>

        </div>

        @else

        <div class="row" style="min-height:500px;max-height:500px">

        <div class="col-xs-6">

            <h2>{{ $imovel['empreendimento'] }}</h2>
            <p>Referência {{ $imovel['referencia'] }}</p>

            <p>{{ $imovel['extras'][0]['bairro'] }} / {{ $imovel['extras'][0]['cidade'] }}</p>

            <p>{{ $imovel['tipologia']['dorms'] }}</p>
            <p>{{ $imovel['tipologia']['suites'] }}</p>
            <p>{{ $imovel['tipologia']['vagas'] }}</p>
            <p>{{ $imovel['tipologia']['area'] }}</p>

            <p>Estágio: {{ $imovel['faseobra'] }}</p>
            <p>Arquitetura: {{ $imovel['arquitetura'] }}</p>
            <p>Entrega (previsão): {{ $imovel['entrega'] }}</p>
            <p>Ponto de referêcia: {{ $imovel['imovel']['estproximas'] }}</p>

            <a href="{{ url($imovel['link']) }}" class="btn btn-xs btn-google">Acessar</a>

        </div>

        <div class="col-xs-6">
            <img class="img" style="width:100%;min-height:470px;max-height:470px" src="{{ $imovel['imagens'][0] }}" alt="..." />
        </div>

        </div>

        @endif

    @endforeach

  </div>
  </div>

  <div class="col-xs-12 text-center">
      <div class="well text-black" style="color:black">
          <h4><b>AGENDE A SUA VISITA!</b></h4>
          <h4><b style="color:black">Aguardo o seu retorno.</b></h4>
          <h4><b style="color:black">Atenciosamente,</b></h4>
          <h4><b style="color:black">{{ \Auth::user()->name }}</b></h4>
          <h4><b style="color:black">Seabra Consultoria de Imóveis Ltda</b></h4>
          <h4><b style="color:black">No Creci {{ \Auth::user()->creci }}</b></h4>
          <h4><b style="color:black">Celular/WhatsApp {{ \Auth::user()->celular }}</b></h4>
      </div>
  </div>

  <div class="col-md-12" style="margin-bottom:20px;border-radius:4px">
      <img style="width:100%" src="http://seabra.com.br/admin/assets/images/banners/footer.jpg" alt=""/>
  </div>

</div>
