function getcart() {
    if (JSON.parse(localStorage.getItem("cart")) == null) {
        var cart = [];
    }
    else {
        var cart = JSON.parse(localStorage.getItem("cart"));
    }
    return cart;
}

function addtocart(id, title, price) {
    var productexists = false;
    var cart = getcart();
    let quantity = document.getElementById('quantity').value;
    let newProduct = { id: id, title: title, quantity: quantity, price: price }

    cart.forEach(product => {
        if (product.id == id) {
            const index = cart.findIndex(product => product.id == id);
            cart[index].quantity = parseInt(product.quantity) + parseInt(quantity);
            localStorage.setItem('cart', JSON.stringify(cart));
            productexists = true;
        }
    });
    if (productexists == false) {
        cart.push(newProduct);
        localStorage.setItem("cart", JSON.stringify(cart));
    }
    count();

}


function displaycart() {
    contentcart = document.getElementById("cartbody");
    getcart().forEach(product => {
        contentcart.innerHTML += "<tr " + "id='tr" + product.id + "'><td class='tdcart'>"
            + product.title + "</td><td class='tdcart'>"
            + product.quantity + "</td><td class='tdcart'>"
            + product.price + "</td><td class='tdcart'>"
            + "<button onclick='deleteproduct(" + product.id + ")'class='deleteproduct'>x</button></td></tr>"
    });


}

count();

function deleteproduct(id) {
    document.querySelector("#tr" + id).remove();
    cart = getcart();
    cart = cart.filter((product) => product.id != id);
    localStorage.setItem("cart", JSON.stringify(cart));
    console.log(cart);
    count();

}
function count() {
    cart = getcart();
    total = 0;
    cart.forEach(product => {
        total += product.quantity;
        document.querySelector(".countItem").innerHTML = total;

    });

}

function validatecart() {
    var _token = $('input[type="hidden"]').attr('value');
    cart = getcart();
    cart.forEach(product => {
        $.ajax({
            url: '/addcart',
            data: {
                _token: _token,
                product: product
            },
            method: 'POST',
            error: (err) => {
                console.log(err);
            }
        });
    });
    $.ajax({
        url: '/validatecart',
        data: {
            _token
        },
        metho: 'POST',
        success: function (data) {
            if (data == "catalog") {
                window.location.href = "/catalog";

            }
        }
    });

}

function emptycart() {
    cart = getcart();
    cart.forEach(product => {
        document.querySelector("#tr" + product.id).remove();
    });
    localStorage.clear
    count();
}