const preencherFormulario = (vendereco) => {
    document.getElementById('endereco').value =vendereco.logradouro;
    document.getElementById('bairro').value =vendereco.bairro;
    document.getElementById('cidade').value =vendereco.localidade;
    document.getElementById('estado').value =vendereco.uf;
}

const pesquisaCep = async()=>{
    /*alert("Hello ACE!!");*/

    const vcep = document.getElementById('cep').value;
    const url =`http://viacep.com.br/ws/${vcep}/json/`;
    
    const vdados = await fetch(url);
    const vendereco = await vdados.json();
    preencherFormulario(vendereco);

}

document.getElementById('cep')
.addEventListener('focusout',pesquisaCep);