<?php
namespace Mouf\Html\Widgets\EvoluGrid;

/**
 * Classes implementing this interface represent a column in an evolugrid that comes from one key in the displayed resultset.
 * To make things simple, this is a direct display of the value.
 * If you want advanced display (for instance if you want to display links, images, text with colors, etc...),
 * your class should implement the EvoluColumnJsInterface
 * 
 * @author david
 */
interface EvoluColumnKeyInterface extends EvoluColumnInterface {
	
	/**
	 * Returns the key to map to in the datagrid. If you are using the "SimpleColumn" class,
	 * the data associated to the key will be directly displayed.
	 *
	 * @return string
	 */
	public function getKey();
	
	/**
	 * Returns true if the column escapes HTML, and false otherwise.
	 *
	 * @return bool
	 */
	public function isEscapeHTML();
}