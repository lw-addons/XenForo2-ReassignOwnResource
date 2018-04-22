<?php

namespace LiamW\ReassignOwnResource\XFRM\Entity;

class ResourceItem extends XFCP_ResourceItem
{
	public function canReassign(&$error = null)
	{
		$canReassign = parent::canReassign($error);

		return $canReassign || $this->hasPermission('lw_reassignBySelf');
	}
}