// get all products in store
export const store = (state) => {
    return state.products;
};


// get current items in cart
export const cart = (state) => {
    return state.cart
};

export const cartTotal = (state) => {
    return state.cart.reduce((a, b) => {
        return a + b.product.price * b.quantity
    }, 0).toFixed(2);
};

export const getUserData = (state) => {
    return state.userData;
};