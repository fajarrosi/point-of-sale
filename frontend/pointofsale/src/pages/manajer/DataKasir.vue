<template>
    <div class="manajer">
        <q-btn color="primary" icon="add" label="Tambah Kasir" @click="onClick" no-caps class="btn-radius " unelevated/>
        <q-table
            class="my-sticky-header-table q-mt-md btn-radius"
            :title="$route.name"
            :rows="data"
            :columns="columns"
            row-key="id"
            :loading="loading"
            :filter="filter"
            binary-state-sort
            flat
            bordered
        >
        <template v-slot:top-right>
            <q-input borderless dense debounce="300" v-model="filter" placeholder="Search">
            <template v-slot:append>
                <q-icon name="search" />
            </template>
            </q-input>
        </template> 
        <template v-slot:body-cell-action="props">
        <q-td :props="props">
          <q-btn color="blue" icon="visibility" no-caps unelevated dense class="q-mr-sm q-px-sm">
            <q-tooltip>
              Detail
            </q-tooltip>
          </q-btn>
          <q-btn color="positive" icon="edit" no-caps unelevated dense class="q-mr-sm q-px-sm">
            <q-tooltip>
              Edit
            </q-tooltip>
          </q-btn>
          <q-btn color="negative" icon="delete"  no-caps unelevated dense class="q-mr-sm q-px-sm">
            <q-tooltip>
              Delete
            </q-tooltip>
          </q-btn>
        </q-td>
      </template>
        <!-- <template v-slot:body="props">
            <q-tr :props="props">
              <q-td key="name" :props="props">
                {{ props.row.name }}
              </q-td>
              <q-td key="email" :props="props">
                {{ props.row.email }}
              </q-td>
              <q-td key="address" :props="props">
                {{ props.row.address }}
              </q-td>
              <q-td key="telephone" :props="props">
                {{ props.row.telephone }}
              </q-td>
              <q-td key="action" :props="props">
                  <q-btn color="blue" icon="visibility" no-caps unelevated dense class="q-mr-sm q-px-sm">
                    <q-tooltip>
                      Detail
                    </q-tooltip>
                  </q-btn>
                  <q-btn color="positive" icon="edit" no-caps unelevated dense class="q-mr-sm q-px-sm">
                    <q-tooltip>
                      Edit
                    </q-tooltip>
                  </q-btn>
                  <q-btn color="negative" icon="delete"  no-caps unelevated dense class="q-mr-sm q-px-sm">
                    <q-tooltip>
                      Delete
                    </q-tooltip>
                  </q-btn>
              </q-td>
            </q-tr>
          </template> -->
        </q-table>
    </div>
</template>

<script>
const columns = [
  {
    name: 'name',
    required: true,
    label: 'Nama',
    align: 'left',
    field: row => row.name,
    format: val => `${val}`,
    sortable: true
  },
  { name: 'email', align: 'left', label: 'Email', field: 'email', sortable: true },
  { name: 'address', align: 'left', label: 'Alamat', field: 'address', sortable: true },
  { name: 'telephone', align: 'left', label: 'No. Telp', field: 'telephone' },
  { name: 'action',  align: 'left',label: 'Actions', field: 'action'},
]

import { useFetch } from 'src/composables/useFetch.js';
import { useStore } from 'vuex'
import { ref } from 'vue'
export default {
  setup () {
    const store = useStore()
    const fetch = useFetch()
    fetch.getData('kasir',store.state.auth.access_token)
    return {
      columns,
      filter: ref(''),
      data : fetch.data,
      error: fetch.error,
      loading : fetch.loading
    }
  },
  
}
</script>
