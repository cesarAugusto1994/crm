@component('mail::message')

# Olá, {{ $chamado->cliente->nome }}

Muito Obrigado,<br>
Equipe {{ config('app.name') }}
@endcomponent
