import axios from 'axios'
// get all products
export const getProducts = ({ commit }) => {
    return axios.get(`api/all-products`)
        .then(response => {
            // commit a mutation to set the products state
            commit('setProducts', response.data.data.products)
        })
        .catch(error => {
            console.log(error.response.data)
        })
};


export const getCart = ({ commit }) => {
    commit('setCart', JSON.parse(localStorage.getItem('cart')))
};

export const getUserDetails = ({ commit }) => {
    commit('storeUserDetails')
};


export const addProductToCart = ({ commit }, { product }) => {
    commit('appendToCart', product);
};

export const updateCart = ({ commit }, { cart }) => {
    commit('updateCart', cart)
};

export const userData = ({ commit }, { data, cart, context }) => {
    commit('storeUserDetails', data);
    return axios.post(`api/place-order`, {
            'data': data,
            'cart': cart
        })
        .then(response => {
            return Promise.resolve(response);
            console.log("from the action good response"+response)
        })
        .catch(error => {
            return Promise.reject(error);
            context.errors = error.response.data.errors
        });

};

export const removeFromCart = ({ commit }, productId) => {
    commit('removeItem', productId)
};

export const clearUserData = ({ commit }) => {
    commit('clearAllData')
}



