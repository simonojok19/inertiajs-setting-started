<template>
    <Layout>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr scoped="col">Name</tr>
                    <tr scoped="col">Email</tr>
                    <tr scoped="col">Actions</tr>
                </thead>
            </table>
        </div>
    </Layout>
</template>
<script>
import Layout from '../Shared/Layout.vue'
export default {
    props: ['users'],
    components: {
        Layout,
    }
}
</script>
