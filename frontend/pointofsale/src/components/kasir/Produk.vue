<template>
    <q-card class="item-card q-mb-lg btn-radius" flat >
        <q-card-section class="row">
            <div class="col-4">
                <q-img
                    src="https://cdn.quasar.dev/img/mountains.jpg"
                    spinner-color="primary"
                    spinner-size="82px"
                    class="btn-radius"
                    height="100px"
                />
            </div>
            <div class="col-8 row q-pl-md">
                <div class="text-bold  col-12 ">
                    <span class="ellipsis-3-lines">
                        Baju ke-1 Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet 
                        Baju ke-1 Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet 
                    </span>
                </div>
                <div class="text-bold  col-12">
                    Rp 1000.000
                </div>
            </div>
            <div class="row col-12 q-mt-sm justify-between">
                <div class="col-6">
                    <div class="text-bold q-mb-sm">Jumlah</div>
                    <div class="row items-center">
                        <q-btn 
                        no-caps unelevated
                        style="width:25px;height:25px;border-radius:20px;background:#F7F2F2;"  
                        >
                        <div class="row items-center">
                            <q-icon name="remove" />
                        </div>
                        </q-btn>
                        <span class="q-mx-sm text-h6">10</span>
                        <q-btn 
                        no-caps unelevated
                        style="width:25px;height:25px;border-radius:20px;background:#F7F2F2;" 
                        >
                        <div class="row items-center">
                            <q-icon name="add" />
                        </div>
                        </q-btn>
                    </div>
                </div>
                <div class="col-5">
                    <div class="text-bold q-mb-sm">Ukuran</div>
                    <div class="row q-mb-sm">
                        <q-btn 
                        unelevated
                        color="accent"
                        class="q-mr-sm col"
                        style="width:25px;height:25px;border-radius:20px;" 
                        >
                            <div class="row items-center">
                                <span class="text-primary">S</span>
                            </div>
                        </q-btn>
                        <q-btn 
                        unelevated
                        color="primary"
                        class="col"
                        style="width:25px;height:25px;border-radius:20px;"
                        flat 
                        >
                            <div class="row items-center">
                                <span>M</span>
                            </div>
                        </q-btn>
                        <q-btn 
                        unelevated
                        color="primary"
                        class="q-mr-sm col"
                        style="width:25px;height:25px;border-radius:20px;"
                        flat 
                        >
                            <div class="row items-center">
                                <span>L</span>
                            </div>
                        </q-btn>
                        <q-btn 
                        unelevated
                        color="primary"
                        class="col"
                        style="width:25px;height:25px;border-radius:20px;"
                        flat 
                        >
                            <div class="row items-center">
                                <span>XL</span>
                            </div>
                        </q-btn>
                    </div>
                </div>
            </div>
                <q-btn color="primary" unelevated class="text-white col-12 btn-radius q-mt-sm" label="Tambah Ke Keranjang" no-caps/>
        </q-card-section>
    </q-card>
</template>

<script>
export default {

}
</script>

<style>

</style>