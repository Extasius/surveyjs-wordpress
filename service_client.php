<?php

class WP_Service_Client {
    private $accessKey;

    function __construct() {
        $this->accessKey = WP_SJS_SettingsPage::get_access_key();
    }

    public function getSurveys() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'my_surveys';
        $query = "SELECT * FROM " . $table_name;
        
        return $wpdb->get_results( $query );
    }

}

?>