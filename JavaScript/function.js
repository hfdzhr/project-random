const readline = require('readline');
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

rl.question('Siapa nama kamu ? ', function (name) {
    rl.question('Berapa umur mu ? ', function (umur) {
        const nama = name
        const age = parseInt(umur)

        console.log("");
        console.log(`Nama : ${nama}`);
        console.log(`Umur : ${umur * 2}`);
        rl.close();
    });
});