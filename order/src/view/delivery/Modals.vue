<template>
    <div>
        <chef-password></chef-password>
        <driver-request></driver-request>
        <modal11>  </modal11>
        <modal12> </modal12>
        <modal13></modal13>
        <modal14></modal14>
        <modal15></modal15>
        <modal16> </modal16>
        <new-order-modal></new-order-modal>
        <new-order-modal1></new-order-modal1>
        <order-duration></order-duration>
        <payment-modal></payment-modal>
        <reason-modal></reason-modal>
        <Settings></Settings>
        <sub-total></sub-total>
        <duration-info></duration-info>
    </div>
</template>
<script>
import driverRequest from './modals/driverRequest.vue'
import durationInfo from './modals/durationInfo.vue'
import modal11 from './modals/modal-11.vue'
import modal12 from './modals/modal-12.vue'
import modal13 from './modals/modal-13.vue'
import modal14 from './modals/modal-14.vue'
import modal15 from './modals/modal-15.vue'
import modal16 from './modals/modal-16.vue'
import newOrderModal from './modals/newOrderModal.vue'
import newOrderModal1 from './modals/newOrderModal1.vue'
import orderDuration from './modals/orderDuration.vue'
import paymentModal from './modals/paymentModal.vue'
import reasonModal from './modals/reasonModal.vue'
import Settings from './modals/Settings.vue'
import subTotal from './modals/sub-total.vue'
import chefPassword from './modals/chefPassword.vue'


export default {
    components:{
        driverRequest,
        modal11,
        modal12,
        modal13,
        modal14,
        modal15,
        modal16,
        newOrderModal,
        newOrderModal1,
        orderDuration,
        paymentModal,
        reasonModal,
        Settings,
        subTotal,
        durationInfo,
        chefPassword
        
    },
}
</script>