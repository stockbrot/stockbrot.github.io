<v-layout row fixed>
  <v-toolbar
    flat
    fixed
    height="75px"
    color="orange"
    width="100%"
  >
  </v-toolbar>
  <v-toolbar fixed>
    <v-toolbar-title class="text-uppercase display-1 animated fadeInLeft">Package Man</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items>
      <template v-for="page in nav">
        <v-btn flat v-bind:class="{active: page.show, orange: page.show}" class="title" :disabled="page.show" v-on:click="switchContent(page)">{{ page.name }}</v-btn>
      </template>
    </v-toolbar-items>
  </v-toolbar>
</v-layout>