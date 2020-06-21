<template>
    <div>
        <h2> Strona Główna</h2>
        <div class="trophies">
            <BrawlersGeneric title="Z alei pucharów" kind="trophies"/>
        </div>
    </div>
</template>

<style>
    .trophies {
        text-align: center;
        display: flex;
        border: 2px solid black;
        background-color: #9fcdff;
        width: 1200px;
        margin: auto;
        font: 16px Arial;
    }
</style>

<script>
    import BrawlersGeneric from "./BrawlersGeneric";
    export default {
        components: {BrawlersGeneric}
    }
</script>

