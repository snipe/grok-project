<template>
    <div id="company-app">
        <div class="heading">
            <h1>Companies</h1>
        </div>
        <company-component
                v-for="company in companies"
                v-bind="company"
                :key="company.id"
                @update="update"
                @delete="del">

        </company-component>
        <div>
            <button @click="create()">Add</button>
        </div>
    </div>
</template>

<script>
    function Company({ id, domains, name}) {
        this.id = id;
        this.name = name;
        this.domains = domains;
    }

    import CompanyComponent from './CompanyComponent.vue';

    export default {
        data() {
            return {
                companies: [],
                projects: [],
                mute: false
            }
        },
        methods: {
            create() {
                this.mute = true;
                window.axios.get('/api/companies/create').then(({ data }) => {
                    this.companies.push(new Company(data));
                    this.mute = false;
                });
            },
            del(id) {
                this.mute = true;
                window.axios.delete(`/api/companies/${id}`).then(() => {
                    let index = this.companies.findIndex(company => company.id === id);
                    this.companies.splice(index, 1);
                    this.mute = false;
                });
            },
            read() {
                this.mute = true;
                window.axios.get('/api/companies').then(({ data }) => {
                    data.forEach(company => {
                        this.companies.push(new Company(company));
                    });
                    this.mute = false;
                });
            },
            update(id, color) {
                this.mute = true;
                window.axios.put(`/api/companies/${id}`, { color }).then(() => {
                    this.companies.find(company => company.id === id).color = color;
                    this.mute = false;
                });
            }

        },
        beforeMount(){
            this.read();
        },
        components: {
            CompanyComponent
        }
    }
</script>
