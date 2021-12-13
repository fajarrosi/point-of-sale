<template>
    <q-drawer  :model-value="drawer" side="right"
        :width="300" style="padding:16px;"
        >
            <div class="keranjang">
                <div>
                    <div class="text-bold">Keranjang</div>
                    <q-separator spaced inset />
                </div>
                <div>
                    <q-scroll-area class="fit" style="max-width:100%;">
                        <q-list>
                            <div v-for="n in 50" :key="n" >
                                <q-slide-item @left="onLeft" @right="onRight" left-color="green" right-color="red">
                                    <template v-slot:left>
                                    <div class="row items-center">
                                        <q-icon left name="edit" /> Edit
                                    </div>
                                    </template>
                                    <template v-slot:right>
                                    <div class="row items-center">
                                        Hapus <q-icon right name="delete" />
                                    </div>
                                    </template>
                                <q-item clickable v-ripple class="q-pa-none">
                                    <q-item-section >
                                        <div class="row">
                                            <div class="col-2 q-mr-sm">
                                                <q-avatar rounded>
                                                    <img src="https://cdn.quasar.dev/img/mountains.jpg" draggable="false">
                                                </q-avatar>
                                            </div>
                                            <div class="col-9">
                                                <span class="text-bold ellipsis-2-lines">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row justify-between q-mt-sm" style="margin-bottom:-20px;">
                                            <div class="col-4">Total : 10</div>
                                            <div class="col-6 text-right">Rp 100.000</div>
                                        </div>
                                    </q-item-section>
                                </q-item>
                                </q-slide-item>
                                <q-separator spaced/>
                            </div>
                        </q-list>
                    </q-scroll-area>
                </div>
                <div>
                    <div class="row justify-between q-mt-md">
                        <div class="col-4">Subtotal</div>
                        <div class="col-6 text-right">Rp 100.000</div>
                    </div>
                    <div class="row justify-between">
                        <div class="col-4">10% Pajak</div>
                        <div class="col-6 text-right">Rp 10.000</div>
                    </div>
                    <q-separator spaced inset />
                    <div class="row justify-between">
                        <div class="text-bold col-4">TOTAL</div>
                        <div class="text-bold col-6 text-right">Rp 1.110.000.000</div>
                        <q-btn color="primary" label="Bayar" no-caps class="btn-radius col-12 q-mt-md" unelevated/>
                    </div>
                </div>
            </div>
        </q-drawer>
</template>

<script>
export default {
    props:[
        'drawer'
    ],
    // data(){
    //     return {
    //         drawer: true
    //     }
    // }
}
</script>

<style>

</style>