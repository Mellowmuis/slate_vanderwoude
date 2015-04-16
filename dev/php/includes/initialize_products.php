<?php 


class ProductInitializer {
	function __construct(){
	}	

	public function initializeAll(){
		$this->createPages();
		
		//$p = $this->get_page_by_name('30_360_0019');
	//	echo 'p: '.$p;
//			exit;
	}
	public function parsePagesFromXml($file){
		$xml = simplexml_load_file($file);
		$ret = array();
		foreach($xml->lamp as $l){
			$ret[] = array(
				'title'=> (string) $l->title,
				'slug'=> str_replace('.', '_', (string) $l->id),
				'name'=>(string) $l->title,
				'image'=>(string) $l->url,
				'category'=>(string) $l->category,
				'serie'=>(string) $l->serie
			);
		}
		echo 'count: '.count($ret);
//		print_r($ret);
		return $ret;
	}


	public function createPages(){
		$pages = $this->parsePagesFromXml('/var/www/wp-content/themes/slate-0.3.1_vanderwoude/includes/all_products.xml');
		foreach($pages as $page){
			$title = $page['title'];
			$slug = $page['slug'];
			$content = $page['name'];
			$image = $page['image'];
			$cat = $page['category'];
			$series = $page['serie'];
			$this->createPage($title,$slug,$content,$image, $cat ,$series);
		}
	}

	private function get_page_by_name($pagename){
		$pages = get_posts(array(
			'post_type'=>'producten',
			'numberposts'=>10000
		));
		foreach ($pages as $page) {
			//echo $pagename.'< --- >'.$page->post_name.'<br/>'; 
			if ($page->post_name == $pagename) {
				return true;
			}
		}

		return false;
	}


	private function uploadRemoteImageAndAttach($image_url, $parent_id){
		$image = $image_url;

		$get = wp_remote_get( $image );

		$type = wp_remote_retrieve_header( $get, 'content-type' );

		if (!$type)
			return false;

		$mirror = wp_upload_bits( basename( $image ), '', wp_remote_retrieve_body( $get ) );

		$attachment = array(
			'post_title'=> basename( $image ),
			'post_mime_type' => $type
		);

		$attach_id = wp_insert_attachment( $attachment, $mirror['file'], $parent_id );

		require_once(ABSPATH . 'wp-admin/includes/image.php');

		$attach_data = wp_generate_attachment_metadata( $attach_id, $mirror['file'] );

		wp_update_attachment_metadata( $attach_id, $attach_data );

		return $attach_id;

	}
	

	
	
	/** 
	 * Creates page if not exists by slug 
	 */
	public function createPage($title, $slug, $content, $image, $series){
		$p = $this->get_page_by_name($slug);
		if(!$p) { //doesnt exist yet
			//echo 'false ....';
			$page = array(
				  'comment_status' => 'closed',
				  'ping_status' => 'closed',
				  'post_content' => $content,
				  'post_name' => $slug,
				  'post_status' => 'publish',
				  'post_title' => $title,
				  'post_type' => 'producten'
			);  
			
			$inserted_id = wp_insert_post($page);


			//upload attached post

			$filename = $image;	
		    $attach_id = $this->uploadRemoteImageAndAttach($image, $inserted_id);

			update_post_meta($inserted_id, '_thumbnail_id', $attach_id);

			$seriesMap = array(
				'Modern' => 18,
				'Grand Café' => 17,
				'Classic' => 16,
				'Brasserie' => 15,
				'Pub'=> 14
			);
			//set category and series taxonomy terms
			$rst= wp_set_object_terms($inserted_id, intval($seriesMap[$series]), 'series');
			print_r($rst);
		}
	}
}

?>
