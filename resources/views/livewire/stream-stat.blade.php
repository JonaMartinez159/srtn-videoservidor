<div>
  
    <div>
        <iframe id="myIfr" class="w-full h-[350px]" src="http://localhost:8080/stat" frameborder="0"></iframe>
    </div>

</div>

@script
<script>
    let ifr = document.getElementById('myIfr');

    setInterval(() => {
        ifr.src ="http://localhost:8080/stat";
    }, "5000");



</script>
@endscript