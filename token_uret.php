<?php 

function tokenUret($tuz=''){
	return md5(sha1(uniqid().$tuz));
}

echo tokenUret("karışık-kelime");