<?php
// login.php

require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'klayne.eu.auth0.com',
  'client_id' => 'g4SmvxXXFlZjBcssG77HWLEryr41G1yp',
  'client_secret' => 'YOUR_CLIENT_SECRET',
  'redirect_uri' => 'http://klaynie.rf.gd/test/',
  'scope' => 'openid profile email',
]);

$auth0->login();