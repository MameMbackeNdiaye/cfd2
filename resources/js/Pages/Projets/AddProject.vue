<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Footer from '@/Layouts/Footer.vue';
import Welcome from '@/Jetstream/Welcome.vue';

const features = [
  { name: 'Origin', description: 'Designed by Good Goods, Inc.' },
  { name: 'Material', description: 'Solid walnut base with rare earth magnets and powder coated steel card cover' },
  { name: 'Dimensions', description: '6.25" x 3.55" x 1.15"' },
  { name: 'Finish', description: 'Hand sanded and finished with natural oil' },
  { name: 'Includes', description: 'Wood card tray and 3 refill packs' },
  { name: 'Considerations', description: 'Made from natural materials. Grain and color vary with each item.' },
]

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


<template data-theme="dark">
  <p > <!--{{ greeting }} !--></p>
  <AppLayout title="Crowdfunding" data-theme="light">
      <section class="bg-white dark:bg-white">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-black">Payments tool for software companies</h1>
                    <p class="max-w-2xl mb-6 font-dark text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-indigo-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-warning rounded-lg bg-primary-800 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Get started
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a :href=" '/addProject/' + 'addProjectForm' " class="inline-flex items-center justify-center font-extrabold px-5 py-3 text-base  text-center text-indigo-500 border border-indigo-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-gray dark:border-indigo-400 dark:hover:bg-indigo-900 dark:focus:ring-gray-100">
                         Lancer mon projet
                    </a> 
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="https://img.freepik.com/vecteurs-libre/projet-demarrage-equipe_74855-4818.jpg?w=1380&t=st=1659207825~exp=1659208425~hmac=084eed2defa55aed1f3b2852fe74838eb78e31857bf597eb66cacd39572783b0" alt="mockup">
                </div>                
            </div>
        </section>

        <div class="py-12 bg-grey">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
              <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Crowdfunding</h2>
              <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Un nouveau moyen pour financer son projet</p>
              <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.</p>
            </div>
          </div>
        </div>

        <div class="bg-white ">
            <div class="max-w-2xl mx-auto py-24 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
              <div>
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Domaines impactants</h2>
                <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p>
              </div>
              <div class="grid grid-cols-2  grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                <img src="https://images.unsplash.com/photo-1508614589041-895b88991e3e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1112&q=80" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="bg-gray-100 rounded-lg" />
                <img src="https://images.unsplash.com/photo-1558449028-b53a39d100fc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" class="bg-gray-100 shadow-md  rounded-lg" />
                <img src="https://images.unsplash.com/photo-1624668430039-0175a0fbf006?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="bg-gray-100 rounded-lg" />
                <img src="https://images.unsplash.com/photo-1471193945509-9ad0617afabf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="bg-gray-100 shadow-md rounded-lg" />
              </div>
            </div>
          </div>

          
        
      <div class="container  my-24 px-6 mx-auto ">

        <!-- Section: Design Block -->
          <div class="block rounded-lg shadow-lg bg-white">
            <div class="flex flex-wrap items-center">
              <div class="block w-full lg:flex grow-0 shrink-0 basis-auto lg:w-6/12 xl:w-4/12">
                <img
                  src="https://img.freepik.com/vecteurs-libre/illustration-communication-entreprise-dessinee-main_23-2149158973.jpg?w=996&t=st=1659430423~exp=1659431023~hmac=f80c97a22fce3e7a0b38ed8b6a0bfe7c272614b10248d52be90488deec27e57d"
                  alt="Trendy Pants and Shoes"
                  class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
                />
              </div>
              <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
                <div class="px-6 py-12 md:px-12">
                  <h2 class="text-3xl font-bold mb-4 text-blue-600 display-5">Pourquoi est-ce si génial?</h2>
                  <p class="text-gray-500 mb-12">
                    Nunc tincidunt vulputate elit. Mauris varius purus malesuada neque iaculis
                    malesuada. Aenean gravida magna orci, non efficitur est porta id. Donec magna
                    diam.
                  </p>

                  <div class="grid lg:gap-x-12 md:grid-cols-3">
                    <div class="mb-12 md:mb-0">
                      <h2 class="text-3xl font-bold text-blue-600 mb-4">+1000</h2>
                      <h5 class="text-lg font-medium text-gray-500 mb-0"> financeurs par mois</h5>
                    </div>

                    <div class="mb-12 md:mb-0">
                      <h2 class="text-3xl font-bold text-blue-600 mb-4">85%</h2>
                      <h5 class="text-lg font-medium text-gray-500 mb-0">projets avec cagnottes atteintes</h5>
                    </div>

                    <div class="">
                      <h2 class="text-3xl font-bold text-blue-600 mb-4">179</h2>
                      <h5 class="text-lg font-medium text-gray-500 mb-0">projets financés</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
<Footer></Footer>

  </AppLayout>
</template>