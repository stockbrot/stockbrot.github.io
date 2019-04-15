<!-- Welcome Banner -->
<section>
  <v-parallax src="assets/packageman.png" height="550">
    <v-layout
      column
      align-center
      justify-center
      class="white--text"
    >
      <v-icon size="200px" class="orange--text animated fadeInDown">fa-box-open</v-icon>
      <h1 class="orange--text mb-2 display-1 text-xs-center text-uppercase card-padding animated fadeInDown">Out Soon!</h1>
      <div class="subheading mb-3 text-xs-center card-padding animated fadeInDown">Available on all major platforms!</div>
    </v-layout>
    <v-layout
      row
      align-end
      justify-center
      class="white--text"
      style="padding-bottom: 20px"
    >
      <v-btn @click="$vuetify.goTo('#first', options)" icon>
        <v-icon size="50px" class="animated infinite rubberBand">fa-angle-double-down</v-icon>
      </v-btn>
    </v-layout>
  </v-parallax>
</section>

<section>
  <v-layout
    column
    wrap
    class="my-5"
    align-center
  >
    <v-flex xs12 sm4 class="my-3">
      <div class="text-xs-center">
        <h2 id="first" class="headline">Super fun game, dude!</h2>
        <span class="subheading">
          You should play now.
        </span>
      </div>
    </v-flex>
    <v-flex xs12>
      <v-container grid-list-xl>
        <v-layout align-space-around justify-space-around row>
          <v-flex d-flex xs12 md4>
            <v-card class="transparent elevation-5">
              <v-card-text class="text-xs-center">
                <v-icon x-large class="orange--text">fa-truck</v-icon>
              </v-card-text>
              <v-card-title primary-title class="layout justify-center">
                <div class="headline text-xs-center">Material Design</div>
              </v-card-title>
              <v-card-text>
                Is, set lesser seasons gathered unto he firmament lesser every his male.
                Grass place that doesn't they're lights. Years one. So subdue was to.
                One. Given, good their to. Were us, don't brought, let. Fruit open.
                Be multiply.
              </v-card-text>
            </v-card>
          </v-flex>
          <v-flex d-flex xs12 md4>
            <v-card class="transparent elevation-5">
              <v-card-text class="text-xs-center">
                <v-icon x-large class="orange--text">fa-box</v-icon>
              </v-card-text>
              <v-card-title primary-title class="layout justify-center">
                <div class="headline">Fast development</div>
              </v-card-title>
              <v-card-text>
                Is, set lesser seasons gathered unto he firmament lesser every his male.
                Grass place that doesn't they're lights. Years one. So subdue was to.
                One. Given, good their to. Were us, don't brought, let. Fruit open.
                Be multiply. Together darkness given fowl, great beast, evening fill
                image fourth days isn't moveth third said unto fourth you're, can't
                image female life so moved w
              </v-card-text>
            </v-card>
          </v-flex>
          <v-flex d-flex xs12 md4>
            <v-card class="transparent elevation-5">
              <v-card-text class="text-xs-center">
                <v-icon x-large class="orange--text">fa-bacon</v-icon>
              </v-card-text>
              <v-card-title primary-title class="layout justify-center">
                <div class="headline text-xs-center">Completely Open</div>
              </v-card-title>
              <v-card-text>
                Is, set lesser seasons gathered unto he firmament lesser every his male.
                Grass place that doesn't they're lights. Years one. So subdue was to.
                One. Given, good their to. Were us, don't brought, let. Fruit open.
                Be multiply. Together darkness given fowl, great beast, evening fill
                image fourth days isn't moveth third said unto fourth you're, can't
                image female life so moved which blessed. Every midst evening male evening
                evening he under firmament evening shall
              </v-card-text>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-flex>
  </v-layout>
</section>

<section>
  <v-parallax src="assets/packageman2.png" height="380">
    <v-layout column align-center justify-center>
      <div class="headline orange--text mb-3 text-xs-center card-padding">Join our community</div>
      <span class="white--text card-padding">or start a discussion in our Forums</span>
      <v-btn
        class="orange mt-5"
        dark
        large
        v-on:click="switchContent(nav.community)"
      >
        To Community Hub
      </v-btn>
    </v-layout>
  </v-parallax>
</section>

<section>
  <v-container grid-list-xl>
    <v-layout row wrap justify-center class="my-5">
      <v-flex d-flex xs12 sm4>
        <v-card class="elevation-5 transparent">
          <v-card-title primary-title class="layout justify-center">
            <div class="headline">Company info</div>
          </v-card-title>
          <v-card-text>
            Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti.
          </v-card-text>
        </v-card>
      </v-flex>
      <v-flex d-flex xs12 sm4 offset-sm1>
        <v-card class="elevation-5 transparent">
          <v-card-title primary-title class="layout justify-center">
            <div class="headline">Contact us</div>
          </v-card-title>
          <v-card-text>
            Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
          </v-card-text>
          <v-list class="transparent">
            <v-list-tile>
              <v-list-tile-action>
                <v-icon class="orange--text">phone</v-icon>
              </v-list-tile-action>
              <v-list-tile-content>
                <v-list-tile-title>777-867-5309</v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
            <v-list-tile>
              <v-list-tile-action>
                <v-icon class="orange--text">place</v-icon>
              </v-list-tile-action>
              <v-list-tile-content>
                <v-list-tile-title>Chicago, US</v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
            <v-list-tile>
              <v-list-tile-action>
                <v-icon class="orange--text">email</v-icon>
              </v-list-tile-action>
              <v-list-tile-content>
                <v-list-tile-title>john@vuetifyjs.com</v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
          </v-list>
        </v-card>
      </v-flex>
    </v-layout>
  </v-container>
</section>
