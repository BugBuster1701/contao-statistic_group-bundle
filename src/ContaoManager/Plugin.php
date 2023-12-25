<?php

declare(strict_types=1);

/*
 * This file is part of a BugBuster Contao Bundle.
 *
 * @copyright  Glen Langer 2023 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Contao StatisticsGroup Bundle
 * @link       https://github.com/BugBuster1701/contao-statistic_group-bundle
 *
 * @license    LGPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace BugBuster\StatisticsGroupBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 */
class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('BugBuster\StatisticsGroupBundle\BugBusterStatisticsGroupBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle',
                    'BugBuster\BannerBundle\BugBusterBannerBundle',
                    'BugBuster\DlstatsBundle\BugBusterDlstatsBundle',
                    'BugBuster\VisitorsBundle\BugBusterVisitorsBundle',
                    'BugBuster\BotStatisticsBundle\BugBusterBotStatisticsBundle'])
                ->setReplace(['zz_statistic_group']),
        ];
    }
}
