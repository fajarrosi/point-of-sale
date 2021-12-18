<template>
    <div class="kasir">
        <div class="header">
            <div class="row justify-between">
                <div class="text-h6 col-4 text-bold">Pilih Kategori</div>
                <q-input filled bottom-slots v-model="search" type="text" label="Search" class="col-3" bg-color="white" dense hidden-bottom-space>
                    <template v-slot:append>
                        <q-icon v-if="search !== ''" name="close" @click="search = ''" class="cursor-pointer" />
                        <q-btn round dense flat icon="search" />
                    </template>
                </q-input>
            </div>
            <q-scroll-area style="height:40px;max-width: 100%;">
                <div class="row no-wrap justify-center">
                    <q-btn color="white" label="Semua" no-caps class="text-black q-mr-md " rounded unelevated/>
                    <q-btn color="white" label="kategori1" no-caps class="text-black q-mr-md " rounded unelevated/>
                    <q-btn color="white" label="kategori2" no-caps class="text-black q-mr-md " rounded unelevated/>
                    <q-btn color="white" label="kategori3" no-caps class="text-black q-mr-md " rounded unelevated/>
                    <q-btn color="white" label="kategori4" no-caps class="text-black q-mr-md " rounded unelevated/>
                    <q-btn color="white" label="kategori5" no-caps class="text-black q-mr-md " rounded unelevated/>
                    <q-btn color="white" label="kategori6" no-caps class="text-black q-mr-md " rounded unelevated/>
                    <q-btn color="white" label="kategori7" no-caps class="text-black q-mr-md " rounded unelevated/>
                </div>
            </q-scroll-area>
        </div>
        <div >
            <q-scroll-area class="fit">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 q-pr-lg" v-for="n in 20" :key="n">
                        <produk />
                    </div>
                </div>
            </q-scroll-area>
        </div>
    </div>
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