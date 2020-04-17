<template>
    <v-app>
        <v-navigation-drawer app></v-navigation-drawer>
        <v-app-bar app color="indigo" dark>
            <v-app-bar-nav-icon name="drawler-icon" @click.stop="drawler = !drawler" />
            <v-toolbar-title name="toolbar-title"><img width="25%" src="img/logo.jpg" alt="brawlstarspedia"> Brawlstarspedia</v-toolbar-title>
        </v-app-bar>
        <v-content>
            <v-container>
                <router-link tag="li" to="/">Home</router-link>
                <router-link tag="li" to="/brawlers">Brawlers</router-link>
                <router-link tag="li" to="/about">About</router-link>
                <router-view></router-view>
            </v-container>
        </v-content>
    </v-app>
</template>
