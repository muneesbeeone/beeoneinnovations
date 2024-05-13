// store.js
import { createStore } from 'vuex';

const store = createStore({
  state() {
    return {
      selectedTechnology: 0,
      selectedProduct: 'dnft',
    };
  },
  mutations: {
    setSelectedTechnology(state, payload) {
      state.selectedTechnology = payload;
    },
    setSelectedProduct(state, payload) {
      state.selectedProduct = payload;
    },
  },
  actions: {
    selectTechnology({ commit }, technology) {
      commit('setSelectedTechnology', technology);
    },
    selectedProduct({ commit }, product) {
      commit('setSelectedProduct', product);
    },
  },
  getters: {
    selectedTechnology(state) {
      return state.selectedTechnology;
    },
    selectedProduct(state) {
      return state.selectedProduct;
    },
  },
});

export default store;
