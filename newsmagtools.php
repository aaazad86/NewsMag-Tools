/**
 * Plugin Name
 *
 * @package           Primary Release @1.0.1
 * @author            Al Amin Azad
 * @copyright         2022 Bondhon IT
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       News Magazine Tools
 * Plugin URI:        https://bondhon.net/plugin-name
 * Description:       Various tool for anyonline newspaper.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Al Amin Azad
 * Author URI:        https://bondhon.net
 * Text Domain:       News-Mag-Tools
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */


/**
 * Activate the plugin.
 */
function newsmagtools-bondhon_activate() { 
    
}
register_activation_hook( __FILE__, 'newsmagtools-bondhon_activate' );


/**
 * Deactivation hook.
 */
function newsmagtools-bondhon_deactivate() {
    
}
register_deactivation_hook( __FILE__, 'newsmagtools-bondhon_deactivate' );


register_uninstall_hook(    __FILE__, 'newsmagtools-bondhon_function_to_run' );
