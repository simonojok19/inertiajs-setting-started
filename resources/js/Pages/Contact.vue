<template>
    <Layout>
        <div>
            This is the Contact Page: {{ foo }}
        </div>
    </Layout>
</template>
<script>
import Layout from '../Shared/Layout.vue'
export default {
    props: ['foo'],
    components: {
        Layout,
    }
}
</script>
