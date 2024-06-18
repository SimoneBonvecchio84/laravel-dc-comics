import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const btnDelete = document.querySelectorAll('.deleteBtn');
console.log(btnDelete);

if(btnDelete.length >0) {
    btnDelete.forEach((btn) =>{
        btn.addEventListener('click', function(event) {
            event.preventDefault();
            console.log('apri modale');
            const modal = new bootstrap.Modal(document.getElementById('delete-modal'))
            modal.show();
        })
    })
}

