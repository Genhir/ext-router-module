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

interface IRoute
{
    /**
     * 
     */
    const CONFIG_ALLOWED_MODULES		= 'allowedModules';

    /**
     * 
     */
    const CONFIG_ALLOWED_LOCALIZATIONS	= 'allowedLocalizations';

    /**
     * 
     */
    const CONFIG_ALLOWED_MEDIA_VERSIONS	= 'allowedMediaVersions';
}
