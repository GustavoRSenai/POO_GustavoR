class Pessoa {
    constructor(Nome){
        if(this.constructor === Pessoa){
            throw new Error("PAROOOOOWWWWWW, não pode criar nenhuma pessoa")
        }
        this.Nome = Nome;
    }
}
class Aluno extends Pessoa{
    Apresentar = () => console.log(`Olá, sou ${this.Nome} e sou um aluno`)
}

class Professor extends Pessoa {
    Apresentar = () => console.log(`Olá, sou ${this.Nome} e sou um professor`);
    
}

const Gustavo = new Aluno("Gustavo")
const Raul = new Professor("Raul")
const Gabriel = new Pessoa("Gabriel")

Gustavo.Apresentar()
Raul.Apresentar()

/* A classe Pessoa não pode ser instanciada diretamente.

O if no constructor impede que objetos iguas sejam criados

O Aluno herda de pessoa, e não pode ser instanciado normalmente.

Isso garante que Pessoa funcione como modelo*/