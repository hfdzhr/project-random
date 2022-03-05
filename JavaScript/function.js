const readline = require('readline');
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

rl.question('Siapa nama kamu ? ', function (name) {
    rl.question('Berapa umur mu ? ', function (umur) {
        console.log(`Nama : ${name}, Umur : ${umur}`);
        rl.close();
    });
});