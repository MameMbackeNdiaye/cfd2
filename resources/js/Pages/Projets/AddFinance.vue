<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import Footer from '@/Layouts/Footer.vue';


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

  props:['projet'],

   data() {
    return {
      projetAddProject: this.projet
    }
  },
  daisyui: {
    themes: ["light", "dark", "cupcake", "bumblebee", "emerald", "corporate", "synthwave", "retro", "cyberpunk", "valentine", "halloween", "garden", "forest", "aqua", "lofi", "pastel", "fantasy", "wireframe", "black", "luxury", "dracula", "cmyk", "autumn", "business", "acid", "lemonade", "night", "coffee", "winter"],
  }
  

}
</script>


<template data-theme="light">
  <p > <!--{{ greeting }} !--></p>
  <AppLayout title="Crowdfunding" data-theme="light">
        <div id="multi-step-form" >
            
        </div>
        <section class="bg-gray-100 m-6 flex bg-local">
        <div class="mx-auto max-w-6xl rounded-lg bg-gradient-to-br from-indigo-50 to-indigo-200 py-20 px-12 lg:px-24 shadow-xl mb-24"> 
         <div class="text-2xl p-4  justify-center md:text-3xl font-extrabold text-indigo-900 sm:pr-12">
            <p>Formulaire de financement</p>
         </div>
        <form>
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
              <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="somme">
                            Je veux financer*
                        </label>
                        <label class="input-group">
                            <input type="text" placeholder="10" class="bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" />
                            <span class="bg-gray-300 rounded py-3 px-4 mb-3">FR</span>
                        </label> 
                    <div>
                    <span class="text-red-500 text-xs italic">
                        Please fill out this field.
                    </span>
                    </div>
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                        Nom du projet
                    </label>
                    <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text"  placeholder="project name">
                </div>
             </div>
                <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                    Lien profil
                    </label>
                    <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="text" placeholder="http://....">
                </div>
                </div>
            <div class="-mx-3 md:flex mb-2">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    nom
                    </label>
                    <div>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text"  placeholder="votre nom">
                    </div>
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="job-type">
                    Prenom
                    </label>
                    <div>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text"  placeholder="votre prenom">
                    </div>
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="department">
                    vous etes
                    </label>
                    <div>
                    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="department">
                        <option>Une femme</option>
                        <option>Un homme</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="-mx-3 md:flex mb-2">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                        Date de nassance
                    </label>
                    <div>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="date"  placeholder="votre date de naissance">
                    </div>
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="department">
                        Pays de naissance
                    </label>
                    <div>
                    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="genre">
                        <option>Sénégal</option>
                        <option>Guinée</option>
                    </select>
                    </div>
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="job-type">
                    nationalité
                    </label>
                    <div>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text"  placeholder="votre nationalite">
                    </div>
                </div>
            </div>
                        <div class="-mx-3 md:flex mb-2">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Code postal
                    </label>
                    <div>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text"  placeholder="votre code postal">
                    </div>
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="job-type">
                    Pays
                    </label>
                    <div>
                    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="genre">
                        <option>Sénégal</option>
                        <option>Guinée</option>
                    </select>
                    </div>
                </div>
                <div class="md:w-1/2 px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="department">
                    Téléphone
                    </label>
                    <div>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text"  placeholder=" votre numéro de téléphone">
                    </div>
                </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                        Contact annex
                    </label>
                    <div>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text"  placeholder="N° personne de confiance">
                    </div>
                </div>

            </div>

                <div class="-mx-3 md:flex mt-2">
                <div class="md:w-full px-3">
                    <button class="md:w-full mt-6 w-full font-extrabold bg-indigo-900 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base text-white hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Envoyer
                    </button>
                </div>
                </div>
            </div>
            </form>
        </div>
        </section>
<Footer></Footer>
        </AppLayout> 
</template>

