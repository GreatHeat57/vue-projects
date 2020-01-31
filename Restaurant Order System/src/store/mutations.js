let mutations = {
    CREATE_ORDER(state, order) {
        state.orders.unshift(order)
    },
    FETCH_ORDERS(state, orders) {
        return state.orders = orders
    },
    DELETE_ORDER(state, order) {
        let index = state.orders.findIndex(item => item.id === order.id)
        state.orders.splice(index, 1)
    },

    FETCH_SECONDBOX(state, secondbox) {
        return state.secondbox = secondbox
    },
    FETCH_THIRDBOX(state, thirdbox) {
        return state.thirdbox = thirdbox
    },
    FETCH_FOURTHBOX(state, fourthbox) {
        return state.fourthbox = fourthbox
    },
    FETCH_PRINTERS(state, printers) {
        return state.printers = printers
    },
    FETCH_CASH(state, cash) {
        return state.cash = cash
    }
}
export default mutations