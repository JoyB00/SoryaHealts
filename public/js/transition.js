window.onscroll = () => scrollFunction();

function scrollFunction() {
     

    // Daftar Obat Item
    const obatItem = document.getElementById("daftar-item-obat");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        obatItem.classList.add("animate__zoomIn")
    } else {
        obatItem.classList.remove("animate__zoomIn")
        obatItem.classList.add("animate__fadeOut")
    }



    

}
