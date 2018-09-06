<template>
    <div class="box">
        <div class="box-body">
            <form @submit.prevent="addMenus" class="form-horizontal">
                <div class="form-group">
                    <label for="inputMenus" class="control-label col-md-2">Name of Menus</label>
                    <div class="col-md-10">
                        <input type="text" id="inputMenus" class="form-control" v-model="menus.name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inpuParent" class="control-label col-md-2">Parent Menus</label>
                    <div class="col-md-10">
                        <select  id="inpuParent" class="form-control" v-model="menus.parent">
                            <option value="-1"> - </option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-2">
                        <button class="btn btn-success" type="submit">Save <i class="fa fa-check"></i></button>
                        <router-link :to="{ name: 'indexMenus'}" class="btn btn-warning">Cancel <i class="fa fa-times"></i></router-link>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>

    import axios from 'axios'
    export default {
        name: "createMenus",
        data: function(){
            return {

                menus: {
                    name: '',
                    parent: ''
                }
            }
        },
        methods: {
            addMenus: function(){

                axios.post('/api/v1/menus/', this.menus)
                    .then(response => {
                        this.$router.push({
                            name: 'indexMenus'
                        });
                    }, (error => {
                        console.log(error.message)
                    }));
                console.log("input menus");
            }
        }
    }
</script>

<style scoped>

</style>