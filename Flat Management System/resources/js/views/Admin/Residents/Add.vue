<template>
    <div class="residents-add" v-loading.fullscreen.lock="loading.state">
        <div class="main-content">
            <heading :title="$t('models.resident.add')" icon="icon-group" shadow="heavy" bgClass="bg-transparent">
                <add-actions :saveAction="submit" editRoute="adminResidentsEdit" route="adminResidents"/>
            </heading>
            <div class="crud-view">
                <el-form :model="model" ref="form">
                    <el-row :gutter="20">
                        <el-col :lg="12" :sm="24">
                            <card :header="$t('models.resident.personal_details_card')">
                                <el-row :gutter="20">
                                    <el-col :md="12">
                                        <el-form-item :rules="validationRules.title"
                                                    :label="$t('general.salutation')"
                                                    prop="title"
                                                    class="label-block">
                                            <el-select :placeholder="$t('general.placeholders.select')" style="display: block" v-model="model.title">
                                                <el-option
                                                        :key="title.value"
                                                        :label="title.name"
                                                        :value="title.value"
                                                        v-for="title in titles">
                                                </el-option>
                                            </el-select>
                                        </el-form-item>
                                    </el-col>
                                    <el-col :md="12" v-if="model.title === 'company'">
                                        <el-form-item :label="$t('models.resident.company')" :rules="validationRules.company"
                                                    prop="company">
                                            <el-input autocomplete="off" type="text" v-model="model.company"></el-input>
                                        </el-form-item>
                                    </el-col>
                                    <el-col :md="12">
                                        <el-form-item :label="$t('general.first_name')" :rules="validationRules.first_name"
                                                    prop="first_name">
                                            <el-input autocomplete="off" type="text" v-model="model.first_name"></el-input>
                                        </el-form-item>
                                    </el-col>
                                    <el-col :md="12">
                                        <el-form-item :label="$t('general.last_name')" :rules="validationRules.last_name"
                                                    prop="last_name">
                                            <el-input autocomplete="off" type="text" v-model="model.last_name"></el-input>
                                        </el-form-item>
                                    </el-col>
                                    <el-col :md="12">
                                        <el-form-item :label="$t('models.resident.birth_date')" :rules="validationRules.birth_date"
                                                    prop="birth_date">
                                            <el-date-picker
                                                    format="dd.MM.yyyy"
                                                    style="width: 100%;"
                                                    type="date"
                                                    v-model="model.birth_date"
                                                    :picker-options="birthDatePickerOptions"
                                                    value-format="yyyy-MM-dd"/>
                                        </el-form-item>
                                    </el-col>
                                    <!-- <el-col :md="12">
                                        <el-form-item :label="$t('general.language')"
                                                    :rules="validationRules.language"
                                                    prop="settings.language"
                                                    class="label-block">
                                            <select-language :active-language.sync="model.settings.language"/>
                                        </el-form-item>
                                    </el-col> -->
                                    <el-col :md="12">
                                        <el-form-item class="label-block"
                                                    :label="$t('models.resident.nation')"
                                                    prop="nation">
                                            <el-select 
                                                filterable
                                                clearable
                                                style="display: block"
                                                v-model="model.nation"
                                            >
                                                <el-option :key="country.id"
                                                        :label="country.name"
                                                        :value="country.id"
                                                        v-for="country in countries"></el-option>
                                            </el-select>
                                        </el-form-item>
                                    </el-col>
                                    <!-- <el-col :md="12">
                                        <el-form-item class="label-block"
                                                    :label="$t('models.resident.relation.type.label')"
                                                    :rules="validationRules.type"
                                                    prop="type">
                                            <el-select :placeholder="$t('general.placeholders.select')" 
                                                        style="display: block"
                                                        v-model="model.type">
                                                <el-option
                                                    :key="k"
                                                    :label="$t(`models.resident.relation.type.${type}`)"
                                                    :value="parseInt(k)"
                                                    v-for="(type, k) in constants.relations.type">
                                                </el-option>
                                            </el-select>
                                        </el-form-item>
                                    </el-col>
                                    <el-col :md="12" v-if="model.type == 1">
                                        <el-form-item class="label-block"
                                                    :label="$t('models.resident.tenant_type.label')"
                                                    :rules="validationRules.tenant_type"
                                                    prop="tenant_type">
                                            <el-select :placeholder="$t('general.placeholders.select')" 
                                                        style="display: block"
                                                        v-model="model.tenant_type">
                                                <el-option
                                                    :key="k"
                                                    :label="$t(`models.resident.tenant_type.${type}`)"
                                                    :value="parseInt(k)"
                                                    v-for="(type, k) in constants.residents.tenant_type">
                                                </el-option>
                                            </el-select>
                                        </el-form-item>
                                    </el-col> -->
                                </el-row>
                            </card>
                            <card class="mt15" :header="$t('models.resident.contact_info_card')">
                                <el-row :gutter="20">
                                    <el-col :md="12">
                                        <el-form-item :label="$t('general.email')" :rules="validationRules.email" prop="email" >
                                            <el-input autocomplete="off" type="email" v-model="model.email"></el-input>
                                        </el-form-item>
                                    </el-col>
                                    <el-col :md="12">
                                        <el-form-item :label="$t('models.resident.mobile_phone')" prop="mobile_phone">
                                            <el-input autocomplete="off" type="text" v-model="model.mobile_phone"></el-input>
                                        </el-form-item>
                                    </el-col>
                                    <el-col :md="12">
                                        <el-form-item :label="$t('models.resident.private_phone')" prop="private_phone">
                                            <el-input autocomplete="off" type="text" v-model="model.private_phone"></el-input>
                                        </el-form-item>
                                    </el-col>
                                    <el-col :md="12">
                                        <el-form-item :label="$t('models.resident.work_phone')" prop="work_phone">
                                            <el-input autocomplete="off"
                                                    type="text"
                                                    v-model="model.work_phone"
                                                    class="dis-autofill"
                                                    readonly
                                                    onfocus="this.removeAttribute('readonly');"
                                            ></el-input>
                                        </el-form-item>
                                    </el-col>
                                </el-row>
                            </card>
                        </el-col>
                        <el-col :lg="12" :sm="24">
                            <card :header="$t('models.resident.account_info_card')">
                                <!--                            <el-form-item :label="$t('models.user.profile_image')">-->
                                <!--                                <cropper :resize="false" :viewportType="'circle'" @cropped="cropped"/>-->
                                <!--                            </el-form-item>-->

                                <el-row :gutter="20">
                                    <el-col :md="24">
                                        <el-form-item :label="$t('general.password')" :rules="validationRules.password" prop="password">
                                            <el-input autocomplete="off"
                                                    type="password"
                                                    v-model="model.password"
                                                    class="dis-autofill"
                                                    readonly
                                                    onfocus="this.removeAttribute('readonly');"
                                            ></el-input>
                                        </el-form-item>
                                    </el-col>
                                    <!-- <el-col :md="12">
                                        <el-form-item :label="$t('general.confirm_password')" :rules="validationRules.password_confirmation"
                                                    prop="password_confirmation">
                                            <el-input autocomplete="off" type="password"
                                                    v-model="model.password_confirmation"></el-input>
                                        </el-form-item>
                                    </el-col> -->
                                </el-row>
                            </card>
                            
                            
                            <card class="mt15 relation-box">
                                <template slot="header">
                                    {{ $t('general.box_titles.relations') }}
                                    <el-button style="float:right" 
                                        type="primary" 
                                        @click="showRelationDialog" 
                                        icon="icon-plus" 
                                        size="mini" 
                                        :disabled="model.type == ''"
                                        class="el-button--transparent">
                                        {{ $t('models.resident.relation.add') }}
                                    </el-button>
                                </template>
                                
                                <relation-list-table
                                            :items="model.relations"
                                            :hide-relation-id="true"
                                            :hide-avatar="true"
                                            @edit-relation="editRelation"
                                            @delete-relation="deleteRelation">
                                </relation-list-table>
                                
                            </card>

                            <!-- <card class="mt15 relation-box">
                                <template slot="header">
                                    {{ $t('general.box_titles.files') }}
                                    <el-button style="float:right" 
                                                type="primary" 
                                                @click="showMediaDialog" 
                                                icon="icon-plus" 
                                                size="mini" 
                                                round>
                                                {{ $t('models.resident.relation.add_files') }}
                                        </el-button>
                                </template>
                                <relation-list
                                    :actions="mediaActions"
                                    :columns="mediaColumns"
                                    :show-header="false"
                                    :filterValue="model.id"
                                    fetchAction="getResidentMedia"
                                    filter="resident_id"
                                    v-if="model.id"
                                    @delete-media="deleteMedia"
                                />
                            </card> -->
                        </el-col>
                    </el-row>
                </el-form>
            </div>
        </div>
        <!-- <ui-drawer :visible.sync="visibleDrawer" :z-index="2" direction="right" docked>
            <ui-divider content-position="left"><i class="icon-handshake-o ti-user icon"></i> &nbsp;&nbsp;{{ $t('models.resident.relation.title') }}</ui-divider>
            <div class="content" v-if="visibleDrawer">
                <relation-form v-if="editingRelation" 
                                mode="edit" 
                                :data="editingRelation" 
                                :resident_type="model.type" 
                                :visible.sync="visibleDrawer" 
                                :edit_index="editingRelationIndex" 
                                @update-relation="updateRelation"
                                @delete-relation="deleteRelation" 
                                :used_units="used_units"/>
                <relation-form v-else mode="add" 
                                :resident_type="model.type" 
                                :visible.sync="visibleDrawer" 
                                @add-relation="addRelation" 
                                @delete-relation="deleteRelation"
                                :used_units="used_units"/>
            </div>
        </ui-drawer> -->
        <el-dialog :close-on-click-modal="true" :title="editingRelation ? $t('models.resident.relation.edit') : $t('models.resident.relation.new')"
                    :visible.sync="visibleRelationDialog"
                    v-loading="loading.state" width="30%">
            <div class="content" v-if="visibleRelationDialog">
                <relation-form v-if="editingRelation" 
                                mode="edit" 
                                :data="editingRelation" 
                                :resident_type="model.type" 
                                :visible.sync="visibleRelationDialog" 
                                :edit_index="editingRelationIndex" 
                                @update-relation="updateRelation"
                                @delete-relation="deleteRelation" 
                                :used_units="used_units"/>
                <relation-form v-else mode="add" 
                                :resident_type="model.type" 
                                :visible.sync="visibleRelationDialog" 
                                @add-relation="addRelation" 
                                @delete-relation="deleteRelation"
                                :used_units="used_units"/>
            </div>
            <span class="dialog-footer" slot="footer">
                <!-- <el-button @click="closeModal" size="mini">{{$t('models.building.cancel')}}</el-button>
                <el-button @click="assignManagers" size="mini" type="primary">{{$t('models.building.assign_managers')}}</el-button> -->
            </span>
        </el-dialog>
    </div>
</template>

<script>
    import Heading from 'components/Heading';
    import Card from 'components/Card';
    import AdminResidentsMixin from 'mixins/adminResidentsMixin';
    import Cropper from 'components/Cropper';
    import AddActions from 'components/EditViewActions';
    import SelectLanguage from 'components/SelectLanguage';
    import RelationForm from 'components/RelationForm';
    import RelationListTable from 'components/RelationListTable';
    import RelationListing from 'components/RelationListing';
    import {mapActions, mapGetters} from 'vuex';

    export default {
        mixins: [AdminResidentsMixin({
            mode: 'add'
        })],
        components: {
            Heading,
            Card,
            Cropper,
            RelationForm,
            AddActions,
            SelectLanguage,
            RelationListTable,
            RelationListing
        },
        data() {
            return {
                oldType: null,
            }
        },
        mounted() {
            this.$root.$on('changeLanguage', () => this.getCountries());
        },
        computed: {
            ...mapGetters('application', {
                constants: 'constants'
            })
        }
    }
</script>

<style lang="scss">
    .label-block .el-form-item__label {
        display: block;
        float: none;
        text-align: left;
    }

    .residents-add {
        .el-card__header, .el-card__body {
            padding: 10px !important;
        }
    }
</style>

<style lang="scss" scoped>
    .residents-add {
        overflow: hidden;
        height: 100%;
        flex: 1;

        .el-col {
            padding: 0 10px !important;
        }

        .main-content { 
            overflow-x: hidden;
            overflow-y: scroll;
            height: 100%;

            .crud-view {
                :global(.el-card) {
                    margin: 0 10px 40px;
                }
            }
        }

        /deep/ .relation-box.el-card {
            .el-card__header {
                display: block;
            }            
 
        }

        

        .ui-drawer {
            .ui-divider {
                margin: 32px 16px 0 16px;
                i {
                    padding-right: 0;
                }

                /deep/ .ui-divider__content {
                    left: 0;
                    z-index: 1;
                    padding-left: 0;
                    font-size: 16px;
                    font-weight: 700;
                    color: var(--color-primary);
                }
            }
            .content {
                height: calc(100% - 70px);
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                padding: 16px;
                overflow-x: hidden;
                overflow-y: auto;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                position: relative;

                .ui-divider {
                    margin: 32px 16px 16px 0;
                }
                
            }

            // .chart-card-header{
            //     font-size: 16px;
            //     font-weight: 400;
            //     padding: 10px 20px;
            //     margin: 0;
            //     border-bottom: 1px solid #EBEEF5;

            //     h3 {
            //         font-size: 24px;
            //         font-weight: 500;
            //     }

            // }

            
        }
    }

    .group-name {
        width: 192px;
        text-align: right;
        padding-right: 10px;
        box-sizing: border-box;
        font-size: 16px;
        font-weight: bold;
        color: #6AC06F;
    }

    .mb15 {
        margin-bottom: 15px;
    }

    /deep/ .el-dialog {
        width: 50% !important;

        .el-dialog__header {
            padding-left: 30px;
        }

        .el-dialog__body {
            padding-top: 0;
            padding-bottom: 20px;
        }

        .el-dialog__footer {
            padding: 0;
        }
    }
</style>
