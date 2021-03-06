<template>

    <div :class="['requests']">
        <div class="container" >
            <div class="inner-container">
            <div class="main-content" v-infinite-scroll="get">
                <ui-heading icon="icon-chat-empty" :title="$t('resident.requests')" :description="$t('resident.heading_info.request')">
                    <el-popover class="desktop-show" popper-class="requests__filter-popover" placement="bottom-end" trigger="click" :width="192">
                        <el-button slot="reference" class="fit-button" icon="el-icon-sort" round>{{$t('resident.filters')}}</el-button>
                        <filters ref="filters" layout="column" :data.sync="filters.data" :schema="filters.schema" @changed="onFiltersChanged" />
                        <el-button type="primary" size="small" icon="el-icon-sort-up" @click="resetFilters">{{$t('resident.reset_filters')}}</el-button>
                    </el-popover>
                    <el-button @click="showAddRequest" class="fit-button desktop-show" type="primary" icon="ti-plus" round>
                        {{$t('resident.add_request')}}
                    </el-button>
                </ui-heading>
                <el-popover class="mobile-show" popper-class="requests__filter-popover" placement="bottom-end" trigger="click" :width="192">
                        <el-button slot="reference" class="fit-button" icon="el-icon-sort" round>{{$t('resident.filters')}}</el-button>
                        <filters ref="filters" layout="column" :data.sync="filters.data" :schema="filters.schema" @changed="onFiltersChanged" />
                        <el-button type="primary" size="small" icon="el-icon-sort-up" @click="resetFilters">{{$t('resident.reset_filters')}}</el-button>
                    </el-popover>
                    <el-button @click="showAddRequest" class="fit-button mobile-show" type="primary" icon="ti-plus" round>
                        {{$t('resident.add_request')}}
                    </el-button>
                <ui-divider />
                <dynamic-scroller ref="dynamic-scroller" :items="requests.data" :min-item-size="249">
                    <template #before v-if="loading && !requests.data.length">
                        <loader v-for="idx in 5" :key="idx" />
                    </template>
                    <template v-slot="{item, index, active}">
                        <dynamic-scroller-item :item="item" :active="active" :data-index="index" :size-dependencies="[item]">
                            <request-card  
                                :categories="categories" 
                                :data="item" :visible-media-limit="3" 
                                :media-options="{container: '#gallery'}" 
                                @toggle-drawer="toggleDrawer(item)" 
                                @more-media="toggleDrawer(item, 'media')" 
                                @tab-click="$refs['dynamic-scroller'].forceUpdate" 
                                @hook:mounted="$refs['dynamic-scroller'].forceUpdate" 
                                @update-dynamic-scroller="force_scroller_update()">

                                <template #tab-overview-after-for-mobile>
                                    <div class="tab-overview-after-for-mobile">
                                        <el-tooltip :content="$t('resident.tooltips.status_change_requeset')">
                                            <el-button icon="icon-ok" size="mini" @click="changeRequestStatus(item, 'done')" plain round v-if="item.status != 4">{{$t('resident.actions.to_done')}}</el-button>
                                            <el-button icon="icon-right-1" size="mini" @click="changeRequestStatus(item, 'reactivate')" plain round v-if="item.status == 4">{{$t('resident.actions.to_reactivated')}}</el-button>
                                        </el-tooltip>
                                        <el-button icon="el-icon-right" size="mini" @click="toggleDrawer(item)" plain round>{{$t('resident.actions.view')}}</el-button>
                                    </div>
                                </template>
                                <template #tab-overview-after>
                                    <div class="tab-overview-after">
                                        <el-button icon="el-icon-right" size="mini" @click="toggleDrawer(item)" plain round>{{$t('resident.actions.view')}}</el-button>
                                        <el-tooltip :content="$t('resident.tooltips.status_change_requeset')">
                                            <el-button icon="icon-ok" size="mini" @click="changeRequestStatus(item, 'done')" plain round v-if="item.status != 4">{{$t('resident.actions.to_done')}}</el-button>
                                            <el-button icon="icon-right-1" size="mini" @click="changeRequestStatus(item, 'reactivate')" plain round v-if="item.status == 4">{{$t('resident.actions.to_reactivated')}}</el-button>
                                        </el-tooltip>
                                    </div>
                                </template>
                                <template #tab-media-after>
                                    <ui-divider v-if="!item.media.length">
                                        <el-button icon="el-icon-upload" size="mini" round @click="toggleDrawer(item, 'media')">{{$t('resident.placeholder.upload')}}...</el-button>
                                    </ui-divider>
                                    <!-- <ui-divider v-if="item.media.length">
                                        Exist
                                    </ui-divider> -->
                                </template>
                            </request-card>
                        </dynamic-scroller-item>
                    </template>
                    <template #after v-if="loading && requests.data.length">
                        <loader />
                    </template>
                </dynamic-scroller>
            </div>
            <!-- <ui-drawer :size="448" :visible.sync="addRequestDialogVisible" :z-index="1" direction="right" docked>
                <ui-divider content-position="left">{{$t('resident.add_request')}}</ui-divider>
                <div class="content">
                    <request-add-form ref="request-add-form" />
                </div>
            </ui-drawer> -->
            </div>
            <request-status-change-modal
                :statusChangeModalVisible="statusChangeModalVisible"
                :statusChangeModalType="statusChangeModalType"
                :closeModal="closeStatusChangeModal"
                :changeStatus="changeStatus"
            />
        </div>
        
        <ui-drawer :size="448" :visible.sync="visibleDrawer" :z-index="2" direction="right" docked @update:visibleDrawer="resetDataFromDrawer" :class="{'full-width': !openedRequest}" :is-resident="true">
            <!-- <a class="a-close-button" :class="{'display-block': !openedRequest}" @click="visibleDrawer=!visibleDrawer">
                <span class="el-icon-close"></span>
            </a> -->
            <el-tabs type="card" v-model="activeDrawerTab" stretch v-if="openedRequest">
                <el-tab-pane name="chat" lazy>
                    <div slot="label">
                        <i class="ti-comments"></i>
                        {{$t('resident.chat')}}
                    </div>
                    <chat ref="chat" :id="openedRequest.id" type="request" height="100%" max-height="100%" />
                </el-tab-pane>
                <el-tab-pane name="media" lazy>
                    <div slot="label">
                        <i class="ti-gallery"></i>
                        {{$t('resident.media')}}
                    </div>
                    <ui-media-gallery :files="openedRequest.media.map(({url}) => url)" />
                    <ui-divider content-position="left"><i class="el-icon-upload"></i> {{$t('resident.request_upload_title')}}</ui-divider>
                    
                    <div class="upload-description">
                        <el-alert
                            :title="$t('resident.request_upload_desc')"
                            type="info"
                            show-icon
                            :closable="false"
                        >
                        </el-alert>
                    </div>
                    <ui-media-uploader v-model="media" 
                                    :headers="{'Authorization': `Bearer ${authorizationToken}`, 'Accept': 'application/json, text/plain, */*', 'Content-Type': 'application/json;charset=UTF-8', 'Localization': $i18n.locale}" 
                                    :action="`api/v1/requests/${openedRequest.id}/media`" 
                                    :id="openedRequest.id" 
                                    type="request"
                                    :options="{drop: true, draggable: true, multiple: true}" />

                    <!-- <div ref="media-content" id="media-content" class="content">
                        <ui-media-gallery :images="openedRequest.media.map(({url}) => url)" />
                        <el-divider>
                            <div v-if="uploadedMedia.length">
                                <el-button type="success" size="small" round :loading="uploadingMedia" @click="uploadMedia">
                                    <template v-if="uploadingMedia">Uploading...</template>
                                    <template v-else>Click here to upload {{uploadedMedia.length}} files</template>
                                </el-button>
                                <el-tooltip effect="dark" content="Reset upload" placement="bottom" v-if="!uploadingMedia">
                                    <el-button type="danger" icon="el-icon-delete" size="small" :disabled="uploadingMedia" circle @click="$refs.upload.clear" />
                                </el-tooltip>
                            </div>
                            <template v-else>
                                <i class="el-icon-upload"></i> {{$t('resident.placeholder.upload')}}...
                            </template>
                        </el-divider>
                        <el-alert type="warning" title="Once confirmed the uploaded files, you can no longer delete them. Please proceed with caution!" :closable="false" center />
                        <el-divider />
                        <media-upload ref="upload" v-model="uploadedMedia" :loading="uploadingMedia" :size="mediaUploadMaxSize" :allowed-types="['image/jpg', 'image/jpeg', 'image/png', 'application/pdf']" :cols="2" >
                            <template slot="trigger" slot-scope="scope">
                                <el-tooltip key="trigger" content="Drop files or click here to select" effect="dark" placement="bottom" >
                                    <el-button class="trigger" icon="el-icon-plus" :style="scope.mediaItemStyle" @click="scope.triggerSelect" :disabled="uploadingMedia" />
                                </el-tooltip>
                            </template>
                        </media-upload>
                        <media ref="media" :id="4" type="requests" layout="list" v-model="uploadedMedia" :upload-options="{drop: true, draggable: true, multiple: true, extensions: 'jpg'}" />
                    </div> -->
                </el-tab-pane>
                <el-tab-pane name="audit" lazy>
                    <div slot="label">
                        <i class="ti-gallery"></i>
                        Audit
                    </div>
                    <audit v-if="openedRequest.id" :id="openedRequest.id" type="request" show-filter />
                </el-tab-pane>
            </el-tabs>
            <template v-if="!openedRequest">
                <ui-divider content-position="left">{{$t('resident.add_request')}}</ui-divider>
                <div class="content">
                    <request-add-form :visible.sync="visibleDrawer" ref="request-add-form" />
                </div>
            </template>
        </ui-drawer>
        
    </div>
</template>

<script>
    import {mapActions, mapState} from 'vuex'
    import Loader from 'components/resident/RequestCard/Loader'
    

    export default {
        components: {
            Loader,
        },
        data () {
            return {
                loading: false,
                media: [],
                categories: [],                
                openedRequest: null,
                visibleDrawer: false,
                activeDrawerTab: 'chat',
                activeDrawerMediaTab: 0,
                addRequestDialogVisible: false,
                statusChangeModalVisible: false,
                deleteModalVisible: false,
                statusChangeModalType: "done",
                changingRequest: null,
                filters: {
                    schema: [{
                        type: 'el-select',
                        title: 'resident.status',
                        name: 'status',
                        props: {
                            placeholder: 'resident.placeholder.status',
                            clearable: true,
                            size: 'small'
                        },
                        children: Object.entries(this.$store.getters['application/constants'].requests.status).map(([value, label]) => ({
                            type: 'el-option',
                            props: {
                                label: `models.request.status.${label}`,
                                value
                            }
                        }))
                    }, {
                    //     type: 'el-select',
                    //     title: 'resident.priority',
                    //     name: 'priority',
                    //     props: {
                    //         placeholder: 'resident.placeholder.priority',
                    //         clearable: true,
                    //         size: 'small'
                    //     },
                    //     children: Object.entries(this.$store.getters['application/constants'].requests.priority).map(([value, label]) => ({
                    //         type: 'el-option',
                    //         props: {
                    //             label: `models.request.priority.${label}`,
                    //             value
                    //         }
                    //     }))
                    // }, {
                        type: 'el-date-picker',
                        title: 'resident.created_date',
                        name: 'created',
                        props: {
                            placeholder: 'resident.placeholder.date',
                            valueFormat: 'yyyy-MM-dd',
                            format: 'dd.MM.yyyy',
                            style: 'width: 100%',
                            size: 'small'
                        }
                    }, {
                        type: 'el-date-picker',
                        title: 'resident.due_date',
                        name: 'due_date',
                        props: {
                            placeholder: 'resident.placeholder.date',
                            format: 'dd.MM.yyyy',
                            valueFormat: 'yyyy-MM-dd',
                            style: 'width: 100%',
                            size: 'small'
                        }
                    }],
                    data: {
                        status: null,
                        priority: null,
                        created: null,
                        due_date: null
                    },
                },
            }
        },
        computed: {
             ...mapState('newRequests', {
                requests: state => state
            }),

            openedRequestMedia () {
                return this.openedRequest.media.map(({url}) => url)
            }
        },
        methods: {
            force_scroller_update () {
                this.$refs['dynamic-scroller'].forceUpdate();
            },
            async get (params = {}) {
                if (this.loading) {
                    return
                }

                // if (this.loading && this.requests.data.length) {
                //     return
                // }

                this.loading = false

                const {current_page, last_page} = this.requests

                if (current_page && last_page && current_page === last_page) {
                    return
                }

                let page = current_page || 0

                page++

                this.loading = true

                await this.$store.dispatch('newRequests/get', {
                    page,
                    per_page: 25,
                    sortedBy: 'desc',
                    orderBy: 'created_at',
                    ...params
                })

                this.loading = false
            },
            async onFiltersChanged (filters) {
                
                let status = general.filters.status
                general.filters.status = [status]

                filters.current_page = 0

                await this.$store.dispatch('newRequests/reset')
                await this.get(filters)
            },
            resetFilters () {
                this.$refs.filters.reset()
            },
            toggleDrawer (request, tab = 'chat') {
                this.activeDrawerTab = tab
                this.openedRequest = request

                this.visibleDrawer = !this.visibleDrawer

            },
            showAddRequest () {
                this.visibleDrawer = true
                this.openedRequest = null
            },
            changeRequestStatus(request, type) {
                this.statusChangeModalType = type
                this.statusChangeModalVisible = true
                this.changingRequest = request;
            },
            resetDataFromDrawer () {
                this.activeDrawerTab = 'chat'
                this.openedRequest = null
            },
            addRequest () {
                this.$watch(() => this.$refs['request-add-form'].loading, state => {

                    this.$nextTick(async () => {
                        this.$refs['request-add-form'].$el.classList.remove('el-loading-parent--relative')

                        if (!state) {
                            this.visibleDrawer = false
                    
                            this.requests = {
                                data: []
                            }

                            await this.fetch()
                        }
                    })
                })

                this.$refs['request-add-form'].submit()
            },
            async changeStatus(status, message) {

                
                if(message != null) {
                    await this.$store.dispatch('comments/createOnly', {
                        id: this.changingRequest.id,
                        comment: message,
                        commentable: "request"
                    });
                }
                
                this.statusChangeModalVisible = false;
                
                let {category, sub_category, ...params} = this.changingRequest
                
                params.status = status == 'done' ? 4 : 5;
                
                
                let resp = await this.$store.dispatch('newRequests/update', params)
                
                this.changingRequest = null
            },
            closeStatusChangeModal() {
                this.statusChangeModalVisible = false;
            }
        },
        mounted () {
            //this.$refs['dynamic-scroller'].forceUpdate()

            this.categories = this.$constants.requests.categories_data.tree
        },
        watch: {
            'visibleDrawer': {
                immediate: false,
                handler (state) {
                    // TODO - auto blur container if visible is true first
                    if (!state) {
                        this.openedRequest = null
                    }
                }
            },
            'statusChangeModalVisible': {
                immediate: false,
                handler (state) {
                    // TODO - auto blur container if visible is true first
                    if (!state) {
                        this.changingRequest = null
                    }
                }
            },
        },
    }
</script>

<style lang="scss">
    .requests__filter-popover {
        padding: 16px;
        border-radius: 12px;
        box-shadow: 0 1px 3px transparentize(#000, .88), 0 1px 2px transparentize(#000, .76);

        .el-button {
            width: 100%;
            margin-top: 8px;
        }
    }
</style>

<style lang="scss" scoped>
    .display-block {
        @media screen and (max-width: 414px) {
            display: block !important;
        }
    }
    .requests {
        display: flex;
        padding: 0 !important;
        flex-direction: column;
        overflow: hidden !important;

        @media screen and (max-width: 414px) {
            .fit-button {
                padding: 7px 15px;
                height: 31px;
            }
        }
        @media screen and (max-width: 750px) {
            .desktop-show {
                display: none;
            }
            :global(.ui-heading) {
                margin-bottom: 10px;
            }
        }
        @media screen and (min-width: 751px) {
            .mobile-show {
                display: none;
            }
        }

        &:before {
            content: '';
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            position: fixed;
            filter: opacity(.08);
            pointer-events: none;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: top left;
            background-image: url('~img/5c7d3b0b0f0f4.png');
        }

        .container {
            display: flex;
            padding: 0 !important;
            flex-direction: column;
            overflow: hidden !important;
            min-height: 100%;

            .inner-container {
                height: 100%;
                padding: 16px;
                overflow-y: auto;
            }

            .vue-recycle-scroller {
                max-width: 640px;

                :global(.vue-recycle-scroller__item-wrapper) {
                    overflow: visible;

                    :global(.vue-recycle-scroller__item-view > div) {
                        padding: 8px 0;

                        .request-card {
                            .el-tabs .el-tabs__content .el-tab-pane {
                                &:nth-child(1) {
                                    .el-button {
                                        float: right;
                                    }
                                }

                                &:nth-child(2) {
                                    .ui-divider {
                                        margin-top: 32px;
                                    }
                                }
                            }
                        }
                    }
                }

                :global(.vue-recycle-scroller__slot .el-loading-parent--relative) {
                    min-height: 42px;
                }
            }
        }

        .ui-drawer {

            @media screen and (max-width: 414px) {
                width: 100% !important;
                max-width: 100%!important;
            }

            &.full-width {
                @media screen and (max-height: 414px) {
                    width: 100% !important;
                    max-width: 100%!important;
                    
                    :gloabl(&.a-close-button) {
                        display: block !important;
                    }
                }
            }
            
            &:before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-repeat: no-repeat;
                background-position: top center;
                width: 100%;
                height: 100%;
                filter: opacity(0.08);
                pointer-events: none;
            }

            .el-tabs {
                height: 100%;
                display: flex;
                flex-direction: column;

                :global(.el-tabs__header) {
                    margin-bottom: 0;

                    :global(.el-tabs__nav-wrap)
                        :global(.el-tabs__nav-scroll)
                            :global(.el-tabs__nav) {
                                border: 0;
                            }
                }

                :global(.el-tabs__content) {
                    height: 100%;
                    overflow-y: auto;
                    display: flex;
                    flex-direction: column;

                    :global(.el-tab-pane) {
                        height: 100%;
                        display: flex;
                        flex-direction: column;

                        > * {
                            padding: 16px;
                        }

                        .el-tabs {
                            padding: 0;
                        }

                        .chat {
                            .comments-list {
                                .vue-recycle-scroller {
                                    margin-top: -16px;
                                    margin-right: -16px;
                                    padding-top: 16px;
                                    padding-right: 16px;
                                }
                            }
                        }

                        .ui-divider {
                            padding: 0;
                        }
                            
                        .upload-description {
                            margin: 16px;
                            padding: 0;
                        }
                        
                        .ui-media-uploader {
                            flex-grow: 1;
                        }
                        // .ui-media-gallery {
                        //     height: 100%;
                        //     padding: 16px;
                        // }

                        // .audit {
                        //     padding: 16px;
                        // }
                    }
                }
            }
            .ui-divider {
                margin: 32px 16px 0 16px;
                padding: 0;

                :global(.ui-divider__content) {
                    left: 0;
                    z-index: 1;
                    padding-left: 0;
                    font-size: 16px;
                    font-weight: 700;
                    color: var(--color-primary);
                }
            }
                    
            .content {
                height: calc(100% - 32px);
                display: flex;
                padding: 16px;
                overflow-y: auto;
                flex-direction: column;
                position: relative;

                .el-form {
                    flex: 1;
                    display: flex;
                    flex-direction: column;

                    :global(.el-input .el-input__inner),
                    :global(.el-textarea .el-textarea__inner) {
                        background-color: transparentize(#fff, .44);
                    }

                    :global(.el-loading-mask) {
                        position: fixed;
                    }

                    :global(.ui-divider__content) {
                        left: 0;
                        z-index: 1;
                        padding-left: 0;
                        font-size: 16px;
                        font-weight: 700;
                        color: var(--color-primary);
                    }
                }
            }
        }

        :global(.el-button+.el-button) {
            margin-right: 10px;
        }
    }
        
    @media only screen and (max-width: 676px) {
        .requests
            :global(.el-dialog) {
                width: 90% !important;
            }
            :global(.ui-heading__content__description) {
                display: none;
            }
    }
</style>