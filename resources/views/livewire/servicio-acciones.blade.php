<div>
    <div class=" p-16 w-screen">
        <video id="video" controls class="w-full" autoplay="true">
        </video>

        <x-button wire:click="prueba">prueba</x-button>
        <p>{{ $stream_key }}</p>
    </div>

  
        <script>
            
            document.addEventListener('livewire:load', () => {
                alert("entra");
               let livewireComponent = @this; // Access the Livewire component instance
               console.log(livewireComponent.stream_key); // Access the variable
            });

            console.log("entra");
        </script>
</div>
