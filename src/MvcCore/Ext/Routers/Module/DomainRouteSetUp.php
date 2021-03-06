<?php

/**
 * MvcCore
 *
 * This source file is subject to the BSD 3 License
 * For the full copyright and license information, please view
 * the LICENSE.md file that are distributed with this source code.
 *
 * @copyright	Copyright (c) 2016 Tom Flídr (https://github.com/mvccore/mvccore)
 * @license		https://mvccore.github.io/docs/mvccore/4.0.0/LICENCE.md
 */

namespace MvcCore\Ext\Routers\Module;

trait DomainRouteSetUp
{
	/**
	 * This method is executed after module domain routing is done and before 
	 * standard routing. So there could be already routed/defined current module 
	 * domain route and that route could contain additional configuration for 
	 * normal routing. This method is the place where to put special values 
	 * from module domain route into router before standard routing. 
	 * @return void
	 */
	protected function domainRoutingSetUpRouterByDomainRoute () {
	}
}
