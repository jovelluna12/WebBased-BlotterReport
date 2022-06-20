import { createStore } from 'vuex'

// Create a new store instance.
const store = createStore({
  state: {
    user: {
      data: {},
      token: sessionStorage.getItem("TOKEN"),
    }
  }
});
export default store;