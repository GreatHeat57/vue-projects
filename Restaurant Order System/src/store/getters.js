let getters = {
    orders: state => {
        return state.orders
    },
    secondboxs: state => {
        return state.secondbox
    },
    thirdboxs: state => {
        return state.thirdbox
    },
    fourthboxs: state => {
        return state.fourthbox
    },
    printers: state => {
        return state.printers
    },
    cashs: state => {
        return state.cash
    }
}

export default  getters