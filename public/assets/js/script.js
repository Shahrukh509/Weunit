
$(document).on('click','.social_hit', function(){
   
   var name = $(this).attr('id');
   var id = $(this).attr('user_id');

   $.ajax({

    type: "get",
    url:'storing-statistics',
    cache: false,
    data: {name:name,id:id},
    success: function(response){

     console.log('alright your has been saved');
    }

     

  });



    

});

const custom_canvas_background_color = {
    id: "custom_canvas_background_color",
    beforeDraw: (chart, args, options) => {
        const {
            ctx,
            chartArea: { top, right, bottom, left, width, height },
            scales: { x, y },
        } = chart;
        ctx.save();
        ctx.globalCompositeOperation = "destination-over";
        ctx.fillStyle = "#131313";
        ctx.fillRect(left, top, width, height);
        ctx.restore();
    },
};

var style11 = document.getElementById("pills-private-tab");
var style22 = document.getElementById("pills-business-tab");

$('#pills-private-tab').css('backgroundColor' , '#07f5cb');

style11.onclick = function () {
    if ((style11.style.backgroundColor = "#07f5cb")) {
        style11.style.backgroundColor = "#07f5cb";
        style22.style.backgroundColor = "#afafaf";
    }
};
style22.onclick = function () {
    if ((style11.style.backgroundColor = "#07f5cb")) {
        style11.style.backgroundColor = "#afafaf";
        style22.style.backgroundColor = "#07f5cb";
    }
};

var style1 = document.getElementById("pills-style-tab");
var style2 = document.getElementById("pills-background-tab");
var style3 = document.getElementById("pills-profile-image-tab");
var style4 = document.getElementById("pills-logo-tab");
var style5 = document.getElementById("pills-font-tab");
var style6 = document.getElementById("pills-profile-video-tab");
var style7 = document.getElementById("pills-logo1-tab");
var style8 = document.getElementById("pills-logo2-tab");
var style9 = document.getElementById("pills-logo3-tab");

style1.style.backgroundColor = "#07f5cb";
style1.onclick = function () {
    if ((style1.style.backgroundColor = "#07f5cb")) {
        style1.style.backgroundColor = "#07f5cb";
        style2.style.backgroundColor = "#afafaf";
        style3.style.backgroundColor = "#afafaf";
        style4.style.backgroundColor = "#afafaf";
        style5.style.backgroundColor = "#afafaf";
        style6.style.backgroundColor = "#afafaf";
        style7.style.backgroundColor = "#afafaf";
        style8.style.backgroundColor = "#afafaf";
        style9.style.backgroundColor = "#afafaf";
    }
};
style2.onclick = function () {
    if ((style1.style.backgroundColor = "#07f5cb")) {
        style1.style.backgroundColor = "#afafaf";
        style2.style.backgroundColor = "#07f5cb";
        style3.style.backgroundColor = "#afafaf";
        style4.style.backgroundColor = "#afafaf";
        style5.style.backgroundColor = "#afafaf";
        style6.style.backgroundColor = "#afafaf";
        style7.style.backgroundColor = "#afafaf";
        style8.style.backgroundColor = "#afafaf";
        style9.style.backgroundColor = "#afafaf";
    }
};
style3.onclick = function () {
    if ((style1.style.backgroundColor = "#07f5cb")) {
        style1.style.backgroundColor = "#afafaf";
        style2.style.backgroundColor = "#afafaf";
        style3.style.backgroundColor = "#07f5cb";
        style4.style.backgroundColor = "#afafaf";
        style5.style.backgroundColor = "#afafaf";
        style6.style.backgroundColor = "#afafaf";
        style7.style.backgroundColor = "#afafaf";
        style8.style.backgroundColor = "#afafaf";
        style9.style.backgroundColor = "#afafaf";
    }
};
style4.onclick = function () {
    if ((style1.style.backgroundColor = "#07f5cb")) {
        style1.style.backgroundColor = "#afafaf";
        style2.style.backgroundColor = "#afafaf";
        style3.style.backgroundColor = "#afafaf";
        style4.style.backgroundColor = "#07f5cb";
        style5.style.backgroundColor = "#afafaf";
        style6.style.backgroundColor = "#afafaf";
        style7.style.backgroundColor = "#afafaf";
        style8.style.backgroundColor = "#afafaf";
        style9.style.backgroundColor = "#afafaf";
    }
};
style5.onclick = function () {
    if ((style1.style.backgroundColor = "#07f5cb")) {
        style1.style.backgroundColor = "#afafaf";
        style2.style.backgroundColor = "#afafaf";
        style3.style.backgroundColor = "#afafaf";
        style4.style.backgroundColor = "#afafaf";
        style5.style.backgroundColor = "#07f5cb";
        style6.style.backgroundColor = "#afafaf";
        style7.style.backgroundColor = "#afafaf";
        style8.style.backgroundColor = "#afafaf";
        style9.style.backgroundColor = "#afafaf";
    }
};
style6.onclick = function () {
    if ((style1.style.backgroundColor = "#07f5cb")) {
        style1.style.backgroundColor = "#afafaf";
        style2.style.backgroundColor = "#afafaf";
        style3.style.backgroundColor = "#afafaf";
        style4.style.backgroundColor = "#afafaf";
        style5.style.backgroundColor = "#afafaf";
        style6.style.backgroundColor = "#07f5cb";
        style7.style.backgroundColor = "#afafaf";
        style8.style.backgroundColor = "#afafaf";
        style9.style.backgroundColor = "#afafaf";
    }
};
style7.onclick = function () {
    if ((style1.style.backgroundColor = "#07f5cb")) {
        style1.style.backgroundColor = "#afafaf";
        style2.style.backgroundColor = "#afafaf";
        style3.style.backgroundColor = "#afafaf";
        style4.style.backgroundColor = "#afafaf";
        style5.style.backgroundColor = "#afafaf";
        style6.style.backgroundColor = "#afafaf";
        style7.style.backgroundColor = "#07f5cb";
        style8.style.backgroundColor = "#afafaf";
        style9.style.backgroundColor = "#afafaf";
    }
};
style8.onclick = function () {
    if ((style1.style.backgroundColor = "#07f5cb")) {
        style1.style.backgroundColor = "#afafaf";
        style2.style.backgroundColor = "#afafaf";
        style3.style.backgroundColor = "#afafaf";
        style4.style.backgroundColor = "#afafaf";
        style5.style.backgroundColor = "#afafaf";
        style6.style.backgroundColor = "#afafaf";
        style7.style.backgroundColor = "#afafaf";
        style8.style.backgroundColor = "#07f5cb";
        style9.style.backgroundColor = "#afafaf";
    }
};
style9.onclick = function () {
    if ((style1.style.backgroundColor = "#07f5cb")) {
        style1.style.backgroundColor = "#afafaf";
        style2.style.backgroundColor = "#afafaf";
        style3.style.backgroundColor = "#afafaf";
        style4.style.backgroundColor = "#afafaf";
        style5.style.backgroundColor = "#afafaf";
        style6.style.backgroundColor = "#afafaf";
        style7.style.backgroundColor = "#afafaf";
        style8.style.backgroundColor = "#afafaf";
        style9.style.backgroundColor = "#07f5cb";
    }
};

var style111 = document.getElementById("pills-style-tab1");
var style211 = document.getElementById("pills-background-tab1");
var style311 = document.getElementById("pills-profile-image-tab1");
var style411 = document.getElementById("pills-logo-tab1");
var style511 = document.getElementById("pills-font-tab1");
var style611 = document.getElementById("pills-profile-video-tab1");
var style711 = document.getElementById("pills-logo1-tab1");
var style811 = document.getElementById("pills-logo2-tab1");
var style911 = document.getElementById("pills-logo3-tab1");

style111.style.backgroundColor = "#07f5cb";
style111.onclick = function () {
    if ((style111.style.backgroundColor = "#07f5cb")) {
        style111.style.backgroundColor = "#07f5cb";
        style211.style.backgroundColor = "#afafaf";
        style311.style.backgroundColor = "#afafaf";
        style411.style.backgroundColor = "#afafaf";
        style511.style.backgroundColor = "#afafaf";
        style611.style.backgroundColor = "#afafaf";
        style711.style.backgroundColor = "#afafaf";
        style811.style.backgroundColor = "#afafaf";
        style911.style.backgroundColor = "#afafaf";
    }
};
style211.onclick = function () {
    if ((style111.style.backgroundColor = "#07f5cb")) {
        style111.style.backgroundColor = "#afafaf";
        style211.style.backgroundColor = "#07f5cb";
        style311.style.backgroundColor = "#afafaf";
        style411.style.backgroundColor = "#afafaf";
        style511.style.backgroundColor = "#afafaf";
        style611.style.backgroundColor = "#afafaf";
        style711.style.backgroundColor = "#afafaf";
        style811.style.backgroundColor = "#afafaf";
        style911.style.backgroundColor = "#afafaf";
    }
};
style311.onclick = function () {
    if ((style111.style.backgroundColor = "#07f5cb")) {
        style111.style.backgroundColor = "#afafaf";
        style211.style.backgroundColor = "#afafaf";
        style311.style.backgroundColor = "#07f5cb";
        style411.style.backgroundColor = "#afafaf";
        style511.style.backgroundColor = "#afafaf";
        style611.style.backgroundColor = "#afafaf";
        style711.style.backgroundColor = "#afafaf";
        style811.style.backgroundColor = "#afafaf";
        style911.style.backgroundColor = "#afafaf";
    }
};
style411.onclick = function () {
    if ((style111.style.backgroundColor = "#07f5cb")) {
        style111.style.backgroundColor = "#afafaf";
        style211.style.backgroundColor = "#afafaf";
        style311.style.backgroundColor = "#afafaf";
        style411.style.backgroundColor = "#07f5cb";
        style511.style.backgroundColor = "#afafaf";
        style611.style.backgroundColor = "#afafaf";
        style711.style.backgroundColor = "#afafaf";
        style811.style.backgroundColor = "#afafaf";
        style911.style.backgroundColor = "#afafaf";
    }
};
style511.onclick = function () {
    if ((style111.style.backgroundColor = "#07f5cb")) {
        style111.style.backgroundColor = "#afafaf";
        style211.style.backgroundColor = "#afafaf";
        style311.style.backgroundColor = "#afafaf";
        style411.style.backgroundColor = "#afafaf";
        style511.style.backgroundColor = "#07f5cb";
        style611.style.backgroundColor = "#afafaf";
        style711.style.backgroundColor = "#afafaf";
        style811.style.backgroundColor = "#afafaf";
        style911.style.backgroundColor = "#afafaf";
    }
};
style611.onclick = function () {
    if ((style111.style.backgroundColor = "#07f5cb")) {
        style111.style.backgroundColor = "#afafaf";
        style211.style.backgroundColor = "#afafaf";
        style311.style.backgroundColor = "#afafaf";
        style411.style.backgroundColor = "#afafaf";
        style511.style.backgroundColor = "#afafaf";
        style611.style.backgroundColor = "#07f5cb";
        style711.style.backgroundColor = "#afafaf";
        style811.style.backgroundColor = "#afafaf";
        style911.style.backgroundColor = "#afafaf";
    }
};
style711.onclick = function () {
    if ((style111.style.backgroundColor = "#07f5cb")) {
        style111.style.backgroundColor = "#afafaf";
        style211.style.backgroundColor = "#afafaf";
        style311.style.backgroundColor = "#afafaf";
        style411.style.backgroundColor = "#afafaf";
        style511.style.backgroundColor = "#afafaf";
        style611.style.backgroundColor = "#afafaf";
        style711.style.backgroundColor = "#07f5cb";
        style811.style.backgroundColor = "#afafaf";
        style911.style.backgroundColor = "#afafaf";
    }
};
style811.onclick = function () {
    if ((style111.style.backgroundColor = "#07f5cb")) {
        style111.style.backgroundColor = "#afafaf";
        style211.style.backgroundColor = "#afafaf";
        style311.style.backgroundColor = "#afafaf";
        style411.style.backgroundColor = "#afafaf";
        style511.style.backgroundColor = "#afafaf";
        style611.style.backgroundColor = "#afafaf";
        style711.style.backgroundColor = "#afafaf";
        style811.style.backgroundColor = "#07f5cb";
        style911.style.backgroundColor = "#afafaf";
    }
};
style911.onclick = function () {
    if ((style111.style.backgroundColor = "#07f5cb")) {
        style111.style.backgroundColor = "#afafaf";
        style211.style.backgroundColor = "#afafaf";
        style311.style.backgroundColor = "#afafaf";
        style411.style.backgroundColor = "#afafaf";
        style511.style.backgroundColor = "#afafaf";
        style611.style.backgroundColor = "#afafaf";
        style711.style.backgroundColor = "#afafaf";
        style811.style.backgroundColor = "#afafaf";
        style911.style.backgroundColor = "#07f5cb";
    }
};

$(".nextA").mouseenter(function () {
    $(".socialHide2").animate({ height: "600px" }, 500);
    $(".socialHide2").slideDown(1000);
});

function lerp(value, low1, high1, low2, high2) {
    return low2 + ((high2 - low2) * (value - low1)) / (high1 - low1);
}

function hexToRgb(hex) {
    var bigint = parseInt(hex, 16);
    var r = (bigint >> 16) & 255;
    var g = (bigint >> 8) & 255;
    var b = bigint & 255;

    return [r, g, b];
}
///////////

let gradient = $(".gradient");
let picker = $(".picker");
let inner = $(".picker .inner");
let slider = $(".slider");
let thumb = $(".thumb");
let rgbEl = $(".rgb");

let gradientWidth = gradient.width() - picker.width();
let gradientHeight = gradient.height() - picker.height();
let sliderWidth = $(".slider").width() - $(".thumb").width();

let rgb = [
    [255, 255, 255],
    [255, 0, 0],
    [0, 0, 0],
    [0, 0, 0],
];
let hue = [255, 0, 0];

function getColor(p, arr) {
    let a = arr[0];
    let b = arr[1];
    let color = [];

    for (let i = 0; i < 3; i++) {
        let c1 = parseInt(a[i]);
        let c2 = parseInt(b[i]);
        let map = lerp(p, 0, 100, c1, c2);
        map = map.toFixed(0);
        color.push(map);
    }

    return color;
}

function getHue(value) {
    let red = [255, 0, 0];
    let yellow = [255, 255, 0];
    let green = [0, 255, 0];
    let cyan = [0, 255, 255];
    let blue = [0, 0, 255];
    let violet = [255, 0, 255];

    let start = red;
    let end = yellow;
    let min = 0;
    let max = 16;

    if (value > 16 && value < 34) {
        start = yellow;
        end = green;
        min = 16;
        max = 34;
    } else if (value >= 34 && value < 50) {
        start = green;
        end = cyan;
        min = 34;
        max = 50;
    } else if (value >= 50 && value < 66) {
        start = cyan;
        end = blue;
        min = 50;
        max = 66;
    } else if (value >= 66 && value < 83) {
        start = blue;
        end = violet;
        min = 66;
        max = 80;
    } else if (value >= 83) {
        start = violet;
        end = red;
        min = 80;
        max = 100;
    }

    let color = [];

    for (let i = 0; i < 3; i++) {
        let map = lerp(value, min, max, start[i], end[i]);
        map = map.toFixed(0);
        color.push(map);
    }
    return color;
}

function pickerUpdate() {
    x = picker.position().left;
    y = picker.position().top;

    let posX = lerp(x, 0, gradientWidth, 0, 100);
    posX = posX.toFixed(0);

    let posY = lerp(y, 0, gradientHeight, 0, 100);
    posY = posY.toFixed(0);

    let start = getColor(posX, [rgb[0], rgb[1]]);
    let end = getColor(posX, [rgb[2], rgb[3]]);
    let mix = getColor(posY, [start, end]);

    let str = "rgb(" + mix.join(",") + ")";
    inner.css("background", str);

    rgbEl.text("RGB: " + mix);
}

function thumbUpdate() {
    let pos = thumb.position().left;

    curValue = lerp(pos, 0, sliderWidth, 0, 100);
    curValue = curValue.toFixed(0);

    hue = getHue(curValue);
    rgb[1] = hue;
    let str = "rgb(" + hue.join(",") + ")";
    gradient.css("background", str);
}

picker.draggable({
    containment: ".gradient",
    drag: function () {
        pickerUpdate();
    },
});

thumb.draggable({
    axis: "x",
    containment: ".slider",
    drag: function () {
        thumbUpdate();
        pickerUpdate();
    },
});
