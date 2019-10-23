<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';

function JeeRss_install() {

}

function JeeRss_update() {
	foreach (eqLogic::byType('JeeRss') as $eqLogic) {
		$eqLogic->autoAjoutCommande();
		$eqLogic->setConfiguration('fg_color', "#0080FF");
		if ($eqLogic->getConfiguration('vitesse') == null) {
		    $eqLogic->setConfiguration('vitesse', 4);
		}
		if ($eqLogic->getConfiguration('nb_flux') == null) {
		    $eqLogic->setConfiguration('nb_flux', 5);
		}
		if ($eqLogic->getConfiguration('frequence') == null) {
		    $eqLogic->setConfiguration('frequence', "30m");
		}
		if ($eqLogic->getConfiguration('sens') == null) {
		    $eqLogic->setConfiguration('sens', "left");
		}
		if ($eqLogic->getConfiguration('espacement_flux') == null) {
		    $eqLogic->setConfiguration('espacement_flux', 1);
		}
		if ($eqLogic->getConfiguration('taille') == null) {
		    $eqLogic->setConfiguration('taille', 100);
		}
		$eqLogic->save();
	}
}


function JeeRss_remove() {
    
}

?>
