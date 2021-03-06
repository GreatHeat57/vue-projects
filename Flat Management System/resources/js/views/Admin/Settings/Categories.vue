<template>
    <div class="requestCategories">
        <heading style="background: transparent;" title="" shadow="heavy">
            <el-button @click="openAdd" icon="ti-plus" round size="mini" type="primary">
                {{$t('models.request_category.add')}}
            </el-button>
        </heading>
        <list-table
            :fetchMore="fetchMore"
            :fetchMoreParams="fetchParams"
            :header="header"
            :items="items"
            :loading="{state: loading}"
            :pagination="{total, currPage, currSize}"
            :withCheckSelection="false"
            :withSearch="false"
            v-if="isReady">
        </list-table>
        <el-dialog :title="modalText.title" :visible.sync="showModal">
            <el-form :model="model" ref="form">
                <el-form-item :label="$t('general.name')" :rules="validationRules.name" prop="name">
                    <el-input autocomplete="off" v-model="model.name"></el-input>
                </el-form-item>
                <el-form-item :label="$t('models.request_category.parent')" :rules="validationRules.parent_id"
                              prop="parent_id">
                    <el-select class="custom-select" v-model="model.parent_id">
                        <el-option
                            :key="category.id"
                            :label="category.name"
                            :value="category.id"
                            v-for="category in requestCategories">
                        </el-option>
                    </el-select>
                </el-form-item>
            </el-form>
            <span class="dialog-footer" slot="footer">
                <el-button @click="showModal = false">{{ $t('models.request_category.cancel') }}</el-button>
                <el-button @click="submitForm" type="primary">{{ modalText.button }}</el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
    import Heading from 'components/Heading';
    import ListTableMixin from 'mixins/ListTableMixin';
    import ModalCrudMixin from 'mixins/modalCrudMixin';

    const mixin = ListTableMixin({
        actions: {
            get: 'getRequestCategories',
            getParams: {
                tree: true
            }
        },
        getters: {
            items: 'requestCategories',
            pagination: 'requestCategoriesMeta'
        }
    });

    const modalMixin = ModalCrudMixin({
        actions: {
            delete: 'deleteRequestCategory',
            get: 'getRequestCategory',
            update: 'updateRequestCategory',
            create: 'createRequestCategory'
        }
    });

    export default {
        components: {
            Heading
        },
        mixins: [mixin, modalMixin],
        data() {
            return {
                i18nName: 'requestCategory',
                header: [{
                    label: this.$t('general.name'),
                    prop: 'name'
                }, {
                    width: 200,
                    actions: [{
                        icon: 'ti-pencil',
                        title: this.$t('general.actions.edit'),
                        onClick: this.openEdit
                    }, {
                        icon: 'ti-close',
                        type: 'danger',
                        title: this.$t('general.actions.delete'),
                        onClick: this.remove
                    }]
                }],
                model: {
                    id: '',
                    name: '',
                    description: ''
                },
                validationRules: {
                    name: [{
                        required: true,
                        message: this.$t('models.request_category.required')
                    }],
                },
            };
        }
    }
</script>

<style scoped>
    .custom-select {
        display: block;
    }
</style>
