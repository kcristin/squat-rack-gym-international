<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/pull-machine.jpg'); ?>);"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Welcome!</h1>
    <h2 class="headline headline--medium">We want <strong>you</strong> to join the <strong><em>team</em></strong>.</h2>
    <h3 class="headline headline--small">Will <strong>you</strong> take your first steps towards <strong>greatness</strong>?</h3>
    <a href="<?php echo site_url('/class-schedule'); ?>" class="btn btn--large btn--blue">Find Your Class</a>
  </div>
</div>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

      <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month">Mar</span>
          <span class="event-summary__day">17</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Enter the Dragon</a></h5>
          <p>Grand Master Kyle will be holding a tournament of strength, speed and combat for his birthday. All ages are invited to compete for the ultimate prize.<a href="#" class="nu gray">Learn more</a></p>
        </div>
      </div>
      <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month">May</span>
          <span class="event-summary__day">20</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Team Picnic Party</a></h5>
          <p>Live music, a taco truck, protein shakes and more can found in our third annual team picnic day. <a href="#" class="nu gray">Learn more</a></p>
        </div>
      </div>

      <p class="t-center no-margin"><a href="<?php echo site_url('/events'); ?>" class="btn btn--blue">View All Events</a></p>
    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="#">
          <span class="event-summary__month">Jan</span>
          <span class="event-summary__day">20</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best Gym</a></h5>
          <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
        </div>
      </div>
      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="#">
          <span class="event-summary__month">Feb</span>
          <span class="event-summary__day">04</span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Conor McGregor's Cousin Once Visited</a></h5>
          <p>A close relative of Conor McGregor took a class here and had this to say. <a href="#" class="nu gray">Read more</a></p>
        </div>
      </div>

      <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
  </div>
</div>

<div class="hero-slider">
  <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
      <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/group-lift.jpg'); ?>);">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">Free First Month</h2>
            <p class="t-center">All students have a free first month for all group lifting classes.</p>
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/muay-thai.jpg'); ?>);">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">Maximize Your Potential</h2>
            <p class="t-center">Sign up for private lessons to personalize your workout experience.</p>
            <p class="t-center no-margin"><a href="<?php echo site_url('/personal-fitness'); ?>" class="btn btn--blue">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/group-yoga.jpg'); ?>);">
        <div class="hero-slider__interior container">
          <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">And Breathe ...</h2>
            <p class="t-center">Start or end your day with our world class yoga instructors.</p>
            <p class="t-center no-margin"><a href="<?php echo site_url('/yoga'); ?>" class="btn btn--blue">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
  </div>
</div>

<?php get_footer();

?>
