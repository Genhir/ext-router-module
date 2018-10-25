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

namespace MvcCore\Ext\Routers\Modules;

class		Route
extends		\MvcCore\Route
implements	\MvcCore\Ext\Routers\Modules\IRoute
{
	use \MvcCore\Ext\Routers\Modules\Route\PropsGettersSetters;
	use \MvcCore\Ext\Routers\Modules\Route\Instancing;
	use \MvcCore\Ext\Routers\Modules\Route\Matching;
	use \MvcCore\Ext\Routers\Modules\Route\UrlBuilding;
}
