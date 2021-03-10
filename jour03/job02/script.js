$("body").css("display", "flex");
$("body").css("flex-direction", "column");
$("body").css("align-items", "center");
$("body").css("width", "100%");
$("body").css("height", "200px");
$("div").css("border", "3px solid black");
$("div").css("margin", "35px 0");

for(let i=1; i<7; i++) {    
    $("#melangees").append("<img id='arc" + i + "' src='arc" + i + ".png' alt=''>");
}

$("img").each(function () {
    $(this).css("width", "80px");
});

$("#rangees").after("<span>vous avez gagné</span>");
$("span").css("display", "hide");

function aleaNum() {
    return Math.floor((Math.random() * 10) + 1);
}

let imgOrder = [0, 1, 2, 3, 4, 5];
let order = [];

function replace(a,b) {
    $.each(imgOrder, function(a, b) {
    $('#arc'+a).after($('#arc'+b));
    });    
}

function mix() {
    while (imgOrder.length>0) {
        let imgNum = aleaNum();
        if (imgNum<7) {
            $('#arc'+imgNum).appendTo('#melangees');
            imgOrder.splice(imgNum-1,1);
        }
    }
    imgOrder = [0, 1, 2, 3, 4, 5];
    order = [];
    $("span").css("display", "none");
}

mix();

$("#button").click(mix);

$('#arc1').click(function() {
    var arc1 = 0;
    order.push(arc1);
    console.log(order);
    $('#arc1').appendTo('#rangees');
    match();
});
$('#arc2').click(function() {
    var arc2 = 1;
    order.push(arc2);
    console.log(order);
    $('#arc2').appendTo('#rangees');
    match();
});
$('#arc3').click(function() {
    var arc3 = 2;
    order.push(arc3);
    console.log(order);
    $('#arc3').appendTo('#rangees');
    match();
});
$('#arc4').click(function() {
    var arc4 = 3;
    order.push(arc4);
    console.log(order);
    $('#arc4').appendTo('#rangees');
    match();
});
$('#arc5').click(function() {
    var arc5 = 4;
    order.push(arc5);
    console.log(order);
    $('#arc5').appendTo('#rangees');
    match();
});
$('#arc6').click(function() {
    var arc6 = 5;
    order.push(arc6);
    console.log(order);
    $('#arc6').appendTo('#rangees');
    match();
});

$("img").each(function () {
    console.log($(this).attr("id"));
});

console.log(order.length);

function match () {
    if (order.length===6) {
        console.log("terminou!");
        console.log(order);
        console.log(imgOrder);
        var check = true;
        for (var value=0;value<7;value++) {
            if (order[value]!==imgOrder[value]) {
                check = false;
            }
        }
        if (check === true) {
            $("#rangees").after("<span>vous avez gagné</span>");
            $("span").css("display", "box");
            $("span").addClass("btn btn-success");
        } else {
            $("#rangees").after("<span>vous avez perdu</span>");
            $("span").css("display", "box");
            $("span").addClass("btn btn-danger");
        }
        order = [];
    }
}