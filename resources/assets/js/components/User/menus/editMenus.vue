<template>
    <div class="box">
        <div class="box-body">
            <form @submit.prevent="editMenus" class="form-horizontal">
                <div class="form-group">
                    <label for="inputMenus" class="control-label col-md-2">Name of Menus</label>
                    <div class="col-md-10">
                        <input type="text" id="inputMenus" class="form-control" v-model="menus.name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inpuParent" class="control-label col-md-2">Parent Menus</label>
                    <div class="col-md-10">
                        <select  id="inpuParent" name="koplak" class="form-control"  v-model="menus.parent">

                        </select>
                        <pre>{{ this.subMenus}}</pre>
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
    export default {
        name: "editMenus",
        template: {

        },
        data: function(){
            return {
                menus: {
                    name: '',
                },
                subMenus: []

            }
        },
        methods: {
            editMenus: function(){
                console.log("edit menus");
            },
            getDataEdit: function(){

                this.$http.get('/api/v1/menus/'+ this.$route.params.id)
                    .then(response => {
                        let dataMenus;
                        let dataParent
                        let dataTemp = response.data;
                        for(let i = 0; i < dataTemp.length; i++ ){

                            if(i === 0){
                                dataMenus = dataTemp[i]
                            } else {
                                dataParent = dataTemp[i];
                            }
                        }
                        this.menus.name = dataMenus.name;
                        this.subMenus.push(dataParent);



                    },(error => {
                        console.log(error.message);
                    }));
            }
        },
        beforeMount(){
            this.getDataEdit();
        }
    }
</script>

<style scoped>

</style>