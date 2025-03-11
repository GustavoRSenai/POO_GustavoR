class Pessoa {
    #Cpf
    #Nascimento
    constructor(Nome, Idade, Cpf, Nascimento){
        if(this.constructor === Pessoa){
            throw new Error("você não pode criar pessoas")
        }
        this.Nome = Nome;
        this.Idade = Idade;
        this.#Cpf = Cpf;
        this.#Nascimento = Nascimento;
    }
      // Getters para acessar as propriedades privadas
      get Cpf() {
        return "Dado Confidencial"; // Retorna "Dado Confidencial" para o CPF
    }

    get Nascimento() {
        return "Dado Confidencial"; // Retorna "Dado Confidencial" para a data de nascimento
    }
}
class funcionario extends Pessoa{
    Recepcao = () => console.log(`Olá, sou ${this.Nome} e sou recepicionista do hospital`)
    Medico = () => console.log(`Olá, sou ${this.Nome} e sou médico(a) do hospital`)
    Enfermeiro = () => console.log(`Olá, sou ${this.Nome} e sou enfermeiro(a) do hospital`)
}

class paciente extends Pessoa {
    Internado = () => console.log(`O Paciente ${this.Nome} está internado`);
    Doente = () => console.log(`O Paciente ${this.Nome} está doente`);
    Bem = () => console.log(`O Paciente ${this.Nome} está bem`);
    
}

const Marcos = new funcionario("Marcos","35","123.456.789-00","10/03/1990")
const Patricia = new funcionario("Patricia","42","112.456.729-00","17/12/1982")
const Otávio = new funcionario("Otávio","54","113.462.123-12","04/01/1971")
const Joana = new funcionario("Joana","29","188.123.326-90","03/02/1996")

const Gabriel = new paciente("Gabriel","16","523.123.789-00","11/04/2008")
const Emerson = new paciente("Emerson","87","112.126.969-00","03/09/1937")
const Wellington = new paciente("Wellington","43","113.122.821-88","27/01/1982")


document.getElementById("Funcionario1").innerText = `${Marcos.Nome}`;
document.getElementById("idade1").innerText = `${Marcos.Idade}`;
document.getElementById("Cpf1").innerText = `${Marcos.Cpf}`;  // Usando o getter
document.getElementById("Nascimento1").innerText = `${Marcos.Nascimento}`; // Usando o getter

document.getElementById("Funcionario2").innerText = `${Patricia.Nome}`;
document.getElementById("idade2").innerText = `${Patricia.Idade}`;
document.getElementById("Cpf2").innerText = `${Patricia.Cpf}`;  // Usando o getter
document.getElementById("Nascimento2").innerText = `${Patricia.Nascimento}`; // Usando o getter

document.getElementById("Funcionario3").innerText = `${Otávio.Nome}`;
document.getElementById("idade3").innerText = `${Otávio.Idade}`;
document.getElementById("Cpf3").innerText = `${Otávio.Cpf}`;  // Usando o getter
document.getElementById("Nascimento3").innerText = `${Otávio.Nascimento}`; // Usando o getter

document.getElementById("Funcionario4").innerText = `${Joana.Nome}`;
document.getElementById("idade4").innerText = `${Joana.Idade}`;
document.getElementById("Cpf4").innerText = `${Joana.Cpf}`;  // Usando o getter
document.getElementById("Nascimento4").innerText = `${Joana.Nascimento}`; // Usando o getter

document.getElementById("Paciente1").innerText = `${Gabriel.Nome}`;
document.getElementById("idade5").innerText = `${Gabriel.Idade}`;
document.getElementById("Cpf5").innerText = `${Gabriel.Cpf}`;  // Usando o getter
document.getElementById("Nascimento5").innerText = `${Gabriel.Nascimento}`; // Usando o getter

document.getElementById("Paciente2").innerText = `${Wellington.Nome}`;
document.getElementById("idade6").innerText = `${Wellington.Idade}`;
document.getElementById("Cpf6").innerText = `${Wellington.Cpf}`;  // Usando o getter
document.getElementById("Nascimento6").innerText = `${Wellington.Nascimento}`; // Usando o getter

document.getElementById("Paciente3").innerText = `${Emerson.Nome}`;
document.getElementById("idade7").innerText = `${Emerson.Idade}`;
document.getElementById("Cpf7").innerText = `${Emerson.Cpf}`;  // Usando o getter
document.getElementById("Nascimento7").innerText = `${Emerson.Nascimento}`; // Usando o getter

let lista = document.querySelectorAll('.item')

let next = document.getElementById('prox')
let prev = document.getElementById('ant')

let contar = lista.length
let ativo = 0

next.onclick = () =>{
    let desativar = document.querySelector('.ativo')
    desativar.classList.remove('ativo')
    if(ativo>=contar-1){
        ativo=0;
    }else{
        ativo=ativo+1
    }
    lista[ativo].classList.add('ativo')
}

prev.onclick = () =>{
    let desativar = document.querySelector('.ativo')
    desativar.classList.remove('ativo')
    if(ativo<=contar-3){
        ativo=2;
    }else{
        ativo=ativo-1
    }
    lista[ativo].classList.add('ativo')
}