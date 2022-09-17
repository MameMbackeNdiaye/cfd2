<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Footer from '@/Layouts/Footer.vue';
import Welcome from '@/Jetstream/Welcome.vue';
export default {
 /* data() {
    return {
      greeting: 'Hello World!'
    }
  }*/
  components: {
    AppLayout,
    Footer
  },

  props:['projets'],

   data() {
    return {
      projetList: this.projets
    }
  },
  daisyui: {
    themes: ["light", "dark", "cupcake", "bumblebee", "emerald", "corporate", "synthwave", "retro", "cyberpunk", "valentine", "halloween", "garden", "forest", "aqua", "lofi", "pastel", "fantasy", "wireframe", "black", "luxury", "dracula", "cmyk", "autumn", "business", "acid", "lemonade", "night", "coffee", "winter"],
  }

}
</script>


<template data-theme="light">
  <p > <!--{{ greeting }} !--></p>
  <AppLayout title="Crowdfunding" data-theme="dark">
    <template #header >
      <div class="text-2xl font-extrabold text-gray-900 sm:pr-12">
        Liste des projets
      </div>
      </template>
    
  <div class=" flex flex-wrap py-12 bg-gradient-to-br from-indigo-50 to-indigo-100 divide-y divide-slate-100 justify-center space-x-10">
    
      <div v-for="projet in this.projetList" v-bind:key="projet.id">
          <div class=" scroll-pl-6 pt-12 text-2xl text-indigo-500 font-bold md:text-2xl">{{ projet.nom }}</div>
            <div class="flex justify-center py-4 px-1 max-w-lg mx-auto">
              <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-x-4 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 container">
                <div class="text-center sm:text-left">
                  <div class="space-y-0.5">
                    <img class="block mx-auto rounded-xl shadow-lg" src="https://images.unsplash.com/photo-1523132797263-747d5d0dbbb3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="image projet">
                    <div>
                      <p class="text-lg text-primary font-semibold">
                        Theme: 
                        {{ projet.themes_id }}
                      </p>
                      </div>
                      <div>
                        <p class="text-slate-500 font-medium">
                        #{{ projet.codeProjet }}
                        </p>
                        </div>
                        <div>
                        <p class="text-lg text-black font-semibold">
                          {{ projet.description }}
                        </p>
                        </div>
                        <div class="pb-1  justify-center">
                        <p class="text-lg text-black font-semibold">
                          Cagnotte <br>
                          <progress class="progress progress-primary w-56 rounded-xl shadow-lg  " value="40" max="100"></progress>
                           40% 
                       </p>
                        </div>
                        <div class="rating rating-xs">
                          <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" />
                          <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" checked />
                          <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" />
                          <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" />
                          <input type="radio" name="rating-3" class="mask mask-star-2 bg-orange-400" />
                        </div>
                        <div>
                        <p class="text-lg text-black font-semibold">
                          {{ projet.financement_count }} participants
                        </p>
                        </div>
                  </div>
                  <div class="my-6">
                  <a :href=" 'projets/'+ projet.id " class="px-4 py-4  mx-auto ml-24 mt-6 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-center">
                    Voir le projet
                  </a>

                  </div>
                </div>
              </div>        
            </div>
          </div>
        </div>

<Footer></Footer>                                
  </AppLayout> 

</template>

<style>
.greeting {
  color: red;
  font-weight: bold;
}
</style>
