<template>
    <div class="box">
        <div class="box-body">
            <form @submit.prevent="editVehicleTypes" class="form-horizontal">
                <div class="form-group">
                    <label for="inputVehicles" class="control-label col-md-2">Name of Vehicle Types</label>
                    <div class="col-md-10">
                        <input type="text" id="inputVehicles" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDesc" class="control-label col-md-2">Descriptions</label>
                    <div class="col-md-10">
                        <textarea id="inputDesc" rows="4" cols="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-2">
                        <button type="submit" class="btn btn-success">Save <i class="fa fa-check"></i></button>
                        <router-link :to="{ name: 'indexVehicleTypes'}" class="btn btn-danger">Cancel <i class="fa fa-times"></i></router-link>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "editVehiclesTypes",
        methods: {
            editVehicleTypes: function(){

            }
        }
    }
</script>

<style scoped>

</style>