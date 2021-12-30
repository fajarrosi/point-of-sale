<template>
    <q-layout view="hHh LpR lFr">
        <sidebar v-model:keranjang="keranjang"/>

        <keranjang v-model:drawer="keranjang" v-if="keranjang"/>

        <q-page-container>
          <q-page padding class="bg-secondary kasir-layout">
              <router-view/>
              <div class="text-primary q-pt-sm">@Copyright - Fajar Ilham Rosi - 2021 - POS Busana Muslim</div>
          </q-page>
        </q-page-container>

    </q-layout>
</template>

<script>
import { ref,onBeforeUnmount } from 'vue'
import { useQuasar } from 'quasar'
export default {
    components:{
        'sidebar' : require('components/Sidebar.vue').default,
        'keranjang' : require('components/kasir/Keranjang.vue').default
    },
  setup () {
    const rightDrawerOpen = ref(false)
    const $q = useQuasar()
    let timer

    function finalize (reset) {
      timer = setTimeout(() => {
        reset()
      }, 1000)
    }

    onBeforeUnmount(() => {
      clearTimeout(timer)
    })
    return {
        onLeft ({ reset }) {
        $q.notify('Left action triggered. Resetting in 1 second.')
        finalize(reset)
        },

        onRight ({ reset }) {
        $q.notify('Right action triggered. Resetting in 1 second.')
        finalize(reset)
        },

      leftDrawerOpen : ref(true),
      rightDrawerOpen,
      toggleRightDrawer () {
        rightDrawerOpen.value = !rightDrawerOpen.value
      }
    }
  },
   data(){
        return{
            search:'',
            keranjang: false
        }
    },
}
</script>