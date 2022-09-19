<script>
import Argon from '@/Layouts/Argon.vue';
import FooterDashboard from '@/Layouts/FooterDashboard.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';


export default {
  components: {
      Argon,
      FooterDashboard,
      Link
  },
  props:['roles','data', 'errors','users'],
  
}

</script>
<template>
<Argon></Argon>
    <div class="container-fluid py-4 w-90">
      <div class="row ml-60">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="text-primary font-bold">Tableau des Roles</h6>
            </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date de Creation</th>
                        <th class="text-secondary opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody v-for="(role,index) in roles" :key="index">
                    <tr >
                      <td>
                        <div class="px-2 py-1">
                          <div>
                            <i class="ni ni-button-play text-accent text-md opacity-10"></i>
                          </div>
                            <h6 class="mb-0 text-sm">{{role.nom}}</h6>
                            <p class="text-xs text-secondary mb-0">gestionnaire</p>
                        </div>
                      </td>
                      <td>
                        <p class=" ml-60 text-xs font-weight-bold mb-0">date</p>
                        <p class="ml-60 text-xs text-secondary mb-0">{{role.created_at}}</p>
                      </td>
                      <td class="align-middle">
                        <i class="ni ni-settings text-accent text-sm opacity-8"></i>
                        <Link
                                            tabIndex="1"
                                            className="px-4 py-2 text-sm text-white bg-blue-500 rounded"
                                            :href="route('admin.roles.edit', role.id)"
                                        >
                                            Edit
                        </Link>                          
                      </td>
                    </tr>
                  </tbody>
                </table>

                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>    
    <div class="col-6 text-end  justify-center ml-40">
        <button type="button" data-toggle="modal" data-target="#addNew" class="btn bg-gradient-primary text-white mb-0" ><i class="fas fa-plus"></i>&nbsp;&nbsp;Nouveau Role</button>
    </div>

<FooterDashboard></FooterDashboard>
</template>
