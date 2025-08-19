import { initFlowbite } from 'flowbite';
import './bootstrap';
import Swal from 'sweetalert2';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';

document.addEventListener('livewire:navigated', () => { 
    initFlowbite();
})

/*$.ajax({
    url: "http://localhost:8000/transmisiones/all",
    type: 'GET',
    success: function(res) {
        let parse_res;
        parse_res = JSON.parse(res);
        
        let calendarEl = document.getElementById('calendar');
        let calendar = new Calendar(calendarEl, {
            plugins: [ dayGridPlugin, interactionPlugin],
            selectable: true,
            initialView: 'dayGridMonth',
            headerToolbar: {
                start: 'prev', // will normally be on the left. if RTL, will be on the right
                center: 'title',
                end: 'next'
            },
            events: [...parse_res],
            dateClick: function(info) {
                alert('Clicked on: ' + info.dateStr);
                // change the day's background color just for fun
                //info.dayEl.style.backgroundColor = 'blue';
            }
        });
      calendar.render();
    }
});

*/
