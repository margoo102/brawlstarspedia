<template>
    <div class="brawlers">
        <h1>Witajcie w brawlerowni</h1>
        <BrawlersGeneric title="Z alei pucharów" kind="trophies"/>
        <BrawlersGeneric title="Rzadziacy" kind="rare"/>
        <BrawlersGeneric title="Super Rzadziacy" kind="super-rare"/>
        <BrawlersGeneric title="Epiki" kind="epic"/>
        <BrawlersGeneric title="Mythic" kind="mythic"/>
        <BrawlersGeneric title="Legendy" kind="legendary"/>
    </div>
</template>
<script>
    import BrawlersGeneric from "./BrawlersGeneric";
        export default {
        components: {BrawlersGeneric}
    }
</script>
