<template>

  <v-container>
    <v-alert
        type="success"
    >{{ message }}</v-alert>
    <v-card width="400" height="150" raised>
      <v-card-title>
        <span v-text="title"></span>

        <v-spacer></v-spacer>


      </v-card-title>

      <v-card-text>
        <slot></slot>
      </v-card-text>
    </v-card>
  </v-container>
</template>

<script>
export default {
  name: 'Home',
  props: {},
  data: () => ({
    message: 'Hello Symfony + Vue.js!',
    title: 'Bienvenido/a',
  }),
}
</script>
