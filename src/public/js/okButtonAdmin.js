function ok() {

    let val = document.getElementById('afficherBien').value;
    if (val === "HÔTEL") {
        // console.log("C'est un Hôtel");
        document.getElementById("affHotel").removeAttribute('style');
        document.getElementById("affRestaurant").setAttribute('style', 'display:none');
        document.getElementById("affBrasserie").setAttribute('style', 'display:none');
        document.getElementById("affBar").setAttribute('style', 'display:none');
        document.getElementById("affSnack").setAttribute('style', 'display:none');
        document.getElementById("showDetails").setAttribute("style", "display:none");

    } else if (val === "RESTAURANT") {
        // console.log("C'est un restaurant");
        document.getElementById("affRestaurant").removeAttribute('style');
        document.getElementById("affHotel").setAttribute('style', 'display:none');
        document.getElementById("affBar").setAttribute('style', 'display:none');
        document.getElementById("affBrasserie").setAttribute('style', 'display:none');
        document.getElementById("affSnack").setAttribute('style', 'display:none');
        document.getElementById("showDetails").setAttribute("style", "display:none");

    } else if (val === "BRASSERIE") {
        // console.log("C'est une Brasserie");
        document.getElementById("affBrasserie").removeAttribute('style');
        document.getElementById("affHotel").setAttribute("style", "display:none");
        document.getElementById("affRestaurant").setAttribute('style', 'display:none');
        document.getElementById("affBar").setAttribute('style', 'display:none');
        document.getElementById("affSnack").setAttribute('style', 'display:none');
        document.getElementById("showDetails").setAttribute("style", "display:none");


    } else if (val === "BAR") {
        // console.log("C'est un Bar");
        document.getElementById("affBar").removeAttribute('style');
        document.getElementById("affHotel").setAttribute("style", "display:none");
        document.getElementById("affRestaurant").setAttribute('style', 'display:none');
        document.getElementById("affBrasserie").setAttribute('style', 'display:none');
        document.getElementById("affSnack").setAttribute('style', 'display:none');
        document.getElementById("showDetails").setAttribute("style", "display:none");

    } else if (val === "SNACK") {
        // console.log("C'est un Snack");
        document.getElementById("affSnack").removeAttribute('style');
        document.getElementById("affHotel").setAttribute("style", "display:none");
        document.getElementById("affRestaurant").setAttribute('style', 'display:none');
        document.getElementById("affBrasserie").setAttribute('style', 'display:none');
        document.getElementById("affBar").setAttribute('style', 'display:none');
        document.getElementById("showDetails").setAttribute("style", "display:none");
    }

}