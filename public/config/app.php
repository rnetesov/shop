<?php

//routing const
const DEFAULT_CONTROLLER = 'site';
const DEFAULT_ACTION = 'index';
const PRETTY_URL = true;

define("SERVER_ADDRESS", 'http://' . $_SERVER['HTTP_HOST']. '/');

const REPOSITORY_DIR = __DIR__ .'/../repositories/';
const SERVICES_DIR = __DIR__.'/../services/';