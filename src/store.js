// store.js
import { createStore } from 'vuex';

const store = createStore({
  state() {
    return {
      selectedTechnology: 0,
    };
  },
  mutations: {
    setSelectedTechnology(state, payload) {
      state.selectedTechnology = payload;
    },
  },
  actions: {
    selectTechnology({ commit }, technology) {
      commit('setSelectedTechnology', technology);
    },
  },
  getters: {
    selectedTechnology(state) {
      return state.selectedTechnology;
    },
  },
});

export default store;
