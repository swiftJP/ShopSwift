document.getElementById("promo-btn").addEventListener("click", promoCodeVerify);

//Verify the promo code
function promoCodeVerify() {
    //Accepted
    var promoCode1 = "WESHOPSWIFT";
    var promoCode2 = "IAMSWIFT";
    var attempt = document.getElementById("promo").value;

    if ((attempt == promoCode1) || (attempt == promoCode2)) {
        document.getElementById("charge").innerHTML = "FREE DELIVERY";
    } else {
    }
}
