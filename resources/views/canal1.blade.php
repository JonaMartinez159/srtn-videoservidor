<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class=" p-16 w-screen">
        <video id="video" controls class="w-full" autoplay="true">
        </video>
        <input type="hidden" id="host_js" value="{{$host}}">
    </div>

    <script>
        //variable local id de video
        var video = document.getElementById('video');
        let host = $("#host_js").val();

        $( document ).ready(function() {
            getStreamkey();
        });

        function getStreamkey(){
            //Cortinilla colocada
            console.log("Cortinilla colocada por inicio de pagina");

            var url_string = window.location.href;
            var url = new URL(url_string);
            var c = url.searchParams.get("sk");

            console.log(host);

            $.ajax({
                url: "http://"+host+"/webhook_canal1/" + c,
                type: 'GET',
                cache: false,
                success: function(result) {

                    let parse_result = JSON.parse(result);
                    let streamkey = parse_result[0]['stream_key'];

                    rtmpCon(streamkey);
                    
                },
                error: function() {
                    alert("Algo salió mal");
                }
            });
        }

        function rtmpCon(streamkey){

            var videoSrc = 'http://'+host+'/canal1/' + streamkey + '.m3u8';

            if (Hls.isSupported()) {
                var config = {
                    autoStartLoad: true,
                    startPosition: -1,
                    initialLiveManifestSize: 1,
                    liveSyncDurationCount: 1,
                    liveDurationInfinity: true,
                    debug: false,
                }

                var hls = new Hls(config);

                hls.loadSource(videoSrc);
                hls.attachMedia(video);

                hls.on(Hls.Events.MEDIA_ATTACHED, function () {
                    video.muted = true;
                    video.play(); 
                });

                hls.on(Hls.Events.BUFFER_APPENDED, function () {
                    console.log("Cortinilla fuera--------------------");
                });

                hls.on(Hls.Events.LEVEL_LOADED, function (event, data) {
                    //video.muted = false;
                });

                hls.on(Hls.Events.ERROR, function (event, data) {
                  if (data.fatal) {
                    switch (data.type) {
                      case Hls.ErrorTypes.MEDIA_ERROR:
                        console.log('fatal media error encountered, try to recover');
                        hls.recoverMediaError();
                        break;
                      case Hls.ErrorTypes.NETWORK_ERROR:
                        console.error('Error fatal --- fatal network error encountered', data);
                        // All retries and media options have been exhausted.
                        // Immediately trying to restart loading could cause loop loading.
                        // Consider modifying loading policies to best fit your asset and network
                        // conditions (manifestLoadPolicy, playlistLoadPolicy, fragLoadPolicy).

                        //ir a colocar la cortinilla y luego a esperar la nueva streamkey
                        console.log("Error fatal al reconectar, tratar de obtener nueva streamkey...");

                        setTimeout(() => {
                            getStreamkey();
                        }, 5000);
                        break;
                      default:
                        // cannot recover
                        hls.destroy();
                        console.log("Error fatal hls destruido ------------------------");
                        break;
                    }
                  }else{
                    //Reconectar
                    console.log("Reconectando");

                    //Cortinilla colocada
                    console.log("Cortinilla colocada");
                  }
                });


            }else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                video.src = videoSrc;
            }
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>  

</body>
</html>