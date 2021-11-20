if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} 
else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName("btn-danger")
    console.log(removeCartItemButtons)
    for (var i=0; i<removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click',removeItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('cart-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCart)
    }

}

function removeItem(event) {
    var buttonCliked = event.target
    buttonCliked.parentElement.parentElement.remove()
    updateTotal()
}


function quantityChanged(event) {
    var input = event.target
    //quantity value at least 1
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateTotal()
}

function addToCart(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    console.log(title, price, imageSrc)
    addItemToCart(title, price, imageSrc)
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div') ;
    cartRow.classList.add('cart-row');
    var cartItems = document.getElementsByClassName('cart-items')[0];
    var cartRowContens = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`;
    cartRow.innerHTML = cartRowContens ;
    cartItems.appendChild(cartRow);
}

function updateTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElements = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElements = cartRow.getElementsByClassName('cart-quantity-input')[0]
        console.log(priceElements,quantityElements)
        var price = parseFloat(priceElements.innerText.replace('RM', ''))
        var quantity = quantityElements.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = 'RM' + total
  
}