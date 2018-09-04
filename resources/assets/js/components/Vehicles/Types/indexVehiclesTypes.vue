<template>
    <div>
        <div class="box">
            <div class="box-header">
                <span class="fa fa-gear"></span>
                <h3 class="box-title margin-r-5">Vehicle Type Programs</h3>
                <router-link :to="{ name: 'createVehicleTypes'}" class="btn btn-primary pull-right">Create New Vehicle Types</router-link>
                <hr class="divider">
            </div>
            <div class="box-body">
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>Vehicle Types List</th>
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
                                        <p>Jl. Letjen S. Parman No.28, RT.9, Tomang, Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11440
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <router-link :to="{ name: 'editVehicleTypes'}" class="btn btn-warning btn-margin">Edit <i class="fa fa-pencil"></i></router-link>
                                <button class="btn btn-danger btn-margin">Delete <i class="fa fa-times"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "indexVehiclesTypes"
    }
</script>

<style scoped>


</style>