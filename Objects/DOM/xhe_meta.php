<?php
////////////////////////////////////////////////////// Meta /////////////////////////////////////////////////
namespace XWEB;
class XHEMeta  extends XHEBaseDOMVisual
{
	/////////////////////////////////////// ��������� ������� //////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Meta";
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>