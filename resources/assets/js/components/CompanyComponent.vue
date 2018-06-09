<template>
    <div class="company">
        <div class="col-2">
            <h3>Name: {{ name | properCase }}</h3>
            <p>Domains: {{ domains }}</p>
            <button @click="del">Delete</button>
        </div>
    </div>
</template>

<script>
    export default {
        computed: {

        },
        methods: {
            update(val) {
                this.$emit('update', this.id, val.target.selectedOptions[0].value);
            },
            del() {
                this.$emit('delete', this.id);
            }
        },
        props: ['id', 'domains', 'name'],
        filters: {
            properCase(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
        }
    }
</script>
