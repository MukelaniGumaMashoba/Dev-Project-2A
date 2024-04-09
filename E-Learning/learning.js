$(document).ready(function(){

    var API_KEY = "AIzaSyAKV8_vMFSNErK8CY9SA019S-nYyvdW7Wc";

    var video = '';

    $("#form").submit(function(event){
        event.preventDefault();

        var search = $("#search").val();

        videoSearch(API_KEY, search, 20);
    })


    function videoSearch(key, search, maxResults) {

        var sResult = "Showing search results for" + " " +search;
        $("#videos").empty();
        $("#p").empty();

        $.get("https://www.googleapis.com/youtube/v3/search?part=snippet&key=AIzaSyAKV8_vMFSNErK8CY9SA019S-nYyvdW7Wc&type=video&maxResults="+maxResults+"&q="+search, function(data){

                console.log(data);

                $("#p").append(sResult);

                data.items.forEach(item => {
                    video = `
                    <iframe width="450" height="335" src="http://www.youtube.com/embed/${item.id.videoId}" frameborder="0" allowfullscreen></iframe>
                    `
                    $("#videos").append(video);
                    
                });
        });
    }

})