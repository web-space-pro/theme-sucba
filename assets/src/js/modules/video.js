$(".video-box").click(function(e){
    let iframe =  $(".video-box iframe");
    let video = $(".video-box video");

    if(iframe.length != 0){
        let symbol = iframe[0].src.indexOf("?") > -1 ? "&" : "?";
        iframe[0].src += symbol + "autoplay=1";
    }
    if(video.length != 0){
        if (video[0].paused) {
            video[0].play();
        }
    }
    $(this).addClass('open');
});