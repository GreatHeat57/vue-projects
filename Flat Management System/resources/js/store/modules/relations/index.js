
export default {
    namespaced: true,
    state: {
        data: []
    },
    actions: {
        reset ({commit}) {
            commit('reset')
        },
        async get ({state, commit}, params) {
            const {data} = await this._vm.axios.get('relations', {params})
            return data.data
        },
        async create ({state, commit}, params) {
            const {data} = await this._vm.axios.post('relations', params, {showMessage: true})
            const newData = state

            newData.data.unshift(data.data)

            commit('set', newData)
            return data;
        },
        async update ({commit}, {id, ...params}) {
            const {data} = await this._vm.axios.put(`relations/${id}`, params, {showMessage: true})
            return data;
        },
        async delete ({commit}, {id}) {
            await this._vm.axios.delete(`relations/${id}`, {showMessage: true})
        },
        
        async addMedia({ commit}, {id, media}) {
            commit('addmedia', {data_id : id, media})
        },
    },
    getters: {
        getById: ({data}) => id => data.find(item => item.id === id)
    },
    mutations: {
        reset: state => Object.assign(state, {
            data: []
        }),
        set: (state, payload) => Object.assign(state, payload),
        update: ({data}, payload) => { Object.assign(data.find(({id}) => id === payload.id), payload);
         },
        delete: ({data}, id) => {
            let i = data.length

            while (i--) {
                if (id === data[i].id) {
                    data.splice(i, 1)

                    break
                }
            }
        },
        addmedia: ({data}, {data_id, media}) => {
            let item = data.find(({id}) => id === data_id)
            if(!item.media)
                item.media = [];
            item.media.push(media);
        }
    }
}