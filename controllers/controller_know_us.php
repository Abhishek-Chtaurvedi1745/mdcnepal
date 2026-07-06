<?
class _know_us extends controller {
	function init() {
	}

	function onload() {
		$obj_model_table= $this->app->load_model("doctor_category");
		$rs_types= $obj_model_table->execute("SELECT",false,"","status='Active'","sort_order ASC");
		$this->app->assign("rs_types",$rs_types);

		$obj_model_gallery = $this->app->load_model("gallery");
		$rs_gallery_data = $obj_model_gallery->execute("SELECT",false,"","set_at_home='Active' and status='Active'","gallery.id desc");
		$this->app->assign("rs_gallery_data",$rs_gallery_data);
	}
}
?>