<div>
  
    <div>
        <iframe id="myIfr" class="w-full h-[350px]" src="http://{{$host}}:8080/stat" frameborder="0"></iframe>
    </div>

</div>

@script
<script>
    let ifr = document.getElementById('myIfr');

    setInterval(() => {
        //cambiar por host
        ifr.src ="http://jmautomations.nl:8080/stat";
    }, "5000");



</script>
@endscript