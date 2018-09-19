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
      <p><b>Meu nome é {{ ucfirst(\Auth::user()->name ?? '') }}, e vou te ajudar a encontrar o imóvel que procura.</b></p>
      <p><b>Veja abaixo as opções que selecionei no perfil que está buscando:</b></p>
      <p><b>Peço que dê uma analisada e me conte quais lhe interessam.</b></p>
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

    <div class="col-md-12" style="margin-bottom:20px;border-radius:4px">
        <img style="width:100%" src="http://seabra.com.br/admin/assets/images/banners/footer.jpg" alt=""/>
    </div>

</div>
