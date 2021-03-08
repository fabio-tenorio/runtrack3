/*
Créez une fonction fizzbuzz qui ne prend pas de paramètre. Dans cette
fonction, affichez dans la console web les nombres de 1 à 151. Remplacez
certains nombres par un mot selon les conditions suivantes :
- Si le nombre est un multiple de 3, affichez “Fizz”.
- Si le nombre est un multiple de 5, affichez “Buzz”.
- Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.
*/
var number;
function fizzbuzz() {
    for (number=1;number<152;number++) {
        if (number%3==0 && number%5==0) {
            console.log('FizzBuzz');
        } else {
            if (number%3==0) {
                console.log('Fizz');
            } else {
                if (number%5==0) {
                console.log('Buzz');
                } else {
                console.log(number);
                }
            }
        }
    }
}
fizzbuzz();