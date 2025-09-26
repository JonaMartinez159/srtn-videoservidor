<x-app-layout>

    @role(['admin', 'pauta'])
        @livewire('MostrarTransmisionesEnUso')
    @endrole

    @livewire('Calendario')

</x-app-layout>