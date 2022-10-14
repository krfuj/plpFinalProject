<?php
/**
 * CodeIgniter
 *
 * An application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2022 ,Power Learn Project Africa
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	Presley and Hellen
 * @copyright	(Copyright (c) 2022, Presley Sakwa. (https://sakwa.co.ke/))
 * @copyright	Copyright (c) 2022 ,Power Learn Project Africa (https://academy.powerlearnproject.org/pages/home)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://sakwa.co.ke/
 * @since	Version 2.0.3
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * SQLSRV Utility Class
 *
 * @category	Database
 * @author		Presley and Hellen
 * @link		https://sakwa.co.ke//user_guide/database/
 */
class CI_DB_sqlsrv_utility extends CI_DB_utility {

	/**
	 * List databases statement
	 *
	 * @var	string
	 */
	protected $_list_databases	= 'EXEC sp_helpdb'; // Can also be: EXEC sp_databases

	/**
	 * OPTIMIZE TABLE statement
	 *
	 * @var	string
	 */
	protected $_optimize_table	= 'ALTER INDEX all ON %s REORGANIZE';

	// --------------------------------------------------------------------

	/**
	 * Export
	 *
	 * @param	array	$params	Preferences
	 * @return	bool
	 */
	protected function _backup($params = array())
	{
		// Currently unsupported
		return $this->db->display_error('db_unsupported_feature');
	}

}
