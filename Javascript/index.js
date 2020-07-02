

// var canvas, ctx;
// var drawTimer, clearTimer;
// var width;
// var height;

$(document).ready(function(){
    // width=canvas.width;
    // height=canvas.height;
    // ctx=$("#mycanvas").getContext("2d");
    
    // drawTimer=window.setInterval(draw,50);
    // clearTimer=window.setInterval(clear,60);


    $(".i1").mouseenter(5000,function(){
        $(".p1").attr("src","media/Home-img/08.png");
        $(".l1").attr("src","media/Home-img/toilet-4.jpg");
        $(".s1").slideDown(function(){$(".s1").text("About")});
       
    })
    $(".i1").mouseleave(5000,function(){
        console.log("enter");
        $(".l1").attr("src","media/Home-img/YZT.png")
        $(".p1").attr("src","media/Home-img/apple-2.png");
        $(".s1").slideUp();
    });

    $(".i2").mouseenter(5000,function(){
        $(".p2").attr("src","media/Home-img/09.png");
        $(".l1").attr("src","media/Home-img/toilet-2.jpg");
        $(".s2").slideDown(function(){$(".s2").text("Content")});
        
    })
    $(".i2").mouseleave(5000,function(){
        $(".l1").attr("src","media/Home-img/YZT.png");
        $(".p2").attr("src","media/Home-img/cake.png");
        $(".s2").slideUp();
    });

    $(".i3").mouseenter(5000,function(){
        $(".p3").attr("src","media/Home-img/images.jpg");
        $(".l1").attr("src","media/Home-img/toilet-3.jpg");
        $(".s3").slideDown(function(){$(".s3").text("Report")});
       
    });
    $(".i3").mouseleave(5000,function(){
        $(".l1").attr("src","media/Home-img/YZT.png");
        $(".p3").attr("src","media/Home-img/rock.jpg");
        $(".s3").slideUp();
    });
        
});
// function draw(){
//     var fontSize=Math.random()*50;
//     var x=Math.random()*width;
//     var y=Math.random()*height;
//     var r=Math.floor(Math.random()*255)+50;
//     var g=Math.floor(Math.random()*255)+50;
//     var b=Math.floor(Math.random()*255)+50;
//     var color='rgba('+r+','+g+','+b+',+1.0)';
//     ctx.fillStyle = color;
//     ctx.fontSize=fontSize+'Comic Sans MS';
//     ctx.fillText('Yuzn');
//     ctx.fillText('Ze');
//     ctx.fillText('Toilet');
//     ctx.fillText('Yuzn Ze Toilet',x,y);
// };
// function clear(){
//     ctx.fillStyle = 'rgba(255,255,255,0.1)';
//     ctx.fillRect(0,0,width,height);
// };





