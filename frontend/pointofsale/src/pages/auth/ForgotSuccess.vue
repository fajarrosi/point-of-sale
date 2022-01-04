<template>
<div>
    <div class="row justify-center">
        <q-img
            src="~assets/forgot-success.svg"
            spinner-color="primary"
            spinner-size="30px"
            class="col-4"
        />
        <div class="text-subtitle2 q-my-md text-center col-12">
            Silahkan cek email Anda, kemudian masuk dengan password yang telah diberikan. Jangan lupa untuk segera mengganti password Anda
        </div>
            <q-btn color="primary" label="Masuk Sekarang" @click="$router.push('/')" no-caps class="btn-radius col-10" unelevated/>
    </div>
</div>
</template>

<script>
export default {
    
}
</script>

