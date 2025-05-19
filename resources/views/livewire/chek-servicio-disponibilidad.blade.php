<div>
    <div class="flex" wire:poll.5s>

        @isset($disponibilidad_final)
                @switch($disponibilidad_final->estado)
                    @case('0')
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-1 mt-1"></div><p>Disponible</p>
                        @break
                    @case('1')
                        <div class="h-2.5 w-2.5 rounded-full bg-orange-500 me-1 mt-1"></div><p>En Uso</p>
                        @break
                    @default
                        <div class="h-2.5 w-2.5 rounded-full bg-orange-500 me-1 mt-1"></div><p>Actualizando</p>
                @endswitch
        @endisset


        <!--
        <script>
            window.addEventListener('error', function(error) {
            if (error instanceof ErrorEvent) {
                if (error.message.includes('Snapshot missing on Livewire component with id:')) {
                    // report the error
                    // ...

                    // refresh the page. (Using 5 second  delay to avoid an accidental self DDoS)
                    setTimeout(function() {
                        location.reload();
                    }, 5000)
                }
            }
        });
        -->
        </script>
    </div>
</div>
