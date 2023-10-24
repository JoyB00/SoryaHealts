window.onscroll = () => scrollFunction();

function scrollFunction() {
    const navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.add("scrolled")
    } else {
        navbar.classList.remove("scrolled")
    }
    

    // Daftar Obat Item
    const obatItem = document.getElementById("daftar-item-obat");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        obatItem.classList.add("animate__zoomIn")
    } else {
        obatItem.classList.remove("animate__zoomIn")
        obatItem.classList.add("animate__fadeOut")
    }

    // // Daftar Artikel Text
    // const artikelItem = document.getElementById("daftar-item-artikel");
    // if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    //     artikelItem.classList.add("animate__zoomIn")
    // } else {
    //     artikelItem.classList.remove("animate__zoomIn")
    //     artikelItem.classList.add("animate__fadeOut")
    // }

    // const testimoniItem = document.getElementById("daftar-item-testimoni");
    // if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    //     testimoniItem.classList.add("animate__zoomIn")
    // } else {
    //     testimoniItem.classList.remove("animate__zoomIn")
    //     testimoniItem.classList.add("animate__fadeOut")
    // }

    

}
