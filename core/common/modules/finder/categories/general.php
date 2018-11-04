<?php
namespace Elementor\Core\Common\Modules\Finder\Categories;

use Elementor\Core\Common\Modules\Finder\Base_Category;
use Elementor\Core\RoleManager\Role_Manager;
use Elementor\TemplateLibrary\Source_Local;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class General extends Base_Category {

	public function get_title() {
		return __( 'General', 'elementor' );
	}

	public function get_category_items( array $options = [] ) {
		return [
			'my-templates' => [
				'title' => _x( 'My Templates', 'Template Library', 'elementor' ),
				'icon' => 'library-save',
				'link' => admin_url( 'edit.php?post_type=' . Source_Local::CPT ),
				'keywords' => [ 'Template', 'Header', 'Footer', 'Single', 'Archive', 'Search', '404 Page' ],
			],
			'system-info' => [
				'title' => __( 'System Info', 'elementor' ),
				'icon' => 'info',
				'link' => admin_url( 'admin.php?page=elementor-system-info' ),
				'keywords' => [ 'System', 'Info', 'Environment', 'Elementor' ],
			],
			'role-manager' => [
				'title' => __( 'Role Manager', 'elementor' ),
				'icon' => 'person',
				'link' => Role_Manager::get_url(),
				'keywords' => [ 'Role', 'Manager', 'User', 'Elementor' ],
			],
			'knowledge-base' => [
				'title' => __( 'Knowledge Base', 'elementor' ),
				'link' => admin_url( 'admin.php?page=go_knowledge_base_site' ),
				'keywords' => [ 'Help', 'Knowledge', 'Docs', 'Elementor' ],
			],
		];
	}
}