<?php

add_action( 'init', 'of_options' );

if ( ! function_exists( 'of_options' ) ) {
	function of_options() {
		//Access the WordPress Categories via an Array
		$of_categories     = array();
		$of_categories_obj = get_categories( 'hide_empty=0' );
		foreach ( $of_categories_obj as $of_cat ) {
			$of_categories[ $of_cat->cat_ID ] = $of_cat->cat_name;
		}
		$categories_tmp 	= array_unshift($of_categories, "选择一个分类:");

		//Access the WordPress Pages via an Array
		$of_pages      = array();
		$of_pages_obj  = get_pages( 'sort_column=post_parent,menu_order' );
		$of_pages['0'] = '选择一个页面:';
		foreach ( $of_pages_obj as $of_page ) {
			$of_pages[ $of_page->ID ] = $of_page->post_title;
		}

		// Set the Options Array
		global $of_options;
		$of_options = array();

		$url = ADMIN_DIR . 'assets/images/';


$of_options[] = array( 	"name" 		=> "Global settings",
	                    "desc" 		=> "全局设置",
						"type" 		=> "heading",
);


$of_options[] = array( 	"name" 		=> "页眉脚本",
						"desc" 		=> "添加HEAD标签中自定义页眉脚本. 您必需让SCRIPT标签包裹脚本.",
						"id" 		=> "html_scripts_header",
						"std" 		=> "",
						"type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "页脚脚本",
						"desc" 		=> "这里可放谷歌分享代码或其它js代码",
						"id" 		=> "html_scripts_footer",
						"std" 		=> "",
						"type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "Flatsome 2.0 内容支持",
						"id" 		=> "flatsome_fallback",
						"desc"      => "支持Flatsome 2.0. 禁用加速站点.",
						"std" 		=> 1,
						"type" 		=> "checkbox"
);

$of_options[] = array( 	"name" 		=> "Custom CSS",
                       "desc" 		=> "自定义CSS",
						"type" 		=> "heading"
);


$of_options[] = array( 	"name" 		=> "所有屏幕",
						"desc" 		=> "在这里添加自定义CSS",
						"id" 		=> "html_custom_css",
						"std" 		=> "",
						"type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "平板及以下",
						"desc" 		=> "添加平板及以下的CSS",
						"id" 		=> "html_custom_css_tablet",
						"std" 		=> "",
						"type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "仅手机",
						"desc" 		=> "添加手机CSS",
						"id" 		=> "html_custom_css_mobile",
						"std" 		=> "",
						"type" 		=> "textarea"
);


$of_options[] = array( 	"name" 		=> "Site loader",
	                    "desc" 		=> "站点加载",
						"type" 		=> "heading",
);

$of_options[] = array( 	"name" 		=> "站点加载",
						"id" 		=> "site_loader",
						"desc"      => "启用站点加载图标.",
						"type" 		=> "select",
						"std" 		=> 0,
						"options" => array(
							0 => "禁用",
							'home' => "首页启用",
							'all' => "所有页脚启用"
 						),
);

$of_options[] = array(
	"name" 		=> "颜色",
	"id" 		=> "site_loader_color",
	"type" 		=> "select",
	"std" 		=> 'light',
	"options" => array(
	'light' => "浅色",
	'dark' => "深色"
	),
);

$of_options[] = array(
	"name" 		=> "背景色",
	"id" 		=> "site_loader_bg",
	"std" 		=> "",
	"type" 		=> "color"
);



$of_options[] = array( 	"name" 		=> "Site Search",
	                    "desc" 		=> "站点搜索",
						"type" 		=> "heading",
);

$of_options[] = array( 	"name" 		=> "实时搜索",
						"id" 		=> "live_search",
						"desc"      => "产品和页面启用实时搜索.",
						"std" 		=> 1,
						"type" 		=> "checkbox"
);

$of_options[] = array(  "name" => "搜索预占",
            "desc"    => "修改搜索字段预占符",
            "id"    => "search_placeholder",
            "type"    => "text"
);

if(is_woocommerce_activated()) {
	$of_options[] = array(
              "name" 		=> "在搜索结果中显示博客和页面.",
							"id" 		=> "search_result",
							"desc"      => "在所有页面中显示博客和页面",
							"std" 		=> 1,
							"type" 		=> "checkbox"
	);
  $of_options[] = array(  "name" => "搜索SKU",
            "desc"    => "在实时搜索通过SKU.",
            "id"    => "search_by_sku",
            "std"     => 0,
            "type"    => "checkbox"
  );
}

    // UX Builder
    $of_options[] = array(
      "name" => "UX Builder",
      "desc" => "UX 构建器",
      "type" => "heading",
    );

    $of_options[] = array(
      "name" => "Flatsome Studio (BETA)",
      "id"   => "flatsome_studio",
      "desc" => "开启访问Flatsome Studio 测试版",
      "std"  => 1,
      "type" => "checkbox"
    );

    // Lazy loading
		$of_options[] = array(
			"name" => "延迟加载",
			"type" => "heading",
		);

		$of_options[] = array(
			"name" => "延迟加载谷歌字体",
			"id"   => "lazy_load_google_fonts",
			"desc" => "启用延迟加载谷歌字体",
			"std"  => 1,
			"type" => "checkbox"
		);

		$of_options[] = array(
			"name" => "延迟加载图标",
			"id"   => "lazy_load_icons",
            "desc"      => "启用延迟加载图标",
			"std"  => 0,
			"type" => "checkbox"
		);

$of_options[] = array( 	"name" 		=> "延迟加载横幅和区背景",
						"id" 		=> "lazy_load_backgrounds",
						"desc"      => "启用延迟加载横幅和区背景.",
						"std" 		=> 1,
						"type" 		=> "checkbox"
);

$of_options[] = array( 	"name" 		=> "延迟建站图像",
						"id" 		=> "lazy_load_images",
						"desc"      => "启用延迟加载图像. <strong>谨慎使用! 如果存在插件兼容问题禁用.</strong>",
						"std" 		=> 0,
						"type" 		=> "checkbox"
);


$of_options[] = array( 	"name" 		=> "Google APIs",
	                     "desc" 		=> "谷歌APIs",
						"type" 		=> "heading",
);


$of_options[] = array(
	"name" 		=> "谷歌地图API",
	"desc" 		=> "输入谷歌地图API启用谷歌地图. 您可以在这里生成: <a target='_blank' href='https://developers.google.com/maps/documentation/javascript/'>Google Maps API</a>",
	"id" 		=> "google_map_api",
	"std"       => "",
	"type" 		=> "text"
);

$of_options[] = array( 	"name" 		=> "Maintenance Mode",
	                    "desc" 		=> "维护模式",
						"type" 		=> "heading",
);

$of_options[] = array( 	"name" 		=> "维护模式",
						"id" 		=> "maintenance_mode",
						"desc"      => "启用维护模式，除了管理员.",
						"std" 		=> 0,
						"type" 		=> "checkbox"
);

		$of_options[] = array(
			"name" => "管理通知",
			"id"   => "maintenance_mode_admin_notice",
			"desc" => "在维护模式启用时显示管理员通知.",
			"std"  => 1,
			"type" => "checkbox"
		);

$of_options[] = array(
				"name"  => "定义维护模式",
				"id" => "maintenance_mode_page",
				"desc" =>  "设置自定义维护模式页面. 对访问者仅这个页面可见.",
				"std" 		=> 0,
				"type" 		=> "select",
				"options" => $of_pages
);


$of_options[] = array( 	"name" 		=> "维护模式文本",
						"desc" 		=> "这个文本将是可见的，对于用户访问维护屏幕时.",
						"id" 		=> "maintenance_mode_text",
						"std"       => "Please check back soon..",
						"type" 		=> "text"
);


$of_options[] = array( 	"name" 		=> "Custom Fonts",
	                    "desc" 		=> "自定义字体",
						"type" 		=> "heading",
);


$of_options[] = array( 	"name" 		=> "添加自定义字体",
						"type" 		=> "info",
						"desc" => '<p style="font-size:16px">我们正采用新的模式添加自定义字体. 指南: <a href="//uxthemes.helpscoutdocs.com/article/224-add-custom-fonts-to-flatsome" target="_blank">添加自定义字体</p></a>'
);

		if ( is_woocommerce_activated() ) {

$of_options[] = array( 	"name" 		=> "WooCommerce",
	                    "desc" 		=> "WooCommerce",
						"type" 		=> "heading",
);

$of_options[] = array( 	"name" 		=> "禁用全局评价",
						"id" 		=> "disable_reviews",
						"desc"      => "全局禁用评价.",
						"std" 		=> 0,
						"type" 		=> "checkbox"
);

$of_options[] = array( 	"name" 		=> "商店页眉",
						"desc" 		=> "输入主商店页眉顶部的HTML，允许简码.",
						"id" 		=> "html_shop_page",
						"std" 		=> "",
						"type" 		=> "textarea"
);

$of_options[] = array( 	"name"  => "附加全局选项卡/区标题",
				"id" 		=> "tab_title",
				"std" 		=> "",
				"type" 		=> "text"
);

$of_options[] = array( 	"name" 		=> "附加全局选项卡/区内容",
				"id" 		=> "tab_content",
				"std" 		=> "",
				"type" 		=> "textarea",
				"desc"      => "添加附加选项卡内容... 如购买指南等."
);


$of_options[] = array( 	"name" 		=> "添加到购物车按钮前HTML(全局)",
						"desc" 		=> "支持html和简码.",
						"id" 		=> "html_before_add_to_cart",
						"std" 		=> " ",
						"type" 		=> "textarea"
);


$of_options[] = array( 	"name" 		=> "添加到购物车按钮后HTML",
						"desc" 		=> "支持html和简码.",
						"id" 		=> "html_after_add_to_cart",
						"std" 		=> "",
						"type" 		=> "textarea"
);

$of_options[] = array( 	"name" 		=> "感谢页眉内容/脚本",
						"desc" 		=> "输入感谢页面脚本或自定义HTML内容",
						"id" 		=> "html_thank_you",
						"std" 		=> "",
						"type" 		=> "textarea"
);


$of_options[] = array( 	"name" 		=> "Catalog Mode",
	                    "desc" 		=> "目录模式",
						"type" 		=> "heading",
);


$of_options[] = array( 	"name" 		=> "启用目录模式",
						"id" 		=> "catalog_mode",
						"desc"      => "启用目录模式. 这将关闭添加到购物车按钮/结算和购物车.",
						"std" 		=> 0,
						"type" 		=> "checkbox"
);



$of_options[] = array( 	"name" 		=> "关闭价格",
						"id" 		=> "catalog_mode_prices",
						"desc"      => "选择在目录页和产品页禁用价格.",
						"std" 		=> 0,
						"type" 		=> "checkbox"
);


$of_options[] = array( 	"name" => "购物车 / 帐户替代 (页眉)",
				"id" 		=> "catalog_mode_header",
				"std" 		=> "",
				"type" 		=> "textarea",
				"desc"      => "支持简码如搜索盒 <b>[search]</b>.社会化图标: <b>[follow weibo='http://' tqq='http://' email='post@email.com' renren='http://']</b>"
);

$of_options[] = array( 	"name" => "添加到购物车替代 - 产品页",
				"id" 		=> "catalog_mode_product",
				"std" 		=> "",
				"type" 		=> "textarea",
				"desc"      => "输入联系信息或咨询表单简码."
);

$of_options[] = array( 	"name" => "添加到购物车替代 - 产品快速查看",
				"id" 		=> "catalog_mode_lightbox",
				"std" 		=> "",
				"type" 		=> "textarea",
				"desc"      => "输入快速查看显示的文本"
);
}

// Portfolio
$of_options[] = array( 	"name" 		=> "Portfolio",
	                    "desc" 		=> "作品",
						"type" 		=> "heading",
);

$of_options[] = array( 	"name" 		=> "启用作品",
						"id" 		=> "fl_portfolio",
						"desc"      => "启用作品",
						"std" 		=> 1,
						"type" 		=> "checkbox"
);

// Integrations
$of_options[] = array( 	"name" 		=> "Integrations",
	                    "desc" 		=> "整合",
						"type" 		=> "heading",
);

$of_options[] = array( 	"name" 		=> "",
						"type" 		=> "info",
						"desc" => '<p style="font-size:14px">整合的插件激活将会在这里显示.</p>'
);

if(function_exists('ubermenu')){
	$of_options[] = array(
		"name" 		=> "Ubermenu",
		"id" 		=> "flatsome_uber_menu",
		"desc"      => "启用全宽UberMenu. 通过使用UberMenu选项可以插件在任何地方.",
		"std" 		=> 1,
		"type" 		=> "checkbox"
	);
}

// Backup Options
$of_options[] = array( 	"name" 		=> "Backup and Import",
	                    "desc" 		=> "备份和导入",
						"type" 		=> "heading",
				);

$of_options[] = array( 	"name" 		=> "备份和恢复选项",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> '您可以使用下面的两个按钮备份当前选项，用于后续恢复。这对于实验选项而以便后面恢复是有帮助的。',
				);

$of_options[] = array( 	"name" 		=> "转移主题选项数据",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> '您可以通过备份的选项粘贴到这里在不同的站点应用相同的选项，例如进行另一个站点的按钮。要导入，把备份的选项粘贴到这里，然后点导入选项。',
);

	} // End function: of_options()
} // End chack if function exists: of_options()
