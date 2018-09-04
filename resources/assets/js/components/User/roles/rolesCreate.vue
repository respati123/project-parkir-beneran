<template>
    <div>
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Horizontal Form</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form  @submit.prevent="addRoles" class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name Roles</label>

                            <div class="col-sm-10">
                                <input class="form-control" v-model="roleName.value" id="inputName" placeholder="roles" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Permissions</label>
                            <div class="col-sm-10">
                                <div class="textboxt-with-button" v-if="isEmpty">
                                    <p>tidak ada data permission</p>
                                    <router-link  :to="{name: 'createPermissions'}">Create Permissions</router-link>
                                </div>
                                <select v-else multiple="true" class="form-control" @dblclick="sortBy" v-model="multipleSelected">
                                    <option v-for="(role, index) in roles"
                                    :value="role.id" v-bind:key="index">
                                        {{role.name}}
                                    </option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2" style="display: flex;">
                                <div class="badge-theme" v-for="(roleSelected, index) in rolesHasSelected" v-bind:key="index">
                                    <p>{{ roleSelected.name }}</p>
                                    <button type="button" class="close"  v-on:click="removeList(index, roleSelected.name, roleSelected.value)" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <pre>
                                {{ this.rolesHasSelected }}
                            </pre>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">save</button>
                                <button class="btn btn-warning" >Back</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </form>
            </div>
            <!-- /.box -->

        </div>
    </div>

</template>

<script>


    import axios from "axios";

    export default {
        name: "createUser",
        data() {
            return {

                multipleSelected: [],
                roles: [],
                roleName: {
                    value: ''
                },
                rolesHasSelected:[]
            }
        },
        computed: {
            isEmpty: function(){
                return this.roles.length === 0;
            }
        },
        methods: {
            sortBy: function(e){
                let items = {};
               items['name'] = e.target.text;
               items['value'] = e.target.value;

               this.rolesHasSelected.push(items);
                this.roles.splice(e.target.index, 1);


            },
            removeList: function(index, name, value){
                console.log(index + "," + name + "," + value);
                this.roles.unshift({name: name, value: value});
                this.rolesHasSelected.splice(index, 1)
            },
            addRoles: function(){

                console.log('masuk add');
                axios.post('/api/v1/roles/', {roles:this.rolesHasSelected,name:this.roleName} )
                    .then((response) => {
                        if(response.data.message === 'success'){
                            this.$router.push({
                                name: 'rolesIndex',
                                messages: response.data.message
                            });
                        }
                    }, (error) => {

                    });

            }

        },
        mounted: function(){
            axios.get('/api/v1/getAllPermissions/')
                .then((response) => {
                    this.roles = response.data.data;
                });
        }

    }
</script>
<style scoped>
    .textboxt-with-button {

        display: flex;
        padding-top: 8px;

    }

    .textboxt-with-button p {

        margin-top: auto;
        margin-bottom: auto;
        margin-right: 10px;

    }
</style>