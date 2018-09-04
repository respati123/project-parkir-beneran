<template>
    <div>
        <div class="box">
            <div class="box-header">
                <span class="fa fa-gear"></span>
                <h3 class="box-title margin-r-5">Location Programs</h3>
                <router-link class="btn btn-primary pull-right" :to="{ name: 'createLocation'}">Create new Location</router-link>
                <hr class="divider">
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Locations List</th>
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
                                        <h2>DKI Jakarta</h2>
                                           <ul>
                                               <li>Jakarta Timur</li>
                                               <li>Jakarta Barat</li>
                                           </ul>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="coloum-button-list">
                                    <router-link class="btn btn-warning btn-margin" :to="{ name : 'editLocation', params: { id : '123'}}">Edit <i class="fa fa-pencil"></i></router-link>
                                    <router-link class="btn btn-danger btn-margin" :to="{ name : 'editListCustomers', params: { id : '123'}}">Delete <i class="fa fa-pencil"></i></router-link>

                                </div>
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
        name: "indexLocation"
    }
</script>

<style scoped>
    .box-list {
        width: 100%;
        height: auto;
        padding: 5px;
        display: inline-flex;

    }
    .coloum-button-list {
        display: inline-flex;
        padding: 30px 0;

    }

    .btn-margin  {
        margin: 0 12px;
    }


    .box-list {
        width: 100%;
        height: auto;
        padding: 5px;
        display: inline-flex;
    }
    .box-list-img p {
        position: absolute;
        right: 0;
        bottom: 0;
        background: red;
        padding: 5px;
        font-size: 12px;
        color: #ffffff;
        border-radius: 10px;
        display: inline-block;
    }

    .box-list-img {
        margin-right: 10px;
        width: 100px;
        display: block;
        position: relative;
    }
</style>