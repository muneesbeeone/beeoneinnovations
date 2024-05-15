// store.js
import { createStore } from 'vuex';
import SuccessModal from './components/common/SuccessModal.vue';

const store = createStore({
  state() {
    return {
      selectedTechnology: 0,
      selectedProduct: 'dnft',
      successModal : false
    };
  },
  mutations: {
    setSelectedTechnology(state, payload) {
      state.selectedTechnology = payload;
    },
    setSelectedProduct(state, payload) {
      state.selectedProduct = payload;
    },
    setShowSuccessModal(state, payload) {
      state.successModal = payload;
    },
  },
  actions: {
    selectTechnology({ commit }, technology) {
      commit('setSelectedTechnology', technology);
    },
    successModal({ commit }, modal) {
      commit('setShowSuccessModal', modal);
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
    successModal(state) {
      return state.successModal;
    },
  },
});

export default store;
