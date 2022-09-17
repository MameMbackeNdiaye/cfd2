<script>
import Argon from '@/Layouts/Argon.vue';
import FooterDashboard from '@/Layouts/FooterDashboard.vue';
export default {
  components: {
      Argon,
      FooterDashboard
  },
  props:['roles','data', 'errors','users'],
      data() {
            return {
                editMode: false,
                isOpen: false,
                form: {
                    nom: null,
                },
            }
        },
        methods: {
            openModal() {
                this.isOpen = true;
            },
            closeModal() {
                this.isOpen = false;
                this.reset();
                this.editMode=false;                              
            },
            reset() {
                this.form = {
                    nom: null,
                    body: null,
                }
            },
            save(data) {
                this.$inertia.post('/admin/roles/store', data)
                this.reset();
                this.closeModal();
                this.editMode = false;
            },
            edit: function(data) {
                this.form = Object.assign({}, data);
                this.editMode = true;
                this.openModal();
            },
            update: function(data) {
                data._method = 'PUT';
                this.$inertia.post('/admin/roles/edit/'+ data.id, data)
                this.reset();
                this.closeModal();
            },
        },
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
                          <button class=" ml-6 text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" @click="edit(row)" type="button">Edit</button> 
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" v-if="isOpen">
                  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                      </div>
                      <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                        <form>
                          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div>
                                  <div class="mb-4">
                                      <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                                      <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Entrer le nouveau nom" v-model="form.nom">
                                  </div>
                            </div>
                          </div>
                          <div class=" px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                          <span class="flex  rounded-md shadow-sm sm:ml-3 sm:w-auto">
                              <button wire:click.prevent="store()" type="button" class="btn bg-gradient-primary text-white mb-0 " v-show="!editMode" @click="save(form)">
                                Ajouter
                              </button>
                          </span>
                          <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                              <button wire:click.prevent="store()" type="button" class="btn bg-gradient-primary text-white mb-0 " v-show="editMode" @click="update(form)">
                                Update
                              </button>
                          </span>
                          <span class="flex  rounded-md shadow-sm sm:ml-3 sm:w-auto">  
                              <button @click="closeModal()" type="button" class="btn bg-gradient-danger text-white mb-0 ">
                                Cancel
                              </button>
                            </span>
                          </div>
                        </form>   
                      </div> 
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 text-end  justify-center ml-40">
        <button @click="openModal()" class="btn bg-gradient-primary text-white mb-0" ><i class="fas fa-plus"></i>&nbsp;&nbsp;Nouveau Role</button>
    </div>

    <div class="container-fluid py-4 w-80 ml-40">
      <div class="row ml-40 mt-4 bg-slate-200 rounded-xl border-none shadow-lg">
        <div class="col-6">
          <div class="card mb-4 mt-4">
            <div class="card-header pb-0">
              <h6 class="text-accent font-bold">Roles des Gestionnaires</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom et prenom</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                    </tr>
                  </thead>
                  <tbody v-for="(user,index) in users" :key="index">
                    <tr v-if="user.is_admin == 1">
                      <td>
                        <div class=" d-flex px-4 py-2 mt-2 ">
                          <div>
                            <i class="ni ni-single-02 text-warning"></i>
                          </div>
                          <div class="d-flex mx-4 flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{user.name}}</h6>
                            <p class="text-xs text-secondary mb-0">{{user.email}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"></p>
                        <p class="text-xs text-secondary mb-0" v-if="user.is_admin == 1" >gestionnaire</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class=" text-end  justify-center mt-40 mr-16">
              <button @click="openModal()" class="btn bg-gradient-warning text-white mb-0" ><i class="ni ni-settings-gear-65"></i>&nbsp;&nbsp;Editer le role d'un gestionnaire</button>
          </div>
        </div>
      </div>
    </div>
    


    <div class="container-fluid py-4 w-90 ml-14">
      <div class="row ml-60">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="text-accent font-bold">Utilisateurs de la plateforme</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Utilisateur</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date d'inscription</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-secondary opacity-7">Projets contribué</th>
                    </tr>
                  </thead>
                  <tbody v-for="(user,index) in users" :key="index">
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img :src="user.profile_photo_path" class="avatar avatar-sm me-3" alt="img">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{user.name}}</h6>
                            <p class="text-xs text-secondary mb-0">{{user.email}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0" v-if="user.is_admin == 1">Administrateur</p>
                        <p class="text-xs font-weight-bold mb-0" v-if="user.is_admin == 0">Visiteur</p>
                        <p class="text-xs text-secondary mb-0" v-if="user.is_admin == 1" >gestionnaire</p>
                        <p class="text-xs text-secondary mb-0" v-if="user.is_admin == 0" >Utilisateur</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{user.created_at}}</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm border-none   text-white bg-gradient-danger" v-if="user.status == 0">desactivé</span>
                        <span class="badge badge-sm border-none  text-white bg-gradient-success" v-if="user.status == 1">activé</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class=" ml-6 text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          0
                        </a>
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
<FooterDashboard></FooterDashboard>
</template>

