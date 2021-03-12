$("body").css("padding", "80px");
$("body").css("display", "flex");
$("body").css("flex-direction", "column");
$("body").css("align-items", "center");
$(".form-group").css("display", "flex");
$(".form-group").css("flex-direction", "column");
$("#chooseid").css("display", "none");
$("#choosename").css("display", "none");
$("#choosetype").css("display", "none");
$(".btn").css("display", "none");

$("#byid").click(function () {
  $("#parsing").css("display", "none");
  $("#chooseid").css("display", "flex");
  $(".btn").css("display", "initial");
})

$("#byname").click(function () {
  $("#parsing").css("display", "none");
  $("#choosename").css("display", "flex");
  $(".btn").css("display", "initial");
})

$("#bytype").click(function () {
  $("#parsing").css("display", "none");
  $("#choosetype").css("display", "flex");
  $(".btn").css("display", "initial");
})

$("#type").click(function () {
  $.ajax({url: "pokemon.json", type: "GET", dataType: "text", success: function(type) {
    type = JSON.parse(type);
    for(var y=0;y<151;y++) {
      $.each(type[y].type, function(key, value) {
        $("<option>"+value+"</option>").appendTo("#type");
      })
    }
  }});
})

$("#filtrer").click(function() {
    var id = $("#input_id").val();
    var nom = $("#nom").val();
    var type = $("#type").val();
    $.ajax({url: "pokemon.json", type: "GET", dataType: "text", success: function(result) {
      result = JSON.parse(result);
      for (var i=0;i<151;i++) {
          $.each( result[i], function(key, value) {
            if (result[i].id == id) {
              $("body").append("<h2>"+result[i].name.french+"</h2>");
              $("h2").css("margin", "20px");
              $("body").append("<p>son nom en anglais: "+ result[i].name.english +"</p>");
              $("body").append("<p>son nom en japonais: "+ result[i].name.japanese +"</p>");
              $("body").append("<p>son nom en chinois: "+ result[i].name.chinese +"</p>");
              $("body").append("<p>son type: "+ result[i].type +"</p>");
              for (var j=0;j<2;j++) {
                $("body").append("<p>son type: "+ result[i].type[j] +"</p>");
              }
              $("body").append("<p>sa base:</p>");
              $("body").append("<ul>");
                $.each(result[i].base, function(key, value) {
                  $("body").append("<li>" + key + " : " + value + "</li>");
                })
              $("body").append("</ul>");
              return false;
            }
            if (nom == result[i].name.english || nom == result[i].name.french) {
              $("body").append("<h2>"+result[i].name.english+"(anglais), ou "+result[i].name.french+"(français)</h2>");
              $("h2").css("margin", "40px 0");
              $("body").append("<p>son nom en japonais: "+ result[i].name.japanese +"</p>");
              $("body").append("<p>son nom en chinois: "+ result[i].name.chinese +"</p>");
              $("body").append("<p>son type: "+ result[i].type +"</p>");
              $("body").append("<p>sa base:</p>");
              $("body").append("<ul>");
                $.each(result[i].base, function(key, value) {
                  $("body").append("<li>" + key + " : " + value + "</li>");
                })
              $("body").append("</ul>");
              return false;
            }
            $.each(result[i].type, function(key, value) {
              $("<option>"+value+"</option>").appendTo("#type");
            })
          })
        }
      }
    });
});