<div wire:ignore>
    <div class="grid md:grid-cols-12 gap-4">
        <div class="md:col-span-5 lg:col-span-4 w-full bg-white rounded-xl ">
            <div id="calendar" class="p-6 m-4 bg-white rounded-xl h-fit text-xs">

            </div>

            <div class="px-6">
                @livewire('TransmisionASeleccionar')
            </div><br>

        </div>
        <div class="md:col-span-7 lg:col-span-8 bg-white">
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
                    height: 400,
                    aspectRatio: 4,
                    fixedWeekCount: false,
                    initialView: 'dayGridMonth',
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