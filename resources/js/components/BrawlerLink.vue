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
        }
    },
    data() {
        return {
          url: "/brawlers/"+this.name
    }
    }
}
</script>
