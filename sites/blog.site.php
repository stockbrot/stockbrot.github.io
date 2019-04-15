<section>
  <v-container grid-list-xl>
    <v-layout column justify-center>
      <div v-for="post in blog">
        <v-flex d-flex xs12>
          <v-card class="elevation-5">
            <v-card class="elevation-5">
              <v-img
                :src="post.img"
                aspect-ratio="2.75"
              ></v-img>
            </v-card>

            <v-card-title primary-title>
              <div>
                <h3 class="headline mb-0 orange--text">{{ post.cardTitle }}</h3>
                <div>{{ post.subheader }}</div>
              </div>
            </v-card-title>

            <v-card-actions>
              <v-btn flat @click.stop="post.dialog = true" color="orange">Read More</v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
      </div>
    </v-layout>
  </v-container>
</section>

<div v-for="post in blog">
  <v-dialog
    v-model="post.dialog"
    max-width="290"
    fullscreen
    transition="dialog-bottom-transition"
  >
    <v-card>
      <v-card-title class="headline">
        <v-btn icon @click="post.dialog = false"><v-icon>fa-times-circle</v-icon></v-btn>
        <v-spacer></v-spacer>
        <span class="orange--text">{{ post.dialogTitle }}</span>
        <v-spacer></v-spacer>
      </v-card-title>

      <v-layout>
        <v-flex xs8>
          <v-card-text>
            <span class="main" v-html="post.dialogText"></span>
          </v-card-text>
        </v-flex>
        <v-flex xs4>
          <v-img
            :src="post.img"
            class="elevation-5"
          ></v-img>
        </v-flex>
      </v-layout>
      <v-layout>
        <v-flex xs4>
          <v-img
            :src="post.img"
            class="elevation-5"
          ></v-img>
        </v-flex>
        <v-flex xs8>
          <v-card-text>
            <span class="main" v-html="post.dialogText"></span>
          </v-card-text>
        </v-flex>
      </v-layout>
    </v-card>
  </v-dialog>
</div>
