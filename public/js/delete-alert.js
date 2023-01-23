const del = document.getElementsByClassName("trash");

for(let i = 0; i < del.length; i++) {
    del[i].addEventListener("click", () => {
        let auth = confirm("Se borrará el registro");

        if(!auth) {
            event.preventDefault();
            console.log("Cancelado");
        } else {
            console.log("Borrado");
        }
    });
}