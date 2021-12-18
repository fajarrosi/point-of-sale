<template>
    <q-drawer v-model="sidebar" 
            :width="100"
            :breakpoint="300"
        >
        <div class="sidebar">
            <div class="row">
                <span class="text-h6 text-bold text-primary text-center col-12 q-pt-md">POS</span>
                <q-separator class="col-12" style="height:1px !important;"/>
            </div>
            <!-- <div class="d"> -->
                <q-scroll-area class="fit" style="max-width:100%;">
                    <q-list>
                        <q-item v-if="$route.name === 'kasir'" class="q-pb-md">
                            <q-item-section>
                                <q-btn :color="$route.name === 'kasir' ? 'primary' :'white'" no-caps style="width:70px;height:60px;border-radius:10px;" unelevated >
                                    <div class="row items-center">
                                        <q-icon name="home_max" class="col-12"/>
                                        <div class="text-center col-12">
                                            Kasir
                                        </div>
                                    </div>
                                </q-btn>
                            </q-item-section>
                        </q-item>
                        <q-item v-if="$route.name === 'kasir'" class="q-pt-none">
                            <q-item-section>
                                    <q-btn color="primary" no-caps style="width:70px;border-radius:10px;" push flat @click="$emit('update:keranjang',!keranjang)">
                                        <div class="row items-center">
                                            <q-icon name="shopping_cart" class="col-12"/>
                                            <div class="text-center col-12">
                                                Keranjang
                                            </div>
                                        </div>
                                        <q-badge color="red" floating>4</q-badge>
                                    </q-btn>
                            </q-item-section>
                        </q-item>

                        <q-item v-if="$route.meta.manajer" >
                                <q-item-section>
                                    <q-btn color="primary" no-caps style="width:70px;border-radius:10px;" unelevated :flat="$route.name === 'Data Kasir' ? false : true" @click="$router.push({name:'Data Kasir'})">
                                        <div class="row items-center">
                                            <q-icon name="home_max" class="col-12"/>
                                            <div class="text-center col-12">
                                                Data Kasir
                                            </div>
                                        </div>
                                    </q-btn>
                                </q-item-section>
                            </q-item>

                            <q-item v-if="$route.meta.manajer" class="q-pt-none">
                                <q-item-section>
                                    <q-btn color="primary" no-caps style="width:70px;border-radius:10px;" unelevated :flat="$route.name === 'Data Supplier' ? false : true" @click="$router.push({name:'Data Supplier'})">
                                        <div class="row items-center">
                                            <q-icon name="home_max" class="col-12"/>
                                            <div class="text-center col-12">
                                                Data Supplier
                                            </div>
                                        </div>
                                    </q-btn>
                                </q-item-section>
                            </q-item>
                            <q-item v-if="$route.meta.manajer" class="q-pt-none">
                                <q-item-section>
                                    <q-btn color="primary" no-caps style="width:70px;border-radius:10px;" unelevated :flat="$route.name === 'stok produk' ? false : true" @click="$router.push({name:'stok produk'})" >
                                        <div class="row items-center">
                                            <q-icon name="home_max" class="col-12"/>
                                            <div class="text-center col-12">
                                                Stok Produk
                                            </div>
                                        </div>
                                    </q-btn>
                                </q-item-section>
                            </q-item>
                            <q-item v-if="$route.meta.manajer" class="q-pt-none">
                                <q-item-section>
                                    <q-btn color="primary" no-caps style="width:70px;border-radius:10px;" unelevated :flat="$route.name === 'cetak penjualan' ? false : true" @click="$router.push({name:'cetak penjualan'})"  >
                                        <div class="row items-center">
                                            <q-icon name="home_max" class="col-12"/>
                                            <div class="text-center col-12">
                                                Cetak Penjualan
                                            </div>
                                        </div>
                                    </q-btn>
                                </q-item-section>
                            </q-item>
                            <q-item v-if="$route.meta.manajer" class="q-pt-none">
                                <q-item-section>
                                    <q-btn color="primary" no-caps style="width:70px;border-radius:10px;" unelevated :flat="$route.name === 'cetak pembelian' ? false : true" @click="$router.push({name:'cetak pembelian'})" >
                                        <div class="row items-center">
                                            <q-icon name="home_max" class="col-12"/>
                                            <div class="text-center col-12">
                                                Cetak Pembelian
                                            </div>
                                        </div>
                                    </q-btn>
                                </q-item-section>
                            </q-item>
                        
                    </q-list>
                </q-scroll-area>
            <!-- </div> -->

            <div class="row justify-center items-center">
                <q-btn color="primary" no-caps style="border-radius:10px;" push flat class="col-10">
                    <div class="row items-center">
                        <q-icon name="logout" class="col-12"/>
                        <div class="text-center col-12">
                            Keluar
                        </div>
                    </div>
                </q-btn>
            </div>
        </div>

            
        </q-drawer>
</template>

<script>
export default {
    props:[
        'keranjang'
    ],
    data(){
        return{
            sidebar:true
        }
    },
    methods:{
        bukaKeranjang(){

        }
    }
}
</script>

<style>

</style>