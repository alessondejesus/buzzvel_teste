{{--
    SIM, EU SEI FAZER ISSO COM $THIS->EMIT DO LIVEWIRE E CHAMAR FUNÇÃO NO APP.JS
    MAS NAO TAVA FUNCIONANDO E EU ESTOU MUITO OCUPADO AGORA :/ DESCULPA

--}}

<div>
    @if (session()->has('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
    @endif
</div>
