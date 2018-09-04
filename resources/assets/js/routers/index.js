import VueRouter from 'vue-router'
import indexRoles from '../components/User/roles/rolesIndex'
import createRoles from '../components/User/roles/rolesCreate'
import editRoles from '../components/User/roles/rolesEdit'
import permissionsIndex from '../components/User/permissions/permissionsIndex'
import createPermissions from '../components/User/permissions/permissionsCreate'
import editPermissions from '../components/User/permissions/permissionsEdit'

//import view list-customers
import listCustomersIndex from '../components/Customers/list-costumers/listCustomersIndex'
import createListCustomers from '../components/Customers/list-costumers/listCustomersCreate'
import editListCustomers from '../components/Customers/list-costumers/listCustomersEdit'

//import loyalty
import indexLoyalty from '../components/Customers/loyalty-customers/indexLoyalty'
import createLoyalty from '../components/Customers/loyalty-customers/createLoyalty'
import editLoyalty from '../components/Customers/loyalty-customers/editLoyalty'

//import location
import indexLocation from '../components/Parking/Location/indexLocation.vue'
import createLocation from '../components/Parking/Location/createLocation.vue'
import editLocation from '../components/Parking/Location/editLocation.vue'

//import category
import indexCategory from '../components/Parking/Categories/indexCategory.vue'
import createCategory from '../components/Parking/Categories/createCategory.vue'
import editCategory from '../components/Parking/Categories/editCategory.vue'

//import classes
import indexClasses from '../components/Parking/Classes/indexClasses.vue'
import createClasses from '../components/Parking/Classes/createClasses.vue'
import editClasses from '../components/Parking/Classes/editClasses.vue'

//import Building
import indexBuilding from '../components/Parking/Building/indexBuilding.vue'
import createBuilding from '../components/Parking/Building/createBuilding.vue'
import editBuilding from '../components/Parking/Building/editBuilding.vue'

//types
import indexVehicleTypes from '../components/Vehicles/Types/indexVehiclesTypes.vue'
import createVehicleTypes from '../components/Vehicles/Types/createVehiclesTypes.vue'
import editVehicleTypes from  '../components/Vehicles/Types/editVehiclesTypes.vue'

//brands
import indexVehicleBrands from  '../components/Vehicles/Brands/indexVehiclesBrands.vue'
import createVehicleBrands from  '../components/Vehicles/Brands/createVehiclesBrands.vue'
import editVehicleBrands from '../components/Vehicles/Brands/editVehiclesBrands.vue'

//dashboard
import dashboardIndex from '../components/Dashboard/Dashboard.vue'

const router = new VueRouter({
    routes: [
        //roles
        {path: '/roles', components: {componentsIndex: indexRoles}, name: 'rolesIndex'},
        {path:'/roles/create',component: createRoles,name: 'createRoles'},
        {path:'/roles/edit/:id',component: editRoles,name: 'editRoles'},
        //permissions
        {path: '/permissions',components: {componentsIndex: permissionsIndex}, name:'indexPermissions'},
        {path: '/permissions/create',component: createPermissions, name: 'createPermissions'},
        {path: '/permissions/edit/:id',component: editPermissions, name: 'editPermissions'},

        //customers
        {path: '/listcustomer', components: {componentsIndex: listCustomersIndex}, name:'indexListCustomers'},
        {path: '/listcustomer/create', component:  createListCustomers, name: 'createListCustomers'},
        {path: '/listcustomer/edit/:id', component: editListCustomers, name: 'editListCustomers'},

        //loyalty
        {path: '/loyalty', components: {componentsIndex: indexLoyalty}, name: 'indexLoyalty'},
        {path: '/loyalty/create', component: createLoyalty, name: 'createLoyalty'},
        {path: '/loyalty/edit/:id', component: editLoyalty, name: 'editLoyalty'},

        //location
        {path: '/location', components: {componentsIndex: indexLocation}, name: 'indexLocation'},
        {path: '/location/create', component: createLocation, name: 'createLocation'},
        {path: '/location/edit/:id', component: editLocation, name: 'editLocation'},

        //categories
        {path: '/category', components: {componentsIndex: indexCategory}, name: 'indexCategory'},
        {path: '/category/create', component: createCategory, name: 'createCategory'},
        {path: '/category/edit/:id', component: editCategory, name: 'editCategory'},

        //classes
        {path: '/classes', components: {componentsIndex: indexClasses}, name: 'indexClasses'},
        {path: '/classes/create', component: createClasses, name: 'createClasses'},
        {path: '/classes/edit/:id', component: editClasses, name: 'editClasses'},

        //Buildings
        {path: '/building', components: {componentsIndex: indexBuilding}, name: 'indexBuilding'},
        {path: '/building/create', component: createBuilding, name: 'createBuilding'},
        {path: '/building/edit/:id', component: editBuilding, name: 'editBuilding'},

        //Types
        {path: '/vehicletypes', components: {componentsIndex: indexVehicleTypes}, name: 'indexVehicleTypes'},
        {path: '/vehicletypes/create', component: createVehicleTypes, name: 'createVehicleTypes'},
        {path: '/vehicletypes/edit/:id', component: editVehicleTypes, name: 'editVehicleTypes'},

        //brands
        {path: '/vehiclebrands', components: {componentsIndex: indexVehicleBrands}, name: 'indexVehicleBrands'},
        {path: '/vehiclebrands/create', component: createVehicleBrands, name: 'createVehicleBrands'},
        {path: '/vehiclebrands/edit/:id', component: editVehicleBrands, name: 'editVehicleBrands'},


        //dashboard
        {path: '/dashboard', component: dashboardIndex, name: 'dashboardIndex'}
    ],
    mode: 'history'
});

export default router;
