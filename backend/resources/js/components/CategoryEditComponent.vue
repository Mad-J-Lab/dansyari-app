<template>
    <v-dialog v-model="dialog" persistent max-width="600px">
        <template v-slot:activator="{ on, attrs }">
            <v-list-item-title class="d-flex justify-space-between">
                <p>
                    <router-link v-bind:to="{ name: 'want.list', params: { id: category.id } }">
                        {{ category.name }}
                    </router-link>
                </p>
                <v-btn color="gray" dark v-bind="attrs" v-on="on">編集</v-btn>
            </v-list-item-title>
        </template>
        <v-card>
            <form @submit.prevent="update">
                <v-card-title>
                    <span class="text-h5">カテゴリ編集</span>
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
                    <v-btn color="gray" text @click="update">
                        変更
                    </v-btn>
                    <v-btn color="gray" text @click="deleteCategory">
                        削除
                    </v-btn>
                </v-card-actions>
            </form>
        </v-card>
    </v-dialog>
</template>

<script>
export default {
    props: ['category'],
    data() {
        return {
            dialog: false,
            categoryValue: this.category,
        }
    },
    methods: {

        update() {
            axios.put('api/categories/' + this.category.id, {
                name: this.category.name
            }).then((res) => {
                this.categoryValue = res.data.category;
                this.dialog = false;
            });
        },
        deleteCategory() {
            axios.delete(`api/categories/${this.category.id}`).then((res) => {
                this.$emit('getCategoriesFromChild')
                // 表示側のみ変える
            })
        }
    },

}
</script>
