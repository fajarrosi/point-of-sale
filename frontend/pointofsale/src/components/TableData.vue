<template>
<q-table
    class="my-sticky-header-table q-mt-md btn-radius"
    :title="$route.name"
    :rows="data"
    :columns="columns"
    row-key="id"
    :loading="loadings"
    binary-state-sort
    flat
    bordered
    >
    <template v-slot:body="props">
        <slot name="own" :props="props"> </slot>
    </template>
</q-table>

</template>

<script>
import { useFetch } from 'src/composables/useFetch.js';
import { useStore } from 'vuex'
export default {
    props:['columns','url'],
    setup (props) {
    const store = useStore()
    const fetch = useFetch()
    fetch.getData(props.url,store.state.auth.access_token)
    return {
        data : fetch.data,
        error: fetch.error,
        loadings : fetch.loadings
    }
    },
}
</script>
<style lang="scss">
    .q-table__top,
    .q-table__bottom,
    thead tr:first-child th
    {
        background-color:white;
    }
</style>
<style lang="sass">
.my-sticky-header-table
  /* height or max-height is important */

  thead tr th
    position: sticky
    z-index: 1
  thead tr:first-child th
    top: 0

  /* this is when the loading indicator appears */
  &.q-table--loading thead tr:last-child th
    /* height of all previous header rows */
    top: 48px
</style>