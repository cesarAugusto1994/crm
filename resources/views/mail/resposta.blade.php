@component('mail::message')

{!! $mensagem !!}

Muito Obrigado,<br>
Equipe {{ config('app.name') }}
@endcomponent
