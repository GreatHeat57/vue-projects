import axios from 'axios'

let actions = {
    // createPost({commit}, post) {
    //     axios.post('/api/posts', post)
    //         .then(res => {
    //             commit('CREATE_POST', res.data)
    //         }).catch(err => {
    //         console.log(err)
    //     })

    // },
    // fetchPosts({commit}) {
    //     axios.get('/api/posts')
    //         .then(res => {
    //             commit('FETCH_POSTS', res.data)
    //         }).catch(err => {
    //         console.log(err)
    //     })
    // },
    // deletePost({commit}, post) {
    //     axios.delete(`/api/posts/${post.id}`)
    //         .then(res => {
    //             if (res.data === 'ok')
    //                 commit('DELETE_POST', post)
    //         }).catch(err => {
    //         console.log(err)
    //     })
    // },

    fetchOrders({commit}) {
        axios.get('json/orders.json')
            .then(res => {
                commit('FETCH_ORDERS', res.data)
            }).catch(err => {
            // console.log(err)
        })
    },
    fetchSecondbox({commit}) {
        axios.get('json/secondbox.json')
            .then(res => {
                commit('FETCH_SECONDBOX', res.data)
            }).catch(err => {
            // console.log(err)
        })
    },
    fetchThirdbox({commit}) {
        axios.get('json/thirdbox.json')
            .then(res => {
                commit('FETCH_THIRDBOX', res.data)
            }).catch(err => {
            // console.log(err)
        })
    },
    fetchFourthbox({commit}) {
        axios.get('json/fourthbox.json')
            .then(res => {
                commit('FETCH_FOURTHBOX', res.data)
            }).catch(err => {
            // console.log(err)
        })
    },
    fetchPrinters({commit}) {
        axios.get('json/printers.json')
            .then(res => {
                commit('FETCH_PRINTERS', res.data)
            }).catch(err => {
            // console.log(err)
        })
    },
    fetchCash({commit}) {
        axios.get('json/cash.json')
            .then(res => {
                commit('FETCH_CASH', res.data)
            }).catch(err => {
            // console.log(err)
        })
    }
}

    export default actions