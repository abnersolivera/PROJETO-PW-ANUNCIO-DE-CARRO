window.onload= () => {
    const formularios = document.querySelectorAll("form[action='../dados/delete.php']");    
    formularios.forEach(formulario => {
        formulario.onsubmit = (evento) => {
            const reposta = confirm("Deseja excluir o item selecionado ? ");
            if(reposta === false)
                evento.preventDefault();          
            
        };
    });
};