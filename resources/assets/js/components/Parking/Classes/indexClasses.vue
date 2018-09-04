<template>
    <div class="box">
        <div class="box-header">
            <span class="fa fa-gear"></span>
            <h3 class="box-title margin-r-5">Classes Programs</h3>
            <router-link :to="{ name: 'createClasses'}" class="btn btn-primary pull-right">Create New Classes</router-link>
            <hr class="divider">
        </div>
        <div class="box-body">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Classes List</th>
                        <th>Execute</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="box-list">
                                <div class="box-list-img">
                                    <img src="../../../../../../public/images/icon__person.png" alt="">
                                    <p>Active</p>
                                </div>
                                <div class="box-list-desc">
                                    <h3>Regular</h3>
                                    <p>Someone who is given better treatment than ordinary people because they are famous, influential, or important</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="coloum-button-list">

                                <router-link class="btn btn-warning btn-margin" :to="{ name : 'editClasses', params: { id : '123'}}">Edit <i class="fa fa-pencil"></i></router-link>
                                <router-link class="btn btn-danger btn-margin" :to="{ name : 'editListCustomers', params: { id : '123'}}">Delete <i class="fa fa-pencil"></i></router-link>

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>
    .coloum-button-list {
        display: inline-flex;
        padding: 30px 0;
    }
    .btn-margin {
        margin-right: 10px;
    }

</style>