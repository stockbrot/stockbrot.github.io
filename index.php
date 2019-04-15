<!DOCTYPE html>
<html>
  <head>
    <?php require 'includes/header.inc.php' ?>
  </head>
  <body>
   <div id="app">
     <v-app dark>

        <!-- Navigation -->
      <?php require 'includes/nav.inc.php' ?>

      <div class="main custom-font">
        <v-content>

          <!-- Landing Page -->
          <div v-if="nav.home.show">
            <?php require 'sites/main.site.php' ?>
          </div>

          <!-- About -->
          <div v-else-if="nav.about.show">
            <?php require 'sites/about.site.php' ?>
          </div>

          <!-- Blog -->
          <div v-else-if="nav.blog.show">
            <?php require 'sites/blog.site.php' ?>
          </div>

          <!-- Buy -->
          <div v-else-if="nav.buy.show">
            <?php require 'sites/buy.site.php' ?>
          </div>

          <!-- Community -->
          <div v-else-if="nav.community.show">
            <?php require 'sites/community.site.php' ?>
          </div>

          <?php require 'includes/footer.inc.php' ?>
        </v-content>
      </div>
    </v-app>
  </div>
  </body>
<?php require 'includes/scripts.inc.php' ?>
</html>
