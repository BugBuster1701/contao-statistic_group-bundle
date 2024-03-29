<?php

/*
 * This file is part of a BugBuster Contao Bundle.
 *
 * @copyright  Glen Langer 2023 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Contao StatisticsGroup Bundle
 * @link       https://github.com/BugBuster1701/contao-statistic_group-bundle
 *
 * @license    LGPL-3.0-or-later
 */

use Contao\System;
use Symfony\Component\HttpFoundation\Request;

if (
	System::getContainer()->get('contao.routing.scope_matcher')
	->isBackendRequest(System::getContainer()->get('request_stack')
	->getCurrentRequest() ?? Request::create(''))
) {
	$GLOBALS['TL_CSS'][] = 'bundles/bugbusterstatisticsgroup/be_statisticsgroup.css';
}

// Banner
if (isset($GLOBALS['BE_MOD']['system']['bannerstat']))
{
	$GLOBALS['BE_MOD']['statistics']['bannerstat'] = array
	(
		'callback'   => $GLOBALS['BE_MOD']['system']['bannerstat']['callback'],
		'icon'       => $GLOBALS['BE_MOD']['system']['bannerstat']['icon'],
		'stylesheet' => $GLOBALS['BE_MOD']['system']['bannerstat']['stylesheet']
	);
	unset($GLOBALS['BE_MOD']['system']['bannerstat']);
}

// Visitors
if (isset($GLOBALS['BE_MOD']['system']['visitorstat']))
{
	$GLOBALS['BE_MOD']['statistics']['visitorstat'] = array
	(
		'callback'   => $GLOBALS['BE_MOD']['system']['visitorstat']['callback'],
		'icon'       => $GLOBALS['BE_MOD']['system']['visitorstat']['icon'],
		'stylesheet' => $GLOBALS['BE_MOD']['system']['visitorstat']['stylesheet']
	);
	unset($GLOBALS['BE_MOD']['system']['visitorstat']);
}

// Bot
if (isset($GLOBALS['BE_MOD']['system']['botstatistics']))
{
	$GLOBALS['BE_MOD']['statistics']['botstatistics'] = array
	(
		'callback'   => $GLOBALS['BE_MOD']['system']['botstatistics']['callback'],
		'icon'       => $GLOBALS['BE_MOD']['system']['botstatistics']['icon'],
		'stylesheet' => $GLOBALS['BE_MOD']['system']['botstatistics']['stylesheet']
	);
	unset($GLOBALS['BE_MOD']['system']['botstatistics']);
}

if (isset($GLOBALS['BE_MOD']['system']['dlstats']['callback']))
{
	$GLOBALS['BE_MOD']['statistics']['dlstats'] = array
	(
		'callback'   => $GLOBALS['BE_MOD']['system']['dlstats']['callback'],
		'icon'       => $GLOBALS['BE_MOD']['system']['dlstats']['icon'],
		'stylesheet' => $GLOBALS['BE_MOD']['system']['dlstats']['stylesheet']
	);
	unset($GLOBALS['BE_MOD']['system']['dlstats']);
}
