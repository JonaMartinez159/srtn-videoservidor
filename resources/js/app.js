import { initFlowbite } from 'flowbite';
import './bootstrap';
import Swal from 'sweetalert2'

document.addEventListener('livewire:navigated', () => { 
    initFlowbite();
})


