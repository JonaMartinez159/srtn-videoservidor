<div wire:ignore>
    <div class="grid md:grid-cols-4 gap-4">
        <div class="md:col-span-1 w-full bg-white rounded-xl ">
            <div id="calendar" class="p-6 m-4 bg-white rounded-xl">

            </div>

            <p class="p-6"><b>Transmisiones</b></p>

            <div class="px-6">
                @livewire('TransmisionASeleccionar')
            </div><br>

        </div>
        <div class="md:col-span-3 bg-white">
            @livewire('InformacionDeEventoDeCalendario')
        </div>
    </div>
</div>

@script
<script>

    $wire.on('renderTable', () => {
        $.ajax({
            url: "http://localhost:8000/transmisiones/all",
            type: 'GET',
            success: function(res) {
                let parse_res;
                parse_res = JSON.parse(res);

                let calendarEl = document.getElementById('calendar');
                let calendar = new FullCalendar.Calendar(calendarEl, {
                    selectable: true,
                    initialView: 'dayGridMonth',
                    height: 400,
                    headerToolbar: {
                        start: 'prev', // will normally be on the left. if RTL, will be on the right
                        center: 'title',
                        end: 'next'
                    },
                    events: [...parse_res],
                    dateClick: function(info) {
                        //alert('Clicked on: ' + info.dateStr);
                        // change the day's background color just for fun
                        //info.dayEl.style.backgroundColor = 'blue';
                        $wire.dispatch('fecha_seleccionada', { fecha: info.dateStr});
                    }
                });
                calendar.render();
            }
        });
    });

</script>
@endscript