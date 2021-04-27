<?php
class PluginApiAccount{
  public function sign_check(){
    wfPlugin::includeonce('wf/account2');
    $wf_account2 = new PluginWfAccount2();
    $result = $wf_account2->api_sign_check();
    return $result;
  }
  public function sign_in($data){
    $data = new PluginWfArray($data);
    $settings = new PluginWfArray($data->get('settings'));
    /**
     * 
     */
    wfPlugin::includeonce('wf/account2');
    $wf_account2 = new PluginWfAccount2();
    $result = $wf_account2->api_sign_in(wfRequest::get('email'), wfRequest::get('password'), $settings);
    /**
     * 
     */
    return $result;
  }
  public function sign_out($data){
    $data = new PluginWfArray($data);
    $settings = new PluginWfArray($data->get('settings'));
    /**
     * 
     */
    wfPlugin::includeonce('wf/account2');
    $wf_account2 = new PluginWfAccount2();
    $result = $wf_account2->api_sign_out($settings);
    /**
     * 
     */
    return $result;
  }
}
