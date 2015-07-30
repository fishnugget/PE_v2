<?php
App::uses('BaseAuthenticate', 'Controller/Component/Auth');

class ApiAuthenticate extends BaseAuthenticate {
  public function authenticate(CakeRequest $request, CakeResponse $response) {
    if ($request->data['username']=='' || $request->data['password']=='')
      return false;
    $data['login'] = $request->data['username'];
    $data['password'] = $request->data['password'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'http://api.pedistributors.com/user/login');
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $results = curl_exec($ch);
    $results = json_decode($results);
    if (!empty($_GET['debug']) && $_GET['debug'] == true) {
      debug($results);
      exit();
    }
    if ($results)
      if (!empty($results->BS) && strtolower($results->BS[3]) !== 'fail')
        return (array)$results;
      else
        return false;
    else
      return false;
  }
}
