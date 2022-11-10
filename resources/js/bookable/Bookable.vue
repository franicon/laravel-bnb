<template>
    <div class="">
        <div class="" v-if="loading">
            <p>loading...</p>
        </div>
        <template v-else>
            <div class="row">
                <div class="g-3 col-4" v-for="bookable in bookables" :key="bookable.title">
                    <bookable-list-items
                        :price="1000"
                        :item-title="bookable.title"
                        :item-content="bookable.content"
                    />
                </div>
            </div>
        </template>
    </div>
</template>

<script>
import BookableListItems from "./BookableListItems.vue";

export default {
    components: {
        BookableListItems
    },

    data() {
        return {
            loading: false,
            bookables: null,
        }
    },

    computed: {

    },

    created() {
        this.loading = true;
        setTimeout(() => {
            this.bookables = [
                { title: 'Cheap Villa', content: 'A very Cheap Villa'},
                {title: 'Expensive Villa 2', content: 'Very Expensive Villa'},
                {title: 'Expensive Villa 3', content: 'Very Expensive Villa'},
                {title: 'Expensive Villa 4', content: 'Very Expensive Villa'},
                {title: 'Expensive Villa 5', content: 'Very Expensive Villa'},
            ];
            this.loading = false;
        }, 5000)
    },

}
</script>

<style scoped>

</style>
