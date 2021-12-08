<template>
    <div class="kasir bg-secondary q-pa-md" style="max-height:100vh;width:100vw; height:100vh; overflow:auto;">
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
        <div class="row q-mt-lg">
            <div class="col-3 q-pr-lg" v-for="n in 12" :key="n">
                <q-card class="item-card q-mb-lg btn-radius" flat >
                    <q-card-section class="row q-pb-none">
                        <div class="col-12">
                            <q-img
                                src="https://cdn.quasar.dev/img/mountains.jpg"
                                spinner-color="primary"
                                spinner-size="82px"
                                class="btn-radius"
                            />
                        </div>
                        <div class="text-h6 col-12">Baju ke-1</div>
                    </q-card-section>
                    <q-card-section class="row">
                        <div class="col-12">
                            <div class="text-h6">Ukuran</div>
                            <q-btn color="white" label="S" class="text-black q-mr-sm " dense round/>
                            <q-btn color="white" label="M" class="text-black q-mr-sm " dense round/>
                            <q-btn color="white" label="L" class="text-black q-mr-sm " dense round/>
                            <q-btn color="white" label="XL" class="text-black q-mr-sm " dense round/>
                        </div>
                        <div class="col-12 q-mt-md">
                            <div class="text-h6">Jumlah</div>
                            <div class="row items-center">
                                <q-btn color="white" icon="remove" class="text-black col-2" dense round/>
                                <span class="text-h6 col-2 q-pl-md">1</span>
                                <q-btn color="white" icon="add" class="text-black col-2" dense round/>
                            </div>
                        </div>
                        <div class="text-h5 col-12 text-bold q-mt-md">Rp 5000</div>
                        <q-btn color="primary" class="text-white col-12 btn-radius q-mt-lg" label="Tambah Ke Billing" no-caps/>
                    </q-card-section>
                </q-card>
            </div>
        </div>
        <!-- <q-drawer
        side="right"
        v-model="drawer"
        show-if-above
        bordered
        :width="200"
        :breakpoint="500"
        class="bg-grey-3"
      >
        <q-scroll-area class="fit">
          <div class="q-pa-sm">
            <div v-for="n in 50" :key="n">Drawer {{ n }} / 50</div>
          </div>
        </q-scroll-area>
      </q-drawer> -->
    </div>
</template>

<script>
export default {
    data(){
        return{
            search:'',
            drawer:true
        }
    }
}
</script>

<style>

</style>