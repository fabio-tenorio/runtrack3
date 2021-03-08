/* selon wikipedia (https://fr.wikipedia.org/wiki/Ann%C3%A9e_bissextile):
Depuis l'ajustement du calendrier grégorien,
l'année n’est bissextile (comportant 366 jours)
que dans l’un des deux cas suivants :
1. si l'année est divisible par 4 et non divisible par 100 ;
2. si l'année est divisible par 400
*/

function bissextile (year) {
    if (year%4==0 && year%100!=0) {
        return true;
    } else {
        if (year%400==0) {
            return true;
        } else {
            return false;
        }
    }
}
/* je vérifie si la fonction marche bien */
var year;
for (year=1000;year<2096;year++) {
    if (bissextile(year)==true) {
        console.log(year + ' est bissextile');
    } else {
        console.log(year + ' n\'est pas bissextile');
    }
}
