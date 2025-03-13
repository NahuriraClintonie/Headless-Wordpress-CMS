<?php
$ourContext = array("showSkyColor" => false, "showGrassColor" => false, "attributes" => $attributes);
	

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div class="ourboilerplate-frontend" data-wp-interactive="bradsboilerplate"
 <?php echo wp_interactivity_data_wp_context( $ourContext ); ?>
 >
	<p>
	<button data-wp-on--click="actions.toggleSkyColor">Toggle Sky Color</button>
	<span data-wp-bind--hidden="!context.showSkyColor"><?php echo $attributes['skyColor'];?></span>
	</p>
	<p>
	<button data-wp-on--click="actions.toggleGrassColor">Toggle view Grass Color</button>
	<span data-wp-bind--hidden="!context.showGrassColor"><?php echo $attributes['grassColor'];?></span>
</p>
	<p>
		<button data-wp-on--click="actions.accessExample"> How to access attributes from Js inside of function </button>
    </p>
	<p >
		This ias just an example of using interactivity APIs
       <strong data-wp-text="context.attributes.grassColor"></strong>
		</p>
</div>

<div data-wp-interactive="create-block">
	<button data-wp-on--click="actions.test">Click me</button>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'Aibosdynamicblock – hello from a dynamic block!!!!!!!!!!!!!!!', 'aibosdynamicblock' ); ?>
</p>

</div>

<div
  data-wp-interactive='wpmovies'
  <?php echo wp_interactivity_data_wp_context( array( 'isOpen' => true ) ); ?>
>
  <button
    data-wp-on--click="actions.toggle"
    data-wp-bind--aria-expanded="context.isOpen"
    aria-controls="p-1"
  >
    Toggle
  </button>

  <p id="p-1" data-wp-bind--hidden="!context.isOpen">
    This element is now visible!
  </p>
</div>