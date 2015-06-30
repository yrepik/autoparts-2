<?php
class Modelmakemake extends Model {
	
	public function getMakeDetails() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "make order by makeId ASC");
		return $query->rows;
	}
	public function getModelDetails() {
		$query = $this->db->query("SELECT mo.modelId, mo.makeId, mo.ModelName, mo.CreatedDate, ma.MakeName from " . DB_PREFIX . "model as mo inner join " . DB_PREFIX . "make as ma where mo.makeId = ma.makeId order by mo.ModelName ASC");
		return $query->rows;
	}
}
?>