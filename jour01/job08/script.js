/*
Créez une fonction “sommenombrespremiers” qui prend en paramètres
deux variables. Si ces deux variables sont des nombres premiers, alors la
fonction retourne leur somme. Sinon, la fonction retourne false.
*/

// je crée d'abord une fonction qui vérifie si un nombre entier est premier
function checknombrepremier(num) {
    // puisque 1 n'est pas premier
    if (num == 1) {
        return false;
    }
    // puisque 2 est le seule entier pair et premier à la fois
    if (num == 2) {
        return true;
    }
    // puisque si num est impaire, il faut savoir si il est divisible par un nombre plus petit que lui-même
    if (num!=1 && num%2!=0) {
        var check = true;
        for (var i=2;i<num;i++) {
            if (num%i==0) {
                check = false;
            }
        }
        if (check == true) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function sommenombrespremiers(a, b) {
    if (checknombrepremier(a)==true && checknombrepremier(b)==true) {
        return a + b;
    } else {
        return false;
    }
}

// je vérifie si la fonction marche bien

for (test=0;test<10;test++) {
    var x = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
    var y = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
    document.write("<p>" + sommenombrespremiers(x, y) + "</p>");
}