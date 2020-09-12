<template>
    <Layout>
        <div class="container">
            <div class="my-5">
                <a href="/users/create" class="btn btn-primary">Create User</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </thead>
                <tbody>
                    <tr v-for="user in users" :key="user.id">
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td>
                            <inertia-link :href="`/users/${user.id}/edit`">Edit</inertia-link>|
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </Layout>
</template>
<script>
import Layout from '../../Shared/Layout.vue'
export default {
    props: ['users'],
    components: {
        Layout,
    }
}
</script>
