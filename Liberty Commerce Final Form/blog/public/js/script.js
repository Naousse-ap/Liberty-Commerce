
// Si il y a des produit dans le panier on affiche la quantité sinon on affiche 0.
if (localStorage.getItem("Nombreproduit")) {
    var Nombreproduit = Number(localStorage.getItem("Nombreproduit"));
} else {
    var Nombreproduit = 0;
}
var soustotal = 0;
var total = 0;
var taxe = 0;
var paniertab = [];

// Appelle les fonctions au lancement de la page panier.
function load() {
    displayPanier();
    calculesoustotal();
    calculetaxe();
    calculetotal();
    affichenbrpanier();

}

document.onload = load();

// affiche le nombre de produit contenus dans le panier dans la bulle du panier grâce à l'Id produit.  
(function() {
    const classname = document.querySelectorAll('#qty')

    Array.from(classname).forEach(function(element) {
        element.addEventListener('change', function() {
            const id = element.getAttribute('data-id')
            axios.patch(`/Panier/${id}`, {
                quantity: this.value
            })
            .then(function(response) {
                    console.log(response);
                    location.reload();
                })
                .catch(function(error) {
                    console.log(error);
                });
        })
    })
})();


// Ca ajoute dans le panier en récupérant l'Id, le titre, le prix et la quantité. La quantité augmente si il y a ajout du même produit (par l'id).
function addpanier(p_Photo, p_id, p_Produit, p_Prix) {
    update();
    var panier = 0;
    p_id = Number(p_id);
    paniertab.forEach(element => {
        if (element['id'] == p_id) {
            element['Quantité'] = element['Quantité'] + 1;
            panier = 1;
        }
    });
    if (panier == 0) {
        paniertab.push({ id: p_id, Photo: p_Photo, Produit: p_Produit, Prix: p_Prix, Quantité: 1 });
    }

    Nombreproduit = Nombreproduit + 1;
    localStorage.setItem('Nombreproduit', Nombreproduit);
    savePanier();
}

// Permet de sauvegarder les éléments affichés dans le panier dans le local storage sous forme de tableau.
function savePanier() {
    localStorage.setItem('Cart', JSON.stringify(paniertab));
    localStorage.setItem('save', 1);
    document.getElementById("nbrproduit").innerHTML = localStorage.getItem("Nombreproduit");
}

// Mets à jour l'affichage des données stockées.
function update() {
    if (localStorage.getItem('save') != null && localStorage.getItem('save') == 1) {
        paniertab = JSON.parse(localStorage.getItem('Cart'));

        paniertab.forEach(element => {
            element['id'] = Number(element['id']);
            element['Prix'] = Number(element['Prix']);
            element['Quantité'] = Number(element['Quantité']);
        });
    }

}

// Permet d'afficher le panier sous forme de tableau.
function displayPanier() {
    var parent = document.getElementById("tableau_panier");
    var tableau = JSON.parse(localStorage.getItem('Cart'));
    try {
        parent.innerHTML = "";
    } catch {}
    tableau.forEach(element => {
        try {
            var tr = document.createElement('tr');
            var td = document.createElement('td');
            var node = document.createTextNode(element['Produit']);
            var img = document.createElement('img');
            img.setAttribute('class', 'logo');
            img.setAttribute('src', element['Photo']);
            td.appendChild(img);
            tr.appendChild(td);
            td = document.createElement('td');

            node = document.createTextNode(element['Produit']);

            td.appendChild(node);
            tr.appendChild(td);
            td = document.createElement('td');

            node = document.createTextNode(element['Quantité']);

            td.appendChild(node);
            tr.appendChild(td);
            td = document.createElement('td');

            node = document.createTextNode(element['Prix'] + ' €');

            td.appendChild(node);
            tr.appendChild(td);
            td = document.createElement('td');


            var btn = document.createElement('button');
            var i = document.createElement('i');

            btn.setAttribute('class', 'text-dark');
            btn.setAttribute('type', 'submit');
            btn.setAttribute('onclick', "supprimer(" + element['id'] + ")");

            i.setAttribute('class', 'fa fa-trash');

            td = document.createElement('td');
            btn.appendChild(i);
            td.appendChild(btn);
            tr.appendChild(td);
            parent.appendChild(tr);
        } catch {}
    });

}

// Supprime quantité produit un par un dans le panier.  
function supprimer(id) {
    update();
    paniertab.forEach(element => {
        if (element['id'] == id) {
            element['Quantité'] = element['Quantité'] - 1;
            Nombreproduit = Number(localStorage.getItem('Nombreproduit')) - 1;
            localStorage.setItem('Nombreproduit', Nombreproduit);
            if (element['Quantité'] <= 0) {
                console.log(paniertab.indexOf(element));
                paniertab.splice(paniertab.indexOf(element), 1);
            }
        }
    });
    savePanier();
    displayPanier();
    location.reload();
}

function calculesoustotal() {
    update();
    paniertab.forEach(element => {
        soustotal += element['Quantité'] * element['Prix'];
    });
    try {
        document.getElementById('soustotal').innerHTML = soustotal.toFixed(2) + ' €';
    } catch {}
}

function calculetaxe() {
    update();

    taxe += (20 / 100) * soustotal;

    try {
        document.getElementById('taxee').innerHTML = taxe.toFixed(2) + ' €';
    } catch {}
}

function calculetotal() {
    update();

    total += soustotal + taxe;

    try {
        document.getElementById('totalpanier').innerHTML = total.toFixed(2) + ' €';
    } catch {}
}

function affichenbrpanier() {
    document.getElementById("nbrproduit").innerHTML = localStorage.getItem("Nombreproduit");
}

