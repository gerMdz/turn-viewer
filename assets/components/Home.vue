<template>
  <v-container>
    <v-img :src="require('/assets/images/logoMPF2.png')" class="" alt="MPF Mendoza"
           max-height="125"
           contain

    >
      <template v-slot:placeholder>
        <v-row
            class="fill-height ma-0"
            align="center"
            justify="center"
        >
          <v-progress-circular
              indeterminate
              color="grey lighten-5"
          ></v-progress-circular>
        </v-row>
      </template>
    </v-img>
    <v-alert
        type="success"
    >{{ message }}
    </v-alert>

    <v-fade-transition mode="out-in">
      <v-row justify="center" align="center" class="justify-center align-center">
        <v-col cols="6">
          <v-card class="d-flex justify-center mb-12">
            <v-card-title class="text-h6">
              <v-spacer></v-spacer>
              <div class="purple darken-2 text-center">
              <span class="white--text text-center">
                Turno
              </span>
              </div>
              <v-spacer></v-spacer>
            </v-card-title>
          </v-card>
        </v-col>
        <v-col cols="6">
          <v-card class="d-flex justify-center mb-12">

            <v-card-title class="text-h6">
              <v-spacer></v-spacer>
              <div class="purple darken-2 text-center">
              <span class="white--text text-center">
                Oficina
              </span>
              </div>
              <v-spacer></v-spacer>
            </v-card-title>
          </v-card>
        </v-col>
        <v-col cols="6">
          <v-card height="150"
                  color="#385F73"
                  dark
                  :class="radius"
                  class="d-flex justify-center p-10 transition-swing"
                  elevation="12"
                  width="100%"
                  outlined
                  tile
          >
            <v-card-title>
              <v-spacer></v-spacer>

              <h1 v-text="title" class="display-5 white--text text-center d-flex align-center"></h1>

              <v-spacer></v-spacer>


            </v-card-title>

      <v-card-text>
        <slot></slot>
      </v-card-text>
    </v-card>
        </v-col>
        <v-col cols="6">
          <v-card height="150"
              color="#385F73"
              dark
              :class="radius"
              class="d-flex justify-center py-12 transition-swing"
              elevation="12"
              width="100%"
              outlined
              tile
          >
            <v-card-title>
              <v-spacer></v-spacer>

              <h2 v-text="lugar" class="text-md-h3 white--text text-center d-flex align-center"></h2>

              <v-spacer></v-spacer>


            </v-card-title>

            <v-card-text>
              <slot></slot>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-fade-transition>
  </v-container>
</template>

<script>
export default {
  name: 'Home',
  props: {},
  data: () => ({
    message: 'Turnos MPF MENDOZA',
    title: 'A001',
    lugar: 'Oficina 5',
    width: '100%',
    radius: 'rounded-xl',
    center_al: 'text-center'
  }),
}
</script>
<style>
.display-4{
  margin: 2em !important;
}
</style>
