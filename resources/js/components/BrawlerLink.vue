<template>
    <li>
        <router-link :to="url">{{name}}</router-link>
    </li>
</template>
<script>
export default {
    props: {
        name: {
            type: String
        },
        category: {
            type: String
        }
    },
    data() {
        return {
          url: `/brawlers/${this.category}/${this.name}`
        }
    }
}
</script>
