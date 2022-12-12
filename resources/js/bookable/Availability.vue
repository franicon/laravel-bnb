<template>
    <div>
        <h6 class="text-uppercase text-secondary fw-bolder">
            Check Availability
            <span v-if="noAvailability" class="text-danger">(NOT AVAILABLE)</span>
            <span v-if="hasAvailability">(AVAILABLE)</span>
        </h6>
        <div class="form row">
            <div class="form-group col-md-6 mb-3">
                <label for="from">from</label>
                <input v-model="from" @keyup.enter="check" :class="[{'is-invalid': errorFor('from')}]" type="text" name="from" class="form-control form-control-sm" placeholder="Start date"/>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="to">To</label>
                <input type="text" v-model="to" :class="[{'is-invalid': errorFor('to')}]" @keyup.enter="check" name="to" class="form-control form-control-sm" placeholder="End date"/>
            </div>
            <button class="btn btn-secondary btn-block" @click="check" :disabled="loading">Check!</button>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Availability",
    components: {},
    data() {
        return {
            from: null,
            to: null,
            loading: false,
            status: null,
            errors: null
        }
    },

    methods: {
        check() {
            this.loading = true;
            this.errors = null;
            axios.get(`/api/bookables/${this.$route.params.id}/availability?from=${this.from}&to=${this.to}`)
                .then(response => {
                    this.status = response.status;
                    console.log(this.status)
                })
                .catch(error => {
                    if (422 === error.response.status) {
                        this.errors = error.response.data.errors;
                    }

                    this.status = error.response.status
                }).then(()=> (this.loading = false))
        },

        errorFor(field) {
            return this.hasErrors && this.errors[field] ? this.errors[field] : null
        }
    },

    computed: {
        hasErrors() {
            return 422 === this.status && this.errors !== null;
        },

        hasAvailability() {
            return 200 === this.status;
        },

        noAvailability() {
            return 400 === this.status;
        }
    }

}
</script>

<style scoped>
label {
    font-size: 0.7rem;
    text-transform: uppercase;
    color: gray;
    font-weight: bolder;
}
</style>
