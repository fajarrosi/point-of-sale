<template>
<q-layout view="hHr LpR lFf" >
    <q-page-container >
        <q-page 
        >
            <div class="base-auth bg-secondary">
                <div class="text-primary text-h4 bg-secondary text-center q-py-lg text-bold">POS <span>Busana Muslim</span></div>
                <div class="bg-secondary">
                    <div class="row justify-center">
                        <q-card class="btn-radius col-sm-4 col-8" flat>
                            <q-card-section>
                                <router-view/>
                            </q-card-section>
                        </q-card>
                    </div>
                </div>

                <div class="text-primary text-subtitle2 bg-secondary text-center q-py-lg text-bold">Fajar Ilham Rosi@2021</div>
            </div>
        </q-page>
    </q-page-container>
</q-layout>
</template>

<script>
export default {

}
</script>

<style>

</style>