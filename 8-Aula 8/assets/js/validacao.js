function comparaSenhas(){

}

function mascaraCep(input){
    let cep = input.value.replace(/\D/g,'')
                                // \D = remove tudo que não é número
                                // g = faz isso por toda a string
    if (cep.lenght>5){
        let cep = input.value.replace(/^(\d{5})(\d)/, '1$-$2');
                                //  /^ inicio da string
                                //  / final da string
                                // \d{5} pega os 5 primeiros número 1$
                                // \d o próximo digito que é o 6 será o $2
    }
}

function mascaraCPF(input){
    
}