<?php
namespace Craft;

class Moltin_FilesService extends Moltin_BaseService
{

	public $apiService = 'File';

	/**
	 * Get a file.
	 *
	 * @param int    $id     ID of the file being retrieved.
	 *
	 * @return array|null    Results of API call
	 */
	public function get($id)
	{
		return $this->_apiCall(['Get', $id]);
	}

	/**
	 * Upload a file.
	 *
	 * @param int     $id    ID of the file being upload.
	 * @param file    $file  New file.
	 * @param string  $mime  Mime type of the file being upload.
	 * @param string  $name  Name of file.
	 *
	 * @return array|null    Results of API call
	 */
	public function upload($id, $file, $mime = null, $name = null)
	{
		return $this->_apiCall(['Upload', $id, $file, $mime, $name]);
	}

	/**
	 * Delete a file.
	 *
	 * @param int    $id     ID of the file being deleted.
	 *
	 * @return array|null    Results of API call
	 */
	public function delete($id)
	{
		return $this->_apiCall(['Delete', $id]);
	}

	/**
	 * ???
	 *
	 * @param array  $data   ???
	 *
	 * @return array|null    Results of API call
	 */
	public function order($data)
	{
		return $this->_apiCall(['Order', $data]);
	}

}
