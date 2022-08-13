<template>
    <div>
        <tr v-for="(category, index) in categories" :key="index">
            <th scope="row">{{ cagegory.id }}</th>
            <td>{{ category.name }}</td>
        </tr>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            categories: []
        }
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
