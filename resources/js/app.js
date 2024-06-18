import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const btnDelete = document.querySelectorAll('.deleteBtn');
console.log(btnDelete);

if(btnDelete.length) {
    btnDelete.forEach((btn) =>{
        btn.addEventListener('click', function(event) {
            event.preventDefault();
            console.log('apri modale');
            const modal = new bootstrap.Modal(document.getElementById('delete-modal'));            
            const comicTitle = btn.dataset.comicTitle;
            document.getElementById("modal-title").innerHTML = `Stai per cancellare${comicTitle}`;
            document.getElementById("modal-delete-btn")
            .addEventListener("click", function () {
                btn.submit();
                // Luca scarsissimo a Scacchi
                // proprio scarso
                // Auguri Luca!!!
                // Simo Kick
            })
            modal.show();
        })
    })
}

