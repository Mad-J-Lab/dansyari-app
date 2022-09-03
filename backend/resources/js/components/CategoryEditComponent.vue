<template>
    <v-main>
        <v-container>
            <v-dialog v-model="dialog" persistent max-width="600px">
                <template v-slot:activator="{ on, attrs }">
                    <v-btn color="gray" dark v-bind="attrs" v-on="on">
                        カテゴリ追加
                    </v-btn>
                </template>
                <v-card>
                    <form @submit.prevent="submit">
                        <v-card-title>
                            <span class="text-h5">カテゴリ追加</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container>
                                <v-row>
                                    <v-col cols="12">
                                        <v-text-field v-model="category.name" label="カテゴリ名" required>
                                        </v-text-field>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="gray" text @click="dialog = false">
                                閉じる
                            </v-btn>
                            <v-btn color="gray" text @click="submit">
                                追加
                            </v-btn>
                        </v-card-actions>
                    </form>
                </v-card>
            </v-dialog>
        </v-container>
    </v-main>
</template>

<script>
export default {
    props: {
        categoryId: String
    },
    data() {
        return {
            category: {},
        };
    },
    methods: {
        getCategory() {
            axios.get('/api/categories/' + this.categoryId)
                .then((res) => {
                    this.category = res.data;
                });
        },
    },
    mounted() {
        this.getCategory();
    },
}
</script>
