import {createStore} from "vuex";


const store = createStore({
    state:{
        //to define variables
        token : localStorage.getItem('token') || 0 //<== value of 0 by default
    },

    mutations:{
        //update variables value
        UPDATE_TOKEN(state,payload)
        {
            state.token = payload;
        }
    },

    actions:{
        //action to be performed
        setToken(context, payload)
        {
            localStorage.setItem('token', payload)
            context.commit('UPDATE_TOKEN', payload)
        },
        removeToken(context)
        {
            localStorage.removeItem('token');
            context.commit('UPDATE_TOKEN', 0)
        }
    },

    getters:{
        //accessing the value of state variables
        getToken: function(state)
        {
            return state.token;
        }
    }
})

export default store;