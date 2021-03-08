/*
Créez une fonction “tri” qui prend en paramètres un tableau de nombres
nommé “numbers” et une variable “order” qui contient “asc” ou “desc”. A
l’aide d’un algorithme, cette fonction doit trier le tableau dans l’ordre
ascendant ou décroissant, selon le paramètre passé, puis retourner le
tableau.
*/

var example = [3, 8, 4, 2, 10, 9, 16, 99, 7, 89, 12, 35, 48, 22, 52, 13, 17]

function pickMax(numbers) {
    var max = numbers[0];
    for (var i=0;i<numbers.length;i++) {
        if (max<numbers[i]) {
            max=numbers[i];
        }
    }
    return max;
}

function pickMin(numbers) {
    var min = numbers[0];
    for (var i=0;i<numbers.length;i++) {
        if (min>numbers[i]) {
            min=numbers[i];
        }
    }
    return min;
}

function tri (numbers, order) {
    var asc = [];
    var desc = [];
    for (var i=0;i<numbers.length;i++) {
        desc[i] = pickMax(numbers);
        for (var j=0;j<numbers.length;j++) {
            if (desc[i]==numbers[j]) {
                numbers[j]=undefined;
            }
        }
    }
    if (order=='desc') {
        return desc;
    }
    if (order=='asc') {
        for (var i=0;i<=desc.length;i++) {
            asc[i]=desc[desc.length-1-i];
        }
        return asc;
    }
}

document.write(tri (example, "asc"));