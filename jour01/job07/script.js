/*
Créez une fonction “jourtravaille” qui prend en paramètre une date au
format Date. Si la date correspond à un jour férié de l’année 2020, la
fonction affiche “Le $jour $mois $année est un jour férié”. Si elle
correspond à un samedi ou un dimanche, alors le message affiché est
“Non, $jour $mois $année est un week-end”, sinon afficher “Oui, $jour
$mois $année est un jour travaillé”.
*/

function jourtravaille (date) {
    var date = new Date(date);
    var jour = date.getDate();
    var mois = date.getMonth()+1;
    var annee = date.getFullYear();
    var joursemaine = date.getDay();
    var joursferies = Array ([2020, 1, 1], [2020, 4, 13], [2020, 5, 1], [2020, 5, 8], [2020, 5, 21], [2020, 6, 1], [2020, 7, 14], [2020, 8, 15], [2020, 11, 1], [2020, 11, 11], [2020, 12, 25]);
    for (i=0;i<joursferies.length;i++) {
    joursferies[i] = new Date(joursferies[i]);
    }
    if (joursemaine==0 || joursemaine==6) {
        document.write("<p>Non, " + jour + " " + mois + " " + annee + " est un week-end</p>");
    }
    var check = true;
    for (i=0;i<joursferies.length;i++) {
        if (jour==joursferies[i].getDate() && mois==joursferies[i].getMonth()+1 && annee ==joursferies[i].getFullYear()) {
            document.write("<p>Le " +  jour + " " + mois + " " + annee + " est un jour férié</p>");
            check = false;
        }
    }
    if (check==true) {
        document.write("<p>Oui, " +  jour + " " + mois + " " + annee + " est un jour travaillé</p>");
    }
}
// je vérifie si la fonction marche bien

jourtravaille([2020, 5, 1]);

for (test=0;test<10;test++) {
    var moisqlq = Math.floor(Math.random() * (12 - 1 + 1)) + 1;
    var jourqlq = Math.floor(Math.random() * (31 - 1 + 1)) + 1;
    var date = [2020, moisqlq, jourqlq];
    jourtravaille(date);
}