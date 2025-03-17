class Pessoa {
    constructor(Nome, Idade){
        this.Nome = Nome
        this.Idade = Idade
    }
    // Criar metodo de apresentação
    Apresentar= () => console.log(`Olá, sou ${this.Nome} e tenho ${this.Idade} anos `) 

}


class Aluno extends Pessoa{
    Apresentar = () => console.log(`Olá, sou ${this.Nome} e sou um aluno`)
}

class Professor extends Pessoa {
    Apresentar = () => console.log(`Olá, sou ${this.Nome} e sou um professor`);
    
}

const Gustavo = new Aluno("Gustavo", "17")
const Raul = new Professor("Raul", "28")

Gustavo.Apresentar()
Raul.Apresentar()


// Pessoa tem o metodo padrão Apresentar();
// Aluno e professor herdam este metódo, mas reescrevem, para exibir msg diferentes
// Mesmo método com comportamentos diferentes, isto é o polimorfismo
