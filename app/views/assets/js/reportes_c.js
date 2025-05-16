const btnEdit = document.querySelectorAll("#btnEdit");
const btnDelete = document.querySelectorAll("#btnDelete");
btnEdit.forEach(botoncito => {    
    botoncito.addEventListener('click', function () {
        alert("editar") 
    });
});

btnDelete.forEach(botonlindo => {    
    botonlindo.addEventListener('click', function () {
        $("#ModEliminar").modal("show");
    });
});