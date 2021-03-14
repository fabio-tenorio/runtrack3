(function() {
    var httpr;
    $("#inscription").click(makeRequest);
  
    function makeRequest() {
      httpr = new XMLHttpRequest();
  
      if (!httpr) {
        alert('Abandon :( Impossible de créer une instance de XMLHTTP');
        return false;
      }
      httpr.onreadystatechange = alertContents;
      var url = "index.php";
      httpr.open('GET', url + ((/\?/).test(url) ? "&" : "?") + (new Date()).getTime(), true);
      httpr.send(null);
    }
  
    function alertContents() {
      if (httpr.readyState === XMLHttpRequest.DONE) {
        if (httpr.status === 200) {
          alert(httpr.responseText);
        } else {
          alert('Il y a eu un problème avec la requête.');
        }
      }
    }
  })();


// $("#inscription").click( function() {
//     $("#container").load("inscription.php");
// });
$("#connexion").click( function() {
    $("#container").load("connexion.php");
});

$('#b_inscription').click( function()  //Si tu clique sur le button inscription
    {
        form = $('#f_inscription'); //Form c 'est le formulaire d'inscription
        $('#f_connexion').css("display","none");  //On rend invisible celui de connexion

        if(form.css("display") === 'none') //Si le formulaire etait sur la position invisible, tu le rend visible
        {
            form.css("display","flex");  //On atribut du flex pour le voir
        }
    });

$('#b_connexion').click( function()
    {
        form = $('#f_connexion');
        $('#f_inscription').css("display","none");
        if(form.css("display") === 'none')
        {
            form.css("display","flex");
        }
    });

$("#inscriptionbutton").click(function()
{

    mail = $('#mail').val();
    pwd = $('#pwd').val();
    pwdconfirm = $('#pwdconfirm').val();
    // console.log(pwd);
    $("#container").load("connexion.php");
    length = /.{8,30}/;
        s = /\W/; d = /\d/;        /* une forme de regex pour js */
/*
    if (preg_match('%^(?=[^A-Z]*+.)(?=[^a-z]*+.)(?=[^0-9]*+.)(?=[^\W]*+.)%',password) ){
*/          //exec pour dire que l'on utilise du regexp

    if(length.exec(pwd) == null || s.exec(pwd) == null ||d.exec(pwd)  == null)
    {
        $("#passwordError").css("display","block");
        return false;
    }
    else
    {
        $("#passwordError").css("display","none"); //Si ya pas d'erreurs tu affiche rien
    }

    if(pwd !== pwdconfirm)
    {
        $('#passwordVError').css("display","block");
        return false;
    }

    //Pour prendre les post du form et aller dans la page inscription.php
    $.post("inscription.php",
        {
            nom: $("#name").val(),
            prenom: $('#lastname').val(),
            email: $('#mail').val(),
            password: $('#pwd').val()
        },
        function(data)
        {
            if(data === "success")        //Si tu à insséré un utilisateur tu rend invisible le form d'inscription et visible l'autre
            {
                $("#f_inscription").css("display", "none");
                $("#f_connexion").css("display", "flex");
            }
            else if(data === "er1")
            {
                $("main").prepend($("<p></p>").text("Le nom est dèjà pris.")); //Tu push sur le main une balise p
            }else if(data === "er2")
            {
                $("main").prepend($("<p></p>").text("Le prenom est dèjà pris.")); //Tu push sur le main une balise p
            }else if(data === "er3")
            {
                $("main").prepend($("<p></p>").text("Le mail est déja pris.")); //Tu push sur le main une balise p
            }
        }
    );
});

// $.ajax({
//     url: 'inscription.php',
//     type: 'post',
//     data: {name:'yogesh',salary: 35000,email: 'yogesh@makitweb.com'},
//     success: function(response){

//     }
//  });
