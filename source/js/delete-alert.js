const del = document.getElementsByClassName("trash");

for(let i = 0; i < del.length; i++) {
    del[i].addEventListener("mouseover", () => {
        let auth = confirm("Se borrará el registro");

        if(!auth) {
            console.log("Cancelado");
        } else {
            console.log("Borrado");
        }
    });
}