// set products in to state
export const setProducts = (state, products) => {
    state.products = products;
    if (localStorage.getItem('cart')) {
        state.cart = JSON.parse(localStorage.getItem('cart'))
    }
};

export const setCart = (state, cart) => {
    state.cart = cart;
}

export const updateCart = (state, cart) => {
    // console.log(cart)
    localStorage.setItem('cart', JSON.stringify(cart));
};

export const appendToCart = (state, product) => {
    const existing = state.cart.find(item => {
        return item.product.id === product.id
    });

    if (existing){
        existing.quantity++
    }else {
        state.cart.push({
            product,
            quantity: 1
        })
    }
    if (localStorage.getItem('cart')){
        localStorage.setItem('cart', JSON.stringify(state.cart))
    }else {
        localStorage.setItem('cart', JSON.stringify(state.cart))
    }
};


export const removeItem = (state, productId) => {
    state.cart = state.cart.filter(item => {
        return item.product.id !== productId
    });

    localStorage.setItem('cart', JSON.stringify(state.cart));
};

export const storeUserDetails = (state, data) => {
    let userData = data;

    if (typeof userData == 'undefined') {
        data = JSON.parse(localStorage.getItem('userData'));
        state.userData = data;
        return ;
    }else {
        localStorage.setItem('userData', JSON.stringify(data));
        state.userData = data;
        return;
    }

}

export const clearAllData = (state) => {
    localStorage.removeItem('userData');
    localStorage.removeItem('cart');

    state.cart = [];
    state.userData = {}
}

