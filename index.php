<?php

// ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System                      //
//                       <https://www.xoops.org>                             //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
# ORIGINAL FILE INFO                                                         //
# Module            : Recommander                                            //
# Filename          : index.php                                              //
# Purpose           : Ce script affiche une page pour que les visiteurs recommandent le site//
# Version Xoops RC3 : Matthieu Bargheon                                      //
# email             : webmaster@toute-la-zik.fr.st | http://www.toute-la-zik.fr.st //
###############################################################################

include '../../mainfile.php';
include '../../header.php';
include 'include_var.php';

//standard for module name recognition
$ModName = 'Recommander';

echo $titre;

include 'recommander.html';

//Merci de ne pas retirer les crédits du script
echo "<p align='right'>" . $credits . '<p>';

require XOOPS_ROOT_PATH . '/footer.php';
