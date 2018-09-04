<template>
    <div class="box">
        <div class="box-header">
            <span class="fa fa-gear"></span>
            <h3 class="box-title margin-r-5">Buildings Programs</h3>
            <router-link :to="{ name: 'createBuilding'}" class="btn btn-primary pull-right">Create New Buildings</router-link>
            <hr class="divider">
        </div>
        <div class="box-body">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>Buildings List</th>
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
                                <h2>Regular</h2>
                                <h3><b>Perkantoran</b></h3>
                                <p>Jl. Letjen S. Parman No.28, RT.9, Tomang, Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11440
                                </p>
                            </div>
                            <div class="box-list-slot">
                                <ul>
                                    <li>Regular: 100 slots</li>
                                    <li>VVIP: 100 slots</li>
                                    <li>VIP: 100 slots</li>
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="coloum-button-list">

                            <router-link class="btn btn-warning btn-margin" :to="{ name : 'editBuilding', params: { id : '123'}}">Edit <i class="fa fa-pencil"></i></router-link>
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


    .box-list-slot {
        width: 40%;
    }
</style>