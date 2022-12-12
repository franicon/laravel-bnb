<template>
    <div class="">
        <div v-if="loading">
            <p>loading...</p>
        </div>
        <template v-else>
            <div class="row">
                <div class="g-3 col-4 d-flex align-items-stretch"
                     v-for="bookable in bookables"
                     :key="bookable.title">
                    <bookable-list-items v-bind="bookable"/>
                </div>
            </div>
        </template>
    </div>
</template>

<script>
import BookableListItems from "./BookableListItems.vue";
import axios from "axios";

export default {
    components: { BookableListItems },

    data() {
        return {
            loading: false,
            bookables: null,
        }
    },

    created() {
        this.loading = true;
        axios.get('/api/bookables').then(res => {
            this.bookables = res.data.data
            this.loading = false;
        });
    },

}
</script>

<style scoped>

</style>
