<template>
    <div class="" v-if="loading">
        <p>loading</p>
    </div>
    <template v-else>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2>{{bookable.title}}</h2>
                        <hr>
                        <article>{{bookable.description}}</article>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                availability & prices
            </div>
        </div>
    </template>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            bookable: null,
            loading: false
        }
    },

    created() {
        this.loading = true;
        const {id} = this.$route.params;
        axios.get(`/api/bookables/${id}`)
            .then(res => { this.bookable = res.data; this.loading = false })
    }
}
</script>

<style scoped>

</style>
