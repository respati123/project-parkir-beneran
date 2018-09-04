<template>
    <div>
        <div class="box">
            <div class="box-body">
                <form @submit.prevent="addLocation" class="form-horizontal">
                    <div class="form-group">
                        <label for="inputNameLocation" class="control-label col-md-2">Locations</label>
                        <div class="col-md-10">
                            <select  id="inputNameLocation" class="form-control">
                                <option value="jakarta">Jakarta</option>
                                <option value="jakarta">Jawa Barat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSubLocation" class="control-label col-md-2">Sub Location</label>
                        <div class="col-md-10">
                            <select  id="inputSubLocation" class="form-control">
                                <option value="jakarta"> Jakarta Barat</option>
                                <option value="jakarta"> Jawa Barat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-success">Save <i class="fa fa-check"></i></button>
                            <router-link class="btn btn-danger" :to="{ name: 'indexLocation'}">Cancel <i class="fa fa-times"></i></router-link>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "createLocation",
        methods: {
            addLocation: function(){

            }
        }
    }
</script>

<style scoped>

</style>