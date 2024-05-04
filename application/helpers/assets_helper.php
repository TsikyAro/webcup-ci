<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('img_loader')) {
	function img_loader($name, $format)
	{
		return base_url() . "/assets/img/" . $name . "." . $format;
	}
}

if (!function_exists('css_loader')) {
	function css_loader($name)
	{
		return base_url() . "/assets/css/" . $name . ".css";
	}
}

if (!function_exists('js_loader')) {
	function js_loader($name)
	{
		return base_url() . "/assets/js/" . $name . ".js";
	}
}
if (!function_exists('vendor_loader')) {
	function vendor_loader($name, $extension)
	{
		return base_url() . "/assets/vendor/" . $name . "." . $extension . "";
	}
}
