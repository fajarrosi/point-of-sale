<template>
    <q-page class="bg-secondary" padding>
        <div class="header-kasir bg-secondary q-py-lg">
            <div class="row justify-between">
                <div class=" text-h4 col-4 text-bold">Pilih Kategori</div>
                <q-input filled bottom-slots v-model="search" type="text" label="Search" class="col-3" bg-color="white">
                    <template v-slot:append>
                        <q-icon v-if="search !== ''" name="close" @click="search = ''" class="cursor-pointer" />
                        <q-btn round dense flat icon="search" />
                    </template>
                </q-input>
            </div>
            <div class="row">
                <q-btn color="white" label="Semua" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
                <q-btn color="white" label="kategori1" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
                <q-btn color="white" label="kategori2" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
                <q-btn color="white" label="kategori3" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
                <q-btn color="white" label="kategori4" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
                <q-btn color="white" label="kategori5" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
                <q-btn color="white" label="kategori6" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
                <q-btn color="white" label="kategori7" no-caps class="col text-black q-mr-sm " rounded dense unelevated/>
            </div>
        </div>
        <div class="row q-mb-lg">
            <div class="col-3 q-pr-lg" v-for="n in 1" :key="n">
                <produk />
            </div>
        </div>
        
                    <div class="text-primary">@Copyright - Fajar Ilham Rosi - 2021 - POS Busana Muslim</div>
            </q-page>
</template>

<script>
// import { ref,onBeforeUnmount } from 'vue'
// import { useQuasar } from 'quasar'

export default {
    components:{
        'produk' : require('components/kasir/Produk.vue').default
    },
//   setup () {
//     const rightDrawerOpen = ref(false)
//     const $q = useQuasar()
//     let timer

//     function finalize (reset) {
//       timer = setTimeout(() => {
//         reset()
//       }, 1000)
//     }

//     onBeforeUnmount(() => {
//       clearTimeout(timer)
//     })
//     return {
//         onLeft ({ reset }) {
//         $q.notify('Left action triggered. Resetting in 1 second.')
//         finalize(reset)
//         },

//         onRight ({ reset }) {
//         $q.notify('Right action triggered. Resetting in 1 second.')
//         finalize(reset)
//         },

//       leftDrawerOpen : ref(true),
//       rightDrawerOpen,
//       toggleRightDrawer () {
//         rightDrawerOpen.value = !rightDrawerOpen.value
//       }
//     }
//   },
    computed:{
        produk(){
            return this.$store.state.produk.produk
        }
    },
    data(){
        return{
            search:'',
        }
    },
    mounted(){
        this.$store.dispatch('produk/setProduk')
    }
}
</script>