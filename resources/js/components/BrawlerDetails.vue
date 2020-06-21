


<template>
    <div class="container">
        <div v-for="(value, name) in details">
            {{name}}: {{value}}
        </div>
    </div>
</template>

<script>
    export default {
        name: 'BrawlerDetails',
        data() {
            return {
                details: {}
            }
        }
    }
</script>
