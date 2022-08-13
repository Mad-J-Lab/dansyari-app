<template>
    <div>
        <tr v-for="category in categories">
            <td>{{ category.name }}</td>
        </tr>
    </div>
</template>

<script>
export default {
    data(){
        return{
            categories:[],
        };
    },
    methods: {
        getCategories() {
            axios.get('/api/categories')
                .then((res) => {
                    this.categories = res.data;
                });
        }
    },
    mounted() {
        this.getCategories();
    }
}
</script>
