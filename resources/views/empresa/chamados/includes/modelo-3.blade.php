<div class="row">

    <div class="col-md-12" style="margin-bottom:20px;border-radius:4px">
      @if(isset($modelo) && $modelo == 3)
      <img style="width:100%" src="http://seabra.com.br/admin/assets/images/banners/header2.png" alt=""/>
      @else
      <img style="width:100%" src="http://seabra.com.br/admin/assets/images/banners/header.jpg" alt=""/>
      @endif
    </div>

    <div class="col-md-12">
      <div class="well">
      <h3>Prezado(a) {{ $chamado->cliente->nome }}.</h3>
      <p><b>Em relação ao Empreendimento {{ $emp->nome }} gostaria de mais algum esclarecimento?</b></p>
      <p><b>O meu nome é {{ \Auth::user()->name }}, trabalho na Seabra Consultoria de Imóveis ltda.</b></p>
      <p><b>Caso esse imóvel não seja exatamente o que esteja procurando ou caso o mesmo esteja fora da
        faixa de preço desejada, gostaria muito de ter a oportunidade de continuar lhe atendendo pois tenho
        várias outras opções de imóveis no próprio bairro ou em bairros vizinhos. A SEABRA Consultoria é uma
        imobiliária altamente especializada em imóveis novos ou em fase de entrega de obra e temos em nossa
        carteira imóveis das principais Incorporadoras do mercado paulistano.</b></p>
      <p><b>Veja abaixo algumas opções que selecionei com o perfil que está buscando:</b></p>
    </div>
    </div>

    <div class="col-md-12">
      <div class="well">

      @foreach($imoveisModelo3 as $key => $imovel)

          @if($loop->index % 2 != 0)

          <div class="row" style="min-height:450px;max-height:450px">

          <div class="col-xs-6">
              <img class="img" style="width:100%;min-height:400px;max-height:400px" src="{{ $imovel['imagens'][0] }}" alt="..." />
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

          <div class="row" style="min-height:450px;max-height:450px">

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
              <img class="img" style="width:100%;min-height:400px;max-height:400px" src="{{ $imovel['imagens'][0] }}" alt="..." />
          </div>

          </div>

          @endif



      @endforeach

    </div>
    </div>

    <div class="col-md-12 text-center">
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

</div>
