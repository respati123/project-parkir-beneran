<template>
    <div>
        <div class="box">
            <div class="box-body">
                <form @submit.prevent="editClasses" class="form-horizontal">
                    <div class="form-group">
                        <label for="inputClasses" class="control-label col-md-2">Classes</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="inputClasses">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDesc" class="control-label col-md-2">Description</label>
                        <div class="col-md-10">
                            <textarea  id="inputDesc" cols="8" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button class="btn btn-success" type="submit">Save <i class="fa fa-check"></i></button>
                            <router-link :to="{ name: 'indexClasses'}" class="btn btn-danger">Cancel <i class="fa fa-times"></i></router-link>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default  {
        name: 'editClasses',
        data: function(){
            return {


            }
        },
        methods: {
            editClasses: function(){

            }
        }
    }
</script>

<style scoped>

</style>