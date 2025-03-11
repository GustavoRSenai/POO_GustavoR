//criando a classe Aluno

// Encapsulamento utiliza # e só pode ter o valor mostrado por uma function
class Aluno {
    #nota
    constructor(nome, idade, nota) {
        // O constructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
        this.#nota = nota;
    }
        estudar = () => console.log(`${this.nome} está estudando.`)
        
        verNota = () => this.#nota

        Info = () => console.log(`O aluno ${this.nome} possuiu ${this.idade} anos e recebeu a nota ${this.#nota} na prova de html.`)
}

const gustavo = new Aluno("Gustavo" , 17, 100)

gustavo.Info()
