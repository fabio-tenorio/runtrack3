var sitio = '{"name":"La Plateforme", "address":"8 rue dhozier", "city":"Marseille", "nb_staff":11, "creation":2019}';
function jsonValueKey(chaine, cle) {
    var obj = JSON.parse(chaine);
    return obj[cle];
}
document.write(jsonValueKey(sitio, "address"));