<template>
    <div>
        <section class="hero is-link">
            <div class="hero-body p-md">
                <div class="container has-text-centered">
                    <label class="label has-text-weight-light has-text-white">Data Sampah</label>
                </div>
            </div>
        </section>
        <section class="hero is-light">
            <div class="hero-body p-md" style="min-height:600px;">
                <div class="container">
                    <router-link :to="{ name: 'sampah.create' }" class="button is-info is-medium is-fullwidth m-b-lg">
                        <span class="is-size-6">Tambah</span>
                    </router-link>
                    <div class="card p-lg card-rounded m-b-md" v-for="items in sampah">
                        <div class="card-body">
                            <h1 class="title is-4 has-text-left">{{ items.name }}</h1>
                            <div class="media">
                                <div class="media-content">
                                    <span class="has-text-grey-light">{{ items.category.name }}</span>
                                </div>
                                <div class="media-right is-pulled-right">
                                    <a class="has-text-danger cursor" @click="deleteSampah(items.id)">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    import sampah from '../sampah.js';

    export default {
        data () {
            return {
                sampah: {}
            }
        },
        methods: {
            deleteSampah(id) {
                if(confirm("Are you sure you want to delete?")){
                    let loader = this.$loading.show({
                        loader: 'dots'
                    });
                    setTimeout(() => {
                        loader.hide()
                    },1000);

                    sampah.deleteSampah(id)
                    .then(response => {
                        let i = this.sampah.map(item => item.id).indexOf(id);
                        this.sampah.splice(i, 1);
                        
                        loader.hide();
                    });
                }
            }
        },
        created() {
            let loader = this.$loading.show({
                loader: 'dots'
            });
            setTimeout(() => {
                loader.hide()
            },1000);

            sampah.getSampah()
            .then(response => {
                this.sampah = response.data;
                loader.hide();
            });
        }
    }
</script>