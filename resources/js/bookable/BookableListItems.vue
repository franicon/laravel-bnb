<template>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{itemTitle}}</h5>
            <p class="card-text">{{itemContent}}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        price: Number,
        itemTitle: String,
        itemContent: String,
    }
}
</script>

<style scoped>

</style>
