<?php

/* Template Name: Locations Template */

get_header();

  while(have_posts()) {
    the_post(); ?>

    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>DON'T FORGET TO REPLACE ME LATER</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">

      <?php

        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) { ?>

          <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
          </div>

        <?php }
      ?>

      <?php

      $testArray = get_pages([
        'child_of' => get_the_ID()
      ]);

      if ($theParent or $testArray) { ?>
        <div class="page-links">
          <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
          <ul class="min-list">
            <?php

              if ($theParent) {
                $findChildrenOf = $theParent;
              } else {
                $findChildrenOf = get_the_ID();
              }

              wp_list_pages([
                'title_li' => NULL,
                'child_of' => $findChildrenOf,
                'sort_column' => 'menu_order'
              ]);
            ?>
          </ul>
        </div>
      <?php } ?>

      <!-- Embed Leaflet Map -->
      <div class="locations-map">
        <div id="mapid"></div>
      </div>

      <script>

        var myMap = L.map('mapid').setView([51.505, -0.09], 1.5);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          maxZoom: 18,
          id: 'mapbox/streets-v11',
          tileSize: 512,
          zoomOffset: -1,
          accessToken: 'pk.eyJ1Ijoia2NyaXN0aW4iLCJhIjoiY2tjbWRhdnU4MDA3ajJxczU1c3R4bnFvOCJ9.qff2OTptzGRgUTQnZ4HUpA'
        }).addTo(myMap);

        var norcal = L.marker([37.85456, -122.28652]).bindPopup("<b>SRGI NorCal</b>"),
            socal = L.marker([33.77969, -118.17616]).bindPopup("<b>SRGI SoCal</b>"),
            eastCoast = L.marker([40.7094, -74.00735]).bindPopup("<b>SRGI East Coast</b>"),
            bangkok = L.marker([13.75527, 100.45531]).bindPopup("<b>SRGI Bangkok</b>"),
            cairo =  L.marker([30.05336, 31.25836]).bindPopup("<b>SRGI Cairo</b>"),
            dublin = L.marker([53.33411, -6.26145]).bindPopup("<b>SRGI Dublin</b>"),
            uk = L.marker([53.47511, -2.24311]).bindPopup("<b>SRGI Manchester</b>");

        var cities = L.layerGroup([norcal, socal, eastCoast, bangkok, cairo, dublin, uk]);

        var url = "<?php global $post; echo $post_slug = $post->post_name; ?>"

        switch(url) {
          case "northern-california":
            console.log('Northern California');
            norcal.addTo(myMap);
            myMap.flyTo([37.85456, -122.28652], 13);
            break;

          case "southern-california":
            console.log('Southern California');
            socal.addTo(myMap);
            myMap.flyTo([33.77969, -118.17616], 13);
            break;

          case "east-coast":
            console.log('East Coast');
            eastCoast.addTo(myMap);
            myMap.flyTo([40.7094, -74.00735], 13);
            break;

          case "bangkok":
            console.log('Bangkok');
            bangkok.addTo(myMap);
            myMap.flyTo([13.75527, 100.45531], 13);
            break;

          case "cairo":
            console.log('Cairo');
            cairo.addTo(myMap);
            myMap.flyTo([30.05336, 31.25836], 13);
            break;

          case "dublin":
            console.log('Dublin');
            dublin.addTo(myMap);
            myMap.flyTo([53.33411, -6.26145], 13);
            break;

          case "manchester":
            console.log('Manchester');
            uk.addTo(myMap);
            myMap.flyTo([53.47511, -2.24311], 13);
            break;

          default:
            console.log('Locations');
            cities.addTo(myMap);
            myMap.flyTo([51.505, -0.09], 1.5);
        }

      </script>

      <div class="generic-content">
        <?php the_content(); ?>
      </div>

    </div>
  <?php }

  get_footer();

?>
