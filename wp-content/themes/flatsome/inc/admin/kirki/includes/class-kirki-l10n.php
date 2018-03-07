<?php
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

if ( ! class_exists( 'Kirki_l10n' ) ) {

	/**
	 * Handles translations
	 */
	class Kirki_l10n {

		/**
		 * The plugin textdomain
		 *
		 * @access protected
		 * @var string
		 */
		protected $textdomain = 'kirki';

		/**
		 * The class constructor.
		 * Adds actions & filters to handle the rest of the methods.
		 *
		 * @access public
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 * Load the plugin textdomain
		 *
		 * @access public
		 */
		public function load_textdomain() {

			if ( null !== $this->get_path() ) {
				load_textdomain( $this->textdomain, $this->get_path() );
			}
			load_plugin_textdomain( $this->textdomain, false, Kirki::$path . '/languages' );

		}

		/**
		 * Gets the path to a translation file.
		 *
		 * @access protected
		 * @return string Absolute path to the translation file.
		 */
		protected function get_path() {
			$path_found = false;
			$found_path = null;
			foreach ( $this->get_paths() as $path ) {
				if ( $path_found ) {
					continue;
				}
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					$path_found = true;
					$found_path = $path;
				}
			}

			return $found_path;

		}

		/**
		 * Returns an array of paths where translation files may be located.
		 *
		 * @access protected
		 * @return array
		 */
		protected function get_paths() {

			return array(
				WP_LANG_DIR . '/' . $this->textdomain . '-' . get_locale() . '.mo',
				Kirki::$path . '/languages/' . $this->textdomain . '-' . get_locale() . '.mo',
			);

		}

		/**
		 * Shortcut method to get the translation strings
		 *
		 * @static
		 * @access public
		 * @param string $config_id The config ID. See Kirki_Config.
		 * @return array
		 */
		public static function get_strings( $config_id = 'global' ) {

			$translation_strings = array(
				'background-color'      => esc_attr__( 'Background Color', 'flatsome-admin' ),
				'background-image'      => esc_attr__( 'Background Image', 'flatsome-admin' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'flatsome-admin' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'flatsome-admin' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'flatsome-admin' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'flatsome-admin' ),
				'inherit'               => esc_attr__( 'Inherit', 'flatsome-admin' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'flatsome-admin' ),
				'cover'                 => esc_attr__( 'Cover', 'flatsome-admin' ),
				'contain'               => esc_attr__( 'Contain', 'flatsome-admin' ),
				'background-size'       => esc_attr__( 'Background Size', 'flatsome-admin' ),
				'fixed'                 => esc_attr__( 'Fixed', 'flatsome-admin' ),
				'scroll'                => esc_attr__( 'Scroll', 'flatsome-admin' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'flatsome-admin' ),
				'left-top'              => esc_attr__( 'Left Top', 'flatsome-admin' ),
				'left-center'           => esc_attr__( 'Left Center', 'flatsome-admin' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'flatsome-admin' ),
				'right-top'             => esc_attr__( 'Right Top', 'flatsome-admin' ),
				'right-center'          => esc_attr__( 'Right Center', 'flatsome-admin' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'flatsome-admin' ),
				'center-top'            => esc_attr__( 'Center Top', 'flatsome-admin' ),
				'center-center'         => esc_attr__( 'Center Center', 'flatsome-admin' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'flatsome-admin' ),
				'background-position'   => esc_attr__( 'Background Position', 'flatsome-admin' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'flatsome-admin' ),
				'on'                    => esc_attr__( 'ON', 'flatsome-admin' ),
				'off'                   => esc_attr__( 'OFF', 'flatsome-admin' ),
				'all'                   => esc_attr__( 'All', 'flatsome-admin' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'flatsome-admin' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'flatsome-admin' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'flatsome-admin' ),
				'greek'                 => esc_attr__( 'Greek', 'flatsome-admin' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'flatsome-admin' ),
				'khmer'                 => esc_attr__( 'Khmer', 'flatsome-admin' ),
				'latin'                 => esc_attr__( 'Latin', 'flatsome-admin' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'flatsome-admin' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'flatsome-admin' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'flatsome-admin' ),
				'arabic'                => esc_attr__( 'Arabic', 'flatsome-admin' ),
				'bengali'               => esc_attr__( 'Bengali', 'flatsome-admin' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'flatsome-admin' ),
				'tamil'                 => esc_attr__( 'Tamil', 'flatsome-admin' ),
				'telugu'                => esc_attr__( 'Telugu', 'flatsome-admin' ),
				'thai'                  => esc_attr__( 'Thai', 'flatsome-admin' ),
				'serif'                 => _x( 'Serif', 'font style', 'flatsome-admin' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'flatsome-admin' ),
				'monospace'             => _x( 'Monospace', 'font style', 'flatsome-admin' ),
				'lato-yahei'             => _x( 'Lato Yahei', 'font style', 'flatsome-admin' ),
				'raleway-yahei'             => _x( 'Raleway Yahei', 'font style', 'flatsome-admin' ),
				'poppins-yahei'             => _x( 'Poppins Yahei', 'font style', 'flatsome-admin' ),
				'montserrat-yahei'             => _x( 'Montserrat Yahei', 'font style', 'flatsome-admin' ),
				'josefin-slab-yahei'             => _x( 'Josefin Slab Yahei', 'font style', 'flatsome-admin' ),
				'microsoft-yahei'             => _x( 'Microsoft Yahei', 'font style', 'flatsome-admin' ),
				'font-family'           => esc_attr__( 'Font Family', 'flatsome-admin' ),
				'font-size'             => esc_attr__( 'Font Size', 'flatsome-admin' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'flatsome-admin' ),
				'line-height'           => esc_attr__( 'Line Height', 'flatsome-admin' ),
				'font-style'            => esc_attr__( 'Font Style', 'flatsome-admin' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'flatsome-admin' ),
				'top'                   => esc_attr__( 'Top', 'flatsome-admin' ),
				'bottom'                => esc_attr__( 'Bottom', 'flatsome-admin' ),
				'left'                  => esc_attr__( 'Left', 'flatsome-admin' ),
				'right'                 => esc_attr__( 'Right', 'flatsome-admin' ),
				'center'                => esc_attr__( 'Center', 'flatsome-admin' ),
				'justify'               => esc_attr__( 'Justify', 'flatsome-admin' ),
				'color'                 => esc_attr__( 'Color', 'flatsome-admin' ),
				'add-image'             => esc_attr__( 'Add Image', 'flatsome-admin' ),
				'change-image'          => esc_attr__( 'Change Image', 'flatsome-admin' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'flatsome-admin' ),
				'add-file'              => esc_attr__( 'Add File', 'flatsome-admin' ),
				'change-file'           => esc_attr__( 'Change File', 'flatsome-admin' ),
				'no-file-selected'      => esc_attr__( 'No File Selected', 'flatsome-admin' ),
				'remove'                => esc_attr__( 'Remove', 'flatsome-admin' ),
				'select-font-family'    => esc_attr__( 'Select a font-family', 'flatsome-admin' ),
				'variant'               => esc_attr__( 'Variant', 'flatsome-admin' ),
				'subsets'               => esc_attr__( 'Subset', 'flatsome-admin' ),
				'size'                  => esc_attr__( 'Size', 'flatsome-admin' ),
				'height'                => esc_attr__( 'Height', 'flatsome-admin' ),
				'spacing'               => esc_attr__( 'Spacing', 'flatsome-admin' ),
				'ultra-light'           => esc_attr__( 'Ultra-Light 100', 'flatsome-admin' ),
				'ultra-light-italic'    => esc_attr__( 'Ultra-Light 100 Italic', 'flatsome-admin' ),
				'light'                 => esc_attr__( 'Light 200', 'flatsome-admin' ),
				'light-italic'          => esc_attr__( 'Light 200 Italic', 'flatsome-admin' ),
				'book'                  => esc_attr__( 'Book 300', 'flatsome-admin' ),
				'book-italic'           => esc_attr__( 'Book 300 Italic', 'flatsome-admin' ),
				'regular'               => esc_attr__( 'Normal 400', 'flatsome-admin' ),
				'italic'                => esc_attr__( 'Normal 400 Italic', 'flatsome-admin' ),
				'medium'                => esc_attr__( 'Medium 500', 'flatsome-admin' ),
				'medium-italic'         => esc_attr__( 'Medium 500 Italic', 'flatsome-admin' ),
				'semi-bold'             => esc_attr__( 'Semi-Bold 600', 'flatsome-admin' ),
				'semi-bold-italic'      => esc_attr__( 'Semi-Bold 600 Italic', 'flatsome-admin' ),
				'bold'                  => esc_attr__( 'Bold 700', 'flatsome-admin' ),
				'bold-italic'           => esc_attr__( 'Bold 700 Italic', 'flatsome-admin' ),
				'extra-bold'            => esc_attr__( 'Extra-Bold 800', 'flatsome-admin' ),
				'extra-bold-italic'     => esc_attr__( 'Extra-Bold 800 Italic', 'flatsome-admin' ),
				'ultra-bold'            => esc_attr__( 'Ultra-Bold 900', 'flatsome-admin' ),
				'ultra-bold-italic'     => esc_attr__( 'Ultra-Bold 900 Italic', 'flatsome-admin' ),
				'invalid-value'         => esc_attr__( 'Invalid Value', 'flatsome-admin' ),
				'add-new'           	=> esc_attr__( 'Add new', 'flatsome-admin' ),
				'row'           		=> esc_attr__( 'row', 'flatsome-admin' ),
				'limit-rows'            => esc_attr__( 'Limit: %s rows', 'flatsome-admin' ),
				'open-section'          => esc_attr__( 'Press return or enter to open this section', 'flatsome-admin' ),
				'back'                  => esc_attr__( 'Back', 'flatsome-admin' ),
				'reset-with-icon'       => sprintf( esc_attr__( '%s Reset', 'flatsome-admin' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
				'text-align'            => esc_attr__( 'Text Align', 'flatsome-admin' ),
				'text-transform'        => esc_attr__( 'Text Transform', 'flatsome-admin' ),
				'none'                  => esc_attr__( 'None', 'flatsome-admin' ),
				'capitalize'            => esc_attr__( 'Capitalize', 'flatsome-admin' ),
				'uppercase'             => esc_attr__( 'Uppercase', 'flatsome-admin' ),
				'lowercase'             => esc_attr__( 'Lowercase', 'flatsome-admin' ),
				'initial'               => esc_attr__( 'Initial', 'flatsome-admin' ),
				'select-page'           => esc_attr__( 'Select a Page', 'flatsome-admin' ),
				'open-editor'           => esc_attr__( 'Open Editor', 'flatsome-admin' ),
				'close-editor'          => esc_attr__( 'Close Editor', 'flatsome-admin' ),
				'switch-editor'         => esc_attr__( 'Switch Editor', 'flatsome-admin' ),
				'hex-value'             => esc_attr__( 'Hex Value', 'flatsome-admin' ),
			);

			// Apply global changes from the kirki/config filter.
			// This is generally to be avoided.
			// It is ONLY provided here for backwards-compatibility reasons.
			// Please use the kirki/{$config_id}/l10n filter instead.
			$config = apply_filters( 'kirki/config', array() );
			if ( isset( $config['i18n'] ) ) {
				$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
			}

			// Apply l10n changes using the kirki/{$config_id}/l10n filter.
			return apply_filters( 'kirki/' . $config_id . '/l10n', $translation_strings );

		}
	}
}
