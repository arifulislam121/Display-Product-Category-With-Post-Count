<ul id="tabactive">
			
			<?php
			
			$product_categories = get_terms( 'product_cat', $args );

			foreach( $product_categories as $cat )  { 
				
			   
			   echo '<li>
					<button>
						<span>'.$cat->name.'</span>
						<span>'.$cat->count.'</span>
					</button>
				</li>';
			}
		?>
