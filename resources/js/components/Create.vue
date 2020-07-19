<template>
    <div>
        <section class="hero is-link">
            <div class="hero-body p-md">
                <div class="container has-text-centered">
                    <label class="label has-text-weight-light has-text-white">Input Sampah</label>
                </div>
            </div>
        </section>
        <section class="hero is-light">
            <div class="hero-body p-md" style="min-height:600px;">
                <div class="container has-text-centered">
                    <form @submit.prevent="create" action="/create" method="post">
                        <input type="hidden" name="recaptcha_response">
                        <input type="hidden" name="_token" :value="csrf">
                        <div class="field">
                            <label class="label has-text-left has-text-weight-light">Kategori Sampah</label>
                            <div class="control is-expanded">
                                <div class="select is-fullwidth">
                                    <select v-model="categoryId">
                                        <option value="" disabled>Kategori</option>
                                        <option
                                            v-for="item in category"
                                            :value="item.id"
                                        >{{ item.name }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label has-text-left has-text-weight-light">Nama Sampah</label>
                            <div class="control">
                                <input class="input" type="text" v-model.trim="$v.name.$model" placeholder="Nama Sampah">
                                <div v-if="$v.name.$error">
                                    <p class="help is-danger is-italic" v-if="!$v.name.required">Name is required</p>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control level">
                                <button name="create" class="button is-info is-medium is-fullwidth">
                                    <span class="is-size-6">Simpan</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    import { required } from 'vuelidate/lib/validators';
    import sampah from '../sampah.js';

    export default {
        data(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

                category: {},
                name: '',
                categoryId: ''
            }
        },
        validations: {
            name: {
                required
            }
        },
        methods: {
            create: async function (event) {
                this.$v.$touch();

                let loader = this.$loading.show({
                    loader: 'dots'
                });
                setTimeout(() => {
                    loader.hide()
                },1000);

                let formData = new FormData();
                formData.append('name', this.name);
                formData.append('category_id', this.categoryId);
                
                await sampah.storeSampah(formData)
                .then((response) => {
                    this.$router.push({name: 'sampah'});
                    loader.hide();
                });
            }
        },
        created() {
            let loader = this.$loading.show({
                loader: 'dots'
            });
            setTimeout(() => {
                loader.hide();
            },1000);

            sampah.getCategory()
            .then(response => {
                this.category = response.data;
                loader.hide();
            });
        }
    }
</script>