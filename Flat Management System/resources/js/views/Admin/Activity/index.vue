<template>
    <div class="activity">
        <heading :title="$t('general.audits')" icon="icon-chat-empty" shadow="heavy" />          
        <el-row :gutter="20" class="crud-view">
            <el-col :md="24">
                <el-card class="mt15">                  
                    <!-- <audit showFilter type="all" filterPosition="left" />   -->
                    <audit :showFilter="false" type="all"/>
                </el-card>
            </el-col>
        </el-row>
    </div>
</template>

<script>
    import Heading from 'components/Heading';

    export default {
        components: {
            Heading            
        },
    };
</script>
<style lang="scss">
    /*.mt30 {
        margin-top: 30px;
    }

    .mb30 {
        margin-bottom: 20px;
    } */  
</style>    