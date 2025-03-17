// Criar classe pessoa
// Com parametros Nome e Idade

class Pessoa {
    constructor(Nome, Idade){
        this.Nome = Nome
        this.Idade = Idade
    }
    // Criar metodo de apresentação
    Apresentar= () => console.log(`Olá, sou ${this.Nome} e tenho ${this.Idade} anos `) 

}


class Aluno extends Pessoa{
    estudar = () => console.log(`Aluno ${this.Nome} esta estudando`)
}

class Professor extends Pessoa {
    ensinar = () => console.log(`Professor ${this.Nome} esta ensinando`);
    
}

const Gutin = new Aluno('Gustavo', 17)
const Gabriel = new Aluno('Gabriel', 16)

const Nadja = new Professor('Nadja', 37)
const Raul = new Professor('Raul', 28)


Gutin.Apresentar();
Gabriel.Apresentar(), Gutin.estudar();
Raul.Apresentar(), Nadja.ensinar();