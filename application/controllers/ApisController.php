<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ApisController extends CI_Controller {

    public function get_all_ads() {
        $res = $this->Welcomes->get_all_post();
        $html = "";
        foreach($res as $dt) {
            $html .= "<option value='".$dt->id."'>".$dt->title."</option>";
        }
        echo $html;
    }

}
