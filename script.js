var loader = document.getElementById("#preloader")
window.addEventListener("load", function() {
    // loader.style.display = none;
})

// model
document.addEventListener("click", function(e) {
    if (e.target.classList.contains("gallery-item")) {
        const src = e.target.getAttribute("src");
        document.querySelector(".modal-img").src = src;
        const myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
        myModal.show();
    }
})

// Multiple Image Model

function openModal(id) {
    document.getElementById('myModal' + id).style.display = "block";
}

function closeModal(id) {
    document.getElementById('myModal' + id).style.display = "none";
}

var slideIndex = 1;
// showDivs(slideIndex);

function plusDivs(n, id) {
    showDivs(slideIndex += n, id);
}

function currentDiv(n, id) {
    console.log(id);
    showDivs(slideIndex = n, id);


}

function showDivs(n, id) {
    var i;
    var x = document.getElementsByClassName("mySlides" + id);
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-opacity-off";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}

function file_changed(id) {
    var selectedFile = document.getElementById('input' + id).files[0];
    var img = document.getElementById(id)

    var reader = new FileReader();
    reader.onload = function() {
        img.src = this.result
    }
    reader.readAsDataURL(selectedFile);
}
// input
function enableinput(typeprop) {
    document.getElementById(typeprop).classList.add("removelabel");
    document.getElementById(typeprop + "Input").focus();

}


// Remove Cart Property


function remove(id) {
    if (confirm("are you shoure youy want to delete")) {
        window.location.href = 'removecart.php?pid=' + id + '';
        return true;
    }
}
// Initialize Swiper 
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});