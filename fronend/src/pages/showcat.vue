<template>
  <div>    
<table border="3" style="width:100%;">
    <tr>
        <th v-bind:key="column.id" v-for="column in columns">{{ column.label }}</th>
    </tr>
    <tr v-bind:key="row.id" v-for="row in rows">
        <td>{{ row.name }}</td>
        <td>{{ row.office }}</td>
        <td>{{ row.position }}</td>
        <td>{{ row.age }}</td>
        <td>{{ row.date }}</td>
        <td>{{ row.salary }}</td>
    </tr>
</table>
          
  </div>

</template>

<script>
import UserStore from '@/stores/UserStore'

export default {
  name: 'showcat',
  components: {
  },
  data() {
    return {
      // transfers: [],
      columns: [],
      rows: [],
    }
  },
  computed: {
    // TransferList (){
    //   return UserStore.state.transfers;
    // }
  },
  methods: {
    LoadShowcatList: async function() {
      await UserStore.dispatch('loadShowcat')
      this.columns = UserStore.state.showcat.columns;
      this.rows = UserStore.state.showcat.rows;
      // this.transfers = UserStore.state.transfers;
    }
  },
  async mounted () {
    await this.LoadShowcatList()
    // console.log(this.rows);
  },
}
//  $(document).ready(function () {
//     //$('#example').DataTable();
//       var tmp = $('ul#pagination>li>a');
//       tmp[0].text = '<';
//       tmp[tmp.length-1].text = '>';
//       for (let index = 0; index < tmp.length; index++) {
//           const element = tmp[index];
//           element.href = window.location.hash;
//       }
//   });
</script>