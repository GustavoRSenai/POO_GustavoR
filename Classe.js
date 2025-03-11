//criando a classe Aluno
class Aluno {
    constructor(nome, idade) {
        // O constructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
    }
        estudar = () => console.log(`${this.nome} está estudando.`)
        feliz = () => console.log(`${this.nome} está feliz hoje.`)
}

const gustavo = new Aluno("Gustavo" , 17)
const gabriel = new Aluno("Ortolani", 17)
const miguel = new Aluno("Miguel", 17)

console.log(gustavo.nome)
gabriel.estudar()
console.log(miguel.nome, `${miguel.idade} anos`)
miguel.feliz()