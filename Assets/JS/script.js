document.addEventListener('DOMContentLoaded', function () {

    // Validation formulaire ajout
    const formAjout = document.getElementById('formAjout');
    if (formAjout) {
        formAjout.addEventListener('submit', function (e) {
            const nom = document.querySelector('[name="nom"]').value.trim();
            const prenom = document.querySelector('[name="prenom"]').value.trim();

            if (nom === '' || prenom === '') {
                e.preventDefault();
                alert('Veuillez remplir le nom et le prénom !');
            }
        });
    }

    // Validation formulaire modification
    const formUpdate = document.getElementById('formUpdate');
    if (formUpdate) {
        formUpdate.addEventListener('submit', function (e) {
            const nom = document.querySelector('[name="nom"]').value.trim();
            const prenom = document.querySelector('[name="prenom"]').value.trim();

            if (nom === '' || prenom === '') {
                e.preventDefault();
                alert('Veuillez remplir le nom et le prénom !');
            }
        });
    }

});



// Confirmation avant suppression
document.querySelectorAll('.supprimer').forEach(function(lien) {
    lien.addEventListener('click', function(e) {
        if (!confirm('Voulez-vous vraiment supprimer cet étudiant ?')) {
            e.preventDefault();
        }
    });
});