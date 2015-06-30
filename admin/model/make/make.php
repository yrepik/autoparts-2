<?php
class Modelmakemake extends Model {
	
	public function getMakeDetails() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "make order by makename ASC");
		return $query->rows;
	}
	public function getModelDetails() {
		$query = $this->db->query("SELECT mo.modelid, mo.makeid, mo.modelname, ma.makename from " . DB_PREFIX . "model mo inner join " . DB_PREFIX . "make as ma on mo.makeid = ma.makeid order by ma.makename ASC");
		return $query->rows;
	}
	public function getYearDetails() {
		$query = $this->db->query("SELECT mo.modelid, mo.makeid, mo.modelname, ma.makename,y.yearid,y.yearname from " . DB_PREFIX . "year y inner join " . DB_PREFIX . "make as ma on ma.makeid = y.makeid inner join " . DB_PREFIX . "model as mo on mo.modelid = y.modelid order by ma.makename ASC");
		return $query->rows;
	}
	public function getEngineDetails() {
		$query = $this->db->query("SELECT e.modelid, e.makeid,e.yearid,e.engineid, mo.modelname, ma.makename,y.yearname,e.enginename from " . DB_PREFIX . "engine e inner join " . DB_PREFIX . "make as ma on ma.makeid = e.makeid inner join " . DB_PREFIX . "model as mo on mo.modelid = e.modelid inner join " . DB_PREFIX . "year as y on y.yearid = e.yearid order by ma.makename ASC");
		return $query->rows;
	}
}
?>