<template>
    <div>
        <div class="box">
            <div class="box-header">
                <span class="fa fa-gear"></span>
                <h3 class="box-title margin-r-5">Menus</h3>
                <router-link :to="{ name: 'createMenus'}" class="btn btn-primary pull-right">Create New Menus</router-link>
                <hr class="divider">
            </div>
            <div class="box-body">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>Name of Menus</th>
                        <th>Sub Menu</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Modifier By</th>
                        <th>Modifier At</th>
                        <th>Execute</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="dataTable in dataMenusTable">
                        <td>{{ dataTable.name }}</td>
                        <td>
                            <p v-if="dataTable.parent_id === -1">{{ no_parent }}</p>
                        </td>
                        <td>{{ dataTable.created_by}}</td>
                        <td>{{ dataTable.created_at}}</td>
                        <td>{{ dataTable.modifier_by}}</td>
                        <td>{{ dataTable.modifier_at}}</td>
                        <td>
                            <router-link :to="{ name: 'editMenus', params: {id: dataTable.id} }" class="btn btn-warning">Edit <i class="fa fa-pencil"></i></router-link>
                            <button class="btn btn-danger" type="button">Delete <i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <pre> {{ this.dataMenusTable }}</pre>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: "indexMenus",
        data: function(){
            return {
                dataMenusTable: [],
                no_parent: 'tidak ada parent'
            }
        },
        methods: {

            getDataTable: function(){

                this.$http.get('/api/v1/menus')
                    .then(response => {
                        this.dataMenusTable = response.data.menu.data;
                        console.log(response.data.menu.data);
                    }, (error => {
                        console.log(error.messages)
                    }));
            }
        },
        beforeMount(){
            this.getDataTable();
        }

    }
</script>
<style scoped>

</style>