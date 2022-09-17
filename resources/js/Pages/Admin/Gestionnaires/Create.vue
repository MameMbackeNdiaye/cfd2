<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Argon from '@/Layouts/Argon.vue';
import FooterDashboard from '@/Layouts/FooterDashboard.vue';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

  components: {
      Argon,
      FooterDashboard
  }
  props:['roles','data', 'errors','users']

const form = useForm({
    name: '',
    email: '',
    password: '',
    is_admin: '1',
    status: '1',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('admin.gestionnaires.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

</script>

<template>
<Argon></Argon>
    <Head title="Register" />
  <div class="ml-24" >
    <AuthenticationCard>
            <div class="card-header pb-3 px-0 ">
              <h6 class="text-primary font-bold ml-16">Nouveau gestionnaire</h6>
            </div>
        <form @submit.prevent='submit'>
            <div>
                <InputLabel for="name" value="Name" />
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autocomplete="name"
                />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />
                <TextInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">
                <InputLabel for="terms">
                    <div class="flex items-center">
                        <Checkbox id="terms" v-model:checked="form.terms" name="terms" required />

                        <div class="ml-2">
                            I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                        </div>
                    </div>
                </InputLabel>
            </div>

            <div class="flex items-center justify-end mt-4">
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
  </div>

<!--
<div class="flex flex-col mt-20 ml-60 bg-white px-6 py-2 w-40">
    <div>
        <h2 class="text-center text-xl"> {{form.nom}}</h2>
        <form @submit.prevent="submit">
            <div class="mt-4">
                <jet-label for="nom" value="Nom Role" class="text-xl"></jet-label>
                <jet-input id="nom" type="text" class="mt-1 block w-full"
                v-model="form.nom" required autofocus autocomplete="name"></jet-input>
                <jet-input-error :message="form.errors.nom" class="mt-2"></jet-input-error>
            </div>
        </form>
        <div class="flex items-center justify-center mt-4">
            <button type="submit" class="tetx-sm btn btn-primary" :class="{'opacity-25':form.processing}"
            :disabled="form.processing">Ajouter</button>
            <jet-danger-button :href="route('admin.roles.index')" class="text-sm ml-4">
                Annuler
            </jet-danger-button>
        </div>
    </div>
</div>
-->
<FooterDashboard></FooterDashboard>
</template>

