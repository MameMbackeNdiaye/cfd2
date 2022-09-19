<script>
import Argon from '@/Layouts/Argon.vue';
import FooterDashboard from '@/Layouts/FooterDashboard.vue';
import {inject, reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";
import ErrorsAndMessages from "../../Partials/ErrorsAndMessages";
import {usePage} from "@inertiajs/inertia-vue3";
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';


export default {
    name: "Edit",
    components: {
        ErrorsAndMessages,
        AppHeader,
        Argon,
        FooterDashboard,
        useForm,
        Link,
        Head

    },
  props:['roles','data',
   'errors: Object',
   'users'
   ],
    setup() {
        const form = reactive({
            nom: null,
            _token: usePage().props.value.csrf_token,
            _method: "PUT"
        });

        // retrieve post prop
        const {nom, id } = usePage().props.value.roles;
        form.nom = nom;

        const route = inject('$route');


        function submit() {
            Inertia.post(route('admin.roles.update', {'id': id}), form, {
                forceFormData: true
            });
        }

        return {
            form, submit
        }
    }
}
</script>

<style scoped>
    form {
        margin-top: 20px;
    }
</style>
<template>
    <app-header></app-header>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form @submit.prevent="submit">
                <h2 class="text-left">Update role</h2>

                <errors-and-messages :errors="errors"></errors-and-messages>

                <div class="form-group">
                    <label for="title">Nom</label>
                    <input type="text" class="form-control" name="title" id="title" v-model="form.nom" />
                </div>
                <div className="mt-4">
                    <button type="submit" className="px-6 py-2 font-bold text-white bg-green-500 rounded">
                     Mettre a joutr
                    </button>
                </div>            
            </form>
        </div>
    </div>
</template>

