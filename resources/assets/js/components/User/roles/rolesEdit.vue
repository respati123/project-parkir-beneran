<template>
   <div class="box box-info">
      <div class="box-header with-border">
         <h3 class="box-title">Horizontal Form</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" @submit.prevent="editRoles">
         <div class="box-body">
            <div class="form-group">
               <label for="roleInput" class="col-sm-2 control-label">Role</label>

               <div class="col-sm-10">
                  <input class="form-control" id="roleInput" v-model="roleName.name" placeholder="role" type="text">
               </div>
            </div>
            <div class="form-group">
               <label for="permissions" class="col-sm-2 control-label">Password</label>
               <div class="col-sm-10">
                  <div class="textboxt-with-button" v-if="isEmpty">
                     <p>tidak ada data permission</p>
                     <router-link  :to="{name: 'createPermissions'}">Create Permissions</router-link>
                  </div>
                  <select v-else multiple="true" class="form-control" id="permissions" @dblclick="sortBy" v-model="multipleSelected">
                     <option v-for="(role, index) in roles"
                             :value="role.value" v-bind:key="index">
                        {{role.text}}
                     </option>
                  </select>
                  <pre>{{ this.roles }}</pre>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-10 col-sm-offset-2" style="display: flex;">
                  <div class="badge-theme" v-for="(roleSelected, index) in rolesHasSelected" v-bind:key="index">
                     <p>{{ roleSelected.text }}</p>
                     <button type="button" class="close"  v-on:click="removeList(index, roleSelected.text, roleSelected.value)" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               </div>
               <pre>
                 {{ this.rolesHasSelected }}
               </pre>
            </div>
            <div class="form-group">
               <div class="col-md-10 col-md-offset-2">
                  <button type="submit" class="btn btn-success">Save <i class="fa fa-check"></i></button>
                  <router-link :to="{ name: 'rolesIndex'}" class="btn btn-danger">Cancel <i class="fa fa-times"></i></router-link>
               </div>
            </div>

         </div>
      </form>
   </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: "editRoles",
        data(){
            return {
                multipleSelected:[],
                rolesHasSelected:[],
                roles:[],
                roleName: {
                    name: '',
                    id:''
                }
            }
        },
        mounted() {
            axios.get('/api/v1/getAllPermissions/')
                .then((response) => {
                    let dataRoles = response.data.data;
                    dataRoles.forEach(item => {
                        let items = {};
                        items['text'] = item.name;
                        items['value'] = item.id;
                        this.roles.push(items);
                    });
                });

            axios.get('/api/v1/roles/' + this.$route.params.id)
                .then((response) => {
                    console.log(response.data.data.name);
                    this.roleName = {name: response.data.data.name, id: response.data.data.id}
                    let tempRolesSelected = response.data.data.permission;
                    tempRolesSelected.forEach(itemTemp => {
                       let items = {};
                       items['text'] = itemTemp.name;
                       items['value'] = itemTemp.id;
                       this.rolesHasSelected.push(items);
                    });
                    this.rolesHasSelected.forEach(item => {

                       let indexObj = this.roles.map(itemSub => {
                           return itemSub.name;
                       }).indexOf(item.name);

                       this.roles.splice(indexObj, 1);
                    });
                }, (error) => {
                    console.log(error.message)
                });


            if(this.roleName !== null){
                console.log("masuk")
            }



        },

        methods: {
            sortBy: function(e) {
                console.log(e.target);
                let items = {};
                items['text'] = e.target.text;
                items['value'] = e.target.value;

                this.rolesHasSelected.push(items);
                this.roles.splice(e.target.index, 1);
            },
            removeList: function(index, name, value){
                console.log(index + "," + name + "," + value);
                this.roles.unshift({text: name, value: value});
                this.rolesHasSelected.splice(index, 1)
            },
            editRoles: function(){
               axios.put('/api/v1/roles/' + this.$route.params.id, {role:this.rolesHasSelected, name:this.roleName})
                   .then(response => {
                       console.log(response.data);
                   }, (error => {
                       console.log(error.message);
                   }));
            }
        },
       computed: {
           isEmpty: function(){
               return this.roles.length === 0;
           },

       }

    }
</script>

<style scoped>

</style>